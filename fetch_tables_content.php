<?php
// Include your database connection code (db.php or similar)
include 'db1.php';

// Get the table name from the URL parameter
$tableName = $_GET['tableName'];

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Formulate the SQL query to fetch all data from the specified table
$sql = "SELECT * FROM $tableName";
$result = $conn->query($sql);

if ($result) {
    $tableContent = array();
    while ($row = $result->fetch_assoc()) {
        $tableContent[] = $row;
    }

    // Encode the data as JSON and send it back to the client
    echo json_encode($tableContent);
    $result->close();
} else {
    echo "Failed to fetch data from the table: " . $conn->error;
}

// Close the result set


// Close the database connection
$conn->close();
?>
