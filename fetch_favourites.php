<?php
session_start();

// Include database connection file
include 'db1.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // You can handle the case where the user is not logged in, such as redirecting to the login page
    exit('User not logged in');
}

// Get the logged-in user's ID from the session
$user_id = $_SESSION['user_id'];

// Check if the service ID is received via POST
if (isset($_POST['service_id'])) {
    // Sanitize the input to prevent SQL injection
    $service_id = mysqli_real_escape_string($conn, $_POST['service_id']);

    // Insert the service into the wishlist table
    $insert_query = "INSERT INTO favourite_tbl (User_ID, Service_ID) VALUES ('$user_id', '$service_id')";
    $insert_result = mysqli_query($conn, $insert_query);

    if ($insert_result) {
        // Service added to the wishlist successfully
        echo 'Service added to the wishlist successfully!';
    } else {
        // Failed to add service to the wishlist, you can handle this case accordingly
        echo 'Error adding service to wishlist: ' . mysqli_error($conn);
    }
} else {
    // Service ID not provided, you can handle this case accordingly
    echo 'Service ID not provided';
}

mysqli_close($conn); // Close the database connection

?>
