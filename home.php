<?php
/**
** Template Name: Home Template
**/
    get_header();

    if ( empty(pll_current_language()) )

        $lang = '_'.pll_default_language();

    else

        $lang = '_'.pll_current_language();

?>

<?php

   if (get_option('slider_hide'.$lang ) != '1')  :

    $no = get_option('slider_number'.$lang);

    $number = 1;

    $slides = albargasy_get_sliders($no);

    if($slides->have_posts()) :

?>

<!-- End Navbar Area --><!-- home section start -->

<section class="layout-home4 p-0">

 <div class="container-fluid p-0">

    <div class="row m-0">

       <div class="col-lg-12 p-0">

          <div class="sync-slider" style="background: url('<?=get_option('slider_bg_img'.$lang) ?>');">

             <div class="home-slider-4 arrow-image">

                 <?php

                     while($slides->have_posts()) : $slides->the_post();

                     $btn_txt = get_post_meta( get_the_ID(), 'slider_btn_txt', true );

                    $btn_url = get_post_meta( get_the_ID(), 'slider_btn_url', true );

                 ?>

                   <div class="slider-image">

                      <div class="container">

                         <div class="row">

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                                   <div class="home-content">

                                      <div class="row d-flex align-items-center">

                                         <div class="col-md-4 mt--50">

                                            <h1 data-delay-in="0.6" data-animation-in="fadeInLeft">

                                                <?php the_title()?>

                                            </h1>

                                            <p data-delay-in="0.8" data-animation-in="fadeInLeft" class="font-roboto">

                                                <?php the_content()?>

                                            </p>



                                            <?php if ( !empty($btn_txt) && !empty($btn_url) ):?>

                                            <a data-delay-in="1.4" data-animation-in="fadeInLeft" href="<?=$btn_url?>" class="default-btn"><?=$btn_txt ?> <i class='bx bx-chevron-right'></i></a>

                                            <?php endif?>

                                         </div>

                                         <div class="col-md-8">

                                             <img class="img-<?=get_the_ID()?>" data-delay-in="0.2" data-animation-in="fadeInLeft" src="<?php the_post_thumbnail_url()?>" alt="<?php the_title()?>">

                                         </div>

                                      </div>

                                   </div>

                            </div>

                         </div>

                      </div>

                   </div>

                   <?php endwhile; wp_reset_query();?>

             </div>

             <div class="home-nav d-none">

                 <?php while($slides->have_posts()) : $slides->the_post();?>

                <div>

                   <div class="slider-image" style="background: url('<?php the_post_thumbnail_url()?>');"><span>01/0<?=$number?></span></div>

                </div>

                <?php $number++; endwhile; wp_reset_query();?>

             </div>

          </div>

       </div>

    </div>

 </div>

</section>

<!-- home section end -->

<?php endif;endif?>

<?php if (get_option('about_hide'.$lang ) != '1')  :  ?>

<!-- About section start -->

<section class="about-area pt-50 pb-50 bg-pattern">

 <div class="container-fluid">

    <div class="about-content">

       <div class="row align-items-center">

          <div class="col-lg-9">

             <div class="single-about-content">

                <div class="section-title texr-center wow slideInUp" data-wow-delay="0ms" data-wow-duration="2500ms">

                   <h2><?=get_option('about_title'.$lang)?></h2>

                </div>

                <div class="wow slideInUp" data-wow-delay="0ms" data-wow-duration="2500ms">

                   <p><?=get_option('about_content'.$lang)?></p>

                </div>

                <div class="wow slideInDown" data-wow-delay="0ms" data-wow-duration="2500ms">

                   <h2 class="mt-5 mb-3"><?=get_option('about_small_title'.$lang)?></h2>

                </div>

                <div class="wow slideInUp" data-wow-delay="0ms" data-wow-duration="2500ms">

                   <p><?=get_option('about_small_content'.$lang)?></p>

                </div>

             </div>

          </div>

          <div class="col-lg-3 d-flex align-items-center justify-content-center">

             <div class="experience">

                <div class="about-experience text-center wow slideInRight" data-wow-delay="0ms" data-wow-duration="2000ms"><?=get_option('experience_number'.$lang)?></div>

                <div class="about-year text-center wow slideInUp" data-wow-delay="0ms" data-wow-duration="2500ms"><?=get_option('experience_years'.$lang)?></div>

             </div>

          </div>

       </div>

    </div>

 </div>

</section>

<!-- About section end -->

<?php endif?>

<?php if (get_option('team_hide'.$lang ) != '1')  :  ?>

<!-- Team section start -->

<section class="team-area wow slideInLeft" data-wow-delay="0ms" data-wow-duration="2500ms">

    <img class="img-fluid" src="<?=get_option('team_img')?>">

</section>

<!-- Team section end -->

<?php endif?>

<?php

    if (get_option('brand_cat_hide'.$lang ) != '1')  :

    $terms = get_terms(
        array(

        'taxonomy'      => 'brands',

        'orderby'       => 'brand_order',

        'order'         => 'ASC',

        'hide_empty'    => true,

        'include'       => get_option('brand_category'.$lang),

        'meta_query' => array(
            array(
                'key' => 'brand_order',
                'type' => 'NUMERIC',
                )
            ),

        )

    );

?>

<!-- Start Our Brands area -->

<div class="brand-area pt-50 bg-pattern">

    <div class="container">

        <div class="section-title underline white-title wow slideInLeft" data-wow-delay="0ms" data-wow-duration="2500ms">

           <h2><?=get_option('brand_cat_title'.$lang) ?></h2>

        </div>

        <div class="row">

        <?php
           $i=1;
            foreach ($terms as $term) :
            if( $term->slug == 'uncategorized' ){ continue; } $category_id = $term->term_id;
            $term_meta = get_option( "category_$category_id" );
        ?>

            <div class="col">

                <div class="single-brand-card">

                    <a href="<?=get_term_link( $term ) ?>">

                        <div class="brand-icon brand-icon_<?= $i;?>"><img src="<?= $term_meta['image'];?>" alt="<?=$term->name?>"></div>

                        <h3><?= $term->name;?></h3>

                    </a>

                </div>

            </div>

           <?php $i++; endforeach; ?>

        </div>

    </div>

</div>

<!-- End Our Brands area -->

<?php endif ?>

<?php

   if (get_option('vechile_hide'.$lang ) != '1')  :

    $number = 1;

    $vechiles = albargasy_get_vechiles(6 ,get_option('vechile_posts'.$lang));

    if($vechiles->have_posts()) :

?>

<!-- Start Single Brands Area -->

<div class="portfolio-area underline pb-50 bg-pattern wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">

    <div class="container-fluid">

        <div class="row">

            <?php while($vechiles->have_posts()) : $vechiles->the_post();?>

            <div class="col-lg-4 col-sm-6 col-md-6">

                <div class="single-portfolio-card">

                    <div class="portfolio-img">

                        <a href="<?php the_permalink()?>"><img src="<?php the_post_thumbnail_url()?>" class="img-fluid" alt="portfolio1"></a>

                        <div class="portfolio-content">

                            <h3><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>

                            <div class="portfolio-btn ">

                                <a href="<?php the_permalink()?>" class="default-btn">

                                    <?php _e('View Details','albargasy') ?>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <?php endwhile; wp_reset_query();?>

        </div>

    </div>

</div>

<!-- End Single Brands Area -->

<?php endif; endif ?>

<?php

    if (get_option('services_hide'.$lang ) != '1')  :

    $number = 0;

    $services = albargasy_get_services(3 ,get_option('services_posts'.$lang));

    if($services->have_posts()) :

?>

<!-- Start Single Brands Area -->

<div class="service-area bg-pattern">
 <div class="container-fluid">

    <div class="section-title underline white-title wow slideInLeft mb-60 mt-30" data-wow-delay="0ms" data-wow-duration="2500ms">

       <h2><?=get_option('services_title'.$lang )?></h2>

    </div>

    <div class="row">

        <?php while($services->have_posts()) : $services->the_post();
        $services_featured_image      = get_post_meta( get_the_ID(), 'services_featured_image', true );
        ?>

        <div class="col-lg-4 col-sm-6 col-md-6 wow fadeInLeft" data-wow-delay="<?=$number?>ms" data-wow-duration="1500ms">

            <div class="single-service-card">

                <div class="service-img">

                    <a href="<?php the_permalink()?>"><img src="<?=$services_featured_image?>" class="img-fluid" alt="service1"></a>

                    <div class="service-content">

                        <h3><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>

                        <p><?php the_excerpt(); ?></p>

                        <div class="service-btn ">

                            <a href="<?php the_permalink()?>" class="default-btn"><i class='bx bx-chevrons-right'></i></a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <?php $number = $number + 300; endwhile; wp_reset_query();?>

    </div>

 </div>

</div>

<!-- End Single Brands Area -->

<?php endif; endif ?>

<?php if (get_option('counter_hide'.$lang ) != '1')  :?>

<!-- Start Odometer Two Area -->

<div class="odometer-two-area pt-100 pb-100 wow slideInLeft" data-wow-delay="0ms" data-wow-duration="2500ms">

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-4 col-12 col-sm-6 col-md-4">

                <div class="odometer-two-content">

                    <h2><?=get_option('first_counter_title'.$lang )?></h2>

                    <h2 class="odometer-num">

                        <b><span class="odometer" data-count="<?=get_option('first_counter_number'.$lang )?>">00</span></b>

                    </h2>

                    <p><?=get_option('first_counter_small_title'.$lang )?></p>

                </div>

            </div>

            <div class="col-lg-4 col-12 col-sm-6 col-md-4">

                <div class="odometer-two-content">

                    <h2><?=get_option('second_counter_title'.$lang )?></h2>

                    <h2 class="odometer-num">

                        <b><span class="odometer" data-count="<?=get_option('second_counter_number'.$lang )?>">00</span> k+</b>

                    </h2>

                    <p><?=get_option('second_counter_small_title'.$lang )?></p>

                </div>

            </div>

            <div class="col-lg-4 col-12 col-sm-6 col-md-4">

                <div class="odometer-two-content">

                    <h2><?=get_option('third_counter_title'.$lang )?></h2>

                    <h2 class="odometer-num">

                        <b><span class="odometer" data-count="<?=get_option('third_counter_number'.$lang )?>">00</span> +</b>

                    </h2>

                    <p><?=get_option('third_counter_small_title'.$lang )?></p>

                </div>

            </div>

        </div>

    </div>

</div>

<?php endif?>

<?php

    if (get_option('awards_hide'.$lang ) != '1')  :

    $no = get_option('awards_number'.$lang);

    $number = 0;

    $awards = albargasy_get_awards($no);

    if($awards->have_posts()) :

?>

<div class="brand-area pt-70 pb-70 bg-pattern">

    <div class="container-fluid">

        <div class="section-title underline white-title">

            <h2><?=get_option('awards_title'.$lang);?></h2>

        </div>

        <div class="award-slider owl-carousel owl-theme">

            <?php while($awards->have_posts()) : $awards->the_post();?>

            <div class="award-card">

                <div class="award-img">

                    <img src="<?php the_post_thumbnail_url()?>">

                </div>

                <div class="award-content">

                    <p>

                      <?php the_title()?>

                    </p>

                    <p>

                      <?php the_content()?>

                    </p>

                </div>

            </div>

            <?php endwhile; wp_reset_query();?>

        </div>

    </div>

</div>

<?php endif; endif ?>

<?php get_footer()?>
