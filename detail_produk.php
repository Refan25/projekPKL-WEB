<?php
include 'koneksi1.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

// Ambil data produk & kategori
$sql = "SELECT p.*, k.nama_kategori FROM produk p 
        LEFT JOIN kategori k ON p.id_kategori = k.id_kategori
        WHERE id_produk = $id";
$result = $koneksi->query($sql);

if ($result->num_rows === 0) {
    echo "Produk tidak ditemukan.";
    exit;
}

$produk = $result->fetch_assoc();
                    $sql_ukuran = "SELECT ukuran, stok FROM ukuran_produk WHERE id_produk = $id ORDER BY ukuran ASC";

                    $result_ukuran = $koneksi->query($sql_ukuran);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= htmlspecialchars($produk['nama_produk']) ?></title>
    <link rel="stylesheet" href="detail_produk.css" />
</head>

<body>
    <header>
        <div class="top-nav">
            <div class="auth-links">
                <a href="signup.php">Sign Up</a>
                <a href="login.php">Login</a>
            </div>
            <nav>
                <a href="index.php">Home</a>
                <a href="produk.php">Product</a>
                <a href="about.php">About</a>
            </nav>
            <div class="search-cart">
                <input type="text" placeholder="Search" />
                <span class="cart-icon">🛒</span>
            </div>
        </div>
    </header>

    <main class="product-page">
        <div class="image-container">
            <img src="backend/images/<?= htmlspecialchars($produk['gambar']) ?>" alt="<?= htmlspecialchars($produk['nama_produk']) ?>" />
        </div>
        <div class="details">
            <h2><?= htmlspecialchars($produk['nama_produk']) ?></h2>
            <p class="category"><?= htmlspecialchars($produk['nama_kategori']) ?></p>
            <p class="price">Rp <?= number_format($produk['harga'], 0, ',', '.') ?></p>

            <!-- Ukuran dari tabel ukuran_produk -->
            <div class="sizes">
                <?php while ($ukuran = $result_ukuran->fetch_assoc()): ?>
                    <label class="size-box <?= $ukuran['stok'] <= 0 ? 'disabled' : '' ?>">
                        <input type="radio" name="size" value="<?= $ukuran['ukuran'] ?>" <?= $ukuran['stok'] <= 0 ? 'disabled' : '' ?>>
                        <?= $ukuran['ukuran'] ?>
                    </label>
                <?php endwhile; ?>
            </div>

            <div class="buttons">
                <a href="checkout.php"><button class="checkout">Checkout</button></a>
                <a href="add_to_bag.php"><button class="add-to-bag">Add to bag</button></a>
            </div>

            <div class="description">
                <h4>Description :</h4>
                <p><?= nl2br(htmlspecialchars($produk['deskripsi'])) ?></p>
            </div>
        </div>
    </main>

    <script>
        // Highlight size box ketika diklik
        const labels = document.querySelectorAll('.size-box:not(.disabled)');
        labels.forEach(label => {
            label.addEventListener('click', () => {
                labels.forEach(l => l.classList.remove('active'));
                label.classList.add('active');
            });
        });
    </script>
</body>

</html>