<?php  

	get_header(); 

	get_template_part('template-parts/breadcrumb'); 

	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

	$vechile_list = albargasy_get_vechiles_with_tax(12, $term->term_id); 

	if($vechile_list->have_posts()) :

?>

<section class="portfolio-area-page pt-50 pb-50 wow fadeIn animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeIn;">

	<div class="container-fluid">

    <div class="row">

        <?php while($vechile_list->have_posts()) : $vechile_list->the_post();?>

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

       <?php endwhile;?>

    </div>
    <div class="text-center load-more-products mt-4">
        <nav class="page-pagination">
	        <?php    
	        	$args = array(
	               'format'             => '?paged=%#%',
                   'current'            => max( 1, get_query_var('paged') ),
                   'total'              => $vechile_list->max_num_pages,
                   'show_all'           => false,
                   'end_size'           => 1,
                   'mid_size'           => 2,
                   'prev_next'          => true,
                   'next_text'          => '<i class="fa fa-angle-right"></i>',
                   'prev_text'          => '<i class="fa fa-angle-left"></i>',
                   'type'               => 'list',
	              );
	        ?>
	        <?=paginate_links($args); ?> 
	    </nav>           
	</div>
	<?php wp_reset_query(); ?>

 </div>

</section>

<?php endif?>

<?php get_footer()?>