<?php get_header(); ?>
<?php $title = get_field('blog-title') ?>
<div class="hero-section">
    <div class="hero-img">
        <div class="hero-text">
        <h1><?php echo $title ?></h1>
        <p>gfjgf</p>
        </div>
        <!-- <div class="grey-bg">
            <div class="hero-text">PET BLOG</div>
        </div> -->
    </div>
</div>

<div class="categories-container">
<h1><?php pll_e('CATEGORIES') ?></h1>
    <div class="categories">
        <div class="category-box"><img src="<?php echo get_template_directory_uri(); ?>/img/Cat.png" alt=""></div>
        <div class="category-box"><img src="<?php echo get_template_directory_uri(); ?>/img/Dog.png" alt=""></div>
        <div class="category-box"><img src="<?php echo get_template_directory_uri(); ?>/img/Fish.png" alt=""></div>
        <div class="category-box"><img src="<?php echo get_template_directory_uri(); ?>/img/Bird.png" alt=""></div>
        <div class="category-box"><img src="<?php echo get_template_directory_uri(); ?>/img/Hamster.png" alt=""></div>
    </div>
</div>
<div class="posts-container">
    <div class="posts-list">
        <h1><?php pll_e('NEWEST POSTS') ?></h1>
        <div class="posts">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
            );
            $query = new WP_Query($args);

            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();
                    ?>
                    <div class="post">

                        <div class="thumbnail">
                            <?php if (has_post_thumbnail()): ?>
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>"
                                    width="550" height="400">
                            <?php endif; ?>

                        </div>
                        <div class="post-text">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                            <button>
                                <a href="<?php the_permalink(); ?>" class="read-more-btn">
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M27.9783 26.4032C29.4503 28.7208 30.144 29.9513 30.144 31.2348C30.144 33.7695 28.2614 34.9986 25.7252 34.9986C24.6072 34.9986 23.8856 34.9971 22.0617 34.0483C22.0617 34.0483 20.88 32.9669 18.1145 33.078C15.3232 32.9676 14.1407 34.0619 14.1407 34.0619C12.3168 35.01 11.621 35 10.5045 35C7.96827 35 6.08422 33.7724 6.08422 31.2362C6.08422 29.9527 6.78008 28.7237 8.25134 26.4046C8.25134 26.4046 11.0326 21.7859 13.4427 19.613C15.1841 18.045 17.7232 18.0507 17.7232 18.0507H18.5065C18.5065 18.0507 21.1566 18.0436 22.7891 19.613C25.1246 21.8647 27.9783 26.4039 27.9783 26.4032ZM11.9184 14.962C14.57 14.962 16.7192 11.6124 16.7192 7.48101C16.7192 3.34958 14.57 0 11.9184 0C9.26682 0 7.11762 3.34958 7.11762 7.48101C7.11762 11.6124 9.26682 14.962 11.9184 14.962ZM7.31756 22.2073C9.27184 21.305 9.71759 18.1059 8.31226 15.0616C6.90693 12.0173 4.18369 10.2802 2.22941 11.1817C0.275137 12.0833 -0.169897 15.2831 1.23472 18.3274C2.64005 21.3716 5.36328 23.1081 7.31756 22.2073ZM23.0801 14.962C25.7316 14.962 27.8816 11.6124 27.8816 7.48101C27.8816 3.34958 25.7316 0 23.0801 0C20.4285 0 18.2793 3.34958 18.2793 7.48101C18.2793 11.6124 20.4285 14.962 23.0801 14.962ZM32.7698 11.181C30.8148 10.2788 28.0922 12.0159 26.6869 15.0609C25.2816 18.1059 25.7273 21.305 27.6823 22.2073C29.6373 23.1088 32.3598 21.3716 33.7652 18.3274C35.1705 15.2831 34.7248 12.0833 32.7698 11.181Z"
                                            fill="#030104" />
                                    </svg>
                                    <?php pll_e('Read more') ?>
                                </a>
                            </button>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else:
                echo '<p>No posts found.</p>';
            endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>