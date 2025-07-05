
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='learnmore.css'>
            <title>Carnival Utopia 2024 Learn More</title>
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
                    <h1 style='color:purple'><center>Carnival Utopia 2024</center></h1>
                </div>
                <div class='image'>
                    <img src='event1.jpg' alt='Full Image' class='full-image'>
                    <div class='side-images'>
                        <img src='event1.1.jpg' alt='Side Image 1'>
                        <img src='event1.2.jpg' alt='Side Image 2'>
                    </div>
                </div>
                <div class='event-description'>
                    <p><strong></strong></p>
                </div>
                <div class='event-details'>
                    <h2>About</h2>
                    <div class='review'>
                        <p>Get ready for the most thrilling and exciting event of the year! The Carnival Utopia is back in Ahmedabad, promising a month-long extravaganza filled with fun, entertainment, and unforgettable memories.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Key Features</h2>
                    <div class='review'>
                        <p>Dive into a world of enchantment as the Carnival Utopia brings together a spectacular array of activities and attractions for all ages. From heart-pounding rides to mouth-watering treats, there's something for everyone:
Rides and Attractions: Experience the adrenaline rush with our thrilling rides and attractions that cater to adventure seekers of all ages.
Live Performances: Be mesmerized by live performances from talented artists and entertainers. From music and dance to magic shows, the carnival stage is set to dazzle.
Gourmet Delights: Indulge your taste buds in a culinary journey with a diverse range of food stalls offering delicious treats and local delicacies.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Ticket Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Price:</strong> Rs.100.00/-</li>
                        </ul>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Contact Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Date: </strong>May 10, 2024 - June 10, 2024</li>
                            <li><strong>Timings: </strong>11:00 AM - 11:00 PM</li>
                            <li><strong>Location: </strong>GMDC Ground</li>
                        </ul>
                    </div>
                </div>
        <div class='wishlist-booking'>
            <button class='wishlist-btn' onclick='addToWishlist("Carnival Utopia 2024", "event1.jpg", 10)'>Add to Wishlist</button>
            <form method='post' action='booking.php'> <!-- Update action attribute here -->
                <input type='hidden' name='serviceID' value='10'>
                <button type='submit' class='booking-btn'>Book Now</button>
            </form>
        </div>
    <div class='event-reviews'>
        <!-- Add reviews section here -->
        <h2>Feedbacks</h2><p>Aanya Ahuja: Kankaria Lake: A serene oasis in Ahmedabad, offering picturesque surroundings and diverse recreational activities.</p><p>Emma Monroe: AhmdXploreHub: Simple, informative, and visually appealing for exploring Ahmedabad.</p><p>Rahul Verma: Law Garden: A vibrant haven in Ahmedabad, blending greenery with cultural charm, perfect for leisurely strolls and local delights.</p></div>

    <div class='more-events'>
        <h2>More Places</h2>
        
        <div class='event-container'><div class='event'><img src='accolade.jpg' alt='Hotel Accolade'><div class='event-details'><h3>Hotel Accolade</h3><p>Enjoy upscale amenities and a brilliant location</p><a href='hotel_accolade.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='agora.jpg' alt='Agora Mall'><div class='event-details'><h3>Agora Mall</h3><p>High-end Destination</p><a href='agora_mall.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='manek chowk.jpg' alt='Manek Chowk'><div class='event-details'><h3>Manek Chowk</h3><p>The place is a paradise for food enthusiasts.</p><a href='manek_chowk.php' target='_self'><button>Learn More</button></a></div></div>
        </div>
    </div>

        </body>
        </html>