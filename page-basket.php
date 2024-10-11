<?php get_header(); ?>
    <?php echo do_shortcode('[woocommerce_cart]'); ?>
<?php get_footer(); ?>


<div class="basket-container">
    <h1 class="basket-title">Your Basket</h1>
    
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
                    <div class="item-price">
                        Price: $<?php echo get_post_meta(get_the_ID(), 'price', true); ?>
                    </div>
                </div>
                <?php
            }
        } else {
            echo '<p>No items in the basket.</p>';
        }
        ?>
    </div>
    
    <div class="basket-footer">
        <a href="#" class="checkout-button">Proceed to Checkout</a>
    </div>
</div>

<?php
get_footer();
?>
