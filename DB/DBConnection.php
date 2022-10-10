<?php

function DBConnection() {
	$host="localhost";
	$uname="admin";
	$pass="12345";
	$db="it490";

	$DBconnection = $mysqli_connect($host, $uname, $pass, $db);
}

?>

