<?php



/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() { 
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;
 
function iso_list_menu($format='none'){
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    if(!empty($languages)){
        $iso_lang_menu = NULL;
            foreach($languages as $l){
                switch($format){
                    case 'ucwords':
                        $lang_label = ucwords($l['language_code']);
                    break;
                    case 'strtoupper':
                        $lang_label = strtoupper($l['language_code']);
                    break;
                    default:
                        $lang_label = $l['language_code'];
                    break;
                }
 
                $iso_lang_menu .= "<a href='".$l['url']."'>" . $lang_label . "</a>";
                $iso_lang_menu .= ' ';  //used as spacer
            }
    }
return $iso_lang_menu;
}

//function definition in functions.php of theme
function twitter_bootstrap_menu(){
    echo '
    <ul id="" class="nav pull-right language-switcher">
     <li class="dropdown menu-item">  
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">'.strtoupper(ICL_LANGUAGE_CODE).' <span style="display:inline-block;font-size:0.5em;top:-5px;">&#9660; </span></a>
       <ul class="dropdown-menu">';
        
        $languages = icl_get_languages('skip_missing=0&orderby=code');
        if(!empty($languages)){
                foreach($languages as $l){   
                    echo ($l['active'] == 0 ? "<li><a href='".$l['url']."'>" . strtoupper($l['language_code']) ."</a></li>" : NULL);
                }
        }   
    echo '
       </ul>
     </li>
    </ul>
    ';
}
 
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
  register_nav_menu('cuvee-colors', 'Couleurs des cuvees');
  register_nav_menu('shop-colors', 'Catégories de produits');
}
add_action( 'init', 'register_my_menus' );
