<?php  
	get_header(); 
	if ( have_posts() ) :
	$category = single_term_title("", false);
?>
<!-- start Page Banner Area -->
<div class="page-breadcrumb">
	<div class="container-fluid">
		<ul class="breadcrumb-list">
			<li>
				<a href="<?php bloginfo('url')?>"><?php _e('Home','albargasy') ?></a>
			</li>
			<li>
				<?=$category;?>
			</li>
		</ul>
	</div>
</div>
<!-- End Page Banner Area -->
<!-- Start About Area -->
<section class="news-area pt-100 pb-100">
    <div class="container-fluid">
		<div class="section-title underline white-title">
		   <h2>
		   		<?=$category;?>
		   </h2>
		</div>
        <div class="row">
        	<?php  while ( have_posts() ) : the_post();?>
            <div class="col-lg-4">
                <div class="news-box">
					<div class="news-image">
						<a href="<?php the_permalink()?>">
							<img src="<?php the_post_thumbnail_url()?>" class="img-responsive" alt="<?php the_title()?>"/>
						</a>
					</div>
					<div class="news-content">
						<div class="news-title-box">
							<h3 class="news-title">
								<a href="<?php the_permalink()?>">
									<?=wp_trim_words( get_the_title(), 8, '… ' ); ?>
								</a>
							</h3>
						</div>							
					</div>
				</div>
            </div>
            <?php endwhile;?>
        </div>
		<?php wp_reset_query(); endif; ?>
</div>

</section>
<!-- End About Area -->

<?php get_footer()?>