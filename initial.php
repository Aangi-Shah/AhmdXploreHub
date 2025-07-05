<?php
session_start();
// Initialize the userName variable with an empty string
$userName = '';

// Check if user_id is set in session
if (!empty($_SESSION['user_id'])) {
    // Include your database connection file
    include 'db1.php'; 

    // Fetch the user's name from the database based on user_id from session
    $userId = $_SESSION['user_id'];

    // Query to fetch user information based on user_id
    $query = "SELECT User_Name FROM user_tbl WHERE User_ID = '$userId'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $userName = $row['User_Name'];
    }

  
}
?>

<script>
    // Set the userName variable with the fetched user's name
    var userName = "<?php echo $userName; ?>";

    var initial = userName ? userName.charAt(0).toUpperCase() : "U"; // Get the first letter and convert to uppercase

    // Insert the initial into the profile circle
    document.addEventListener("DOMContentLoaded", function() {
        var profileCircle = document.getElementById('profileCircle');
        profileCircle.innerHTML = "<p>" + initial + "</p>";
    });
</script>
<html>
<style>
    .profile-circle {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    overflow: hidden;
    background-color: #f4e3ce;
    display: flex;
    justify-content: center;
    align-items: center;
}

.profile-circle p {
    margin: 0;
    font-size: 24px;
    color: purple;
}

nav ul {
    list-style: none;
    display: flex;
}

nav ul li {
    margin-right: 15px;
    margin-top: 25px;
}

nav a {
    text-decoration: none;
    color: #f4e3ce;
}

.dropdown-conten, .auth-dropdow {
    display: none;
    position: absolute;
    background-color: purple;
    padding: 10px;
    z-index: 1;
    width: 130px;
    margin-inline: -75px;
}

.profile-dropdown:hover .dropdown-conten, .user-auth:hover .auth-dropdow {
    display: block;
}
</style>
</html>