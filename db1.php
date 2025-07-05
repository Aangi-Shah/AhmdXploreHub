<?php
// Replace with your own database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AhmdXploreHub1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
