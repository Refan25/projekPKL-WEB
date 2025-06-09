<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "koneksi.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Cek duplikat email atau username
$cek = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' OR email='$email'");
if (mysqli_num_rows($cek) > 0) {
    echo "Username atau Email sudah dipakai. <a href='register_admin.php'>Kembali</a>";
    exit;
}

// Simpan admin baru
$sql = "INSERT INTO admin (username, email, password) VALUES ('$username', '$email', '$password')";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    header("Location: login_admin.php?pesan=daftar_berhasil");
    exit;
} else {
    echo "Gagal daftar admin: " . mysqli_error($koneksi);
}
