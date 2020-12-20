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

include('../CONFIG.php');
include('../src/DB/DBTransactions.php');
include('../src/DB/DBContracts.php');
include('../src/DB/DBBlocks.php');
include('../src/DB/DBBase.php');
include('../src/DB/DB.php');
include('../src/ColorsCLI.php');
include('../src/Display.php');
include('../src/Subprocess.php');
include('../src/BootstrapNode.php');
include('../src/ArgvParser.php');
include('../src/Tools.php');
include('../src/Wallet.php');
include('../src/Block.php');
include('../src/Blockchain.php');
include('../src/Gossip.php');
include('../src/Key.php');
include('../src/Pki.php');
include('../src/PoW.php');
include('../src/REGEX.php');
include('../src/Transaction.php');
include('../src/GenesisBlock.php');
include('../src/Peer.php');
include('../src/Miner.php');
include('../src/SmartContract.php');
include('../src/SmartContractStateMachine.php');
include('../src/J4FVM/J4FVMTools.php');
include('../src/J4FVM/J4FVMSubprocess.php');
include('../src/uint256.php');
include('../src/Socket.php');
include('../src/Gas.php');
include('../funity/js.php');

require __DIR__ . DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

use React\Socket\ConnectionInterface;

date_default_timezone_set("UTC");

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

//Get Input steam data
$rawData = file_get_contents("php://input");
$data = json_decode($rawData, true);

//If not have data, check if have POST or GET request
if ($data != null) {
    $id = $data['id'];
    $method = $data['method'];
    $params = $data['params'];
} else {
    $id = (isset($_REQUEST['id'])) ? $_REQUEST['id']:null;
    $method = (isset($_REQUEST['method'])) ? $_REQUEST['method']:'';
    $params = (isset($_POST['params'])) ? $_POST['params']:$_GET;
}

//Instantiate response array JSON-RPC
$response_jsonrpc = array('jsonrpc'=>'2.0');

//Check if have request ID
if ($id != null) {

    //Check if NODE is alive
    if (@file_exists(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR.Subprocess::$FILE_MAIN_THREAD_CLOCK)) {
        $mainThreadTime = @file_get_contents(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR.Subprocess::$FILE_MAIN_THREAD_CLOCK);
        $minedTime = date_diff(
            date_create(date('Y-m-d H:i:s', $mainThreadTime)),
            date_create(date('Y-m-d H:i:s', time()))
        );
        $diffTime = $minedTime->format('%s');
        if ($diffTime >= 120) {

            $response_jsonrpc['error'] = array(
                'code'    => -100,
                'message' => 'Node not active'
            );
            die(json_encode($response_jsonrpc));
        }
	}

    //Check if have method
    if (strlen($method) > 0) {

        if (is_array($params)) {

            //Instantiate database blockchain
            $chaindata = new DB();

			$isTestnet = ($chaindata->GetConfig('network') == 'testnet') ? true:false;

            switch ($method) {

                case 'node_version':
                    $response_jsonrpc['result'] = $chaindata->GetConfig('node_version');
                break;

                case 'node_network':
                    $currentNetwork = 'mainnet';

                    $nodeNetwork = $chaindata->GetConfig('network');
                    if (strlen($nodeNetwork) > 0)
                        $currentNetwork = $nodeNetwork;

                    $response_jsonrpc['result'] = $currentNetwork;
                break;

                case 'node_peerCount':
                    $response_jsonrpc['result'] = count($chaindata->GetAllPeers());
                break;

                case 'node_listening':
                    $listening = false;

                    $nodeListening = $chaindata->GetConfig('p2p');
                    if (strlen($nodeListening) > 0 && $nodeListening == 'on')
                        $listening = true;

                    $response_jsonrpc['result'] = $listening;
                break;

                case 'node_syncing':
                    $syncing = false;

                    $nodeSyncing = $chaindata->GetConfig('syncing');
                    if (strlen($nodeSyncing) > 0 && $nodeSyncing == 'on')
                        $syncing = true;
					if ($syncing) {

						$highestBlock = $chaindata->GetConfig('highestBlock');

						$response_jsonrpc['result'] = array(
							"currentBlock" => $chaindata->GetCurrentBlockNum(),
							"highestBlock" => $highestBlock,
						);
					}
					else {
						$response_jsonrpc['result'] = $syncing;
					}
                break;

                case 'node_mining':
                    $mining = false;

                    $nodeMining = $chaindata->GetConfig('miner');
                    if (strlen($nodeMining) > 0 && $nodeMining == 'on')
                        $mining = true;

                    $response_jsonrpc['result'] = $mining;
                break;

                case 'node_hashrate':
                    $hashrate = "0 H/s";

                    $nodeHashrate = $chaindata->GetConfig('hashrate');
                    if (strlen($nodeHashrate) > 0)
                        $hashrate = $nodeHashrate;

                    $response_jsonrpc['result'] = $hashrate;
                break;

                case 'j4f_coinbase':
                    $wallet = "";

                    $walletCoinBase = Wallet::GetCoinbase();
                    if (is_array($walletCoinBase) && !empty($walletCoinBase)) {
                        $walletcb = Wallet::GetWalletAddressFromPubKey($walletCoinBase['public']);
                        if ($walletcb != null)
                            $wallet = $walletcb;
                    }

          