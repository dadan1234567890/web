<?php
// Username dan password yang dianggap benar
$valid_user = "mahasiswa";
$valid_pass = "web123";

// Ambil input dari form
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($username === $valid_user && $password === $valid_pass) {
        echo "<h2>Login Berhasil!</h2>";
        echo "<p>Selamat datang, $username.</p>";
        echo '<a href="index.html">Kembali ke Beranda</a>';
    } else {
        echo "<h2>Login Gagal!</h2>";
        echo "<p>Username atau password salah.</p>";
        echo '<a href="index.html">Coba Lagi</a>';
    }
} else {
    echo "<h2>Akses tidak valid!</h2>";
}
?>