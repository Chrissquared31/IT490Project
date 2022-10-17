<?php

function DBConnection() {
	$host="localhost";
	$uname="admin";
	$pass="12345";
	$db="it490";

<<<<<<< HEAD
	$DBConnection = mysqli_connect($host, $uname, $pass, $db);

	return $DBConnection;

=======
	$DBconnection = mysqli_connect($host, $uname, $pass, $db);
>>>>>>> bedb8a5f8389077070f6e52c5e00659a17ac7b43
}

?>

