<?php
include 'db1.php';

// Fetch category options from the database
$sql = "SELECT Category_ID, Category_Name FROM category_master_tbl";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $categories = array();
    while ($row = $result->fetch_assoc()) {
        $categories[] = $row;
    }
    echo json_encode($categories);
} else {
    echo json_encode(['error' => 'No categories found']);
}

$conn->close();
?>
