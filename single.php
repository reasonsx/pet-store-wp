<?php get_header(); ?>
<div class="blog-post">
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
            <a href="#"><?php echo esc_html(get_the_date()); ?></a> <?php pll_e('by') ?>
            <?php
            $author_id = get_the_author_meta('ID');
            $author_url = get_author_posts_url($author_id);
            $author_name = get_the_author();

            if ($author_id && $author_name) {
                echo '<a href="' . esc_url($author_url) . '">' . esc_html($author_name) . '</a>';
            } else {
                echo '<span>Author information not available</span>';
            }
            ?>
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

    <p class="text-introduction"><?php the_content(); ?></p>
</div>

<div class="comments">
    <?php
    if (comments_open() || get_comments_number()):?> 
        <?php comments_template(); ?>
    <?php endif; ?>
</div>


<?php get_footer(); // Include the footer ?>
