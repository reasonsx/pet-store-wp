<?php get_header(); // Include the header ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); // This function outputs the necessary head elements including stylesheets ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
    <title><?php wp_title(); ?></title>
</head>
<body>
    <div class="dog-svg">
        <svg width="87" height="83" viewBox="0 0 87 83" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <ellipse cx="42.5116" cy="41.5" rx="40.5341" ry="41.5" fill="#FB9529"/>
            <rect y="12.1462" width="87" height="52.6341" fill="url(#pattern0_28_556)"/>
            <defs>
            <pattern id="pattern0_28_556" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image0_28_556" transform="matrix(0.00672211 0 0 0.0111111 0.197505 0)"/>
            </pattern>
            <image id="image0_28_556" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAE0UlEQVR4nO2dW4icNRTHf7t22621UsHLWooiXlDqo49CKVQtqxQvb4IiCPZBcBVERbFeaLVg6wWvpQ/ahy4KRa2iL4IIrgrWS9cXbXWt10q1WtdWbbvaSCRLx3VmvjMzyZeT78sPzsvMJDn5b2ZOku8kC5lMJpPJZDKZMLwDDAeqO9OAcfYcMNj4RiaM0NbeAOZ4rj/TRGhrz0y/kQkr9BFgiec2MvxfaGvvZWXKEbrIfgM+BO4BFgTwqZKYHu0r4PTYnaiD0AZ4K3YntHO5J6GtfQBcC8yK3SltzAe+9Sj0tH0JjADzYndQC48GELnRJoHHgEXUmAuAvwILPW0HgUeAAWrGMW5qZkq2ddSMWyKIbO0nasRpwP5IQu+lRrwSSWRrT1MTrooo8mHgDGrA/EBzZqnVZuv18dRHcz/6mQvsTHU0z3aj5BfgAPCEe02z2A+40VWmyIfcTKdrHm5S6Xr0cz4wVqLQVqeemGxS6WQiDzb7gBvctzHknPkhH9/yX1s0cBnpcAqwuUMBbQ5IqbzYZgPcjpgY9AErgE+AB93vsoSLgS+EQl9ByVzTxhm7F1sGc4CFwDLg/iZiTQCXCOuyf5Q1BcFyR4xZlu3knjaR1o6SmQy4JxpPuVFny/9dQkAaBYaE/VrcJliuJBI3tencFHCzGwGz3I7ZdyWIalrYPidUf5fBck8HP0XesQJuK+jgx8D2iAKbGTbmpnidBstVROZMt89qErLDbvHSSbA8EQWcB+xWIKDp4iHqchJjsUskMQnaqPuZSIbjgQ0KhDNdBsuRRDbJ/uUE99TXJGpjHQTLqNyoQCxTcrCMwssKhDKebEJzsNylQCDj2excWh37FAhjApg6Qu7xmiz0UaYUiGLqMKL/UCCKqYPQexWIYuog9NcKRDF1EPp9BaKYOghdpQWLcfYzCnlSgTAmwP6HOu5SIIzxbNejkOsUCGM82rtaU90uUiCO8WRva34gcKECgYwnU32K6soeOvZjiQ9BJf6oppdHWVeX6GfSQp/bQ/7x8yX7mqzQxwHjXYo8HuHcdJJC97XJLi2ybyLddZGk0Cu7FHk3cHYkn5MUerzLLKGz2tQ56Daovg/kc5JCdxoAtwGnFtS5qeHzRZ/thkMCP9Vd39OJyBsFtyXeO6PMpQF8/kzgq10TqEIi8O/CzZmRJmVDpMyOCnxeTYJCnyPc+TvSpOzWAD7fKvD5dZTRa2Dpc2cUW5W1JwV8s1Tgs83yr4zQ/cAWQXnpGRQpC1p8e2baoiqN6B8E5UMERMmRN3ucrjJCvyYoHyIgviBo186AKiP0fYLyIQLi7YJ2X6VCQq8QlA8REJcJ2g21Mo0i9JCwjqEApxMkATHEyjSK0LiRU1THcKR87hCBOJrQWwV13B3A9y2R2o0m9CpBHTYLyjd3Ctp9iQoJPSyowyZQ+ma5oF17fjKJ5HP7fhEnCzpsj9X55iRBu1MR7yD5DxMFjtoVmIQdBfXsjOS/XbmqYI2n7cY7Cuqx/7ggBGsL2rX3i6hgnrsuopmTHwHHCuuZDbzZ5i6juQGPVn/aot1d7mdNVbrBepdtNL3FuM693gmDwG3uhpo/gc/dSA59itVmSD3bcLz6oMs1UbNYaUYKV7K1YsA9K1R9PDmTyWQyGarAP0A5kW1nRAvfAAAAAElFTkSuQmCC"/>
            </defs>
        </svg>
        <h2>Dogs</h2>
    </div>
        
    <div class="blog-post-start">
        <h1 class="blog-post__title"><?php the_title(); ?></h1>
        <h2 class="blog-post__category"><?php the_category(); ?></h2>
        <p class="blog-post__info">
            <a href="#"><?php echo get_the_date(); ?></a> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
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

    <div class="introduction-container">
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>" width="550" height="400">
        <?php endif; ?>
        <p class="text-introduction"><?php the_content(); ?></p>
    </div>

    <div class="essential-care">
        <h2>Essential Care for Your Dog</h2>
        <div class="boxes-essential-care">
            <!-- Replace static content with dynamic WordPress fields if applicable -->
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
    </div>

<?php get_footer(); // Include the footer ?>
