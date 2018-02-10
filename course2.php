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



$result="SELECT name FROM active WHERE category='food'"; 

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



$result="SELECT name FROM active WHERE category='drink'"; 

$sql=mysql_query($result);

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
</div>
</div>
<br><br>
<?php
include('config.php');
$query1=mysql_query("select id, name from courses");
echo"<p>food table</P>";
echo '<form action="activetest.php" method="post" enctype="multipart/form-data"> ';
echo "<table width='850' border='0' bgcolor='#339933' cellpadding='5' cellspacing='1'><tr bgcolor='#006633'><td width='75' style='color:#ffff99'>ID</td><td>Course</td><td></td><td></td>";
while($query3=mysql_fetch_array($query1))
{
	echo "<tr><td>".$query3['id']."</td>";

	echo '<td><input type="checkbox" name="chk[]" value="'.$query3['name'].'">'.$query3['name'].'</td>';

}

echo "</table>";
echo '<tr><input type="submit" name ="subfood" value="update"></tr>';
echo"</form>";
echo"<p>test</P>";
?>

<?php

$query1=mysql_query("select id, wine from wines");
echo"<p>drink table</P>";
echo '<form action="activetest.php" method="post" enctype="multipart/form-data"> ';
echo "<table width='850' border='0' bgcolor='#339933' cellpadding='5' cellspacing='1'><tr bgcolor='#006633'><td width='75' style='color:#ffff99'>ID</td><td>Course</td><td></td><td></td>";
while($query3=mysql_fetch_array($query1))
{
	echo "<tr><td>".$query3['id']."</td>";

	echo '<td><input type="checkbox" name="chk[]" value="'.$query3['wine'].'">'.$query3['wine'].'</td>';

}

echo "</table>";
echo '<tr><input type="submit" name ="subdrink" value="update"></tr>';
echo"</form>";
echo"<p>active list</P>";
?>


<?php
$query1=mysql_query("select id, name from active ");
echo "<table width='850' border='0' bgcolor='#339933' cellpadding='5' cellspacing='1'><tr bgcolor='#006633'><td width='75' style='color:#ffff99'>ID</td><td>Course</td><td></td><td></td>";
while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['id']."</td>";
echo "<td>".$query2['name']."</td>";
echo "<td><a href='delete2.php?id=".$query2['id']."'>Delete</a></td><tr>";
}
?>






</body>
</html>