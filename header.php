<?php
    $langs_array_hidden = pll_the_languages( array( 'dropdown' => 1, 'hide_current' => 1, 'raw' => 1 ) );
    $langs_array = pll_the_languages( array( 'dropdown' => 1, 'hide_current' => 0, 'raw' => 1 ) );
?>
<!DOCTYPE html>

<html lang="en">

       <head>

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Css File -->

        <!--<link rel="stylesheet" href="assets/css/rtl.css">-->

        <title>

            <?php wp_title('|','true','right') ?>

            <?php bloginfo('name'); ?>

        </title>

        <link rel="icon" type="image/png" href="<?=get_option('albargasy_favicon_img')?>">

        <script src="https://use.fontawesome.com/2a16dd1862.js"></script>

        <?php wp_head(); ?>

       </head>

       <body>

          <!-- Start Preloader Area -->

        <div class="loader-wrapper">
            <div class="ring">
                <img class="preload-img" alt="<?php bloginfo('name') ?>" src="<?=get_option('albargasy_header_logo_img')?>">
                <span></span>
            </div>
        </div>
          <!-- End Preloader Area  --><!-- Start Navbar Area -->
          <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container-fluid">
                   	<div class="main-responsive-menu">
                      <div class="logo">
                          <a href="<?=albargasy_BlogUrl?>">
                              <img src="<?=get_option('albargasy_header_logo_img')?>" class="black-logo" alt="<?php bloginfo('name')?>">
                              <img src="<?=get_option('albargasy_header_logo_img')?>" class="white-logo" alt="<?php bloginfo('name')?>">
                          </a>
                      </div>
                   </div>
                    <?php if ($langs_array_hidden) : ?>
                    <div class="menu-lang">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                 <?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>
                                       AR
                                   <?php else: ?>
                                       EN
                                <?php endif ?>
                            </button>
                            <ul class="dropdown-menu">
                                <?php foreach ($langs_array_hidden as $lang) : ?>
                                    <li class="nav-item">
                                        <a href="<?php echo $lang['url']; ?>" class="nav-link">
                                            <?php echo $lang['slug']; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>

            </div>

            <div class="main-navbar">

                <div class="container-fluid">

                       <nav class="navbar navbar-expand-md navbar-light">

                          <a class="navbar-brand" href="<?=albargasy_BlogUrl?>">

                              <img src="<?=get_option('albargasy_header_logo_img')?>" class="black-logo" alt="<?php bloginfo('name')?>">

                                  <img src="<?=get_option('albargasy_header_logo_img')?>" class="white-logo" alt="<?php bloginfo('name')?>">

                          </a>

                          <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">

                             <?php if ( ICL_LANGUAGE_CODE=='ar' ) :?>
                            <?php albargasy_menu_arabic()?>
                            <?php else :?>
                            <?php albargasy_menu()?>
                            <?php endif?>

                          </div>

                         
                        <?php if ($langs_array) : ?>
                          <ul class="navbar-nav lang-menu ml-auto">
                            <li class="nav-item lang">
                               <a href="" class="nav-link">
                                   <?php if ( ICL_LANGUAGE_CODE=='ar' ): ?>
                                       AR
                                   <?php else: ?>
                                       EN
                                <?php endif ?>
                                   <i class="fa fa-caret-down"></i>
                               </a>
                               <ul class="dropdown-menu">
                                    <?php foreach ($langs_array as $lang) : ?>
                                    <li class="nav-item">
                                        <a href="<?php echo $lang['url']; ?>" class="nav-link">
                                            <?php echo $lang['slug']; ?>
                                        </a>
                                     </li>
                                    <?php endforeach; ?>
                               </ul>
                            </li>
                        </ul>
                        <?php endif; ?>
                   </nav>

                </div>

            </div>

        </div>

