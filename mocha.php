
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='learnmore.css'>
            <title>Mocha Learn More</title>
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
                    <h1 style='color:purple'><center>Mocha</center></h1>
                </div>
                <div class='image'>
                    <img src='mocha.jpg' alt='Full Image' class='full-image'>
                    <div class='side-images'>
                        <img src='mocha1.jpg' alt='Side Image 1'>
                        <img src='mocha2.jpg' alt='Side Image 2'>
                    </div>
                </div>
                <div class='event-description'>
                    <p><strong>A decent place with some good ambiance</strong></p>
                </div>
                <div class='event-details'>
                    <h2>About</h2>
                    <div class='review'>
                        <p>Mocha is the country's first completely indigenous and eclectic café chain, known not just for its menu, but the varied experiences it brought to 20 outlets in 18 cities to expand the cafe culture.

In addition to shopping, Ahmedabad One Mall features entertainment options such as a multiplex cinema, creating a well-rounded experience for visitors. The mall is known for its modern architecture, spacious interiors, and a vibrant atmosphere that attracts locals and tourists alike.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Key Features</h2>
                    <div class='review'>
                        <p>Mocha has influenced the world-view of an entire generation, to stir a social revolution.
FOOD:

CRISPY KANDA PAO SLIDER
MEZZE PLATTER
LEBANESE KEBAB PLATTER
MULTI GRAIN KHICHDI
PENNE PASTA IN A CHEESY ALFREDO SAUCE
DESERTS & SHAKES

STRAWBERRY CHEESECAKE SHAKE
CHOCOLATE FUDGE CAKE
KIWI BANANA HONEY SMOOTHIE
NUTELLA PRETZEL FREAK SHAKE
COUNTRY LEMONADE</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Contact Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Address:</strong> Mocha, 10 Vasantbaug Society, Opp. IDBI Bank, Gulbai Tekra Road, Navrangpura, Ahmedabad-380006</li>
                            <li><strong>Timings: </strong>11:00 AM - 11:00 PM</li>
                            <li><strong>Phone:</strong> 7600160000</li>
                        </ul>
                    </div>
                </div>
        <div class='wishlist-booking'>
            <button class='wishlist-btn' onclick='addToWishlist("Mocha", "mocha.jpg", 18)'>Add to Wishlist</button>
            <form method='post' action='booking.php'> <!-- Update action attribute here -->
                <input type='hidden' name='serviceID' value='18'>
                <button type='submit' class='booking-btn'>Book Now</button>
            </form>
        </div>
    <div class='event-reviews'>
        <!-- Add reviews section here -->
        <h2>Feedbacks</h2><p>Emma Monroe: AhmdXploreHub: Simple, informative, and visually appealing for exploring Ahmedabad.</p><p>Rahul Verma: Law Garden: A vibrant haven in Ahmedabad, blending greenery with cultural charm, perfect for leisurely strolls and local delights.</p><p>Raj Patel: Taj Hotel: Exuding luxury and timeless elegance, a beacon of hospitality in the heart of Ahmedabad.</p></div>

    <div class='more-events'>
        <h2>More Places</h2>
        
        <div class='event-container'><div class='event'><img src='event5.jpg' alt='Flea Fantasia'><div class='event-details'><h3>Flea Fantasia</h3><p></p><a href='flea_fantasia.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='funblast.jpg' alt='Fun Blast'><div class='event-details'><h3>Fun Blast</h3><p>A Next-Generation Fun Destination</p><a href='fun_blast.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='gufa.jpg' alt='Ahmedabad Ni Gufa'><div class='event-details'><h3>Ahmedabad Ni Gufa</h3><p>Beneath the Surface, Beyond the Ordinary: Ahmedabad Ni Gufa Experience</p><a href='ahmedabad_ni_gufa.php' target='_self'><button>Learn More</button></a></div></div>
        </div>
    </div>

        </body>
        </html>