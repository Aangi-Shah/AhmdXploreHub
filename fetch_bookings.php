<?php
include 'db1.php';
session_start(); // Start session if not already started

// Assume the user is logged in and you have their user ID stored in a session variable
$userID = $_SESSION['user_id']; // Example: $userID = 123;

// Prepare a SQL query to fetch bookings for the logged-in user where booking date is less than today's date
$sql = "SELECT booking_tbl.*, service_tbl.Image FROM booking_tbl INNER JOIN service_tbl ON booking_tbl.Service_ID = service_tbl.Service_ID WHERE booking_tbl.User_ID = $userID AND booking_tbl.Booking_Date < CURDATE()";

// Execute the query
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Initialize variable to store HTML content
    $htmlContent = '';

    // Loop through each row
    while($row = $result->fetch_assoc()) {
        // Generate HTML content for each booking
        $htmlContent .= '<div class="trip-card">';
        $htmlContent .= '<img src="' . $row["Image"] . '" alt="' . $row["Name"] . '">';
        $htmlContent .= '<div class="trip-details">';
        $htmlContent .= '<p><strong>Place/Event:</strong> ' . $row["Name"] . '</p>';
        $htmlContent .= '<p><strong>Date:</strong> ' . $row["Booking_Date"] . '</p>';
        $htmlContent .= '</div></div>';
    }

    // Output HTML content
    echo $htmlContent;
} else {
    echo "No past bookings found.";
}

// Close the connection
$conn->close();
?>
