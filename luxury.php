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
    <title>Luxury Hotels</title>
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
        <input type="text" placeholder="Search attractions...">
        <button>Search</button>
    </div>
   
    <div class="place">
        <img src="itc.jpg" height="30%" width="30%" alt="Attraction 1">
        <div class="description">
            <h2>ITC Narmada</h2>
            <p>Architecturally inspired by the stepwells of Gujarat and the traditional ‘toran’ gateways adorning its façade, ITC Narmada welcomes you with regal splendour. In keeping with the philosophy of ITC Hotels, ITC Narmada is a glowing celebration of the culture, arts and crafts of the region. A prime location and luxurious facilities make each stay memorable.</p>    
            <a href="itc.html"><button>Learn More</button></a>
        </div>
    </div>

    <div class="place">
        <img src="tajs.jpeg" height="30%" width="30%" alt="Attraction 2">
        <div class="description">
            <h2>Taj Skyline</h2>
            <p>The Taj Skyline at Ahmedabad is a vantage, 5 star luxury address with 233 rooms With a distinctive sense of place and its legendary hospitality, it sits well in a city known to abide by traditions.</p>
            <p>The luxury hotel has a social lobby, a bustling all day dining outlet, a speciality pan Asian restaurant with a swish Chinese and Thai menu, a busy tea-lounge known for its take on local classics and luxurious banqueting & conferencing spaces that make this the fellowship-capital for the city.</p>
            <a href="taj.html"><button>Learn More</button></a>
        </div>
    </div>

    <div class="place">
        <img src="courtyard.jpg" height="30%" width="30%" alt="Attraction 3">
        <div class="description">
            <h2>Courtyard by Marriot</h2>
            <p>Courtyard Ahmedabad is a luxury haven for business and leisure travelers to India. Embrace effortless relaxation in sophisticated hotel rooms and suites with refined design elements, contemporary essentials, marble bathrooms and signature amenities.Delight your palate with distinctive Indian fare and flavorful international cuisine for breakfast, lunch and dinner at our stylish restaurant and Momo Café.</p>
            <a href="courtyard.html"><button>Learn More</button></a>
        </div>
    </div>
</body>
</html>
