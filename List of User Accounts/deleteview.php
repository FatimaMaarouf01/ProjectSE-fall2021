<?php
include("../connection.php");
echo "hello";

    if(isset($_GET["username"]){
        // Initialise PDO connection (May need to abstract connection to an include)
        
                $username=$_GET["(username")];
                $query = "DELETE  FROM  users WHERE UserName =?";

                $stmt = $connection->prepare($query);
                 $stmt->bind_param(s,$username);
                 $stmt->execute();

    }
    else{
    die("Don't try to mess around bro ;)");

}
?>