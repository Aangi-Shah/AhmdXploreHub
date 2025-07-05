
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='learnmore.css'>
            <title>Gandhi Ashram Learn More</title>
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
                    <h1 style='color:purple'><center>Gandhi Ashram</center></h1>
                </div>
                <div class='image'>
                    <img src='gandhiashram3.jpeg' alt='Full Image' class='full-image'>
                    <div class='side-images'>
                        <img src='gandhiashram1.jpg' alt='Side Image 1'>
                        <img src='gandhiashram2.jpg' alt='Side Image 2'>
                    </div>
                </div>
                <div class='event-description'>
                    <p><strong>A Living Testament to Mahatma Gandhi</strong></p>
                </div>
                <div class='event-details'>
                    <h2>About</h2>
                    <div class='review'>
                        <p>The Gandhi Ashram, also known as Sabarmati Ashram, is a historic site located in Ahmedabad, Gujarat, India. It holds great significance in the life of Mahatma Gandhi, the leader of India's non-violent independence movement against British rule.It continues to attract visitors who seek to understand and appreciate the life and legacy of one of the most influential figures in India's history.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Key Features</h2>
                    <div class='review'>
                        <p>Gandhi Ashram continues to attract visitors who seek to understand and appreciate the life and legacy of one of the most influential figures in India's history with its main features:

Gandhi's Living Quarters
Museum and Exhibits
Hriday Kunj
Library
Vinoba Kutir
Magan Niwas
Gandhi Smarak Sangrahalaya
Gandhi's Office
Prayer Ground</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Ticket Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Price:</strong> Rs.50.00/-</li>
                        </ul>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Contact Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Address:</strong> Gandhi Smarak Sangrahalaya, Ashram Rd, Ahmedabad, Gujarat 380027</li>
                            <li><strong>Timings: </strong>08:30 AM - 05:30 PM</li>
                            <li><strong>Phone:</strong> 27557277</li>
                        </ul>
                    </div>
                </div>
        <div class='wishlist-booking'>
            <button class='wishlist-btn' onclick='addToWishlist("Gandhi Ashram", "gandhiashram3.jpeg", 28)'>Add to Wishlist</button>
            <form method='post' action='booking.php'> <!-- Update action attribute here -->
                <input type='hidden' name='serviceID' value='28'>
                <button type='submit' class='booking-btn'>Book Now</button>
            </form>
        </div>
    <div class='event-reviews'>
        <!-- Add reviews section here -->
        <h2>Feedbacks</h2><p>John Doe: Ahmedabad One mall had everything at once place . High end to normal, the food court was a added advantage. Will visit the place again next time.</p><p>Chintan Shah: AhmdXploreHub excels with its sleek design, vibrant imagery, and practical details.</p><p>Aangi Shah: Vintage Vibes has positive and great vibes place, amazing place to visit with friends and family!</p></div>

    <div class='more-events'>
        <h2>More Places</h2>
        
        <div class='event-container'><div class='event'><img src='vintage.jpg' alt='Vintage Vibes'><div class='event-details'><h3>Vintage Vibes</h3><p>All Things Vintage! Delve into an era of architectural bliss and flavoursome food!</p><a href='vintage_vibes.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='event2.jpg' alt='Flavor Fiesta'><div class='event-details'><h3>Flavor Fiesta</h3><p></p><a href='flavor_fiesta.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='gufa.jpg' alt='Ahmedabad Ni Gufa'><div class='event-details'><h3>Ahmedabad Ni Gufa</h3><p>Beneath the Surface, Beyond the Ordinary: Ahmedabad Ni Gufa Experience</p><a href='ahmedabad_ni_gufa.php' target='_self'><button>Learn More</button></a></div></div>
        </div>
    </div>

        </body>
        </html>