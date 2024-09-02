<?php get_header(); // Include the header ?>

<div class="blog-post-start">
    <h1 class="blog-post__title"><?php the_title(); ?></h1>
    <div class="categories">
        <?php
        $categories = get_the_category();
        if ($categories) {
            foreach ($categories as $category) {
                echo '<h2 class="category">' . esc_html($category->name) . '</h2>';
            }
        }
        ?>
    </div>

    <p class="blog-post__info">
        <a href="#"><?php echo get_the_date(); ?></a> by <a
            href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
    </p>
    <div class="hashtag">
        <?php
        $tags = get_the_tags();
        if ($tags) {
            foreach ($tags as $tag) {
                echo '<h6>' . esc_html($tag->name) . '</h6>';
            }
        }
        ?>
    </div>
</div>



<div class="comments">
    <?php if (comments_open() || get_comments_number()): ?>
        <?php comments_template(); ?>
    <?php endif; ?>
</div>

<?php get_footer(); // Include the footer ?>