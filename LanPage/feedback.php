<?php

include("../connection.php");


if(isset($_POST["message"]) && $_POST["message"] != ""){
	$message = $_POST["message"];
}else{
	die("Don't try to mess around bro ;)");
}
 
    $name=$_POST["name"];

	$mysql = $connection->prepare("INSERT INTO feedbacks(name,text) VALUES (?,?)");
	$mysql->bind_param("ss",$name, $message);
	$mysql->execute();



$mysql->close();
$connection->close();

header("Location:../LanPage/index.php");

?>
