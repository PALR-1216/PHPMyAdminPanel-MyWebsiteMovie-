<?php
ob_start();
include "conn.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Admin Panel</title>



</head>

<body>




<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="listMovies.php">Edit Movies</a>
        </li>  

		  <li class="nav-item">
          <a class="nav-link " aria-current="page" href="Admin.php">Edit Shows</a>
        </li>  
        
      </ul>

      <!-- <form class="d-flex" method="Get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="searchValue">
      </form> -->



      <form class="d-flex" method="POST">
        <button class="btn btn-outline-success" type="submit" name="logOut">LogOut</button>
      </form>
    </div>
  </div>
</nav>








<?php 

if(isset($_POST['logOut'])) {
	session_destroy();
	header('location:index.php');
}


// if(isset($_GET['searchValue'])) {
//   // echo "select * from allshows where showName like '%", $_GET['searchValue'], "%'";
//   $sql = "select * from allshows where ShowName like '%" . $_GET['searchValue'] . "%'";



// }




?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

