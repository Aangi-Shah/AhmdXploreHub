<?php
    // Process the cancellation request if bookingId is provided
    if (isset($_GET['cancelBooking'])) {
        // Get the booking ID from the URL parameter
        $bookingId = $_GET['cancelBooking'];

        // Include your database connection file
        include 'db1.php';

        // Prepare and execute the SQL query to delete the booking record
        $cancelQuery = "DELETE FROM booking_tbl WHERE Booking_ID = $bookingId";
        $cancelResult = mysqli_query($conn, $cancelQuery);

        if ($cancelResult) {
            // Booking cancelled successfully
            echo 'success';
        } else {
            // Failed to cancel booking
            echo 'failure: ' . mysqli_error($conn);
        }

        // Close the database connection
        mysqli_close($conn);

        exit(); // Stop further execution of PHP code
    }
?>