<?php


// filepath: c:\xampp\htdocs\Project\fetch_user.php
session_start();
include './config.php'; // Include your database connection file
header('Content-Type: application/json');
// include './loginpage.php'; // Include your database connection file
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $query = "SELECT Username FROM user_registration WHERE U_ID = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($username);
    $stmt->fetch();
    $stmt->close();
    $conn->close();

    echo json_encode(['username' => $username]);
} else {
    echo json_encode(['username' => null]);
}

?>