<?php require_once('./db1.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration.css">
    <title>Registration</title>
</head>
<script>
    function validateForm() {
        var userType = document.querySelector('input[name="user-type"]:checked');
        
        if (!userType) {
            alert("Please select at least one user type.");
            return false; // Prevent form submission
        }

        document.getElementById('user-type-value').value = userType.value;

        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('confirmPassword').value;

        if (name === "" || email === "" || phone === "" || password === "" || confirmPassword === "") {
            alert("Please fill all the fields.");
            return false; // Prevent form submission
        }

        var namePattern = /^[A-Za-z\s]{2,}$/;
        if (!namePattern.test(name)) {
            alert("Name must contain only letters, spaces and be at least 2 characters long.");
            return false; // Prevent form submission
        }

        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert("Please enter a valid email address.");
            return false; // Prevent form submission
        }

        var phonePattern = /^[0-9]{10}$/;
        if (!phonePattern.test(phone)) {
            alert("Please enter a valid 10-digit phone number.");
            return false; // Prevent form submission
        }

        var passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[!@#$%^&*]).{8,}$/;
        if (!passwordPattern.test(password)) {
            alert("Password must contain at least one digit, one lowercase letter, one special character, and be at least 8 characters long.");
            return false; // Prevent form submission
        }

        if (password !== confirmPassword) {
            alert("Passwords do not match!");
            return false; // Prevent form submission
        }

        // If all validations pass, allow form submission
        return true;
    }
</script>

<body>
    <div class="radio-group">
    <label>
        <input type="radio" name="user-type" id="tourist" value="tourist">
        Tourist
    </label>
    <label>
        <input type="radio" name="user-type" id="service-provider" value="service-provider">
        Service Provider
    </label>
    </div>
    <div class="registration-container">
    <form id="registrationForm" method="post" action="" onsubmit="return validateForm()">
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" pattern="[A-Za-z\s]{2,}$" title="Name must contain only letters, spaces and be at least 2 characters long." required>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" title="Please enter a valid 10-digit phone number" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[!@#$%^&*]).{8,}$" title="Password must contain at least 8 characters, including one uppercase letter, one lowercase letter, one number, and one special character" required>
            </div>

            <div class="input-group">
                <label for="password">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[!@#$%^&*]).{8,}$" title="Password must contain at least 8 characters, including one uppercase letter, one lowercase letter, one number, and one special character" required>
            </div>
            
            <input type="hidden" id="user-type-value" name="user-type-value" value="">
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
    <?php
    if (isset($_POST['submit'])) {
    // Handle form submission
    $userType = isset($_POST['user-type-value']) ? $_POST['user-type-value'] : 'Not Selected';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $userTypeValue = ($userType == 'tourist') ? 1 : (($userType == 'service-provider') ? 2 : 0);

    /*// Print values for debugging
    echo "User Type: $userType<br>";
    echo "User Type Value: $userTypeValue<br>";*/

    // Insert data into the user_tbl table
    $query = "INSERT INTO ahmdxplorehub1.user_tbl (`User_Type`, `User_Name`, `Email_ID`, `Phone_No`, `password`) VALUES (?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $query);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "sssss", $userTypeValue, $name, $email, $phone, $password);

    // Execute the statement
    $result = mysqli_stmt_execute($stmt);

    // Check if the query was successful
    if ($result) {
        echo "<script>alert('Registration successful');</script>";
        header("Location: home1.php?Email_ID=" . urlencode($email));
        exit();
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}
?>

</body>

</html>
