<?php

function pixel_add_favicon(){ ?>
    <!-- Custom Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon.ico"/>
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png">
    <?php }
add_action('wp_head','pixel_add_favicon');


?>