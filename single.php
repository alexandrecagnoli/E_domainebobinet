<?php
  get_header();
?>
<div class="container-fluid">
<section class="container popular">
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php require 'includes/loops/loop-single.php'; ?>
 <?php endwhile; else: ?>
 <p>Sorry, no posts matched your criteria.</p>
 <?php endif; ?>


<div id="page-navigation">
 <?php posts_nav_link(' &#183; ', 'page précédente', 'page suivante'); ?>
 </div>

</div>
</div>
</section>




<?php get_footer(); ?>


