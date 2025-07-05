<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Information</title>
    <style>
         body {
            font-family: Arial, sans-serif;
}

.dashboard-container {
    width: 1000px;
            margin: 20px 250px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}


.content {
    flex-grow: 1;
    padding: 20px;
}

h2 {
            color: purple;
            text-align: center;
            margin-top:5px;
        }
        h3 {
            color: purple;
            text-align: center;
        }

table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
        }

th,
td {
    border: 1px solid #dddddd;
    padding: 8px;
    text-align: center;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

.cancel-btn {
    background-color: #9673ce;
    color: #f4e3ce;
    padding: 5px 10px;
    cursor: pointer;
    border: none;
}

.cancel-btn:hover {
    background-color: #9673ce;
}


    </style>
</head>

<body>
    <h2>Booking Information</h2>
    <?php
    // Include your database connection file
    include 'db1.php';

    // Start the session to access user information
    session_start();

    // Check if the user is logged in
    if (isset($_SESSION['user_id'])) {
        $userId = $_SESSION['user_id'];

        // Fetch all service IDs for the logged-in user
        $serviceQuery = "SELECT Service_ID, Service_Name FROM service_tbl WHERE User_ID = $userId";
        $serviceResult = mysqli_query($conn, $serviceQuery);

        if ($serviceResult && mysqli_num_rows($serviceResult) > 0) {
            echo '<div class="dashboard-container">';
            echo '<div class="sidebar">';
            echo '<div class="content">';
            

            // Loop through each service
            while ($serviceRow = mysqli_fetch_assoc($serviceResult)) {
                $serviceId = $serviceRow['Service_ID'];
                $serviceName = $serviceRow['Service_Name'];

                // Fetch booking information for the current service
                $bookingQuery = "SELECT b.*, u.User_Name FROM booking_tbl b
                                 JOIN user_tbl u ON b.User_ID = u.User_ID
                                 WHERE b.Service_ID = $serviceId";
                $bookingResult = mysqli_query($conn, $bookingQuery);

                if ($bookingResult && mysqli_num_rows($bookingResult) > 0) {
                    echo '<h3>Bookings for ' . $serviceName . '</h3>';
                    echo '<table>';
                    echo '<thead>
                            <tr>
                                <th>Booking ID</th>
                                <th>User Name</th>
                                <th>Booking Date</th>
                                <th>No of Attendees</th>
                                <th>Booking Amount</th>
                                <th>Total Amount</th>
                                <th>Cancel Booking</th>
                                <!-- Add more columns as needed -->
                            </tr>
                          </thead>';
                    echo '<tbody>';

                    while ($bookingRow = mysqli_fetch_assoc($bookingResult)) {
                        echo '<tr>';
                        echo '<td>' . $bookingRow['Booking_ID'] . '</td>';
                        echo '<td>' . $bookingRow['User_Name'] . '</td>';
                        echo '<td>' . $bookingRow['Booking_Date'] . '</td>';
                        echo '<td>' . $bookingRow['No_of_Attendees'] . '</td>';
                        echo '<td>' . $bookingRow['Booking_Amount'] . '</td>';
                        echo '<td>' . $bookingRow['Total_Amount'] . '</td>';
                        echo '<td><button class="cancel-btn" onclick="cancelBooking(' . $bookingRow['Booking_ID'] . ')">Cancel</button></td>';

                        // Add more cells for additional columns
                        echo '</tr>';
                    }

                    echo '</tbody>';
                    echo '</table>';
                } else {
                    echo '<p>No bookings found for ' . $serviceName . '</p>';
                }
            }

            echo '</div>';
            echo '</div>';
        } else {
            echo 'No services found for the user';
        }

        mysqli_close($conn); // Close the database connection
    } else {
        echo 'User not logged in';
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function cancelBooking(bookingId) {
            // Confirm before cancelling the booking
            var confirmation = confirm('Are you sure you want to cancel this booking?');
            if (confirmation) {
                // Make an AJAX request to delete the booking on the server
                $.ajax({
                    url: 'cancel_booking.php',
                    type: 'POST',
                    data: { bookingId: bookingId }, // Correct parameter name
                    dataType: 'text', // Expecting plain text response
                    success: function (response) {
                        if (response.trim() === 'success') {
                            alert('Booking canceled successfully');
                            // Refresh or update the table content as needed
                        } else {
                            alert('Failed to cancel booking: ' + response.trim());
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log("AJAX Error:", errorThrown);
                        alert('Failed to cancel booking');
                    }
                });
            }
        }
    </script>
</body>

</html>
