<?php


add_action( 'wp_enqueue_scripts', 'my_load_styles' );



function my_load_styles()
{

wp_register_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '0.01', 'all' );   
wp_register_style( 'ion', '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css?ver=0.01', array(), '0.01', 'all' );
wp_register_style( 'quicksand', '//fonts.googleapis.com/css?family=Quicksand%3A400%2C300%2C700&ver=0.01', array(), '0.01', 'all' );
wp_register_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css?ver=0.01', array(), '0.01', 'all' );
wp_register_style( 'flexslider-css', get_template_directory_uri() . '/css/flexslider.css', array(), '0.01', 'all' );
wp_enqueue_style( 'main' );
wp_enqueue_style( 'bootstrap' );
wp_enqueue_style( 'ion' );
wp_enqueue_style( 'quicksand' );
wp_enqueue_style( 'flexslider-css' );

}

