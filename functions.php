<?php 

function buildingblocks_theme_setup(){
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
}

function buildingblocks_theme_scripts(){
    wp_enqueue_style('buildingblocks-style', get_stylesheet_uri());
}

add_action('after_setup_theme', 'buildingblocks_theme_setup');
add_action('wp_enqueue_scripts', 'buildingblocks_theme_scripts');


?>