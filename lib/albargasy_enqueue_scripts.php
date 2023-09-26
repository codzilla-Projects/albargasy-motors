<?php

function albargasy_admin_scripts_styles($hook) {
    $lang = ICL_LANGUAGE_CODE;
    $perfix = $lang === 'ar' ? '_rtl' : '';
    wp_enqueue_style( 'albargasy-admin-main', albargasy_URL . 'assets/admin/css/main-style.css');
    $albargasy_pages = ['toplevel_page_content-area',
        'albargasy-options_page_home-page-content',
        'albargasy-options_page_about-page-content',
        'albargasy-options_page_corporate-page-content',
        'albargasy-options_page_financial-page-content',
        'albargasy-options_page_careers-page-content',
        'albargasy-options_page_success-story-page-content',
        'albargasy-options_page_multibrand-showrooms-page-content',
        'post-new.php',
        'edit-tags.php',
        'post.php'
    ];
    if( in_array($hook, $albargasy_pages) ) {

         global $post;
        if( get_post_type() === 'vechile' || get_post_type() === 'service' || get_post_type() === 'post' ){
            wp_enqueue_style( 'albargasy-admin-jquery-ui-css', albargasy_URL . 'assets/admin/css/jquery-ui.css');

            wp_enqueue_style( 'albargasy-admin-gallery-css', albargasy_URL . 'assets/admin/css/gallery.css');
        }

        wp_enqueue_style( 'albargasy-admin-bootsrtap-css', albargasy_URL . 'assets/admin/css/bootstrap'.$perfix.'.min.css');
        wp_enqueue_style( 'albargasy-admin-choose_cat-css', albargasy_URL . 'assets/admin/css/choose-cat.css');
        wp_enqueue_style( 'albargasy-admin-style-css', albargasy_URL . 'assets/admin/css/style'.$perfix.'.css');
        wp_enqueue_script( 'albargasy-admin-jquery-js', albargasy_URL .'assets/admin/js/jquery.min.js', array() ,false, true );
        if( get_post_type() === 'vechile' || get_post_type() === 'service' || get_post_type() === 'post'){
          wp_enqueue_script( 'albargasy-admin-jquery-js', albargasy_URL .'assets/admin/js/jquery-ui.js', array() ,false, true ); 
          wp_enqueue_script( 'albargasy-admin-gallery-js', albargasy_URL .'assets/admin/js/gallery.js', array() ,false, true ); 
        }
        wp_enqueue_script( 'albargasy-admin-popper-js', albargasy_URL .'assets/admin/js/popper.min.js', array() ,false, true );
        wp_enqueue_script( 'albargasy-admin-bootsrtap-js', albargasy_URL .'assets/admin/js/bootstrap.bundle.min.js', array() ,false, true );
        wp_enqueue_script( 'albargasy-choose_cat-js', albargasy_URL .'assets/admin/js/choose_cat.js', array() ,false, true ); 
        wp_enqueue_script( 'albargasy-admin-script-js', albargasy_URL .'assets/admin/js/script.js', array() ,false, true );
        if(function_exists( 'wp_enqueue_media' )){
            wp_enqueue_media();
        }else{
            wp_enqueue_style('thickbox');
            wp_enqueue_script('media-upload');
            wp_enqueue_script('thickbox');
        }
    }
    $primaryColor     = get_option('albargasy_primaryColor');
    $secondaryColor   = get_option('albargasy_secondaryColor');
    $thirdColor       = get_option('albargasy_thirdColor');
    $googleFontUrl    = get_option('albargasy_font_url');
    $googleFontName   = get_option('albargasy_font_name');
    $custom_css = 
        "
            @import url('{$googleFontUrl}');
            :root {
               --primaryColor   : {$primaryColor};
               --secondaryColor : {$secondaryColor};
               --thirdColor     : {$thirdColor};
               --albargasy-font     : '{$googleFontName}',sans-serif;
            }
        ";
    wp_add_inline_style('albargasy-style-css', $custom_css);
    wp_add_inline_style('albargasy-admin-style-css', $custom_css);
    wp_add_inline_style('albargasy-admin-main', $custom_css);
}
add_action('admin_enqueue_scripts', 'albargasy_admin_scripts_styles');
function albargasy_scripts_styles() {
    $lang = ICL_LANGUAGE_CODE;
    $perfix = $lang === 'ar' ? '.rtl' : '';
    wp_enqueue_style( 'albargasy-bootstrap-css', albargasy_URL . 'assets/css/bootstrap'.$perfix.'.min.css');
    wp_enqueue_style( 'albargasy-animate-css', albargasy_URL . 'assets/css/animate.css');
    wp_enqueue_style( 'albargasy-boxicons-css', albargasy_URL . 'assets/css/boxicons.min.css');
    wp_enqueue_style( 'albargasy-meanmenu-css', albargasy_URL . 'assets/css/meanmenu.css');
    wp_enqueue_style( 'albargasy-slick-css', albargasy_URL . 'assets/css/slick.css');
    wp_enqueue_style( 'albargasy-odometer-css', albargasy_URL . 'assets/css/odometer.min.css');
    wp_enqueue_style( 'albargasy-owl-carousel-css', albargasy_URL . 'assets/css/owl.carousel.min.css');
    wp_enqueue_style( 'albargasy-owl-theme-css', albargasy_URL . 'assets/css/owl.theme.default.min.css');
    wp_enqueue_style( 'albargasy-navbar-css', albargasy_URL . 'assets/css/navbar.css');
    wp_enqueue_style( 'albargasy-footer-css', albargasy_URL . 'assets/css/footer.css');
    if ( is_single() && 'post' == get_post_type() || is_single() && 'service' == get_post_type() ) {
        wp_enqueue_style( 'albargasy-fancybox-css', albargasy_URL . 'assets/css/jquery.fancybox.min.css');    
    }
    if ( is_404() ) {
    wp_enqueue_style( 'albargasy-404-css', albargasy_URL . 'assets/css/404.css');
    }
    wp_enqueue_style( 'albargasy-style-css', albargasy_URL . 'assets/css/style.css');
    if ( is_rtl() ) {
     wp_enqueue_style( 'albargasy-style-rtl-css', albargasy_URL . 'assets/css/rtl.css');
    }

    if (wp_is_mobile(  )):
        wp_enqueue_style( 'albargasy-responsive-css', albargasy_URL . 'assets/css/responsive.css');
    endif;
    wp_enqueue_script( 'albargasy-jquery-js', albargasy_URL .'assets/js/jquery.min.js', array() ,false, true );
    wp_enqueue_script( 'albargasy-bootstrap-js', albargasy_URL .'assets/js/bootstrap.bundle.min.js', array() ,false, true );
    wp_enqueue_script( 'albargasy-appear-js', albargasy_URL .'assets/js/appear.min.js', array() ,false, true );
    wp_enqueue_script( 'albargasy-wow-js', albargasy_URL .'assets/js/wow.js"', array() ,false, true );
    wp_enqueue_script( 'albargasy-slick-js', albargasy_URL .'assets/js/slick.js', array() ,false, true );
    wp_enqueue_script( 'albargasy-odometer-js', albargasy_URL .'assets/js/odometer.min.js', array() ,false, true );
    wp_enqueue_script( 'albargasy-owl-carousel-js', albargasy_URL .'assets/js/owl.carousel.min.js', array() ,false, true );
    wp_enqueue_script( 'albargasy-slick-animation-js', albargasy_URL .'assets/js/slick-animation.min.js', array() ,false, true );
    wp_enqueue_script( 'albargasy-meanmenu-js', albargasy_URL .'assets/js/jquery.meanmenu.js', array() ,false, true );
    if ( is_single() && 'post' == get_post_type() || is_single() && 'service' == get_post_type() ) {
         wp_enqueue_script( 'albargasy-fancybox-js', albargasy_URL .'assets/js/jquery.fancybox.js', array() ,false, true );    
    }
    wp_enqueue_script( 'albargasy-script-js', albargasy_URL .'assets/js/script.js', array() ,false, true );


        $primaryColor     = get_option('albargasy_primaryColor');
        $secondaryColor   = get_option('albargasy_secondaryColor');
        $thirdColor       = get_option('albargasy_thirdColor');
        $googleFontUrl    = get_option('albargasy_font_url');
        $googleFontName   = get_option('albargasy_font_name');
        $custom_css = 

            "
                @import url('{$googleFontUrl}');
                :root {
                   --primaryColor   : {$primaryColor};
                   --secondaryColor : {$secondaryColor};
                   --thirdColor     : {$thirdColor};
                   --albargasy-font     : '{$googleFontName}',sans-serif;
                }
            ";
    wp_add_inline_style('albargasy-main-style-css', $custom_css);
}
add_action( 'wp_enqueue_scripts', 'albargasy_scripts_styles' );



