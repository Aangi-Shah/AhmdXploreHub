<?php
// Include your database connection file (adjust the path as needed)
include 'db1.php';

// Get the category ID from the POST request
$categoryID = isset($_POST['categoryID']) ? $_POST['categoryID'] : '';

// Check if the category ID is not empty
if (!empty($categoryID)) {
    // Perform the deletion query
    $sql = "DELETE FROM category_master_tbl WHERE Category_ID = $categoryID";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true, 'message' => 'Category deleted successfully']);
    } else {
        echo json_encode(['error' => 'Error deleting category: ' . $conn->error]);
    }
} else {
    echo json_encode(['error' => 'Invalid category ID']);
}

// Close the database connection
$conn->close();
?>
