<?php get_header(); ?>
<?php $title1 = get_field('title-1'); ?>
<?php $title2 = get_field('title-2'); ?>
<?php $title3 = get_field('title-3'); ?>

<div class="hero-container">
    <div class="hero">
        <div class="hero-text">
            <p><?php echo esc_html($title1); ?></p>
            <h1><?php echo esc_html($title2); ?></h1>
            <p><?php echo esc_html($title3); ?></p>
            <button>
                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- SVG content -->
                </svg>
                Read more
            </button>
        </div>
    </div>
    <div class="latest-offers">
        <h1>LATEST OFFERS</h1>
        <div class="offers">
        <?php
        $the_query = new WP_Query(array(
            'post_type' => 'cards', // Replace 'offer' with your custom post type or 'post' for default posts
            'posts_per_page' => 3   // Adjust the number of posts to display
        )); ?>

        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="offer">
                <img src="<?php echo esc_url(get_field('offer-image')); ?>" alt="<?php echo esc_attr(get_field('offer-title')); ?>">
                <h2><?php echo esc_html(get_field('offer-title')); ?></h2>
                <p><?php echo esc_html(get_field('offer-description')); ?></p>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        </div>
    </div>
    <div class="categories-container">
        <h1>CATEGORIES</h1>
        <div class="categories">
            <div class="category-box"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Cat.png" alt="Category Cat"></div>
            <div class="category-box"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Dog.png" alt="Category Dog"></div>
            <div class="category-box"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Fish.png" alt="Category Fish"></div>
            <div class="category-box"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Bird.png" alt="Category Bird"></div>
            <div class="category-box"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Hamster.png" alt="Category Hamster"></div>
        </div>
    </div>

    <div class="best-sellers-container">
        <h1>BEST SELLERS</h1>
        <div class="best-sellers">
            <!-- Loop for best-seller items here, if needed -->
            <div class="item"></div>
            <!-- Repeat as needed -->
        </div>
    </div>
</div>
<div class="support-container">
    <h1>Contact us</h1>
    <div class="support-box">
        <?php echo do_shortcode('[contact-form-7 id="1234" title="Support form"]'); // Replace '1234' with your actual form ID ?>
    </div>
</div>
<?php get_footer(); ?>
