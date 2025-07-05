<?php
// Include your database connection file
include 'db1.php';

// Initialize variables to store user information
$user = [];
$error = '';

// Check if the email parameter is sent in the POST request
// Check if the email parameter is sent in the POST request
if (isset($_POST['Email_ID'])) {
    $email = $_POST['Email_ID'];
    echo "Email received: " . $email; // Add this line to check if email parameter is received

    // Sanitize the email input to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $email);

    // Query to fetch user information based on the email
    $query = "SELECT * FROM user_tbl WHERE Email_ID = '$email'";
    echo "Query: " . $query; // Add this line to check the query being executed
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Check if user exists
        if (mysqli_num_rows($result) == 1) {
            // Fetch user information
            $user = mysqli_fetch_assoc($result);
            echo json_encode($user); // Output user information as JSON
        } else {
            // User not found
            echo json_encode(['error' => 'User not found']);
        }
    } else {
        // Error executing the query
        echo json_encode(['error' => 'Error executing query: ' . mysqli_error($conn)]);
    }
} else {
    // No email parameter sent
    echo json_encode(['error' => 'No email parameter provided']);
}
?>
