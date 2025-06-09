<?php
include "koneksi.php";

if (!isset($_GET['id'])) {
    header("Location: dashboard.php");
    exit;
}

$id_produk = $_GET['id'];

// Ambil data produk dari DB
$sql = "SELECT * FROM produk WHERE id_produk = '$id_produk'";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) == 0) {
    echo "Produk tidak ditemukan!";
    exit;
}

$produk = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f7f7f7;
            margin: 40px;
        }

        h2 {
            color: #111;
        }

        form {
            background: white;
            padding: 30px;
            border-radius: 12px;
            max-width: 500px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        input[type="submit"] {
            margin-top: 20px;
            background-color: #111;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #333;
        }
    </style>
</head>

<body>
    <h1>Edit Produk</h1>
    <form action="proses_edit.php" method="post">
        <input type="hidden" name="id_produk" value="<?= htmlspecialchars($produk['id_produk']); ?>">

        <label>Nama Produk</label><br>
        <input type="text" name="nama_produk" value="<?= htmlspecialchars($produk['nama_produk']); ?>" required><br><br>

        <label>ID Kategori</label><br>
        <input type="number" name="id_kategori" value="<?= htmlspecialchars($produk['id_kategori']); ?>"><br><br>

        <label>Deskripsi</label><br>
        <textarea name="deskripsi" rows="4" cols="50"><?= htmlspecialchars($produk['deskripsi']); ?></textarea><br><br>

        <label>Harga</label><br>
        <input type="number" step="0.01" name="harga" value="<?= htmlspecialchars($produk['harga']); ?>" required><br><br>

        <label>URL Gambar</label><br>
        <input type="text" name="gambar" value="<?= htmlspecialchars($produk['gambar']); ?>"><br><br>

        <button type="submit">Update Produk</button>
    </form>
    <p><a href="dashboard.php">Kembali ke Daftar Produk</a></p>
</body>

</html>