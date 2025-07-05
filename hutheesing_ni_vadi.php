
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='learnmore.css'>
            <title>Hutheesing Ni Vadi Learn More</title>
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
                    <h1 style='color:purple'><center>Hutheesing Ni Vadi</center></h1>
                </div>
                <div class='image'>
                    <img src='hutheesing.jpg' alt='Full Image' class='full-image'>
                    <div class='side-images'>
                        <img src='hutheesing1.jpg' alt='Side Image 1'>
                        <img src='hutheesing2.jpg' alt='Side Image 2'>
                    </div>
                </div>
                <div class='event-description'>
                    <p><strong>The Jain Temple</strong></p>
                </div>
                <div class='event-details'>
                    <h2>About</h2>
                    <div class='review'>
                        <p>Hutheesing Ni Vadi is a historic mansion located in Ahmedabad which features intricate carvings, ornate balconies, and a central courtyard typical of traditional Indian havelis (mansions). The entrance gate, adorned with detailed carvings, leads to a beautifully crafted interior with jali work, sculptures, and cultural motifs. It reflects the cultural and architectural heritage of Ahmedabad's mercantile community from the 19th century.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Key Features</h2>
                    <div class='review'>
                        <p>A splendid 19th-century Jain temple in Ahmedabad, showcasing intricate architectural details and ornate craftsmanship.
Dedication to Lord Dharmanatha
Religious Reverence
Multiple Shrines
Central Dome
Entrance Gate
Jali Work
Seth Hutheesing Memorial Temple</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Ticket Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Price:</strong> Rs.10.00/-</li>
                        </ul>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Contact Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Address:</strong> Hutheesing Jain Temple, Camp Rd., Bardolpura, Madhupura, Ahmedabad, Gujarat 380004.</li>
                            <li><strong>Timings: </strong>07:00 AM - 08:00 PM</li>
                            <li><strong>Phone:</strong> 22180774</li>
                        </ul>
                    </div>
                </div>
        <div class='wishlist-booking'>
            <button class='wishlist-btn' onclick='addToWishlist("Hutheesing Ni Vadi", "hutheesing.jpg", 7)'>Add to Wishlist</button>
            <form method='post' action='booking.php'> <!-- Update action attribute here -->
                <input type='hidden' name='serviceID' value='7'>
                <button type='submit' class='booking-btn'>Book Now</button>
            </form>
        </div>
    <div class='event-reviews'>
        <!-- Add reviews section here -->
        <h2>Feedbacks</h2><p>Rahul Verma: Law Garden: A vibrant haven in Ahmedabad, blending greenery with cultural charm, perfect for leisurely strolls and local delights.</p><p>Chintan Shah: AhmdXploreHub excels with its sleek design, vibrant imagery, and practical details.</p><p>Aangi Shah: Vintage Vibes has positive and great vibes place, amazing place to visit with friends and family!</p></div>

    <div class='more-events'>
        <h2>More Places</h2>
        
        <div class='event-container'><div class='event'><img src='lawgarden2.jpg' alt='Law Garden Market'><div class='event-details'><h3>Law Garden Market</h3><p>Lot of variety for Indian tradition and ethnic cholis</p><a href='law_garden_market.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='gandhiashram3.jpeg' alt='Gandhi Ashram'><div class='event-details'><h3>Gandhi Ashram</h3><p>A Living Testament to Mahatma Gandhi</p><a href='gandhi_ashram.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='event3.jpg' alt='Groove Gala'><div class='event-details'><h3>Groove Gala</h3><p></p><a href='groove_gala.php' target='_self'><button>Learn More</button></a></div></div>
        </div>
    </div>

        </body>
        </html>