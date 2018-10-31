<!doctype html>
<html>
<head>
<title>Login</title>
</head>
<body>

<p><a href="register.php">register</a> | <a href="login.php">login</a></p>
<h3>Login Form</h3>
<form action="" method="POST">
log_id: <input type="log_id" name="user"><br />
Password: <input type="password" name="pass"><br />	
<input type="submit" value="login" name="submit" />
</form>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('job_recruitment') or die("cannot select DB");

	$query=mysql_query("SELECT * FROM login WHERE log_id='".$user."' AND password='".$pass."'");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($query))
	{
	$dbusername=$row['log_id'];
	$dbpassword=$row['password'];
	}

	if($user == $dbusername && $pass == $dbpassword)
	{
	session_start();
	$_SESSION['sess_user']=$user;

	/* Redirect browser */
	header("Location: member.php");
	}
	} else {
	echo "Invalid log_id or password!";
	}

} else {
	echo "All fields are required!";
}
}
?>

</body>
</html>