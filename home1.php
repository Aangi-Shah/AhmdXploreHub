<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>AhmdXploreHub</title>
    
    <script>
        $(document).ready(function() {
    // Fetch dynamically added categories and append to dropdown
    $.ajax({
        url: 'categories.php',
        type: 'GET',
        success: function(response) {
            $('.categories-dropdown .dropdown-content').append(response);
        }
    });
});
       $(document).ready(function() {
    $('#searchInput').on('input', function() {
        var query = $(this).val().trim();

        if (query === '') {
            $('#searchSuggestions').html('').hide();
            return;
        }

        $.ajax({
            url: 'search.php',
            type: 'POST',
            data: { query: query },
            success: function(response) {
                $('#searchSuggestions').html(response).show();
            }
        });
    });

    $(document).on('click', '#searchSuggestions div', function() {
        var suggestion = $(this).text();
        $('#searchInput').val(suggestion);
        $('#searchSuggestions').hide();
    });

    // Hide suggestions when clicking outside the search area
    $(document).click(function(event) {
        if (!$(event.target).closest('.search-area').length) {
            $('#searchSuggestions').hide();
        }
    });
});



        
        var initial = userName ? userName.charAt(0).toUpperCase() : "U"; // Get the first letter and convert to uppercase

        // Insert the initial into the profile circle
        document.addEventListener("DOMContentLoaded", function() {
            var profileCircle = document.getElementById('profileCircle');
            profileCircle.innerHTML = "<p>" + initial + "</p>";
        $('nav ul li a').each(function() {
                var href = $(this).attr('href');
                $(this).attr('href', href + (href.indexOf('?') !== -1 ? '&' : '?') + 'Email_ID=<?php echo isset($_GET['Email_ID']) ? $_GET['Email_ID'] : ''; ?>');
            });
        });
    </script>
</head>

<body>
    <!-- Header -->
    <header style="padding:5px 10px;">

        <div class="logo">
                <img src="logo.png" alt="Ahmedabad City" width="100" height="100">
        </div>
        <div class="name">
            <h1>AhmdXploreHub</h1>
        </div>
        
        <nav>
            <ul>
                <li><a href="home1.php">Home</a></li>
                <li><a href="thingstodo.php">Things to Do</a></li>
                <li><a href="restaurants.php">Restaurants</a></li>
                <li class="hotels-dropdown">
                    <a href="#">Hotels</a>
                    <div class="dropdown-content">
                        <a href="luxury.php">Luxury Hotels</a><br>
                        <a href="business hotel.php">Business Hotels</a><br>
                        <a href="budget.php">Budget Hotels</a><br>
                    </div>
                </li>
                <li class="categories-dropdown">
                    <a href="#">Categories</a>
                    <div class="dropdown-content">
                        <a href="attractions.php">Attractions</a><br>
                        <a href="events.php">Events</a><br>
                        <a href="localinsights.php">Local Insights</a><br>
                        <a href="heritage.php">Heritage</a><br>
                        <a href="malls&markets.php">Malls & Markets</a><br>
                        <a href="foodparks.php">Food Parks<br></a>
                    </div>
                </li>
                
                <li class="profile-dropdown">
                    <div class="profile-circle" id="profileCircle">
                    <?php
            include 'db1.php'; // Include your database connection file

            // Assuming you have a table named 'users' with a column 'name' where user names are stored
            // Replace 'users' and 'name' with your actual table and column names
            if (!empty($_GET['Email_ID'])) {
                $email = $_GET['Email_ID'];
            
                // Query to fetch user information based on email
                $query = "SELECT User_Name FROM user_tbl WHERE Email_ID = '$email'";
                $result = mysqli_query($conn, $query);
            
                if ($result) {
                    $row = mysqli_fetch_assoc($result);
                    $userName = $row['User_Name'];
                    $initial = $userName ? strtoupper($userName[0]) : "U";
                    echo "<div class='profile-circle' id='profileCircle'><p>" . $initial . "</p></div>";
                } else {
                    echo "<div class='profile-circle' id='profileCircle'><p>U</p></div>"; // Default value if there's an error
                }
            }
                        mysqli_close($conn); // Close the database connection
                        ?>
                    </div>
                        <div class="dropdown-conten">
                            <a href="account1.php">Account info</a><br>
                            <a href="wishlist.php">Wishlist</a><br>
                            <a href="urbooking.php">Bookings</a><br>
                            <a href="trips.php">Past Visits</a><br>
                            <a href="home.php">Logout<br></a>
                        </div>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Search Area -->
        <section class="search-area">
    <h1><center>Explore Ahmedabad's Hidden Gems</center></h1>
    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search for attractions, hotels, or restaurants...">
        <button onclick="search()">Search</button>
        <div id="searchSuggestions" class="suggestions"></div>

    </div>
    <div id="searchResults"></div>
</section>



        <!-- Hero Section -->
        <section class="hero">
            <img src="images.jpg" alt="Ahmedabad City">     
        </section>

        <!--Upcoming events-->
        <h2><center>Upcoming Events</center></h2>
<div class="event-container">
    <?php
    include 'db1.php';
    $category_id = 5; // Assuming category_id=5 for events you want to fetch
    $sql = "SELECT * FROM service_tbl WHERE Category_ID = $category_id ORDER BY RAND() LIMIT 3";
    $result = $conn->query($sql);

    // Display events
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div class="event-container">';
            echo '<div class="event">';
            echo '<img src="' . $row['Image'] . '" alt="' . $row['Service_Name'] . '">';
            echo '<div class="event-details">';
            echo '<h3>' . $row['Service_Name'] . '</h3>';
            echo '<p>Date: ' . $row['Date'] . '</p>';
            echo '<p>Location: ' . $row['Address'] . '</p>';
            $fileName = strtolower(str_replace(' ', '_', $row['Service_Name'])) . '.php';
            echo '<a href="' . $fileName . '" target="_self"><button>Learn More</button></a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "No events found.";
    }
    ?>
</div>

        </div>

        <?php
// Include database connection file
include 'db1.php';

// Create connection


// Fetch random places from the database
$sql = "SELECT Image, Service_Name, Tagline FROM service_tbl WHERE Category_ID != 5 ORDER BY RAND() LIMIT 3"; // Fetch 3 random places
$result = $conn->query($sql);

// Check if any records are fetched
if ($result === false) {
    die("Error executing query: " . $conn->error);
}

// Close the database connection
$conn->close();
?>

<h2><center>Places</center></h2>
<div class="event-container">
    <?php
    // Check if records are fetched
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="event">';
            echo '<img src="' . $row["Image"] . '" alt="' . $row["Service_Name"] . '">';
            echo '<div class="event-details">';
            echo '<h3>' . $row["Service_Name"] . '</h3>';
            echo '<p>' . $row["Tagline"] . '</p>';
            $fileName = strtolower(str_replace(' ', '_', $row['Service_Name'])) . '.php';
            echo '<a href="' . $fileName . '" target="_self"><button>Learn More</button></a>';
            echo '</div></div>';
        }
    } else {
        echo "No places found.";
    }
    ?>
</div>

</div>

        <h2><center>Feebacks</center></h2>
        <?php
// Include database connection file
include 'db1.php';

// Fetch feedbacks from the database
$sql = "SELECT f.Image AS Image, f.Detail AS Detail, u.User_Name AS User_Name
        FROM feedback_tbl f 
        INNER JOIN user_tbl u ON f.User_Id = u.User_Id
        ORDER BY RAND() LIMIT 5";
$result = $conn->query($sql);

// Check if any records are fetched
if ($result === false) {
    die("Error executing query: " . $conn->error);
}

// Close the database connection
$conn->close();
?>

<div class="feedback">
    <?php
    // Check if records are fetched
    if ($result->num_rows > 0) {
        // Loop through each feedback and display it
        while ($row = $result->fetch_assoc()) {
            echo '<div class="feedback-container">';
            echo '<div class="feedback-item">';
            echo '<img src="' . $row["Image"] . '" alt="Feedback Image">';
            echo '<h4><center>' . $row["User_Name"] . '</center></h4>';
            echo '<p>' . $row["Detail"] . '</p>';
            echo '</div></div>';
        }
    } else {
        echo "No feedbacks found.";
    }
    ?>
</div>

    </main>

    <!-- Footer -->
    <footer>
        
        <!-- Social Media Icons and Contact Information go here -->
        <div class="contact-info">
            <nav>
                    <a href="aboutus.php">+ About Us</a><br>
                    <a href="contactus.php">+ Contact Us</a><br>
                    <a href="business.php">+ Do Business with Us</a><br>
                    <a href="feedback.php">+ Feedback Form</a><br>
                    <a href="privacy.php">+ Privacy Policy</a><br>
            </nav>
        </div>
    </footer>
</body>
</html>
