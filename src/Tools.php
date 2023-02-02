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

class Tools {

	public static function str2hex($string) {
		if (strlen($string) == 0)
			return "0x";
		return '0x'.@bin2hex(@gzcompress(trim($string),9));
	}

	public static function hex2str($bytesHex) {
		if ($bytesHex == "0x")
			return "";
		$bytesHex = @str_replace('0x','',$bytesHex);
		return @trim(@gzuncompress(@hex2bin($bytesHex)));
	}

    /**
     * Transform a decimal number to hexadecimal
     * Using the php-bcmath package
     *
     * @param $number
     * @return mixed
     */
    public static function dec2hex($number)
    {
        $hexvalues = array('0','1','2','3','4','5','6','7',
            '8','9','A','B','C','D','E','F');
        $hexval = '';
        while($number != '0')
        {
            $hexval = $hexvalues[bcmod($number,'16')].$hexval;
            $number = bcdiv($number,'16',0);
        }
        return Tools::zeropad($hexval,60);
    }

    /**
     * Transform a hexadecimal number to a decimal
     * Using the php-bcmath package
     *
     * @param $number
     * @return mixed
     */
    public static function hex2dec($number)
    {
        $decvalues = array(
			'0' => '0', '1' => '1', '2' => '2',
            '3' => '3', '4' => '4', '5' => '5',
            '6' => '6', '7' => '7', '8' => '8',
            '9' => '9', 'A' => '10', 'B' => '11',
            'C' => '12', 'D' => '13', 'E' => '14',
            'F' => '15', 'a' => '10', 'b' => '11',
            'c' => '12', 'd' => '13', 'e' => '14',
            'f' => '15');
        $decval = '0';
        $number = @strrev($number);
        for($i = 0; $i < @strlen($number); $i++)
        {
            $decval = @bcadd(@bcmul(@bcpow('16',$i,0),$decvalues[$number{$i}]), $decval);
        }
        return $decval;
    }

    /**
     * Add zeros in front of a chain
     *
     * @param $num
     * @param $lim
     * @return mixed
     */
    public static function zeropad($num, $lim)
    {
        return (strlen($num) >= $lim) ? $num : self::zeropad("0" . $num, $lim);
    }

    /**
     * Transforms a serialized object into an instantiated object
     *
     * @param $instance
     * @param $className
     * @return mixed
     */
    public static function objectToObject($instance, $className) {
        return @unserialize(sprintf(
            'O:%d:"%s"%s',
            strlen($className),
            $className,
            strstr(strstr(serialize($instance), '"'), ':')
        ));
    }

    /**
     * Get ID from IP and PORT
     *
     * @param $ip
     * @param $port
     * @return bool|string
     */
    public static function GetIdFromIpAndPort($ip,$port) {
        return substr(PoW::hash($ip.$port),0,18);
    }

    /**
     * Write file with content
     * If file exist,delete
     *
     * @param $file
     * @param $content
     * @param $checkIfExistAndDelete
     */
    public static function writeFile($file,$content='',$checkIfExistAndDelete = false) {

        if ($checkIfExistAndDelete && @file_exists($file))
            @unlink($file);

        $fp = @fopen($file, 'w');
        @fwrite($fp, $content);
        @fclose($fp);
        @chmod($file, 0777);
    }

    /**
     * Write file with content
     * If file exist,delete
     *
     * @param $file
     * @param $content
     * @param $checkIfExistAndDelete
     */
    public static function writeLog($content='',$checkIfExistAndDelete = false) {

        $file = self::GetBaseDir().'tmp'.DIRECTORY_SEPARATOR.'node_log';

        if ($checkIfExistAndDelete && file_exists($file))
            unlink($file);

        $fp = fopen($file, 'a');
        fwrite($fp, $content.PHP_EOL);
        fclose($fp);
        @chmod($file, 0777);
    }

    /**
     * Send message to discord using webhook
     *
     * @param $numBlock
     * @param Block $blockMinedByPeer
     */
    public static function SendMessageToDiscord($numBlock,$blockMinedByPeer) {
        if (defined('WEBHOOK_DISCORD')) {
     