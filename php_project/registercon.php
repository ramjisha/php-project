<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_project";

$firstname1 = $_POST['username'];
$email1 = $_POST['email'];
$password1 = $_POST['password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (name, email, passwordnew)
VALUES ('$firstname1', '$email1', '$password1')";

if ($conn->query($sql) === TRUE) {
     echo "New record created successfully 123";
     header( "Location: login.php" );
} else {
    echo "Error: " . $sql . "" . $conn->error;
}

$conn->close();
?>