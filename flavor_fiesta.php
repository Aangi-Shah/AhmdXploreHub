
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='learnmore.css'>
            <title>Flavor Fiesta Learn More</title>
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
                    <h1 style='color:purple'><center>Flavor Fiesta</center></h1>
                </div>
                <div class='image'>
                    <img src='event2.jpg' alt='Full Image' class='full-image'>
                    <div class='side-images'>
                        <img src='event2.1.jpg' alt='Side Image 1'>
                        <img src='event2.2.jpg' alt='Side Image 2'>
                    </div>
                </div>
                <div class='event-description'>
                    <p><strong></strong></p>
                </div>
                <div class='event-details'>
                    <h2>About</h2>
                    <div class='review'>
                        <p>Prepare your taste buds for a culinary journey like never before as Flavor Fiesta returns to Ahmedabad! This gastronomic extravaganza promises a celebration of flavors, aromas, and mouthwatering delights that will tantalize your senses.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Key Features</h2>
                    <div class='review'>
                        <p>Dive into a world of culinary wonders with an array of food stalls showcasing a diverse range of cuisines. From local street food to international delicacies, Flavor Fiesta brings together the best of Ahmedabad's vibrant food scene.
Indulge your palate with gourmet delights crafted by renowned chefs and culinary artisans. From exquisite desserts to savory treats, each dish is a masterpiece, promising a symphony of flavors.

Witness culinary magic unfold as expert chefs take the stage for live cooking demonstrations. Learn the secrets behind your favorite dishes and get inspired to recreate them in your own kitchen.

Embark on a global culinary adventure with a section dedicated to international flavors. Immerse yourself in the tastes of different cultures, all within the vibrant atmosphere of Ahmedabad.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Ticket Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Price:</strong> Rs.250.00/-</li>
                        </ul>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Contact Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Date: </strong>June 11, 2024 - June 15, 2024</li>
                            <li><strong>Timings: </strong>6:00 PM - 12:00 PM</li>
                            <li><strong>Location: </strong>Sabarmati Riverfront</li>
                        </ul>
                    </div>
                </div>
        <div class='wishlist-booking'>
            <button class='wishlist-btn' onclick='addToWishlist("Flavor Fiesta", "event2.jpg", 11)'>Add to Wishlist</button>
            <form method='post' action='booking.php'> <!-- Update action attribute here -->
                <input type='hidden' name='serviceID' value='11'>
                <button type='submit' class='booking-btn'>Book Now</button>
            </form>
        </div>
    <div class='event-reviews'>
        <!-- Add reviews section here -->
        <h2>Feedbacks</h2><p>Raj Patel: Taj Hotel: Exuding luxury and timeless elegance, a beacon of hospitality in the heart of Ahmedabad.</p><p>John Doe: Ahmedabad One mall had everything at once place . High end to normal, the food court was a added advantage. Will visit the place again next time.</p><p>Aangi Shah: Vintage Vibes has positive and great vibes place, amazing place to visit with friends and family!</p></div>

    <div class='more-events'>
        <h2>More Places</h2>
        
        <div class='event-container'><div class='event'><img src='itc.jpg' alt='ITC Narmada'><div class='event-details'><h3>ITC Narmada</h3><p>A Luxury Collection Hotel</p><a href='itc_narmada.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='accolade.jpg' alt='Hotel Accolade'><div class='event-details'><h3>Hotel Accolade</h3><p>Enjoy upscale amenities and a brilliant location</p><a href='hotel_accolade.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='manek chowk.jpg' alt='Manek Chowk'><div class='event-details'><h3>Manek Chowk</h3><p>The place is a paradise for food enthusiasts.</p><a href='manek_chowk.php' target='_self'><button>Learn More</button></a></div></div>
        </div>
    </div>

        </body>
        </html>