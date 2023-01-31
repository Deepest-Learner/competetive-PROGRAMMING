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
 