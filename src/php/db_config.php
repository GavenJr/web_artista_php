<?php
// Database configuration  
$dbHost     = "localhost";  
$dbUsername = "root";  
$dbPassword = "";  
$dbName     = "blog_db";
// Create database connection  
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {  
    die("Connection failed: " . $conn->connect_error);  
}
?>