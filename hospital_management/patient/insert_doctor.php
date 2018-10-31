<?php
include("includes/dp.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inster doctor</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

  

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
body {
    background-color: orange;
}
</style>
</head>
<body>
<div class="row">
	<div class="col-md-6 col-md-offset-3"  style="background-color:yellow">
		<ul class="nav nav-pills">
			<li><a href="../index.php">Home</a></li>
			<li><a href="display_doctor.php">Display</a></li>
			
		</ul>
	</div>
</div>
<div class="row">
<div class="col-md-12">
	<form method="post" action="insert_doctor.php" enctype="multipart/form-data" >
		<table width="700" align="center" border="2" style="background-color:#66FFFF">
			<tr align="center">
				<td colspan="2"><h1>Doctor Document</h1></td>
			</tr>
			<tr>
				<td align="right"><b>IDs:</b></td>
				<td><input type="text" name="doctor_id"></td>
			</tr>
			<tr>
				<td align="right"><b>Names:</b></td>
				<td><input type="text" name="doctor_name"></td>
			</tr>
			<tr>
				<td align="right"><b>First_names</b></td>
				<td><input type="text" name="doctor_first_name"></td>
			</tr>
			<tr>
				<td align="right"><b>Last_names</b></td>
				<td><input type="text" name="doctor_last_name"></td>
			</tr>
			<tr>
				<td align="right"><b>Email</b></td>
				<td><input type="text" name="doctor_email"></td>
			</tr>
			<tr>
				<td align="right"><b>Department</b></td>
				<td><input type="text" name="doctor_department"></td>
			</tr>
			<tr align="center">
				<td colspan="2">
					<input type="submit" name="insert_pat" value="insert Document">
				</td>
			</tr>
		</table>
	</form>
	</div>
</div>
</body>
</html>
<?php
if(isset($_POST['insert_pat'])){
$d_id=$_POST['doctor_id'];
$d_name=$_POST['doctor_name'];
$d_first_name=$_POST['doctor_first_name'];
$d_last_name=$_POST['doctor_last_name'];
$d_email=$_POST['doctor_email'];
$d_department=$_POST['doctor_department'];

if($d_id=='' OR $d_name=='' OR $d_first_name=='' OR $d_last_name==''OR $d_email==''OR $d_department==''){
	echo "<script>alert('please fill all the field')</script>";
	exit();
}
else{
	$insert_details="insert into doctor (ID,Name,First_name,Last_name,Email,Department) values ('$d_name','$d_first_name','$d_last_name','$d_email','$d_department')";
	$run_detaisl=mysqli_query($con,$insert_details);
if($run_detaisl){
	echo"<script>alert('successful')</script>";
}

}


}
?>