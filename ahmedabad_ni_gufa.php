
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='learnmore.css'>
            <title>Ahmedabad Ni Gufa Learn More</title>
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
                    <h1 style='color:purple'><center>Ahmedabad Ni Gufa</center></h1>
                </div>
                <div class='image'>
                    <img src='gufa.jpg' alt='Full Image' class='full-image'>
                    <div class='side-images'>
                        <img src='gufa1.jpg' alt='Side Image 1'>
                        <img src='gufa2.jpg' alt='Side Image 2'>
                    </div>
                </div>
                <div class='event-description'>
                    <p><strong>Beneath the Surface, Beyond the Ordinary: Ahmedabad Ni Gufa Experience</strong></p>
                </div>
                <div class='event-details'>
                    <h2>About</h2>
                    <div class='review'>
                        <p>Ahmedabad Ni Gufa, also known as Hussain-Doshi Gufa, is an underground art gallery located in Ahmedabad, India. Designed by the renowned architect Balkrishna Doshi in collaboration with the artist M.F. Hussain, the Gufa is a unique architectural marvel that blends art and architecture seamlessly. The design encourages visitors to experience art in a distinctive setting.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Key Features</h2>
                    <div class='review'>
                        <p>Here are some key features of Ahmedabad Ni Gufa:

Underground Structure
Organic Design
Integration of Art and Architecture
Cave-Like Interiors
Cultural Landmark
Exhibition Space</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Contact Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Address:</strong> Lalbhai Dalpatbhai Campus, near CEPT University, opp. Gujarat University, University Road, Ahmedabad.</li>
                            <li><strong>Timings: </strong>04:00 PM - 08:00 PM</li>
                            <li><strong>Phone:</strong> 26308698</li>
                        </ul>
                    </div>
                </div>
        <div class='wishlist-booking'>
            <button class='wishlist-btn' onclick='addToWishlist("Ahmedabad Ni Gufa", "gufa.jpg", 27)'>Add to Wishlist</button>
            <form method='post' action='booking.php'> <!-- Update action attribute here -->
                <input type='hidden' name='serviceID' value='27'>
                <button type='submit' class='booking-btn'>Book Now</button>
            </form>
        </div>
    <div class='event-reviews'>
        <!-- Add reviews section here -->
        <h2>Feedbacks</h2><p>Chintan Shah: AhmdXploreHub excels with its sleek design, vibrant imagery, and practical details.</p><p>John Doe: Ahmedabad One mall had everything at once place . High end to normal, the food court was a added advantage. Will visit the place again next time.</p><p>Aangi Shah: Vintage Vibes has positive and great vibes place, amazing place to visit with friends and family!</p></div>

    <div class='more-events'>
        <h2>More Places</h2>
        
        <div class='event-container'><div class='event'><img src='shott.jpg' alt='Shott'><div class='event-details'><h3>Shott</h3><p>Immerse yourself in the world of Shott</p><a href='shott.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='funblast.jpg' alt='Fun Blast'><div class='event-details'><h3>Fun Blast</h3><p>A Next-Generation Fun Destination</p><a href='fun_blast.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='adalaj.jpg' alt='Adalaj Stepwell'><div class='event-details'><h3>Adalaj Stepwell</h3><p>Indo-Islamic Fusion Architecture</p><a href='adalaj_stepwell.php' target='_self'><button>Learn More</button></a></div></div>
        </div>
    </div>

        </body>
        </html>