<?php
// Include your database connection file (adjust the path as needed)
include 'db1.php';

// Get the subcategory ID from the POST request
$subcategoryID = isset($_POST['subcategoryID']) ? $_POST['subcategoryID'] : '';

// Check if the subcategory ID is not empty
if (!empty($subcategoryID)) {
    // Perform the deletion query
    $sql = "DELETE FROM sub_category_tbl WHERE Sub_Category_ID = $subcategoryID";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true, 'message' => 'Subcategory deleted successfully']);
    } else {
        echo json_encode(['error' => 'Error deleting subcategory: ' . $conn->error]);
    }
} else {
    echo json_encode(['error' => 'Invalid subcategory ID']);
}

// Close the database connection
$conn->close();
?>
