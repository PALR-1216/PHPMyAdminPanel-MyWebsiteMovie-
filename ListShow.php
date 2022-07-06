<?php

if(!isset($_SESSION['AdminId'])){
	header('location:index.php');
}

// session_start();



include("conn.php");
$sqlQuery = "SELECT * FROM allshows;";
$resultSet = mysqli_query($con, $sqlQuery) or die("database error:". mysqli_error($con));
?>
<table id="editableTable" class="table table-bordered">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Image</th>	
			<th>Action</th>
			
		</tr>
	</thead>
	<tbody>
		<?php while( $row = mysqli_fetch_assoc($resultSet) ) { ?>
		   <td id="<?php echo $row ['ShowId']; ?>"> <?php echo $row['ShowId']; ?> </td> 
		   <td><?php echo $row ['ShowName']; echo " Season "; echo $row['Seasons'];?></td>
		   <td><?php echo $row ['ShowImage']; ?></td>
		<td><a href='editEpisodes.php?Id=<?php echo $row['ShowId'] ;?>'>Edit Episodes or <a href="editShows.php?showName=<?php echo $row['ShowName']?>&showImage=<?php echo $row['ShowImage'] ?>&ShowId=<?php echo $row['ShowId']?>">Edit Show</td>
			
			
		   </tr>
		<?php } ?>
	</tbody>
</table>