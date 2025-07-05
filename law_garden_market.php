
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='learnmore.css'>
            <title>Law Garden Market Learn More</title>
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
                    <h1 style='color:purple'><center>Law Garden Market</center></h1>
                </div>
                <div class='image'>
                    <img src='lawgarden2.jpg' alt='Full Image' class='full-image'>
                    <div class='side-images'>
                        <img src='lawgarden1.jpg' alt='Side Image 1'>
                        <img src='lawgarden.jpg' alt='Side Image 2'>
                    </div>
                </div>
                <div class='event-description'>
                    <p><strong>Lot of variety for Indian tradition and ethnic cholis</strong></p>
                </div>
                <div class='event-details'>
                    <h2>About</h2>
                    <div class='review'>
                        <p>A beautiful garden bustling with life from the lush greenery and budding vibrant flowers with a joyful market full of colors, chaos, and charm, the Law Garden is an ideal place to relax in the peaceful environment surrounded by nature while also being close to a fun filled exotic market place. The Law Garden is renowned for its night market which is always hoarded by tourists and locals to find jaw-dropping deals on various traditional and craft items.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Key Features</h2>
                    <div class='review'>
                        <p>Law Garden Market is an ocean of beautiful clothes and accessories that will compel you to lose your pocket even if you didn’t plan on buying anything.
SHOPPING

Kutchi Embroidery items
Chaniya Choli
Colorful lehengas
Bandhani saree
Zari work
FOOD

Mouthwatering chaats
Golgappas
Dosa
Dabeli
Ice cream</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Contact Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Address:</strong> Near Law Garden, Opp GLS University</li>
                            <li><strong>Timings: </strong>10:00 AM - 11:00 PM</li>
                            <li><strong>Phone:</strong> </li>
                        </ul>
                    </div>
                </div>
        <div class='wishlist-booking'>
            <button class='wishlist-btn' onclick='addToWishlist("Law Garden Market", "lawgarden2.jpg", 32)'>Add to Wishlist</button>
            <form method='post' action='booking.php'> <!-- Update action attribute here -->
                <input type='hidden' name='serviceID' value='32'>
                <button type='submit' class='booking-btn'>Book Now</button>
            </form>
        </div>
    <div class='event-reviews'>
        <!-- Add reviews section here -->
        <h2>Feedbacks</h2><p>Chintan Shah: AhmdXploreHub excels with its sleek design, vibrant imagery, and practical details.</p><p>Raj Patel: Taj Hotel: Exuding luxury and timeless elegance, a beacon of hospitality in the heart of Ahmedabad.</p><p>Rahul Verma: Law Garden: A vibrant haven in Ahmedabad, blending greenery with cultural charm, perfect for leisurely strolls and local delights.</p></div>

    <div class='more-events'>
        <h2>More Places</h2>
        
        <div class='event-container'><div class='event'><img src='bounceup.jpg' alt='Bounce Up'><div class='event-details'><h3>Bounce Up</h3><p>Immerse yourself in the thrill of interactive bowling and other exciting activities</p><a href='bounce_up.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='frizbee.jpg' alt='FrizBee'><div class='event-details'><h3>FrizBee</h3><p>Ahmedabad's newest place to chill & hangout with your love ones.</p><a href='frizbee.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='adalaj.jpg' alt='Adalaj Stepwell'><div class='event-details'><h3>Adalaj Stepwell</h3><p>Indo-Islamic Fusion Architecture</p><a href='adalaj_stepwell.php' target='_self'><button>Learn More</button></a></div></div>
        </div>
    </div>

        </body>
        </html>