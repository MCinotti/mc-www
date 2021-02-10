<?php

$servername = "10.0.0.100";
$username = "admin";
$password = "password";
$db = "mcinotti";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
