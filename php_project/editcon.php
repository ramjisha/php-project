<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$title = $_POST["title"];
$description = $_POST["description"];
$file = $_FILES["fileupload"]["name"];
$date = date("Y/M/D");
$add_id = $_SESSION["updateid"] ;

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileupload"]["name"]);

$sql = "UPDATE creatadd SET title_name ='$title', description_name ='$description',file_name1 ='$file',date ='$date' WHERE addid ='$add_id'";
 if (($conn->query($sql) === TRUE)&&(move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file))) {
    echo "New add has been updated successfully";
     header("Location: dashboard.php");
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>