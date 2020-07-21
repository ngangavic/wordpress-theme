<?php

function load_stylesheets(){
    wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');
    wp_register_style('style',get_template_directory_uri().'/style.css');
    $dependencies = array('bootstrap');
//    wp_enqueue_style('stylesheet');
    wp_enqueue_style( 'wordpress-theme-style', get_stylesheet_uri(), $dependencies );
}

add_action( 'wp_enqueue_scripts', 'load_stylesheets' );
//add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );

function load_js(){
    $dependencies=array('jquery');
    wp_register_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js', $dependencies, '3.3.6', true);

    wp_enqueue_style('bootstrap');
}

add_action( 'wp_enqueue_scripts', 'load_js' );

add_theme_support('menus');

register_nav_menus(
    array(
  'top-menu'=>__('Top Menu',"theme"),
  'footer-menu'=>__('Footer Menu',"theme")
    )
);