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


$query = "SELECT * FROM users";
$stmt = $connection->prepare($query);
$stmt->execute();
$results = $stmt->get_result();

echo "connected here";

if(isset($_POST['del'])){
	
	$usernames=$_POST['u'];
	$query = "DELETE  FROM  `users` WHERE UserName ='$usernames'";
	$rum=mysqli_query($connection,$query);
	if($rum){
		echo "done";

	}
	else{
		echo "err";
	}}

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
					        <th>Name</th>
					        <th>View</th>
					        <th>Delete</th>
					      </tr>
					    </thead>
					    <tbody>
					    				<?php 
				while($row = $results->fetch_assoc()){
				$lol=$row["UserName"];
			?>
			<tr>

		<form action="" method="POST">
				<td  name="username"> <?php echo $row["UserName"];  ?> </td>
				<td><a href="#" class="btn btn-primary" >View</a></td>
			 <input type="hidden" name="u" value=<?php echo $row["UserName"];  ?>>
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


	</body>
</html>

