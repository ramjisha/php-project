<!doctype html>
<?php session_start();  ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>manageadd.php</title>
  </head>
  <body>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">olx</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">DASHBOARD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="creatadd.php">CREATE ADD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="manageadd.php">MANAGE ADD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="editadd.php">EDIT ADD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adddetail.php">ADD DETAIL</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">LOGOUT</a>
      </li>
    </ul>
  </div>
</nav><br><br>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_project";
$logindata =  $_SESSION['logindata'];


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(empty($logindata)){
    header("Location: login.php");
}

$sql= "SELECT COUNT(usernewid) FROM creatadd WHERE usernewid ='$logindata'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
  $row = $result->fetch_assoc();
//  echo $row["COUNT(usernewid)"];
}
$sql1="SELECT * FROM creatadd WHERE usernewid ='$logindata' ORDER BY addid DESC";
$result1 = $conn->query($sql1);
 if($result1->num_rows > 0){
  while($row1 =$result1->fetch_assoc()){ ?>
   <div class="container">
  <h2><?php echo $row1["title_name"] ?></h2>
  <p><?php echo $row1["description_name"] ?></p>
  <P><?php echo $row1["date"]  ?> </P>            
  <img src="uploads/<?php echo $row1["file_name1"] ?>" class="img-thumbnail" alt="Cinque Terre" width="500" height="236"><br>
  <a  href="delete.php?delid=<?php echo $row1['addid']  ?>">Delete</a>
  <a href="delete.php?editid=<?php echo $row1['addid']  ?>">Edit</a>

</div>
   <?php }
 }
$conn->close();
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>