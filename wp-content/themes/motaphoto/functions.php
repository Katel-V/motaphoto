<?php

// les menus
function theme_motaphoto_support() {
    register_nav_menu('header', 'header-menu');
    register_nav_menu('footer', 'footer-menu');
}
add_action('after_setup_theme', 'theme_motaphoto_support');

add_theme_support('menus');  // permet la gestion des menus

function enqueue_custom_styles() {
    wp_enqueue_style('custom-theme', get_template_directory_uri() . 'assets/theme.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

function enqueue_custom_scripts() {
    wp_enqueue_script('modal-script', get_template_directory_uri() . 'js/modal-script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');