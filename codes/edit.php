<html>
<body>
<?php
include('config.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$age=$_POST['age'];
$query3=mysql_query("update courses set id='$name', name='$age' where id='$id'");
if($query3)
{
header('location:course.php');
}
}
$query1=mysql_query("select * from courses where id='$id'");
$query2=mysql_fetch_array($query1);
?>
<form method="post" action="">
Name:<input type="text" name="name" value="<?php echo $query2['id']; ?>" /><br />
Age:<input type="text" name="age" value="<?php echo $query2['name']; ?>" /><br /><br />
<br />
<input type="submit" name="submit" value="update" />
</form>
<?php
}
?>
</body>
</html>