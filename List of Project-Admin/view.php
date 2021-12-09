<?php

include("../connection.php");

$sql1 = "SELECT * FROM projects";
$result = mysqli_query($connection, $sql1);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Downloads files
if (isset($_GET['project_id'])) {
    $id = $_GET['project_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM projects WHERE project_id=$id";
    $result1 = mysqli_query($connection, $sql);

    $file = mysqli_fetch_assoc($result1);
    $filepath = 'projects/' . $file['title'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('projects/' . $file['title']));
        readfile('projects/' . $file['title']);

        //Now update downloads count
        $newCount = $file['attachment'] + 1;
        $updateQuery = "UPDATE projects SET attachment=$newCount WHERE project_id=$id";
        mysqli_query($connection, $updateQuery);
        header("Location:List of Projects.php");
        exit;
    }

}
?>