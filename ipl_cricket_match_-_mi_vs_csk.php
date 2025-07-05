
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='learnmore.css'>
            <title>IPL Cricket Match - MI vs CSK Learn More</title>
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
                    <h1 style='color:purple'><center>IPL Cricket Match - MI vs CSK</center></h1>
                </div>
                <div class='image'>
                    <img src='event6.jpg' alt='Full Image' class='full-image'>
                    <div class='side-images'>
                        <img src='event6.1.jpg' alt='Side Image 1'>
                        <img src='event6.2.jpg' alt='Side Image 2'>
                    </div>
                </div>
                <div class='event-description'>
                    <p><strong></strong></p>
                </div>
                <div class='event-details'>
                    <h2>About</h2>
                    <div class='review'>
                        <p>Cricket aficionados, mark your calendars! The highly anticipated clash between two cricketing giants, Mumbai Indians (MI) and Chennai Super Kings (CSK), is set to unfold in Ahmedabad as part of the Indian Premier League (IPL) extravaganza. Here's everything you need to know about this thrilling encounter.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Key Features</h2>
                    <div class='review'>
                        <p>MI vs CSK is more than a cricket match; it's a storied rivalry that has produced some of the most memorable moments in IPL history. Both teams boast a stellar lineup of international and domestic talent, promising a contest that will keep fans on the edge of their seats.
As the teams gear up for this clash, cricket enthusiasts are eager to see how MI's power-packed lineup, featuring stalwarts like Rohit Sharma and Jasprit Bumrah, will fare against the seasoned attack of CSK, led by the evergreen MS Dhoni.
The iconic Narendra Modi Stadium in Ahmedabad, also known as Motera Stadium, will play host to this IPL showdown.
With state-of-the-art facilities and a seating capacity that ensures an electric atmosphere, the stadium is the perfect setting for this marquee event.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Ticket Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Price:</strong> Rs.3500.00/-</li>
                        </ul>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Contact Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Date: </strong>August 25, 2024</li>
                            <li><strong>Timings: </strong>7:30 PM - 11:00 PM</li>
                            <li><strong>Location: </strong>Narendra Modi Stadium</li>
                        </ul>
                    </div>
                </div>
        <div class='wishlist-booking'>
            <button class='wishlist-btn' onclick='addToWishlist("IPL Cricket Match - MI vs CSK", "event6.jpg", 15)'>Add to Wishlist</button>
            <form method='post' action='booking.php'> <!-- Update action attribute here -->
                <input type='hidden' name='serviceID' value='15'>
                <button type='submit' class='booking-btn'>Book Now</button>
            </form>
        </div>
    <div class='event-reviews'>
        <!-- Add reviews section here -->
        <h2>Feedbacks</h2><p>Aanya Ahuja: Kankaria Lake: A serene oasis in Ahmedabad, offering picturesque surroundings and diverse recreational activities.</p><p>Emma Monroe: AhmdXploreHub: Simple, informative, and visually appealing for exploring Ahmedabad.</p><p>Raj Patel: Taj Hotel: Exuding luxury and timeless elegance, a beacon of hospitality in the heart of Ahmedabad.</p></div>

    <div class='more-events'>
        <h2>More Places</h2>
        
        <div class='event-container'><div class='event'><img src='tutorial.jpg' alt='Tutorial Market'><div class='event-details'><h3>Tutorial Market</h3><p>Three Gate has a wide range of products and services to cater to the varied requirements of their customers.</p><a href='tutorial_market.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='car.jpeg' alt='Auto World Vintage Car Museum'><div class='event-details'><h3>Auto World Vintage Car Museum</h3><p>High-End Vintage Automobiles</p><a href='auto_world_vintage_car_museum.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='mocha.jpg' alt='Mocha'><div class='event-details'><h3>Mocha</h3><p>A decent place with some good ambiance</p><a href='mocha.php' target='_self'><button>Learn More</button></a></div></div>
        </div>
    </div>

        </body>
        </html>