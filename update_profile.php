<?php
// Include your db1.php file for database connection
include 'db1.php';

// Start or resume the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // Get the user ID from the session
    $userID = $_SESSION['user_id'];

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data using $_POST
        $username = $_POST['username'];
        $userType = $_POST['userType'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        // Update user profile in the database
        $stmt = $conn->prepare("UPDATE user_tbl 
                                SET User_Name = ?, User_Type = ?, Email_ID = ?, Phone_No = ?
                                WHERE User_ID = ?");
        $stmt->bind_param("sssii", $username, $userType, $email, $phone, $userID);

        if ($stmt->execute()) {
           echo "<script>alert('Profile updated successfully');
           window.location.href='dashboard1.php';</script>";
        } else {
            echo "<script>alert('Error updating profile: ' . $stmt->error);</script>";
        }

        $stmt->close();
    } else {
        echo "Invalid request";
    }

    // Close the database connection
    $conn->close();
} else {
    echo "User not logged in.";
}
?>
