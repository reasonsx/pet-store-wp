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
        <!-- Logo -->
        <div class="logo">LOGO</div>

        <!-- Navigation Menu -->
        <ul>
            <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
            <li><a href="#">Store</a></li>
            <li><a href="<?php echo home_url('/blog'); ?>">Pet blog</a></li>

            <!-- Language Switcher with Flags -->
            <li>
                <div class="language-switcher">
                    <?php
                    $languages = pll_the_languages(array('raw' => 1)); // Get the available languages in array format
                    
                    foreach ($languages as $language) :
                        $flag_svg = ($language['slug'] == 'en') ? 'en.svg' : 'da.svg'; // Switch SVG files for English and Danish
                    ?>
                        <a href="<?php echo esc_url($language['url']); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/flags/<?php echo $flag_svg; ?>" alt="<?php echo esc_attr($language['name']); ?> Flag" width="24" height="24">
                        </a>
                    <?php endforeach; ?>
                </div>
            </li>
        </ul>

        <div class="cart"></div>
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

        /* Language Switcher Styling */
        .language-switcher img {
            width: 24px;
            height: 24px;
            margin-right: 10px;
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

    <?php wp_footer(); ?>
</body>

</html>
