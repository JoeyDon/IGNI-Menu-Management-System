<html>
<body>
<?php
include('config.php');
if(isset($_POST['submit']))
{
$name=mysql_real_escape_string($_POST['name']);
$age=mysql_real_escape_string($_POST['age']);
$query1=mysql_query("insert into courses values('$name','$age')");
echo "insert into courses values('$name','$age')";

if($query1)
{
header("location:course.php");
}
}
?>
<fieldset style="width:300px;">
<form method="post" action="">
ID: <input type="text" name="name"><br><br>
Courses: <input type="text" name="age"><br>
<br>
<input type="submit" name="submit">
</form>
</fieldset>
</body>
</html>