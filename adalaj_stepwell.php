
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='learnmore.css'>
            <title>Adalaj Stepwell Learn More</title>
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
                    <h1 style='color:purple'><center>Adalaj Stepwell</center></h1>
                </div>
                <div class='image'>
                    <img src='adalaj.jpg' alt='Full Image' class='full-image'>
                    <div class='side-images'>
                        <img src='adalaj1.jpg' alt='Side Image 1'>
                        <img src='adalaj2.jpg' alt='Side Image 2'>
                    </div>
                </div>
                <div class='event-description'>
                    <p><strong>Indo-Islamic Fusion Architecture</strong></p>
                </div>
                <div class='event-details'>
                    <h2>About</h2>
                    <div class='review'>
                        <p>The Adalaj Stepwell, constructed in 1499 near Ahmedabad, Gujarat, is a stunning example of medieval Indian architecture. Commissioned by Queen Rudabai, the stepwell served both as a functional water storage system and a masterpiece of artistic expression. Today, the Adalaj Stepwell stands as a well-preserved heritage site, attracting visitors with its unique blend of utility and aesthetic appeal.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Key Features</h2>
                    <div class='review'>
                        <p>Beyond science exhibits, Science City Ahmedabad offers a spectrum of extra activities, ensuring an all-encompassing experience that caters to diverse interests and ages.

Architectural Marvel
Five Stories Deep
Artistic Carvings
Cultural Heritage Site</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Ticket Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Price:</strong> Rs.25.00/-</li>
                        </ul>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Contact Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Address:</strong> Adalaj Rd, Adalaj, Gujarat 382421</li>
                            <li><strong>Timings: </strong>08:00 AM - 06:00 PM</li>
                            <li><strong>Phone:</strong> 23977229</li>
                        </ul>
                    </div>
                </div>
        <div class='wishlist-booking'>
            <button class='wishlist-btn' onclick='addToWishlist("Adalaj Stepwell", "adalaj.jpg", 25)'>Add to Wishlist</button>
            <form method='post' action='booking.php'> <!-- Update action attribute here -->
                <input type='hidden' name='serviceID' value='25'>
                <button type='submit' class='booking-btn'>Book Now</button>
            </form>
        </div>
    <div class='event-reviews'>
        <!-- Add reviews section here -->
        <h2>Feedbacks</h2><p>Rahul Verma: Law Garden: A vibrant haven in Ahmedabad, blending greenery with cultural charm, perfect for leisurely strolls and local delights.</p><p>Emma Monroe: AhmdXploreHub: Simple, informative, and visually appealing for exploring Ahmedabad.</p><p>Chintan Shah: AhmdXploreHub excels with its sleek design, vibrant imagery, and practical details.</p></div>

    <div class='more-events'>
        <h2>More Places</h2>
        
        <div class='event-container'><div class='event'><img src='shott.jpg' alt='Shott'><div class='event-details'><h3>Shott</h3><p>Immerse yourself in the world of Shott</p><a href='shott.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='Boxpark.jpg' alt='Boxpark'><div class='event-details'><h3>Boxpark</h3><p>FUN | FOOD | FASHION</p><a href='boxpark.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='sidi.jpg' alt='Sidi Saiyyed Ni Jali'><div class='event-details'><h3>Sidi Saiyyed Ni Jali</h3><p>A mesmerizing lattice masterpiece showcasing exquisite craftsmanship in Ahmedabad.</p><a href='sidi_saiyyed_ni_jali.php' target='_self'><button>Learn More</button></a></div></div>
        </div>
    </div>

        </body>
        </html>