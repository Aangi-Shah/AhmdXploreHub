
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='learnmore.css'>
            <title>Nexus Ahmedabad One Mall Learn More</title>
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
                    <h1 style='color:purple'><center>Nexus Ahmedabad One Mall</center></h1>
                </div>
                <div class='image'>
                    <img src='ahmdone3.jpg' alt='Full Image' class='full-image'>
                    <div class='side-images'>
                        <img src='ahmdone1.jpg' alt='Side Image 1'>
                        <img src='ahmdone2.jpg' alt='Side Image 2'>
                    </div>
                </div>
                <div class='event-description'>
                    <p><strong>World of Authenticity & Design</strong></p>
                </div>
                <div class='event-details'>
                    <h2>About</h2>
                    <div class='review'>
                        <p>Ahmedabad One Mall, located in Ahmedabad, Gujarat, is a prominent shopping and entertainment destination in the city. The mall is known for its modern architecture, spacious interiors, and a vibrant atmosphere that attracts locals and tourists alike. The mall is situated in the Vastrapur area and offers a diverse range of retail outlets, including national and international brands, providing shoppers with a wide variety of options for fashion, electronics, and more.
In addition to shopping, Ahmedabad One Mall features entertainment options such as a multiplex cinema, creating a well-rounded experience for visitors.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Key Features</h2>
                    <div class='review'>
                        <p>Ahmedabad One mall contains vivid brands that promise you a mix of luxury, classic, playful and delightful moments.
BRANDS

Pantaloons
Trends
Shoppers Stop
Lifestyle
H&M
FOOD COURT

Taco Bell
Pizza Hut
McDonald's
KFC
Starbucks</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Contact Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Address:</strong> Nexus Ahmedabad One, Plot No. 216, T.P. Scheme 1, Near Vastrapur Lake, Vastrapur, Ahmedabad - 380054, Gujarat, India.</li>
                            <li><strong>Timings: </strong>10:00 AM - 10:00 PM</li>
                            <li><strong>Phone:</strong> 7940193672</li>
                        </ul>
                    </div>
                </div>
        <div class='wishlist-booking'>
            <button class='wishlist-btn' onclick='addToWishlist("Nexus Ahmedabad One Mall", "ahmdone3.jpg", 30)'>Add to Wishlist</button>
            <form method='post' action='booking.php'> <!-- Update action attribute here -->
                <input type='hidden' name='serviceID' value='30'>
                <button type='submit' class='booking-btn'>Book Now</button>
            </form>
        </div>
    <div class='event-reviews'>
        <!-- Add reviews section here -->
        <h2>Feedbacks</h2><p>John Doe: Ahmedabad One mall had everything at once place . High end to normal, the food court was a added advantage. Will visit the place again next time.</p><p>Aangi Shah: Vintage Vibes has positive and great vibes place, amazing place to visit with friends and family!</p><p>Rahul Verma: Law Garden: A vibrant haven in Ahmedabad, blending greenery with cultural charm, perfect for leisurely strolls and local delights.</p></div>

    <div class='more-events'>
        <h2>More Places</h2>
        
        <div class='event-container'><div class='event'><img src='event3.jpg' alt='Groove Gala'><div class='event-details'><h3>Groove Gala</h3><p></p><a href='groove_gala.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='unlocked.jpg' alt='Unlocked'><div class='event-details'><h3>Unlocked</h3><p>'Unlocked Cafe' in Ahmedabad is our first space with cozy geometric interiors and a board game cafe.</p><a href='unlocked.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='vintage.jpg' alt='Vintage Vibes'><div class='event-details'><h3>Vintage Vibes</h3><p>All Things Vintage! Delve into an era of architectural bliss and flavoursome food!</p><a href='vintage_vibes.php' target='_self'><button>Learn More</button></a></div></div>
        </div>
    </div>

        </body>
        </html>