<?php
include "koneksi.php";

// Ambil data dari form
$nama_produk = mysqli_real_escape_string($koneksi, $_POST['nama_produk']);
$id_kategori = mysqli_real_escape_string($koneksi, $_POST['id_kategori']);
$deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
$harga = mysqli_real_escape_string($koneksi, $_POST['harga']);

// Cek jika file gambar diupload
if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
    $nama_file = $_FILES['gambar']['name'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    $folder_tujuan = "images/" . $nama_file;

    // Pindahkan file
    if (move_uploaded_file($tmp_file, $folder_tujuan)) {
        $gambar = $nama_file;
    } else {
        echo "Upload gambar gagal.";
        exit;
    }
} else {
    $gambar = null; // atau kasih default image misal "default.png"
}

// Insert ke database
$sql = "INSERT INTO produk (nama_produk, id_kategori, deskripsi, harga, gambar) 
        VALUES ('$nama_produk', '$id_kategori', '$deskripsi', '$harga', '$gambar')";

if (mysqli_query($koneksi, $sql)) {
    header("Location: produk.php?pesan=berhasiltambah");
    exit;
} else {
    echo "Gagal menambahkan produk: " . mysqli_error($koneksi);
}
