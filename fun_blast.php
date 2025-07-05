
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='learnmore.css'>
            <title>Fun Blast Learn More</title>
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
                    <h1 style='color:purple'><center>Fun Blast</center></h1>
                </div>
                <div class='image'>
                    <img src='funblast.jpg' alt='Full Image' class='full-image'>
                    <div class='side-images'>
                        <img src='funblast1.jpg' alt='Side Image 1'>
                        <img src='funblast2.jpg' alt='Side Image 2'>
                    </div>
                </div>
                <div class='event-description'>
                    <p><strong>A Next-Generation Fun Destination</strong></p>
                </div>
                <div class='event-details'>
                    <h2>About</h2>
                    <div class='review'>
                        <p>Fun Blast provides additional entertainment, excitement, rides, games, and food for people of all ages. For adults only, there is a trampoline park there.
You can opt for enjoyable indoor activities which include bowling and virtual reality games to pump your blood. The little ones can get the taste of adventure and outdoor sports where the fun doesn't stop at the horror house where the spine-tingling excitement never stops.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Key Features</h2>
                    <div class='review'>
                        <p>The Fun Blast which provides sports arena gaming and go-to destinations for rides, games, food, and excitement.
INDOOR GAMES:
Trampoline
Bowling
Lucky Fish Frenzy
Blizzarnd Blast
Zombie Out Beark Water
OUTDOOR GAMES:
Sky Cycling
Mini Appu
Merry-Go Round
Rocket Injection
Gyroscope Ride</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Ticket Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Price:</strong> Rs.30.00/-</li>
                        </ul>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Contact Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Address:</strong> Sindhu Bhavan Road, PRL Colony, Bopal, Ahmedabad, Gujarat 380058.</li>
                            <li><strong>Timings: </strong>11:00 AM - 11:00 PM</li>
                            <li><strong>Phone:</strong> 9586601007</li>
                        </ul>
                    </div>
                </div>
        <div class='wishlist-booking'>
            <button class='wishlist-btn' onclick='addToWishlist("Fun Blast", "funblast.jpg", 1)'>Add to Wishlist</button>
            <form method='post' action='booking.php'> <!-- Update action attribute here -->
                <input type='hidden' name='serviceID' value='1'>
                <button type='submit' class='booking-btn'>Book Now</button>
            </form>
        </div>
    <div class='event-reviews'>
        <!-- Add reviews section here -->
        <h2>Feedbacks</h2><p>Chintan Shah: AhmdXploreHub excels with its sleek design, vibrant imagery, and practical details.</p><p>Raj Patel: Taj Hotel: Exuding luxury and timeless elegance, a beacon of hospitality in the heart of Ahmedabad.</p><p>John Doe: Ahmedabad One mall had everything at once place . High end to normal, the food court was a added advantage. Will visit the place again next time.</p></div>

    <div class='more-events'>
        <h2>More Places</h2>
        
        <div class='event-container'><div class='event'><img src='event6.jpg' alt='IPL Cricket Match - MI vs CSK'><div class='event-details'><h3>IPL Cricket Match - MI vs CSK</h3><p></p><a href='ipl_cricket_match_-_mi_vs_csk.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='sidi.jpg' alt='Sidi Saiyyed Ni Jali'><div class='event-details'><h3>Sidi Saiyyed Ni Jali</h3><p>A mesmerizing lattice masterpiece showcasing exquisite craftsmanship in Ahmedabad.</p><a href='sidi_saiyyed_ni_jali.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='accolade.jpg' alt='Hotel Accolade'><div class='event-details'><h3>Hotel Accolade</h3><p>Enjoy upscale amenities and a brilliant location</p><a href='hotel_accolade.php' target='_self'><button>Learn More</button></a></div></div>
        </div>
    </div>

        </body>
        </html>