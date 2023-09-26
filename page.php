<?php
    get_header(); 
    get_template_part('template-parts/breadcrumb'); 
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); $page_id = get_the_ID();?>
    <section class="chairman-area pt-100 pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="chairman-content">
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile;endif; ?>
<?php get_footer();?>