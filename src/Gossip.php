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
     * 