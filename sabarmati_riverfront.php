
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='learnmore.css'>
            <title>Sabarmati Riverfront Learn More</title>
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
                    <h1 style='color:purple'><center>Sabarmati Riverfront</center></h1>
                </div>
                <div class='image'>
                    <img src='rf3.jpg' alt='Full Image' class='full-image'>
                    <div class='side-images'>
                        <img src='rf1.jpg' alt='Side Image 1'>
                        <img src='rf2.jpg' alt='Side Image 2'>
                    </div>
                </div>
                <div class='event-description'>
                    <p><strong>Reconnecting Ahmedabad to its River</strong></p>
                </div>
                <div class='event-details'>
                    <h2>About</h2>
                    <div class='review'>
                        <p>This project aims to provide Ahmedabad with a meaningful waterfront environment along the banks of the Sabarmati River and to redefine an identity of Ahmedabad around the river. The project has reconnected the city with the river and has positively transformed the neglected aspects of the riverfront.
It has long been acknowledged that appropriate development of Ahmedabad’s riverfront and the building of adequate infrastructure can turn the Sabarmati River into a major asset for the city and significantly improve the quality of life for all sections of its citizens.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Key Features</h2>
                    <div class='review'>
                        <p>Places and facilities at Sabarmati Riverfront are:
River Promenade
Flower Park
Atal Bridge
Biodiversity Park
Streets
Multilevel Car Parking
General Facilities</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Contact Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Address:</strong> 2nd Floor, “Riverfront House”, B/h. H.K. Arts College, Between Gandhi & Nehru Bridge, Pujya Pramukh Swami Marg (River Front Road – West) Ahmedabad – 380009.</li>
                            <li><strong>Timings: </strong>09:00 AM - 09:00 PM</li>
                            <li><strong>Phone:</strong> 26580430</li>
                        </ul>
                    </div>
                </div>
        <div class='wishlist-booking'>
            <button class='wishlist-btn' onclick='addToWishlist("Sabarmati Riverfront", "rf3.jpg", 6)'>Add to Wishlist</button>
            <form method='post' action='booking.php'> <!-- Update action attribute here -->
                <input type='hidden' name='serviceID' value='6'>
                <button type='submit' class='booking-btn'>Book Now</button>
            </form>
        </div>
    <div class='event-reviews'>
        <!-- Add reviews section here -->
        <h2>Feedbacks</h2><p>Chintan Shah: AhmdXploreHub excels with its sleek design, vibrant imagery, and practical details.</p><p>John Doe: Ahmedabad One mall had everything at once place . High end to normal, the food court was a added advantage. Will visit the place again next time.</p><p>Aanya Ahuja: Kankaria Lake: A serene oasis in Ahmedabad, offering picturesque surroundings and diverse recreational activities.</p></div>

    <div class='more-events'>
        <h2>More Places</h2>
        
        <div class='event-container'><div class='event'><img src='car.jpeg' alt='Auto World Vintage Car Museum'><div class='event-details'><h3>Auto World Vintage Car Museum</h3><p>High-End Vintage Automobiles</p><a href='auto_world_vintage_car_museum.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='bounceup.jpg' alt='Bounce Up'><div class='event-details'><h3>Bounce Up</h3><p>Immerse yourself in the thrill of interactive bowling and other exciting activities</p><a href='bounce_up.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='event4.jpg' alt='Ahmedabad Book Fair'><div class='event-details'><h3>Ahmedabad Book Fair</h3><p></p><a href='ahmedabad_book_fair.php' target='_self'><button>Learn More</button></a></div></div>
        </div>
    </div>

        </body>
        </html>