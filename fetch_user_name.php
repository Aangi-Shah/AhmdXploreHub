<?php
try {
    include 'db1.php'; // Include your database connection file

    // Create connection
   
    // Fetch the category name based on category ID
    $userID = $_GET['userID'];
    $query = "SELECT User_Name FROM user_tbl WHERE User_Id = ?";
    $statement = $conn->prepare($query);
    $statement->bind_param('i', $userID);
    $statement->execute();
    $statement->bind_result($userName);

    if ($statement->fetch()) {
        // Return the category name as JSON
        echo json_encode(['userName' => $userName]);
    } else {
        // Handle case when no category is found
        echo json_encode(['error' => 'User not found']);
    }

    $statement->close();
    $conn->close();
} catch (Exception $e) {
    // Handle other exceptions
    echo json_encode(['error' => 'An error occurred']);
}
?>
