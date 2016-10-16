<?php
require_once "config.php";

if(isset($_SESSION['admin']))
{
	header('Location: home.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$user = $_POST['username'];
	$pass = $_POST['password'];


$qry = "SELECT * FROM panel_user WHERE user_name = '$user' AND password = '$pass'";
	$result = mysqli_query($conn, $qry);
	$row = mysqli_fetch_assoc($result);

if ($row['user_name'] == $user && $row['password'] == $pass) 
{
	$_SESSION['admin'] = $user;
	header('Location: home.php' );
}
else
{
	echo "login incorrect";
}
}

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">
	<label>username</label><input type="text" name="username"></input><br>
	<label>password</label><input type="password" name="password"></input><br>
	<input type="submit" name="submit"></input><br>
</form>
</body>
</html>