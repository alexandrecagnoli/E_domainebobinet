<?php
/*
Template Name: Revendeurs
*/

?>

<?php get_header(); ?>
   <div class="container-fluid intro">
<div class="container">
<p>
<?php if( get_field('introduction') ):  the_field('introduction'); endif; ?>         
</p></div>
   </div>



<div class="container">

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="post-content col-md-12">

            <?php the_content(); ?>
</div>

<?php  endwhile; endif;?>
</div>
<?php get_footer(); ?>