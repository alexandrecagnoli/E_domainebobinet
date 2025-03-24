<?php get_header(); ?>

<div id="page-wrapper" class="horizontal-centered">
            <div class="container">
<?php if ( is_singular( 'product' ) ) {
     woocommerce_content();
  }else{
   //For ANY product archive.
   //Product taxonomy, product search or /shop landing
    woocommerce_get_template( 'archive-product.php' );
  } ?>
            </div>
</div>
<?php get_footer(); ?>