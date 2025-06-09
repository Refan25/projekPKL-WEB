<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>R2Run</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="category.css" />
    <link rel="stylesheet" href="product.css" />

</head>


<!-- Header -->
<header class="navbar">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #fff;
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            background-color: #fff;
            font-size: 14px;
            border-bottom: 1px solid #ccc;
        }

        .logo-img {
            height: 60px;
            width: auto;
        }

        .logo {

            .nav-left,
            .nav-center,
            .nav-right {
                display: flex;
                align-items: center;
            }
        }

        .nav-left a {
            text-decoration: none;
            color: #000;
            margin-right: 10px;
        }

        .nav-center a {
            margin: 0 15px;
            text-decoration: none;
            color: #000;
            font-weight: 500;
        }

        .nav-right {
            display: flex;
            align-items: center;
        }

        .nav-right input {
            padding: 5px 10px;
            border-radius: 15px;
            border: 1px solid #ccc;
            outline: none;
            margin-right: 10px;
        }

        .user-icon {
            font-size: 20px;
        }

        /* Hero Section */
        .hero {
            display: flex;
            height: calc(100vh - 70px);
        }

        .hero-left {
            flex: 1;
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .hero-left h1 {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero-left p {
            font-size: 14px;
            color: #555;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .best-sellers {
            color:rgb(23, 23, 23) !important;
            font-weight: 700 !important;
        }

        .best-sellers::after {
            background-color:rgb(14, 14, 13) !important;
        }

        .btn {
            background-color: #000;
            color: #fff;
            padding: 12px 24px;
            border: none;
            box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            font-weight: bold;
            width: fit-content;
        }

        .hero-right {
            flex: 1;
            background: linear-gradient(to right, #f25500, #cc3300);
            color: #fff;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }

        .vertical-text {
            position: absolute;
            left: -100px;
            top: 40%;
            transform: rotate(-90deg) translateY(-50%);
            font-size: 100px;
            font-weight: bold;
            color: #fff;
        }

        .shoe-img {
            max-width: 90%;
            transform: rotate(-50deg) translateY(-10%);
            height: auto;
            z-index: 1;
        }

        .shoe-title {
            color: #000;
            text-align: center;
            font-weight: 500;
            margin-top: 20px;
        }

        .shoe-title .price {
            font-weight: normal;
            color: #000;
        }

        .footer {
            background-color: #f7f7f7;
            padding: 40px 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-column {
            flex: 1;
            min-width: 150px;
            margin-bottom: 20px;
        }

        .footer-column h3 {
            font-size: 16px;
            margin-bottom: 15px;
            color: #111;
        }

        .footer-column ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-column li {
            margin-bottom: 10px;
        }

        .footer-column a {
            text-decoration: none;
            color: #666;
            font-size: 14px;
        }

        .footer-column a:hover {
            text-decoration: underline;
            color: #111;
        }

        .footer-bottom {
            width: 100%;
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            font-size: 12px;
            color: #666;
        }

        .footer-bottom-left {
            display: flex;
            flex-wrap: wrap;
        }

        .footer-bottom-left a {
            margin-right: 20px;
            color: #666;
            text-decoration: none;
        }

        .footer-bottom-left a:hover {
            text-decoration: underline;
        }
    </style>
    <div class="logo">
        <a href="index.php">
            <img src="backend/images/logo.png" alt="R2Run Logo" class="logo-img">
        </a>
    </div>

    <div class="nav-left">
        <a href="signup.php">Sign Up</a> | <a href="login.php">Login</a>
    </div>
    <nav class="nav-center">
        <a href="index.php">Home</a>
        <a href="produk.php">Product</a>
        <a href="about.html">About</a>
    </nav>
    <div class="nav-right">
        <input type="text" placeholder="Search" />
        <span class="cart-icon">🛒</span>
    </div>
</header>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-left">
        <h1>Max Cushioning For<br>The Ultimate Ride.</h1>
        <p>
            If People Say Your Dreams Are Crazy, If They Laugh<br>
            At What You Think You Can Do, Good. Stay That Way.<br>
            Because What The Non-Believers Fail To Understand<br>
            Is That Calling A Dream Crazy Is Not An Insult. It’s A<br>
            Compliment.
        </p>
        <a href="vomero18.html"><button class="btn">Shop Now</button></a>
    </div>

    <div class="hero-right">
        <h2 class="vertical-text">JUST DO IT</h2>
        <a href="vomero18.html"><img src="images/vomero_no_bg.png" alt="" class="shoe-img" /></a>
        <p class="shoe-title">Nike Vomero 18<br><span class="price">Rp 2.249.000</span></p>
    </div>

</section>
</div>
<br><br>

<div class="product-page">
    <!-- Kategori -->
    <section class="categories">
        <div class="category-item">
            <a href="running.php"><img src="images/runningshoes.jpg" alt="Running Shoes"></a>
            <p>Running Shoes</p>
        </div>
        <div class="category-item">
            <a href="basketball.php"><img src="images/basketball_shoes.jpg" alt="Basketball Shoes"></a>
            <p>Basketball Shoes</p>
        </div>
        <div class="category-item">
            <a href="football.php"><img src="images/football_shoes.jpg" alt="Football Shoes"></a>
            <p>Football Shoes</p>
        </div>
    </section>
    <br><br>

    <!-- Trending Section -->
    <section class="trending">
        <h2>Trending Now</h2>
        <div class="products">
            <div class="product">
                <a href="trending01.html"><img src="images/vaporfly.avif" alt="Nike Vaporfly 4"></a>
                <p class="title">Nike Vaporfly 4</p>
                <p class="subtitle">Running Shoes</p>
                <p class="price">Rp 3.989.000</p>
            </div>
            <div class="product">
                <a href="trending02.html"><img src="images/kd18.avif" alt="KD18 EP"></a>
                <p class="title">KD18 EP</p>
                <p class="subtitle">Basketball Shoes</p>
                <p class="price">Rp 2.489.000</p>
            </div>
            <div class="product">
                <a href="trending03.html"><img src="images/superfly_kylian_mbape.avif" alt="Nike Mercurial Superfly 10 Elite 'Kylian Mbappé'"></a>
                <p class="title">Nike Mercurial Superfly 10 Elite 'Kylian Mbappé'</p>
                <p class="subtitle">Football Shoes</p>
                <p class="price">Rp 4.429.000</p>
            </div>
        </div>
    </section>


    <section class="video-section">

        <iframe width="1440" height="550" src="https://www.youtube.com/embed/ttCmbb-jb_U?si=FaQmIDaoDBQ7mHXc"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </section>
</div>
<!-- Footer Section -->
<footer class="footer">
    <div class="footer-column">
        <h3>Resources</h3>
        <ul>
            <li><a href="#">Help</a></li>
            <li><a href="#">Find A Store</a></li>
            <li><a href="#">Get Help</a></li>
            <li><a href="#">Become A Member</a></li>
        </ul>
    </div>

    <div class="footer-column">
        <h3>Company</h3>
        <ul>
            <li><a href="#">About R2Run</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Investors</a></li>
        </ul>
    </div>

    <div class="footer-column">
        <h3>Running Shoe Finder</h3>
        <ul>
            <li><a href="#">Order Status</a></li>
            <li><a href="#">Delivery</a></li>
            <li><a href="#">Returns</a></li>
            <li><a href="#">Payment Options</a></li>
        </ul>
    </div>

    <div class="footer-column">
        <h3>Education Discounts</h3>
        <ul>
            <li><a href="#">Send Us Feedback</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Report a Concern</a></li>
        </ul>
    </div>

    <div class="footer-column">
        <h3>Sustainability</h3>
        <ul>
            <li><a href="#">Impact</a></li>
        </ul>
    </div>

    <div class="footer-bottom">
        <div class="footer-bottom-left">
            <a href="#" class="guides">Guides</a>
            <a href="#">Terms of Sale</a>
            <a href="#">Terms of Use</a>
            <a href="#">R2Run Privacy Policy</a>
        </div>
        <div class="copyright">© 2025 R2Run, Inc. All rights reserved</div>
    </div>
</footer>

<div class="locale">Indonesia 🌐</div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.querySelector('.nav-right input[type="text"]');
        const productCards = document.querySelectorAll('.product-card');

        searchInput.addEventListener('input', function() {
            const keyword = this.value.toLowerCase();

            productCards.forEach(card => {
                const title = card.querySelector('h4').textContent.toLowerCase();
                const category = card.querySelector('p').textContent.toLowerCase();

                if (title.includes(keyword) || category.includes(keyword)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
</script>

</body>

</html>