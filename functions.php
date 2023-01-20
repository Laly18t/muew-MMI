<?php

function add_style() {
  wp_enqueue_style('app', get_template_directory_uri().'/css/app.css', array(), 1, 'all');
}
add_action( 'wp_enqueue_scripts', 'add_style' );


add_theme_support("menus");

function register_my_menus(){
    register_nav_menus(
        array(
            'main_menu'=> __('Menu principal'),
        )
    );
}
add_action( 'init', 'register_my_menus');

?>