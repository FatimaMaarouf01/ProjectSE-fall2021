<?php

$server = "localhost:3308";
$username = "root";
$password = "";
$dbname = "modernarchitects2";

$connection = new mysqli($server, $username, $password, $dbname);

if($connection->connect_error){
	die("Failed");
}
else{
	echo "Connected";
}

?>