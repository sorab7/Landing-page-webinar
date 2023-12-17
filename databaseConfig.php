<?php

header("Content-Type: text/html; charset=UTF-8");
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "usertest";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>