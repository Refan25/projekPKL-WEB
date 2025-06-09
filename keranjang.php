<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Keranjang Nike</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Bag</h2>
        <?php
        $query = $conn->query("SELECT * FROM pesanan LIMIT 1");
        $data = $query->fetch_assoc();
        $subtotal = $data['harga'] * $data['jumlah'];
        $delivery = 150000;
        $total = $subtotal + $delivery;
        ?>
        <div class="cart">
            <img src="https://static.nike.com/a/images/t_default/91ff8a58-66a8-4e8c-bd83-812dfb3a0296/nike-vomero-18-road-running-shoes-VrPmpK.png" alt="Nike Vomero 18" class="product-img">
            <div class="product-info">
                <h3><?php echo $data['nama_barang']; ?></h3>
                <p>Women's Road Running Shoes</p>
                <p>Atmosphere/Bright Crimson/Crimson Bliss/Black</p>
                <p>Size <a href="#"> <?php echo $data['ukuran']; ?> </a></p>
                <div class="qty">
                    <button>-</button>
                    <span><?php echo $data['jumlah']; ?></span>
                    <button>+</button>
                </div>
            </div>
            <div class="price">Rp <?php echo number_format($data['harga'], 0, ',', '.'); ?></div>
        </div>

        <div class="summary">
            <h3>Summary</h3>
            <p>Subtotal: <span>Rp <?php echo number_format($subtotal, 0, ',', '.'); ?></span></p>
            <p>Estimated Delivery & Handling: <span>Rp <?php echo number_format($delivery, 0, ',', '.'); ?></span></p>
            <p>Total: <strong>Rp <?php echo number_format($total, 0, ',', '.'); ?></strong></p>
            <div class="buttons">
                <button class="guest">Guest Checkout</button>
                <button class="member">Member Checkout</button>
            </div>
        </div>
    </div>
</body>

</html>