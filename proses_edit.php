<?php
include "koneksi.php";

// Ambil data dari form
$id_produk = mysqli_real_escape_string($koneksi, $_POST['id_produk']);
$id_kategori = mysqli_real_escape_string($koneksi, $_POST['id_kategori']);
$nama_produk = mysqli_real_escape_string($koneksi, $_POST['nama_produk']);
$deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
$harga = mysqli_real_escape_string($koneksi, $_POST['harga']);
$gambar = mysqli_real_escape_string($koneksi, $_POST['gambar']);

// Query update
$sql = "UPDATE produk SET 
            id_kategori = '$id_kategori',
            nama_produk = '$nama_produk',
            deskripsi = '$deskripsi',
            harga = '$harga',
            gambar = '$gambar'
        WHERE id_produk = '$id_produk'";

if (mysqli_query($koneksi, $sql)) {
    header("Location: produk.php?pesan=berhasilupdate");
    exit;
} else {
    echo "Gagal update produk: " . mysqli_error($koneksi);
}
