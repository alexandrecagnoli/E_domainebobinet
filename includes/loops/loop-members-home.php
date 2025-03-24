<?php
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>
<li><a href="<?php the_permalink()?>"><?php the_title()?></a></li>
<?php endwhile; ?>