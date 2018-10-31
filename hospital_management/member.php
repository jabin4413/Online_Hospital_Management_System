<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:login.php");
} else {
?>
<!doctype html>
<html>
<head>
<title>Welcome</title>
<style>
body {
    background-color: lightblue;
}
</style>
</head>
<body>
<h2>Welcome, <?=$_SESSION['sess_user'];?>! <a href="logout.php">Logout</a></h2>
<p>
Welcome to our Online Hospital Management System.We serve all facilities to you..... Please come again and take oue service.Thank you. 

</p>
</body>
</html>
<?php
}
?>


