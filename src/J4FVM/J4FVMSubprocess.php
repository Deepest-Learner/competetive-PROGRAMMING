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

Class J4FVMSubprocess {

	public $contractHash;
	public $txnHash;

	public $txnData;
	public $txnFrom;
	public $txnAmount;

	public $version;
	public $output;
	public $typeCall;

	public function __construct(string $typeCall='READ') {

		if (strtoupper($typeCall) == 'MAKE')
			$this->typeCall = 'MAKE';

		else if (strtoupper($typeCall) == 'WRITE')
			$this->typeCall = 'WRITE';

		else if (strtoupper($typeCall) == 'READ')
			$this->typeCall = 'READ';
	}

	public function setTxnHash(string $txnHash) : void {
		$this->txnHash = $txnHash;
	}

	public functio