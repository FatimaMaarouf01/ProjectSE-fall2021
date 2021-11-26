<?php

include("../connection.php");

$query = "SELECT * FROM `appointments` WHERE availability = '1'";
$stmt = $connection->prepare($query);
$stmt->execute();
$results = $stmt->get_result();

// echo "connected here";

if(isset($_POST['del'])){
	
	$id=$_POST['u'];
	$query = "DELETE  FROM  `appointments` WHERE appointment_id ='$id'";
	$rum=mysqli_query($connection,$query);
	if($rum){
		echo "done";

	}
	else{
		echo "err";
	}}

// 	if(isset($_POST['v'])){
	
// 	$usernames=$_POST['u'];
// 	echo "$usernames";
	

// }


?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Table 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
		<td><a href="../AdminPage/index.php"><input type="submit" value="Home Page" class="btn btn-primary"></a></td>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Welcome Mr. Marwan</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h4 class="text-center mb-4">Upcomming Appointments</h4>
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
					      <tr>
					        <th>Day</th>
					        <th>Date</th>
					        <th>Time</th>
					        <th>Employee</th>
					        <th>Remove</th>
					      </tr>
					    </thead>
					    <tbody>
				<?php 
				while($row = $results->fetch_assoc()){
				
			?>
			<tr>

		
				<td  name="username" > <?php echo $row["day"];  ?> </td>
				<td  name="username" > <?php echo $row["date"];  ?> </td>
				<td  name="username" > <?php echo $row["hour"];  ?> </td>
				<td  name="username" > <?php echo $row["name"];  ?> </td>
				
				
				<form action="" method="POST"> -->
				<input type="hidden" name="u" value=<?php echo $row["appointment_id"];  ?>>
			
			<td><input type="submit" name="del" value="remove" class="btn btn-primary"></td>
           <!-- <td><a href="#" class="btn btn-primary" name="del">Delete</a></td> -->
		   </form>
			</tr>
	
					   <?php
				}
			?>
					     
					      
					    </tbody>
					  </table>
					</div>
				</div>
			</div>
		</div>
	</section>
	

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

