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

class Peer {

    /**
     * Sync blocks received by peer
     *
     * @param Gossip $gossip
     * @param $nextBlocksToSyncFromPeer
     * @param $currentBlocks
     * @param $totalBlocks
     * @param $ipAndPort
     *
     * @return bool
     */
    public static function SyncBlocks(Gossip &$gossip,array $nextBlocksToSyncFromPeer,int $currentBlocks,int $totalBlocks,string $ipAndPort) : bool {
        $blocksSynced = 0;
        $blockSynced = null;
        $transactionsSynced = null;

        //Check if node is connected on testnet or mainnet
        $isTestNet = ($gossip->chaindata->GetNetwork() == "testnet") ? true:false;

        if (is_arra