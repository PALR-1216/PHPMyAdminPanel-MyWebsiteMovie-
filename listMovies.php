<?php

session_start();
if(!isset($_SESSION['AdminId'])){
	header('location:index.php');
}

// session_start();



include("conn.php");
include('navbar.php');
$sqlQuery = "SELECT * FROM allmovies;";
$resultSet = mysqli_query($con, $sqlQuery) or die("database error:". mysqli_error($con));
?>


<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>


<table id="editableTable" class="table table-bordered">
	<thead>
		<tr>
			<th>Name</th>
			<th>Image</th>	
			<th>Action</th>
			<th>Watch</th>
			
		</tr>
	</thead>
	<tbody>
		<?php while( $row = mysqli_fetch_assoc($resultSet) ) { ?>
		   <td><?php echo $row ['movieName']; ?></td>
		   <td><?php echo $row ['movieImage']; ?></td>
		<td><a href="editMovie.php?moviename=<?php echo $row['movieName']?>&movieImage=<?php echo $row['movieImage']?>&movieId=<?php echo $row['hashId']?>">Edit Movie</td>
			<td><a href="watchMovie.php?movieId=<?php echo $row['hashId']; ?>&movieName=<?php echo $row['movieName']?>">Watch Movie</td>

		   </tr>
		<?php } ?>
	</tbody>
</table>