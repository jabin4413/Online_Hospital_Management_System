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
	 $connect = mysqli_connect("localhost", "root", "", "hospital");
	 $filter_Result = mysqli_query($connect, $query);
	 return $filter_Result;
 }
?>


<!DOCTYPE html>
<html>
<head>
<style>
.search-box {
    width:375px;
    height:32px;
    background-color:#fff;
    margin:5px 7px;
    border:1px solid #cfcfcf;
    -moz-border-radius: 5px; /* FF1+ */
    -webkit-border-radius: 5px; /* Saf3-4 */
    border-radius: 5px; /* Opera 10.5, IE 9, Saf5, Chrome */
    position:relative;
}
.search-box img.search-icon {
    margin:8px 0 0 5px;
}
.search-box input {
    border:none;
    height:30px;
    width:332px;
    margin:0;
    position:absolute;
    font-size:16px;
    padding-left:5px;
    padding-right:5px;
}
</style>
<meta http-equiv= "Content-Type" content = "text/html; charset=utf-8" />
<title>Search Engine - Home</title>

</head>
<body>
<center>
<h2> Search Restuarent </h2>
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