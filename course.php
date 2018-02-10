<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
<title></title>
<style type="text/css">
.styled-select select {
   background: transparent;
   width: 268px;
   padding: 5px;
   font-size: 16px;
   line-height: 1;
   border: 0;
   border-radius: 0;
   height: 34px;
   -webkit-appearance: none;
}
</style>
</head>
<body>
<br><br>


<div class="styled-select">
<?php
include "config.php"; // Database connection using PDO



$result="SELECT name FROM courses"; 

$sql=mysql_query($result);

echo "<select name='course1'>";
while($cdrow = mysql_fetch_array($sql)){
	//$row = mysql_query($sql, "NAME");
	$row = $cdrow["name"];
      echo "<option>
                    $row
                </option>";
  }

echo "</select>";

?>

<div align="center">
<?php
include "config.php"; // Database connection using PDO



$result="SELECT wine FROM wines"; 

$sql=mysql_query($result);

echo "<select name='plant1'>";
while($cdrow = mysql_fetch_array($sql)){
	//$row = mysql_query($sql, "NAME");
	$row = $cdrow["wine"];
      echo "<option>
                    $row
                </option>";
  }

echo "</select>";

?>
</div>
</div>
<br><br>
<?php
include('config.php');
$query1=mysql_query("select id, name from courses");
echo "<table width='850' border='0' bgcolor='#339933' cellpadding='5' cellspacing='1'><tr bgcolor='#006633'><td width='75' style='color:#ffff99'>ID</td><td>Course</td><td></td><td></td>";
while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['id']."</td>";
echo "<td>".$query2['name']."</td>";
echo "<td><a href='edit.php?id=".$query2['id']."'>Edit</a></td>";
echo "<td><a href='delete.php?id=".$query2['id']."'>Delete</a></td><tr>";
}
?>









</body>
</html>