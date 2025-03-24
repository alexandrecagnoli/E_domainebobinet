<?php

function my_load_scripts()
{

        wp_deregister_script( 'jquery' );   // Fix bug
        
        
        wp_register_script( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js','','3.3.2');
        wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js','','1.11.1');
        wp_register_script('main', get_template_directory_uri() . '/scripts/main.js', array('jquery'), '0.01', true );
        wp_register_script('flexslider', get_template_directory_uri() . '/scripts/plugins/jquery.flexslider-min.js', array('jquery'), '2.6.3', true );

        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'bootstrap' );
        wp_enqueue_script( 'flexslider' );
        wp_enqueue_script( 'main' );


}



if (!is_admin()) add_action("wp_enqueue_scripts", "my_load_scripts", 11);