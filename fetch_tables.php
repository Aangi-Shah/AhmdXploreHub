<?php
// Include your database connection code (db.php or similar)
include 'db1.php';

// Formulate the SQL query to fetch all table names
$sql = "SHOW TABLES";
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    echo "<ul>";
    while ($row = $result->fetch_row()) {
        echo "<li>{$row[0]}</li>";
    }
    echo "</ul>";

    // Free the result set
    $result->free_result();
} else {
    echo json_encode(array('error' => "Failed to fetch tables: " . $conn->error));
}

// Close the database connection (optional, as it will be automatically closed at the end of the script)
$conn->close();
?>
