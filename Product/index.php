<?php 
include "config.php";
session_start(); // Memperbaiki typo
error_reporting(0); // Menambahkan titik koma

if (isset($_SESSION['username'])) {
    header("location:./index.html");
    exit(); // Tambahkan exit setelah header redirect
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST["password"]); // Pertimbangkan untuk menggunakan password_hash()
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'"; // Memperbaiki sintaks SQL
    $result = mysqli_query($conn, $sql);
    
    if ($result && $result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("location:./index.html");
        exit(); // Tambahkan exit setelah redirect
    } else {
        echo "<script>alert('Woops! Email atau Password Salah');</script>"; // Memperbaiki tanda kutip
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p style="font-size: 2rem; font-weight: 850">Login</p>
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
        </form>
    </div>
</body>
</html>