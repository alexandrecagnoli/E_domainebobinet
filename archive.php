<?php
  get_header();
?>
<div class="container-fluid blog">
<section class="container popular">

<div class="post-content-intro">
</div>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php require 'includes/loops/loop-index.php'; ?>
 <?php endwhile; else: ?>
 <p>Sorry, no posts matched your criteria.</p>
 <?php endif; ?>


<div id="page-navigation">
 <?php posts_nav_link(' &#183; ', '<ion-icon name="arrow-back"></ion-icon> page précédente', 'page suivante <ion-icon name="arrow-forward"></ion-icon>'); ?>
 </div>

</div>
</div>
</section>




<?php get_footer(); ?>




