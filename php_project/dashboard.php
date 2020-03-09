<!doctype html>
<?php  session_start() ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>dashboard</title>
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

if(empty($logindata)){
    header("Location: login.php");
}


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql1="SELECT * FROM creatadd WHERE usernewid ='$logindata' ORDER BY addid DESC";
$result1 = $conn->query($sql1); ?>
<div class="container">
  <h2>Advertisement Details</h2>
  <p>You have to see your add details below</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Add_ID</th>
        <th>Title_name</th>
        <th>Description_name</th>
        <th>file_name</th>
        <th>date</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
     <tbody>
    <?php  if($result1->num_rows > 0){
      while($row1=$result1->fetch_assoc()){ ?>
      <tr>
        <td><?php echo $row1["addid"]; ?></td>
        <td><?php echo $row1["title_name"]; ?></td>
        <td><?php echo $row1 ["description_name"]; ?></td>
        <td><?php echo $row1["file_name1"]; ?></td>
        <td><?php echo $row1["date"]; ?></td>
        <td>  <a href="delete.php?delid=<?php echo $row1['addid']  ?>">Delete</a></td>
        <td>  <a href="editadd.php?editid=<?php echo $row1['addid']  ?>">Edit</a></td>
      </tr>
       <?php }
  }
?>
    </tbody>
  </table>
</div>       
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>