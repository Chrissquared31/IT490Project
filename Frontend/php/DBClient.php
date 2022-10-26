#!/usr/bin/php
<?php
require_once('../../rabbitmqphp_example/path.inc');
require_once('../../rabbitmqphp_example/get_host_info.inc');
require_once('../../rabbitmqphp_example/rabbitMQLib.inc');

$client = new rabbitMQClient("../../rabbitmqphp_example/testRabbitMQ.ini","testServer");

$request = array();
$request['type'] = "registerUser";
$request['username'] = 'Hello';
$request['email'] = 'lalalaldlal@jakdjak.com';
$request['password'] = 'jahdjhsdhd';
$response = $client->send_request($request);

echo "client received response: ".PHP_EOL;
print_r($response);
echo "\n\n";

echo $argv[0]." END".PHP_EOL;


?>


