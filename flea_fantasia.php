
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='learnmore.css'>
            <title>Flea Fantasia Learn More</title>
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
                    <h1 style='color:purple'><center>Flea Fantasia</center></h1>
                </div>
                <div class='image'>
                    <img src='event5.jpg' alt='Full Image' class='full-image'>
                    <div class='side-images'>
                        <img src='event5.1.jpg' alt='Side Image 1'>
                        <img src='event5.2.jpg' alt='Side Image 2'>
                    </div>
                </div>
                <div class='event-description'>
                    <p><strong></strong></p>
                </div>
                <div class='event-details'>
                    <h2>About</h2>
                    <div class='review'>
                        <p>Embark on a delightful journey of discovery at Flea Fantasia, Ahmedabad's premier flea market extravaganza. This vibrant event promises more than just shopping; it's a kaleidoscope of colors, flavors, and unique finds that turns every visit into a magical experience.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Key Features</h2>
                    <div class='review'>
                        <p>Flea Fantasia is a shopper's paradise, where every corner unveils a treasure waiting to be found. From vintage trinkets to handmade crafts, and eclectic fashion to gourmet delights, the market is a true reflection of Ahmedabad's diverse and artistic spirit.
Satisfy your taste buds with a culinary journey at Flea Fantasia.
Local vendors and gourmet artisans come together, offering a delectable array of street food, international flavors, and sweet treats that make this flea market a feast for foodies.
Immerse yourself in the lively atmosphere with live entertainment at Flea Fantasia.
From street performers to live music, the event is not just about shopping; it's a celebration of arts, culture, and community.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Ticket Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Price:</strong> Rs.350.00/-</li>
                        </ul>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Contact Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Date: </strong>August 05, 2024 - August 07, 2024</li>
                            <li><strong>Timings: </strong>6:30 PM - 11:00 PM</li>
                            <li><strong>Location: </strong>Gujarat University</li>
                        </ul>
                    </div>
                </div>
        <div class='wishlist-booking'>
            <button class='wishlist-btn' onclick='addToWishlist("Flea Fantasia", "event5.jpg", 14)'>Add to Wishlist</button>
            <form method='post' action='booking.php'> <!-- Update action attribute here -->
                <input type='hidden' name='serviceID' value='14'>
                <button type='submit' class='booking-btn'>Book Now</button>
            </form>
        </div>
    <div class='event-reviews'>
        <!-- Add reviews section here -->
        <h2>Feedbacks</h2><p>Chintan Shah: AhmdXploreHub excels with its sleek design, vibrant imagery, and practical details.</p><p>Raj Patel: Taj Hotel: Exuding luxury and timeless elegance, a beacon of hospitality in the heart of Ahmedabad.</p><p>Emma Monroe: AhmdXploreHub: Simple, informative, and visually appealing for exploring Ahmedabad.</p></div>

    <div class='more-events'>
        <h2>More Places</h2>
        
        <div class='event-container'><div class='event'><img src='event3.jpg' alt='Groove Gala'><div class='event-details'><h3>Groove Gala</h3><p></p><a href='groove_gala.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='car.jpeg' alt='Auto World Vintage Car Museum'><div class='event-details'><h3>Auto World Vintage Car Museum</h3><p>High-End Vintage Automobiles</p><a href='auto_world_vintage_car_museum.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='rf3.jpg' alt='Sabarmati Riverfront'><div class='event-details'><h3>Sabarmati Riverfront</h3><p>Reconnecting Ahmedabad to its River</p><a href='sabarmati_riverfront.php' target='_self'><button>Learn More</button></a></div></div>
        </div>
    </div>

        </body>
        </html>