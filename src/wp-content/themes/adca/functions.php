<?php

function adca_add_theme_scripts(){
    wp_enqueue_style ( 'style', get_stylesheet_uri() );
    wp_enqueue_style ( 'boostrap_css','https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css');
    wp_enqueue_script ( 'boostrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script ( 'jquery_js', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
    wp_enqueue_script ( 'popper_js', 'https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js');
    wp_enqueue_script ( 'boostrap4.1.3_js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js');
}

add_action('wp_enqueue_scripts', 'adca_add_theme_scripts');