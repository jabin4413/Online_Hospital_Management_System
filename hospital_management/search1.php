<?php
if(isset($_POST['search']))
{
$ValueToSearch=$_POST['ValueToSearch'];
$operation_display="select * from operation where CONCAT(No_of_operation,Doctor,Start_time,End_time)LIKE '%".$ValueToSearch."%'";
$search_result=filterTable($operation_display);
}
else{
$operation_display="select * from operation";
$search_result=filterTable($operation_display);
}
function filterTable($query)
{
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
$fliter_Result=mysqli_query($conn,$operation_display);
return $fliter_Result;
}


 
?>

<!DOCTYPE html>


	<html>
<head>
<title> PHP HTML DATA SEARCH FROM TABLE</title>
<style>
body {
    background-color: lightblue;
}
</style>
</head>

<body>
 <form action "search1.php" method="POST">
<input type="text" name="ValueToSearch" placeholder="Value To Search" ><br> <br>
<input type="submit" name="search" value="Filter" ><br><br>
<table width="500" border="1" cellpadding="1" cellspacing="1">

					<tr>
					<th>No_of_operation</th>
					<th>Doctor</th>
					<th>Start_time</th>
					<th>End_time</th>
                    </tr>
 
<?php

while($operation_display=mysqli_fetch_assoc($search_result)){
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
</form>

</body>
</html>

