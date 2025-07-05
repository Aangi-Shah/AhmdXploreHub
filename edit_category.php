<?php
include 'db1.php';

$categoryID = isset($_POST['categoryID']) ? $_POST['categoryID'] : '';
$newCategoryName = isset($_POST['newCategoryName']) ? $_POST['newCategoryName'] : '';

if (!empty($categoryID) && !empty($newCategoryName)) {
    // Perform the update query
    $sql = "UPDATE category_master_tbl SET Category_Name = '$newCategoryName' WHERE Category_ID = $categoryID";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['error' => 'Error updating category: ' . $conn->error]);
    }
} else {
    echo json_encode(['error' => 'Invalid category ID or new category name']);
}

$conn->close();
?>
