<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
<title></title>

</head>
<body>
<br><br>

<?php
include "config.php"; // Database connection using PDO



$cdresult="SELECT name FROM student"; 

$sql=mysql_query($cdresult);

echo "<select name='plant1'>";
while($cdrow = mysql_fetch_array($sql)){
	//$row = mysql_query($sql, "NAME");
	$row = $cdrow["name"];
      echo "<option>
                    $row
                </option>";
  }

echo "</select>";
?>

</body>
</html>