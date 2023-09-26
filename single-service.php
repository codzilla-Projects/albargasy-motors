<?php  get_header();

if ( empty(pll_current_language()) )

        $lang = '_'.pll_default_language();

    else

        $lang = '_'.pll_current_language();

if ( have_posts() ) : while ( have_posts() ) : the_post(); $post_id = get_the_ID();

    $image_365             = get_post_meta( $post_id, 'image_365', true );

    $service_gallery      = get_post_meta( $post_id, 'service_gallery', true );

    $service_title         = get_post_meta( $post_id, 'service_title', true);

    $addresses             = get_post_meta( $post_id, 'addresses', true );

    $working_hours         = get_post_meta( $post_id, 'working_hours', true);

    $emails                = get_post_meta( $post_id, 'emails', true);

    $facebook              = get_option('albargasy_fb');

    $instagram             = get_option('albargasy_insta');
    get_template_part('template-parts/breadcrumb');

?>

<!-- Start About Area -->
<?php if( is_single(array('service-contract'))): ?>
    <section class="service-contract">
<?php else: ?>
    <section class="showroom-area">
<?php endif ?>
    <div class="container-fluid">

        <?php if( !is_single(array('toyota-service-contarct','skoda-service-contarct',919,920))): ?>
        <div class="showroom-img">
            <a href="<?php the_post_thumbnail_url()?>" data-fancybox="images" data-caption="" class="link">
                <img src="<?php the_post_thumbnail_url()?>" class="img-responsive" />

            </a>
            <?php if (!empty($image_365)): ?>
            <div class="showroom-360">
                <a href="#" class="popup-360" data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <i class="fa fa-image"></i><?php _e('Show 360', 'albargasy')?>
                </a>
            </div>
            <?php endif ?>
        </div>
        <?php endif ?>

        <?php if( !is_single(array('toyota-service-contarct','skoda-service-contarct'))): ?>
            <div>
        <?php else: ?>
            <div class="showroom-detail-box">
        <?php endif ?>


            <p><?php the_content()?></p>

        </div>

        <?php if (!empty($service_gallery)) :
        $count = count($service_gallery);?>

        <div class="news-gallery">

            <div class="row">

                <?php for( $i=0; $i<$count; $i++ ){?>

                <div class="col-lg-3">

                    <div class="gallery-item">

                        <a href="<?= $service_gallery[$i];?>" data-fancybox="images" data-caption="" class="link">

                            <img src="<?= $service_gallery[$i];?>" class="img-responsive" />

                        </a>

                    </div>

                </div>

                <?php }?>

            </div>

        </div>

        <?php endif?>

    </div>

</section>

<?php if( !is_single(array('toyota-service-contarct','skoda-service-contarct',919,920))): ?>

<section class="contact-us-sec">

    <div class="section-title underline white-title">

       <h3><?php _e('Feel Free to Contact Us', 'albargasy')?></h3>

    </div>

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-8">

                <div class="contact-form-box">
                    <?php if ($lang == "_en") : ?>
                    <?= do_shortcode('[contact-form-7 id="4012f4a" title="Service form"]'); ?>
                    <?php else: ?>
                    <?= do_shortcode('[contact-form-7 id="e858971" title="Service form Arabic"]'); ?>
                    <?php endif ?>
                </div>

            </div>

            <div class="col-md-4">

                <div class="address-box">

                    <?php if (!empty($service_title)) : ?>

                    <h4><?=$service_title?></h4>

                    <?php endif?>

                    <?php if (!empty($addresses)) : ?>

                    <div class="location">

                        <a href=""><i class="fa fa-map-marker"></i> <?=$addresses?></a>

                    </div>

                    <?php endif?>

                    <?php if (!empty($working_hours)) : ?>

                    <div class="timing">

                        <h3><i class="fa fa-history"></i> <?php _e('Opening Hours', 'albargasy')?></h3>

                        <p><?=$working_hours?></p>

                    </div>



                    <?php endif?>

                    <?php if (!empty($facebook) && !empty($instagram)) : ?>

                    <ul class="follow-list">

                        <li><a href="<?=$facebook?>" target="_blank"><i class="fa fa-facebook-square"></i></a></li>

                        <li><a href="<?=$instagram?>" target="_blank"><i class="fa fa-instagram"></i></a></li>

                    </ul>

                    <?php endif?>



                    <p class="mt-2">

                        <a href="tel:15404">

                            <img src="<?=albargasy_URL.'assets/img/hotline.png';?>" class="hot-line-add">

                        </a>

                    </p>

                    <?php if (!empty($emails)) : ?>

                    <div class="email-box">

                        <a href=""><i class="fa fa-envelope"></i> <?=$emails?></a>

                    </div>

                    <?php endif?>

                </div>

            </div>

        </div>

    </div>

</section>
<?php if (!empty($image_365)): ?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
          <div class="modal-body">
            <?= do_shortcode(''.$image_365.''); ?>
          </div>
    </div>
  </div>

</div>

<?php endif ?>
<!-- End About Area -->
<?php endif ?>
<?php endwhile; endif; get_footer()?>

  <script>
      document.querySelector('.popup-360').addEventListener('click', () => {
    document.querySelector('.wvt-fullscreen-control').click()
});</script>
