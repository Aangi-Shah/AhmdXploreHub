<?php
 // Start the session to access session variables

include 'initial.php'; // Include file for initializing resources, if needed

// Check if the user is logged in and their user ID is set in the session
if(isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id']; // Retrieve user ID from session
} else {
    // Redirect the user to the login page or handle the case where the user is not logged in
    // For example:
    header("Location: login.php");
    exit(); // Stop further execution
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="account info.css">
    <title>User Details</title>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}

.logo {
    /* text-align: center; */
    margin-left: 5px;

}
.name {
    font-family: cursive;
    font-weight: bold;
    text-indent: -40%;
    color: #f4e3ce;
}
header {
    background-color:#9673ce;
    color: #f4e3ce;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: large;
}

.profile-circle {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    overflow: hidden;
    background-color: #f4e3ce;
    display: flex;
    justify-content: center;
    align-items: center;
}

.profile-circle p {
    margin: 0;
    font-size: 24px;
    color: purple;
}

nav ul {
    list-style: none;
    display: flex;
}

nav ul li {
    margin-right: 15px;
    margin-top: 25px;
}

nav a {
    text-decoration: none;
    color: #f4e3ce;
}

.categories-dropdown, .user-auth{
    position: relative;
}

.dropdown-content, .auth-dropdown {
    display: none;
    position: absolute;
    background-color: purple;
    padding: 10px;
    z-index: 1;
    width: 130px;
}

.dropdown-conten, .auth-dropdow {
    display: none;
    position: absolute;
    background-color: purple;
    padding: 10px;
    z-index: 1;
    width: 130px;
    margin-inline: -75px;
}

.categories-dropdown:hover .dropdown-content, .user-auth:hover .auth-dropdown {
    display: block;
}

.hotels-dropdown:hover .dropdown-content, .user-auth:hover .auth-dropdown {
    display: block;
}

.profile-dropdown:hover .dropdown-conten, .user-auth:hover .auth-dropdow {
    display: block;
}

.main {
    padding: 20px;
}

.hero img {
    width: 100%;
    max-height: 400px;
    object-fit: cover;
}



.container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: purple;
}

form {
    margin-top: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

button {
    background-color: #9673ce;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-right: 40px;
}

button:hover {
    background-color: #9673ce;
}

#overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: none;
    align-items: center;
    justify-content: center;
}

#popup {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    text-align: center;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

button.cancel {
    background-color: #9673ce;
}

        /* Add additional styling as needed */
    </style>
    <!-- Include your db1.php file for database connection -->
    <?php include 'db1.php'; ?>
</head>
<body>
<header style="padding:5px 10px;">
        <div class="logo">
            <img src="logo.png" alt="Ahmedabad City" width="100" height="100">
        </div>
        <div class="name">
            <h1 style="text-indent:-45%;">AhmdXploreHub</h1>
        </div>

        <nav>
            <ul style="white-space: nowrap;">
            <li><a href="home1.php">Home</a></li>
                <li><a href="thingstodo.php">Things to Do</a></li>
                <li><a href="restaurants.php">Restaurants</a></li>
                <li class="hotels-dropdown">
                    <a href="#">Hotels</a>
                    <div class="dropdown-content">
                        <a href="luxury.php">Luxury Hotels</a><br>
                        <a href="business hotel.php">Business Hotels</a><br>
                        <a href="budget.php">Budget Hotels</a><br>
                    </div>
                </li>
                <li class="categories-dropdown">
                    <a href="#">Categories</a>
                    <div class="dropdown-content">
                        <a href="attractions.php">Attractions</a><br>
                        <a href="events.php">Events</a><br>
                        <a href="localinsights.php">Local Insights</a><br>
                        <a href="heritage.php">Heritage</a><br>
                        <a href="malls&markets.php">Malls & Markets</a><br>
                        <a href="foodparks.php">Food Parks<br></a>
                    </div>
                </li>
                
                <li class="profile-dropdown">
                    <div class="profile-circle" id="profileCircle"></div>
                        <div class="dropdown-conten">
                            <a href="account1.php">Account info</a><br>
                            <a href="wishlist.php">Wishlist</a><br>
                            <a href="urbooking.php">Bookings</a><br>
                            <a href="trips.php">Past Visits</a><br>
                            <a href="home.html">Logout<br></a>
                        </div>
                </li>
            </ul>
        </nav>
    </header>
<div class="container">

    <?php
    // Start or resume the session
    //session_start();

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
            
            <h2>User Information</h2>
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
