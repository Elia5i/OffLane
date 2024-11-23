<?php

// Enqueue theme styles and scripts
function my_custom_theme_enqueue_styles() {
    // Enqueue main style.css
    wp_enqueue_style( 'my-custom-theme-style', get_stylesheet_uri() );

    // Optionally, you can enqueue other scripts or styles
    // wp_enqueue_script( 'my-custom-theme-js', get_template_directory_uri() . '/js/custom-script.js', array(), null, true );
}

add_action( 'wp_enqueue_scripts', 'my_custom_theme_enqueue_styles' );


function offlane_theme_support(){
    add_theme_support('title_tag');
}
add_action('after_setup_theme', 'offlane_theme_support');

function offlane_menus(){
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );
    register_nav_menus($locations);
}
add_action('init', 'offlane_menus');

function offlane_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('offlane-style', get_template_directory_uri() . "/style.css", array('offlane-bootstrap'), $version, 'all');
    wp_enqueue_style('offlane-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('offlane-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}
add_action('wp_enqueue_scripts', 'offlane_register_styles');

function offlane_register_scripts() {
  wp_enqueue_script('offlane-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
  wp_enqueue_script('offlane-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
  wp_enqueue_script('offlane-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
}
add_action('wp_enqueue_scripts', 'offlane_register_scripts');
?>
