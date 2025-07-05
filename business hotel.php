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
    <link rel="stylesheet" href="attraction.css">
    <title>Business Hotels</title>
</head>

<body>
<header style="padding:5px 10px;">
        <div class="logo">
            <img src="logo.png" alt="Ahmedabad City" width="100" height="100">
        </div>
        <div class="name">
            <h1 style="text-indent:-89%;">AhmdXploreHub</h1>
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
    
    <div class="search-bar">
        <input type="text" placeholder="Search business hotels...">
        <button>Search</button>
    </div>
   
    <div class="place">
        <img src="lemontree.jpg" height="30%" width="30%" alt="Attraction 1">
        <div class="description">
            <h2>Lemon Tree Premier, The atrium</h2>
            <p>The hotel is designed to attract the millennium traveler with its 63 spacious and well appointed rooms and suites, a multi-cuisine coffee shop– Citrus Café, with an interactive kitchen, and The Riverfront Grill which directly overlooks the Sabarmati river; besides a fully equipped gym and the largest indoor swimming pool in the city.
            Together with its personalized services, modern facilities and impeccable service standards,this hotel is a perfect place for the upbeat business and leisure traveler to interact and unwind.</p>             
            <a href="lemon.html"><button>Learn More</button></a>
        </div>
    </div>

    <div class="place">
        <img src="radisson.jpg" height="30%" width="30%" alt="Attraction 2">
        <div class="description">
            <h2> Radisson Blu Hotel</h2>
            <p>The Radisson Blu Hotel Ahmedabad has the perfect room for you.We provide five-star amenities and incomparable service throughout your stay, from concierge services to a state-of-the-art fitness center.When you're hungry, you can feast on local and international fare.</p>
            <a href="radisson.html"><button>Learn More</button></a>
        </div>
    </div>

    <div class="place">
        <img src="bloom.jpg" height="30%" width="30%" alt="Attraction 3">
        <div class="description">
            <h2>Hotel BloomSuites</h2>
            <p>Bloomsuites, Ahmedabad is perfect in all senses.The journey of a hassle-free experience starts from the time you book Bloom to check out.The quirky décor of the property will immediately catch your eye.</p>
            <p>Our property is modish, and you can find several Instagrammable picture spots to capture some fun clicks.</p>
            <a href="bloom.html"><button>Learn More</button></a>
        </div>
    </div>
</body>
</html>
