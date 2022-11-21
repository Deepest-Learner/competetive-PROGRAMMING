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

class J4FVMBase {

	const VERSION = '0.0.2';
	public static $var_types = array('address','uint256','int','uint','string','tokenId');
	public static $data = [];
	public static $txn_hash = '';
	public static $contract_hash = '';

	/**
     * Function that parse all funity functions
     *
     * @param string $code
     *
     * @return string
     */
	public static function _parseFunctions(string $code) : string {

		$code_parsed = $code;

		//Parse normal functions
		$matches = [];
		preg_match_al