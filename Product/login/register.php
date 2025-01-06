<?php
include "config.php";
session_start();
error_reporting(0);

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Use password_hash for security

    // Check if the email already exists
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    
    if ($result->num_rows > 0) {
        echo "<script>alert('Email already exists.');</script>";
    } else {
        // Insert new user into the database
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Registration successful!');</script>";
            header("location:index.php");
            exit();
        } else {
            echo "<script>alert('Error: Could not register.');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="register-email">
            <p style="font-size: 2rem; font-weight: 850">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required />
            </div>
            <div class="input-group">
                <input type="text" placeholder="Email" name="email" required />
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required />
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Already have an account? <a href="index.php">Login</a></p>
        </form>
    </div>
</body>
</html>