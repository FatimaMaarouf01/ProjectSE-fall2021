<?php

include("../connection.php");

$project_id = $_GET['project_id']; // get id through query string

$del = mysqli_query($connection,"Delete from projects where project_id = '$project_id'"); // delete query

if($del)
{
    mysqli_close($connection); // Close connection
    header("Location:List of Projects.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>