<?php

include("../connection.php");

$cv_id = $_GET['cv_id']; // get id through query string

$del = mysqli_query($connection,"Delete from cvs where cv_id = '$cv_id'"); // delete query

if($del)
{
    mysqli_close($connection); // Close connection
    header("Location:List of CV.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting CV"; // display error message if not delete
}
?>