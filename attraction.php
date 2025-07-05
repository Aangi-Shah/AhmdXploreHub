<?php
 // Start the session to access session variables

include 'initial.php'; // Include file for initializing resources, if needed

// Check if the user is logged in and their user ID is set in the session
if(isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id']; // Retrieve user ID from session
} else {
    // Redirect the user to the login page or handle the case where the user is not logged in
    // For example:
    header("Location: login.php");
    exit(); // Stop further execution
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="attraction.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Attraction</title>
    
</head>

<body>
<header style="padding:5px 10px;">
        <div class="logo">
            <img src="logo.png" alt="Ahmedabad City" width="100" height="100";">
        </div>
        <div class="name">
            <h1 style="text-indent:-30%;">AhmdXploreHub</h1>
        </div>

        <nav>
            <ul style="white-space: nowrap;">
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
                    <div class="profile-circle" id="profileCircle"></div>
                        <div class="dropdown-conten">
                            <a href="account1.php">Account info</a><br>
                            <a href="wishlist.php">Wishlist</a><br>
                            <a href="urbooking.php">Bookings</a><br>
                            <a href="trips.php">Past Visits</a><br>
                            <a href="home.html">Logout<br></a>
                        </div>
                </li>
            </ul>
        </nav>
    </header>


    <main>
        <!-- Search area -->
        <section class="search-area">
            <div class="search-bar">
                <input type="text" placeholder="Search Places...">
                <button>Search</button>
            </div>
        </section>

        <!-- Data for different categories -->
        <div class="place">
        <?php
            // Include database connection file
            include 'db1.php';

            // Fetch data for the current category from the database
            $attractionQuery = "SELECT * FROM service_tbl WHERE Category_ID = $categoryId";
            $attractionResult = mysqli_query($conn, $attractionQuery);

            if ($attractionResult) {
            if (mysqli_num_rows($attractionResult) > 0) {
                echo "<div class='attraction-container'>";
                while ($row = mysqli_fetch_assoc($attractionResult)) {
                    $serviceName = strtolower(str_replace(' ', '_', $row['Service_Name'])) . '.php';
                    // Display attraction data
                    echo "<div class='place'>";
            

                    echo "<img src='" . $row['Image'] . "' alt='Attraction 1' height='30%' width='30%'>";
                    echo "<div class='description'>";
                    echo "<h2>" . $row['Service_Name'] . "</h2>";
                    echo "<p>" . $row['About'] . "</p>";
                    echo "<a href='" . $serviceName . "'><button>Learn More</button></a>";
                    echo "</div>";
                    echo "</div>";
                }
                echo "</div>";
            } else {
                echo "No attractions found.";
            }
        } else {
            echo "Error executing query: " . mysqli_error($conn);
        }
            ?>
        </div>

        </div>

        <!-- Add more category divs as needed -->

    </main>

    <script>
        // Function to show/hide category data
        function showCategory(categoryId) {
            // Hide all categories
            var categories = document.getElementsByClassName("category");
            for (var i = 0; i < categories.length; i++) {
                categories[i].style.display = "none";
            }
            // Show the selected category
            document.getElementById(categoryId).style.display = "block";
        }

        // Event listeners for category dropdown options
        document.getElementById("attraction-link").addEventListener("click", function() {
            showCategory("attraction");
        });
        document.getElementById("events-link").addEventListener("click", function() {
            showCategory("events");
        });
        // Add more event listeners for other categories as needed

        // Initially show the default category (Attractions)
        showCategory("attraction");
    </script>
</body>

</html>
