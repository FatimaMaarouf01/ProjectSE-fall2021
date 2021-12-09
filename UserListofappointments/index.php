<?php

include("../connection.php");
$today_date = date("Y-m-d");
$query = "SELECT appointment_id, day, date, hour  FROM appointments WHERE availability = 0 AND date>'$today_date';";
$stmt = $connection->prepare($query);
$stmt->execute();
$results = $stmt->get_result();


if(isset($_POST["book_id"])){


	if(isset($_POST["name"]) && $_POST["name"] != " "){
			$client_name = $_POST["name"];
			
		}
		
		else{
			die ("Please Enter your name");
		}

	
	
	$id=$_POST["app_id"];
    $query = "UPDATE `appointments` SET `availability` = '1' WHERE `appointments`.`appointment_id` = '$id'";
    $run=mysqli_query($connection,$query);

	if($run){
		header("Location: index.php");
	}
	else{
		echo "error";
	}

    $query1 = "UPDATE `appointments` SET `name` = '$client_name' WHERE `appointments`.`appointment_id` = '$id'";
    $run1=mysqli_query($connection,$query1);

	if($run1){

	
		
	}
	else{
		echo "error";
	}

		$query2 = "SELECT `first_name`, `email` FROM `users` WHERE `user_type_id`=1 OR `user_type_id`=4";
	$stmt2 = $connection->prepare($query2);
	$stmt2->execute();
	$results2 = $stmt2->get_result();

	$query3 = "SELECT day, date, hour  FROM appointments WHERE appointment_id = $id ";
	$stmt3 = $connection->prepare($query3);
	$stmt3->execute();
	$results3 = $stmt3->get_result();
	$row3=$results3->fetch_assoc();
	$appointment_date= $row3['day']." ".$row3['date']." at ".$row3['hour'];

	while($row2 =$results2->fetch_assoc()){
		$to= $row2['email'];
		$subject= "Appointment Booked";
		$message="Dear $row2[first_name], \nPlease check your appointments. A new appointment has been booked by $client_name on  $appointment_date. \n Click on the following link to log in: http://127.0.0.1/ModernArch/Login/index.php \n Modern Architecture ";
		mail($to, $subject, $message);
	}

	
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Available Appointments</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/x-icon" href="../LanPage/assets/logo-small.jpeg" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<style>

	body{
		background-color:#212529;
	}

	#book_button{
		background-color: lightgrey;
		width:60%;
		height: 100%;
		margin:0px 20px 0px 20px;
		border-radius: 10px;
	}	

	.book_text{
		border: 2px blue solid; 
		border-radius: 5px;
	}

	#return_button{
  		background-color: #ffc800;
		color: #ffffff ;
		margin: 10px;
		width: 10%;
		height: 5%;
		border: thick solid 3px rgba(33,37,41,255);
		border-radius: 10px;
	}
}

</style>
</head>
<body>
	<button id="return_button" ><a style="color:#fff" href="../LanPage/index.php" target="_self"> Return </a>  </button>
	<div style="background-color:#212529;" class="limiter">
		<div style="background-color:#212529;" class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th style="background-color: #ffc800;"class="cell100 column1">Day</th>
									<th style="background-color: #ffc800;"class="cell100 column2">Date</th>
									<th style="background-color: #ffc800;"class="cell100 column3">Hours</th>
									<th style="background-color: #ffc800;"class="cell100 column4">Enter your name:</th>
									<th style="background-color: #ffc800;"class="cell100 column5">Book</th>
									
								</tr>
							</thead>
						</table>
					</div>

					<?php while($row = $results->fetch_assoc()){ ?>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<form action="" method="POST">
								<tr class="row100 body">
									<td class="cell100 column1"><?php echo $row["day"] ?></td>
									<td class="cell100 column2"><?php echo $row["date"] ?></td>
									<td class="cell100 column3"><?php echo $row["hour"] ?></td>
									<td class="cell100 column4"> <input type="text" name="name" required> </td>
									<td class="cell100 column6" name="app_id"><input type="hidden" name="app_id" value= <?php echo $row["appointment_id"] ?> ></td>
									<td class="cell100 column5"> <button name = "book_id" value="Book Now" id="book_button">Book Now</button></td>
									
								</tr>
								</form>
							</tbody>
						</table>
					</div>

					<?php } ?>
				</div>
			</div>
				


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
