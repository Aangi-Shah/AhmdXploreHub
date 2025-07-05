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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>About Us</title>
    
</head>

<body>

<header>
        <div class="logo">
            <img src="logo.png" alt="Ahmedabad City" width="100" height="100">
        </div>
        <div class="name">
            <h1 style="text-indent:-70%;">AhmdXploreHub</h1>
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

    <section class="about-us">
        <div class="content">
            <img src="aboutus.jpg" alt="About Us Image">
            
            <table>
                <tr>
                    <th><h1><color=purple>Welcome To AhmdXploreHub</h1></th>
                    <th><h1>About Us</h1></th>
                    <th><h1>About Company</h1></th>
                </tr>
                <tr>
                    <td><p>Your gateway to Ahmedabad's vibrant culture and experiences, offering curated attractions, accommodations, dining, and event listings for an enriched exploration. Discover the city's essence with convenience and authenticity.</p></td>
                    <td><p>AhmdXploreHub is a comprehensive online platform designed to enhance the experience of travelers and tourists exploring the city of Ahmedabad. This platform serves as a one-stop hub that provides users with a wealth of information, resources, and services related to Ahmedabad's attractions, accommodations, dining options, events, and more. It aims to make the process of discovering and navigating the city's offerings easier, more enjoyable, and more efficient.
                        By consolidating valuable information, insights, and services in one place, AhmdXploreHub seeks to enhance the travel experience of visitors to Ahmedabad and contribute to a vibrant and enriched exploration of the city's offerings.</p>
                        </td>
                    <td><p>The company is familiar with adventure off-road trips to relaxing travel. It acts as agents in arranging tours, transportation, rental of cars, and lodging for travelers. Over the years the company has received positive feedbacks from its existing clients and hence one can expect a cordial reception. Customer satisfaction has helped them to build a good network with travellers from the farthest corners of the world.</p> </td>
                </tr>
                
            </table>
        </div>
    </section>

    <footer>
        &copy; 2023 AhmdXploreHub. All rights reserved.
    </footer>
</body>

</html>
