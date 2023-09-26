<?php

    get_header();

    if ( empty(pll_current_language()) )

        $lang = '_'.pll_default_language();

    else

        $lang = '_'.pll_current_language();

?>

<!-- End Odometer Two Area -->

<div class="footer-area pt-50">

    <div class="container-fluid">

        <div class="row">

               <div class="col-lg-4 col-sm-6 col-md-6">

                  <div class="footer-widget">

                   <a href="<?=albargasy_BlogUrl?>">

                        <img src="<?=get_option('albargasy_footer_logo_img') ?>" class="black-logo logo-footer" alt="<?php bloginfo('name') ?>">

                   </a>

                        <div class="footer-ad d-flex align-items-center mb-2">

                            <div>

                                <a href="">

                                    <img  src="<?=albargasy_URL.'assets/img/map-pin.svg'?>" width="54" class="footer-icon location-icon" >

                                </a>

                            </div>

                            <?php $albargasy_location = get_option('albargasy_location'.$lang);

                          if(!empty($albargasy_location)) :

                      ?>

                            <div class="footer-txt">

                                <a href="<?=get_option('albargasy_map')?>">

                                    <?=$albargasy_location?>

                                </a>

                            </div>

                            <?php endif?>

                        </div>

                        <?php $albargasy_email = get_option('albargasy_email');

                       if(!empty($albargasy_email)) :

                   ?>

                        <div class="footer-ad d-flex align-items-center">

                            <div>

                                <a href="">

                                    <img src="<?=albargasy_URL.'assets/img/envelope.svg'?>" width="20" class="footer-icon" >

                                </a>

                            </div>

                            <div class="footer-txt">

                                <a href="mailto:<?=$albargasy_email?>"><?=$albargasy_email?></a>

                            </div>

                        </div>

                        <?php endif ?>

                        <?php $albargasy_phone = get_option('albargasy_phone');

                       if(!empty($albargasy_phone)) :

                   ?>

                        <p class="mt-2">

                            <a href="tel:<?=$albargasy_phone?>">

                                <img src="<?=albargasy_URL.'assets/img/hotline.png'?>" class="hot-line-footer"/>

                            </a>

                        </p>

                        <?php endif ?>

                 </div>

           </div>

           <div class="col-lg-4 col-sm-6 col-md-6">

              <div class="footer-widget footer-widget-link2">

                 <?php if ( is_active_sidebar('first_sidebar') ) : ?>

                      <?php dynamic_sidebar('first_sidebar'); ?>

                  <?php endif; ?>

              </div>

           </div>

           <div class="col-lg-4 col-sm-6 col-md-6">

              <div class="footer-widget subscribtion">

                  <?php if ( is_active_sidebar('second_sidebar') ) : ?>

                      <?php dynamic_sidebar('second_sidebar'); ?>

                  <?php endif; ?>
                <ul class="follow-list">

                    <?php $facebook = get_option('albargasy_fb');  if(!empty($facebook)) : ?>

                    <li><a href="<?=$facebook?>" target="_blank"><i class='fa fa-facebook'></i></a></li>

                    <?php endif ?>

                    <?php $youtube = get_option('albargasy_youtube');  if(!empty($youtube)) : ?>

                    <li><a href="<?=$youtube?>" target="_blank"><i class='fa fa-youtube'></i></a></li>

                    <?php endif ?>

                    <?php $insta = get_option('albargasy_insta');  if(!empty($insta)) : ?>

                    <li><a href="<?=$insta?>" target="_blank"><i class='fa fa-instagram'></i></a></li>

                    <?php endif ?>

                    <?php $linkedin = get_option('albargasy_linkedin');  if(!empty($linkedin)) : ?>

                    <li><a href="<?=$linkedin?>" target="_blank"><i class='fa fa-linkedin'></i></a></li>

                    <?php endif ?>

                </ul>

              </div>

           </div>

        </div>

     </div>

  </div>

  <div class="copyright-sec">

    <p>&copy; <?= date("Y"); ?> <?php _e('ALL RIGHTS RESERVED.', 'albargasy') ?> POWERED BY VORTEX</p>

  </div>

  <!-- End Footer Area --><!-- Start Go Top Area -->

  <div class="go-top"><i class='bx bxs-chevrons-up'></i><i class='bx bxs-chevrons-up'></i></div>

  <!-- End Go Top Area -->
    <?php $facebook = get_option('albargasy_fb');  if(!empty($facebook)) : ?>
      <a href="<?=$facebook?>" class="color-palate facebook">
        <div class="color-trigger">
            <i class="fa fa-facebook-f"></i>
        </div>
        <div class="color-palate-head">
            <h6><?php _e('Facebook', 'albargasy') ?></h6>
        </div>
    </a>
    <?php endif ?>
    <?php $email = get_option('albargasy_email');  if(!empty($email)) : ?>
    <a href="mailto:<?=$email?>" class="color-palate email">
        <div class="color-trigger">
            <i class="fa fa-envelope"></i>
        </div>
        <div class="color-palate-head">
            <h6><?php _e('E-mail', 'albargasy') ?></h6>
        </div>
    </a>
    <?php endif?>
    <?php $phone = get_option('albargasy_phone');  if(!empty($phone)) : ?>
    <a href="tel:<?=$phone?>" class="color-palate phone">
        <div class="color-trigger">
            <i class="fa fa-phone"></i>
        </div>
        <div class="color-palate-head">
            <h6><?=$phone?></h6>
        </div>
    </a>
    <?php endif?>

  <?php wp_footer()?>
