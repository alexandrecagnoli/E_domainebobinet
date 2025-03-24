<?php
/*
Template Name: Cuv�es
*/

?>
<?php get_header(); ?>



<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div id="mycarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="item active">
        <img src="<?php the_field('featured_image'); ?>" class="img-responsive"/>
           <div class="carousel-caption">
           <h2><?php the_title(); ?> </h2>
           </div>
<div class="scroll-container">
<p class="scroll-down">scroll down</p>
<div class="scroll-arrow">
        </div>
    </div>
</div>

<div class="post-content-intro">
   <div class="container">         
<p class="intro">
 <?php the_field('introduction');?>           
</p>
   </div>
</div>


<div class="container">


        
            <?php the_content(); ?>

<?php  endwhile; endif;?>

    <?php $args = array( 'post_type' => 'cuvee', 'posts_per_page' => 100, 'orderby' => 'date', 'order'=>'DESC');?>
    <?php require 'includes/loops/loop-cuvees.php'; ?>

</div>


<?php get_footer(); ?>