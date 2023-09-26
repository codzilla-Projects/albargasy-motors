<?php

    if ( empty(pll_current_language()) )

        $lang = '_'.pll_default_language();

    else

        $lang = '_'.pll_current_language();

/**

** Template Name: Brands Template

**/

    get_header();

    get_template_part('template-parts/breadcrumb');

    $terms = get_terms(
        array(

        'taxonomy'      => 'brands',

        'orderby'       => 'brand_order',

        'order'         => 'ASC',

        'hide_empty'    => true,

        'include'       => get_option('brand_category'.$lang),

        'meta_query' => array(
            array(
                'key' => 'brand_order',
                'type' => 'NUMERIC',
                )
            ),

        )

    );

    $number = sizeof ($terms);

?>

<section class="pt-100 pb-100 brand-collection">

    <div class="overlay"></div>

    <div class="container-fluid">

        <div class="row d-flex align-items-center justify-content-center">

            <?php foreach ($terms as $term) : if( $term->slug == 'uncategorized' ){ continue; } ?>

            <div class="col-md-4">

                <div class="brand-box">

                    <a href="<?=get_term_link( $term ) ?>">

                        <img class="img-<?=$term->term_id?>" src="<?= z_taxonomy_image_url( $term->term_id, NULL, TRUE ) ?>" >

                    </a>

                </div>

            </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>

<?php get_footer()?>
