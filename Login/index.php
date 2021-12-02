<?php

include("../connection.php");


if(isset($_POST["login"])){


	if(isset($_POST["username"]) && $_POST["username"] != " "){
			$username = $_POST["username"];
		}
		
		else{
			echo ("Don't try to mess around brotha ;)");
		}

		
	
    $query = "SELECT username, password, user_type_id FROM users";
    $stmt = $connection->prepare($query);
	$stmt->execute();
	$results = $stmt->get_result();

	while($row = $results->fetch_assoc()){

		$username_table = $row["username"];
		$password_table = $row["password"];
		$position_table = $row["user_type_id"];


		$username_input = $_POST["username"];
		$password_input = $_POST["pass"]; //add hash('sha256', ) once db is fixed

		if(($username_input==$username_table) && ($password_input==$password_table)){

			if(($position_table==1)){
				header("Location:../AdminPage/index.php");
			}

			else if(($position_table==2)){
				header("Location:../List of Projects/List of Projects.php");
			}

			else if(($position_table==3)){
				header("Location:../List of Projects/List of Projects.php");
			}	
			
		}

		else{
			
		}
		
	}	
	
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
</head>

<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">


			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" >
					<span class="login100-form-title p-b-43">
						Login to continue
					</span>
					
					
					<div  class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input  class="input100" type="text" name="username" method="POST">
						<span  class="focus-input100"></span>
						<span id="username_id" class="label-input100" >Username</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass" method="POST">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" name = "login" value="Log in">
					</div>
					

				</form>

				<div class="login100-more" style="background-image: url('images/Login_img.jpeg');">
				</div>
			</div>
		</div>
	</div>
	
	
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


</body>
</html>