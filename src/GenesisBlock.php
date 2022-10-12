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

class GenesisBlock {

    /**
     * Mine a GENESIS BLOCK
     *
     * @param DB $chaindata
     * @param string $coinbase
     * @param string $privKey
     * @param bool $isTestNet
     * @param int $amount
     */
    public static function make(DB &$chaindata,string $coinbase,string $privKey,bool $isTestNet,string $amount="50") : void {

        @unlink(Tools::GetBaseDir()."tmp".DIRECTORY_SEPARATOR.Subprocess::$FILE_STOP_MINING);
        @unlink(Tools::GetBaseDir()."tmp".DIRECTORY_SEPARATOR.Subprocess::$FILE_MINERS_STARTED);
        @unlink(Tools::GetBaseDir()."tmp".DIRECTORY_SEPARATOR.Subprocess::$FILE_TX_INFO);

        //We check that there is no block GENESIS
        $GENESIS_block_chaindata = $chaindata->db->query("SELECT height, block_hash FROM blocks WHERE height = 0")->fetch_assoc();
        if (empty($GENESIS_block_chaindata)) {
            //we show the message that we generated the GENESIS block
            Display::print("Generating %G%GENESIS%W% - Block %G%#0");
            Display::print("Minning Block %G%#0");

			//We created the GENESIS block by MainThread
			if (MINER_MAX_SUBPROCESS <= 1)
				self::makeMainThread($chaindata,$coinbase, $privKey,$amount,$isTestNet);

			//We created the GENESIS block by miner subprocess
			else
				self::makeWithSubprocess($chaindata, $coinbase, $privKey,$amount,$isTestNet);

        } else {
            //we show the message that there is already a block genesis
            Display::print("%LR%ERROR");
            Display::print("There is alrady exist a %G%GENESIS%W% Block");
            Display::print("Block #0 -> Hash: %LG%".$GENESIS_block_chaindata['block_hash']);
            if (IS_WIN)
                readline("Press any key to close close window");
            exit();
        }
    }

	/**
     * Mine a GENESIS BLOCK on MainThread
     *
     * @param DB $chaindata
     * @param string $coinbase
     * @param string $privKey
     * @param int $amount
     * @param bool $isTestNet
     */
	public static function makeMainThread(DB &$chaindata,string $coinbase,string $privKey,string $amount,bool $isTestNet) : void {
		//We created the GENESIS block on mainthread
		$genesisBlock = $chaindata->GetGenesisBlock();
		$lastBlock = $chaindata->GetLastBlock();

		$transactions = Transaction::withGas("",$coinbase,$amount,$privKey,"","If you want different results, do not do the same things", 21000, "0");
		$transactions = [$transactions];

		//Define block
		$genesisBlock = new Block(0,"",2,$transactions,$lastBlock,$genesisBlock,0,1);

		//Save transactions for this block
        Tools::writeFile(Tools::GetBaseDir()."tmp".DIRECTORY_SEPARATOR.Subprocess::$FILE_TX_INFO,Tools::str2hex(@serialize($transactions)));
        Tools::writeFile(Tools::GetBaseDir()."tmp".DIRECTORY_SEPARATOR.Subprocess::$FILE_MINERS_STARTED);

		//Mine block
		$genesisBlock->mine(0,$isTestNet,false);

		if (!$genesisBlock->isValid()) {
			Display::_error("%LR%GENESIS%W% no valid");
			Display::_error("%LR%HASH%W% " . $genesisBlock->hash);
			Display::_error("%LR%PREVIOUS%W% " . $genesisBlock->previous);
			Display::_error("%LR%DIFFICULTY%W% " . $genesisBlock->difficulty);
			Display::_error("%LR%NONCE%W% " . $genesisBlock->nonce);
			//Display::_error("%LR%HASH%W% " . $genesisBlock->info);
			if (IS_WIN)
				readline("Press any Enter to close close window");
			exit();
		}

		//Save genesis block into blockchain
		$chaindata->addBlock(0,$genesisBlock);

		//Display message
		Display::ShowMessageNewBlock('mined',0,$genesisBlock);

		//We show the information of the mined block
		Display::print("New Block mined with hash: %G%".$genesisBlock->hash);
		Display::print("Nonce of Block: %G%".$genesisBlock->nonce);
		Display::print("Transactions in Block: %LG%".count($genesisBlock->transactions));

		Display::print("%G%GENESIS%W% Block was successfully generated");
		Display::_br();
		if (IS_WIN)
			readline("Press any Enter to close close window");
		exit();
	}

	/**
     * Mine a GENESIS BLOCK on Subprocess
     *
     * @param DB $chaindata
     * @param string $coinbase
     * @param string $privKey
     * @param int $amount
     * @param bool $isTestNet
     */
	public static function makeWithSubprocess(DB &$chaindata,string $coinbase,string $privKey,string $amount,bool $isTestNet) : void {
		//Start subprocess to make Genesis Block
		Block::createGenesisWithSubProcess($coinbase, $privKey,$amount,$isTestNet);

		//Wait for block to be generated
		while(true) {

			//Update MainThread time for subprocess
			Tools::writeFile(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR.Subprocess::$FILE_MAIN_THREAD_CLOCK,time());

			//If found new block
			if (@file_exists(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR.Subprocess::$FILE_NEW_BLOCK)) {
				$genesisBlock = Tools::objectToObject(@unserialize(Tools::hex2str(file_get_contents(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR.Subprocess::$FILE_NEW_BLOCK))),'Block');

				if (!$genesisBlock->isValid()) {
					Display::_error("%LR%GENESIS%W% no valid");
					Display::_error("%LR%HASH%W% " . $genesisBlock->hash);
					Display::_error("%LR%PREVIOUS%W% " . $genesisBlock->previous);
					Display::_error(