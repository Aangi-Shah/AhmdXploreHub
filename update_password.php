<?php
// Include your db1.php file for database connection
include 'db1.php';

// Start or resume the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // Get the user ID from the session
    $userID = $_SESSION['user_id'];

    // Retrieve data from the AJAX request
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    // Validate input if needed

    // Check if the current password matches the one in the database
    $stmt = $conn->prepare("SELECT Password FROM user_tbl WHERE User_ID = ?");
    $stmt->bind_param("i", $userID);
    $stmt->execute();
    $stmt->bind_result($hashedPassword);
    $stmt->fetch();
    $stmt->close();

    if (password_verify($currentPassword, $hashedPassword)) {
        // Update the password in the database
        $hashedNewPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $updateStmt = $conn->prepare("UPDATE user_tbl SET Password = ? WHERE User_ID = ?");
        $updateStmt->bind_param("si", $hashedNewPassword, $userID);

        if ($updateStmt->execute()) {
            echo "Password updated successfully";
        } else {
            echo "Error updating password";
        }

        $updateStmt->close();
    } else {
        echo "Current password is incorrect";
    }

    // Close the database connection
    $conn->close();
} else {
    echo "User not logged in.";
}
?>
