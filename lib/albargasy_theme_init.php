<?php
add_theme_support('post-thumbnails'); 
add_action( 'init', 'albargasy_custom_post_types' );
function albargasy_custom_post_types() {
$cpts = [
    array(
        'single'   => 'Sliders',
        'plural'   => 'Sliders',
        'cptname'  => 'slider',
        'icon'     => 'dashicons-slides',
        'supports' => ["title","editor","thumbnail"],
        'show_in_menu'=> true,
        'position' => 4
        ),
    array(
        'single'   => 'Vechiles',
        'plural'   => 'Vechiles',
        'cptname'  => 'vechile',
        'icon'     => 'dashicons-car',
        'supports' => ["title","thumbnail"],
        'show_in_menu'=> true,
        'position' => 5
    ),
    array(
        'single'   => 'Services',
        'plural'   => 'Services',
        'cptname'  => 'service',
        'icon'     => 'dashicons-admin-multisite',
        'supports' => ["title","editor","thumbnail","excerpt"],
        'show_in_menu'=> true,
        'position' => 6
        ),
    array(
        'single'   => 'Awards',
        'plural'   => 'Awards',
        'cptname'  => 'award',
        'icon'     => 'dashicons-awards',
        'supports' => ["title","editor","thumbnail","excerpt"],
        'show_in_menu'=> true,
        'position' => 7
    ),
    array(
        'single'   => 'Directors',
        'plural'   => 'Directors',
        'cptname'  => 'director',
        'icon'     => 'dashicons-businessman',
        'supports' => ["title","editor","thumbnail"],
        'show_in_menu'=> true,
        'position' => 8
        ),
    array(
        'single'   => 'Careers',
        'plural'   => 'Careers',
        'cptname'  => 'career',
        'icon'     => 'dashicons-pressthis',
        'supports' => ["title","thumbnail",],
        'show_in_menu'=> true,
        'position' => 9
    ),
    array(
        'single'   => 'About Sliders',
        'plural'   => 'About Sliders',
        'cptname'  => 'about-slider',
        'icon'     => 'dashicons-slides',
        'supports' => ["title","thumbnail","excerpt"],
        'show_in_menu'=> true,
        'position' => 10
    ),
 ];
foreach ($cpts as $cpt) {
    $labels = array(
        'name'                  => _x( $cpt['single'], 'Post Type General Name', 'albargasy' ),
        'singular_name'         => _x( $cpt['single'], 'Post Type Singular Name', 'albargasy' ),
        'menu_name'             => __( $cpt['plural'], 'albargasy' ),
        'all_items'             => __( 'All '.$cpt['plural'], 'albargasy' ),
        'add_new_item'          => __( 'Add New '.$cpt['single'] , 'albargasy' ),
        'add_new'               => __( 'Add New', 'albargasy' ),
        'new_item'              => __( 'New '.$cpt['single'], 'albargasy' ),
        'edit_item'             => __( 'Edit '.$cpt['single'], 'albargasy' ),
        'update_item'           => __( 'Update '.$cpt['single'], 'albargasy' ),
        'view_item'             => __( 'View '.$cpt['single'], 'albargasy' ),
        'search_items'          => __( 'Search '.$cpt['plural'], 'albargasy' ),
        'not_found'             => __( 'Not found', 'albargasy' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'albargasy' ),
        'featured_image'        => __( 'Featured Image', 'albargasy' ),
        'set_featured_image'    => __( 'Set featured image', 'albargasy' ),
        'remove_featured_image' => __( 'Remove featured image', 'albargasy' ),
        'use_featured_image'    => __( 'Use as featured image', 'albargasy' ),
      );

    $args = array(
        'label'                 => __( $cpt['plural'], 'albargasy' ),
        'description'           => __( $cpt['plural'].' Description', 'albargasy' ),
        'labels'                => $labels,
        'supports'              => $cpt['supports'],
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          =>$cpt['show_in_menu'],
        'menu_position'         => $cpt['position'],
        'menu_icon'             => $cpt['icon'],
        'show_in_admin_bar'     => true,
        'show_admin_column'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,    
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
      );
    // Register Custom Post Type>
    register_post_type( $cpt['cptname'], $args );
    }   
}


/* create my custom menu pages */

function albargasy_register_custom_menu_pages() {

    add_menu_page(

        'website options',

        'Albargasy Options',

        'manage_options',

        'content-area',

        'albargasy_theme_options_callback',

        get_option('albargasy_favicon'),

        2

    );   

    add_submenu_page(

        'content-area',

        __('Home Options', 'albargasy'),     // page_title

        __('Home Options','albargasy'),  

        'manage_options',

        'home-page-content',

        'home_content_area_callback'

    ); 
    add_submenu_page(

        'content-area',

        'About options',

        'About Options',

        'manage_options',

        'about-page-content',

        'about_content_area_callback'
    ); 
    add_submenu_page(

        'content-area',

        'Corporate options',

        'Corporate Options',

        'manage_options',

        'corporate-page-content',

        'corporate_content_area_callback'

    ); 
    add_submenu_page(

        'content-area',

        'Financial options',

        'Financial Options',

        'manage_options',

        'financial-page-content',

        'financial_content_area_callback'

    ); 
    add_submenu_page(

        'content-area',

        'Careers options',

        'Careers Options',

        'manage_options',

        'careers-page-content',

        'careers_content_area_callback'

    ); 
    add_submenu_page(

        'content-area',

        'Success Story options',

        'Success Story Options',

        'manage_options',

        'success-story-page-content',

        'success_story_content_area_callback'

    );

    add_submenu_page(

        'content-area',

        'Multibrand Showrooms options',

        'Multibrand Showrooms Options',

        'manage_options',

        'multibrand-showrooms-page-content',

        'multibrand_showrooms_content_area_callback'

    ); 
}


add_action( 'admin_menu', 'albargasy_register_custom_menu_pages' );

require_once ( albargasy_ROOT . 'albargasy_options/theme_options.php');

require_once ( albargasy_ROOT . 'albargasy_options/home_options.php');

require_once ( albargasy_ROOT . 'albargasy_options/about_options.php');

require_once ( albargasy_ROOT . 'albargasy_options/corporate_options.php');

require_once ( albargasy_ROOT . 'albargasy_options/financial_options.php');

require_once ( albargasy_ROOT . 'albargasy_options/careers_options.php');

require_once ( albargasy_ROOT . 'albargasy_options/success_story_options.php');

require_once ( albargasy_ROOT . 'albargasy_options/multibrand_showrooms_options.php');
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo() { ?>

    <style type="text/css">

        body{

            background:#c5c5d8!important; 

        }

        body.login{
            background-image: url(http://localhost/albargasy/wp-content/uploads/2023/08/pattern-bg.webp)!important;
            background-repeat: no-repeat!important;
            background-position: center!important;
            background-size: cover!important;
            background-attachment: fixed!important;
            display: flex!important;
            min-height: 100vh;
            width: 100%;
            padding: 0;
            flex-direction: column;
            position: relative;
        }

        #login h1 a, .login h1 a {

            background-image: url(<?php echo get_option('albargasy_header_logo_img'); ?>);

            width: 100%;

            height: 100px;

            background-size: contain;

            margin: 0 auto;

        }

        .login form{

            background: rgba(3, 3, 4, .9)!important;

            border-radius: .5rem;

        }

        .login label{

            font-weight: 600!important;

            color: #fff!important;

        }

        .wp-core-ui p .button {

            background: rgba(3, 3, 4, .9)!important;

            border-color: rgba(3, 3, 4, .9)!important;

        }

        .wp-core-ui p .button:hover{

            background-color: #005b52 !important;

            border-color: #005b52 !important;

            color: #fff;

        }

        #reg_passmail{color:#fff;}

    </style>

<?php }

