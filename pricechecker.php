<?php

  require_once('API.php');
  $api = new OP_API ('https://api.openprovider.eu');

  $username = "joy@smitpro.nl";
  $password = "TMmuUm@Hss4rP!p";

  $limit = 10;
  $offset = 0;
  
  do {
    $request = new OP_Request;
    $request->setCommand('searchExtensionRequest')
      ->setAuth(array('username' => $username, 'password' => $password))
      ->setArgs(array(
        'withPrice' => 1,
        'withDescription' => 0,
        'withDiscounts' => 0,
        'status' => array('GAV','ACT'),
        'limit' => $limit,
        'offset' => $offset,
      ));
    $reply = $api->process($request);
    $value = $reply->getValue();
  
    if ($offset == 0) {
      echo "Price list retrieved at ".date('Y-m-d H:i:s').", ".$value['total']." results\n";
      echo "\tProduct's currency\t\t\t\t\t\tCustomer's currency\n";
      echo "TLD\tCurrency\tCreate\tTransfer\tRenew\tTrade\t\tCurrency\tCreate\tTransfer\tRenew\tTrade\n";
    }

    foreach ($value['results'] as $data) {
      echo
        $data['name']."\t".
        $data['prices']['resellerPrice']['product']['currency']."\t".
        $data['prices']['resellerPrice']['product']['price']."\t".
        $data['prices']['transferPrice']['product']['price']."\t".
        $data['prices']['renewPrice']['product']['price']."\t".
        ($data['tradeAvailable'] ? $data['prices']['tradePrice']['product']['price'] : '-')."\t".
        "\t".
        $data['prices']['resellerPrice']['reseller']['currency']."\t".
        $data['prices']['resellerPrice']['reseller']['price']."\t".
        $data['prices']['transferPrice']['reseller']['price']."\t".
        $data['prices']['renewPrice']['reseller']['price']."\t".
        ($data['tradeAvailable'] ? $data['prices']['tradePrice']['reseller']['price'] : '-')."\t".
        "\n";

      //print_r($data);
    }
    $offset += $limit;
  } while ($value['total'] > $offset && $offset < 5000); // build in a safe max, just in case

?>