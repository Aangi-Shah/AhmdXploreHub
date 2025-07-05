<?php
include 'db1.php';

// Query for users
$queryUsers = "SELECT MONTH(date) AS month, COUNT(*) AS user_count FROM user_tbl GROUP BY month";
$resultUsers = $conn->query($queryUsers);

// Query for bookings and repeated customers
$queryBookings = "
    SELECT MONTH(Booking_Date) AS month, COUNT(*) AS booking_count, COUNT(DISTINCT user_id) AS repeated_customer_count
    FROM booking_tbl
    GROUP BY month
";
$resultBookings = $conn->query($queryBookings);

// Prepare data for JavaScript
$userData = array();
while ($row = $resultUsers->fetch_assoc()) {
    $month = date("F", mktime(0, 0, 0, $row['month'], 1)); // Convert month number to month name
    $userData[$month] = $row['user_count'];
}

$bookingData = array();
$repeatedCustomerData = array();
while ($row = $resultBookings->fetch_assoc()) {
    $month = date("F", mktime(0, 0, 0, $row['month'], 1)); // Convert month number to month name
    $bookingData[$month] = $row['booking_count'];
    $repeatedCustomerData[$month] = $row['repeated_customer_count'];
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User and Booking Graphs</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div style="display: flex;">
        <div style="width: 50%;">
            <canvas id="userChart"></canvas>
        </div>
        <div style="width: 50%;">
            <canvas id="bookingChart"></canvas>
        </div>
    </div>
    <div style="width: 50%;">
        <canvas id="repeatedBookingChart"></canvas>
    </div>

    <script>
        // Display graphs using Chart.js
        var ctxUser = document.getElementById('userChart').getContext('2d');
        var ctxBooking = document.getElementById('bookingChart').getContext('2d');
        var ctxRepeatedBooking = document.getElementById('repeatedBookingChart').getContext('2d');

        var userData = <?php echo json_encode($userData); ?>;
        var bookingData = <?php echo json_encode($bookingData); ?>;
        var repeatedCustomerData = <?php echo json_encode($repeatedCustomerData); ?>;

        var userChart = new Chart(ctxUser, {
            type: 'bar',
            data: {
                labels: Object.keys(userData),
                datasets: [{
                    label: 'Users per Month',
                    data: Object.values(userData),
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            }
        });

        var bookingChart = new Chart(ctxBooking, {
            type: 'bar',
            data: {
                labels: Object.keys(bookingData),
                datasets: [{
                    label: 'Bookings per Month',
                    data: Object.values(bookingData),
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            }
        });

        var repeatedBookingChart = new Chart(ctxRepeatedBooking, {
            type: 'bar',
            data: {
                labels: Object.keys(repeatedCustomerData),
                datasets: [{
                    label: 'Repeated Customer Bookings per Month',
                    data: Object.values(repeatedCustomerData),
                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1
                }]
            }
        });
    </script>
</body>
</html>
