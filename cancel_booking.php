<?php
// Your database connection code here (use mysqli or PDO)
include 'db1.php';

// Check if the bookingId is provided
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['bookingId'])) {
    $bookingId = $_POST['bookingId'];

    // Perform the cancellation operation in the database
    $conn->autocommit(FALSE); // Turn off autocommit to ensure both queries succeed or fail together
    
    // Query to delete booking from booking_tbl
    
    // Query to delete payment from payment_master_tbl if corresponding booking is deleted
    $cancelPaymentQuery = "DELETE FROM payment_master_tbl WHERE Booking_ID = $bookingId";
    $cancelPaymentResult = $conn->query($cancelPaymentQuery);
    $cancelBookingQuery = "DELETE FROM booking_tbl WHERE Booking_ID = $bookingId";
    $cancelBookingResult = $conn->query($cancelBookingQuery);

    if ($cancelBookingResult && $cancelPaymentResult) {
        $conn->commit(); // Both queries successful, commit the transaction
        echo 'success';
    } else {
        $conn->rollback(); // One or both queries failed, rollback the transaction
        echo 'Error canceling booking';
    }

    $conn->autocommit(TRUE); // Restore autocommit to its default state
} else {
    echo 'Invalid request';
}

$conn->close(); // Close the database connection
?>
