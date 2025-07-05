
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='learnmore.css'>
            <title>Shott Learn More</title>
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
                    <h1 style='color:purple'><center>Shott</center></h1>
                </div>
                <div class='image'>
                    <img src='shott.jpg' alt='Full Image' class='full-image'>
                    <div class='side-images'>
                        <img src='shott1.jpg' alt='Side Image 1'>
                        <img src='shott2.jpg' alt='Side Image 2'>
                    </div>
                </div>
                <div class='event-description'>
                    <p><strong>Immerse yourself in the world of Shott</strong></p>
                </div>
                <div class='event-details'>
                    <h2>About</h2>
                    <div class='review'>
                        <p>Shott is the place for every age who wants to have fun. Here many games are available like Go-karting, Bowling, Net Cricket, Rope Course, a children’s play area, and much more.

Play Arcade Games at Shott that are worth spending a whole day and beyond. Filled with thrill, action and exciting arcade games are for every age.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Key Features</h2>
                    <div class='review'>
                        <p>Spend the liveliest time of your life with your family and friends at the arcade games zone.
GAME ZONE

Bowling
Arcade Games
Go-Karting
Laser War
Trampoline</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Contact Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Address:</strong> Shott, Opp Saket-3, next to Sankalp Square, On Sindhubhavan Marg, Thaltej, Ahmedabad, Gujarat 380059</li>
                            <li><strong>Timings: </strong>11:00 AM - 11:30 PM</li>
                            <li><strong>Phone:</strong> 7069007685</li>
                        </ul>
                    </div>
                </div>
        <div class='wishlist-booking'>
            <button class='wishlist-btn' onclick='addToWishlist("Shott", "shott.jpg", 17)'>Add to Wishlist</button>
            <form method='post' action='booking.php'> <!-- Update action attribute here -->
                <input type='hidden' name='serviceID' value='17'>
                <button type='submit' class='booking-btn'>Book Now</button>
            </form>
        </div>
    <div class='event-reviews'>
        <!-- Add reviews section here -->
        <h2>Feedbacks</h2><p>Rahul Verma: Law Garden: A vibrant haven in Ahmedabad, blending greenery with cultural charm, perfect for leisurely strolls and local delights.</p><p>John Doe: Ahmedabad One mall had everything at once place . High end to normal, the food court was a added advantage. Will visit the place again next time.</p><p>Emma Monroe: AhmdXploreHub: Simple, informative, and visually appealing for exploring Ahmedabad.</p></div>

    <div class='more-events'>
        <h2>More Places</h2>
        
        <div class='event-container'><div class='event'><img src='event3.jpg' alt='Groove Gala'><div class='event-details'><h3>Groove Gala</h3><p></p><a href='groove_gala.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='sciencecity3.jpeg' alt='Science City'><div class='event-details'><h3>Science City</h3><p>Discover, Innovate, Thrive: Science City Ahmedabad, Where Curiosity Meets Creativity.</p><a href='science_city.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='vintage.jpg' alt='Vintage Vibes'><div class='event-details'><h3>Vintage Vibes</h3><p>All Things Vintage! Delve into an era of architectural bliss and flavoursome food!</p><a href='vintage_vibes.php' target='_self'><button>Learn More</button></a></div></div>
        </div>
    </div>

        </body>
        </html>