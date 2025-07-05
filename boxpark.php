
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='learnmore.css'>
            <title>Boxpark Learn More</title>
            <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
            <script>
            function addToWishlist(name, image, id) {
                var userID = ; // Fetch session ID
                // Make an AJAX request to add the service to the wishlist
                $.ajax({
                    url: 'fetch_favourites.php', // URL to your server-side script
                    type: 'POST',
                    data: { userID: userID, service_id: id }, // Pass the user ID and service ID to the server
                    success: function(response) {
                        alert(response); // Display the response message
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        alert('Error adding service to wishlist. Please try again later.');
                    }
                });
            }
            </script>
        </head>
        <body>
        <header>
            <div class='logo'>
                <img src='logo.png' alt='Ahmedabad City' width='100' height='100'>
            </div>
            <div class='name'>
                <h1>AhmdXploreHub</h1>
            </div>
            <nav>
                <ul>
                    <li><a href='home1.php'>Home</a></li>
                    <li><a href='thingstodo.php'>Things to Do</a></li>
                    <li><a href='restaurants.php'>Restaurants</a></li>
                    <li class='hotels-dropdown'>
                        <a href='#'>Hotels</a>
                        <div class='dropdown-content'>
                            <a href='luxury.php'>Luxury Hotels</a><br>
                            <a href='business hotel.php'>Business Hotels</a><br>
                            <a href='budget.php'>Budget Hotels</a><br>
                        </div>
                    </li>
                    <li class='categories-dropdown'>
                        <a href='#'>Categories</a>
                        <div class='dropdown-content'>
                            <a href='attractions.php'>Attractions</a><br>
                            <a href='events.php'>Events</a><br>
                            <a href='localinsights.php'>Local Insights</a><br>
                            <a href='heritage.php'>Heritage</a><br>
                            <a href='malls&markets.php'>Malls & Markets</a><br>
                            <a href='foodparks.php'>Food Parks<br></a>
                        </div>
                    </li>
                    
                    <li class='profile-dropdown'>
    <div class='profile-circle' id='profileCircle'>
        <?php include 'initial.php'; ?>
    </div>
    <div class='dropdown-conten'>
        <a href='account1.php'>Account info</a><br>
        <a href='wishlist.php'>Wishlist</a><br>
        <a href='urbooking.php'>Bookings</a><br>
        <a href='trips.php'>Past Visits</a><br>
        <a href='home.html'>Logout<br></a>
    </div>
</li>

                </ul>
            </nav>
        </header>
            <div class='event-detail-container'>
                <div class='event-header'>
                    <h1 style='color:purple'><center>Boxpark</center></h1>
                </div>
                <div class='image'>
                    <img src='Boxpark.jpg' alt='Full Image' class='full-image'>
                    <div class='side-images'>
                        <img src='boxpark1.jpg' alt='Side Image 1'>
                        <img src='boxpark2.jpg' alt='Side Image 2'>
                    </div>
                </div>
                <div class='event-description'>
                    <p><strong>FUN | FOOD | FASHION</strong></p>
                </div>
                <div class='event-details'>
                    <h2>About</h2>
                    <div class='review'>
                        <p>Boxpark is a place where you will get curated food options from top leading brands from ahmedabad.It has something to offer everyone, from classic Indian dishes to international cuisines. Boxpark is the place to be. Located at the heart of the city, it is Ahmedabad’s premier destination for fine dining.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Key Features</h2>
                    <div class='review'>
                        <p>Ahmedabad, in the state of Gujarat, India, is renowned for its vibrant street food scene. From hot and spicy chaat to delicious dishes.
FOOD SHOPS

Biryani Box
Hungry Foods
The Bowls Affair
Smoky BBQ
Coffee Carnival</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Contact Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Address:</strong> Opp. Jaguar Car Showroom, Gota, Ahmedabad, Gujarat 382481.</li>
                            <li><strong>Timings: </strong>10:30 AM - 01:00 PM</li>
                            <li><strong>Phone:</strong> </li>
                        </ul>
                    </div>
                </div>
        <div class='wishlist-booking'>
            <button class='wishlist-btn' onclick='addToWishlist("Boxpark", "Boxpark.jpg", 35)'>Add to Wishlist</button>
            <form method='post' action='booking.php'> <!-- Update action attribute here -->
                <input type='hidden' name='serviceID' value='35'>
                <button type='submit' class='booking-btn'>Book Now</button>
            </form>
        </div>
    <div class='event-reviews'>
        <!-- Add reviews section here -->
        <h2>Feedbacks</h2><p>Aanya Ahuja: Kankaria Lake: A serene oasis in Ahmedabad, offering picturesque surroundings and diverse recreational activities.</p><p>Chintan Shah: AhmdXploreHub excels with its sleek design, vibrant imagery, and practical details.</p><p>Raj Patel: Taj Hotel: Exuding luxury and timeless elegance, a beacon of hospitality in the heart of Ahmedabad.</p></div>

    <div class='more-events'>
        <h2>More Places</h2>
        
        <div class='event-container'><div class='event'><img src='car.jpeg' alt='Auto World Vintage Car Museum'><div class='event-details'><h3>Auto World Vintage Car Museum</h3><p>High-End Vintage Automobiles</p><a href='auto_world_vintage_car_museum.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='event6.jpg' alt='IPL Cricket Match - MI vs CSK'><div class='event-details'><h3>IPL Cricket Match - MI vs CSK</h3><p></p><a href='ipl_cricket_match_-_mi_vs_csk.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='adalaj.jpg' alt='Adalaj Stepwell'><div class='event-details'><h3>Adalaj Stepwell</h3><p>Indo-Islamic Fusion Architecture</p><a href='adalaj_stepwell.php' target='_self'><button>Learn More</button></a></div></div>
        </div>
    </div>

        </body>
        </html>