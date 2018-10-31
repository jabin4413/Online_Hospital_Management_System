<?php
include("includes/dp.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Display Patient</title>
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
    background-color: lightblue;
}
</style>
</head>
<body>
<div class="container">
	

<header class="page-header"><h1 align="center">Display All the Patient</h1></header>
  <div class="row">
  	<div class="col-md-4 col-md-offset-4">
  		
  
	<?php
		$display="select * from patient";
		$run_display=mysqli_query($con,$display);
		while($row_display=mysqli_fetch_array($run_display)){
			$name_p=$row_display['pa_name'];
			$age_p=$row_display['pa_age'];
			$phn_p=$row_display['pa_phn'];
			$dis_p=$row_display['pa_dis'];
			$location=$row_display['pa_location'];


		 	echo"
			Name:               <b>$name_p</b></br>
			Age_:               $age_p </br>
			Mobile Number:      $phn_p </br>
			Disease:	        $dis_p </br>
			Patient Locatio:	$location </br>

			</br>
			</br>



		 	";
		}
	?>
		</div>
  </div>

</div>
</body>
</html>