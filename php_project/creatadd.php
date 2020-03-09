<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>creatadd</title>
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

<div class="container">
      <h2>Add file to olx</h2>
      <P>Add some title and descriptions</p>
  <form action="uploadadd.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="usr">Title:</label>
        <input type="text" class="form-control" id="usr"name="title">
    </div>
    <div class="form-group">
      <label for="comment">Descriptions:</label>
      <textarea class="form-control" rows="5" id="comment" name="description"></textarea>
    </div>
    <div class="form-group">
      <input type="file" class="form-control-file border" name="fileupload">
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>