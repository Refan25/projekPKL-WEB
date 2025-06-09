<?php
session_start();
require 'koneksi1.php';

// Cek apakah user sudah login
$logged_in = isset($_SESSION['user_id']);
$user_id = $logged_in ? $_SESSION['user_id'] : null;

// Inisialisasi variabel
$cart_items = [];
$subtotal = 0;
$delivery_fee = 150000;
$total = 0;

// Jika user login, ambil data dari database
if ($logged_in)
 {
    $stmt = $konkesi->prepare("
        SELECT k.id_keranjang, p.id_produk, p.nama_produk AS name, p.harga AS price, p.gambar AS image, k.quantity, k.ukuran 
        FROM keranjang k 
        JOIN produk p ON k.id_produk = p.id_produk 
        WHERE k.id_pelanggan = ?
    ");
    $stmt->execute([$user_id]);
    $cart_items = $stmt->fetchAll();

    // Hitung subtotal
    foreach ($cart_items as $item) {
        $subtotal += $item['price'] * $item['quantity'];
    }
    $total = $subtotal + $delivery_fee;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cart - Nike Store</title>
    <link rel="stylesheet" href="add_to_bag.css" />
</head>

<body>
    <header class="navbar">
        <div class="logo-auth">
            <div class="auth">
                <?php if ($logged_in): ?>
                    <a href="profile.php">My Profile</a>
                    <a href="logout.php">Logout</a>
                <?php else: ?>
                    <a href="signup.php">Sign Up</a>
                    <a href="login.php">Login</a>
                <?php endif; ?>
            </div>
        </div>

        <nav class="nav-center">
            <a href="index.php">Home</a>
            <a href="produk.php">Product</a>
            <a href="about.html">About</a>
        </nav>

        <div class="auth-search-cart">
            <input type="text" placeholder="Search" class="search-bar" />
            <a href="cart.php" class="cart-icon">🛒</a>
        </div>
    </header>

    <main class="cart-container">
        <div class="cart-left">
            <h3>Your Bag</h3>

            <?php if (!$logged_in): ?>
                <div class="login-required">
                    <p>Please <a href="login.php">login</a> to view your cart</p>
                </div>
            <?php elseif (empty($cart_items)): ?>
                <div class="empty-cart">
                    <p>Your bag is empty</p>
                    <a href="produk.php" class="continue-shopping">Continue Shopping</a>
                </div>
            <?php else: ?>
                <?php foreach ($cart_items as $item): ?>
                    <div class="cart-item">
                        <img src="images/<?= htmlspecialchars($item['image']) ?>"
                            alt="<?= htmlspecialchars($item['name']) ?>" class="cart-img" />
                        <div class="cart-details">
                            <p><strong><?= htmlspecialchars($item['name']) ?></strong></p>
                            <p>Men's Shoes</p>
                            <p>Rp <?= number_format($item['price'], 0, ',', '.') ?></p>
                            <p>Size: <?= htmlspecialchars($item['ukuran']) ?></p>

                            <div class="qty-buttons">
                                <form action="update_cart.php" method="post" class="qty-form">
                                    <input type="hidden" name="id_keranjang" value="<?= $item['id_keranjang'] ?>">
                                    <input type="hidden" name="action" value="decrease">
                                    <button type="submit">-</button>
                                </form>
                                <span><?= $item['quantity'] ?></span>
                                <form action="update_cart.php" method="post" class="qty-form">
                                    <input type="hidden" name="id_keranjang" value="<?= $item['id_keranjang'] ?>">
                                    <input type="hidden" name="action" value="increase">
                                    <button type="submit">+</button>
                                </form>
                            </div>

                            <form action="remove_from_cart.php" method="post" class="remove-form">
                                <input type="hidden" name="id_keranjang" value="<?= $item['id_keranjang'] ?>">
                                <button type="submit" class="remove-btn">Remove</button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <?php if ($logged_in && !empty($cart_items)): ?>
            <div class="cart-summary">
                <div class="summary-line">
                    <span>Subtotal</span>
                    <span>Rp <?= number_format($subtotal, 0, ',', '.') ?></span>
                </div>
                <div class="summary-line">
                    <span>Estimated Delivery & Handling</span>
                    <span>Rp <?= number_format($delivery_fee, 0, ',', '.') ?></span>
                </div>
                <div class="summary-line total-line">
                    <span>Total</span>
                    <span>Rp <?= number_format($total, 0, ',', '.') ?></span>
                </div>
                <a href="checkout.php"><button class="checkout-btn">Checkout</button></a>
            </div>
        <?php endif; ?>
    </main>

    <script>
        // Tambahkan konfirmasi sebelum menghapus item
        document.querySelectorAll('.remove-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                if (!confirm('Are you sure you want to remove this item?')) {
                    e.preventDefault();
                }
            });
        });
    </script>
</body>

</html>