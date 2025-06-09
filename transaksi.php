<?php
// session_start();
include "koneksi.php";

// if (!isset($_SESSION['username'])) {
//     header("Location: login.php?pesan=logindulukocak");
//     exit;
// }

$sql = "SELECT t.*, p.nama 
        FROM transaksi t
        JOIN pelanggan p ON t.id_pelanggan = p.id_pelanggan
        ORDER BY t.tanggal_transaksi DESC";
$query = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="home.css">
    <style>
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 98%;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        th,
        td {
            padding: 12px 20px;
            text-align: center;
            border-bottom: 1px solid #f0f0f0;
        }

        th {
            background-color: rgb(0, 0, 0);
            color: white;
            font-weight: 400;
            text-transform: uppercase;
            font-size: 0.9em;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        td a {
            display: inline-block;
            padding: 6px 12px;
            margin: 0 3px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 0.85em;
            transition: all 0.3s ease;
        }

        td a:first-child {
            background-color: rgb(0, 85, 255);
            color: white;
        }

        td a:last-child {
            background-color: #e74c3c;
            color: white;
        }

        td a:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }


        button a {
            display: inline-block;
            padding: 10px 15px;
            background-color: #2ecc71;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        button {
            border: none;
            background: none;
            margin-left: 20px;
            cursor: pointer;
        }

        @media (max-width: 768px) {

            th,
            td {
                padding: 8px 12px;
            }
        }

        .btn-edit,
        .btn-hapus {
            display: inline-block;
            padding: 5px 12px;
            margin: 0 5px;
            border-radius: 4px;
            text-decoration: none;
            color: white;
            font-size: 0.85em;
        }
    </style>

</head>

<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>Admin Panel</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li class="active"><a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="produk.php"><i class="fas fa-box"></i> Produk</a></li>
                <li><a href="pesanan.php"><i class="fas fa-shopping-cart"></i> Pesanan</a></li>
                <li><a href="pelanggan.php"><i class="fas fa-users"></i> Pelanggan</a></li>
                <li><a href="transaksi.php"><i class="fa-solid fa-clipboard"></i> Transaksi</a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Keluar</a></li>
            </ul>
        </div>
    </div>


    <div class="main-content">
        <div class="header">
            <div class="header-left">
                <h2>Dashboard</h2>
            </div>
            <div class="header-right">
                <div class="user-profile">
                    <img src="images/avatar.png" alt="">
                    <span>Admin</span>
                </div>
            </div>
        </div>



        <div class="table-container">
            <!DOCTYPE html>
            <html>

            <head>
                <title>Dashboard Admin - Nike Store</title>
                <style>
                    table {
                        width: 100%;
                        border-collapse: collapse;
                        margin-top: 20px;
                    }

                    th,
                    td {
                        padding: 10px;
                        border: 1px solid #ccc;
                        text-align: left;
                    }

                    a.button {
                        padding: 5px 10px;
                        background-color: rgba(100, 95, 95, 0.88);
                        color: white;
                        text-decoration: none;
                        border-radius: 4px;
                    }

                    a.button.red {
                        background-color: #e74c3c;
                    }
                </style>
            </head>
</body>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Transaksi</title>
</head>

<body>
    <h1>Data Transaksi</h1>
    

    <table border="1" cellpadding="10">
        <tr>
            <th>ID Transaksi</th>
            <th>Nama Pelanggan</th>
            <th>Tanggal</th>
            <th>Total</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        <?php while ($transaksi = mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td><?= $transaksi['id_transaksi']; ?></td>
                <td><?= $transaksi['nama']; ?></td>
                <td><?= $transaksi['tanggal_transaksi']; ?></td>
                <td>$<?= number_format($transaksi['total'], 2); ?></td>
                <td><?= $transaksi['status']; ?></td>
                <td>
                    <a href="edit_transaksi.php?id=<?= $transaksi['id_transaksi']; ?>">Edit</a> |
                    <a href="hapus_transaksi.php?id=<?= $transaksi['id_transaksi']; ?>" onclick="return confirm('Hapus transaksi ini?')">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>