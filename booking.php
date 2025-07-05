<?php
session_start();
// Include database connection file
include 'db1.php';

// Check if the selected service ID is set in the session
$_SESSION['selected_service_id'] = 1; // Assuming a static value for demonstration

// Initialize $servicePrice variable
$servicePrice = 30;

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fullName'])) {
    // Retrieve form data
    $fullName = $_POST['fullName'];
    $bookingDate = $_POST['bookingDate'];
    $numberOfPeople = $_POST['numberOfPeople'];
    $totalAmount = $_POST['totalAmount'];

    // Check if the service ID is stored in the session
    if (isset($_SESSION['selected_service_id'])) {
        // Fetch the service price based on the selected service ID
        $serviceQuery = "SELECT Price FROM service_tbl WHERE Service_ID = ?";
        $stmt = $conn->prepare($serviceQuery);
        $stmt->bind_param("s", $_SESSION['selected_service_id']);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $servicePrice = $row['Price'];

            // Prepare and bind parameters to prevent SQL injection
            $insertQuery = "INSERT INTO booking_tbl (User_ID, Name, Booking_Date, No_of_Attendees, Booking_Amount, Total_Amount, Service_ID) 
                            VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($insertQuery);
            $stmt->bind_param("sssssss", $_SESSION['user_id'], $fullName, $bookingDate, $numberOfPeople, $servicePrice, $totalAmount, $_SESSION['selected_service_id']);

            // Execute the statement
            if ($stmt->execute()) {
                echo "<script>alert('Booking successful!');</script>";
            } else {
                echo "<script>alert('Error: " . $conn->error . "');</script>";
            }
        } else {
            // Handle the case where the selected service ID is not found in the database
            echo "<script>alert('Error: Selected service not found!');</script>";
        }
    } else {
        // Handle the case where the session variable is not set
        echo "<script>alert('Error: Selected service ID not set in session!');</script>";
    }
}
?>
<!-- Your HTML code remains unchanged -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="booking.css">
    <title>Book Now</title>
    <script>
        function calculateTotal() {
            // Get the price and number of attendees values
            var price = <?php echo isset($servicePrice) ? $servicePrice : '0'; ?>;
            var numberOfPeople = document.getElementById('numberOfPeople').value;

            // Calculate the total amount
            var totalAmount = price * numberOfPeople;

            // Update the total amount input field
            document.getElementById('totalAmount').value = totalAmount;
        }
    </script>
</head>

<body>

    <header>
        <div class="logo">
            <img src="logo.png" alt="Ahmedabad City" width="100" height="100">
        </div>
        <div class="name">
            <h1>AhmdXploreHub</h1>
        </div>
    </header>

    <main>

        <form id="bookingForm" method="post" action="payment.php" onsubmit="return confirm('Are you sure you want to book?');">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>

            <label for="bookingDate">Booking Date:</label>
            <input type="date" id="bookingDate" name="bookingDate" required>

            <label for="bookingAmount">Price:</label>
            <input type="number" id="bookingAmount" name="bookingAmount" value="<?php echo isset($servicePrice) ? $servicePrice : ''; ?>" required readonly>

            <label for="numberOfPeople">Number of People:</label>
            <input type="number" id="numberOfPeople" name="numberOfPeople" min="1" required oninput="calculateTotal()">

            <label for="totalAmount">Total Amount Payable:</label>
            <input type="number" id="totalAmount" name="totalAmount" value="<?php echo isset($servicePrice) ? $servicePrice : ''; ?>" required readonly>

            <!-- Hidden field to store the selected service ID -->
            <input type="hidden" name="serviceID" value="<?php echo isset($selectedServiceID) ? $selectedServiceID : ''; ?>">

           <button type="submit">Pay Now</button>
        </form>

    </main>

    <footer>
        &copy; 2023 AhmdXploreHub. All rights reserved.
    </footer>

</body>

</html>
