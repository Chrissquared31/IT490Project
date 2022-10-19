<?php

function DBConnection() {
	$host="localhost";
	$uname="admin";
	$pass="IT490@2022!";
	$db="it490";

	$DBConnection = mysqli_connect($host, $uname, $pass, $db);

	return $DBConnection;
}

?>

