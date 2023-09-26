<?php
    if ( empty(pll_current_language()) )
        $lang = '_'.pll_default_language();
    else
        $lang = '_'.pll_current_language();
/**
** Template Name: About Us Template
**/
	get_header(); 
	get_template_part('template-parts/breadcrumb'); 
?>
<?php if (get_option('chairman_speech'.$lang ) != '1')  :  ?>
<!-- Start About Area -->
<section class="chairman-area pt-100 pb-100">
    <div class="container">
		<div class="section-title underline white-title">
		   <h2><?=get_option('chairman_title'.$lang)?></h2>
		</div>
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="single-about-image text-center">
                    <img src="<?=get_option('chairman_speech_img')?>" class="img-responsive mt-2" alt="Chairman Message">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="chairman-content">
                    <?=get_option('chairman_content'.$lang)?>
                </div>
				<div class="chairman-signature">
					<b><i>&nbsp; &nbsp;<?=get_option('chairman_name'.$lang)?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br><?=get_option('chairman_signature'.$lang)?></i></b>
				</div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->
<?php endif ?>
<?php 
    if (get_option('how_it_start_hide'.$lang ) != '1')  : 
    $about_slider = albargasy_get_about_slider(9 ,get_option('about_slider'.$lang));
    $post_number = $about_slider->post_count;
    $number = $post_number * 300 - 300;
    if($about_slider->have_posts()) :
?>
<!-- Start About Area -->
<section class="how-started pt-8 pb-100">
    <div class="container">
		<div class="section-title underline white-title">
		   <h2><?=get_option('how_it_start_title'.$lang)?></h2>
		</div>
	</div>
	<div class="how-started-bg">
		<div class="container">
			<ul class="how-started-list">
				<?php while($about_slider->have_posts()) : $about_slider->the_post()?>
				<li class="tooltip wow fadeInUp" data-wow-delay="<?=$number?>ms" data-wow-duration="2500ms">
					<?php the_excerpt()?> <br> 
					<div class="timeline-circle"><i class="fa fa-angle-down"></i></div>
					<span class="tooltiptext"><?php the_title()?></span>
				</li>
				<?php $number = $number - 300; endwhile; wp_reset_query();?>
			</ul>
		</div>
    </div>
</section>
<!-- End About Area -->
<?php endif;endif ?>
<?php 
    if (get_option('directors_hide'.$lang ) != '1')  : 
    $directors = albargasy_get_directors(9, get_option('directors'.$lang));
    if($directors->have_posts()) :
?>
<!-- Start About Area -->
<section class="brand-directors">
    <div class="container-fluid">
		<div class="section-title underline white-title">
		   <h2><?=get_option('directors_title'.$lang)?></h2>
		</div>
		<div class="row d-block d-md-flex">
			<?php 
				while($directors->have_posts()) : $directors->the_post();
				$position = get_post_meta( get_the_ID(), 'job_position', true );
			?>
			<div class="col-md-4">
				<div class="brand-directors-box">
					<div class="directors-img">
						<img src="<?php the_post_thumbnail_url()?>" class="img-responsive" alt="<?php the_title()?>" />
					</div>	
					<div class="directors-content">
						<h2 class="text-center">
							<?php the_title()?>
						</h2>
						<h2 class="text-center">
							<?=$position?>
						</h2>
						<p><?php the_content()?></p>
					</div>
				</div>
			</div>
			<?php endwhile; wp_reset_query();?>
		</div>
	</div>
</section>
<!-- End About Area -->
<?php endif;endif ?>
<?php get_footer()?>