<?php
    if ( empty(pll_current_language()) )
        $lang = '_'.pll_default_language();
    else
        $lang = '_'.pll_current_language();
/**
** Template Name: Success Story Template
**/
	get_header(); 
	get_template_part('template-parts/breadcrumb'); 
?>
<?php if (get_option('chairman_speech'.$lang ) != '1')  :  ?>
<!-- Start About Area -->
<section class="chairman-area pt-50 pb-50 position-relative" style="background: url('<?=get_option('success_story_bg_img') ?>');">
    <div class="overlay position-absolute"></div>
    <div class="container position-relative">
		<div class="section-title underline white-title">
		   <h2><?=get_option('success_story_title'.$lang)?></h2>
		</div>
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="success-img single-about-image text-center d-flex align-items-center justify-content-center">
                    <img src="<?=get_option('success_story_img')?>" class="img-responsive mt-2" alt="<?=get_option('success_story_title'.$lang)?>">
                    <img src="<?=get_option('success_story_second_img')?>" class="img-responsive mt-2" alt="<?=get_option('success_story_title'.$lang)?>">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="chairman-content">
                    <?=get_option('success_story_content'.$lang)?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->
<?php endif ?>
<?php get_footer()?>