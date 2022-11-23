<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style>
table {
  border-collapse: collapse;
  width: 50%;
}
th, td {
  text-align: left;
  padding: 8px;
}
tr:nth-child(odd){background-color: #f2f2f2}
th {
  background-color: #256D85;
  color: white;
}

</style>
  <body>
    <form method = "POST">
<table>
<tr>
<th> Name </th>
<th> Roll_No </th>
<th> Class </th>
<th> Question-1 </th>
<th> Question-2 </th>
<th> Question-3 </th>
<th> Comments </th>
</tr>
<?php

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['display']))
{
	$con = mysqli_connect('localhost','root','','hotel');
	if(!$con)
		die('Could not connect: '.mysqli_connect_error());
	$sql = "SELECT Customer_name,rating1,rating2,rating3,rating4 FROM hotel";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_assoc($result))
  {
	  echo "<tr><td>" .$row['Customer_name']. "</td>";
	  echo "<td>" .$row['rating1']. "</td>";
    echo "<td>" .$row['rating2']. "</td>";
    echo "<td>" .$row['rating3']. "</td>";
    echo "<td>" .$row['rating4']. "</td></tr>";
  }
  echo "</table>";
}
else
  echo "0 results";
}
mysqli_close($con);
?>

</form>
  </body>
</html>