<!doctype html>
<head>	
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php if ( is_404() ) : ?> | <?php _e('Not Found') ?><?php elseif ( is_front_page() ) : ?><?php bloginfo('name') ?> | <?php bloginfo('description') ?><?php else : ?>  <?php wp_title() ?><?php endif ?></title>
<?php wp_head();?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Google fonts -->

<!--<link href='https://fonts.googleapis.com/css?family=Muli:400,300italic,300,400italic' rel='stylesheet' type='text/css'>-->

<link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_directory')?>/images/favicon.png" />

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KPM9H92L');</script>
<!-- End Google Tag Manager -->


<meta name="facebook-domain-verification" content="5aodv2g9td0limfrde1inee8n2gcmc" />

</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KPM9H92L"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<section class="container-fluid main">

<header class="main-head">


<?php
global $woocommerce;

// get cart quantity
$qty = $woocommerce->cart->get_cart_contents_count();

// get cart total
$total = $woocommerce->cart->get_cart_total();

// get cart url
$cart_url = $woocommerce->cart->get_cart_url();
$shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
// if multiple products in cart
if($qty>=1)
      echo '<div class="cart-infos"><i class="ion-bag"></i> <a href="'.$cart_url.'"> MON PANIER ('.$qty.')</a></div>';


?>
<?php twitter_bootstrap_menu(); ?>
<div class="container container-branding">
              <h1><a class="brand" href="<?php echo home_url(); ?>"> <img src="<?php bloginfo('template_directory'); ?>/images/logo-calvez-bobi.png" class="img-responsive" width = "220" height="220"/></a></h1>
</div>

    <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-default " role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>


<?php

$defaults = array(
	'theme_location'  => 'header-menu',
	'menu'            => '',
	'container'       => 'div',
	'container_class' => 'navbar-collapse collapse',
	'container_id'    => '',
	'menu_class'      => 'menu',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

// wp_nav_menu( $defaults );

?>


          </div>
        </nav>
      </div>
    </div>
    </header>
      