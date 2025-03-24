<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );
add_theme_support( 'woocommerce' );


function myCurrentUrl()
{
    global $wp;
    $current_url = add_query_arg( '', '', home_url( $wp->request ) );
    return $current_url;
}

add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');

function posts_link_attributes_1() {
    return 'class="next-post"';
}
function posts_link_attributes_2() {
    return 'class="prev-post"';
}

function SearchFilter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}

add_filter('pre_get_posts','SearchFilter');

/*
add_filter ('the_content', 'royal_woocommerce_maintenance');
function royal_woocommerce_maintenance($content) {
   if( is_woocommerce() or is_shop() or is_product_category() or is_product() or is_cart() or is_checkout() or is_account_page() ) {
      $content.= '<div style="border:1px dotted #000; text-align:center; padding:10px;">';
      $content.= '<h4>We will be back soon</h4>';
      $content.= '<p>We are down for maintenance, please check back soon.</p>';
      $content.= '</div>';
   }
   return $content;

*/