<?php 

include("../connection.php");

 
if (isset($_POST["submit"]))
 {
     #retrieve file title
     if(isset($_POST["title"]) && $_POST["title"] != ""){
	$title =  $_POST["title"];
	
    }else{
	    die("Don't try to mess around bro ;)");
    }
     
    if(isset($_FILES["file"]["name"]) && $_FILES["file"]["name"] != ""){
        $pname =  $_FILES["file"]["name"];
        $tname = $_FILES["file"]["tmp_name"];
    }else{
        die("Don't try to mess around bro ;)");

    }

    $uploads_dir = '../List of Project-Admin/projects';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
    
    header("Location:../List of Project-Admin/List of Projects.php");
 
    $sql = "INSERT into projects(title,attachment) VALUES('$title','$pname')";
 
    if(mysqli_query($connection,$sql)){
 
    echo "File Sucessfully uploaded";

    $query1 = "SELECT `first_name`, `email` FROM `users` ";
	$stmt1 = $connection->prepare($query1);
	$stmt1->execute();
	$results1 = $stmt1->get_result();

	while($row =$results1->fetch_assoc()){
		$to= $row['email'];
		$subject= "Project Added";
		$message="Dear $row[first_name], \nPlease check your account. The new project named \"$title\" has been added. \n Click on the following link to log in: http://127.0.0.1/ModernArch/Login/index.php \n Modern Architecture";
		mail($to, $subject, $message);
	}



    }
    else{
        echo "Error";
    }


}
 
 
?>