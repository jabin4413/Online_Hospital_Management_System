<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
$patient_display="select * from patient";
$run=mysqli_query($conn,$patient_display); 
?>

<!DOCTYPE html>


	<html>
<head>
<style>
body {
    background-color: lightblue;
}
</style>
</head> 


    
<body>
<table width="500" border="1" cellpadding="1" cellspacing="1">

  

					<tr>
					<th>pa_name</th>
					<th>pa_phn</th>
					<th>pa_dis</th>
					<th>pa_location</th>
					

					</tr>
			<?php

			while($patient_display=mysqli_fetch_assoc($run)){
			   echo "<tr>";
			   echo "<td>".$patient_display['pa_name']."</td>";
			   echo "<td>".$patient_display['pa_phn']."</td>";
			   echo "<td>".$patient_display['pa_dis']."</td>";
			   echo "<td>".$patient_display['pa_location']."</td>";
			  
			   echo "</tr>";
			}
			?>

			</table>
</div>

</body>
</html>

