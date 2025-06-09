<!DOCTYPE html>
<html>

<head>
    <title>Tambah Produk</title>
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

    <h2>Tambah Produk</h2>

    <form action="proses_tambah.php" method="post" enctype="multipart/form-data">
        <label>Nama Produk</label>
        <input type="text" name="nama_produk" required>

        <label>ID Kategori</label>
        <input type="number" name="id_kategori" required>

        <label>Deskripsi</label>
        <textarea name="deskripsi" required></textarea>

        <label>Harga</label>
        <input type="number" name="harga" required>

        <label>Gambar</label>
        <input type="file" name="gambar" accept="image/*">

        <input type="submit" value="Simpan">
    </form>


</body>

</html>