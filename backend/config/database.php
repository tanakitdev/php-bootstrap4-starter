<?php
	$db_host = "localhost";
	$db_name = "db_name";
	$db_user = "root";
	$db_pass = "";
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	echo "<br>";
	echo "Please set up a database connection at the directory config/database.php";
}else{
	$mysqli->set_charset("utf8");
}
?>