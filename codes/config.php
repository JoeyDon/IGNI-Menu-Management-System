<?Php
$host_name = "localhost";
$database = "ignimenu_conn"; // Change your database nae
$username = "ignimenu_admin";          // Your database user id 
$password = "NO.1IGNIsystem";          // Your password

$link=mysql_connect($host_name, $username, $password) or die ("Error connecting to mysql server: ".mysql_error());
mysql_select_db($database, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());



//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host='.$host_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}


?>