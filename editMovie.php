<?php
session_start();
include('conn.php');
include('navbar.php');
$id = $_GET['movieId'];



if(!isset($_SESSION['AdminId'])){
	header('location:index.php');
}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>




	<form method="post">
  <div class="mb-3">
    <label for="ShowName" class="form-label">Movie Name</label>
    <input type="text" class="form-control" id="movieName" name="movieName" required value= "<?php echo $_GET['moviename']?>">
    
  <div class="mb-3">
    <label for="showImage" class="form-label">Movie Image (800 x 1200)</label>
    <input type="text" class="form-control" id="movieImage" name="Image" required value="<?php echo $_GET['movieImage']?>">
  </div>
 
  <button type="submit" class="btn btn-primary">Update Data</button>
</form>

	  <img src="https://image.tmdb.org/t/p/w500<?php echo $_GET['movieImage']?>" width=400 height=550/>


<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$movieName = $_POST['movieName'];
	$movieImage = $_POST['Image'];

	
	$sql= sprintf("UPDATE allmovies SET movieName = '%s', movieImage='%s'  WHERE hashId = '%s'", $movieName, $movieImage, $id);
	
		
		$resultSet = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
		header('location: listMovies.php');
	
}

?>



  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>

