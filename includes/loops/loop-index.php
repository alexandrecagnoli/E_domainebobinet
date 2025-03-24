<?php
$flag;
if (!isset($flag))
{
    $flag=true;
}

?>

 <article class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 img-box">
        <a href="<?php the_permalink();?>"> <?php the_post_thumbnail("index-thumb", array( 'class' => 'img-responsive' ) ); ?></a>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
      <header>
       <time pubdate="pubdate"><?php the_time('j M Y') ?></time> // <?php the_category(' '); ?>
      </header>
        <h2><a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h2>
        <p><?php the_excerpt();?></p>
        <a href="<?php the_permalink();?>" class="readmore-link">Lire la suite &#8594;</a>
      <footer>
       <?php the_tags( '#', ' #', '' ); ?> 
      </footer>
    </div>
</article>



<?php

if ($flag == false)
{
    $flag=true;
}


else
{

    $flag=false;
}

?>