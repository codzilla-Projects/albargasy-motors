<?php  

define('albargasy_ROOT', get_stylesheet_directory().'/');



define('albargasy_URL', get_stylesheet_directory_uri() .'/');



define('albargasy_ADMIN', admin_url());



define('albargasy_BlogUrl', get_bloginfo('url'));



remove_filter( 'the_content', 'wpautop' );



remove_filter( 'the_excerpt', 'wpautop' );






require_once( albargasy_ROOT . '/lib/albargasy_enqueue_scripts.php' );



require_once( albargasy_ROOT . '/lib/albargasy_theme_init.php' );



require_once( albargasy_ROOT . '/lib/albargasy_functions.php');


require_once( albargasy_ROOT . '/lib/albargasy_meta_fields.php');


require_once( albargasy_ROOT . '/lib/albargasy_taxonomy_terms.php');



require_once( albargasy_ROOT . '/lib/wp_bootstrap_navwalker.php');



register_nav_menus();





function albargasy_menu() {



wp_nav_menu( array(
        'menu'              => 'Main Menu',
        'container'         => '',
        'theme_location'    => 'main-menu',
        'menu_class'        => 'navbar-nav mr-auto',
        'depth'             => 3,
        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        'walker'            => new wp_bootstrap_navwalker()
        )

    );

}



function albargasy_menu_arabic() {



wp_nav_menu( array(
        'menu'              => 'Main Menu Arabic',
        'container'         => '',
        'theme_location'    => 'main-menu',
        'menu_class'        => 'navbar-nav mr-auto',
        'depth'             => 3,
        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        'walker'            => new wp_bootstrap_navwalker()
        )

    );

}


function wti_remove_autop_for_image( $content ){

    global $post;

    // Check for single page and image post type and remove

    if ( is_single() && $post->post_type == 'service' )

        remove_filter('the_content', 'wpautop');

    return $content;

}

remove_filter( 'the_content', 'wpautop' );

remove_filter( 'the_excerpt', 'wpautop' );
/*Contact form 7 (Remove p tag and span tag)*/


add_filter('wpcf7_autop_or_not', '__return_false');
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

/*Remove Title TO Anchor Tag Menu*/

function my_menu_notitle( $menu ){

  	return $menu = preg_replace('/ title=\"(.*?)\"/', '', $menu );

}



add_filter( 'wp_nav_menu', 'my_menu_notitle' );



add_filter( 'wp_page_menu', 'my_menu_notitle' );



add_filter( 'wp_list_categories', 'my_menu_notitle' );



/*Add Footer Widget*/



function albargasy_widgets_init() {



  register_sidebar( array(



    'name'          => 'First Sidebar Column',



    'id'            => 'first_sidebar',



    'before_widget' => '<div>',



    'after_widget'  => '</div>',



  ));



}



add_action( 'widgets_init', 'albargasy_widgets_init' );







function albargasy_second_widgets_init() {



  register_sidebar( array(



    'name'          => 'Second Sidebar Column',



    'id'            => 'second_sidebar',



    'before_widget' => '<div>',



    'after_widget'  => '</div>',



  ));



}



add_action( 'widgets_init', 'albargasy_second_widgets_init' );



function albargasy_load_theme_textdomain() {

    load_theme_textdomain( 'albargasy', get_template_directory() . '/languages' );

}

add_action( 'after_setup_theme', 'albargasy_load_theme_textdomain' );



function change_footer_admin() {

  echo '<span id="footer-thankyou">Powered by <a href="https://codzilla.net/" target="_blank">Codezilla</a></span>';

}

add_filter('admin_footer_text', 'change_footer_admin');

