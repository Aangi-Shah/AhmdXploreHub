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
    <link rel="stylesheet" href="aboutus.css">
    <title>Privacy Policy</title>
</head>
<style>
    main {
    margin: 20px;
}

h2 {
    color: purple;
}

p {
    margin-bottom: 15px;
}



footer {
    background-color: #9673ce;
    color: #fff;
    padding: 10px;
    text-align: center;
}
</style>
<body>
<header>
        <div class="logo">
            <img src="logo.png" alt="Ahmedabad City" width="100" height="100">
        </div>
        <div class="name">
            <h1 style="text-indent:-70%;">AhmdXploreHub</h1>
        </div>

        <nav>
            <ul>
            <li><a href="home1.php">Home</a></li>
                <li><a href="thingstodo.php">Things to Do</a></li>
                <li><a href="restaurants.php">Restaurants</a></li>
                <li class="hotels-dropdown">
                    <a href="#">Hotels</a>
                    <div class="dropdown-content">
                        <a href="luxury.html">Luxury Hotels</a><br>
                        <a href="business hotel.html">Business Hotels</a><br>
                        <a href="budget.html">Budget Hotels</a><br>
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
        <img src="privacy.jpg" alt="Privacy Policy Image">
        <p>Last Updated: 20/01/2024</p>

        <!-- Add more sections as needed -->

        <section>
            <h2>1. Information We Collect</h2>
            <p>We collect information that you provide directly to us, such as when you create an account, submit a booking, or contact us. This information may include your name, email address, and other personally identifiable information.</p>
        </section>

        <section>
            <h2>2. How We Use Your Information</h2>
            <p>We use the information we collect to provide, maintain, and improve our services. This may include sending you updates, responding to your inquiries, and processing bookings.</p>
        </section>

        <section>
            <h2>3. Information Sharing and Disclosure</h2>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties. However, we may share information with service providers who assist us in operating our website.</p>
        </section>

        <section>
            <h2>4. Security</h2>
            <p>We are committed to protecting the security of your information. We implement and maintain reasonable security measures to help protect your information from unauthorized access and disclosure.</p>
        </section>

        <section>
            <h2>5. Changes to This Privacy Policy</h2>
            <p>We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.</p>
            <p class="highlight">By continuing to use our services after any changes to this Privacy Policy, you agree to the revised terms.</p>
        </section>

        

        

    </main>

    <footer>
        &copy; 2023 AhmdXploreHub. All rights reserved.
    </footer>

</body>

</html>
