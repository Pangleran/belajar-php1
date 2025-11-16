<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "unknown";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if ($db->connect_error) {
  echo "Database error!";
  die("error");
}

echo "Database connected!";
  
?>
