<?php  get_header(); 
get_template_part('template-parts/breadcrumb'); 
if ( have_posts() ) : while ( have_posts() ) : the_post(); $post_id = get_the_ID(); 
	$job_description         = get_post_meta( $post_id, 'job_description', true );
    $key_responsibilities    = get_post_meta( $post_id, 'key_responsibilities', true );
    $skills_experience       = get_post_meta( $post_id, 'skills_experience', true );
    $date_posted             = get_post_meta( $post_id, 'date_posted', true);
    $location                = get_post_meta( $post_id, 'location', true);
    $offered_salary          = get_post_meta( $post_id, 'offered_salary', true);
    $expiration_date         = get_post_meta( $post_id, 'expiration_date', true);
    $qualification           = get_post_meta( $post_id, 'qualification', true);
    $career_level            = get_post_meta( $post_id, 'career_level', true);
?>
<!-- Start About Area -->
<section class="careers-area-details pt-100 pb-100">
    <div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<?php if (!empty($job_description)) : ?>
				<h3 class="title-orange"><?php _e('Responsibilities:', 'albargasy') ?></h3>
				<?=$job_description?>
				<div class="clearfix pt-50"></div>
				<?php endif?>
				<?php if (!empty($key_responsibilities)) : ?>
				<h3 class="title-orange"><?php _e('Requirements:', 'albargasy') ?></h3>
				<?=$key_responsibilities?>
				<div class="clearfix pt-50"></div>
				<?php endif?>
				
				<?php if (!empty($skills_experience)) : ?>
				<h3 class="title-orange"><?php _e('We Offer:', 'albargasy') ?></h3>
				<?=$skills_experience?>
				<div class="clearfix pt-50"></div>
				<?php endif?>
				
				<ul>
					<li><?php _e('if you interested kindly Send your CV to:', 'albargasy') ?>&nbsp;<a href="mailto:jobs@albargasy.com"><?php _e('jobs@albargasy.com', 'albargasy') ?></a></li>
					<li><?php _e('Subject:', 'albargasy') ?> <?php the_title()?>.</li>
				</ul>
				
				
			</div>
			<div class="col-md-4">
				<div class="career-box-inner">
					<h2><?php _e('Job Overview', 'albargasy') ?></h2>
					<?php if (!empty($date_posted)) : ?>
					<div class="row">
						<div class="col-md-4">
							<p><b><?php _e('Date posted:', 'albargasy') ?></b></p>
						</div>
						<div class="col-md-8">
							<p><?=$date_posted?></p>
						</div>
					</div>	
					<div class="clearfix pt-50"></div>
					<?php endif ?>
					<?php if (!empty($location)) : ?>
					<div class="row">
						<div class="col-md-4">
							<p><b><?php _e('Location:', 'albargasy') ?></b></p>
						</div>
						<div class="col-md-8">
							<p><?=$location?></p>
						</div>
					</div>	
					<div class="clearfix pt-50"></div>
					<?php endif ?>
					<?php if (!empty($offered_salary)) : ?>
					<div class="row">
						<div class="col-md-4">
							<p><b><?php _e('Offered Salary:', 'albargasy') ?></b></p>
						</div>
						<div class="col-md-8">
							<p><?=$offered_salary?></p>
						</div>
					</div>	
					<div class="clearfix pt-50"></div>
					<?php endif ?>
					<?php if (!empty($expiration_date)) : ?>
					<div class="row">
						<div class="col-md-4">
							<p><b><?php _e('Expiration Date:', 'albargasy') ?></b></p>
						</div>
						<div class="col-md-8">
							<p><?=$expiration_date?></p>
						</div>
					</div>
					<div class="clearfix pt-50"></div>
					<?php endif ?>
					<?php if (!empty($qualification)) : ?>
					<div class="row">
						<div class="col-md-4">
							<p><b><?php _e('Qualification:', 'albargasy') ?></b></p>
						</div>
						<div class="col-md-8">
							<p><?=$qualification?></p>
						</div>
					</div>
					<div class="clearfix pt-50"></div>
					<?php endif ?>
					<?php if (!empty($career_level)) : ?>
					<div class="row">
						<div class="col-md-4">
							<p><b><?php _e('Career level:', 'albargasy') ?></b></p>
						</div>
						<div class="col-md-8">
							<p><?=$career_level?></p>
						</div>
					</div>	
					<div class="clearfix pt-50"></div>
					<?php endif ?>
				</div>
			</div>
		</div>
    </div>
</section>
<!-- End About Area -->
<?php endwhile; endif; get_footer()?>