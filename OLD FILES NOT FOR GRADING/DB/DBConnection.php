<?php

function DBConnection() {
	$host="localhost";
	$uname="admin";
	$pass="12345";
	$db="it490";

	$DBConnection = mysqli_connect($host, $uname, $pass, $db);

	if(mysqli_connect_errno()){
		echo 'Failed to connect to MySQL: ' .mysqli_connect_error();
		exit();
	}

	return $DBConnection;
}

?>

