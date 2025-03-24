<?php
/*
Template Name: Accueil
*/

?>

<?php get_header(); ?>

<div id="page-wrapper" class="horizontal-centered">

            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div id="mycarousel" class="carousel slide" data-ride="carousel">
            <!-- Place somewhere in the <body> of your page -->
            <div class="flexslider">
              <ul class="slides">
                        <?php
                        if( have_rows('slideshow') ):
                        while ( have_rows('slideshow') ) : the_row();
                        $visuel = get_sub_field('slideshow_item');
                        echo "<li><img src='".$visuel['url']."' /></li>";
                        endwhile;
                        else :
                        echo "Pas de visuels";
                        endif;
                        ?>
              </ul>
            </div>
            <div class="scroll-container">
                        <p class="scroll-down">scroll down</p>
            <div class="scroll-arrow">
</div></div>
</div>


<div class="post-content-intro">
<div class="container">         
<p class="intro">
<?php the_field('introduction');?>           
</p>
</div>
</div>

<div class="container post-content">
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
<?php the_content(); ?>
</div>
</div>

<?php if(get_field('showcase_image') && get_field('showcase_image') != "" ) : ?>
    <div class="container-fluid nopadding" style="background:url(<?php the_field('showcase_image');?>) no-repeat center fixed; -webkit-background-size: cover;  background-size: cover;">
        <div class="container-fluid overlay showcase">
<div class="container">
            <?php the_field('showcase_text');?>
</div>
        </div>
    </div>
<?php endif; ?>



<?php  endwhile; endif;?>
<?php /* ?>
<div class="sidebar-wrapper">
            <div class="container">
                        <?php dynamic_sidebar('homepage_sidebar'); ?>
            </div>
</div>
<?php */ ?>
</div>
<?php get_footer(); ?>

<script>
$( document ).ready(function() {

// Can also be used with $(document).ready()
$(window).load(function() {
jQuery('.flexslider').flexslider({
 randomize : true,
 animation: "fade",
 controlNav: false,
 directionNav: false,
 easing:"swing",
 slideshowSpeed: 4000, //speed of the slideshow cycling, in milliseconds
 animationSpeed: 2000, //Integer: Set the speed of animations, in milliseconds
  });
});
});
</script>