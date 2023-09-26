<?php

    if ( empty(pll_current_language()) )

        $lang = '_'.pll_default_language();

    else

        $lang = '_'.pll_current_language();

/**

** Template Name: Corporate Template

**/

	get_header(); 

	get_template_part('template-parts/breadcrumb'); 

?>

<?php if (get_option('philosophy_hide'.$lang) != '1')  :  ?>

<!-- Start corporate Area -->

<section class="corporate-philosophy" style="background:url('<?php if ( wp_is_mobile() ) : ?><?=get_option('philosophy_mobile_img')?><?php else: ?><?=get_option('philosophy_img')?><?php endif ?>')">

	<div class="container">

		<div class="row">

			<div class="col-md-1"></div>

			<div class="col-md-10">

				<div class="bg-dark-overlay">

					<div class="section-title underline white-title">

					   <h2><?=get_option('philosophy_title'.$lang)?></h2>

					</div> 

					<p><?=get_option('philosophy_content'.$lang)?></p>

				</div>

			</div>				

		</div>

	</div>

</section>

<?php endif ?>

<?php if (get_option('vision_hide'.$lang) != '1')  :  ?>

<section class="corporate-vision" style="background:url('<?php if ( wp_is_mobile() ) : ?><?=get_option('vision_mobile_img')?><?php else: ?><?=get_option('vision_img')?><?php endif ?>')">

	<div class="container">

		<div class="row">

			<div class="col-md-5">

				<div class="bg-dark-overlay">

					<div class="section-title underline white-title">

					   <h2><?=get_option('vision_title'.$lang)?></h2>

					</div> 

					<p><?=get_option('vision_content'.$lang)?></p>

				</div>

			</div>				

		</div>

	</div>

</section>

<?php endif ?>

<?php if (get_option('mission_hide'.$lang) != '1')  :  ?>

<section class="corporate-mission" style="background:url('<?php if ( wp_is_mobile() ) : ?><?=get_option('mission_mobile_img')?><?php else: ?><?=get_option('mission_img')?><?php endif ?>')">

	<div class="container">

		<div class="row">

			<div class="col-md-5">

				<div class="bg-dark-overlay">

					<div class="section-title underline white-title">

					   <h2><?=get_option('mission_title'.$lang)?></h2>

					</div> 

					<p><?=get_option('mission_content'.$lang)?></p>

				</div>

			</div>				

		</div>

	</div>

</section>

<?php endif ?>

<?php if (get_option('values_hide'.$lang) != '1')  :  ?>

<section class="corporate-value" style="background:url('<?php if ( wp_is_mobile() ) : ?><?=get_option('values_mobile_img')?><?php else: ?><?=get_option('values_img')?><?php endif ?>')">

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<div class="bg-dark-overlay">

					<div class="section-title underline white-title">

					   <h2><?=get_option('values_title'.$lang)?></h2>

					</div> 

					<p><?=get_option('values_content'.$lang)?></p>

				</div>

			</div>				

		</div>

	</div>

</section>

<?php endif?>

<?php if (get_option('accordion_hide'.$lang) != '1')  :  ?>	

<!-- End corporate Area -->

<section class="pt-100 pb-100 acc-corp" style="background:url('<?php if ( wp_is_mobile() ) : ?><?=get_option('accordion_mobile_img')?><?php else: ?><?=get_option('accordion_img')?><?php endif ?>')">

	<div class="container">

		<div class="row">

			<div class="col-md-8 offset-md-2">

				<div class="accordion corporate-acc" id="accordionExample">

				  <div class="accordion-item">

					<h2 class="accordion-header" id="headingOne">

					  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">

						<?=get_option('first_accordion_title'.$lang )?>

					  </button>

					</h2>

					<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">

					  <div class="accordion-body">

						<p class="text-justify"><?=get_option('first_accordion_content'.$lang )?></p>

						<p class="text-center"><img src="<?=get_option('first_accordion_img')?>" class="img-responsive corporate-acc-img mt-3"></p>

					  </div>

					</div>

				  </div>

				  <div class="accordion-item">

					<h2 class="accordion-header" id="headingTwo">

					  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

						<?=get_option('second_accordion_title'.$lang )?>

					  </button>

					</h2>

					<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">

					  <div class="accordion-body">

						<p class="text-justify"><?=get_option('second_accordion_content'.$lang )?></p>

					  </div>

					</div>

				  </div>

				  <div class="accordion-item">

					<h2 class="accordion-header" id="headingThree">

					  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

						<?=get_option('third_accordion_title'.$lang )?>

					  </button>

					</h2>

					<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">

					  <div class="accordion-body">

						<div class="corporate-slider owl-carousel owl-theme">

							<div class="corporate-slider-box">

								<div class="corporate-slider-img">

									<img src="<?=get_option('first_accordion_slider_img')?>">

								</div>

								<h4 class="text-center">

									<?=get_option('first_accordion_slider_title'.$lang )?>

								</h4>

								<p class="text-justify">

									<?=get_option('first_accordion_slider_content'.$lang )?>

								</p>

							</div>

							<div class="corporate-slider-box pt-100">

								<div class="corporate-slider-img">

									<img src="<?=get_option('second_accordion_slider_img')?>">

								</div>

								<h4 class="text-center">

									<?=get_option('second_accordion_slider_title'.$lang )?>

								</h4>

							</div>

							<div class="corporate-slider-box pt-100">

								<h4 class="text-center"><?=get_option('third_accordion_slider_title'.$lang )?></h4>

								<p class="text-justify">

									<?=get_option('third_accordion_slider_content'.$lang )?>

								</p>

							</div>

						</div>

					  </div>

					</div>

				  </div>

				</div>

			</div>

		</div>

	</div>

</section>

<?php endif ?>

<?php get_footer()?>