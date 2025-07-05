
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='learnmore.css'>
            <title>Groove Gala Learn More</title>
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
                    <h1 style='color:purple'><center>Groove Gala</center></h1>
                </div>
                <div class='image'>
                    <img src='event3.jpg' alt='Full Image' class='full-image'>
                    <div class='side-images'>
                        <img src='event3.1.jpg' alt='Side Image 1'>
                        <img src='event3.2.jpg' alt='Side Image 2'>
                    </div>
                </div>
                <div class='event-description'>
                    <p><strong></strong></p>
                </div>
                <div class='event-details'>
                    <h2>About</h2>
                    <div class='review'>
                        <p>Get ready for a musical journey that transcends boundaries as the sensational Darshan Raval takes center stage at "Groove Gala" in Ahmedabad! This one-of-a-kind music concert promises an unforgettable evening filled with soulful tunes, electrifying performances, and an atmosphere that will make you want to dance the night away.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Key Features</h2>
                    <div class='review'>
                        <p>Known for his soul-stirring voice and heartfelt lyrics, Darshan Raval has carved a niche for himself in the music industry. "Groove Gala" is not just a concert; it's a celebration of emotions, love, and the power of music to connect us all.
Witness a musical extravaganza as Darshan Raval takes you on a journey through his chart-topping hits and soulful melodies.
From romantic ballads to foot-tapping numbers, the concert promises a diverse repertoire that caters to every musical palate.
Prepare to be mesmerized by Darshan Raval's on-stage charisma and energy.
The concert will feature unforgettable performances, collaborations, and surprises that will keep you on the edge of your seat.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Ticket Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Price:</strong> Rs.700.00/-</li>
                        </ul>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Contact Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Date: </strong>June 20, 2024</li>
                            <li><strong>Timings: </strong>9:00 PM - 12:00 PM</li>
                            <li><strong>Location: </strong> Narendra Modi Stadium</li>
                        </ul>
                    </div>
                </div>
        <div class='wishlist-booking'>
            <button class='wishlist-btn' onclick='addToWishlist("Groove Gala", "event3.jpg", 12)'>Add to Wishlist</button>
            <form method='post' action='booking.php'> <!-- Update action attribute here -->
                <input type='hidden' name='serviceID' value='12'>
                <button type='submit' class='booking-btn'>Book Now</button>
            </form>
        </div>
    <div class='event-reviews'>
        <!-- Add reviews section here -->
        <h2>Feedbacks</h2><p>Rahul Verma: Law Garden: A vibrant haven in Ahmedabad, blending greenery with cultural charm, perfect for leisurely strolls and local delights.</p><p>Aangi Shah: Vintage Vibes has positive and great vibes place, amazing place to visit with friends and family!</p><p>Chintan Shah: AhmdXploreHub excels with its sleek design, vibrant imagery, and practical details.</p></div>

    <div class='more-events'>
        <h2>More Places</h2>
        
        <div class='event-container'><div class='event'><img src='lawgarden2.jpg' alt='Law Garden Market'><div class='event-details'><h3>Law Garden Market</h3><p>Lot of variety for Indian tradition and ethnic cholis</p><a href='law_garden_market.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='rf3.jpg' alt='Sabarmati Riverfront'><div class='event-details'><h3>Sabarmati Riverfront</h3><p>Reconnecting Ahmedabad to its River</p><a href='sabarmati_riverfront.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='sidi.jpg' alt='Sidi Saiyyed Ni Jali'><div class='event-details'><h3>Sidi Saiyyed Ni Jali</h3><p>A mesmerizing lattice masterpiece showcasing exquisite craftsmanship in Ahmedabad.</p><a href='sidi_saiyyed_ni_jali.php' target='_self'><button>Learn More</button></a></div></div>
        </div>
    </div>

        </body>
        </html>