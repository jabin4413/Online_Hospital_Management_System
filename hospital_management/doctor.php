<?php
 if(isset($_POST['search']))
 {
	 $valueToSearch =  $_POST['valueToSearch'];
	
	 $query = "SELECT * FROM operation WHERE CONCAT(No_of_operation,Doctor,Start_time,End_time)LIKE '%".$valueToSearch."%'";
	 $search_result = filterTable($query);
}else 
 { 
	 $query = "SELECT * FROM operation";
	 $search_result = filterTable($query);
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
	 
	 $filter_Result = mysqli_query($conn, $query);
	 return $filter_Result;
 }
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
<center>
<h2> Search Doctor Info </h2>
<form  action="search2.php" method= "POST">
<div class = "search-box">

<input type = "text"  name= "valueToSearch" placeholder= "Doctor to Search" /><br><br>
</div>
<input type = "submit" name= "search"  value= "Search" /> <br><br>
<table width = "600" border= "1" cellpadding = "1" cellspacing = "1">
<tr>


					<th>No_of_operation</th>
					<th>Doctor</th>
					<th>Start_time</th>
					<th>End_time</th>
                   

</tr>
<?php
while($row = mysqli_fetch_array($search_result)) :?>
<tr>
 <td><?php echo $row['No_of_operation']; ?></td>
	<td><?php echo $row['Doctor']; ?></td>
	<td><?php echo $row['Start_time']; ?></td>
	<td><?php echo $row['End_time']; ?></td>

	</tr>
	<?php endwhile; ?>
	</table>

</form>

</center>



</body>
</html>