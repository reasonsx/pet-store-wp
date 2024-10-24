<?php get_header(); ?>

<div class="categories-container">
    <h1><?php pll_e('CATEGORIES'); ?></h1>
    <div class="categories">
        <!-- Category: Cat -->
        <div class="category-box">
            <a href="?category=cat">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Cat.png" alt="">
            </a>
        </div>
        
        <!-- Category: Dog -->
        <div class="category-box">
            <a href="?category=dog">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Dog.png" alt="">
            </a>
        </div>
        
        <!-- Category: Fish -->
        <div class="category-box">
            <a href="?category=fish">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Fish.png" alt="">
            </a>
        </div>
        
        <!-- Category: Bird -->
        <div class="category-box">
            <a href="?category=bird">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Bird.png" alt="">
            </a>
        </div>
        
        <!-- Category: Rodent -->
        <div class="category-box">
            <a href="?category=rodent">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Hamster.png" alt="">
            </a>
        </div>
    </div>
</div>

<?php
// Set up the query to filter by category based on the user's selection
$category_slug = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : '';

$args = [
    'post_type'      => 'product',
    'posts_per_page' => 10, // You can adjust the number of products per page
];

if ($category_slug !== '') {
    $args['tax_query'] = [
        [
            'taxonomy' => 'product_cat',
            'field'    => 'slug',
            'terms'    => $category_slug,
        ],
    ];
}

// Fetch products based on the query
$loop = new WP_Query($args);

if ($loop->have_posts()) {
    while ($loop->have_posts()) : $loop->the_post();
        wc_get_template_part('content', 'product'); // Display product content
    endwhile;
} else {
    echo __('No products found');
}

wp_reset_postdata();
?>

<?php get_footer(); ?>
