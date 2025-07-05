<?php include 'db1.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New password</title>
    <link rel="stylesheet" href="forgot password.css">
    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;

            if (password != confirmPassword) {
                alert("Passwords do not match");
                return false;
            }
            return true;
        }
    </script>
</head>
  <body>
  <center>

  <div class="container">
  <?php
    if (isset($_GET['email']) && isset($_GET['reset_token'])) {
    date_default_timezone_set('Asia/kolkata');
    $date = date("Y-m-d");
    $query = "SELECT * FROM `user_tbl` WHERE `Email_ID`='$_GET[email]' AND `resettoken`='$_GET[reset_token]' AND `expire`='$date'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            echo "
                <form method='POST' onsubmit='return validateForm();'>
                    <h3>Create new Password</h3>
                    <div class='form-group'>
                        <label class='label'>New Password:</label>
                        <input type='password' id='password' name='password' pattern='^(?=.*\d)(?=.*[a-z])(?=.*[!@#$%^&*]).{8,}$' title='Password must contain at least 8 characters, including one uppercase letter, one lowercase letter, one number, and one special character' required>
                    </div>
                    <div class='form-group'>
                        <label class='label'>Confirm Password:</label>
                        <input type='password' id='confirmPassword' name='confirmPassword' pattern='^(?=.*\d)(?=.*[a-z])(?=.*[!@#$%^&*]).{8,}$' title='Password must contain at least 8 characters, including one uppercase letter, one lowercase letter, one number, and one special character' required>
                    </div>
                    <button class='button' type='submit' name='updatepassword'>Submit</button>
                    <input type='hidden' name='email' value='$_GET[email]'>
                </form>
            ";
        } else {
            echo "
                <script>
                    alert('Invalid or Expire link');
                    window.location.href='login.php';
                </script>
            ";
        }
    } else {
        echo "
            <script>
                alert('Server down! try again later');
                window.location.href='login.php';
            </script>
        ";
    }
}
?>
</div>
   <?php
    if(isset($_POST['updatepassword']))
    {
        $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $update="UPDATE `user_tbl` SET `password`='$pass',`resettoken`=NULL,`expire`=NULL WHERE `Email_ID`='$_POST[email]'";
        if(mysqli_query($conn,$update))
        {
            echo "
				<script>
					alert('Password updated successfully');
					window.location.href='login.php';
				</script>
			";
        }
        else 
        {
            echo "
				<script>
					alert('Server down! try again later');
					window.location.href='login.php';
				</script>
			";
        }

    }
    
   ?>
</body>
</html>