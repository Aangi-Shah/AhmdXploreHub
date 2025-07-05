<?php
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
    <title>Past Trips</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}

.logo {
    /* text-align: center; */
    margin-left: 10px;

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

.button {
    border-radius: 20px;
    background-color: #f4e3ce;
    font-weight: bold;
    color:purple;
    padding-left:5px;
    padding-right: 5px;
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


h2 {
    text-align: center;
    color:purple;
}

.container {
    justify-content: center;
    margin-left: 3%;
    margin-right: 3%;
}

.past-trips-container {
    display: flex;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 40px;
}

.trip-card {
    border: 1px solid #ccc;
    padding: 10px;
    box-sizing: border-box;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width:150%;
}

.trip-card img {
    max-width: 100%;
    height: 70%;
    margin-bottom: 10px;
}

.trip-details {
    text-align: center;
}

    </style>
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
    <h2>Your Past Visits</h2>
    
    <div class="container">
        <div id="past-trips-container" class="past-trips-container">
            <!-- Past trips will be added here dynamically -->
        </div>
    </div>
    

    <script>
        // AJAX request to fetch past trips from PHP script
        $.ajax({
            url: "fetch_bookings.php",
            type: "GET",
            success: function(response) {
                $("#past-trips-container").html(response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    </script>
    
</body>
</html>
