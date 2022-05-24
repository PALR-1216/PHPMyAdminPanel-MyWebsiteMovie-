<?php 
	include('conn.php');
	ob_start();
	
?>
<head>
	
    <meta charset="UTF-8">
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Admin Page</title>
</head>
 
<body>
    <form method="POST">
        <div class="login-box">
            <h1>ADMIN</h1>
 
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="ADMIN"
                         name="AdminName" value="" required>
            </div>
 
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="PASSWORD"
                         name="password" value="" required>
            </div>
 
            <input class="button" type="submit"
                     name="login" value="Sign In">
        </div>
    </form>
</body>
 
</html> 
<?php 

if($_SERVER['REQUEST_METHOD'] == "POST") {
	$username = $_POST['AdminName'];
	$password = $_POST['password'];
	// $enUser = sha1($username);
	$encodedPassword = sha1($password);
	$encodedUsername = sha1($username);
	$sql = "select * from Users where Username = '$encodedUsername' and password = '$encodedPassword'";

	// $sql = "select Users where Username=" . sha1($username). " and  password= ". sha1($password) . "";
// 
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);


	if($count == 1) {
		session_start();
		$_SESSION['AdminId'] =$_POST['AdminName'];
		header('location: Admin.php');
		// ob_end_flush();
	}

	else{
		echo "<script> alert('Incorect password or Username')</script>";
	}
}?>