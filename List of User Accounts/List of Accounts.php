<?php

include("../connection.php");

$query = "SELECT * FROM users";
$stmt = $connection->prepare($query);
$stmt->execute();
$results = $stmt->get_result();

if(isset($_POST['del'])){
	
	$usernames=$_POST['u'];
	$query = "DELETE  FROM  `users` WHERE username ='$usernames'";
	$rum=mysqli_query($connection,$query);
	if($rum){
		// echo "done";

	}
	else{
		echo "error";
	}}
	if(isset($_POST['update'])){
	
	$salary=$_POST['edit'];
	$id=$_POST['id'];
	$query = "UPDATE `users` SET monthly_salary ='$salary' WHERE user_id='$id'";
	$rum=mysqli_query($connection,$query);
	if($rum){
		// echo "done";

	}
	else{
		echo "error";
	}}

	if(isset($_POST['update_email'])){
	
	$email=$_POST['edit_email'];
	$id=$_POST['id2'];
	$query = "UPDATE `users` SET email ='$email' WHERE user_id='$id'";
	$rum=mysqli_query($connection,$query);
	if($rum){
		// echo "done";

	}
	else{
		echo "error";}}
	

		
	if(isset($_POST['update_pos'])){
	$type_user_id=0;
	$pos=$_POST['edit_pos'];
	$id=$_POST['id3'];
	if(($pos=="Auth Employee")&& $pos!="" ){
		$type_user_id=4;
	}
   if($pos=="Employee"&& $pos!=""){
		$type_user_id=2;
	}
   if($pos=="Intern"&& $pos!=""){
		$type_user_id=4;
	}
	$query = "UPDATE `users` SET user_type_id ='$type_user_id' WHERE user_id='$id'";
	$rum=mysqli_query($connection,$query);
	if($rum){
		// echo "done";
	}
	else{
		echo "error";
	}
}
	
	if(isset($_POST['update_pass'])){
	
	$pass= hash("sha256", $_POST["edit_pass"]);
	$id=$_POST['id4'];
	$query = "UPDATE `users` SET password ='$pass' WHERE user_id='$id'";
	$rum=mysqli_query($connection,$query);
	if($rum){
		// echo "done";

	}
	else{
		echo "erroror";
	}
}
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>List of User Accounts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/x-icon" href="../LanPage/assets/logo-small.jpeg" />

	<style>
		body{
			background-color: #212529;
		}
	</style>


	</head>
	<body>

	<td><a href="../AdminPage/index.php"><input type="submit" value="Home Page" class="btn btn-primary"></a></td>
		
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Modern Architecture</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h4 class="text-center mb-4">List of User Accounts</h4>
                    <a href="#" class="btn btn-primary"  onclick="location.href='../Add Account/index.php'">Add User</a><br><br>
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
					      <tr>
							<th>Username</th>
					        <th>First Name</th>
							<th>Last Name</th>
							<th>Position</th>
					        <th>Email</th>
							<th>Date of Birth</th>
							<th>Phone</th>
							<th>Salary</th>
							<th>Edit Salary</th>
							<th>Edit Email</th>
							<th style="width:600px">Edit Position</th>
							<th>Edit Password</th>
					        <th>Delete</th>
					      </tr>
					    </thead>
					    <tbody>
					    	<?php while($row = $results->fetch_assoc()){?>
							<tr>
								<td  style="white-space:nowrap" name="username" > <?php echo $row["username"];  ?> </td>		
								<td style="white-space:nowrap"  name="fname" > <?php echo $row["first_name"];  ?> </td>
								<td  style="white-space:nowrap" name="lname" > <?php echo $row["last_name"];  ?> </td>
								<td  name="position" > <?php if( $row["user_type_id"]==1){
																	echo "Manger";
																}
															 if( $row["user_type_id"]==2){
																	echo"Employee";
																} 
															 if( $row["user_type_id"]==3){
																	echo"Intern";}
															 if( $row["user_type_id"]==4){
																	echo"Authorized Employee";
																}  ?> </td>
								
								<td  name="email" > <?php echo $row["email"];  ?> </td>
								<td  name="dob" style="white-space:nowrap"> <?php echo $row["dob"];  ?> </td>
								<td  name="phone" style="white-space:nowrap"> <?php echo $row["phone"];  ?> </td>
								<td  name="salary" > <?php echo $row["monthly_salary"];  ?> </td>
								<form action="" method="POST">
									<input type="hidden" name="id" value=<?php echo $row["user_id"];  ?>>
									<td><input type="number" name="edit" placeholder="Edit Salary" required>
									</br> 
									<input type="submit" name="update" value="update" class="btn btn-primary"></td>
			   					</form>
			  					<form action="" method="POST">
									<input type="hidden" name="id2" value=<?php echo $row["user_id"];  ?>>
									<td><input type="email" name="edit_email" placeholder="Edit Email" required>
									</br> 
									<input type="submit" name="update_email" value="update" class="btn btn-primary"></td>
								</form>
			   			  		<form action="" method="POST">
									<input type="hidden" name="id3" value=<?php echo $row["user_id"];  ?>>
									<td style="white-space:nowrap">
									<input style="white-space:nowrap" type="radio"  name="edit_pos" value="Auth Employee">Authurized Employee </br>
									<input type="radio" name="edit_pos" value="Employee">  Employee</br>
									<input type="radio" name="edit_pos" value="intern"> Intern
									</br> </br>
									<input type="submit" name="update_pos" value="update" class="btn btn-primary"></td>
								</form>
								<form action="" method="POST">
									<input type="hidden" name="id4" value=<?php echo $row["user_id"];  ?>>
									<td><input type="text" name="edit_pass" placeholder="Enter New Password" required>
									</br> </br> 
									<input type="submit" name="update_pass" value="update" class="btn btn-primary"></td>
			   					</form>
								<form action="" method="POST">
									<input type="hidden" name="u" value=<?php echo $row["username"];  ?>>
									<td><input type="submit" name="del" value="remove" class="btn btn-primary"></td>
							   </form>
							</tr>
							<?php } ?>
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

<script>
function myFunction2() {
var element = document.getElementById('v').innerText=document.getElementById('r1').innerText+' '+document.getElementById('r2').innerText+'\n'+'Email:'+document.getElementById('r3').innerText+'\n'+'DOB: '+
document.getElementById('r4').innerText+'\n'+'Salary: '+
document.getElementById('r5').innerText;
}
</script>

	</body>
</html>