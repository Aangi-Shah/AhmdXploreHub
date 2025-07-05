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
    <link rel="stylesheet" href="aboutus.css">
    <title>Partner with AhmdXploreHub</title>
</head>
<style>
    .head {
    text-align: center;
    color: purple;
}

main {
    margin: 20px;
}

h2 {
    color: #9673ce;
}

p {
    margin-bottom: 15px;
    line-height: 1.6;
}

.highlight {
    background-color: #f2f2f2;
    padding: 10px;
    border-radius: 5px;
}

.cta-section {
    background-color: #9673ce;
    color: #f4e3ce;
    padding: 40px;
    text-align: center;
    border-radius: 10px;
    margin-top: 30px;
}

.cta-section h2 {
    margin-bottom: 20px;
}

.cta-button {
    display: inline-block;
    background-color: #fff;
    color: #9673ce;
    padding: 10px 20px;
    font-size: 18px;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.cta-button:hover {
    background-color: #9673ce;
    color: #fff;
}

footer {
    background-color: #9673ce;
    color: #fff;
    padding: 10px;
    text-align: center;
}
</style>
<body>

    <header>
        <div class="logo">
            <img src="logo.png" alt="Ahmedabad City" width="100" height="100">
        </div>
        <div class="name">
            <h1 style="text-indent:-45%;">AhmdXploreHub</h1>
        </div>

        <nav>
            <ul>
            <li><a href="home1.php">Home</a></li>
                <li><a href="thingstodo.php">Things to Do</a></li>
                <li><a href="restaurants.php">Restaurants</a></li>
                <li class="hotels-dropdown">
                    <a href="#">Hotels</a>
                    <div class="dropdown-content">
                        <a href="luxury.html">Luxury Hotels</a><br>
                        <a href="business hotel.html">Business Hotels</a><br>
                        <a href="budget.html">Budget Hotels</a><br>
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

    <main>
        <div class="head">
            <h1>Do Business With Us</h1>
        </div>
        <section>
            <h2>Why Partner with AhmdXploreHub?</h2>
            <p>Joining AhmdXploreHub as a service provider comes with a range of benefits:</p>
            <ul>
                <li>Expand your customer reach to tourists and locals in Ahmedabad.</li>
                <li>Effortless booking and management through our platform.</li>
                <li>Collaborate with other businesses for mutual growth.</li>
                <li>Customized marketing strategies to promote your services.</li>
            </ul>
        </section>

        <section>
            <h2>How to Become a Partner</h2>
            <p>Becoming a partner with AhmdXploreHub is simple and quick:</p>
            <ol>
                <li>Register as Service Provider with the below button link.</li>
                <li>Go to add service menu.</li>
                <li>Fill the necessary details.</li>
                <li>List your service.</li>
                <li>Start connecting with tourists and growing your business!</li>
            </ol>
        </section>

        <section class="highlight">
            <p>Take the first step towards enhancing your business by completing the registration process.</p>
            <!-- Add your form code here -->
        </section>

        <section class="cta-section">
            <h3>Ready to Partner with Us?</h3>
            <p>Experience the benefits of joining AhmdXploreHub.</p>
            <a href="registration.php" class="cta-button" target="_blank">Register Now</a>
        </section>

    </main>
<br>
    <footer>
        &copy; 2023 AhmdXploreHub. All rights reserved.
    </footer>

</body>

</html>
