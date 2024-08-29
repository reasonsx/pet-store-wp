<?php
function my_custom_theme_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    // Enqueue other styles and scripts here
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');
?>
