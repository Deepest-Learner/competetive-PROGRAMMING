
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

include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'CONFIG.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'DB'.DIRECTORY_SEPARATOR.'DBTransactions.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'DB'.DIRECTORY_SEPARATOR.'DBContracts.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'DB'.DIRECTORY_SEPARATOR.'DBBlocks.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'DB'.DIRECTORY_SEPARATOR.'DBBase.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'DB'.DIRECTORY_SEPARATOR.'DB.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'ColorsCLI.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Display.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Subprocess.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'BootstrapNode.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'ArgvParser.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Tools.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'REGEX.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Wallet.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Block.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Blockchain.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Gossip.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Key.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Pki.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'PoW.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Transaction.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'GenesisBlock.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Peer.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Socket.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'uint256.php');
include(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Gas.php');
require __DIR__ . DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

use React\Socket\ConnectionInterface;

//Setting timezone to UTC
date_default_timezone_set("UTC");

if (!isset($argv[1]))
    die("ID not defined");

if (!isset($argv[2]))
    die("Peer IP not defined");

if (!isset($argv[3]))
    die("Peer PORT not defined");

if (!isset($argv[4]))
    die("Num retrys not defined");

$id = $argv[1];
$peerIP = $argv[2];
$peerPORT = $argv[3];
$numRetrys = $argv[4];

//Load Block class from cache file
$blockMined = Tools::objectToObject(@unserialize(Tools::hex2str(@file_get_contents(Tools::GetBaseDir()."tmp".DIRECTORY_SEPARATOR.Subprocess::$FILE_PROPAGATE_BLOCK))),"Block");
if ($blockMined != null && is_object($blockMined)) {

    $chaindata = new DB();

	Tools::writeLog('SUBPROCESS::Start new propagation to '.$peerIP.':'.$peerPORT.' | BLOCK #' . $chaindata->GetCurrentBlockNum());

	// Get My Node info
	$myNodeIp = $chaindata->GetConfig('node_ip');
	$myNodePort = $chaindata->GetConfig('node_port');

    $infoToSend = array(
        'action' => 'MINEDBLOCK',
        'hash_previous' => $blockMined->previous,
		'block' => @serialize($blockMined),
		'height' => $chaindata->GetCurrentBlockNum(),
		'node_ip' => $myNodeIp,
		'node_port' => $myNodePort,
    );

	//$returnFromPeer = Socket::sendMessage($peerIP,$peerPORT,$infoToSend);
	if (Socket::isAlive($peerIP,$peerPORT)) {
		$returnFromPeer = Socket::sendMessageWithReturn($peerIP,$peerPORT,$infoToSend,2);
		if ($returnFromPeer != null && isset($returnFromPeer['status']) && $returnFromPeer['status'] == true) {

			Tools::writeLog('SUBPROCESS::[PROPAGATION][BLOCK #'.$chaindata->GetCurrentBlockNum().'] '.$peerIP.':'.$peerPORT." --> OK | " . $returnFromPeer['result'] . " | Message: " . $returnFromPeer['message']);

			//Peer suggest sanity on my blockchain
			if ($returnFromPeer['result'] == 'sanity') {
				Tools::writeFile(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR."sync_with_peer",$peerIP.":".$peerPORT);
				Tools::writeFile(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR."sanity","");
			}
		}
		else {

			if (isset($returnFromPeer['status']) && $returnFromPeer['status'] == false) {

				Tools::writeLog('SUBPROCESS::[PROPAGATION] '.$peerIP.':'.$peerPORT." --> ERROR FALSE");
				//Tools::writeLog('SUBPROCESS::[PROPAGATION] '.$peerIP.':'.$peerPORT." --> sanity else");
				//Tools::writeFile(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR."sync_with_peer",$peerIP.":".$peerPORT);
				//Tools::writeFile(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR."sanity","");
			}
			else {
				Tools::writeLog('SUBPROCESS::[PROPAGATION] '.$peerIP.':'.$peerPORT." --> UKNOWN ERROR");
				//Tools::writeFile(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR."sync_with_peer",$peerIP.":".$peerPORT);
				//Tools::writeFile(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR."sanity","");
			}
		}
	}
}
die();