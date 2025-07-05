<?php
include 'db1.php'; // Include your database connection file

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['serviceId'])) {
        $serviceId = $_POST['serviceId'];

        // Fetch service details from the database
        $query = "SELECT * FROM service_table WHERE Service_ID = $serviceId";
        $result = mysqli_query($conn, $query);

        if ($result) {
            $service = mysqli_fetch_assoc($result);

            // Display the edit form
            echo '<form id="editForm">';
            echo '<label for="serviceName">Service Name:</label>';
            echo '<input type="text" id="serviceName" name="serviceName" value="' . $service['Service_name'] . '"><br>';
            // Add more fields as needed

            echo '<button type="button" onclick="saveChanges(' . $serviceId . ')">Save Changes</button>';
            echo '</form>';
        } else {
            echo 'Error fetching service details';
        }
    } else {
        echo 'Invalid request';
    }
} else {
    echo 'Invalid request';
}

mysqli_close($conn); // Close the database connection
?>
