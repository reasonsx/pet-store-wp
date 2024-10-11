<?php get_header(); ?>
    <?php echo do_shortcode('[woocommerce_cart]'); ?>


<div class="basket-container">
    <div class="basket-items">
        <!-- Basket items will be displayed here -->
        <?php
        // Query for basket items and display them
        if( have_posts() ) {
            while( have_posts() ) {
                the_post();
                ?>
                <div class="basket-item">
                    <h2><?php the_title(); ?></h2>
                    <div class="item-description">
                        <?php the_content(); ?>
                    </div>
                    
                </div>
                <?php
            }
        } else {
            echo '<p>No items in the basket.</p>';
        }
        ?>
    </div>

</div>

<?php
get_footer();
?>
