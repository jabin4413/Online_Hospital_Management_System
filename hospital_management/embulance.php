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
$embulance_display="select * from embulance";
$run=mysqli_query($conn,$embulance_display); 
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
    
</head>
<body>
 
<table width="500" border="1" cellpadding="1" cellspacing="1">

					<tr>
					<th>ID</th>
					<th>driver_name</th>
					<th>driver_phn</th>
					<th>embulance_model</th>
                    </tr>
 
<?php

while($embulance_display=mysqli_fetch_assoc($run)){
   echo "<tr>";
   echo "<td>".$embulance_display['ID']."</td>";
   echo "<td>".$embulance_display['driver_name']."</td>";
   echo "<td>".$embulance_display['driver_phn']."</td>";
   echo "<td>".$embulance_display['embulance_model']."</td>";
  
   echo "</tr>";
}
?>

</table>
</div>

</body>
</html>

