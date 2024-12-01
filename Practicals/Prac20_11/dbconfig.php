<?php
define('SERVERNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DBNAME', 'studentdb');
try {
	$connect = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);
	if (!$connect) {
		die("connection failed".mysqli_connect_error());
	} 
	else {
		echo "Connected successfully";
	}
} 
catch (Exception $e) {
	die($e->getMessage());
}

?>