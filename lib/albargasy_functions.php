<?php

function albargasy_get_sliders($no){
    $args = array(
       'post_type'       => 'slider',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'orderby'         => 'date',
       'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );
}

function albargasy_get_vechiles($no, $posts_in){
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $args = array(
       'post_type'       => 'vechile',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'paged'           =>  $paged,
       'orderby'         => 'date',
       'post__in'        =>  $posts_in,
       'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );
}
/*****************************************************************/
function albargasy_get_vechiles_without_restrictions($no){
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $args = array(
       'post_type'       => 'vechile',
       'post_status'     => 'publish',
       'paged'           =>  $paged,
       'posts_per_page'  =>  $no,
       'orderby'         => 'date',
       'order'           => 'DESC'
    );
    return $posts = new WP_Query( $args );
}
/*****************************************************************/
function albargasy_get_services($no, $posts_in){
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $args = array(
       'post_type'       => 'service',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'paged'           =>  $paged,
       'orderby'         => 'date',
       'post__in'        =>  $posts_in,
       'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );
}
/*****************************************************************/
function albargasy_get_services_without_restrictions($no){
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $args = array(
       'post_type'       => 'service',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'paged'           =>  $paged,
       'orderby'         => 'date',
       'order'           => 'DESC'
    );
    return $posts = new WP_Query( $args );
}
/*****************************************************************/
function albargasy_get_directors($no, $posts_in){
    $args = array(
       'post_type'       => 'director',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'orderby'         => 'post__in',
       'post__in'        =>  $posts_in,
       'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );
}
/*****************************************************************/
function albargasy_get_directors_without_restrictions($no){
    $args = array(
       'post_type'       => 'director',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'orderby'         => 'date',
       'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );
}
/*****************************************************************/
function albargasy_get_awards($no){
    $args = array(
       'post_type'       => 'award',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'orderby'         => 'date',
       'order'           => 'DESC'
    );
    return $posts = new WP_Query( $args );
}
/*****************************************************************/
function albargasy_get_about_slider($no){
    $args = array(
       'post_type'       => 'about-slider',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'orderby'         => 'date',
       'order'           => 'DESC'
    );
    return $posts = new WP_Query( $args );
}
/*****************************************************************/
function albargasy_get_careers($no, $posts_in){
    $args = array(
       'post_type'       => 'career',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'orderby'         => 'post__in',
       'post__in'        =>  $posts_in,
       'order'           => 'DESC'
    );
    return $posts = new WP_Query( $args );
}
/*****************************************************************/
function albargasy_get_careers_without_restrictions($no){
    $args = array(
       'post_type'       => 'career',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'orderby'         => 'date',
       'order'           => 'DESC'
    );
    return $posts = new WP_Query( $args );
}
/*****************************************************************/
function albargasy_get_news($no, $posts_in){
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $args = array(
       'post_type'       => 'post',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'paged'           =>  $paged,
       'orderby'         => 'post__in',
       'post__in'        =>  $posts_in,
       'order'           => 'DESC'
    );
    return $posts = new WP_Query( $args );
}

/*****************************************************************/
function albargasy_get_news_without_restrictions($no){
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $args = array(
       'post_type'       => 'post',
       'post_status'     => 'publish',
       'posts_per_page'  =>  $no,
       'paged'           =>  $paged,
       'orderby'         => 'date',
       'order'           => 'DESC'
    );
    return $posts = new WP_Query( $args );
}
/*****************************************************************/
function albargasy_get_vechiles_with_tax($no,$term_id){
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $args = array(
        'post_type'       => 'vechile',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'paged'           =>  $paged,
        'orderby'         => 'date',
        'order'           => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'brands',
                'field' => 'term_id',
                'terms' => $term_id,
            ),
        ),
    );
    return $posts = new WP_Query( $args );
}

/*****************************************************************/
function albargasy_get_news_with_tax($no,$term_id){
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $args = array(
        'post_type'       => 'post',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'paged'           =>  $paged,
        'orderby'         => 'date',
        'order'           => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => $term_id,
            ),
        ),
    );
    return $posts = new WP_Query( $args );
}