<?php  
include ("config.php"); 
$chk = $_POST['chk'];
//if($_POST[""])
if(isset($_POST['subdrink'])=="update")  
{  
	for($i=0;$i<sizeof($chk);$i++)
	{
		$query = "INSERT INTO active (name, category) VALUES('".$chk[$i]."','drink')";
		echo '<p>'.$chk[$i].'</p>';
		mysql_query($query) or die(mysql_error());
	}


	header("location:database.php");
	
}
else if(isset($_POST['subfood'])=="update")
{
	for($i=0;$i<sizeof($chk);$i++)
	{
		$query = "INSERT INTO active (name, category) VALUES('".$chk[$i]."','food')";
		echo '<p>'.$chk[$i].'</p>';
		mysql_query($query) or die(mysql_error());
	}


	header("location:database.php");
}

?>  