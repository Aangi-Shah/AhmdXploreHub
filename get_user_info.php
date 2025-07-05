<?php
// Include your database connection file
include 'db1.php';

// Initialize variables to store user information
$user = [];
$error = '';

// Check if the email parameter is sent in the POST request
if (isset($_POST['Email_ID'])) {
    // Sanitize the email input to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $_POST['Email_ID']);

    // Query to fetch user information based on the email
    $query = "SELECT * FROM user_tbl WHERE Email_ID = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Check if user exists
        if (mysqli_num_rows($result) == 1) {
            // Fetch user information
            $user = mysqli_fetch_assoc($result);
        } else {
            // User not found
            $error = 'User not found';
        }
    } else {
        // Error executing the query
        $error = 'Error fetching user information';
    }
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
</head>

<body>

    <h2>User Information</h2>
    <form id="myForm">
    <label for="userId">User ID:</label>
<input type="text" id="userId" name="userId" value="<?php echo isset($user['User_ID']) ? $user['User_ID'] : ''; ?>" readonly><br>
<label for="username">Name:</label>
<input type="text" id="username" name="username" value="<?php echo isset($user['User_Name']) ? $user['User_Name'] : ''; ?>"><br>
<label for="userType">User Type:</label>
<input type="text" id="userType" name="userType" value="<?php echo isset($user['User_Type']) ? $user['User_Type'] : ''; ?>"><br>
<label for="email">Email:</label>
<input type="email" id="email" name="email" value="<?php echo isset($user['Email_ID']) ? $user['Email_ID'] : ''; ?>"><br>
<label for="phone">Phone Number:</label>
<input type="tel" id="phone" name="phone" value="<?php echo isset($user['Phone_No']) ? $user['Phone_No'] : ''; ?>">

        <label for="currentPassword">Current Password:</label>
        <input type="password" id="currentPassword" name="currentPassword"><br>
        <!-- Add more fields as needed -->
    </form>

    <!-- Buttons -->
    <center>
        <button type="button" onclick="resetProfile()">Reset Profile</button>
        <button type="button" onclick="saveProfile()">Save Profile</button>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function resetProfile() {
            document.getElementById("myForm").reset();
        }

        function saveProfile() {
            alert('Profile saved');
            // Add logic to save profile information to the database
        }

        function openPopup() {
            document.getElementById("overlay").style.display = "flex";
        }

        function closePopup() {
            document.getElementById("overlay").style.display = "none";
            document.getElementById("currentPasswordError").innerHTML = "";
        }

        function savePassword() {
            var currentPassword = document.getElementById("currentPasswordPopup").value;

            // AJAX request to verify the current password
            $.ajax({
                type: 'POST',
                url: 'verify_current_password.php',
                data: {
                    userId: <?php echo isset($user['User_ID']) ? $user['User_ID'] : ''; ?>,
                    currentPassword: currentPassword
                },
                success: function(response) {
                    if (response === "success") {
                        alert('Password saved');
                        closePopup();
                    } else {
                        document.getElementById("currentPasswordError").innerHTML = "Incorrect current password";
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Failed to verify current password:", error);
                }
            });
        }
    </script>
</body>

</html>
