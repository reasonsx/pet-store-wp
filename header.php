<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav>
        <!-- <img src="/img/logo.png" alt="LOGO" width="100" height="100"> -->
         <div class="logo">LOGO</div>
        <ul>
            <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
            <li><a href="">Store</a></li>
            <li><a href="<?php echo home_url('/blog'); ?>">Pet blog</a></li>
            <?php pll_the_languages(); ?>
        </ul>
        <div class="cart">

        </div>
    </nav>
    <style>
        /* General reset for margins and padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Navigation bar styling */
nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    padding: 20px;
    font-family: Arial, sans-serif;
}

nav .logo {
    font-size: 24px;
    font-weight: bold;
    color: #fff;
}

nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

nav ul li {
    margin: 0;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 18px;
    transition: color 0.3s ease;
}

nav ul li a:hover {
    color: #f0a500;
}

nav .cart {
    position: relative;
}

nav .cart::before {
    content: "🛒";
    font-size: 24px;
    color: #fff;
}

/* Responsive layout for mobile */
@media (max-width: 768px) {
    nav {
        flex-direction: column;
        padding: 10px;
    }

    nav ul {
        flex-direction: column;
        gap: 10px;
    }

    nav ul li a {
        font-size: 20px;
    }
}

    </style>