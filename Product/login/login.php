<?php
include "../config/config.php";
session_start();
error_reporting(0);

if (isset($_SESSION['username'])) {
    header("location:../admin/admin.php");
    exit();
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validasi email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Email tidak valid')</script>";
        exit();
    }

    // Cegah SQL Injection dengan prepared statements
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            header("location:../admin/admin.php");
            exit();
        } else {
            echo "<script>alert('Woops! Password Salah')</script>";
        }
    } else {
        echo "<script>alert('Woops! Email tidak ditemukan')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p style="font-size: 2rem; font-weight: 850; align-items: center;">Login</p>
            <div class="input-group">
                <input type="text" placeholder="Email" name="email" value="<?php echo htmlspecialchars($email ?? '', ENT_QUOTES); ?>" required /> <!-- Menggunakan htmlspecialchars -->
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo htmlspecialchars($_POST['password'] ?? '', ENT_QUOTES); ?>" required />
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Don't Have an Account? <a href="register.php">Register</a></p>
            <br>
            <a href="../../index.php" type="" class="btn-back">Back</a>
        </form>
    </div>
</body>
</html>