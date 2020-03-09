<?php

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

$add_id = $_GET["delid"];
$sql = "DELETE FROM creatadd WHERE addid ='$add_id'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location: manageadd.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>