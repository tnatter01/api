<?php
require_once('API.php');
$request = new OP_Request;
$request->setCommand('transferDomainRequest')
  ->setAuth(array('username' => 'username', 'password' => 'password'))
  ->setArgs(array(
    'ownerHandle' => 'SR003891-NL',
    'adminHandle' => 'SR003891-NL',
    'techHandle' => 'SR003891-NL',
    'billingHandle' => 'SR003891-NL',
    'domain' => array(
      'name' => 'domain',
      'extension' => 'com'
    ),
    'period' => '1',
    'authCode' => 'asd79SAD(8sd',
    'nameServers' => array(
      array(
        'name' => 'ns1.yourdomain.com',
        'ip' => '100.1.2.3',
        'ip6' => '2a01:d078:0:147:94:198:153:68',
      ),
      array(
        'name' => 'ns2.yourdomain.com',
        'ip' => '100.1.2.6',
        'ip6' => '20f1:610:0:800d::15',
      ),
    ),
    'dnssecKeys' => array(
      array(
        'flags' => 256,
        'alg' => 8,
        'pubKey' => 'AwEAA{...}VNfPps3=',
      ),
      array(
        'flags' => 257,
        'alg' => 8,
        'pubKey' => 'AwEAA{...}TK5f9fs=',
      ),
    ),
  ));
  ?>