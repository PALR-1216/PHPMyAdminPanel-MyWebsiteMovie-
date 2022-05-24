<?php


$hostname = 'bhmgtnkq5xyqbcjnmbqs-mysql.services.clever-cloud.com';
$username='umpsnncz2mkh7bwi'; 
$password='T0lq07iwndQtJ4tqMLuK'; 
$dbname='bhmgtnkq5xyqbcjnmbqs'; 

$con = new mysqli($hostname, $username, $password, $dbname);

if($con-> connect_errno){
    trigger_error('database connection failed: ' . $con->connect_error);
	exit();
}

else{

    
}?>
