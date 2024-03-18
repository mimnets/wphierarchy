<?php
// Add theme support

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post_format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-referesh-widgets' );
add_theme_support( 'starter-content' );


// Load in our CSS
function wphierarchy_enqueue_styles() {

wp_enqueue_style( 'main-css', get_stylesheet_directory( ) . '/style.css', [], time(), 'all' );


}

add_action( 'wp_enqueue_script', 'wphierarchy_enqueue_styles' );




// Register Menu locations
function wphierarchy_register_nav_menu()
{
    register_nav_menu('primary', 'Primary Menu');
}
add_action('after_setup_theme', 'wphierarchy_register_nav_menu');





?>