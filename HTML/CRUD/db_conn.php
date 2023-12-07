<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foundationforge";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, 8111);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";