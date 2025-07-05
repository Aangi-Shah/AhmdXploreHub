
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='learnmore.css'>
            <title>Unlocked Learn More</title>
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
                    <h1 style='color:purple'><center>Unlocked</center></h1>
                </div>
                <div class='image'>
                    <img src='unlocked.jpg' alt='Full Image' class='full-image'>
                    <div class='side-images'>
                        <img src='unlocked1.jpg' alt='Side Image 1'>
                        <img src='unlocked2.jpg' alt='Side Image 2'>
                    </div>
                </div>
                <div class='event-description'>
                    <p><strong>'Unlocked Cafe' in Ahmedabad is our first space with cozy geometric interiors and a board game cafe.</strong></p>
                </div>
                <div class='event-details'>
                    <h2>About</h2>
                    <div class='review'>
                        <p>Unlocked is the first of its kind space with a craft cocktail bar, an international cuisine restaurant, one of India's largest library of board games and a real life gaming experience. Inspired by geometric shapes, illusionary puzzle games and MC Esher style branding, our space pulls you in to Unlock your inner child.

Our food menu is inspired by our founder's travels and culinary trends in global cuisine. We source the freshest produce to serve you authentic flavours, all made from scratch in-house.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Key Features</h2>
                    <div class='review'>
                        <p>Our selection of small and large plates bring together a range of classics and some creative avant-garde cuisine from our chef.
UNLOCKED COMFORT ZONE:

True & parmesan fries
Classic french fries
Duet BBQ paneer tikka
Fish n chips with tartar sauce
Chef special crispy waterchestnuts
GAMES:

Picitionary
Scrabble
Cluedo
Battleship
Monopoly Deal</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Contact Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Address:</strong> Umashankar Joshi Marg, near Girish Cold Drinks, Vasant Vihar, Navrangpura, Ahmedabad, Gujarat 380009</li>
                            <li><strong>Timings: </strong>12:00 AM - 11:00 PM</li>
                            <li><strong>Phone:</strong> 7948900165</li>
                        </ul>
                    </div>
                </div>
        <div class='wishlist-booking'>
            <button class='wishlist-btn' onclick='addToWishlist("Unlocked", "unlocked.jpg", 19)'>Add to Wishlist</button>
            <form method='post' action='booking.php'> <!-- Update action attribute here -->
                <input type='hidden' name='serviceID' value='19'>
                <button type='submit' class='booking-btn'>Book Now</button>
            </form>
        </div>
    <div class='event-reviews'>
        <!-- Add reviews section here -->
        <h2>Feedbacks</h2><p>Rahul Verma: Law Garden: A vibrant haven in Ahmedabad, blending greenery with cultural charm, perfect for leisurely strolls and local delights.</p><p>John Doe: Ahmedabad One mall had everything at once place . High end to normal, the food court was a added advantage. Will visit the place again next time.</p><p>Aangi Shah: Vintage Vibes has positive and great vibes place, amazing place to visit with friends and family!</p></div>

    <div class='more-events'>
        <h2>More Places</h2>
        
        <div class='event-container'><div class='event'><img src='gandhiashram3.jpeg' alt='Gandhi Ashram'><div class='event-details'><h3>Gandhi Ashram</h3><p>A Living Testament to Mahatma Gandhi</p><a href='gandhi_ashram.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='bounceup.jpg' alt='Bounce Up'><div class='event-details'><h3>Bounce Up</h3><p>Immerse yourself in the thrill of interactive bowling and other exciting activities</p><a href='bounce_up.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='mocha.jpg' alt='Mocha'><div class='event-details'><h3>Mocha</h3><p>A decent place with some good ambiance</p><a href='mocha.php' target='_self'><button>Learn More</button></a></div></div>
        </div>
    </div>

        </body>
        </html>