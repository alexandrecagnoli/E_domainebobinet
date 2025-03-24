<?php
/*
Template Name: Contact
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
            <br/>
            </div>

<div class="scroll-container">
<p class="scroll-down">scroll down</p>
<div class="scroll-arrow">
           </div>
</div>
            </div>

        </div>
    </div>
</div>
            <div class="container-fluid nopadding">
                  <div class="map-overlay" onClick="style.pointerEvents='none'"></div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2708.5897027150218!2d-0.03585798438201634!3d47.244170979162305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4807f65090a2e147%3A0x87c7ce25f517c7d7!2s315+Route+de+Montsoreau%2C+49400+Saumur!5e0!3m2!1sfr!2sfr!4v1459432884028" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>


            <div class="container post-content">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <?php the_content(); ?>
                        </div>
</div>
<?php  endwhile; endif;?>
            <div class="container">

            </div>
<?php /* ?>
<div class="sidebar-wrapper">
            <div class="container">
                        <?php dynamic_sidebar('homepage_sidebar'); ?>
            </div>
</div>
<?php */ ?>

</div>
<?php get_footer(); ?>