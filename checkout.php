<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout</title>
    <link rel="stylesheet" href="checkout.css" />
</head>

<body>
    <header class="navbar">
        <div class="logo-auth">
            <div class="auth">
                <a href="signup.php">Sign Up</a> | <a href="login.php">Login</a>
            </div>
        </div>
        <nav class="nav-center">
            <a href="index.php">Home</a>
            <a href="produk.php">Product</a>
            <a href="about.php">About</a>
        </nav>
        <div class="auth-search-cart">
            <input type="text" placeholder="Search..." class="search-bar" />
            <div class="cart-icon">🛒</div>
        </div>
    </header>

    <main class="checkout-container">
        <div class="form-section">
            <h3>Delivery</h3>
            <p>Enter your name and address:</p>
            <input type="text" placeholder="Name" />
            <input type="text" placeholder="Address" />
            <input type="email" placeholder="Email" />
            <input type="tel" placeholder="Phone" />

            <p>How would you like to pay?</p>

            <button class="payment-btn">
                <button class="payment-btn dana">
                    <img src="images/dana.webp" alt="DANA" />
                    DANA
                </button>
                <button class="payment-btn shopee">
                    <img src="images/shopee-removebg-preview.png" alt="ShopeePay" />
                    ShopeePay
                </button>
        </div>

        <div class="summary-section">
            <h4>Order Summary</h4>
            <div class="summary-row">
                <span>Delivery/Shipping</span>
                <span>Free</span>
            </div>
            <div class="summary-row total">
                <span>Total</span>
                <span>Rp 2.249.000</span>
            </div>
            <div class="product-summary">
                <img src="images/vomero18.png"
                    alt="Nike Vomero" />
                <div class="product-info">
                    <p><strong>Nike Vomero 18</strong></p>
                    <p>Women's Shoes</p>
                    <p>Rp 2.249.000</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>