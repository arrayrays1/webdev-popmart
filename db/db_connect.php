<?php
$servername = "127.0.0.1:3307"; //make sure to change this to your db credentials
$username = "root";
$password = "";
$database = "popmart_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
