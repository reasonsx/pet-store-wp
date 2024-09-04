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

function plp_register_strings() {
    pll_register_string('nav-store', 'Store');
    pll_register_string('nav-blog', 'Pet blog');
    pll_register_string('latest-offers', 'LATEST OFFERS');
    pll_register_string('categories', 'CATEGORIES');
    pll_register_string('best-sellers', 'BEST SELLERS');
    pll_register_string('contact-us', 'Contact us');
    pll_register_string('read-more', 'Read more');
    pll_register_string('newest-posts', 'NEWEST POSTS');
    pll_register_string('by', 'by');
}
add_action('init', 'plp_register_strings');
