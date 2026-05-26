<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.html");
    exit();
}

$user = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Amazon Clone Dashboard</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background: #eaeded;
}

/* Navbar */
.navbar {
    background: #131921;
    color: white;
    display: flex;
    align-items: center;
    padding: 10px 20px;
    gap: 20px;
    flex-wrap: wrap;
}

.logo {
    font-size: 28px;
    font-weight: bold;
    color: orange;
}

.search-bar {
    flex: 1;
    display: flex;
    min-width: 300px;
}

.search-bar select {
    padding: 10px;
    border: none;
}

.search-bar input {
    flex: 1;
    padding: 10px;
    border: none;
    outline: none;
}

.search-bar button {
    padding: 10px 15px;
    border: none;
    background: #febd69;
    cursor: pointer;
    font-size: 16px;
}

.nav-links {
    display: flex;
    gap: 20px;
    align-items: center;
}

.nav-links div {
    font-size: 14px;
}

.nav-links span {
    font-weight: bold;
}

/* Secondary nav */
.secondary-nav {
    background: #232f3e;
    color: white;
    padding: 10px 20px;
    display: flex;
    gap: 20px;
    font-size: 14px;
}

/* Hero */
.hero {
    background: url('https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=1400&q=80') center/cover;
    height: 350px;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    padding-bottom: 30px;
}

.hero-text {
    background: white;
    padding: 15px 25px;
    font-size: 18px;
}

/* Products */
.products {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    padding: 30px;
}

.card {
    background: white;
    padding: 20px;
    text-align: center;
    border-radius: 10px;
    transition: 0.3s;
}

.card:hover {
    transform: scale(1.03);
}

.card img {
    width: 100%;
    height: 220px;
    object-fit: cover;
}

.card h3 {
    margin: 15px 0;
}

.card button {
    background: #ffd814;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 20px;
}

/* Footer */
.footer {
    background: #131921;
    color: white;
    text-align: center;
    padding: 20px;
    margin-top: 30px;
}

.logout {
    color: white;
    text-decoration: none;
    background: red;
    padding: 8px 14px;
    border-radius: 5px;
}
</style>
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <div class="logo">amazon</div>

    <div class="search-bar">
        <select>
            <option>All</option>
        </select>
        <input type="text" placeholder="Search Amazon">
        <button>🔍</button>
    </div>

    <div class="nav-links">
        <div>Hello, <span><?php echo $user; ?></span></div>
        <div>Returns <br><span>& Orders</span></div>
        <div>Cart 🛒</div>
        <a href="logout.php" class="logout">Logout</a>
    </div>
</div>

<!-- Secondary Nav -->
<div class="secondary-nav">
    <div>All</div>
    <div>Today's Deals</div>
    <div>Mobiles</div>
    <div>Electronics</div>
    <div>Fashion</div>
    <div>Home</div>
    <div>Appliances</div>
</div>

<!-- Hero -->
<div class="hero">
    <div class="hero-text">
        Welcome to your Amazon Clone Dashboard
    </div>
</div>

<!-- Products -->
<div class="products">

    <div class="card">
        <h3>Smart Watch</h3>
        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30" alt="">
        <button>Add to Cart</button>
    </div>

    <div class="card">
        <h3>Headphones</h3>
        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e" alt="">
        <button>Add to Cart</button>
    </div>

    <div class="card">
        <h3>Laptop</h3>
        <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853" alt="">
        <button>Add to Cart</button>
    </div>

    <div class="card">
        <h3>Camera</h3>
        <img src="https://images.unsplash.com/photo-1516035069371-29a1b244cc32" alt="">
        <button>Add to Cart</button>
    </div>

</div>

<!-- Footer -->
<div class="footer">
    © 2025 Amazon Clone | Built with PHP + HTML + CSS
</div>

</body>
</html>