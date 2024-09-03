<?php get_header(); ?>

<article class="blog-post">
    <header class="blog-post__header">
        <h1 class="blog-post__title"><?php the_title(); ?></h1>

        <div class="blog-post__meta">
            <div class="blog-post__categories">
                <?php
                $categories = get_the_category();
                if ($categories) {
                    foreach ($categories as $category) {
                        echo '<span class="blog-post__category">' . esc_html($category->name) . '</span>';
                    }
                }
                ?>
            </div>

            <p class="blog-post__info">
                <a href="#"><?php echo esc_html(get_the_date()); ?></a> by 
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
        </div>
    </header>

    <div class="blog-post__content">
        <?php the_content(); ?>
    </div>

    <footer class="blog-post__footer">
        <div class="blog-post__tags">
            <?php
            $tags = get_the_tags();
            if ($tags) {
                foreach ($tags as $tag) {
                    echo '<span class="blog-post__tag">' . esc_html($tag->name) . '</span>';
                }
            }
            ?>
        </div>
    </footer>
</article>

<div class="comments">
    <?php
    if (comments_open() || get_comments_number()) :
        comments_template();
    endif;
    ?>
</div>

<?php get_footer(); ?>
