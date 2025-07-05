<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="forgot password.css">
</head>

<body>

    <div class="container">
        <form action="forgotpassword.php" method="post">
            
            <!-- Step 1: Enter Email -->
            <div class="form-group">
                <label for="email">Enter your Email address:</label>
                <input type="email" id="email" name="email" required>
                A reset password link will be sent to this email address
                <br><br><button type="submit" name="send-reset-link">Submit</button>
            </div>
        </form>
    </div>

</body>

</html>
