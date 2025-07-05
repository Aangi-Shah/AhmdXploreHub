<?php
// Fetch the verification code from the URL parameter
$verificationCode = $_GET['code'];

// Check the code in the database
if (checkVerificationCodeInDatabase($verificationCode)) {
    // Code is valid
    echo json_encode(['status' => 'success']);
} else {
    // Code is invalid
    echo json_encode(['status' => 'error', 'message' => 'Invalid verification code']);
}
?>
