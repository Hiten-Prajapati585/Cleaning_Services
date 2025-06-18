
<?php
session_start();
include './config.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Check if email exists in the database
    $stmt = $conn->prepare("SELECT * FROM user_registration WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Generate OTP
        $otp = rand(100000, 999999);
        $_SESSION['otp'] = $otp;
        $_SESSION['email'] = $email;
        $_SESSION['otp_expiry'] = time() + 180; // OTP valid for 3 minutes


        // Send OTP to user's email
        $to = $email;
        $subject = "Password Reset OTP";
        $message = "Your OTP code is: " . $otp;
        $headers = "From: brightwavecleaners17@gmail.com";

        if (mail($to, $subject, $message, $headers)) {
            echo "
                <script>
                alert('OTP sent to your email');
                window.location.href='./reset_password.php';
                </script>";
        } else {
            echo "
                <script>
                alert('Failed to send OTP. Please try again.');
                window.location.href='forgot_password.php';
                </script>";
        }
    } else {
        echo "
        <script>
        alert('Email not found');
        window.location.href='./forgot_password.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-box" id="forgot-box">
        <h2>Forgot Password</h2>
        <form action="forgot_password.php" method="POST">
            <div class="input-box">
                <input type="email" name="email" required placeholder="Enter your email">
                <label for="email">Email</label>
            </div>
            <button type="submit" class="btn">Send OTP</button>
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
