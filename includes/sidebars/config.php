<?php

/**
 * Register our sidebars and widgetized areas.
 *
 */
function my_widgets_init()
{

	register_sidebar(array(
		'name' => 'Homepage sidebar',
		'id' => 'homepage_sidebar',
		'before_widget' => '<div class=" col-md-4 col-lg-4 col-sm-4 col-xs-4 grow">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="sidebar-widget-title">',
		'after_title' => '</h3><div class="sidebar-widget-content">',
	));
	register_sidebar(array(
		'name' => 'Shop sidebar',
		'id' => 'shop_sidebar',
		'before_widget' => '<div class="sidebar-single-product col-md-12 col-lg-12 col-sm-12 col-xs-12 grow">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="sidebar-widget-title">',
		'after_title' => '</h3><div class="sidebar-widget-content">',
	));
}
add_action('widgets_init', 'my_widgets_init');
