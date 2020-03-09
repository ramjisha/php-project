<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_project";

$email1 = $_POST['email'];
$password1 = $_POST['password2'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users WHERE email = '$email1' AND passwordnew ='$password1'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    $row=$result->fetch_assoc();
    $_SESSION['logindata']=$row['userid'];
    header("Location: dashboard.php");
   
}else{
    echo "login error";
}
$conn->close();
?>