<?php get_header(); ?>



<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div id="mycarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="item active">
        <img src="<?php the_field('featured_image'); ?>" class="img-responsive"/>
           <div class="carousel-caption">
           <h2><?php the_title(); ?> </h2>
           </div>
        </div>
    </div>
</div>



<div class="post-content col-md-12">
            
<p class="intro">
 <?php the_field('introduction');?>           
</p>
            <?php the_content(); ?>
</div>

<?php  endwhile; endif;?>

<?php get_footer(); ?>