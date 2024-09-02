<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"> -->

    <title>404 Error</title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="error-container">
        <h1>MIAUUUUUUUUUUUUUU</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/img/svg/error404.svg" alt="">
        <a href="<?php echo home_url(); ?>" class="btn">Go back</a>
    </div>
</body>
</html>