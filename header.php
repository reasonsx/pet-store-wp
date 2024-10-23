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
        <img src="/img/logo.png" alt="LOGO" width="100" height="100">
        <ul>
            <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
            <li><a href="">Store</a></li>
            <li><a href="<?php echo home_url('/blog'); ?>">Pet blog</a></li>
            <?php pll_the_languages(); ?>
        </ul>
        <div class="cart">

        </div>
    </nav>