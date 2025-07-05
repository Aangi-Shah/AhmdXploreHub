<?php
try {
    include 'db1.php'; // Include your database connection file

    // Create connection
   
    // Fetch the category name based on category ID
    $categoryID = $_GET['categoryID'];
    $query = "SELECT Category_Name FROM category_master_tbl WHERE Category_Id = ?";
    $statement = $conn->prepare($query);
    $statement->bind_param('i', $categoryID);
    $statement->execute();
    $statement->bind_result($categoryName);

    if ($statement->fetch()) {
        // Return the category name as JSON
        echo json_encode(['categoryName' => $categoryName]);
    } else {
        // Handle case when no category is found
        echo json_encode(['error' => 'Category not found']);
    }

    $statement->close();
    $conn->close();
} catch (Exception $e) {
    // Handle other exceptions
    echo json_encode(['error' => 'An error occurred']);
}
?>
