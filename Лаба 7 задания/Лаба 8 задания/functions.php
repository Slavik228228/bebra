<?php
function theme_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

function theme_enqueue_scripts() {
    wp_enqueue_script('script', get_template_directory_uri() . '/script.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
?>