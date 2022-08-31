<?php
add_action('wp_enqueue_scripts', 'engel_styles');
add_action('wp_enqueue_scripts', 'engel_scripts');

function engel_styles() {
    wp_enqueue_style('engel-style', get_stylesheet_uri());
}

function engel_scripts() {
    wp_enqueue_script('engel-scripts', get_template_directory_uri().'/assets/js/app.min.js', array(), null, true);
}
?>