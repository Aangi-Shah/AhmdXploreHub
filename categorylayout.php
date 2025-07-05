<?php
// Include database connection file
include 'db1.php';

// Fetch categories from the database
$categoryQuery = "SELECT * FROM category_master_tbl";
$categoryResult = mysqli_query($conn, $categoryQuery);

if (mysqli_num_rows($categoryResult) > 0) {
    while ($categoryRow = mysqli_fetch_assoc($categoryResult)) {
        $categoryId = $categoryRow['Category_ID'];
        $categoryName = strtolower(str_replace(' ', '', $categoryRow['Category_Name']));
        
        // Fetch data for the current category from the database
        $attractionQuery = "SELECT * FROM service_tbl WHERE Category_ID = $categoryId";
        $attractionResult = mysqli_query($conn, $attractionQuery);
        
        // Create a new PHP file for each category
        $fileName = $categoryName . '.php';
        $fileContent = '<?php $categoryId = ' . $categoryId . '; include "attraction.php"; ?>'; // Include a template file for displaying attractions
        file_put_contents($fileName, $fileContent);
        
        // Display link to the newly created page
        echo "<a href='$fileName'>$categoryName</a><br>";
    }
} else {
    echo "No categories found.";
}
?>
