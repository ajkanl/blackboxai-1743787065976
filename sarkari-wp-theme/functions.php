<?php
function sarkari_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu')
    ));
}
add_action('init', 'sarkari_menus');

function sarkari_scripts() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
    wp_enqueue_script('tailwind', 'https://cdn.tailwindcss.com', array(), null, true);
}
add_action('wp_enqueue_scripts', 'sarkari_scripts');

// Enable featured images
add_theme_support('post-thumbnails');

// Custom image sizes
add_image_size('job-thumbnail', 300, 200, true);