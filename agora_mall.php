
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='learnmore.css'>
            <title>Agora Mall Learn More</title>
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
                    <h1 style='color:purple'><center>Agora Mall</center></h1>
                </div>
                <div class='image'>
                    <img src='agora.jpg' alt='Full Image' class='full-image'>
                    <div class='side-images'>
                        <img src='agora1.jpg' alt='Side Image 1'>
                        <img src='agora2.jpg' alt='Side Image 2'>
                    </div>
                </div>
                <div class='event-description'>
                    <p><strong>High-end Destination</strong></p>
                </div>
                <div class='event-details'>
                    <h2>About</h2>
                    <div class='review'>
                        <p>The Shree Balaji Agora Mall, a commercial shopping and entertainment mall in Ahmedabad, is a part of the Shree Balaji Group of Companies. It has a great number of Anchor Shops as well as small Retail Outlets, a 4-Screen Multiplex, Kids Gaming Zone, Restaurants, a Bowling Alley, Food Court and more.

The entire mall is centrally air-conditioned and is made beautiful with lovely landscapes, huge fountains and a well-architected contemporary structure.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Key Features</h2>
                    <div class='review'>
                        <p>They entertain you not only with play and game zones but also lovely food served at roof-top restaurants.
RESTAURANTS

Aagrah Banquet Hall
Bake O Zone
Kaffe Mast Hai
Sizzling Shihai,
The Masala County
GAMING ZONE

Trribecca
SB Multiplex
Hummer Video Game
Dirty Driving
Water Shooting</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Contact Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Address:</strong> Shree Balaji Group, 4th Floor, Shree Balaji Mall, Visat to Gandhinagar Highway, Ahmedabad. 382424. Gujarat, India</li>
                            <li><strong>Timings: </strong>09:30 AM - 11:00 PM</li>
                            <li><strong>Phone:</strong> 9227464610</li>
                        </ul>
                    </div>
                </div>
        <div class='wishlist-booking'>
            <button class='wishlist-btn' onclick='addToWishlist("Agora Mall", "agora.jpg", 31)'>Add to Wishlist</button>
            <form method='post' action='booking.php'> <!-- Update action attribute here -->
                <input type='hidden' name='serviceID' value='31'>
                <button type='submit' class='booking-btn'>Book Now</button>
            </form>
        </div>
    <div class='event-reviews'>
        <!-- Add reviews section here -->
        <h2>Feedbacks</h2><p>Aangi Shah: Vintage Vibes has positive and great vibes place, amazing place to visit with friends and family!</p><p>Emma Monroe: AhmdXploreHub: Simple, informative, and visually appealing for exploring Ahmedabad.</p><p>Chintan Shah: AhmdXploreHub excels with its sleek design, vibrant imagery, and practical details.</p></div>

    <div class='more-events'>
        <h2>More Places</h2>
        
        <div class='event-container'><div class='event'><img src='accolade.jpg' alt='Hotel Accolade'><div class='event-details'><h3>Hotel Accolade</h3><p>Enjoy upscale amenities and a brilliant location</p><a href='hotel_accolade.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='event1.jpg' alt='Carnival Utopia 2024'><div class='event-details'><h3>Carnival Utopia 2024</h3><p></p><a href='carnival_utopia_2024.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='ahmdone3.jpg' alt='Nexus Ahmedabad One Mall'><div class='event-details'><h3>Nexus Ahmedabad One Mall</h3><p>World of Authenticity & Design</p><a href='nexus_ahmedabad_one_mall.php' target='_self'><button>Learn More</button></a></div></div>
        </div>
    </div>

        </body>
        </html>