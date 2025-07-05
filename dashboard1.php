<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="account info.css"> 
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        /*function loadContent(page) {
            $.get(page, function(data) {
                $("#content-container").html(data);
            }).fail(function(xhr, status, error) {
                console.error("Failed to load content:", error);
            });
        }*/

        //Fetch user initials dynamically from the database
        <script>
        $(document).ready(function() {
            // Function to fetch user information and populate the form fields
            function fetchUserInfo(email) {
                $.ajax({
                    type: 'POST',
                    url: 'get_user_info.php',
                    data: { Email_ID: email },
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        if (response.error) {
                            console.error(response.error);
                        } else {
                            $('#userId').val(response.User_ID);
                            $('#username').val(response.User_Name);
                            $('#userType').val(response.User_Type);
                            $('#email').val(response.Email_ID);
                            $('#phone').val(response.Phone_No);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Failed to fetch user information:", error);
                    }
                });
            }

            // Call the fetchUserInfo function when the page is loaded
            var email = '<?php echo isset($_POST["Email_ID"]) ? $_POST["Email_ID"] : ""; ?>';
            if (email !== '') {
                fetchUserInfo(email);
            }
        });

        // Assume you have obtained the user's name during login
        /*var userName = "Anaya"; // Replace with the actual user's name*/
        var initial = userName ? userName.charAt(0).toUpperCase() : "U"; // Get the first letter and convert to uppercase

        // Insert the initial into the profile circle
        document.addEventListener("DOMContentLoaded", function() {
            var profileCircle = document.getElementById('profileCircle');
            profileCircle.innerHTML = "<p>" + initial + "</p>";
        });

    </script>
    <title>Service Provider</title>
 <style>
        #dashboard {
            float: left;
            width: 200px;
            height: 100vh;
            padding: 20px;
            background-color: #f0f0f0;
            box-sizing: border-box;
        }

        #tablesContainer {
            float: left;
            width: calc(100% - 200px);
            height: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        #dashboard a {
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <header style="height:80px">
        <div class="logo">
            <img src="logo.png" alt="Ahmedabad City" width="100" height="100">
        </div>
        <div class="name" style="text-indent: -740px;">
            <h1>AhmdXploreHub</h1>
        </div>
        <div class="profile-circle" id="profileCircle">
            <?php
            include 'db1.php'; // Include your database connection file

            // Assuming you have a table named 'users' with a column 'name' where user names are stored
            // Replace 'users' and 'name' with your actual table and column names
            if (!empty($_GET['Email_ID'])) {
                $email = $_GET['Email_ID'];
            
                // Query to fetch user information based on email
                $query = "SELECT User_Name FROM user_tbl WHERE Email_ID = '$email'";
                $result = mysqli_query($conn, $query);
            
                if ($result) {
                    $row = mysqli_fetch_assoc($result);
                    $userName = $row['User_Name'];
                    $initial = $userName ? strtoupper($userName[0]) : "U";
                    echo "<div class='profile-circle' id='profileCircle'><p>" . $initial . "</p></div>";
                } else {
                    echo "<div class='profile-circle' id='profileCircle'><p>U</p></div>"; // Default value if there's an error
                }
            }
            mysqli_close($conn); // Close the database connection
            ?>
        </div> 
    </header>

    <div id="dashboard">
        <h3 style="color:purple;">Dashboard</h3>
        <a href="#" onclick="loadContent('account.php')">Account Info</a>
        <a href="#" onclick="loadContent('fetch_services.php')">Manage Your Service</a>
        <a href="#" onclick="loadContent('manage_booking.php')">Manage Bookings</a>
        <a href="#" onclick="loadContent('manage_payment.php')">Manage Payments</a>
        <a href="home.php">Logout</a></li>
    </div>
    <!-- Content Area -->
    <div id="content-container" class="content">
        <!-- Content will be loaded here -->
    </div>

    <script>
        function loadContent(page) {
    $.get(page, function(data) {
        $("#content-container").html(data);
    }).fail(function(xhr, status, error) {
        console.error("Failed to load content:", error);
    });
}    
    </script>
</body>
</html>