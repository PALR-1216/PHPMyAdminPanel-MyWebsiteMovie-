<?php

session_start();
ob_start();
if(!isset($_SESSION['AdminId'])){
	header('location:index.php');
}

include ('conn.php');
include('navbar.php');


$name = $_GET['epName'];
$id = $_GET['hashID'];
$sql = "update `episodeName` set episodeName=" . $epName . " where hashID= . $id . ";
echo $ql;

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
    <label for="epName" class="form-label">Change episode Name</label>
    <input type="text" class="form-control" id="epName" name="epName" value="<?php echo $name?>">
    
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php 

//here we update the show data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$epName = $_POST['epName'];

	if($epName) {

		
		$sql= sprintf("UPDATE allepisodes SET episodeName = '%s'  WHERE hashID = '%s'", $epName, $id);
		
		$resultSet = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
		header('location: Admin.php');
	
	}
}


?>



 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>