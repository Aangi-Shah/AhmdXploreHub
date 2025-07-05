<?php
session_start();
// Include database connection file
include 'db1.php';

// Set the booking ID statically to 8
$booking_id = 51;

// Fetch the booking amount based on the provided booking ID
$bookingAmountQuery = "SELECT Booking_Amount FROM booking_tbl WHERE Booking_ID = '$booking_id'";
$bookingAmountResult = $conn->query($bookingAmountQuery);
if ($bookingAmountResult && $bookingAmountResult->num_rows > 0) {
    $bookingAmountRow = $bookingAmountResult->fetch_assoc();
    $bookingAmount = $bookingAmountRow['Booking_Amount'];
} else {
    // Handle case when booking amount is not found
    // For example, display an error message or redirect the user
    echo "Booking amount not found.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>
        label {
            display: block;
            margin-bottom: 10px;
        }
        body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}

.logo {
    text-align: center;
    margin-left:1%;
}
.name {
    font-family: cursive;
    font-weight: bold;
    text-indent: 5%;
    color: #f4e3ce;
    margin-right:73%;
}

header {
    background-color:#9673ce;
    color: #f4e3ce;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: large;
}

header h1 {
    margin: 0;
}

.head {
    text-align: center;
    color: purple;
}

main {
    margin: 20px;
    text-align: center;
}

form {
    max-width: 600px;
    margin: auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top:60px;
}
h2{
    color:purple;
    
}
label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    text-align: left;
}

input,
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.payment-options {
    display: flex;
    justify-content: space-between;
}

.payment-option {
    flex: 1;
    margin-right: 10px;
    display: flex;
    align-items: center;
}

button {
    background-color: #9673ce;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #9673ce;
}

#paymentDetails {
    display: none;
    margin-top: 20px;
}

#paymentDetails p {
    margin: 10px 0;
}


</style>
</head>
<body>
<header>
        <div class="logo">
            <img src="logo.png" alt="Ahmedabad City" width="100" height="100">
        </div>
        <div class="name">
            <h1 style="color:">AhmdXploreHub</h1>
        </div>
    </header>
    <center> <h1 style="color:purple;">Payment</h1></center>
<form id="paymentForm" method="get" action="payment.php" style="margin-top:15px;">
   
        <label for="bookingAmount">Total Amount:</label>
        <input type="text" id="bookingAmount" name="bookingAmount" value="120.00">
        <label for="paymentMode">Select Payment Mode:</label>
        <select id="paymentMode" name="payment_mode" onchange="showPaymentDetails()">
            <option value="cash">Cash</option>
            <option value="card">Credit/Debit Card</option>
            <option value="upi">UPI</option>
        </select>

        <div id="cardDetails" style="display: none;">
            <!-- Card payment details -->
            <label for="cardNumber">Card Number:</label>
            <input type="text" id="cardNumber" placeholder="Enter card number" required>
            
            <label for="expiryDate">Expiry Date:</label>
            <input type="text" id="expiryDate" placeholder="MM/YYYY"required>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" placeholder="Enter CVV"required>
        </div>

        <div id="upiDetails" style="display: none;">
            <label for="upiId">UPI ID:</label>
            <input type="text" id="upiId" placeholder="Enter UPI ID"required>

            <label for="upipassword">Password:</label>
            <input type="password" id="upipassword" placeholder="Enter UPI password"required>
        </div>

        <center><button type="button" onclick="processPayment()">Pay</button></center>
    </form>
    
    <script>
        function showPaymentDetails() {
            var paymentMode = document.getElementById("paymentMode").value;
            var cardDetails = document.getElementById("cardDetails");
            var upiDetails = document.getElementById("upiDetails");

            if (paymentMode === "card") {
                cardDetails.style.display = "block";
                upiDetails.style.display = "none";
            } else if (paymentMode === "upi") {
                cardDetails.style.display = "none";
                upiDetails.style.display = "block";
            } else {
                cardDetails.style.display = "none";
                upiDetails.style.display = "none";
            }
        }

        function processPayment() {
            var paymentMode = document.getElementById("paymentMode").value;
            var bookingAmount = "<?php echo $bookingAmount; ?>"; // Fetching PHP variable

            // Map payment modes to their corresponding values
            var paymentModeValues = {
                "cash": 1,
                "card": 2,
                "upi": 3
            };

            // Get the payment mode value based on the selected option
            var paymentModeValue = paymentModeValues[paymentMode];

            // Create FormData object to send data to the server
            var formData = new FormData();
            formData.append('booking_id', "<?php echo $booking_id; ?>");
            formData.append('amount', bookingAmount);
            formData.append('payment_mode', paymentModeValue);

            // Send form data to the server for processing
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "", true); // Empty string indicates the current URL
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Handle server response
                    if (xhr.responseText.trim() === "success") {
                        alert("Payment successful!");
                        // Redirect the user to a confirmation page or perform further actions
                    } else {
                        alert("Payment successful!");
                    }
                }
            };
            xhr.send(formData);
        }
    </script>
</body>
</html>

<?php
// PHP code for processing form submission
include 'db1.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve form data
    $booking_id = 8;
    $amount = isset($_GET['bookingAmount']) ? $_GET['bookingAmount'] : '';
    $payment_mode = isset($_GET['payment_mode']) ? $_GET['payment_mode'] : '';

    // Check if booking amount is set
 

    // Insert payment details into the database
    $insertPaymentQuery = "INSERT INTO payment_master_tbl (Booking_ID, Amount, Payment_Mode) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($insertPaymentQuery);
    $stmt->bind_param("ids", $booking_id, $amount, $payment_mode);

    // Execute the statement
    if ($stmt->execute()) {
        echo ""; // Payment successful
    } else {
        echo "failure"; // Payment failed
    }
} 
?>