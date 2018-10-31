<?php
 if(isset($_POST['search']))
 {
	 $valueToSearch =  $_POST['valueToSearch'];
	
	 $query = "SELECT * FROM rest WHERE CONCAT(Restuarent_name, Location, Opening_hour, Ending_hour)LIKE '%".$valueToSearch."%'";
	 $search_result = filterTable($query);

	 
 }else 
 { 
	 $query = "SELECT * FROM rest";
	 $search_result = filterTable($query);
 }
 function filterTable($query)
 {
	 $connect = mysqli_connect("localhost", "root", "", "food");
	 $filter_Result = mysqli_query($connect, $query);
	 return $filter_Result;
 }
?>


<!DOCTYPE html>
<html>
<head>
<style>
body{background-image: url("back2.jpg")}
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
<form  action="search.php" method= "POST">
<div class = "search-box">
<img class = "search-icon" src = "search.png" style="width:21px;height:18px"/>
<input type = "text"  name= "valueToSearch" placeholder= "Restuarent to Search" /><br><br>
</div>
<input type = "submit" name= "search"  value= "Search" /> <br><br>
<table width = "600" border= "1" cellpadding = "1" cellspacing = "1">
<tr>

<th>Restuarent_name</th>
<th>Location</th>
<th> Opening_hour </th>
<th> End_hour </th>

</tr>
<?php
while($row = mysqli_fetch_array($search_result)) :?>
<tr>
	<td><?php echo $row['Restuarent_name']; ?></td>
	<td><?php echo $row['Location']; ?></td>
	<td><?php echo $row['Opening_hour']; ?></td>
	<td><?php echo $row['Ending_hour']; ?></td>
	</tr>
	<?php endwhile; ?>
	</table>

</form>

</center>



</body>
</html>