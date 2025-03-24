<?php
  if(!isset($_GET['ajax'])) :
  get_header();
?>


<div id="news-head">
    <h2><?php single_cat_title(); ?></h2>
<?php get_sidebar(); ?>


<div id="news-wrapper" class="horizontal-centered">
<section id="content-container">

<?php endif; ?>
<!-- CONTENU AJAX -->

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php require 'includes/loops/loop-actu-index.php'; ?>
 <?php endwhile; else: ?>
 <p>Sorry, no posts matched your criteria.</p>
 <?php endif; ?>

<!-- END AJAX -->

<?php if(!isset($_GET['ajax'])) : ?>
</section>

<div id="page-navigation">
 <?php posts_nav_link(' &#183; ', '<ion-icon name="arrow-back"></ion-icon> page précédente', 'page suivante <ion-icon name="arrow-forward"></ion-icon>'); ?>
 </div>

</div>



<?php get_footer(); ?>
<?php endif; ?>

