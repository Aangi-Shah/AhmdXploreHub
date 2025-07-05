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
if (isset($_POST['serviceID'])) {
    // Sanitize the input to prevent SQL injection
    $service_id = mysqli_real_escape_string($conn, $_POST['serviceID']);

    // Delete the service from the wishlist table
    $delete_query = "DELETE FROM favourite_tbl WHERE User_ID = '$user_id' AND Service_ID = '$service_id'";
    $delete_result = mysqli_query($conn, $delete_query);

    if ($delete_result) {
        // Service removed from the wishlist successfully
        echo 'Service removed from the wishlist successfully!';
    } else {
        // Failed to remove service from the wishlist, you can handle this case accordingly
        echo 'Error removing service from wishlist: ' . mysqli_error($conn);
    }
} else {
    // Service ID not provided, you can handle this case accordingly
    echo 'Service ID not provided';
}

mysqli_close($conn); // Close the database connection
?>
