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

class DB extends DBBase {

    public $db;

    /**
     * DB constructor.
     */
    public function __construct() {

        //We create or load the database
        $this->db = @new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME, DB_PORT);
		if (isset($this->db->connect_error) && strlen($this->db->connect_error) > 0) {
			Display::_error('Database ERROR');
			Display::_error($this->db->connect_error);
			if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
				Display::_error("Press Enter to close close window");
				readline();
			}
		}
    }

    /**
     * Get current network
     *
     * @return string
     */
    public function GetNetwork() : string {
        $currentNetwork = $this->db->query("SELECT val FROM config WHERE cfg = 'network';")->fetch_assoc();
        if (!empty($currentNetwork))
            return strtolower($currentNetwork['val']);
        return "mainnet";
    }

    /**
     * @return array
     */
    public function GetBootstrapNode() : array {
        $info_mined_blocks_by_peer = $this->db->query("SELECT * FROM peers ORDER BY id ASC LIMIT 1;")->fetch_assoc();
        if (!empty($info_mined_blocks_by_peer)) {
            return $info_mined_blocks_by_peer;
        }
        return null;
    }

    /**
     * Add a peer to the chaindata
     *
     * @param $ip
     * @param $port
     * @return bool
     */
    public function addPeer(string $ip,string $port) : bool {
        $info_mined_blocks_by_peer = $this->db->query("SELECT ip FROM peers WHERE ip = '".$ip."' AND port = '".$port."';")->fetch_assoc();
        if (empty($info_mined_blocks_by_peer)) {
            $this->db->query("INSERT INTO peers (ip,port) VALUES ('".$ip."', '".$port."');");
            return true;
        }
        return false;
    }

    /**
     * Returns whether or not we have this peer saved in the chaindata
     *
     * @param $ip
     * @param $port
     * @return bool
     */
    public function haveThisPeer(string $ip,string $port) : bool {
        $info_mined_blocks_by_peer = $this->db->query("SELECT ip FROM peers WHERE ip = '".$ip."' AND port = '".$port."';")->fetch_assoc();
        if (!empty($info_mined_blocks_by_peer)) {
            return true;
        }
        return false;
    }

    /**
     * Save config on database
     *
     * @param $ipAndPort
     */
    public function addPeerToBlackList(string $ipAndPort) : void {
        //Get IP and Port
        $tmp = explode(':',$ipAndPort);
        $ip = $tmp[0];
        $port = $tmp[1];

        if (strlen($ip) > 0 && strlen($port) > 0) {
            $currentInfoPeer = $this->db->query("SELECT id FROM peers WHERE ip = '".$ip."' AND port = '".$port."';")->fetch_assoc();

            //Ban peer 10min
            $blackListTime = time() + (5 * 60);
            if (empty($currentInfoPeer)) {
                $this->db->query("INSERT INTO peers (ip,port,blacklist) VALUES ('".$ip."', '".$port."', '".$blackListTime."');");
            }
            else {
                $this->db->query("UPDATE peers SET blacklist='".$blackListTime."' WHERE ip = '".$ip."' AND port = '".$port."';");
            }
        }
    }

    /**
     * Remove a peer from the chaindata
     *
     * @param $ip
     * @param $port
     * @return bool
     */
    public function removePeer(string $ip,string $port) : bool {
        $info_mined_blocks_by_peer = $this->db->query("SELECT ip FROM peers WHERE ip = '".$ip."' AND port = '".$port."';")->fetch_assoc();
        if (!empty($info_mined_blocks_by_peer)) {
            if ($this->db->query("DELETE FROM peers WHERE ip = '".$ip."' AND port= '".$port."';"))
                return true;
        }
        return false;
    }

 