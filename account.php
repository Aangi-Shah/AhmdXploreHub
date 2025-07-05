<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 700px;
            margin: 50px 500px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
        }

        h2 {
            color: purple;
            text-align: center;
            margin-top:5px;
        }

        p {
            margin: 10px 0;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input {
            width: 97%;
            padding: 8px;
            margin-top: 5px;
        }

        center {
            margin-top: 20px;
        }

        button {
            padding: 10px;
            margin: 0 5px;
        }

        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            align-items: center;
            justify-content: center;
        }

        #popup {
            background-color: #fff;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-size: large;
        }

        .cancel {
            background-color: #ccc;
        }

        /* Add additional styling as needed */
    </style>
    <!-- Include your db1.php file for database connection -->
    <?php include 'db1.php'; ?>
</head>
<body>
<h2>User Information</h2>
<div class="container">

    <?php
    // Start or resume the session
    session_start();

    // Check if the user is logged in
    if (isset($_SESSION['user_id'])) {
        // Get the user ID from the session
        $userID = $_SESSION['user_id'];

        // Fetch user details from the database
        $sql = "SELECT * FROM user_tbl WHERE User_ID = $userID";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of the user
            $row = $result->fetch_assoc();
            ?>
            
            
            <form id="myForm" method="post" action="update_profile.php"  >
                <label for="userId">User ID:</label>
                <input type="text" id="userId" name="userId" value="<?php echo isset($row['User_ID']) ? $row['User_ID'] : ''; ?>" readonly><br>
                <label for="username">Name:</label>
                <input type="text" id="username" name="username" value="<?php echo isset($row['User_Name']) ? $row['User_Name'] : ''; ?>"><br>
                <label for="userType">User Type:</label>
<?php
if ($row['User_Type'] == 1) {
    echo '<input type="text" id="userType" name="userType" value="Tourist" readonly>';
} elseif ($row['User_Type'] == 2) {
    echo '<input type="text" id="userType" name="userType" value="Service Provider" readonly>';}?>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo isset($row['Email_ID']) ? $row['Email_ID'] : ''; ?>"><br>
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" value="<?php echo isset($row['Phone_No']) ? $row['Phone_No'] : ''; ?>">

                
            </form>

            <!-- Buttons -->
            <center>

            <button type="submit" onclick="saveProfile()">Save Profile</button>

                <button type="button" onclick="openPopup()">Change Password</button>
            </center>

            <div id="overlay">
                <div id="popup">
                    <h2>Change Password</h2>
                    <label for="currentPasswordPopup">Current Password:</label>
                    <input type="password" id="currentPasswordPopup" name="currentPasswordPopup">
                    <span id="currentPasswordError" style="color: red;"></span><br>

                    <label for="newPassword">New Password:</label>
                    <input type="password" id="newPassword" name="newPassword"><br>

                    <label for="confirmPassword">Confirm Password:</label>
                    <input type="password" id="confirmPassword" name="confirmPassword"><br>

                    <button onclick="savePassword()">Save</button>
                    <button class="cancel" onclick="closePopup()">Cancel</button>
                </div>
            </div>
            <?php
        } else {
            echo "No results found";
        }
    } else {
        // Redirect or display a message if the user is not logged in
        echo "User not logged in.";
    }
    ?>

</div>

<script>
    function saveProfile() {
        // Assuming your form has the ID "myForm"
        document.getElementById('myForm').submit();
    }


    function openPopup() {
        document.getElementById('overlay').style.display = 'flex';
    }

    function closePopup() {
        document.getElementById('overlay').style.display = 'none';
    }

    function savePassword() {
    // Get input values
    var currentPassword = document.getElementById('currentPasswordPopup').value;
    var newPassword = document.getElementById('newPassword').value;
    var confirmPassword = document.getElementById('confirmPassword').value;

    // Perform any client-side validation as needed

    // Make an AJAX request to update_password.php
    $.ajax({
        type: 'POST',
        url: 'update_password.php',
        data: {
            currentPassword: currentPassword,
            newPassword: newPassword,
            confirmPassword: confirmPassword
        },
        success: function (response) {
            // Handle the response from the server
            alert(response); // Display a success or error message
            closePopup(); // Close the popup after processing
        },
        error: function (xhr, status, error) {
            console.error("AJAX request failed:", error);
        }
    });
}

</script>
</body>
</html>
