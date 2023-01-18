<?php
session_start();
if (isset($_POST['submit']))
{
	$conn = mysqli_connect("localhost","root","","myrailway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
$Username=$_POST['Username'];
$Passwords=$_POST['Passwords'];
$sql = "SELECT * FROM user_login WHERE Username = '$Username' AND Passwords = '$Passwords';";
$sql_result = mysqli_query ($conn, $sql) or die ('request "Could not execute SQL query" '.$sql);
$user = mysqli_fetch_assoc($sql_result);
		if(!empty($user)){
			$_SESSION['user_info'] = $user['Username'];
			$message='User logged in successfully';
			  $_SESSION["Username"] = $user["Username"];
              echo $user["Username"];
			header("location:passenger_home.php");
		}
		else{
			$message = 'Wrong email or password.';
		}
	echo "<script type='text/javascript'>alert('$message');</script>";
		
}

if (isset($_POST['done']))
{
	$conn = mysqli_connect("localhost","root","","myrailway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
$AdminUsername=$_POST['AdminUsername'];
$Password=$_POST['Password'];
$sql = "SELECT * FROM admins WHERE AdminUsername = '$AdminUsername' AND Passwords = '$Password';";
$sql_result = mysqli_query ($conn, $sql) or die ('request "Could not execute SQL query" '.$sql);
$user = mysqli_fetch_assoc($sql_result);
		if(!empty($user)){
			$_SESSION['user_info'] = $user['AdminUsername'];
			$message='Admin logged in successfully';
			  
			header("location:admin_add_train.php");
		}
		else{
			$message = 'Wrong email or password.';
		}
	echo "<script type='text/javascript'>alert('$message');</script>";
		
}
?>