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

// Set up the query arguments
$args = array(
    'post_type' => 'product',
    'posts_per_page' => 10 // Adjust as needed
);

// If a category is selected, filter the query by category
if (!empty($category_slug)) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'product_cat', // WooCommerce product category taxonomy
            'field'    => 'slug',
            'terms'    => $category_slug,
        ),
    );
}

$loop = new WP_Query($args);

if ($loop->have_posts()) {
    echo '<ul class="products">'; // Opening the <ul> tag with class "products"
    
    while ($loop->have_posts()) : $loop->the_post();
        echo '<li class="product">'; // Opening the <li> tag with class "product"
        
        wc_get_template_part('content', 'product'); // Display the product content
        
        echo '</li>'; // Closing the <li> tag
    endwhile;
    
    echo '</ul>'; // Closing the <ul> tag
} else {
    echo __('No products found');
}

// Reset Post Data
wp_reset_postdata();
?>
<?php get_footer(); ?>
