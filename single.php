<?php  get_header();
get_template_part('template-parts/breadcrumb');
if ( have_posts() ) : while ( have_posts() ) : the_post(); $post_id = get_the_ID();
    $news_gallery           = get_post_meta( $post_id, 'news_gallery', true );

?>

<!-- Start About Area -->
<section class="news-area pt-100 pb-100">
    <div class="container-fluid">
        <div class="section-title white-title">
           <h4><?php the_title()?></h4>
        </div>
        <div class="news-detail-img">
            <img src="<?php the_post_thumbnail_url()?>" class="img-responsive" alt="<?php the_title()?>"/>
        </div>
        <div class="news-detail-box">
            <p><?php the_content()?></p>
        </div>
        <?php if (!empty($news_gallery)) :
        $count = count($news_gallery);?>
        <div class="news-gallery">
            <div class="row">
                <?php for( $i=0; $i<$count; $i++ ){?>
                <div class="col-lg-3">
                    <div class="gallery-item">
                        <a href="<?=$news_gallery[$i];?>" data-fancybox="images" data-caption="" class="link">
                            <img src="<?=$news_gallery[$i];?>" class="img-responsive" />
                        </a>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
        <?php endif?>
    </div>
</section>
<!-- End About Area -->
<?php endwhile; endif; get_footer()?>
