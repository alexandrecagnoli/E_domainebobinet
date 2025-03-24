<?php get_header(); ?>



<?php if(have_posts()) : while(have_posts()) : the_post(); ?>



<div id="mycarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="item active">
            <img src="<?php the_field('featured_image'); ?>" class="img-responsive"/>
            <div class="carousel-caption">
                <h2><?php the_title(); ?> </h2><br/>
            </div>
            <div class="scroll-container">
                <p class="scroll-down">scroll down</p>
                <div class="scroll-arrow"></div>
            </div>
        </div>
    </div>
</div>




<?php if(get_field('introduction') && get_field('introduction') != "" ) : ?>
    <div class="post-content-intro">
        <div class="container">         
            <p class="intro"><?php the_field('introduction');?></p>
        </div>
    </div>
<?php endif; ?>


    <div class="container post-content">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <?php the_content(); ?>
        </div>
    </div>
<?php if(get_field('showcase_image') && get_field('showcase_image') != "" ) : ?>
    <div class="container-fluid nopadding" style="background:url(<?php the_field('showcase_image');?>) no-repeat top fixed; -webkit-background-size: cover;  background-size: cover;">
        <div class="container-fluid overlay">
<div class="container">
            <?php the_field('showcase_text');?>
</div>
        </div>
    </div>
<?php endif; ?>


<?php  endwhile; endif;?>






</div>
<?php get_footer(); ?>