<?php
session_start();

// Replace these credentials with database checks in production
$valid_username = "2024794449";
$valid_password = "12345";
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simulating latency for demonstration
    sleep(1);

    $studentid = htmlspecialchars(trim($_POST['studentid']));
    $password = htmlspecialchars(trim($_POST['password']));

    // Check credentials
    if ($studentid === $valid_username && $password === $valid_password) {
        $_SESSION['user'] = $studentid;
        header("Location: profile_list.html");
        exit();
    } else {
        $error_message = "Invalid username or password.";
    }
}
?>