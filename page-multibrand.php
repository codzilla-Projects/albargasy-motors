<?php

    if ( empty(pll_current_language()) )

        $lang = '_'.pll_default_language();

    else

        $lang = '_'.pll_current_language();

/**

** Template Name: Multibrand Showrooms Template

**/

	get_header(); 

	get_template_part('template-parts/breadcrumb'); 

?>

<?php 

	$number = 0;

    $services = albargasy_get_services(-1 , get_option('services_post'.$lang));

    if($services->have_posts()) :

?>

<!-- Start About Area -->

<section class="multibrand-area pt-100 pb-100">

    <div class="container-fluid">

		<div class="section-title white-title">

		   <h2><?=get_option('multibrand_showrooms_title'.$lang)?></h2>

		</div>

        <div class="row">

        <?php while($services->have_posts()) : $services->the_post();?>

	       <div class="col-lg-4 col-sm-6 col-md-6 wow fadeInLeft" data-wow-delay="<?=$number?>ms" data-wow-duration="1500ms">

	          <div class="single-service-card">

	             <div class="service-img">

	                <a href="<?php the_permalink()?>">

	                	<img src="<?php the_post_thumbnail_url()?>" class="img-fluid" alt="<?php the_title()?>">

	                </a>

	                <div class="service-content">

	                   <h3>

	                   		<a href="<?php the_permalink()?>"><?php the_title()?></a>

	                   </h3>

	                   <div class="service-btn ">

	                   	<a href="<?php the_permalink()?>" class="default-btn">

	                   		<i class='bx bx-chevrons-right'></i>

	                   	</a>

	                   </div>

	                </div>

	             </div>

	          </div>

	       </div>

	       <?php $number = $number + 300; endwhile; wp_reset_query();?>

	    </div>

    </div>

</section>

<!-- End About Area -->

<?php endif ?>

<?php get_footer()?>