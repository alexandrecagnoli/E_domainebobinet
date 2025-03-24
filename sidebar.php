

    <div id="news-sidebar" class="horizontal-centered">
        <a href="" id="link-1">Catégories</a>
        <a href="" id="link-2">Archives par date</a>
        <a href="" id="link-3">Mots-clés</a>
        <a href="" id="link-4">Rechercher</a>
    </div>
</div>

<section id="news-menu" >
    <div class="toggle horizontal-centered" id="news-menu-1">

<?php $args = array(
	'show_option_all'    => '',
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'list',
	'show_count'         => 0,
	'hide_empty'         => 1,
	'use_desc_for_title' => 1,
	'child_of'           => 0,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => 1,
	'title_li'           => __( 'Categories' ),
	'show_option_none'   => __( 'No categories' ),
	'number'             => null,
	'echo'               => 1,
	'depth'              => 1,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'category',
	'walker'             => null
); ?>

<ul>
    <?php wp_list_cats($args);?>
</ul>
    </div>
    <div class="toggle horizontal-centered" id="news-menu-2">
<ul>
<?php $args = array(
	'type'            => 'monthly',
	'limit'           => '24',
	'format'          => 'html', 
	'before'          => '',
	'after'           => '',
	'show_post_count' => false,
	'echo'            => 1,
	'order'           => 'DESC'
); ?>

    <?php wp_get_archives($args);?>
</ul>
    </div>
    <div class="toggle horizontal-centered" id="news-menu-3">
    <?php wp_tag_cloud(); ?>
    </div>
    <div class="toggle horizontal-centered" id="news-menu-4">
    <?php get_search_form(); ?>
    </div>
</section>
<div class="clearfloat"></div>


