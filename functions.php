<?php
add_action('wp_enqueue_scripts', 'engel_scripts');

function engel_scripts() {
    wp_enqueue_style('engel-style', get_stylesheet_uri());
}
?>