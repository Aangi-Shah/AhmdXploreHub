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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Feedback</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: url('feedback.jpg') center/cover no-repeat fixed;
        }

        h2 {
            color: purple;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #9673ce;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #9673ce;
        }
    </style>
</head>

<body>

    <header>
        <div class="logo">
            <img src="logo.png" alt="Ahmedabad City" width="100" height="100">
        </div>
        <div class="name">
            <h1 style="text-indent:-47%;">AhmdXploreHub</h1>
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

    <h2>Feedback Form</h2>

    <form action="feedback.php" method="post" enctype="multipart/form-data">

        <input type="hidden" id="user_id" name="user_id" value="<?php echo $user_id; ?>">
        <label for="feedback">Feedback:</label>
        <textarea id="feedback" name="feedback" rows="4" required></textarea>

        <label for="photo">Upload a photo:</label>
        <input type="file" id="photo" name="photo" accept="image/*">

        <input type="submit" value="Submit">
    </form>

    <!-- PHP code to process form submission and store feedback in the database -->
    <?php
    include 'db1.php'; // Include your database connection file

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $feedback = $_POST['feedback'];

        // Check if file is uploaded
        if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
            $file_name = $_FILES['photo']['name'];
            $file_tmp = $_FILES['photo']['tmp_name'];
            $file_type = $_FILES['photo']['type'];
            $file_size = $_FILES['photo']['size'];

            $upload_dir = $_SERVER['DOCUMENT_ROOT'] . '/SDP/';
            move_uploaded_file($file_tmp, $upload_dir . $file_name);
        } else {
            $file_name = ""; // If no file uploaded, set to empty string
        }

        // Prepare and execute SQL query to insert feedback into database
        $query = "INSERT INTO feedback_tbl (User_ID, Image, Detail) VALUES ('$user_id', '$file_name', '$feedback')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            // Feedback successfully saved
            echo "<script>alert('Feedback submitted successfully!');</script>";
        } else {
            // Error occurred while saving feedback
            echo "<script>alert('Failed to submit feedback. Please try again.');</script>";
        }
    }

    mysqli_close($conn); // Close the database connection
    ?>
</body>

</html>
