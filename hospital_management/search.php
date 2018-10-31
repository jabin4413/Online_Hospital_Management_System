<?php

if(isset($_POST['search']))
{
}
else{
$query=SELECT * FROM embulance ;
$search_result=filterTable($query)
}
function filterTable($query)
{
$connect=mysqli_connect("localhost","root"," ","hospital");
$fliter_Result=mysqli_query($connect,$query)
return $fliter_Result;
}
?>
<html>
<head>
<title> PHP HTML DATA SEARCH FROM TABLE</title>

</head>
<body>
<form>
<input type="text" name="ValueToSearch" placeholder="Value To Search" ><br> <br>
<input type="text" name="search" vaue="Filter" ><br><br>

<table>
<tr>
<th>ID</th>
<th>driver_name</th>
<th>driver_phn</th>
<th>embulance_model</th>
</tr>
<?php while($row=mysqli_fetch_array($search_result)); ?>
<tr>
<td> <?php  echo $row['ID'];?></td>
<td> <?php  echo $row['driver_name'];?></td>
<td> <?php  echo $row['driver_phn'];?></td>
<td> <?php  echo $row['embulance_model'];?></td>
</tr>
<?php endwhile;?>
</table>
</form>










</body>
</html>