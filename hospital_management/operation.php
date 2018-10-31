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
$operation_display="select * from operation";
$run=mysqli_query($conn,$operation_display); 
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
					<th>No_of_operation</th>
					<th>Doctor</th>
					<th>Start_time</th>
					<th>End_time</th>
                    </tr>
 
<?php

while($operation_display=mysqli_fetch_assoc($run)){
   echo "<tr>";
   echo "<td>".$operation_display['No_of_operation']."</td>";
   echo "<td>".$operation_display['Doctor']."</td>";
   echo "<td>".$operation_display['Start_time']."</td>";
   echo "<td>".$operation_display['End_time']."</td>";
  
   echo "</tr>";
}
?>

</table>
</div>

</body>
</html>

