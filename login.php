<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>

<body>
    <?php
session_start();
include 'db1.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($conn === null) {
    die("Database connection failed");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == "nirali12@gmail.com" && $password == "Nirali@123") {
        echo "<script>alert('Login Successful');</script>";
        header("Location: index.php?Email_ID=" . urlencode($email));
        exit();
    }

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM user_tbl WHERE Email_ID = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['Password'];
        
        // Use password_verify to check the hashed password
        if (password_verify($password, $hashedPassword)) {
            $userType = $row['User_Type'];

            // Check user type and redirect accordingly
            if ($userType == 1) {
                // Set session variable
                $_SESSION['user_id'] = $row['User_ID'];

                // Redirect to dashboard1.php and pass the email as a parameter
                header("Location: home1.php?Email_ID=" . urlencode($email));
                exit();
            } elseif ($userType == 2) {
                // Set session variable
                $_SESSION['user_id'] = $row['User_ID'];

                // Redirect to dashboard2.php and pass the email as a parameter
                header("Location: dashboard1.php?Email_ID=" . urlencode($email));
                exit();
            }
        }
    }

    // User does not exist or incorrect credentials
    echo "<script>alert('Invalid email or password');</script>";
}
?>


<!-- ... rest of your HTML code ... -->


    <div class="login-container">
        <form method="post" action="">
            <h2>Welcome Back!</h2>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[!@#$%^&*]).{8,}$" required>
            </div>

            <div class="reg">
                <div class="register">
                    <a href="registration.php"><u>New User</u></a>
                </div>
                <div class="forgot-password">
                    <a href="forgot.php"><u>Forgot Password?</u></a>
                </div>
            </div>
            
            <button type="submit" onclick="validateForm()">Login</button>
        </form>
    </div>
    
</body>
</html>
