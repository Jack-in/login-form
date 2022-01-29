<?php

define('DB_NAME', 'register_db');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');


// $serverName = "localhost";
// $dBUsername = "root";
// $dBPassword = "";
// $dbName = "register_db";

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

mysqli_set_charset($conn, 'utf8');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
//echo "success";
?>
