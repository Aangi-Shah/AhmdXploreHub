<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Report</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        #reportContainer {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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
        <h1>User Report</h1>
        <!-- Filter dropdown -->
        <div>
            <label for="userTypeFilter">Filter by User Type:</label>
            <select id="userTypeFilter" onchange="filterUsers()">
                <option value="">All</option>
                <option value="Tourist">Tourist</option>
                <option value="Service Provider">Service Provider</option>
            </select>
  
            <button id="downloadButton" onclick="generatePDF()">Download Report</button>

        </div>
        <table id="userReportTable">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>User Type</th>
                    <th>Email ID</th>
                    <th>Phone No</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Include the database connection file
                include 'db1.php';

                function displayUserType($type) {
                    return $type == 1 ? "Tourist" : ($type == 2 ? "Service Provider" : "Unknown");
                }
                // Fetch user report data from the database
                $sql = "SELECT * FROM user_tbl";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row['User_ID']}</td>";
                        echo "<td>{$row['User_Name']}</td>";
                        echo "<td>" . displayUserType($row['User_Type']) . "</td>";
                        echo "<td>{$row['Email_ID']}</td>";
                        echo "<td>{$row['Phone_No']}</td>";
                        echo "<td>{$row['date']}</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No users found</td></tr>";
                }

                // Close database connection
                $conn->close();
                ?>
            </tbody>
        </table>
        <br>
        <!-- End of user report table -->
    </div>

    <script>
        function filterUsers() {
            var userTypeFilter = document.getElementById("userTypeFilter").value;
            var rows = document.getElementById("userReportTable").getElementsByTagName("tr");

            for (var i = 1; i < rows.length; i++) {
                var userTypeCell = rows[i].getElementsByTagName("td")[2];
                if (userTypeFilter === "" || userTypeCell.textContent === userTypeFilter) {
                    rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
                }
            }
        }

        // Function to download the user report
        // Function to download the user report
function generatePDF() {
    // Get the filter value
    var userTypeFilter = document.getElementById("userTypeFilter").value;
    var numericUserTypeFilter = '';

    // Map user type string to its corresponding numeric value
    switch (userTypeFilter) {
        case 'Tourist':
            numericUserTypeFilter = 1;
            break;
        case 'Service Provider':
            numericUserTypeFilter = 2;
            break;
        default:
            numericUserTypeFilter = '';
    }

    // AJAX request to generate PDF with filter criteria
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'myPDF.php?userTypeFilter=' + numericUserTypeFilter, true);
    xhr.responseType = 'blob'; // Set response type to blob
    xhr.onload = function () {
        if (xhr.status === 200) {
            // Create a Blob from the PDF Stream
            var blob = new Blob([xhr.response], { type: 'application/pdf' });
            // Create a temporary anchor element
            var a = document.createElement('a');
            a.href = window.URL.createObjectURL(blob);
            a.download = 'user_report.pdf';
            // Append anchor to body
            document.body.appendChild(a);
            // Trigger download
            a.click();
            // Cleanup
            window.URL.revokeObjectURL(a.href);
            document.body.removeChild(a);
        }
    };
    xhr.send();
}

    </script>
</body>
</html>
