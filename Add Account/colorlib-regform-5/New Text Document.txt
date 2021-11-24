<?php

include("../../connection.php");

if(isset($_POST["first_name"]) && $_POST["first_name"] != ""){
	$firstname =  $_POST["first_name"];
	
}else{
	die("Don't try to mess around bro ;)");

}
if(isset($_POST["last_name"]) && $_POST["last_name"] != ""){
	$lastname =  $_POST["last_name"];
	
}else{
	die("Don't try to mess around bro ;)");

}

if(isset($_POST["birth_date"]) && $_POST["birth_date"] != ""){
	$DOB = $_POST["birth_date"];
}else{
	die("Don't try to mess around bro ;)");
}

if(isset($_POST["email"]) && $_POST["email"] != ""){
	$email = $_POST["email"];

}else{
	die("Don't try to mess around bro ;)");
}


if(isset($_POST["area_code"]) && $_POST["area_code"] != ""){
	$area = $_POST["area_code"];
}else{
	die("Don't try to mess around bro ;)");
}

if(isset($_POST["phone"]) && $_POST["phone"] != ""){
	$phone = $_POST["phone"];
}else{
	die("Don't try to mess around bro ;)");
}

if(isset($_POST["username"]) && $_POST["username"] != ""){
	$username = $_POST["username"];
}else{
	die("Don't try to mess around bro ;)");
}
 
if(isset($_POST["password"]) && $_POST["password"] != ""){
	$password = hash("sha256", $_POST["password"]);
	
}else{
	die("Don't try to mess around bro ;)");
}

if(isset($_POST["salary"]) && $_POST["salary"] != ""){
	$salary= $_POST["salary"];
	
}else{
	die("Don't try to mess around bro ;)");
}

if(isset($_POST["position"]) && $_POST["position"] != ""){
	$position= $_POST["position"];
	
}else{
	die("Don't try to mess around bro ;)");
}
// $name =  $_POST["name"];
// echo "$name";
// for($i = 0; $i< 100000000000000000; $i++){
	// $email = $email . $i;
	$mysql = $connection->prepare("INSERT INTO users(FirstName,LastName,Email,DOB,user_type_id,Monthly_Salary,UserName,Password) VALUES (?,?,?,?,?,?,?,?)");
	$mysql->bind_param("ssssiiss", $firstname, $lastname,$email,$DOB, $position,$salary,$username,$password);
	$mysql->execute();

// }



$mysql->close();
$connection->close();
// header("Location:../../LanPage/index.php");


?>