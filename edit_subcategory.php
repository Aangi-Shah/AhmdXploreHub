<?php
// Include your database connection file (adjust the path as needed)
include 'db1.php';

// Get the subcategory ID and new name from the POST request
$subcategoryID = isset($_POST['subcategoryID']) ? $_POST['subcategoryID'] : '';
$newName = isset($_POST['newName']) ? $_POST['newName'] : '';

// Check if the subcategory ID is not empty
if (!empty($subcategoryID) && !empty($newName)) {
    // Perform the update query
    $sql = "UPDATE sub_category_tbl SET Sub_Category_Name = '$newName' WHERE Sub_Category_ID = $subcategoryID";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true, 'message' => 'Subcategory edited successfully']);
    } else {
        echo json_encode(['error' => 'Error editing subcategory: ' . $conn->error]);
    }
} else {
    echo json_encode(['error' => 'Invalid subcategory ID or new name']);
}

// Close the database connection
$conn->close();
?>
