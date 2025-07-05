<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Service</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .action-buttons button {
            border-width: 1px;
            border-radius: 3px;
            text-align:center;
        }

        .container {
            max-width: 600px;
            padding: 20px;
            margin-right: 250px;
            margin-top:20px;
        }

        h2 {
            color: purple;
            text-align: center;
            margin-top:5px;
        }
    </style>
    <?php include 'db1.php'; ?>
</head>
<body>
    <h2>Services</h2>
    <div class="container" id="contentContainer">
        <button type="button" onclick="openBlankServiceForm()">Add Service</button>
        <table id="serviceTable">
            <thead>
                <tr>
                    <th>Service ID</th>
                    <th>Service Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    session_start();
                    if (isset($_SESSION['user_id'])) {
                        $userID = $_SESSION['user_id'];
                        // Fetch services of the logged-in user from the database
                        $query = "SELECT service_tbl.Service_ID, service_tbl.Service_Name
                                    FROM service_tbl
                                    INNER JOIN user_tbl ON service_tbl.User_ID = user_tbl.User_ID
                                    WHERE service_tbl.User_ID = $userID";
                        $result = mysqli_query($conn, $query);

                        if ($result && mysqli_num_rows($result) > 0) {
                            // Output data of each row
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row["Service_ID"] . "</td>";
                                echo "<td>" . $row["Service_Name"] . "</td>";
                                echo "<td class='action-buttons'>
                                        <button class='view-btn' onclick='viewService(" . $row["Service_ID"] . ")'><i class='fas fa-eye'></i></button>
                                        <button class='view-btn' onclick='deleteService(" . $row["Service_ID"] . ")'><i class='fas fa-trash'></i></button>
                                        </td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='3'>No services found</td></tr>";
                        }

                        mysqli_close($conn);
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        function viewService(serviceId) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("contentContainer").innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET", 'manage_place.php?service_id=' + serviceId, true);
            xhr.send();
        }

        function deleteService(serviceId) {
            if (confirm("Are you sure you want to delete this service?")) {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == XMLHttpRequest.DONE) {
                        if (xhr.status == 200) {
                            alert("Service Deleted Successfully");
                            location.reload();
                        } else {
                            console.error('Error:', xhr.responseText);
                        }
                    }
                };
                xhr.open("POST", "<?php echo $_SERVER['PHP_SELF']; ?>", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.send("action=delete&service_id=" + serviceId);
            }
        }
        
        function openBlankServiceForm() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("contentContainer").innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET", 'add_place.php', true);
            xhr.send();
        }
    </script>

    <?php
    // Include your db1.php file for database connection
    include 'db1.php';

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'delete') {
        // Check if service_id is provided in the POST data
        if(isset($_POST['service_id'])) {
            // Get the service ID from the POST data
            $serviceID = $_POST['service_id'];

            // Prepare and execute the DELETE query
            $sql = "DELETE FROM service_tbl WHERE Service_ID = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $serviceID);
            if ($stmt->execute()) {
                echo "Service deleted successfully.";
            } else {
                echo "Error deleting service.";
            }
            $stmt->close();
        } else {
            echo "No service ID provided.";
        }
    }
    ?>
</body>
</html>
