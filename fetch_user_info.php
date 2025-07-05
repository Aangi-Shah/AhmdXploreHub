<?php
// Include your database connection file
include 'db1.php';

// Check if the email parameter is sent in the POST request
if (isset($_POST['Email_ID'])) {
    // Sanitize the email input to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $_POST['Email_ID']);

    // Query to fetch user information based on the email
    $query = "SELECT * FROM user_tbl WHERE Email_ID = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Check if user exists
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
                if ($user !== null) {
            // Display user information in a form
            echo '<h2>User Information</h2>';
            echo '<form id="myForm">';
            echo '<label for="userId">User ID:</label>';
            echo '<input type="text" id="userId" name="userId" value="' . $user['User_ID'] . '" readonly><br>';
            echo '<label for="username">Name:</label>';
            echo '<input type="text" id="username" name="username" value="' . $user['username'] . '"><br>';
            echo '<label for="userType">User Type:</label>';
            echo '<input type="text" id="userType" name="userType" value="' . $user['userType'] . '"><br>';
            echo '<label for="email">Email:</label>';
            echo '<input type="email" id="email" name="email" value="' . $user['email'] . '"><br>';
            echo '<label for="phone">Phone Number:</label>';
            echo '<input type="tel" id="phone" name="phone" value="' . $user['phone'] . '">';
            echo '<label for="currentPassword">Current Password:</label>';
            echo '<input type="password" id="currentPassword" name="currentPassword"><br>';
            // Add more fields as needed
            echo '</form>';
            // Encode user information as JSON and echo it
            echo json_encode($user);
        } else {
            // User not found
            echo json_encode(['error' => 'User not found']);
        }
    } else {
        // Error executing the query
        echo json_encode(['error' => 'Error fetching user information']);
    }
} else {
    // No email parameter sent
    echo json_encode(['error' => 'No email parameter provided']);
}

// Close the database connection
mysqli_close($conn);
?>
