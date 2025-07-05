
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='learnmore.css'>
            <title>Auto World Vintage Car Museum Learn More</title>
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
                    <h1 style='color:purple'><center>Auto World Vintage Car Museum</center></h1>
                </div>
                <div class='image'>
                    <img src='car.jpeg' alt='Full Image' class='full-image'>
                    <div class='side-images'>
                        <img src='car1.jpg' alt='Side Image 1'>
                        <img src='car2.jpg' alt='Side Image 2'>
                    </div>
                </div>
                <div class='event-description'>
                    <p><strong>High-End Vintage Automobiles</strong></p>
                </div>
                <div class='event-details'>
                    <h2>About</h2>
                    <div class='review'>
                        <p>Auto World Vintage Car Museum is a wonderful collection of vintage cars, motorcycles and carts manufactured by well known automobile companies. The museum focuses on stimulating the interest and knowledge of motor enthusiasts to learn about vintage and classic cars. An impressive collection of vintage cars, antique and utility vehicles, motorcycles and horse carriages is worth a visit.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Key Features</h2>
                    <div class='review'>
                        <p>Car enthusiasts would be delighted viewing the diverse range of the four wheeled vehicles and other fetaures as:

Exhibition Display
Educational Information
Interactive Exhibits
Restoration Workshops
Vintage Memorabilia
Guided Tours</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Ticket Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Price:</strong> Rs.50.00/-</li>
                        </ul>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Contact Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Address:</strong> Dastan Estate, Sardar Patel Ring Road, Kathwada, New India Colony, Nikol, Ahmedabad, Gujarat, 382430, India</li>
                            <li><strong>Timings: </strong>08:00 AM - 09:00 PM</li>
                            <li><strong>Phone:</strong> 22820699</li>
                        </ul>
                    </div>
                </div>
        <div class='wishlist-booking'>
            <button class='wishlist-btn' onclick='addToWishlist("Auto World Vintage Car Museum", "car.jpeg", 26)'>Add to Wishlist</button>
            <form method='post' action='booking.php'> <!-- Update action attribute here -->
                <input type='hidden' name='serviceID' value='26'>
                <button type='submit' class='booking-btn'>Book Now</button>
            </form>
        </div>
    <div class='event-reviews'>
        <!-- Add reviews section here -->
        <h2>Feedbacks</h2><p>Chintan Shah: AhmdXploreHub excels with its sleek design, vibrant imagery, and practical details.</p><p>Emma Monroe: AhmdXploreHub: Simple, informative, and visually appealing for exploring Ahmedabad.</p><p>Rahul Verma: Law Garden: A vibrant haven in Ahmedabad, blending greenery with cultural charm, perfect for leisurely strolls and local delights.</p></div>

    <div class='more-events'>
        <h2>More Places</h2>
        
        <div class='event-container'><div class='event'><img src='frizbee.jpg' alt='FrizBee'><div class='event-details'><h3>FrizBee</h3><p>Ahmedabad's newest place to chill & hangout with your love ones.</p><a href='frizbee.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='kankaria.jpg' alt='Kankaria Lake'><div class='event-details'><h3>Kankaria Lake</h3><p>Heart Of Ahmedabad</p><a href='kankaria_lake.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='event1.jpg' alt='Carnival Utopia 2024'><div class='event-details'><h3>Carnival Utopia 2024</h3><p></p><a href='carnival_utopia_2024.php' target='_self'><button>Learn More</button></a></div></div>
        </div>
    </div>

        </body>
        </html>