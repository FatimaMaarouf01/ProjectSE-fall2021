<?php 

include("../connection.php");

 
if (isset($_POST["submit"]))
 {
        if(isset($_POST["first_name"]) && $_POST["first_name"] != ""){
            $first_name =  $_POST["first_name"];
            
        }else{
            die("Don't try to mess around bro ;)");

        }
        if(isset($_POST["last_name"]) && $_POST["last_name"] != ""){
            $last_name =  $_POST["last_name"];
            
        }else{
            die("Don't try to mess around bro ;)");

        }
        if(isset($_POST["email"]) && $_POST["email"] != ""){
            $email = $_POST["email"];

        }else{
            die("Don't try to mess around bro ;)");
        }

        if(isset($_POST["position"]) && $_POST["position"] != ""){
            $pos=$_POST["position"];
        }else{
            die("Don't try to mess around bro ;)");
        }
     
      if(isset($_FILES["file"]["name"]) && $_FILES["file"]["name"] != ""){
            $cv1 =  $_FILES["file"]["name"];
            $tname = $_FILES["file"]["tmp_name"];
        }else{
            die("Don't try to mess around bro ;)");

        }

    $uploads_dir = '../List of CV/CVs';
    move_uploaded_file($tname, $uploads_dir.'/'.$cv1);
    
    header("Location:../LanPage/index.php");
 
    $sql = "INSERT into cvs(first_name,last_name,type,email,cv_attachment) VALUES('$first_name','$last_name','$pos',' $email','$cv1')";
 
    if(mysqli_query($connection,$sql)){
 
    echo "CV Sucessfully uploaded";
    }
    else{
        echo "Error";
    }
}
 
 
?>