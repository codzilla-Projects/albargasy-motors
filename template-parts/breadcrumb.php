<!-- start Page Banner Area -->
<div class="page-breadcrumb">
    <div class="container-fluid">
        <ul class="breadcrumb-list">
            <li>
                <a href="<?php bloginfo('url')?>"><?php _e('Home','albargasy') ?></a>
            </li>
            <?php if (is_tax( 'brands' )): ?>
            <li class="breadcrumb-item">
                <a href="<?php if ( ICL_LANGUAGE_CODE=='ar' ): ?><?=albargasy_BlogUrl ?>/ar/الماركات/<?php else: ?> <?=albargasy_BlogUrl ?>/brands/<?php endif ?>"><?php _e('Brands','albargasy') ?></a>
            </li>
            <?php endif?>
            <?php if( is_single() && 'vechile' == get_post_type() ||  is_single() && 'service' == get_post_type() ): ?>
                <?php $terms = wp_get_post_terms(get_the_ID(), 'brands');
                foreach( $terms as $term ) :?>
                    <li>
                        <a href="<?=get_term_link( $term ) ?>"><?= $term->name;?></a>
                    </li>
                <?php endforeach ?>
            <?php endif ?>
            <?php if( is_single() && 'post' == get_post_type() ): ?>
                <?php $terms = wp_get_post_terms(get_the_ID(), 'category');
                foreach( $terms as $term ) :?>
                    <li>
                        <a href="<?=get_term_link( $term ) ?>"><?= $term->name;?></a>
                    </li>
                <?php endforeach ?>
            <?php endif ?>
            <li>
            <?php
                global $page, $paged, $post;
                if (is_tax()) {
                    $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
                    $term_title = $term->name;
                    echo "$term_title ";
                }
                    elseif ( is_404() ){ echo __('Page Not Found','albargasy');}
                    elseif (is_archive()){get_the_archive_title();}
                    elseif ( is_category() ) {
                        $category = single_term_title("", false);
                        echo $category;
                    } else { wp_title( '', true, 'right' );}
            ?>
            </li>
        </ul>
    </div>
</div>
<!-- End Page Banner Area -->
