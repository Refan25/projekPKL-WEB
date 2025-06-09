<?php
include "koneksi1.php";

$sql = "SELECT produk.nama_produk, produk.gambar, produk.harga, kategori.nama_kategori 
        FROM produk 
        JOIN kategori ON produk.id_kategori = kategori.id_kategori 
        WHERE LOWER(kategori.nama_kategori) = 'football shoes'";

$result = $koneksi->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Running Shoes - Nike</title>
    <link rel="stylesheet" href="running_basketball_football.css">
</head>

<body>
    <header class="navbar">
        <div class="navbar-left">
            <div class="auth">
                <a href="signup.php">Sign Up</a>
                <span>|</span>
                <a href="login.php">Login</a>
            </div>
        </div>

        <nav class="navbar-center">
            <a href="index.php">Home</a>
            <a href="produk.php">Product</a>
            <a href="about.php">About</a>
        </nav>

        <div class="navbar-right">
            <input type="text" placeholder="Search" class="search-bar" />
            <span class="cart-icon">🛒</span>
        </div>
    </header>

    <div class="product-page">
        <h2>Running Shoes</h2>

        <section class="video-section">
            <iframe width="100%" height="550" src="https://www.youtube.com/embed/pwLergHG81c?si=-o3ne1-YgVUH_30Y"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </section>

        <section class="highlight">
            <p class="sub-text">A’One</p>
            <h1>FOR THE REAL ONES</h1>
            <p class="description">Ready to go to work? A’ja Wilson’s first signature collection is here.</p>
        </section>

        <div class="product-grid">
            <?php
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="product-card">
                            <img src="images/' . $row['gambar'] . '" alt="' . $row['nama_produk'] . '" onerror="this.onerror=null;this.src=\'images/default.jpg\';">
                            <div class="product-info">
                                <h3>' . $row['nama_produk'] . '</h3>
                                <p class="category">' . $row['nama_kategori'] . '</p>
                                <p class="price">Rp ' . number_format($row['harga'], 0, ',', '.') . '</p>
                            </div>
                        </div>';
                }
            } else {
                echo "<p>Tidak ada produk untuk kategori Running Shoes.</p>";
            }
            ?>
        </div>
    </div>
</body>

</html>