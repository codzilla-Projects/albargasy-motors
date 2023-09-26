<?php
    if ( empty(pll_current_language()) )
        $lang = '_'.pll_default_language();
    else
        $lang = '_'.pll_current_language();
/**
** Template Name: Financial Template
**/
	get_header(); 
	get_template_part('template-parts/breadcrumb'); 
?>

<!-- Start About Area -->
<section class="financial-sec pt-100 pb-100" style="background:url('<?=get_option('financial_img')?>')">
	<div class="financial-overlay"></div>
    <div class="container-fluid">
		<div class="financial-sales-sec">
			<?php if (get_option('sales_hide'.$lang) != '1') : ?>
			<div class="row">
				<div class="col-md-3">
					<div class="wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<h2><?=get_option('sales_title'.$lang)?></h2>
					</div>
				</div>
				<div class="col-md-9">
					<div class="wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="section-title underline white-title fs-25">
						   <h2><?=get_option('sales_small_title'.$lang)?></h2>
						</div>
						<p class="text-justify"><?=get_option('sales_content'.$lang)?></p>
					</div>
				</div>
			</div>
			<hr class="orange-dv" />
			<?php endif ?>
			<?php if (get_option('banks_hide'.$lang) != '1') : ?>
			<div class="row">
				<div class="col-md-3">
					<div class="wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<h4 class="mt-4"><?=get_option('banks_title'.$lang)?></h4>
					</div>
				</div>
				<div class="col-md-7">
					<div class="wow zoomIn" data-wow-delay="0ms" data-wow-duration="1500ms">
						<img src="<?=get_option('banks_img')?>" class="img-responsive" alt="<?=get_option('banks_title'.$lang)?>">
					</div>
					<hr class="wite-dv" />
				</div>
			</div>
			<?php endif ?>
			
			<?php if (get_option('entities_hide'.$lang) != '1') : ?>
			<div class="row">
				<div class="col-md-3">
					<div class="wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<h4 class="mt-5"><?=get_option('entities_title'.$lang)?></h4>
					</div>
				</div>
				<div class="col-md-9">
					<div class="wow zoomIn" data-wow-delay="0ms" data-wow-duration="1500ms">
						<img src="<?=get_option('entities_img')?>" class="img-responsive" alt="<?=get_option('entities_title'.$lang)?>">
					</div>
				</div>
			</div>
			<hr class="orange-dv" />
			<?php endif ?>
			<?php if (get_option('after_sales_hide'.$lang) != '1') : ?>
			<div class="row">
				<div class="col-md-3">
					<div class="wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<h3><?=get_option('after_sales_title'.$lang)?></h3>
					</div>
				</div>
				<div class="col-md-9">
					<div class="wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="section-title underline white-title fs-25">
						   <h2><?=get_option('after_sales_small_title'.$lang)?></h2>
						</div>
						<p class="text-justify"><?=get_option('after_sales_content'.$lang)?></p>
					</div>
				
					<img src="<?=get_option('after_sales_img')?>" class="img-responsive mt-3 wow zoomIn" data-wow-delay="5ms" data-wow-duration="500ms" alt="<?=get_option('after_sales_small_title'.$lang)?>">
				</div>
			</div>
			<?php endif ?>
		</div>
	</div>
</section>
<!-- End About Area -->
<?php get_footer()?>