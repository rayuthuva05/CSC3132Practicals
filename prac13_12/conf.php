<?php
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PWD', '');
define('DB', 'parking');

try {
    $connection = mysqli_connect(HOST,USERNAME,PWD,DB);
    if(!$connection){
        die("Database not connected!");
    }
    else{
        echo "Database connected succefully!";
    }
} catch (Exception $e) {
    die($e->getMessage());
}
echo "<br>";
?>