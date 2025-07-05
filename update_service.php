<?php
// Include your db1.php file for database connection
include 'db1.php';

// Start the session
session_start();

if (isset($_SESSION['user_id'])) {
    // Get the user ID from the session
    $userID = $_SESSION['user_id'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data using $_POST
        $serviceName = isset($_POST['serviceName']) ? $_POST['serviceName'] : null;
        $tagline = isset($_POST['tagline']) ? $_POST['tagline'] : null;
        $about = isset($_POST['about']) ? $_POST['about'] : null;
        $keyFeatures = isset($_POST['keyFeatures']) ? $_POST['keyFeatures'] : null;
        $image = isset($_POST['image']) ? $_POST['image'] : null;
        $image1 = isset($_POST['image1']) ? $_POST['image1'] : null;
        $image2 = isset($_POST['image2']) ? $_POST['image2'] : null;
        $address = isset($_POST['address']) ? $_POST['address'] : null;
        $timings = isset($_POST['timings']) ? $_POST['timings'] : null;
        $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
        $price = isset($_POST['price']) ? $_POST['price'] : null;
        $categoryID = isset($_POST['categoryId']) ? $_POST['categoryId'] : null;
        $subCategoryID = isset($_POST['subCategoryId']) ? $_POST['subCategoryId'] : null;
        $serviceID = isset($_POST['serviceId']) ? $_POST['serviceId'] : null;

        // Update service profile in the database using a prepared statement
        $stmt = $conn->prepare("UPDATE service_tbl 
                                SET Service_Name = ?, Tagline = ?, About = ?, Key_Features = ?,
                                Image = ?, Image1 = ?, Image2 = ?, Address = ?, Timings = ?,
                                Phone = ?, Price = ?, Category_ID = ?, Sub_Category_ID = ?
                                WHERE User_ID = ? AND Service_ID = ?");
        $stmt->bind_param("sssssssssssssii", $serviceName, $tagline, $about, $keyFeatures,
            $image, $image1, $image2, $address, $timings, $phone, $price,
            $categoryID, $subCategoryID, $userID, $serviceID);

        // Execute the update query
        if ($stmt->execute()) {
            $stmt->close();
            $conn->close();
            // Display popup alert using JavaScript
            echo "<script>alert('Service updated successfully');</script>";
        } else {
            echo "Error updating service: " . $stmt->error;
        }
    } else {
        echo "Form not submitted";
    }
} else {
    echo "Invalid request: User_ID not set in the session";
}


?>
