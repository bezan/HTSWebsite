<?php
$server="localhost";
$user="root";
$password="";
$database="test";

$con = mysql_connect($server, $user, $password);
if (!$con) {
	die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully to database server';

mysql_select_db($database);

$query = mysql_query("SELECT * FROM namn");
while ($temp = mysql_fetch_array($query)) {
	echo $temp["Hej Beoz"];
}
   mysql_close($con);
?>