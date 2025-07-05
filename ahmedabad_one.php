
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='learnmore.css'>
            <title>Ahmedabad One Learn More</title>
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
            <div class='event-detail-container'>
                <div class='event-header'>
                    <h1 style='color:purple'><center>Ahmedabad One</center></h1>
                </div>
                <div class='image'>
                    <img src='ahmdone.jpg' alt='Full Image' class='full-image'>
                    <div class='side-images'>
                        <img src='ahmdone1.jpg' alt='Side Image 1'>
                        <img src='ahmdone2.jpg' alt='Side Image 2'>
                    </div>
                </div>
                <div class='event-description'>
                    <p><strong>World of Authenticity & Design</strong></p>
                </div>
                <div class='event-details'>
                    <h2>About</h2>
                    <div class='review'>
                        <p>Ahmedabad One Mall, located in Ahmedabad, Gujarat, is a prominent shopping and entertainment destination in the city. The mall is situated in the Vastrapur area and offers a diverse range of retail outlets, including national and international brands, providing shoppers with a wide variety of options for fashion, electronics, and more.

In addition to shopping, Ahmedabad One Mall features entertainment options such as a multiplex cinema, creating a well-rounded experience for visitors. The mall is known for its modern architecture, spacious interiors, and a vibrant atmosphere that attracts locals and tourists alike.</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Key Features</h2>
                    <div class='review'>
                        <p>Ahmedabad One mall contains vivid brands that promise you a mix of luxury, classic, playful and delightful moments.
BRANDS

Pantaloons
Trends
Shoppers Stop
Lifestyle
H&M
FOOD COURT

Taco Bell
Pizza Hut
McDonald's
KFC
Starbucks</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Contact Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Address:</strong> Nexus Ahmedabad One, Plot No. 216, T.P. Scheme 1, Near Vastrapur Lake, Vastrapur, Ahmedabad - 380054, Gujarat, India.</li>
                            <li><strong>Timings: </strong>10:00 AM - 10:00 PM</li>
                            <li><strong>Phone:</strong> 7940193672</li>
                        </ul>
                    </div>
                </div>
                <div class='wishlist-booking'>
                    <button class='wishlist-btn' onclick='addToWishlist("Ahmedabad One", "ahmdone.jpg", 8)'>Add to Wishlist</button>
                    <form method='post' action='booking.php'>
                        <input type='hidden' name='serviceID' value='8'>
                        <button type='submit' class='booking-btn'>Book Now</button>
                    </form>
                </div>
                <div class='event-reviews'>
                    <!-- Add reviews section here -->
                </div>
                <div class='more-events'>
                    <h2>More Places</h2>
                    <div class='event-container'>
                        <div class='event'>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Include any necessary JavaScript files -->
        </body>
        </html>