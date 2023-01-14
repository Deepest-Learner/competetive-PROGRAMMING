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

class PoW {
    /**
     * @param $message
     * @return string
     */
    public static function hash(string $message) : string {
		return hash('sha3-512', hash('sha3-256',hash('sha3-256', $message)));
    }

    /**
     * POW to find the hash that matches the current difficulty
     *
     * @param int $idMiner
     * @param string $message
     * @param string $difficulty
     * @param string $startNonce
     * @param string $incrementNonce
	 * @param bool $isMultiThread
     * @return string
     */
    public static function findNonce($idMiner,$message,$difficulty,$startNonce,$incrementNonce,$isMultiThread=true) : string {
        $max_difficulty = "000FFFFFF00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000";

		$nonce = "0";
        $nonce = bcadd($nonce,strval($startNonce));

        //Save current time
        $lastLogTime = time();

        //Can't start subprocess without mainthread
        if ($isMultiThread && !file_exists(Tools::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR.Subprocess::$FILE_MAIN_THREAD_CLOCK))
            die('MAINTHREAD NOT FOUND');

		$countIdle = 0;
        $countIdleCheck = 0;
        $countIdleLog = 0;
        $limitCount = 1000;

        while(!self::isValidNonce($message,$nonce,$difficulty,$max_difficulty)) {

            $countIdle++;
            $countIdleLog++;
			$countIdleCheck++;

            if ($countIdleLog == $limitCount) {
                $countIdleLog = 0;

                //We obtain the difference between first 100000 hashes time and this hash time
   