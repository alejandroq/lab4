<?php 
$mysql_server = "127.0.0.1";
$mysql_user = "root";
$mysql_password = "1234";
$mysql_db = "lab4";
$conn = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_db);
if ($conn->connect_errno) {
	printf("Connection failed: %s \n", $mysqli->connect_error);
	exit();
}
?>

