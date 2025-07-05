<?php
session_start();
include 'db1.php'; // Include your database connection file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user_id from session
    $user_id = $_SESSION['user_id']; // Assuming 'user_id' is stored in the session

    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Prepare and bind SQL statement using prepared statement to prevent SQL injection
    $query = "INSERT INTO contact_tbl (name, email, query, User_Id) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssi", $name, $email, $message, $user_id);

    // Execute the statement
    if ($stmt->execute()) {
        // Data successfully inserted
        echo "<script>alert('Your message has been sent successfully!');</script>";
    } else {
        // Error occurred while inserting data
        echo "<script>alert('Failed to send message. Please try again.');</script>";
        // Log or display the error
        echo "Error: " . $conn->error;
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aboutus.css">
    <title>Contact Us - AhmdXploreHub</title>
    <?php
 // Start the session to access session variables

include 'initial.php'; // Include file for initializing resources, if needed


?>
    <style>
        .header img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
}

.image-container img {
    padding-left: 10%;
    padding-top: 13%;
    width: 90%;
    height: 150%;
}

.contact-container {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    padding: 0px;
    margin-top: 2%
}

.contact-form
 {
    width: 150%;
    background: rgba(255, 255, 255, 0.8); /* 80% opacity white background */
    padding: 20px;
    border-radius: 10px;
    margin-right:10%
}
.contact-form h2{ 
    MARGIN-TOP:-1%;
    margin-left: 10%;
}

.contact-form h2,
.social-media h2 {
    color:purple;
    text-align: center;
    margin-bottom: 20px;
}

form {
    max-width:auto;
    margin-left: 20%;
}

.input-group {
    margin-bottom: 10px;
}

label {
    display: block;
    margin-top: 5px;
}

input,
textarea {
    width: 100%;
    margin-top: 1%;
    padding: 10px;
    box-sizing: border-box;
}

button {
    background-color: #9673ce;
    color: #f4e3ce;
    padding: 10px;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    background-color: #9673ce;
}

.social-icons {
    display:flex;
    justify-content:center;
    margin-top: 20px;
}

.social-icons img {
    width: 40px;
    height: 40px;
    padding: 20px;
    //object-fit: cover;
    transition: transform 0.3s ease-in-out;
}

.social-icons img:hover {
    transform: scale(1.5);
}

footer {
    background-color: #9673ce;
    color: #fff;
    padding: 10px;
    text-align: center;
}

        </style>
</head>

<body>
<header>
        <div class="logo">
            <img src="logo.png" alt="Ahmedabad City" width="100" height="100">
        </div>
        <div class="name">
            <h1 style="text-indent:-100%;">AhmdXploreHub</h1>
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
   <div class="contact-container">
    <div class="image-container">
        <img src="contactus.jpeg" alt="Rectangle Image">
    </div>

    
        <div class="contact-form">
            <h2>Contact Us</h2>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="input-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="input-group">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="input-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>

                <button type="submit">Send Message</button>
            </form>
       </div>
       
    </div>
   <div class="social-media">
        <h2>Connect With Us</h2>

        <div class="social-icons">
             <a href="https://www.facebook.com/shreepadmatravels?mibextid=ZbWKwL" target="_blank">
                <img src="fb.jpeg" alt="Facebook">
            </a>
             <a href="https://www.instagram.com/shreepadmatravels?igshid=YzVkODRmOTdmMw==" target="_blank">
                <img src="Insta.jpeg" alt="Instagram">
            </a>
        <a href="tel:+987-654-3210" target="_blank">
                <img src="Phone.jpeg" alt="Instagram">
            </a>
        <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=DmwnWrRttgMVqFDgrhqRpbfxQsnRKfsrkwqQHhkChChBmdGbXwrDMkmQtVWGhsLGPtWfLkSffthq" target="_blank">
                <img src="Mail.jpeg" alt="Instagram">
            </a>
            <!-- Add more social media icons as needed -->
    </div>
</div>

<footer>
    &copy; 2023 AhmdXploreHub. All rights reserved.
</footer>

</body>
</html>
