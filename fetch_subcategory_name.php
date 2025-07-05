<?php
try {
    include 'db1.php'; // Include your database connection file

    // Create connection
   
    // Fetch the category name based on category ID
    $subcategoryID = $_GET['subcategoryID'];
    $query = "SELECT Sub_Category_Name FROM sub_category_tbl WHERE Sub_Category_Id = ?";
    $statement = $conn->prepare($query);
    $statement->bind_param('i', $subcategoryID);
    $statement->execute();
    $statement->bind_result($subcategoryName);

    if ($statement->fetch()) {
        // Return the category name as JSON
        echo json_encode(['subcategoryName' => $subcategoryName]);
    } else {
        // Handle case when no category is found
        echo json_encode(['error' => 'Subcategory not found']);
    }

    $statement->close();
    $conn->close();
} catch (Exception $e) {
    // Handle other exceptions
    echo json_encode(['error' => 'An error occurred']);
}
?>
