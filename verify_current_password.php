<?php
include 'db1.php'; // Include your database connection file

if (isset($_POST['userId']) && isset($_POST['currentPassword'])) {
    $userId = $_POST['userId'];
    $currentPassword = $_POST['currentPassword'];

    $query = "SELECT Password FROM user_tbl WHERE User_ID = $userId";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $user = mysqli_fetch_assoc($result);

        // Verify the current password
        if (password_verify($currentPassword, $user['password'])) {
            echo 'success';
        } else {
            echo 'error';
        }
    } else {
        echo 'error';
    }

    mysqli_close($conn); // Close the database connection
} else {
    echo 'error';
}
?>
