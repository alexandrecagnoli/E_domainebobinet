<?php
$flag;
if (!isset($flag))
{
    $flag=true;
}

?>






 <article class="col-lg-12">
      <header>
       <time pubdate="pubdate"><?php the_time('j M Y') ?></time> // <?php the_category(' '); ?>
      </header>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content();?></p>
      <footer>
      <!--  <p>Publié le : <time pubdate="pubdate">2009-10-09</time> par Sabine Chabbert</p>-->
      </footer>

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