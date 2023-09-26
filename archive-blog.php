<?php

    if ( empty(pll_current_language()) )

        $lang = '_'.pll_default_language();

    else

        $lang = '_'.pll_current_language();

/**

** Template Name: News Template

**/

	get_header(); 

	get_template_part('template-parts/breadcrumb'); 

?>

<?php 

    $news = albargasy_get_news_without_restrictions(-1);

    if($news->have_posts()) :

?>

<!-- Start About Area -->

<section class="news-area pt-100 pb-100">

    <div class="container-fluid">

		<div class="section-title underline white-title">

		   <h2><?php _e('Latest News','albargasy') ?>	</h2>

		</div>

        <div class="row">

        	<?php while($news->have_posts()) : $news->the_post();?>

            <div class="col-lg-4">

                <div class="news-box">

					<div class="news-image">

						<a href="<?php the_permalink()?>">
							<div class="blog-img" style="background-image: url('<?php the_post_thumbnail_url()?>');">
								
							</div>
						</a>

					</div>

					<div class="news-content">

						<div class="news-title-box">

							<h3 class="news-title">

								<a href="<?php the_permalink()?>">

									<?php the_title(); ?>
								</a>

							</h3>

						</div>

						<p><?php the_excerpt(); ?></p>								

					</div>

					<div class="news-date row">
						<div class="col-md-6 col-sm-6 col p-0">
							<a href="<?php the_permalink()?>" class="default-btn">
	                            <?php _e('Read More','albargasy') ?><span>»</span>
	                        </a>
                        </div>
                        <div class="col-md-6 col-sm-6 col">
	                        <span>
								<?php the_time('M') ?>  <?php the_time('j') ?>,  <?php the_time('Y')?>
							</span>
						</div>

					</div>

				</div>

            </div>

            <?php endwhile; wp_reset_query();?>

        </div>

    </div>

</section>

<!-- End About Area -->

<?php endif ?>

<?php get_footer()?>