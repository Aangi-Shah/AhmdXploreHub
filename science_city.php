
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='learnmore.css'>
            <title>Science City Learn More</title>
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
                    <h1 style='color:purple'><center>Science City</center></h1>
                </div>
                <div class='image'>
                    <img src='sciencecity3.jpeg' alt='Full Image' class='full-image'>
                    <div class='side-images'>
                        <img src='sciencecity2.jpeg' alt='Side Image 1'>
                        <img src='sciencecity1.jpeg' alt='Side Image 2'>
                    </div>
                </div>
                <div class='event-description'>
                    <p><strong>Discover, Innovate, Thrive: Science City Ahmedabad, Where Curiosity Meets Creativity.</strong></p>
                </div>
                <div class='event-details'>
                    <h2>About</h2>
                    <div class='review'>
                        <p>Science City is an innovative science and technology center located in Ahmedabad, India. Established in 1960, Science City covers an expansive area and offers a variety of interactive exhibits, demonstrations, and activities related to science and technology. It serves as a dynamic hub for science enthusiasts, students, and families, providing a hands-on learning experience in areas such as physics, biology, astronomy, and more. It offers interactive exhibits, demonstrations, and educational programs, making science engaging for visitors of all ages. With its planetarium shows and workshops, Science City serves as a hub for curiosity and learning.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Key Features</h2>
                    <div class='review'>
                        <p>Beyond science exhibits, Science City Ahmedabad offers a spectrum of extra activities, ensuring an all-encompassing experience that caters to diverse interests and ages.
Mission To Mars Ride
Earthquake Experience Ride
Coal Mine
4D Theatre
Musical Fountain
Thrill Ride
Planetarium
IMAX Theatre
Electrodome
Hall of Space & Science
Amphitheatre
Expo Ground
Children Activity Centre
Restaurants
Planet Earth
Life Science Park
Energy Park
Musical Fountain
Thrill Ride
Auda Garden</p>
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
                            <li><strong>Address:</strong> Science City Road, Off the Sarkhej Gandhinagar Highway, Ahmedabad 380060, India</li>
                            <li><strong>Timings: </strong>10:00 AM - 07:00 PM</li>
                            <li><strong>Phone:</strong> 9909991361</li>
                        </ul>
                    </div>
                </div>
        <div class='wishlist-booking'>
            <button class='wishlist-btn' onclick='addToWishlist("Science City", "sciencecity3.jpeg", 5)'>Add to Wishlist</button>
            <form method='post' action='booking.php'> <!-- Update action attribute here -->
                <input type='hidden' name='serviceID' value='5'>
                <button type='submit' class='booking-btn'>Book Now</button>
            </form>
        </div>
    <div class='event-reviews'>
        <!-- Add reviews section here -->
        <h2>Feedbacks</h2><p>John Doe: Ahmedabad One mall had everything at once place . High end to normal, the food court was a added advantage. Will visit the place again next time.</p><p>Raj Patel: Taj Hotel: Exuding luxury and timeless elegance, a beacon of hospitality in the heart of Ahmedabad.</p><p>Rahul Verma: Law Garden: A vibrant haven in Ahmedabad, blending greenery with cultural charm, perfect for leisurely strolls and local delights.</p></div>

    <div class='more-events'>
        <h2>More Places</h2>
        
        <div class='event-container'><div class='event'><img src='adalaj.jpg' alt='Adalaj Stepwell'><div class='event-details'><h3>Adalaj Stepwell</h3><p>Indo-Islamic Fusion Architecture</p><a href='adalaj_stepwell.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='kankaria.jpg' alt='Kankaria Lake'><div class='event-details'><h3>Kankaria Lake</h3><p>Heart Of Ahmedabad</p><a href='kankaria_lake.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='ahmdone3.jpg' alt='Nexus Ahmedabad One Mall'><div class='event-details'><h3>Nexus Ahmedabad One Mall</h3><p>World of Authenticity & Design</p><a href='nexus_ahmedabad_one_mall.php' target='_self'><button>Learn More</button></a></div></div>
        </div>
    </div>

        </body>
        </html>