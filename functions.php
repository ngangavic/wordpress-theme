<?php

function load_stylesheets(){
    wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');
    $dependencies = array('bootstrap');
    wp_enqueue_style('stylesheet');
    wp_enqueue_style( 'wordpress-theme-style', get_stylesheet_uri(), $dependencies );
}


//add_action('wp_enqueue_scripts','load_stylesheets');
add_action( 'wp_enqueue_scripts', 'load_stylesheets' );
//add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );

