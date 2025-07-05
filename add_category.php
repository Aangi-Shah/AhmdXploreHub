<?php
include 'db1.php';
// Assuming you have a database connection established already

// Check if the POST request contains the new category name
if (isset($_POST['Category_Name'])) {
    // Sanitize and store the new category name
    $newCategoryName = $_POST['Category_Name'];

    // Example: Perform database insertion
    // Replace 'your_table_name' with your actual table name
    $query = "INSERT INTO category_master_tbl (Category_Name) VALUES ('$newCategoryName')";

    // Execute the query
    if (mysqli_query($conn, $query)) {
        // Category added successfully
        $response = array("success" => true);
        echo json_encode($response);
    } else {
        // Error adding category
        $response = array("error" => "Failed to add category: " . mysqli_error($conn));
        echo json_encode($response);
    }
} else {
    // No category name provided in the POST request
    $response = array("error" => "No category name provided");
    echo json_encode($response);
}
?>
