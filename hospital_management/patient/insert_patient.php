<?php
include("includes/dp.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inster patient</title>
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
			<li><a href="display_patient.php">Display</a></li>
			
		</ul>
	</div>
</div>
<div class="row">
<div class="col-md-12">
	<form method="post" action="insert_patient.php" enctype="multipart/form-data" >
		<table width="700" align="center" border="2" style="background-color:#66FFFF">
			<tr align="center">
				<td colspan="2"><h1>Patient Document</h1></td>
			</tr>
			<tr>
				<td align="right"><b>Name:</b></td>
				<td><input type="text" name="patient_name"></td>
			</tr>
			<tr>
				<td align="right"><b>age:</b></td>
				<td><input type="text" name="patient_age"></td>
			</tr>
			<tr>
				<td align="right"><b>Mobile NO:</b></td>
				<td><input type="text" name="mobile"></td>
			</tr>
			<tr>
				<td align="right"><b>Diseases</b></td>
				<td><input type="text" name="diseases"></td>
			</tr>
			<tr>
				<td align="right"><b>Location</b></td>
				<td><input type="text" name="location"></td>
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
$p_name=$_POST['patient_name'];
$p_age=$_POST['patient_age'];
$phn=$_POST['mobile'];
$dis=$_POST['diseases'];
$location=$_POST['location'];

if($p_name==''OR $p_age=='' OR $phn==''  OR $dis=='' OR $location==''){
	echo "<script>alert('please fill all the field')</script>";
	exit();
}
else{
	$insert_details="insert into patient (pa_name,pa_age,pa_phn,pa_dis,pa_location) values ('$p_name','$p_age','$phn','$dis','$location')";
	$run_detaisl=mysqli_query($con,$insert_details);
if($run_detaisl){
	echo"<script>alert('successful')</script>";
}

}


}
?>