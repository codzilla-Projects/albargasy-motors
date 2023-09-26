<?php

    if ( empty(pll_current_language()) )

        $lang = '_'.pll_default_language();

    else

        $lang = '_'.pll_current_language();

/**

** Template Name: Careers Template

**/

	get_header(); 

	get_template_part('template-parts/breadcrumb'); 

?>

<?php 

    $careers = albargasy_get_careers(-1, get_option('careers_posts'.$lang));

    if($careers->have_posts()) :

?>

<!-- Start About Area -->

<section class="careers-area pb-100">

	<div class="careers-banner text-center">

		<img src="<?=get_option('careers_img')?>  " class="img-responsive" alt="Careers">

	</div>

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

				<div class="career-sec-description">

				   <?=get_option('careers_content'.$lang)?>     

			   	</div>

				<div class="career-box">

					<?php while($careers->have_posts()) : $careers->the_post();?>

					<div class="career-item">

						<div class="row">

							<div class="col-md-5">

								<h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>

							</div>

							<div class="col-md-5">

								<p class="career-date"><?php the_time('M') ?>  <?php the_time('j') ?>,  <?php the_time('Y')?></p>

							</div>

							<div class="col-md-2">

								<a class="career-read-more" href="<?php the_permalink()?>" target="_blank">

									<?php _e('Read More »','albargasy') ?>		

								</a>

							</div>

						</div>

					</div>

					<?php endwhile; wp_reset_query();?>

				</div>

			</div>

		</div>

    </div>

</section>

<!-- End About Area -->

<?php endif ?>

<?php get_footer()?>