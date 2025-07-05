<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Information</title>
    <style>
       body {
    font-family: Arial, sans-serif;
}

.dashboard-container {
    width: 700px;
    margin: 20px 370px;
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
    <h2>Payment Information</h2>
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
            $bookingQuery = "SELECT p.*,
                                    CASE p.Payment_Mode
                                        WHEN 1 THEN 'Cash'
                                        WHEN 2 THEN 'Credit/Debit Card'
                                        WHEN 3 THEN 'UPI'
                                        ELSE 'Unknown'
                                    END AS Payment_Mode,
                                    CASE p.Payment_Status
                                        WHEN 1 THEN 'Successful'
                                        WHEN 2 THEN 'Pending'
                                        ELSE 'Unknown'
                                    END AS Payment_Status
                             FROM payment_master_tbl p
                             JOIN booking_tbl b ON p.Booking_ID = b.booking_id
                             WHERE b.Service_ID = $serviceId";

            $bookingResult = mysqli_query($conn, $bookingQuery);

            if ($bookingResult && mysqli_num_rows($bookingResult) > 0) {
                echo '<h3>Payments for ' . $serviceName . '</h2>';
                echo '<table>';
                echo '<thead>
                        <tr>
                            <th>Payment ID</th>
                            <th>Amount</th>
                            <th>Booking ID</th>
                            <th>Payment Mode</th>
                            <th>Payment Status</th>
                        </tr>
                      </thead>';
                echo '<tbody>';

                while ($bookingRow = mysqli_fetch_assoc($bookingResult)) {
                    echo '<tr>';
                    echo '<td>' . $bookingRow['Payment_ID'] . '</td>';
                    echo '<td>' . $bookingRow['Amount'] . '</td>';
                    echo '<td>' . $bookingRow['Booking_ID'] . '</td>';
                    echo '<td>' . $bookingRow['Payment_Mode'] . '</td>';
                    echo '<td>' . $bookingRow['Payment_Status'] . '</td>';
                    echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';
            } else {
                echo '<p>No payments found for ' . $serviceName . '</p>';
            }
        }

        echo '</div>';
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


    
</body>

</html>
