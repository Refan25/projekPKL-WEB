<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="home.css">

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
                <li><a href="pelanggan.php"><i class="fas fa-users"></i> Pelanggan</a></li> <li><a href="transaksi.php"><i class="fa-solid fa-clipboard"></i> Transaksi</a></li>
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


        <div class="content-wrapper">
            <h1 class="page-title">Selamat Datang, Admin</h1>

            <!-- Card Stats -->
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <span class="card-title">Total Pengguna</span>
                        <div class="card-icon users">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <div class="card-value">1,254</div>
                    <div class="card-footer">+12% dari bulan lalu</div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <span class="card-title">Total Pesanan</span>
                        <div class="card-icon orders">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>
                    <div class="card-value">342</div>
                    <div class="card-footer">+5% dari bulan lalu</div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <span class="card-title">Total Pendapatan</span>
                        <div class="card-icon revenue">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                    </div>
                    <div class="card-value">Rp.550,000</div>
                    <div class="card-footer">+8% dari bulan lalu</div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <span class="card-title">Total Produk</span>
                        <div class="card-icon products">
                            <i class="fas fa-boxes"></i>
                        </div>
                    </div>

                </div>
            </div>

            <h2 class="page-title">Pesanan Terbaru</h2>
            <div class="table-container">

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Admin dashboard loaded');
        });
    </script>
</body>

</html>