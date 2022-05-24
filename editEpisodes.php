<?php

session_start();
if(!isset($_SESSION['AdminId'])){
	header('location:index.php');
}


include('conn.php');
include('navbar.php');

//make list of each episode of the id in here
// select * from allshows where ShowId = id order by episodeNumber;
$id = $_GET['Id'];


$sqlQuery = "SELECT * FROM allepisodes where showId = " . $id. " order by episodeNumber;";
$resultSet = mysqli_query($con, $sqlQuery) or die("database error:". mysqli_error($con));



?>


<table id="editableTable" class="table table-bordered">
	<thead>
		<tr>
			<th>HashId</th>
			<th>Name</th>
			<th>Episode Number</th>	
			<th>Action</th>
			<th>Watch</th>
			
		</tr>
	</thead>
	<tbody>
		<?php while( $row = mysqli_fetch_assoc($resultSet) ) { ?> 
		<td><?php echo $row ['hashID']; ?></td>
		   <td><?php echo $row ['episodeName']; ?></td>
		   <td><?php echo $row ['episodeNumber']; ?></td>
		<td><a href='editRow.php?epName=<?php echo $row['episodeName'];?>&hashID=<?php echo $row['hashID']; ?>'>Edit</td>
			<td><a href='watchVideo.php?epName=<?php echo $row['episodeName'];?>&hashID=<?php echo $row['hashID']; ?>'>Watch Video</td>
		
		
			
		   </tr>
		<?php } ?>
	</tbody>
</table>