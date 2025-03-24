<?php

$i=1;
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>

<?php if ($i==1) : ?>
<div class="post-content col-md-lg col-md-12 col-sm-12 col-xs-12 nopadding product">
        <div class="post-content-img col-md-4 col-lg-4 col-sm-6 col-xs-12">
        <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
    </div>
        <div class="post-content-desc col-md-8 col-lg-8 col-sm-6 col-xs-12 nopaddingtop">
        <h3><?php the_title();?></h3>
        <p><?php the_content();?></p>
        <?php if(get_field('fiche_technique')) { ?>
	    <a href="<?php the_field('fiche_technique')?>" target ="_blank" class="download-link">Télécharger la fiche technique</a>
        <?php } ?>
    </div>
</div>
<?php $i=0 ; ?>

<?php else : ?>

<div class="post-content col-md-lg col-md-12 col-sm-12 col-xs-12 nopadding product alt">
        <div class="post-content-img col-md-4 col-lg-4 col-sm-6 col-xs-12">
        <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
    </div>
        <div class="post-content-desc col-md-8 col-lg-8 col-sm-6 col-xs-12 nopaddingtop">
        <h3><?php the_title();?></h3>
        <p><?php the_content();?></p>
        <?php if(get_field('fiche_technique')) { ?>
	<a href="<?php the_field('fiche_technique')?>" target ="_blank" class="download-link">Télécharger la fiche technique</a>
        <?php } ?>
    </div>
</div>
<?php $i=1 ; ?>
<?php endif; ?>


<?php endwhile; ?>