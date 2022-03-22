<?php


function icecream_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'icecream_theme_support');

function icecream_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('icecream-style', get_template_directory_uri()."/style.css", array('icecream-fontawesome','icecream-bootstrap'), $version, 'all');
    wp_enqueue_style('icecream-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array('icecream-bootstrap'), $version, 'all');
    wp_enqueue_style('icecream-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'icecream_register_styles');

function icecream_register_scripts(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('icecream-main', get_template_directory_uri()."/assets/js/main.js", array('icecream-jquery','icecream-popper','icecream-bootstrap'), $version, true);
    wp_enqueue_script('icecream-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), $version, true);
    wp_enqueue_script('icecream-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array('icecream-jquery'), $version, true);
    wp_enqueue_script('icecream-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array('icecream-jquery'), $version, true);
}

add_action('wp_enqueue_scripts', 'icecream_register_scripts');


function icecream_menu(){
    $locations = array(
        'primary' => "Primary Left sidebar",
        'footer' => "Footer Menu"
    );

    register_nav_menus($locations);
}
add_action('init', 'icecream_menu');
