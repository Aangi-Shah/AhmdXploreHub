<?php
// Include your database connection file (adjust the path as needed)
include 'db1.php';

// Get the category ID from the POST request
$serviceID = isset($_POST['serviceID']) ? $_POST['serviceID'] : '';

// Check if the category ID is not empty
if (!empty($serviceID)) {
    // Perform the deletion query
    $sql = "DELETE FROM service_tbl WHERE Service_ID = $serviceID";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true, 'message' => 'Service deactivated successfully']);
    } else {
        echo json_encode(['error' => 'Error deactivating service: ' . $conn->error]);
    }
} else {
    echo json_encode(['error' => 'Invalid service ID']);
}

// Close the database connection
$conn->close();
?>
