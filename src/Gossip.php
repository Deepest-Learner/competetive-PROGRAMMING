<?php
// Copyright 2018 MaTaXeToS
// Copyright 2019-2020 The Just4Fun Authors
// This file is part of the J4FCore library.
//
// The J4FCore library is free software: you can redistribute it and/or modify
// it under the terms of the GNU Lesser General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// The J4FCore library is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
// GNU Lesser General Public License for more details.
//
// You should have received a copy of the GNU Lesser General Public License
// along with the J4FCore library. If not, see <http://www.gnu.org/licenses/>.

use React\Socket\ConnectionInterface;

final class Gossip {

    public $name;
    public $key;
    public $port;
    public $ip;
    public $enable_mine;
    public $pending_transactions;
    public $coinbase;
    public $syncing;
    public $config;
    public $peers = [];
    public $difficulty;
    public $isTestNet;

    /** @var DB $chaindata */
    public $chaindata;
    private $make_genesis;
    private $bootstrap_node;

    private $loop_x5 = 0;
	private $loop_x10 = 0;
	private $loop_x15 = 0;

	public $isBusy = false;

    /**
     * Gossip constructor
     *
     * @param DB        $db
     * @param string    $name
     * @param string    $ip
     * @param string    $port
     * @param bool      $enable_mine
     * @param bool      $make_genesis_block
     * @param bool      $bootstrap_node
     * @param bool      $isTestNet
     */
    public function __construct(DB $db,string $name,string $ip,string $port,bool $enable_mine,bool $make_genesis_block=false,bool $bootstrap_node = false,bool $isTestNet=false, int $sanityBlockchain=-1) {
		//Clear screen
		Display::ClearScreen();

		//Init Display message
		Display::print("Welcome to the %G%J4F node%W% - %G%Version%W%: " . VERSION);
		Display::print("Maximum peer count                       %G%value%W%=".PEERS_MAX);
		Display::print("PeerID %G%".Tools::GetIdFromIpAndPort($ip,$port));

		$this->make_genesis = $make_genesis_block;
		$this->bootstrap_node = $bootstrap_node;
		$this->isTestNet = $isTestNet;
		$this->enable_mine = $enable_mine;

		//Save node info
		$db->SetConfig('node_name',$name);
		$db->SetConfig('node_ip',$ip);
		$db->SetConfig('node_port',$port);
		$db->SetConfig('node_version',VERSION);

		//Set network config
		if ($this->isTestNet)
			$db->SetConfig('network','testnet');
		else
			$db->SetConfig('network','mainnet');

		//Set miner config
		if ($this->enable_mine)
			$db->SetConfig('miner','on');
		else
			$db->SetConfig('miner','off');

		//Set bootstrap config
		if ($this->bootstrap_node)
			$db->SetConfig('isBootstrap','on');
		else
			$db->SetConfig('isBootstrap','off');

		//Set default hashrate to 0
		$db->SetConfig('hashrate','0');

		//We declare that we are not synchronizing
		$this->syncing = false;
		$db->SetConfig('syncing','off');
		$db->SetConfig('p2p','off');

		$this->name = $name;
		$this->ip = $ip;
		$this->port = $port;

		//We create default folders
		Tools::MakeDataDirectory();

		//Clear TMP files
		Tools::clearTmpFolder();
		@unlink(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR.'node_log');
		@unlink(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR."sync_with_peer");
		@unlink(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR."sanity");

		//Default miners stopped
		Tools::writeFile(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR.Subprocess::$FILE_STOP_MINING);

		//Update MainThread time for subprocess
		Tools::writeFile(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR.Subprocess::$FILE_MAIN_THREAD_CLOCK,time());

		//Instance the pointer to the chaindata and get config
		$this->chaindata = $db;
		$this->config = $this->chaindata->GetAllConfig();

		//We started with that we do not have pending transactions
		$this->pending_transactions = array();

		//We create the Wallet for the node
		$this->key = new Key(Wallet::LoadOrCreate('coinbase',"null"));

		if (strlen($this->key->pubKey) != 451) {
			Display::_error("Can't get the public/private key");
			Display::_error("Make sure you have openssl installed and activated in php");
			exit();
		}
		$this->coinbase = Wallet::GetWalletAddressFromPubKey($this->key->pubKey);
		Display::print("Coinbase detected: %LG%".$this->coinbase);

		//Save pointer of Gossip
		$gossip = $this;

		if ($sanityBlockchain > 0) {
			$gossip->SanityFromBlockHeight($sanityBlockchain);
			exit();
		}

		//Check integrity of last 20 blocks
		if ($this->chaindata->GetCurrentBlockNum() > 0) {
			Display::print("%Y%CHECKING INTEGRITY%W% of last 20 blocks");
			Blockchain::checkIntegrity($gossip->chaindata,null,20);
		}

		$loop = React\EventLoop\Factory::create();

		$config = React\Dns\Config\Config::loadSystemConfigBlocking();
		$server = $config->nameservers ? reset($config->nameservers) : '8.8.8.8';

		$factory = new React\Dns\Resolver\Factory();
		$dns = $factory->create($server, $loop);

		//Delayed Init Function
		$loop->addTimer(0, function () use ($gossip) {
	        //WE GENERATE THE GENESIS BLOCK
	        if ($gossip->make_genesis) {
	            if(!$gossip->isTestNet)
	                GenesisBlock::make($gossip->chaindata,$gossip->coinbase,$gossip->key->privKey,$gossip->isTestNet,bcadd("2","0",18));
	            else
	                GenesisBlock::make($gossip->chaindata,$gossip->coinbase,$gossip->key->privKey,$gossip->isTestNet,bcadd("99999999999999999999999999999999","0",18));
	        }

	        //We are a BOOTSTRAP node
	        else if ($gossip->bootstrap_node) {
	            if ($gossip->isTestNet)
	                Display::print("%Y%BOOTSTRAP NODE %W%(%G%TESTNET%W%) loaded successfully");
	            else
	                Display::print("%Y%BOOTSTRAP NODE %W%loaded successfully");

	            $lastBlock = $gossip->chaindata->GetLastBlock(false);

	            Display::print("Height: %G%".$lastBlock['height']);

	            $gossip->difficulty = Blockchain::checkDifficulty($gossip->chaindata,null, $gossip->isTestNet)[0];

	            Display::print("LastBlock: %G%".$lastBlock['block_hash']);
	            Display::print("Difficulty: %G%".$gossip->difficulty);
	            Display::print("Current peers: %G%".count($gossip->chaindata->GetAllPeers()));

	            //Check peers status
	            $gossip->CheckConnectionWithPeers($gossip);
	        }

	        //If we already have information, we establish the loaded state
	        else {
				//Check if have peers
				$peers = $gossip->chaindata->GetAllPeers();
				if (count($peers) == 0) {
					//If no have peers, connect to boostrap and get peers
					$gossip->_connectToBootstrapNode($gossip);
					//We ask the BootstrapNode to give us the information of the connected peers
	                $peersNode = BootstrapNode::GetPeers($gossip->chaindata,$gossip->isTestNet);
					$this->ConnectToBootstrapPeers($peersNode);
				}
				else {
					//We have peers, connect to all peers
					$this->ConnectToMyPeers($peers);
				}

				//If can't connect to any peers, try to connect to bootstrap
				if (count($gossip->peers) == 0) {
					$gossip->_connectToBootstrapNode($gossip);
				}

				//Get more peers from my current peers list (connected)
				$this->GetMorePeersFromMyPeers();

				//Check if have required peers to run node
                if (count($gossip->peers) < PEERS_REQUIRED) {
                    Display::_error("there are not enough peers       count=".count($gossip->peers)."   required=".PEERS_REQUIRED);
                    if (IS_WIN)
                        readline("Press any Enter to close close window");
                    exit();
                }

				//Select random peer to check status
				$ipAndPort = Peer::GetHighestBlockFromPeers($gossip);
				$lastBlock_PeerNode = Peer::GetLastBlockNum($ipAndPort);
                $lastBlock_LocalNode = $this->chaindata->GetCurrentBlockNum();

                //We check if we need to synchronize or not
                if ($lastBlock_LocalNode < $lastBlock_PeerNode && $lastBlock_PeerNode != -1) {
                    Display::print("%LR%DeSync detected %W%- Downloading blocks (%G%".$lastBlock_LocalNode."%W%/%Y%".$lastBlock_PeerNode.")");

					//We declare that we are synchronizing
                    $gossip->syncing = true;

                    $gossip->chaindata->SetConfig('syncing','on');

					//Select a peer to sync
					$ipPort = explode(':',$ipAndPort);
					Display::print("Selected peer to sync -> %G%".Tools::GetIdFromIpAndPort($ipPort[0],$ipPort[1]));
					Tools::writeLog('Selected peer to sync			%G%'.Tools::GetIdFromIpAndPort($ipPort[0],$ipPort[1]));
				}
				else if ($lastBlock_LocalNode >= $lastBlock_PeerNode && $lastBlock_PeerNode != -1) {
					$gossip->syncing = false;
					$gossip->chaindata->SetConfig('syncing','off');

					//Delete sync file
					@unlink(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR."sync_with_peer");
				}
				else {
					$gossip->syncing = true;
					$gossip->chaindata->SetConfig('syncing','on');

					@unlink(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR."sync_with_peer");
					$ipAndPortToSync = Peer::GetHighestBlockFromPeers($gossip);
					Tools::writeFile(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR."sync_with_peer",$ipAndPortToSync);
				}

				//If we do not have the GENESIS block, we download it from Peer (HighestChain)
				if ($lastBlock_LocalNode == 0) {
					//Make Genesis from Peer
					$genesis_block_peer = Peer::GetGenesisBlock($ipAndPort);
					$genesisMakeBlockStatus = GenesisBlock::makeFromPeer($gossip->chaindata,$genesis_block_peer);

					if ($genesisMakeBlockStatus)
						Display::print("%Y%Imported%W% GENESIS block header               %G%count%W%=1");
					else {
						Display::_error("Can't make GENESIS block");
						if (IS_WIN)
							readline("Press any Enter to close close window");
						exit();
					}
				}
				else {
					$lastBlock = $gossip->chaindata->GetLastBlock(false);

		            Display::print("Height: %G%".$lastBlock['height']);

					$gossip->difficulty = Blockchain::checkDifficulty($gossip->chaindata,null,$gossip->isTestNet)[0];

		            Display::print("LastBlock: %G%".$lastBlock['block_hash']);
		            Display::print("Difficulty: %G%".$gossip->difficulty);
		            Display::print("Current peers: %G%".count($gossip->chaindata->GetAllPeers()));
				}

                //Check if have same GENESIS block from peer
                $genesis_block_peer = Peer::GetGenesisBlock($ipAndPort);
                $genesis_block_local = $gossip->chaindata->GetGenesisBlock();
                if ($genesis_block_local['block_hash'] != $genesis_block_peer['block_hash']) {
                    Display::_error("%Y%GENESIS BLOCK NO MATCH%W%    genesis block does not match the block genesis of peer");
                    if (IS_WIN)
                        readline("Press any Enter to close close window");
                    exit();
                }
	        }

			if ($gossip->make_genesis)
				return;

			//Get pending transactions from bootstrap
			$gossip->GetPendingTransactions();

		});

		//Check peer status every 120s
		$loop->addPeriodicTimer(120, function() use (&$gossip) {
			$gossip->CheckConnectionWithPeers($gossip);

			//If isnt bootstrap
			if (!$gossip->bootstrap_node) {
				$ipAndPort = Peer::GetHighestBlockFromPeers($gossip);
				$lastBlock_PeerNode = Peer::GetLastBlockNum($ipAndPort);
				$lastBlock_LocalNode = $gossip->chaindata->GetCurrentBlockNum();

				//We check if we need to synchronize or not
				if ($lastBlock_LocalNode < $lastBlock_PeerNode && $lastBlock_PeerNode != -1) {
					//If have miner enabled, stop it and start sync
					if ($gossip->enable_mine && @file_exists(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR.Subprocess::$FILE_MINERS_STARTED)) {
						//Stop minning subprocess
						Tools::clearTmpFolder();
						Tools::writeFile(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR.Subprocess::$FILE_STOP_MINING);
					}

					Tools::writeFile(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR."sync_with_peer", $ipAndPort);

					//We declare that we are synchronizing
					$gossip->syncing = true;

					$gossip->chaindata->SetConfig('syncing','on');
				}
				else if ($lastBlock_LocalNode >= $lastBlock_PeerNode && $lastBlock_PeerNode != -1) {

					$gossip->syncing = false;
					$gossip->chaindata->SetConfig('syncing','off');

					//Delete sync file
					@unlink(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR."sync_with_peer");
				}
				else {
					$gossip->syncing = true;
					$gossip->chaindata->SetConfig('syncing','on');

					@unlink(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR."sync_with_peer");
					$ipAndPortToSync = Peer::GetHighestBlockFromPeers($gossip);
					Tools::writeFile(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR."sync_with_peer",$ipAndPortToSync);
				}
			}
		});

		//Loop every 5s
		$loop->addPeriodicTimer(5, function() use (&$gossip) {
			//If have miners show log
			if ($gossip->enable_mine)
				$this->ShowInfoSubprocessMiners();

			if ($gossip->syncing)
				return;

			if (!$gossip->bootstrap_node)
				return;

			//Get Pending transactions from network
			$gossip->GetPendingTransactions();
		});

		//General loop of node
		$loop->addPeriodicTimer(1, function() use (&$gossip) {

			//We establish the title of the process
			$gossip->SetTitleProcess();

			//Update MainThread time for subprocess
			Tools::writeFile(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR.Subprocess::$FILE_MAIN_THREAD_CLOCK,time());

			if (DISPLAY_DEBUG && DISPLAY_DEBUG_LEVEL >= 3)
				$gossip->ShowLogSubprocess();

			//Check if need to sync with any peer
			if (@file_exists(Tools::GetBaseDir()."tmp".DIRECTORY_SEPARATOR."sync_with_peer")) {
				$gossip->syncing = true;
			}

			//Check if need to sanity (From subprocess propagation)
			if (@file_exists(Tools::GetBaseDir()."tmp".DIRECTORY_SEPARATOR."sanity")) {
				$gossip->busy = true;

				$lastBlock_LocalNode = $gossip->chaindata->GetCurrentBlockNum();

				//Micro-Sanity and resync
				Display::_warning("Started Micro-Sanity       %G%height%W%=".$lastBlock_LocalNode."	%G%newHeight%W%=".($lastBlock_LocalNode-1));
				$gossip->chaindata->RemoveLastBlocksFrom(($lastBlock_LocalNode-1));
				Display::_warning("Finished Micro-Sanity, re-sync with peer");
				@unlink(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR."sanity");
				$gossip->busy = false;
			}

			//If we are not synchronizing
			if (!$gossip->syncing) {

				//We have miner, start miner process
				if ($gossip->enable_mine) {
					$gossip->mineProcess();
				}
			}

			//If we are synchronizing and we are connected with the bootstrap
			else if ($gossip->syncing) {

				//Select a peer to sync
				if (@file_exists(Tools::GetBaseDir()."tmp".DIRECTORY_SEPARATOR."sync_with_peer"))
					$ipAndPort = @file_get_contents(Tools::GetBaseDir()."tmp".DIRECTORY_SEPARATOR."sync_with_peer");
				else
					$ipAndPort = Peer::GetHighestBlockFromPeers($gossip);

				//We prevent it from synchronizing itself
				if ($ipAndPort == $gossip->ip . ":" . $gossip->port) {
					$ipAndPort = "";
					$gossip->syncing = false;
					//Delete sync file
					@unlink(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR."sync_with_peer");
				}

				//Check if have ip and port
				if (strlen($ipAndPort) > 0) {

					//We get the last block from peer
					$lastBlo