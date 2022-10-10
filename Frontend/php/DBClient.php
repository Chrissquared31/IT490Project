#!/usr/bin/php
<?php
require_once('../../rabbitmqphp_example/path.inc');
require_once('../../rabbitmqphp_example/get_host_info.inc');
require_once('../../rabbitmqphp_example/rabbitMQLib.inc');

$client = new rabbitMQClient("testRabbitMQ.ini","testServer");
if(isset($argv[1])) {
	$msg = $argv[1];
}
else {
	$msg = "test message";
}


// REGISTRATION 

if (isset($_POST['register'])) {
	$request = array();
	$request['type'] = "registerUser";
	$request['username'] = $_POST["username"];
	$request['email'] = $_POST["email"];
	$request['password'] = $_POST["password"];
	$response = $client->send_request($request);

	echo($response);
}


