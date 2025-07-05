<?php
include 'db1.php'; // Include your database connection file

// Check if the serviceId is provided
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['serviceId'])) {
    $serviceId = $_POST['serviceId'];

    // Delete the service from the database
    $deleteQuery = "DELETE FROM service_table WHERE Service_ID = $serviceId";
    $deleteResult = mysqli_query($conn, $deleteQuery);

    if ($deleteResult) {
        echo 'success';
    } else {
        echo 'Error deleting service';
    }
} else {
    echo 'Invalid request';
}

mysqli_close($conn); // Close the database connection
?>
