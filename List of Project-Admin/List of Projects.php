<?php

include("../connection.php");



$query = "SELECT * FROM projects";
$stmt = $connection->prepare($query);
$stmt->execute();
$results = $stmt->get_result();


?>

<!doctype html>
<html lang="en">
  <head>
  	<title>List of Projects-Admin</title>
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
					<h4 class="text-center mb-4">List of Projects</h4>
                    <a href="#" class="btn btn-primary" onclick="location.href='../Add Project/index.php'">Add New Project</a><br><br>
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
					      <tr>
					        <th>Title</th>
							<th>View</th>
							<th>Edit</th>
                            <th>Delete</th>
					      </tr>
					    </thead>
						<tbody>
						<?php 
				while($row = $results->fetch_assoc()){
						?>
			<tr>

				<td  name="title" > <?php echo $row["title"];  ?> </td>
				<td><a class="btn btn-primary" href="projects/<?php echo $row["attachment"];  ?>">View </a></td>
				<td><a class="btn btn-primary" href="edit.php?project_id=<?php echo $row['project_id']; ?>">Edit</a></td>
    			<td><a class="btn btn-primary" href="delete.php?project_id=<?php echo $row['project_id']; ?>">Delete</a></td> 

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
