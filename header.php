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

            <!-- Language Switcher with Inline SVG Flags -->
            <li>
                <div class="language-switcher">
                    <?php
                    $languages = pll_the_languages(array('raw' => 1)); // Get the available languages in array format
                    
                    foreach ($languages as $language) :
                        if ($language['slug'] == 'en') {
                            // UK flag SVG for English
                            echo '<a href="' . esc_url($language['url']) . '">
                                    <svg width="24" height="12" viewBox="0 0 1200 600" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_20_32)">
                                            <mask id="mask0_20_32" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="1200" height="600">
                                                <path d="M0 0V600H1200V0H0Z" fill="white"/>
                                            </mask>
                                            <g mask="url(#mask0_20_32)">
                                                <path d="M0 0V600H1200V0H0Z" fill="#012169"/>
                                                <path d="M0 0L1200 600ZM1200 0L0 600Z" fill="black"/>
                                                <path d="M0 0L1200 600M1200 0L0 600" stroke="white" stroke-width="120"/>
                                                <mask id="mask1_20_32" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="1200" height="600">
                                                    <path d="M600 300H1200V600L600 300ZM600 300V600H0L600 300ZM600 300H0V0L600 300ZM600 300V0H1200L600 300Z" fill="white"/>
                                                </mask>
                                                <g mask="url(#mask1_20_32)">
                                                    <path d="M0 0L1200 600ZM1200 0L0 600Z" fill="black"/>
                                                    <path d="M0 0L1200 600M1200 0L0 600" stroke="#C8102E" stroke-width="80"/>
                                                </g>
                                                <path d="M600 0V600ZM0 300H1200Z" fill="black"/>
                                                <path d="M600 0V600M0 300H1200" stroke="white" stroke-width="200"/>
                                                <path d="M600 0V600ZM0 300H1200Z" fill="black"/>
                                                <path d="M600 0V600M0 300H1200" stroke="#C8102E" stroke-width="120"/>
                                            </g>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_20_32">
                                                <rect width="1200" height="600" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                  </a>';
                        } elseif ($language['slug'] == 'da') {
                            // Danish flag SVG for Danish
                            echo '<a href="' . esc_url($language['url']) . '">
                                    <svg width="24" height="18" viewBox="0 0 37 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_20_29)">
                                            <path d="M0 0H37V28H0V0Z" fill="#C8102E"/>
                                            <path d="M0 14H37ZM14 0V28Z" fill="black"/>
                                            <path d="M0 14H37M14 0V28" stroke="white" stroke-width="4"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_20_29">
                                                <rect width="37" height="28" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                  </a>';
                        }
                    endforeach;
                    ?>
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
        .language-switcher img,
        .language-switcher svg {
            width: 24px;
            height: auto;
            margin-right: 10px;
            cursor: pointer;
        }

        .language-switcher a {
            display: inline-block;
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
