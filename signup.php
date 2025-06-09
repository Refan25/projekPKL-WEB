<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="login.php">
</head>

<body>

    <!-- Top Navigation -->
    <header>
        <style>

        </style>
        <div class="top-bar">
            <div class="auth-links">
                <a href="signup.php">Sign Up</a> | <a href="login.php">Login</a>
            </div>
            <nav class="main-nav">
                <ul class="nav-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="produk.php">Products</a></li>
                    <li><a href="about.html">About</a></li>
                </ul>
                <div class="nav-right">
                    <div class="search-box">
                        <input type="text" placeholder="Search">
                        <i class="fa fa-search"></i>
                    </div>
                    <i class="fa fa-shopping-cart cart-icon"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Sign Up Form -->
    <main>
        <div class="signup-card">
            <h2>Sign Up Page</h2>
            <form>
                <input type="text" placeholder="Username*" required>
                <input type="email" placeholder="Email*" required>
                <div class="password-wrapper">
                    <input type="password" id="password" placeholder="Password*" required>
                    <i class="fa fa-eye" id="togglePassword"></i>
                </div>
            </form>
        </div>
        <a href="login.php"><button class="signup-btn">Create Account</button></a>
    </main>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');
        togglePassword.addEventListener('click', () => {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            togglePassword.classList.toggle('fa-eye-slash');
        });
    </script>

</body>

</html>