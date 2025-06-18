
<?php
session_start();
include './config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entered_otp = $_POST['otp'];

    if (isset($_SESSION['otp']) && isset($_SESSION['otp_expiry']) && time() < $_SESSION['otp_expiry']) { 
    if ($entered_otp == $_SESSION['otp']) {
    
        echo '<div class="form-box" id="reset-box">
                <h2>Reset Password</h2>
                <form action="update_password.php" method="POST" onsubmit="return validatePassword()">
                    <input type="hidden" name="email" value="' . $_SESSION['email'] . '">
                    <div class="input-box">
                        <input type="password" id="new_password" name="new_password" required placeholder="Enter new password">
                        <label>New Password</label>
                    </div>
                    <div class="input-box">
                        <input type="password" id="confirm_password" name="confirm_password" required placeholder="Confirm new password">
                        <label>Confirm Password</label>
                    </div>
                    <button type="submit" class="btn">Reset Password</button>
                </form>
              </div>';
    } else {
        echo "<script>alert('Invalid OTP. Please try again.');</script>";
        header("refresh: 1; url=./reset_password.php");
    }
} else {
    echo "<script>alert('OTP has expired. Please try again.');</script>";
    header("refresh: 1; url=./forgot_password.php");
    exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        function validatePassword() {
            var newPassword = document.getElementById("new_password").value;
            var confirmPassword = document.getElementById("confirm_password").value;
            if (newPassword !== confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="form-box" id="verify-box">
        <h2>Verify OTP</h2>
        <form action="reset_password.php" method="POST">
            <div class="input-box">
                <input type="text" name="otp" required placeholder="Enter OTP">
                <label>OTP</label>
            </div>
            <button type="submit" class="btn">Verify OTP</button>
        </form>
    </div>
</body>
</html>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.form-box {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

.form-box h2 {
    margin-bottom: 20px;
}

.input-box {
    position: relative;
    margin-bottom: 20px;
}

.input-box input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    outline: none;
}

.input-box label {
    position: absolute;
    top: 50%;
    left: 10px;
    transform: translateY(-50%);
    background-color: #fff;
    padding: 0 5px;
    color: #aaa;
    transition: 0.3s;
}

.input-box input:focus + label,
.input-box input:not(:placeholder-shown) + label {
    top: -10px;
    left: 10px;
    color: #333;
    font-size: 12px;
}

.btn {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #0056b3;
}
</style>