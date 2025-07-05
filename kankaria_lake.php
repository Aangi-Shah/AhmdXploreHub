
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='learnmore.css'>
            <title>Kankaria Lake Learn More</title>
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
                    <h1 style='color:purple'><center>Kankaria Lake</center></h1>
                </div>
                <div class='image'>
                    <img src='kankaria.jpg' alt='Full Image' class='full-image'>
                    <div class='side-images'>
                        <img src='kankaria1.jpg' alt='Side Image 1'>
                        <img src='kankaria2.jpg' alt='Side Image 2'>
                    </div>
                </div>
                <div class='event-description'>
                    <p><strong>Heart Of Ahmedabad</strong></p>
                </div>
                <div class='event-details'>
                    <h2>About</h2>
                    <div class='review'>
                        <p>Kankaria Lake spans an area of about 34 acres and has become a popular recreational spot in Ahmedabad. It offers a peaceful retreat with its scenic beauty and well-maintained promenades. Boasting a rich cultural history, it's a popular destination for leisurely walks, boat rides, and family outings.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Key Features</h2>
                    <div class='review'>
                        <p>Beyond science exhibits, Science City Ahmedabad offers a spectrum of extra activities, ensuring an all-encompassing experience that caters to diverse interests and ages.

Boating & Water Balloon Arena
Children's Park & Garden Picnics
Food Stalls & Cultural Exhibits
Zoo Exploration</p>
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
                            <li><strong>Address:</strong> Kankaria, Maninagar, Ahmedabad, Gujarat, India.</li>
                            <li><strong>Timings: </strong>09:00 AM - 10:00 PM</li>
                            <li><strong>Phone:</strong> 25463415</li>
                        </ul>
                    </div>
                </div>
        <div class='wishlist-booking'>
            <button class='wishlist-btn' onclick='addToWishlist("Kankaria Lake", "kankaria.jpg", 24)'>Add to Wishlist</button>
            <form method='post' action='booking.php'> <!-- Update action attribute here -->
                <input type='hidden' name='serviceID' value='24'>
                <button type='submit' class='booking-btn'>Book Now</button>
            </form>
        </div>
    <div class='event-reviews'>
        <!-- Add reviews section here -->
        <h2>Feedbacks</h2><p>John Doe: Ahmedabad One mall had everything at once place . High end to normal, the food court was a added advantage. Will visit the place again next time.</p><p>Raj Patel: Taj Hotel: Exuding luxury and timeless elegance, a beacon of hospitality in the heart of Ahmedabad.</p><p>Aanya Ahuja: Kankaria Lake: A serene oasis in Ahmedabad, offering picturesque surroundings and diverse recreational activities.</p></div>

    <div class='more-events'>
        <h2>More Places</h2>
        
        <div class='event-container'><div class='event'><img src='unlocked.jpg' alt='Unlocked'><div class='event-details'><h3>Unlocked</h3><p>'Unlocked Cafe' in Ahmedabad is our first space with cozy geometric interiors and a board game cafe.</p><a href='unlocked.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='sciencecity3.jpeg' alt='Science City'><div class='event-details'><h3>Science City</h3><p>Discover, Innovate, Thrive: Science City Ahmedabad, Where Curiosity Meets Creativity.</p><a href='science_city.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='event5.jpg' alt='Flea Fantasia'><div class='event-details'><h3>Flea Fantasia</h3><p></p><a href='flea_fantasia.php' target='_self'><button>Learn More</button></a></div></div>
        </div>
    </div>

        </body>
        </html>