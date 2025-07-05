<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        #reportContainer {
            max-width: 900px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align:center;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color:purple;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        button {
            padding: 10px 20px;
            background-color: #9673ce;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #9673ce;
        }
    </style>
</head>
<body>
    <div id="reportContainer">
        <h1>Booking Report</h1>
        <!-- Form to input start and end dates -->
        <form method="POST">
            <label for="startDate">Start Date:</label>
            <input type="date" id="startDate" name="startDate">
            <label for="endDate">End Date:</label>
            <input type="date" id="endDate" name="endDate">
            <button type="submit">Generate Report</button>
            <button id="downloadButton" onclick="downloadReport()">Download Report</button>
        </form>
        <!-- End of form -->

        <?php
// Include the database connection file
include 'db1.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve start and end dates from form
    $startDate = $_POST["startDate"];
    $endDate = $_POST["endDate"];

    // Fetch bookings within the specified date range
    $sql = "SELECT booking_tbl.*, service_tbl.service_name 
            FROM booking_tbl 
            INNER JOIN service_tbl ON booking_tbl.Service_ID = service_tbl.service_id
            WHERE booking_tbl.Booking_Date BETWEEN '$startDate' AND '$endDate'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Booking ID</th><th>User ID</th><th>Name</th><th>Booking Date</th><th>No. of Attendees</th><th>Booking Amount</th><th>Total Amount</th><th>Service Name</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['Booking_ID']}</td>";
            echo "<td>{$row['User_ID']}</td>";
            echo "<td>{$row['Name']}</td>";
            echo "<td>{$row['Booking_Date']}</td>";
            echo "<td>{$row['No_of_Attendees']}</td>";
            echo "<td>{$row['Booking_Amount']}</td>";
            echo "<td>{$row['Total_Amount']}</td>";
            echo "<td>{$row['service_name']}</td>"; // Display service_name instead of service_id
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No bookings found within the specified date range.";
    }
}

// Close database connection
$conn->close();
?>

        <!-- End of booking report table -->
    </div>
    <script>
        function downloadReport(startDate, endDate) {
            console.log("Download button clicked");
            console.log("Start Date:", startDate);
            console.log("End Date:", endDate);

            // Check if both start and end dates are provided
            if (startDate !== "" && endDate !== "") {
                // Create a new XMLHttpRequest object
                var xhr = new XMLHttpRequest();

                // Prepare the request to generate the PDF report
                xhr.open('GET', 'bookingpdf.php?startDate=' + startDate + '&endDate=' + endDate, true);
                xhr.responseType = 'blob'; // Set response type to blob

                // Define a callback function to handle the response
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        // Create a Blob from the PDF stream
                        var blob = new Blob([xhr.response], { type: 'application/pdf' });

                        // Create a temporary anchor element
                        var a = document.createElement('a');
                        a.href = window.URL.createObjectURL(blob);
                        a.download = 'booking_report.pdf';

                        // Append anchor to body
                        document.body.appendChild(a);

                        // Trigger download
                        a.click();

                        // Cleanup
                        window.URL.revokeObjectURL(a.href);
                        document.body.removeChild(a);
                    } else {
                        alert('Failed to generate PDF report. Please try again later.');
                    }
                };

                // Send the request
                xhr.send();
            } else {
                alert('Please select both start and end dates.');
            }
        }

        // Call the downloadReport function with PHP variables for start and end dates
        downloadReport('<?php echo isset($_POST["startDate"]) ? $_POST["startDate"] : "" ?>', '<?php echo isset($_POST["endDate"]) ? $_POST["endDate"] : "" ?>');
</script>
</body>
</html>
