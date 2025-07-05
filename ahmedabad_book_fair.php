
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='learnmore.css'>
            <title>Ahmedabad Book Fair Learn More</title>
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
                    <h1 style='color:purple'><center>Ahmedabad Book Fair</center></h1>
                </div>
                <div class='image'>
                    <img src='event4.jpg' alt='Full Image' class='full-image'>
                    <div class='side-images'>
                        <img src='event4.1.jpg' alt='Side Image 1'>
                        <img src='event4.2.jpg' alt='Side Image 2'>
                    </div>
                </div>
                <div class='event-description'>
                    <p><strong></strong></p>
                </div>
                <div class='event-details'>
                    <h2>About</h2>
                    <div class='review'>
                        <p>Discover the enchanting world of literature at the Ahmedabad Book Fair, where pages come to life and every book becomes a doorway to a new adventure. This annual literary extravaganza is a celebration of words, ideas, and the joy of reading, bringing together authors, publishers, and avid readers from all walks of life.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Key Features</h2>
                    <div class='review'>
                        <p>Step into a bibliophile's paradise as the Ahmedabad Book Fair unfolds its chapters. Rows of book stalls beckon with a diverse array of genres, from timeless classics to the latest bestsellers. Whether you're a seasoned reader or a newcomer to the world of books, there's something for everyone.
Attend book signings, panel discussions, and author talks, gaining insights into the creative minds behind your favorite stories.
Explore literature from different cultures, discover regional gems, and immerse yourself in the rich tapestry of storytelling that transcends boundaries.
Participate in engaging workshops and sessions that cater to all ages.
From storytelling for children to writing workshops for aspiring authors, the fair is a hub of creativity and learning.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Contact Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Date: </strong>June 05, 2024 - June 12, 2024</li>
                            <li><strong>Timings: </strong>9:00 AM - 9:00 PM</li>
                            <li><strong>Location: </strong>Seema Hall</li>
                        </ul>
                    </div>
                </div>
        <div class='wishlist-booking'>
            <button class='wishlist-btn' onclick='addToWishlist("Ahmedabad Book Fair", "event4.jpg", 13)'>Add to Wishlist</button>
            <form method='post' action='booking.php'> <!-- Update action attribute here -->
                <input type='hidden' name='serviceID' value='13'>
                <button type='submit' class='booking-btn'>Book Now</button>
            </form>
        </div>
    <div class='event-reviews'>
        <!-- Add reviews section here -->
        <h2>Feedbacks</h2><p>Raj Patel: Taj Hotel: Exuding luxury and timeless elegance, a beacon of hospitality in the heart of Ahmedabad.</p><p>Rahul Verma: Law Garden: A vibrant haven in Ahmedabad, blending greenery with cultural charm, perfect for leisurely strolls and local delights.</p><p>Aangi Shah: Vintage Vibes has positive and great vibes place, amazing place to visit with friends and family!</p></div>

    <div class='more-events'>
        <h2>More Places</h2>
        
        <div class='event-container'><div class='event'><img src='kankaria.jpg' alt='Kankaria Lake'><div class='event-details'><h3>Kankaria Lake</h3><p>Heart Of Ahmedabad</p><a href='kankaria_lake.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='hutheesing.jpg' alt='Hutheesing Ni Vadi'><div class='event-details'><h3>Hutheesing Ni Vadi</h3><p>The Jain Temple</p><a href='hutheesing_ni_vadi.php' target='_self'><button>Learn More</button></a></div></div><div class='event'><img src='event1.jpg' alt='Carnival Utopia 2024'><div class='event-details'><h3>Carnival Utopia 2024</h3><p></p><a href='carnival_utopia_2024.php' target='_self'><button>Learn More</button></a></div></div>
        </div>
    </div>

        </body>
        </html>