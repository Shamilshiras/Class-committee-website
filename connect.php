<?php
$servername = "localhost"; // Change if using a different host
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "class_committee"; // Change this to your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
