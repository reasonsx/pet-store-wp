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
            echo '<meta name="description" content="Læs vores seneste blogindlæg, der dækker en række emner. Hold dig informeret og opdateret!">';
            echo '<meta name="keywords" content="blog, indlæg, artikler, nyheder">';
        } else {
            // English version
            echo '<meta name="description" content="Read our latest blog posts covering a variety of topics. Stay informed and updated!">';
            echo '<meta name="keywords" content="blog, posts, articles, news">';
        }
    } elseif (is_single()) {
        // Individual blog post (single.php)
        $post_title = esc_attr(get_the_title());
        if ($current_lang == 'da') {
            // Danish version
            echo '<meta name="description" content="' . esc_attr(strip_tags(get_the_excerpt())) . '">';
            echo '<meta name="keywords" content="blog, ' . $post_title . '">';
        } else {
            // English version
            echo '<meta name="description" content="' . esc_attr(strip_tags(get_the_excerpt())) . '">';
            echo '<meta name="keywords" content="blog, ' . $post_title . '">';
        }
    }
}
add_action('wp_head', 'custom_meta_tags');
