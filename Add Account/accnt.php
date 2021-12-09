<?php

include("../connection.php");
echo $_POST["area_code"];
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

if(isset($_POST["phone"]) && isset($_POST["area_code"]) && $_POST["phone"] !="" && $_POST["area_code"] !=""){
	$phone = $_POST["area_code"]." ".$_POST["phone"];
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
	$pos=$_POST["position"];
}else{
	die("Don't try to mess around bro ;)");
}

	$mysql = $connection->prepare("INSERT INTO users(first_name,last_name,email,dob,phone,user_type_id,monthly_salary,username,Password) VALUES (?,?,?,?,?,?,?,?,?)");
	$mysql->bind_param("sssssiiss",$firstname, $lastname,$email,$DOB,$phone,$pos,$salary,$username,$password);
	$mysql->execute();




$mysql->close();
$connection->close();
header("Location:../List of User Accounts/List of Accounts.php");


?>