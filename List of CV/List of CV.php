<?php
include("../connection.php");



$query = "SELECT * FROM cvs";
$stmt = $connection->prepare($query);
$stmt->execute();
$results = $stmt->get_result();


?>


<!doctype html>
<html lang="en">
  <head>
  	<title>List of CVs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	<link rel="icon" type="image/x-icon" href="../LanPage/assets/logo-small.jpeg" />


	</head>
	<body>
		<a class="btn btn-primary" href="../AdminPage/index.php" target="_self"> Home Page </a>  
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Modern Architecture</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h4 class="text-center mb-4">List of CV</h4>
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
					      <tr>
							  <!-- <th></th> -->
					        <th>Applicant's Name</th>
					        <th>Type</th>
                            <th>View / Print</th>
					        <th>Delete</th>
					      </tr>
					    </thead>
					    <tbody>
							<?php 
				while($row = $results->fetch_assoc()){
						?>
					      <tr>
							  <!-- <td name="cv_id" type="hidden" value="<?php echo $row["cv_id"];  ?> "></td> -->
					        <td  name="title" > <?php echo $row["first_name"]." ".$row["last_name"];  ?> </td>
							<td  name="type" > <?php echo $row["type"];  ?> </td>
					        <td><a href="CVs/<?php echo $row["cv_attachment"];  ?> " target= "_blank" class="btn btn-primary">View CV</a></td>
					        <td><a href="delete.php?cv_id=<?php echo $row['cv_id']; ?>" class="btn btn-primary">Delete Cv</a></td> 
                            
					      </tr>
						  <?php
				}
			?>
			<!--<script>
				function printIt(CVs/document.getElementById(i).value) {
  var win = window.open();
  self.focus();
  win.document.open();
  win.document.write('<'+'html'+'><'+'body'+'>');
  win.document.write(CVs/document.getElementById(i).value);
  win.document.write('<'+'/body'+'><'+'/html'+'>');
  win.document.close();
  win.print();
  win.close();
}
			</script>-->
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
