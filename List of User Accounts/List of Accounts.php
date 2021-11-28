<?php

include("../connection.php");

$query = "SELECT * FROM users";
$stmt = $connection->prepare($query);
$stmt->execute();
$results = $stmt->get_result();

// echo "connected here";

if(isset($_POST['del'])){
	
	$usernames=$_POST['u'];
	$query = "DELETE  FROM  `users` WHERE username ='$usernames'";
	$rum=mysqli_query($connection,$query);
	if($rum){
		// echo "done";

	}
	else{
		echo "err";
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
		echo "err";
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
		echo "err";}}
	// }}
// 	if(isset($_POST['v'])){
	
// 	$usernames=$_POST['u'];
// 	echo "$usernames";
	

// }


?>

<?php




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
                    <a href="#" class="btn btn-primary"  onclick="location.href='../Add Account/colorlib-regform-5/index.php'">Add New User Account</a><br><br>
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
					      <tr>
							<th>User Name</th>
							

					        <th>First Name</th>
							<th>Last Name</th>
					        <th>Email</th>
							<th>DOB</th>
							<th>Salary</th>
							<th>Edit Salary</th>
							<th>Edit Email</th>
							
					        <th>Delete</th>
					      </tr>
					    </thead>
					    <tbody>
					    				<?php 
				while($row = $results->fetch_assoc()){
				// $lol=$row["UserName"];
			?>
			<tr>

				<td  name="username" > <?php echo $row["username"];  ?> </td>
				

		
				<td  name="fname" > <?php echo $row["first_name"];  ?> </td>
				<td  name="lname" > <?php echo $row["last_name"];  ?> </td>
				<td  name="email" > <?php echo $row["email"];  ?> </td>
		
				<td  name="dob" > <?php echo $row["dob"];  ?> </td>
			
		
				<td  name="salary" > <?php echo $row["monthly_salary"];  ?> </td>
				<form action="" method="POST">
	<input type="hidden" name="id" value=<?php echo $row["user_id"];  ?>>
				<td><input type="text" name="edit" placeholder="Edit Salary" class="btn btn-primary">
			</br> Double click to Update
				<input type="submit" name="update" value="update" class="btn btn-primary">
			</td>
			   </form>
			  <form action="" method="POST">
	<input type="hidden" name="id2" value=<?php echo $row["user_id"];  ?>>
				<td><input type="text" name="edit_email" placeholder="Edit Email" class="btn btn-primary">
			</br> Double click to Update
				<input type="submit" name="update_email" value="update" class="btn btn-primary">
			</td>
			   </form>

				<!-- <td><input type="submit" id="view" value="view" class="btn btn-primary" name="v" onclick="myFunction2()"></td> -->
				
				<!-- <td><div style=" overflow: scroll;"><p id="v" >Click on view to show details</p></div></td> -->
				<form action="" method="POST">
				<input type="hidden" name="u" value=<?php echo $row["username"];  ?>>
			
			<td><input type="submit" name="del" value="remove" class="btn btn-primary"></td>
           <!-- <td><a href="#" class="btn btn-primary" name="del">Delete</a></td> -->
		   </form>
			</tr>
	
<!-- 1- On click javascript replace the ___ by teh actual username taken from the row
2- once replaced, redirect the browser to the new api (which is replaced) -->
			<?php
				}
			?>
			

                          <!--
					      <tr>
					        <th scope="row" class="scope" >.org</th>
					        <td>1 Year</td>
					        <td>$65.00</td>
					        <td>$5.00</td>
					        <td>$5.00</td>
					        <td><a href="#" class="btn btn-primary">Sign Up</a></td>
					      </tr>
					      <tr>
					        <th scope="row" class="scope" >.biz</th>
					        <td>1 Year</td>
					        <td>$60.00</td>
					        <td>$5.00</td>
					        <td>$5.00</td>
					        <td><a href="#" class="btn btn-primary">Sign Up</a></td>
					      </tr>
					      <tr>
					        <th scope="row" class="scope" >.info</th>
					        <td>1 Year</td>
					        <td>$50.00</td>
					        <td>$5.00</td>
					        <td>$5.00</td>
					        <td><a href="#" class="btn btn-primary">Sign Up</a></td>
					      </tr>
					      <tr>
					        <th scope="row" class="scope border-bottom-0">.me</th>
					        <td class="border-bottom-0">1 Year</td>
					        <td class="border-bottom-0">$45.00</td>
					        <td class="border-bottom-0">$5.00</td>
					        <td class="border-bottom-0">$5.00</td>
					        <td class="border-bottom-0"><a href="#" class="btn btn-primary">Sign Up</a></td>
					      </tr>
                        -->
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

</script>
<script>
function myFunction2() {
var element = document.getElementById('v').innerText=document.getElementById('r1').innerText+' '+document.getElementById('r2').innerText+'\n'+'Email:'+document.getElementById('r3').innerText+'\n'+'DOB: '+
document.getElementById('r4').innerText+'\n'+'Salary: '+
document.getElementById('r5').innerText
;
// alert(element);



}
</script>



	</body>
</html>