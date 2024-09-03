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

    <!-- <div class="essential-care">
        <h2>Essential Care for Your Dog</h2>
        <div class="boxes-essential-care">
            // Replace static content with dynamic WordPress fields if applicable 
            <div class="nutrition">
                <h3>Nutrition</h3>
                <p>One of the most critical aspects of dog care is providing a balanced and nutritious diet. High-quality commercial dog food that meets your dog's age, size, and health needs is essential. Consult your vet to choose the right food and establish a feeding schedule. Don’t forget about fresh water – your dog should have access to clean water at all times.</p>
            </div>

            <div class="veterinary">
                <h3>Regular Veterinary Care</h3>
                <p>Routine veterinary check-ups are crucial for maintaining your dog’s health. Regular visits allow the vet to monitor your dog's overall health, administer vaccinations, and prevent diseases. Annual or bi-annual exams should be a standard part of your dog's healthcare routine.</p>
            </div>

            <div class="grooming">
                <h3>Grooming and Hygiene</h3>
                <p>Grooming isn't just about keeping your dog looking good; it's essential for their health, too. Regular brushing helps reduce shedding, prevents matting, and can detect skin issues early. Depending on the breed, you might need to invest in professional grooming services for baths, haircuts, and nail trims.</p>
            </div>
        </div>
    </div>

    <div class="necessary-investments">
        <h2>Necessary Investments for Your Dog</h2>
        <div class="boxes-necessary-investments">
            <div class="food">
                <h3>Quality Food and Bowls</h3>
                <p>A crate is a valuable tool for training and providing a safe space for your dog. Choose a crate that's large enough for your dog to stand up, turn around, and lie down comfortably. Crates can also be used for travel and can help with housebreaking.</p>
            </div>

            <div class="beds">
                <h3>Comfortable Bed and Crate</h3>
                <p>A good dog bed provides a cozy place for your pet to rest. Crates serve as safe havens and are useful for house training. Choose a crate that’s appropriately sized for your dog, giving them enough room to stand up, turn around, and lie down comfortably.</p>
            </div>

            <div class="leashes">
                <h3>Leashes, Collars, and Harnesses</h3>
                <p>A sturdy leash and a comfortable collar or harness are essential for walks and outings. Ensure that your pet’s ID tag and microchip information are up-to-date with your contact details.</p>
            </div>

            <div class="healthcare">
                <h3>Healthcare Products</h3>
                <p>Your dog will need various healthcare products, including flea and tick prevention, heartworm medication, and dental care items. Regular brushing of your dog’s teeth with vet-approved toothpaste helps prevent dental diseases and bad breath.</p>
            </div>
        </div>
    </div>

    <div class="conclusion">
        <div class="text-conclusion">
            <div class="title-conclusion">
                <h2>Conclusion</h2>
                <p>Taking care of a dog involves more than just feeding and walking them. It requires a commitment to their overall well-being through proper nutrition, regular veterinary care, grooming, training, and the right investments in their health and happiness. Toys play a significant role by providing mental and physical stimulation, ensuring your dog remains active and content. <br> Remember, the love and joy you receive in return make every effort worthwhile. If you have tips or experiences in caring for your dog that you'd like to share, feel free to leave a comment below!</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/womendog.png" alt="womendog" width="550" height="400">
        </div>
    </div> -->

<?php get_footer(); // Include the footer ?>
