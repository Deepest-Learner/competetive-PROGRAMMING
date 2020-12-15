
**Contents**

- [JSON RPC API](#json-rpc-api)
  - [JSON-RPC Endpoint](#json-rpc-endpoint)
  - [Url Examples Explained](#url-info)
  - [JSON-RPC methods](#json-rpc-methods)
  - [JSON RPC API Reference](#json-rpc-api-reference)
      - [node_network](#node_network)
      - [node_version](#node_version)
      - [node_listening](#node_listening)
      - [node_peerCount](#node_peercount)
      - [node_syncing](#node_syncing)
      - [node_mining](#node_mining)
      - [node_hashrate](#node_hashrate)
      - [j4f_coinbase](#j4f_coinbase)
      - [j4f_accounts](#j4f_accounts)
      - [j4f_addAccount](#j4f_addAccount)
      - [j4f_blockNumber](#j4f_blocknumber)
      - [j4f_getBalance](#j4f_getbalance)
      - [j4f_getTransactionCount](#j4f_gettransactioncount)
      - [j4f_getBlockTransactionCountByHash](#j4f_getblocktransactioncountbyhash)
      - [j4f_getBlockTransactionCountByNumber](#j4f_getblocktransactioncountbynumber)
      - [j4f_sendTransaction](#j4f_sendtransaction)
      - [j4f_getBlockByHash](#j4f_getblockbyhash)
      - [j4f_getBlockByNumber](#j4f_getblockbynumber)
      - [j4f_getTransactionByHash](#j4f_gettransactionbyhash)
      - [j4f_sign](#j4f_sign)
	  - [j4f_parse](#j4f_parse)
	  - [j4f_getContractByHash](#j4f_getContractByHash)
	  - [j4f_callReadFunctionContractByHash](#j4f_callReadFunctionContractByHash)

# JSON RPC API

[JSON](http://json.org/) is a lightweight data-interchange format. It can represent numbers, strings, ordered sequences of values, and collections of name/value pairs.

[JSON-RPC](http://www.jsonrpc.org/specification) is a stateless, light-weight remote procedure call (RPC) protocol. Primarily this specification defines several data structures and the rules around their processing. It is transport agnostic in that the concepts can be used within the same process, over sockets, over HTTP, or in many various message passing environments. It uses JSON ([RFC 4627](http://www.ietf.org/rfc/rfc4627.txt)) as data format.

## JSON-RPC Endpoint

Default JSON-RPC endpoints:

| Client | URL |
|-------|:------------:|
| HTTP |  http://NODE_IP:NODE_PORT/api/ |

### HTTP

You can start use the HTTP JSON-RPC visit url ex.
```js
http://NODE_IP:NODE_PORT/api/?method=net_version
http://NODE_IP:NODE_PORT/api/?method=getBalance&wallet=J4F00000000000000000000000000000000000000000000000000000000
```

## url Info

The examples also do not include the DOMAIN/IP & port combination which must be the last argument given to curl e.x.
127.0.0.1:6969
domain:6969

## JSON-RPC methods

* [node_network](#node_network)
* [node_version](#node_version)
* [node_listening](#node_listening)
* [node_peerCount](#node_peercount)
* [node_syncing](#node_syncing)
* [node_mining](#j4f_mining)
* [node_hashrate](#j4f_hashrate)
* [j4f_coinbase](#j4f_coinbase)
* [j4f_accounts](#j4f_accounts)
* [j4f_addAccount](#j4f_addAccount)
* [j4f_blockNumber](#j4f_blocknumber)
* [j4f_getBalance](#j4f_getbalance)
* [j4f_getTransactionCount](#j4f_gettransactioncount)
* [j4f_getBlockTransactionCountByHash](#j4f_getblocktransactioncountbyhash)
* [j4f_getBlockTransactionCountByNumber](#j4f_getblocktransactioncountbynumber)
* [j4f_sign](#j4f_sign)
* [j4f_sendTransaction](#j4f_sendtransaction)
* [j4f_getBlockByHash](#j4f_getblockbyhash)
* [j4f_getBlockByNumber](#j4f_getblockbynumber)
* [j4f_getTransactionByHash](#j4f_gettransactionbyhash)
* [j4f_sign](#j4f_sign)
* [j4f_parse](#j4f_parse)
* [j4f_getContractByHash](#j4f_getContractByHash)
* [j4f_callPublicFunctionContractByHash](#j4f_callPublicFunctionContractByHash)

## JSON RPC API Reference

#### node_version

Returns the current version of node.

##### Parameters
none

##### Returns

`INTEGER` - The current version.

##### Example
```js
// JSON-RPC Request
curl -X POST --data '{"jsonrpc":"2.0","method":"node_version","params":[],"id":1}'

// HTTP Request
http://NODE_IP:NODE_PORT/api/?id=1&method=node_version

// Result
{
  "id":1,
  "jsonrpc": "2.0",
  "result": "0.0.4"
}
```

***

#### node_network

Returns the current network.

##### Parameters
none

##### Returns

`String` - The current network.

##### Example
```js
// JSON-RPC Request
curl -X POST --data '{"jsonrpc":"2.0","method":"node_network","params":[],"id":2}'

//HTTP Request
http://NODE_IP:NODE_PORT/api/?id=2&method=node_network

// Result
{
  "id":2,
  "jsonrpc": "2.0",
  "result": "mainnet"
}
```

***

#### node_listening

Returns `true` if client is actively listening for network connections.

##### Parameters
none

##### Returns

`Boolean` - `true` when listening, otherwise `false`.

##### Example
```js
// JSON-RPC Request
curl -X POST --data '{"jsonrpc":"2.0","method":"node_listening","params":[],"id":3}'

//HTTP Request
http://NODE_IP:NODE_PORT/api/?id=3&method=node_listening

// Result
{
  "id":3,
  "jsonrpc":"2.0",
  "result":true
}
```

***

#### node_peerCount

Returns number of peers currently connected to the client.

##### Parameters
none

##### Returns

`INTEGER` - integer of the number of connected peers.

##### Example
```js
// JSON-RPC Request
curl -X POST --data '{"jsonrpc":"2.0","method":"node_peerCount","params":[],"id":4}'

//HTTP Request
http://NODE_IP:NODE_PORT/api/?id=4&method=node_peerCount

// Result
{
  "id":4,
  "jsonrpc": "2.0",
  "result": "5"
}
```

***

#### node_syncing

Returns an object with data about the sync status or `false`.

##### Parameters
none

##### Returns

`Object|Boolean`, An object with sync status data or `FALSE`, when not syncing:
  - `currentBlock`: `INTEGER` - The current block, same as j4f_blockNumber
  - `highestBlock`: `INTEGER` - The estimated highest block

##### Example
```js
// JSON-RPC Request
curl -X POST --data '{"jsonrpc":"2.0","method":"node_syncing","params":[],"id":5}'

//HTTP Request
http://NODE_IP:NODE_PORT/api/?id=5&method=node_syncing
```

Result syncing
```js
{
  "id":5,
  "jsonrpc": "2.0",
  "result": {
    "currentBlock": '728',
    "highestBlock": '1202'
  }
}
```
Result Not syncing
```js
{
  "id":5,
  "jsonrpc": "2.0",
  "result": false
}
```

***

#### node_mining

Returns `true` if client is actively mining new blocks.

##### Parameters
none

##### Returns

`Boolean` - returns `true` of the client is mining, otherwise `false`.

##### Example
```js
// JSON-RPC Request
curl -X POST --data '{"jsonrpc":"2.0","method":"node_mining","params":[],"id":6}'

//HTTP Request
http://NODE_IP:NODE_PORT/api/?id=6&method=node_mining

// Result
{
  "id":6,
  "jsonrpc": "2.0",
  "result": true
}

```

***

#### node_hashrate

Returns the number of hashes per second that the node is mining with.
