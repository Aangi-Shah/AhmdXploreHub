<?php
include 'db1.php';
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT category_name FROM category_master_tbl";
$result = $conn->query($sql);

$categories = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $categories[] = $row["category_name"];
    }
}

$conn->close();

// Static categories
$staticCategories = array("Attractions", "Things to do", "Hotels", "Restaurants", "Events", "Local Insights", "Heritage", "Malls & Markets", "Food Parks");

// Filter out static categories from dynamically added categories
$categories = array_diff($categories, $staticCategories);

// Output dynamically added categories
foreach ($categories as $category) {
    echo '<a href="#">' . $category . '</a><br>';
}
?>