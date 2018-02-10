<?php
	include('config.php');
	//if(isset($_POST['button']))
//	{
	$id=mysql_real_escape_string($_POST['id']);
	$name=mysql_real_escape_string($_POST['first_name']);
	$age=mysql_real_escape_string($_POST['last_name']);
	$info=mysql_real_escape_string($_POST['allergic_info']);
	$fhistory = mysql_real_escape_string($_POST['food_history']);
	$dhistory = mysql_real_escape_string($_POST['drink_history']);
	


	date_default_timezone_set('Australia/Melbourne');
	$date= date('Y-m-d') ;
	$query1=mysql_query("insert into customer values('$id','$date','$name','$age','$info','$fhistory','$dhistory')");
//	echo "insert into customer values('$id,'$name','$age','$info')";
//	echo "$fhistory";
//	echo "<p>".$dhistory."</p>";
//	echo "$date";
	
	if($query1)
	{
		header("location:http://www.ignimenu.com/index2to.php");
	}
//	}
?>