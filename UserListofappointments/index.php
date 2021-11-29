<?php

include("../connection.php");

$query = "SELECT appointment_id, day, date, hour  FROM appointments WHERE availability = 0";
$stmt = $connection->prepare($query);
$stmt->execute();
$results = $stmt->get_result();


if(isset($_POST["book_id"])){


	if(isset($_POST["name"]) && $_POST["name"] != " "){
			$client_name = $_POST["name"];
		}
		
		else{
			echo ("Please Enter your name");
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
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Available Appointments</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
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
	.book_button{
		display:flex;
		border: 2px solid blue ;
		border-radius: 7px;
		text-align: center;
		width: 50%;
		align-content: center;
		justify-content: center;
	}


	.book_text{
		border: 2px blue solid; 
		border-radius: 5px;
	}

</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Day</th>
									<th class="cell100 column2">Date</th>
									<th class="cell100 column3">Hours</th>
									<th class="cell100 column4">Enter your name:</th>
									<th class="cell100 column5">Book</th>
									
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
									<td class="cell100 column5"> <input type="submit" name = "book_id" value="Book Now"></td>
									
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
