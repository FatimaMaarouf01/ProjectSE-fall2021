<?php

include("../connection.php");

?>
<html lang="en">
  <head>
  	<title>Edit Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
    <link rel="icon" type="image/x-icon" href="../LanPage/assets/logo-small.jpeg" />
<style>
    body{
        background-image:url(images/edit.jpg);

    }
    .header{
        font-size:30px;
        font-style:bold;
        font-family: Arial;
        color:#212529;
    
       
    }
    .submit{
        border-radius: 8px;
        background-color:lightgrey;
        font-size:15px;
    }
    #center{
    width: 50%;
    margin:auto;
    padding:10px;
    bottom:50%;
      }
</style>
    </head>
<body>
<div class="block">
<form method="post" class="form-horizontal" enctype="multipart/form-data">
    <div id="center">
    <div id="style" class="form-group">
        <labe1 class="header"><strong>Upload the Updated Version of the Project</strong></label><br><br>
        <div class="col-sm-6">
            <input type="File" name="file" class="form-control" accept=".zip,.rar,.7zip" required/><br><br>
            <input type="hidden" name="id" value="<?php echo $project_id ;?>" />
        </div>
    </div>
    <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9 m-t-15">
            <button class="submit" type="submit" name="submit">Update</button> 
            </div> 
    </div>
</div>
</div>
</form>
</div>
</body>
</html>







<?php

include("../connection.php");

if (isset($_POST["submit"]))
 {
     #retrieve file title
     $project_id = $_GET['project_id'];
     
    
    $pname = $_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
    

     #upload directory path
    $uploads_dir = 'projects';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname); 
  
 
    $sql = mysqli_query($connection,"UPDATE `projects` set attachment='$pname' where project_id='$project_id'");
    // $sql = "UPDATE projects set project_attachment=$pname where title=$title";
 
    if($sql){
 
    //echo "File Sucessfully uploaded";
    header("Location:List of Projects.php");
    }
    else{
        echo "Error";
    }
}

?>