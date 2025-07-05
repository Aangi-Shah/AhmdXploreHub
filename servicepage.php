<?php
session_start();
// Include database connection file
include 'db1.php';

// Check if the service ID is received via POST
if (isset($_POST['serviceID'])) {
    $selectedServiceID = $_POST['serviceID']; // Retrieve the selected service ID from the form

    // Store the selected service ID in the session
    $_SESSION['selected_service_id'] = $selectedServiceID;
    // Redirect to the booking page
    header("Location: booking.php");
    exit(); // Stop further execution
}

// Fetch data for all services from the database
$serviceQuery = "SELECT * FROM service_tbl";
$serviceResult = mysqli_query($conn, $serviceQuery);

if (mysqli_num_rows($serviceResult) > 0) {
    while ($row = mysqli_fetch_assoc($serviceResult)) {
        // Generate HTML content for each service
        $serviceID = $row['Service_ID'];
        $serviceName = $row['Service_Name'];
        $tagline = $row['Tagline'];
        $about = $row['About'];
        $keyFeatures = $row['Key_Features'];
        $date = $row['Date'];
        $image = $row['Image'];
        $image1 = $row['Image1'];
        $image2 = $row['Image2'];
        $address = $row['Address'];
        $timings = $row['Timings'];
        $phone = $row['Phone'];
        $price = $row['Price'];
        $categoryID = $row['Category_ID'];
        $subCategoryID = $row['Sub_Category_ID'];
        $userID = $row['User_ID'];
        
        // Generate HTML content for the service
        $htmlContent = "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='learnmore.css'>
            <title>$serviceName Learn More</title>
            <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
            <script>
            function addToWishlist(name, image, id) {
                var userID = " . $_SESSION['user_id'] . "; // Fetch session ID
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
        </header>";
        $htmlContent .= "
            <div class='event-detail-container'>
                <div class='event-header'>
                    <h1 style='color:purple'><center>$serviceName</center></h1>
                </div>
                <div class='image'>
                    <img src='$image' alt='Full Image' class='full-image'>
                    <div class='side-images'>
                        <img src='$image1' alt='Side Image 1'>
                        <img src='$image2' alt='Side Image 2'>
                    </div>
                </div>
                <div class='event-description'>
                    <p><strong>$tagline</strong></p>
                </div>
                <div class='event-details'>
                    <h2>About</h2>
                    <div class='review'>
                        <p>$about</p>
                    </div>
                </div>
                <div class='event-details'>
                    <h2>Key Features</h2>
                    <div class='review'>
                        <p>$keyFeatures</p>
                    </div>
                </div>";
                
        if (!empty($price)) {
            $htmlContent .= "
                <div class='event-details'>
                    <h2>Ticket Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Price:</strong> Rs.$price/-</li>
                        </ul>
                    </div>
                </div>";
        }                
        
        // Display date instead of phone number if category_ID is 5
        if ($categoryID == 5) {
            $htmlContent .= "
                <div class='event-details'>
                    <h2>Contact Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Date: </strong>$date</li>
                            <li><strong>Timings: </strong>$timings</li>
                            <li><strong>Location: </strong>$address</li>
                        </ul>
                    </div>
                </div>";
        } else {
            // Display phone number if category_ID is not 5
            $htmlContent .= "
                <div class='event-details'>
                    <h2>Contact Information</h2>
                    <div class='review'>
                        <ul>
                            <li><strong>Address:</strong> $address</li>
                            <li><strong>Timings: </strong>$timings</li>
                            <li><strong>Phone:</strong> $phone</li>
                        </ul>
                    </div>
                </div>";
        }

        // Hide the "Book Now" button if price is empty
       // Hide the "Book Now" button if price is empty
if (!empty($price)) {
    $htmlContent .= "
        <div class='wishlist-booking'>
            <button class='wishlist-btn' onclick='addToWishlist(\"$serviceName\", \"$image\", $serviceID)'>Add to Wishlist</button>
            <form method='post' action='booking.php'> <!-- Update action attribute here -->
                <input type='hidden' name='serviceID' value='$serviceID'>
                <button type='submit' class='booking-btn'>Book Now</button>
            </form>
        </div>";
} else {
    $htmlContent .= "
        <div class='wishlist-booking'>
            <button class='wishlist-btn' onclick='addToWishlist(\"$serviceName\", \"$image\", $serviceID)'>Add to Wishlist</button>
            <form method='post' action='booking.php'> <!-- Update action attribute here -->
                <input type='hidden' name='serviceID' value='$serviceID'>
                <button type='submit' class='booking-btn'>Book Now</button>
            </form>
        </div>";
}




$htmlContent .= "
    <div class='event-reviews'>
        <!-- Add reviews section here -->
        <h2>Feedbacks</h2>";
        
// Fetch 3 random feedback entries
$sql = "SELECT Detail, User_Name 
        FROM feedback_tbl 
        INNER JOIN user_tbl ON feedback_tbl.User_ID = user_tbl.User_ID
        ORDER BY RAND() 
        LIMIT 3"; // Fetch 3 random feedback
$result = $conn->query($sql);

// Check if any records are fetched
if ($result === false) {
    die("Error executing query: " . $conn->error);
}

// Check if records are fetched
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $detail = isset($row["Detail"]) ? $row["Detail"] : "No feedback available";
        $username = isset($row["User_Name"]) ? $row["User_Name"] : "Anonymous";
        
        $htmlContent .= "<p>".$username.": ".$detail . "</p>";
    }
} else {
    $htmlContent .= "<div class='event'>";
    $htmlContent .= "<p>No feedback found.</p>";
    $htmlContent .= "</div>";
}



$htmlContent .= "</div>

    <div class='more-events'>
        <h2>More Places</h2>
        
        <div class='event-container'>";

// Fetch random places from the database
$sql = "SELECT Image, Service_Name, Tagline FROM service_tbl ORDER BY RAND() LIMIT 3"; // Fetch 3 random places
$result = $conn->query($sql);

// Check if any records are fetched
if ($result === false) {
    die("Error executing query: " . $conn->error);
}

// Check if records are fetched
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $htmlContent .= "<div class='event'>";
        $htmlContent .= "<img src='" . $row['Image'] . "' alt='" . $row['Service_Name'] . "'>";
        $htmlContent .= "<div class='event-details'>";
        $htmlContent .= "<h3>" . $row["Service_Name"] . "</h3>";
        $htmlContent .= "<p>" . $row["Tagline"] . "</p>";
        $fileName = strtolower(str_replace(' ', '_', $row['Service_Name'])) . '.php';
        $htmlContent .= "<a href='" . $fileName . "' target='_self'><button>Learn More</button></a>";
        $htmlContent .= "</div></div>";
    }
} else {
    $htmlContent .= "<div class='event'>";
    $htmlContent .= "<p>No places found.</p>";
    $htmlContent .= "</div>";
}

$htmlContent .= "
        </div>
    </div>

        </body>
        </html>";


        // Create individual PHP files for each service
        $fileName = strtolower(str_replace(' ', '_', $serviceName)) . '.php';
        file_put_contents($fileName, $htmlContent);

        // Provide link to the dynamically created page
        echo "<a href='$fileName'>$serviceName</a><br>";
    }
} else {
    echo "No services found.";
}

$conn->close();
?>
