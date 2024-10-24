<?php get_header(); ?>
<div class="categories-container">
        <h1><?php pll_e('CATEGORIES') ?></h1>
        <div class="categories">
            <div class="category-box"><img src="<?php echo get_template_directory_uri(); ?>/img/Cat.png" alt=""></div>
            <div class="category-box"><img src="<?php echo get_template_directory_uri(); ?>/img/Dog.png" alt=""></div>
            <div class="category-box"><img src="<?php echo get_template_directory_uri(); ?>/img/Fish.png" alt=""></div>
            <div class="category-box"><img src="<?php echo get_template_directory_uri(); ?>/img/Bird.png" alt=""></div>
            <div class="category-box"><img src="<?php echo get_template_directory_uri(); ?>/img/Hamster.png" alt="">
            </div>
        </div>
    </div>
<?php woocommerce_content(); ?>	
<?php get_footer(); ?>