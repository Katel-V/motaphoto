<?php

function theme_motaphoto_support() {
    register_nav_menu('header', 'header-menu');
    register_nav_menu('footer', 'footer-menu');
}
add_action('after_setup_theme', 'theme_motaphoto_support');

add_theme_support('menus');  // permet la gestion des menus