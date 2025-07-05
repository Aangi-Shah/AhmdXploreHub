<?php
try {
    include 'db1.php'; // Include your database connection file

    // Create connection
   
    // Fetch the category name based on category ID
    $serviceID = $_GET['serviceID'];
    $query = "SELECT Service_Name FROM service_tbl WHERE Service_Id = ?";
    $statement = $conn->prepare($query);
    $statement->bind_param('i', $serviceID);
    $statement->execute();
    $statement->bind_result($serviceName);

    if ($statement->fetch()) {
        // Return the category name as JSON
        echo json_encode(['serviceName' => $serviceName]);
    } else {
        // Handle case when no category is found
        echo json_encode(['error' => 'Service not found']);
    }

    $statement->close();
    $conn->close();
} catch (Exception $e) {
    // Handle other exceptions
    echo json_encode(['error' => 'An error occurred']);
}
?>
