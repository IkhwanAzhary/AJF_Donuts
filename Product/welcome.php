<?php
session_start();
if (isset($_SESSION["username"])) {
    header('Location: index.php');
    exit(); // Tambahkan exit setelah header redirect
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php 
    // Pastikan username ada dalam session sebelum menampilkannya
    if (isset($_SESSION["username"])) {
        echo "<h1>Welcome, " . htmlspecialchars($_SESSION["username"]) . "</h1>"; // Menggunakan htmlspecialchars untuk keamanan
    } else {
        echo "<h1>Welcome, Guest</h1>"; // Menampilkan pesan untuk tamu jika username tidak ada
    }
    ?>
    <h1>Selamat Kamu Berhasil Login</h1>
    <a href="logout.php">Logout</a> <!-- Menambahkan teks pada tautan logout -->
</body>
</html>