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
    if (@file_exists(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR.Subprocess::$FILE_MAIN_THREAD_CLOCK)