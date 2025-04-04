<?php
// Database connection configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'portfolio';

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Connection successful
echo "Connected successfully";

// Close the connection when done
// $conn->close();
?>