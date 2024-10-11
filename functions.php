<?php
function my_custom_theme_scripts()
{
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css');

    if (is_404()) {
        wp_enqueue_style('404-style', get_template_directory_uri() . '/css/404.css');
    } elseif (is_front_page()) {
        wp_enqueue_style('index-style', get_template_directory_uri() . '/css/front-page.css');
    } elseif (is_home()) {
        wp_enqueue_style('home-style', get_template_directory_uri() . '/css/home.css');
    } elseif (is_single()) {
        wp_enqueue_style('single-style', get_template_directory_uri() . '/css/single.css');
    } elseif (is_page_basket()) {
        wp_enqueue_style('page-basket-styles', get_template_directory_uri() . '/css/page-basket.css');
    }
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');

function plp_register_strings()
{
    pll_register_string('nav-store', 'Store');
    pll_register_string('nav-blog', 'Pet blog');
    pll_register_string('latest-offers', 'LATEST OFFERS');
    pll_register_string('categories', 'CATEGORIES');
    pll_register_string('best-sellers', 'BEST SELLERS');
    pll_register_string('contact-us', 'Contact us');
    pll_register_string('read-more', 'Read more');
    pll_register_string('newest-posts', 'NEWEST POSTS');
    pll_register_string('by', 'by');
    pll_register_string('go-back', 'Go back');
}
add_action('init', 'plp_register_strings');

function custom_meta_tags()
{
    // Check the current language using Polylang
    $current_lang = function_exists('pll_current_language') ? pll_current_language() : 'en'; // Default to English if no language is found

    if (is_front_page()) {
        // Home page (index.php)
        if ($current_lang == 'da') {
            // Danish version
            echo '<meta name="description" content="Find førsteklasses dyrefoder, legetøj og praktiske madabonnementer skræddersyet til dine kæledyr. Shop nu og udforsk vores blog for nyttige råd om kæledyrspleje!">';
            echo '<meta name="keywords" content="hjem, blog, indhold">';
        } else {
            // English version
            echo '<meta name="description" content="Find premium pet food, toys, and convenient pet food subscriptions tailored to your furry friends. Shop now and explore our blog for helpful pet care tips!">';
            echo '<meta name="keywords" content="home, blog, content">';
        }
    } elseif (is_home()) {
        // Blog post list page (home.php)
        if ($current_lang == 'da') {
            // Danish version
            echo '<meta name="description" content="Udforsk vores blog for de nyeste råd om kæledyrspleje, fodring, træning og meget mere. Hold dig opdateret med ekspertråd for glade og sunde kæledyr!">';
            echo '<meta name="keywords" content="blog, indlæg, artikler, nyheder">';
        } else {
            // English version
            echo '<meta name="description" content="Explore our blog for the latest tips on pet care, feeding, training, and more. Stay informed with expert advice for happy and healthy pets!">';
            echo '<meta name="keywords" content="blog, posts, articles, news">';
        }
    } elseif (is_single()) {
        $post_title = esc_attr( get_the_title() );

        if ( $current_lang == 'da' ) {
            // Danish version of the meta description
            echo '<meta name="description" content="Læs mere om ' . $post_title . ' i vores seneste blogindlæg. Opdag nyttige tips og tricks for at sikre, at dit kæledyr er glad og sund.">';
            echo '<meta name="keywords" content="kæledyr, blog, ' . $post_title . '">';
        } else {
            // English version of the meta description
            echo '<meta name="description" content="Learn more about ' . $post_title . ' in our latest blog post. Discover useful tips and tricks to ensure your pet is happy and healthy.">';
            echo '<meta name="keywords" content="pet, blog, ' . $post_title . '">';
        }
    }
}
add_action('wp_head', 'custom_meta_tags');

function shop_enable_woocommerce()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'shop_enable_woocommerce');