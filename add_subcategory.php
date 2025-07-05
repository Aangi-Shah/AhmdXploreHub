<?php
include 'db1.php';

$newSubCategoryName = isset($_POST['Sub_Category_Name']) ? $_POST['Sub_Category_Name'] : '';
$categoryId = isset($_POST['Category_ID']) ? $_POST['Category_ID'] : '';

if (!empty($newSubCategoryName) && !empty($categoryId)) {
    // Perform the insertion query
    $sql = "INSERT INTO sub_category_tbl (Sub_Category_Name, Category_ID) VALUES ('$newSubCategoryName', '$categoryId')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['error' => 'Error adding subcategory: ' . $conn->error]);
    }
} else {
    echo json_encode(['error' => 'Invalid subcategory name or category ID']);
}

$conn->close();
?>
