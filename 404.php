<?php get_header(); ?>


<?php 
    require_once('includes/menus/breadcrumbs.php'); // fil d'ariane
?>


<div id="container">

  <div class="content">
  <h2 class="page-title">La page demandée n'est plus disponible  !</h2>
  <p class="page-subtitle">Nous vous prions de bien vouloir nous excuser pour ce désagrément.</p>
  <nav id="error404-menu-container"><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></nav>
  </div>
</div>
<?php get_footer(); ?>

