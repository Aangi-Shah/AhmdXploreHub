<?php
// Include your db1.php file for database connection
include 'db1.php';

// Start or resume the session
session_start();

// Check if service_id is provided in the URL
if(isset($_GET['service_id'])) {
    // Get the service ID from the URL
    $serviceID = $_GET['service_id'];

    if (isset($_SESSION['user_id'])) {
        // Get the user ID from the session
        $userID = $_SESSION['user_id'];

        // Fetch service details from the database using a prepared statement
        $sql = "SELECT * FROM service_tbl WHERE User_ID = ? AND Service_ID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $userID, $serviceID);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if any rows were returned
        if ($result->num_rows > 0) {
            // Fetch the data and assign it to the $service variable
            $service = $result->fetch_assoc();
?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Service Details</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #fff;
                        margin: 0;
                        padding: 0;
                    }

                    
                    h2 {
                        color: purple;
                    }

                    form {
                        margin-top: 20px;
                    }

                    label {
                        display: block;
                        margin-top: 10px;
                    }

                    input, textarea {
                        width: 100%;
                        padding: 8px;
                        margin-top: 5px;
                    }

                    img {
                        max-width: 100%;
                        height: auto;
                    }

                    center {
                        margin-top: 20px;
                    }

                    button {
                        padding: 10px;
                        margin: 0 5px;
                    }
                </style>
            </head>
            <body>
                    <h2>Service Information</h2>
                    <form id="myForm" method="post" action="update_service.php" onsubmit="saveService(event)">
                        <label for="serviceId">Service ID:</label>
                        <input type="text" id="serviceId" name="serviceId" value="<?php echo $service['Service_ID']; ?>" readonly><br>

                        <label for="serviceName">Service Name:</label>
                        <input type="text" id="serviceName" name="serviceName" value="<?php echo $service['Service_Name']; ?>"><br>

                        <label for="tagline">Tagline:</label>
                        <input type="text" id="tagline" name="tagline" value="<?php echo $service['Tagline']; ?>"><br>

                        <label for="about">About:</label>
                        <textarea id="about" name="about"><?php echo $service['About']; ?></textarea><br>

                        <label for="keyFeatures">Key Features:</label>
                        <textarea id="keyFeatures" name="keyFeatures"><?php echo $service['Key_Features']; ?></textarea><br>

                        <label for="image">Image:</label>
                        <img src="<?php echo $service['Image']; ?>" alt="Service Image"><br>

                        <label for="image1">Image 1:</label>
                        <img src="<?php echo $service['Image1']; ?>" alt="Service Image 1"><br>

                        <label for="image2">Image 2:</label>
                        <img src="<?php echo $service['Image2']; ?>" alt="Service Image 2"><br>

                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" value="<?php echo $service['Address']; ?>"><br>

                        <label for="timings">Timings:</label>
                        <input type="text" id="timings" name="timings" value="<?php echo $service['Timings']; ?>"><br>

                        <label for="phone">Phone:</label>
                        <input type="text" id="phone" name="phone" value="<?php echo $service['Phone']; ?>"><br>

                        <label for="price">Price:</label>
                        <input type="text" id="price" name="price" value="<?php echo $service['Price']; ?>"><br>

                        <label for="categoryId">Category ID:</label>
                        <input type="text" id="categoryId" name="categoryId" value="<?php echo $service['Category_ID']; ?>"><br>

                        <?php if (!empty($service['Sub_Category_ID'])) { ?>
                            <label for="subCategoryId">Sub Category ID:</label>
                            <input type="text" id="subCategoryId" name="subCategoryId" value="<?php echo $service['Sub_Category_ID']; ?>"><br>
                        <?php } ?>

                        <!-- Add more fields as needed -->

                        <button type="submit">Save Service</button>
    </form>
    <div id="responseMessage"></div>

    <script>
        function saveService(event) {
            event.preventDefault(); // Prevent default form submission

            // Submit the form using AJAX
            var xhr = new XMLHttpRequest();
            var formData = new FormData(document.getElementById("myForm"));
            xhr.open("POST", "update_service.php", true); // Change this to your actual PHP file
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Check the response text
                    if (xhr.responseText.trim() === "success") {
                        // Display success message
                        alert("Service saved successfully.");
                    } else {
                        // Display error message
                        alert("Error saving service. Please try again later.");
                    }
                } else {
                    // Display error message if status is not 200
                    alert("Error saving service. Please try again later.");
                }
            };
            xhr.onerror = function () {
                // Display error message if there's an error with the request
                alert("Error saving service. Please try again later.");
            };
            xhr.send(formData);
        }
        </script>
            </body>
            </html>
<?php
        } else {
            echo "No service found for the logged-in user with the provided service ID.";
        }

        // Close the statement
        $stmt->close();
    } else {
        // Redirect or display a message if the user is not logged in
        echo "User not logged in.";
    }
} else {
    echo "No service ID provided.";
}
?>
