<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_project";


$title = $_POST["title"];
$description = $_POST["description"];
$file = $_FILES["fileupload"]["name"];
$date = date("Y/M/D");
$logindata =  $_SESSION['logindata'];
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileupload"]["name"]);

    $sql = "INSERT INTO creatadd (title_name,description_name,file_name1,date,usernewid)
    VALUES ('$title','$description','$file','$date','$logindata')";

    if (($conn->query($sql) === TRUE)&&(move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file))) {
    echo "New add has been created successfully";
     header("Location: dashboard.php");
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>