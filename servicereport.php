<?php
// Include the database connection file
include 'db1.php';

// Fetch categories from the category table
$sql = "SELECT * FROM category_master_tbl";
$result = $conn->query($sql);

$categoryNames = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $categoryNames[$row['Category_ID']] = $row['Category_Name'];
    }
} 

// Fetch subcategories from the subcategory table
$sql = "SELECT * FROM sub_category_tbl";
$result = $conn->query($sql);

$subcategoryNames = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $subcategoryNames[$row['Sub_Category_ID']] = $row['Sub_Category_Name'];
    }
} 

// Fetch users from the user table
$sql = "SELECT * FROM user_tbl";
$result = $conn->query($sql);

$userNames = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $userNames[$row['User_ID']] = $row['User_Name'];
    }
} 

// Close database connection

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        #reportContainer {
            max-width: 100%;
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
        <h1>Service Report</h1>
        <!-- Filter dropdown for categories -->
        <div>
            <label for="categoryFilter">Filter by Category:</label>
            <select id="categoryFilter" onchange="filterServices()">
    <option value="">All</option>
    <?php
    // Fetch categories from the category table
    $sql = "SELECT * FROM category_master_tbl";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['Category_Name'] . "'>" . $row['Category_Name'] . "</option>";
        }
    } else {
        echo "<option value=''>No categories found</option>";
    }
    ?>
</select>
            <button id="downloadButton" onclick="generatePDF()">Download Report</button>
        </div>
        <!-- End of filter dropdown -->

        <!-- Table to display service report -->
        <table id="serviceReportTable">
            <thead>
                <tr>
                    <th>Service ID</th>
                    <th>Service Name</th>
                    <th>Tagline</th>
                    <th>Address</th>
                    <th>Timings</th>
                    <th>Phone Number</th>
                    <th>Date</th>
                    <th>Price</th>
                    <th>Category Name</th>
                    <th>Subcategory Name</th>
                    <th>Service Provider Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch service report data from the database
                $sql = "SELECT * FROM service_tbl";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row['Service_ID']}</td>";
                        echo "<td>{$row['Service_Name']}</td>";
                        echo "<td>" . (!empty($row['Tagline']) ? $row['Tagline'] : '-') . "</td>";
                        echo "<td>{$row['Address']}</td>";
                        echo "<td>{$row['Timings']}</td>";
                        echo "<td>" . (!empty($row['Phone']) ? $row['Phone'] : '-') . "</td>";
                        echo "<td>" . (!empty($row['Date']) ? $row['Date'] : '-') . "</td>";
                        echo "<td>" . (!empty($row['Price']) ? $row['Price'] : '-') . "</td>";
                        echo "<td>{$categoryNames[$row['Category_ID']]}</td>";
                        echo "<td>" . ($subcategoryNames[$row['Sub_Category_ID']] ?? '-') . "</td>";
                        echo "<td>{$userNames[$row['User_ID']]}</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='16'>No services found</td></tr>";
                }

                // Close database connection
                $conn->close();
                ?>
            </tbody>
        </table>
        <!-- End of service report table -->

        <!-- Download button -->
       
        <!-- End of download button -->
    </div>

    <script>
    // Function to filter services based on category
    function filterServices() {
    var categoryFilter = document.getElementById("categoryFilter").value;
    console.log("Selected Category ID: " + categoryFilter); // Debug statement to check the selected category ID

    var rows = document.getElementById("serviceReportTable").getElementsByTagName("tr");

    for (var i = 1; i < rows.length; i++) {
        var categoryCell = rows[i].getElementsByTagName("td")[8].textContent; // Adjusted index for Category_ID
        console.log("Category ID in Row " + i + ": " + categoryCell); // Debug statement to check the Category_ID in each row
        if (categoryFilter === "" || categoryCell === categoryFilter) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }
    }
}

    // Function to download the service report
    function generatePDF() {
    // Get the selected category filter
    var categoryFilter = document.getElementById("categoryFilter").value;

    // Create an XMLHttpRequest object
    var xhr = new XMLHttpRequest();
    
    // Define the URL of the servicepdf.php script with the category filter as a query parameter
    var url = 'servicepdf.php?categoryFilter=' + encodeURIComponent(categoryFilter);

    // Open a GET request to the servicepdf.php script
    xhr.open('GET', url, true);
    
    // Set the response type to blob
    xhr.responseType = 'blob';

    // Define the onload function
    xhr.onload = function () {
        if (xhr.status === 200) {
            // Create a Blob from the PDF stream
            var blob = new Blob([xhr.response], { type: 'application/pdf' });
            
            // Create a temporary anchor element
            var a = document.createElement('a');
            a.href = window.URL.createObjectURL(blob);
            a.download = 'service_report.pdf';
            
            // Append the anchor to the body
            document.body.appendChild(a);
            
            // Trigger the download
            a.click();
            
            // Cleanup
            window.URL.revokeObjectURL(a.href);
            document.body.removeChild(a);
        }
    };
    
    // Send the XMLHttpRequest
    xhr.send();
}
</script>

</body>
</html>
