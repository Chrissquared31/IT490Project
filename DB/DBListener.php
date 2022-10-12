#!/usr/bin/php
<?php
require_once('../rabbitmqphp_example/path.inc');
require_once('../rabbitmqphp_example/get_host_info.inc');
require_once('../rabbitmqphp_example/rabbitMQLib.inc');

require_once('DBConnection.php');


function doRegister($username, $email, $password) {
	$DBConnection = DBConnection();
	$sql = "select * from `users` where username='$username'";
	$result = $DBConnection->query($sql);
	if($result->num_rows == 1) {
		echo "Username is taken!";
		return false;
	}
	$i = "insert into `users`(username, email, password) values ('$username', '$email','$password')";
	if($DBConnection->query($i) == TRUE) {
		echo "User created!";
	}
	else {
		echo "Failed to create account.";
	}
	return true;
	
}


function doLogin($username,$password)
{
    // lookup username in databas
    // check password
    return true;
    //return false if not valid
}

function requestProcessor($request)
{
  echo "received request".PHP_EOL;
  var_dump($request);
  if(!isset($request['type']))
  {
    return "ERROR: unsupported message type";
  }
  switch ($request['type']) {
 	 case "register":
		 return doRegister($request['username'], $request['email'], $request['password']);
	 case "login":
		 return doLogin($request['username'],$request['password']);
	 case "validate_session":
		 return doValidate($request['sessionId']);
  }
  return array("returnCode" => '0', 'message'=>"Server received request and processed");
}

$server = new rabbitMQServer("testRabbitMQ.ini","testServer");

echo "testRabbitMQServer BEGIN".PHP_EOL;
$server->process_requests('requestProcessor');
echo "testRabbitMQServer END".PHP_EOL;
exit();
?>

