
<?php
function my_custom_theme_scripts() {
    // Enqueue the main stylesheet
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css');
    
    // Enqueue additional stylesheets based on page type
    if (is_404()) {
        // 404 error page styles
        wp_enqueue_style('404-style', get_template_directory_uri() . '/css/404.css');
    } elseif (is_front_page()) {
        // Front page styles
        wp_enqueue_style('index-style', get_template_directory_uri() . '/css/front-page.css');
    } elseif (is_home()) {
        // Home page styles (and archive pages for posts)
        wp_enqueue_style('home-style', get_template_directory_uri() . '/css/home.css');
    } elseif (is_single()) {
        // Single post styles
        wp_enqueue_style('single-style', get_template_directory_uri() . '/css/single.css');
    }
}

add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');
?>
