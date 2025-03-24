<article>
      <header>
        <h2> <?php the_title(); ?></h2>
      </header>
    <div class="post-content">

<?php the_content();?>
    </div>

      <footer>
           <h3>Infos Société</h3></br>
            <p><?php the_field('members_adresse');?></br>
               Téléphone : <strong><?php the_field('members_phone');?></strong></br>
                Email : <strong><?php the_field('members_email');?></strong></br>
                <a href="<?php the_field('members_site');?>" target="_blank">Visiter le site web</br>
            </p>
            <?php the_post_thumbnail();?>
      </footer>


</article>