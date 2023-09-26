<?php 

function home_content_area_callback() {

    if ( empty(pll_current_language()) )

        $lang = '_'.pll_default_language(); 

    else

        $lang = '_'.pll_current_language();



    $wp_editor_settings = array( 

        'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), 

        'textarea_rows'=> 5,

        'drag_drop_upload'=> true,

        'wpautop' => false,

        'media_buttons'=> true,

        'class'=>'form-control'

    ); 



    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ):

        foreach ( $_POST as $key => $value ):



            if ( in_array( $key ,[

                    'about_content'.$lang,

                    'about_small_content'.$lang

                    ] ) 

                )

                $value = stripcslashes($value);



            update_option( $key , $value );

        endforeach;

        if(!isset($_POST['slider_hide'.$lang])) delete_option('slider_hide' .$lang);

        if(!isset($_POST['about_hide'.$lang])) delete_option('about_hide' .$lang);

        if(!isset($_POST['team_hide'.$lang])) delete_option('team_hide' .$lang);

        if(!isset($_POST['brand_cat_hide'.$lang])) delete_option('brand_cat_hide' .$lang);

        if(!isset($_POST['vechile_hide'.$lang])) delete_option( 'vechile_hide' .$lang);

        if(!isset($_POST['services_hide'.$lang])) delete_option( 'services_hide' .$lang);

        if(!isset($_POST['counter_hide'.$lang])) delete_option( 'counter_hide' .$lang);

        if(!isset($_POST['awards_hide'.$lang])) delete_option( 'awards_hide' .$lang);

    endif; 

?>

 <div <?php if ( ICL_LANGUAGE_CODE=='ar' ){echo'dir="rtl"';} ?> class="container-fluid text-start padding-right-4">

    <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">

            <!-- Top Navigation -->

            <header class="codrops-header">

                <h1 class="text-center site-title"><span><?php _e('Home Page Settings', 'albargasy'); ?></span></h1>

            </header>

        </div>

        <br/>

        <div class="d-flex align-items-start p-0 m-0">

            <div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3 rounded" id="v-pills-tab" role="tablist" aria-orientation="vertical">



                <button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true"><?php _e('SLider Section','albargasy') ?></button>

                <button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false"><?php _e('About Section','albargasy') ?></button>

                <button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false"><?php _e('Team Section','albargasy') ?></button>

                <button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false"><?php _e('Brands Section','albargasy') ?></button>

                <button class="nav-link" id="v-pills-fifthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fifthsection" type="button" role="tab" aria-controls="v-pills-fifthsection" aria-selected="false"><?php _e('Vechile Section','albargasy') ?></button>

                <button class="nav-link" id="v-pills-sixthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sixthsection" type="button" role="tab" aria-controls="v-pills-sixthsection" aria-selected="false"><?php _e('Services Section','albargasy') ?></button>

                <button class="nav-link" id="v-pills-seventhsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-seventhsection" type="button" role="tab" aria-controls="v-pills-seventhsection" aria-selected="false"><?php _e('Counter Section','albargasy') ?></button>

                <button class="nav-link" id="v-pills-eightsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-eightsection" type="button" role="tab" aria-controls="v-pills-eightsection" aria-selected="false"><?php _e('Awards Section','albargasy') ?></button>



            </div>



            <div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">

                <form method="POST" class = "form-horizontal form_back p-5 rounded">

                    <div class="tab-content" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

                            <div class="form-group text-start">                  

                                <div class="inline-block">

                                    <?php $name = 'slider_hide'.$lang ; ?>

                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                </div>

                                <label for="<?= $name ?>" class="text-white">

                                    <?php _e('Hide Section','albargasy') ?>

                                </label>

                            </div>

                            <div class="form-group">

                                <?php $name = 'slider_number'.$lang ; ?>

                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white"><?php _e('Slides Number','albargasy') ?></label>

                                <div class="col-sm-12 text-start ">

                                    <input type="number" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">

                                </div>

                            </div>

                            <div class="form-group">

                                <?php $name = 'slider_bg_img'.$lang ; ?>

                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">

                                    <?php _e('Sliders Background Image','albargasy') ?>

                                </label>

                                <div class="col-sm-12 text-start ">

                                    <input class="<?=$name ?>_url site_half" type="text" name="<?=$name ?>" size="60" value="<?= get_option( $name ); ?>">

                                    <a href="#" class="<?=$name ?>_upload btn btn-info"><?php _e('Choose','albargasy') ?></a>

                                    <?php if (!empty(get_option($name))): ?>

                                    <img class="img-fluid img-thumbnail w-50 mt-2 <?=$name ?>" src="<?= get_option( $name ); ?>" height="100" style="max-width:100%" />

                                    <?php endif ?>

                                </div>

                            </div>

                        </div>



                        <div class="tab-pane fade show" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

                            <div class="row">

                                <div class="col-md-8">

                                    <div class="services">

                                        <div class="form-group text-start">                  

                                            <div class="inline-block">

                                                <?php $name = 'about_hide'.$lang ; ?>

                                                <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                            </div>

                                            <label for="<?= $name ?>" class="text-white">

                                                <?php _e('Hide Section','albargasy') ?>

                                            </label>

                                        </div>

                                        <div class="form-group">

                                            <?php $name = 'about_title'.$lang ; ?>

                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">

                                                <?php _e('About Title','albargasy') ?>

                                            </label>

                                            <div class="col-sm-12 text-start ">

                                                <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">

                                            </div>

                                        </div>



                                        <div class="form-group text-start">

                                            <?php $name = 'about_content'.$lang ; ?>

                                            <label for="<?= $name ?>" class="control-label text-white">

                                                <?php _e('About Content','albargasy') ?>

                                            </label>

                                            <div class="col-sm-12">

                                                <?php wp_editor( get_option( $name ), $name,  $wp_editor_settings);  ?>

                                            </div>

                                        </div>



                                        <div class="form-group">

                                            <?php $name = 'about_small_title'.$lang ; ?>

                                            <label for="<?= $name ?>" class="col-sm-12 text-start  control-label text-white">

                                                <?php _e('About Small Title','albargasy') ?>

                                            </label>

                                            <div class="col-sm-12 text-start ">

                                                <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">

                                            </div>

                                        </div>



                                        <div class="form-group">

                                            <?php $name = 'about_small_content'.$lang ; ?>

                                            <label for="<?= $name ?>" class="control-label text-white"> <?php _e('About Small Content','albargasy') ?>

                                            </label>

                                            <div class="col-sm-12">

                                                <?php wp_editor( get_option( $name ), $name,  $wp_editor_settings);  ?>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="services">

                                        <div class="form-group">

                                            <?php $name = 'experience_number'.$lang ; ?>

                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white"><?php _e('Experience Number','albargasy') ?></label>

                                            <div class="col-sm-12 text-start ">

                                                <input type="number" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">

                                            </div>

                                        </div>



                                        <div class="form-group">

                                            <?php $name = 'experience_years'.$lang ; ?>

                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">

                                                <?php _e('Experience Text','albargasy') ?>

                                            </label>

                                            <div class="col-sm-12 text-start ">

                                                <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div> 

                        </div>



                        <div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">

                            <div class="form-group text-start">                  

                                <div class="inline-block">

                                    <?php $name = 'team_hide'.$lang ; ?>

                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                </div>

                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">

                                    <?php _e('Hide Section','albargasy') ?>

                                </label>

                            </div>

                            <div class="form-group">

                                <?php $name = 'team_img' ; ?>

                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">

                                    <?php _e('Team Image','albargasy') ?>

                                </label>

                                <div class="col-sm-12 text-start ">

                                    <input class="<?=$name ?>_url site_half" type="text" name="<?=$name ?>" size="60" value="<?= get_option( $name ); ?>">

                                    <a href="#" class="<?=$name ?>_upload btn btn-info"><?php _e('Choose','albargasy') ?></a>

                                    <?php if (!empty(get_option($name))): ?>

                                    <img class="img-fluid img-thumbnail w-50 mt-2 <?=$name ?>" src="<?= get_option( $name ); ?>" height="100" style="max-width:100%" />

                                    <?php endif ?>

                                </div>

                            </div>

                        </div>

                        

                        <div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">

                            <div class="form-group text-start">                  

                                <div class="inline-block">

                                    <?php $name = 'brand_cat_hide'.$lang ; ?>

                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                </div>

                                <label for="<?= $name ?>" class="text-white">

                                    <?php _e('Hide Section','albargasy') ?>

                                </label>

                            </div>

                            <div class="form-group">

                                <?php $name = 'brand_cat_title'.$lang ; ?>

                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white"><?php _e('Brand Category Title','albargasy') ?></label>

                                <div class="col-sm-12 text-start ">

                                    <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">

                                </div>

                            </div>



                            <div class="form-group">

                                <?php $name = 'brand_category'.$lang.'[]' ; $terms = get_terms( array('taxonomy' => 'brands','hide_empty' => true,) );?>

                                <label for="<?= $name ?>" class="col-sm-12 text-start  control-label text-white"><?php _e('Brand Category','albargasy') ?></label>



                                <div class="col-sm-12 text-start multiSelect_field">

                                    <select  name="<?= $name ?>" multiple class="js-example-basic-multiple">

                                    <option value = ''>

                                        <?php _e('Choose Category','albargasy') ?>

                                    </option>

                                    <?php $name_new = get_option('brand_category'.$lang); ?>

                                     <?php foreach ($terms as $term) : ?>

                                    <?php
                                    if (!empty($name_new)) {
                                    $selected_term = ( in_array($term->term_id, $name_new) ) ? 'selected="selected"' :  '';
                                    }
                                    ?>

                                    <option value="<?= $term->term_id; ?>"  <?php if (!empty($selected_term)) {echo $selected_term;} ?> >    <?= $term->name; ?>

                                    </option>

                                    <?php endforeach; ?>

                                    </select>

                                </div>

                            </div>

                        </div>



                        <div class="tab-pane fade show" id="v-pills-fifthsection" role="tabpanel" aria-labelledby="v-pills-fifthsection-tab">

                            <div class="form-group text-start">                  

                                <div class="inline-block">

                                    <?php $name = 'vechile_hide'.$lang ; ?>

                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                </div>

                                <label for="<?= $name ?>" class="text-white">

                                    <?php _e('Hide Section','albargasy') ?>

                                </label>

                            </div>



                            <div class="form-group">

                                <?php 
                                    $name = 'vechile_posts'.$lang.'[]'; 
                                    $vechiles = albargasy_get_vechiles_without_restrictions(-1); 
                                    if($vechiles->have_posts()) :
                                ?>
                                <?php $vechile_posts = get_option('vechile_posts'.$lang); ?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start  control-label text-white"><?php _e('Choose Vechiles','albargasy') ?></label>

                                <div class="col-sm-12 text-start multiSelect_field">

                                    <select  name="<?= $name ?>" multiple class="js-example-basic-multiple">

                                    <option value = ''><?php _e('Choose Vechiles','albargasy') ?></option>
                                    
                                    <?php while($vechiles->have_posts()) : $vechiles->the_post();?>

                                   <?php
                                   if (!empty($vechile_posts)) {
                                        $selected_post = ( in_array(get_the_ID(), $vechile_posts) ) ? 'selected' :  '';
                                    }
                                    ?>

                                    <option value="<?= get_the_ID();?>"  <?php if (!empty($selected_post)) {echo $selected_post;}; ?> >       <?= the_title(); ?>

                                    </option>

                                    <?php endwhile; wp_reset_query();?>

                                    </select>

                                </div>

                                <?php endif;?>

                            </div>



                        </div>



                        <div class="tab-pane fade show" id="v-pills-sixthsection" role="tabpanel" aria-labelledby="v-pills-sixthsection-tab">

                            <div class="form-group">

                                <div class="form-group text-start">                  

                                    <div class="inline-block">

                                        <?php $name = 'services_hide'.$lang ; ?>

                                        <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                    </div>

                                    <label for="<?= $name ?>" class="text-white">

                                        <?php _e('Hide Section','albargasy') ?>

                                    </label>

                                </div>

                                <div class="form-group">

                                    <?php $name = 'services_title'.$lang ; ?>

                                    <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">

                                        <?php _e('Services Title','albargasy') ?>

                                    </label>

                                    <div class="col-sm-12 text-start ">

                                        <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">

                                    </div>

                                </div>

                            </div>



                            <div class="form-group">

                                <?php 
                                    $name = 'services_posts'.$lang.'[]'; 
                                    $services = albargasy_get_services_without_restrictions(-1); 
                                    if($services->have_posts()) :
                                ?>
                                <?php $services_posts = get_option('services_posts'.$lang); ?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start  control-label text-white"><?php _e('Choose Services','albargasy') ?></label>

                                <div class="col-sm-12 text-start multiSelect_field">
                                    
                                    <select  name="<?= $name ?>" multiple class="js-example-basic-multiple">

                                    <option value = ''><?php _e('Choose Services','albargasy') ?></option>

                                    <?php while($services->have_posts()) : $services->the_post();?>

                                    <?php
                                    if (!empty($services_posts)) {
                                     
                                        $selected_post = ( in_array(get_the_ID(), $services_posts) ) ? 'selected' :  '';
                                    }
                                    ?>

                                    <option value="<?= get_the_ID() ?>"  <?php if (!empty($selected_post)) {echo $selected_post;}; ?> >       
                                        <?= the_title(); ?>
                                        <?php $terms = wp_get_post_terms(get_the_ID(), 'brands'); ?>
                                        <?php foreach( $terms as $term ) :?>
                                        ( <?= $term->name;?> )
                                        <?php endforeach ?>
                                    </option>

                                    <?php endwhile; wp_reset_query();?>

                                    </select>

                                </div>

                                <?php endif;?>

                            </div>

                        </div>



                        <div class="tab-pane fade show" id="v-pills-seventhsection" role="tabpanel" aria-labelledby="v-pills-seventhsection-tab">

                            <div class="form-group text-start">                  

                                <div class="inline-block">

                                    <?php $name = 'counter_hide'.$lang ; ?>

                                    <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                </div>

                                <label for="<?= $name ?>" class="text-white">

                                    <?php _e('Hide Section','albargasy') ?>

                                </label>

                            </div>

                            <div class="row">

                                <div class="col-md-4">

                                    <div class="services">

                                        <div class="form-group">

                                            <?php $name = 'first_counter_title'.$lang ; ?>

                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">First Counter Title</label>

                                            <div class="col-sm-12 text-start ">

                                                <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">

                                            </div>

                                        </div>



                                        <div class="form-group">

                                            <?php $name = 'first_counter_number'.$lang ; ?>

                                            <label for="<?= $name ?>" class="col-sm-12 text-start  control-label text-white">First Counter Number</label>

                                            <div class="col-sm-12 text-start ">

                                                <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">

                                            </div>

                                        </div>



                                        <div class="form-group">

                                            <?php $name = 'first_counter_small_title'.$lang ; ?>

                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">First Counter Small Title</label>

                                            <div class="col-sm-12 text-start ">

                                                <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="services">

                                        <div class="form-group">

                                            <?php $name = 'second_counter_title'.$lang ; ?>

                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">Second Counter Title</label>

                                            <div class="col-sm-12 text-start ">

                                                <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">

                                            </div>

                                        </div>



                                        <div class="form-group">

                                            <?php $name = 'second_counter_number'.$lang ; ?>

                                            <label for="<?= $name ?>" class="col-sm-12 text-start  control-label text-white">Second Counter Number</label>

                                            <div class="col-sm-12 text-start ">

                                                <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">

                                            </div>

                                        </div>



                                        <div class="form-group">

                                            <?php $name = 'second_counter_small_title'.$lang ; ?>

                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">Second Counter Small Title</label>

                                            <div class="col-sm-12 text-start ">

                                                <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="services">

                                        <div class="form-group">

                                            <?php $name = 'third_counter_title'.$lang ; ?>

                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">Third Counter Title</label>

                                            <div class="col-sm-12 text-start ">

                                                <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">

                                            </div>

                                        </div>



                                        <div class="form-group">

                                            <?php $name = 'third_counter_number'.$lang ; ?>

                                            <label for="<?= $name ?>" class="col-sm-12 text-start  control-label text-white">Third Counter Number</label>

                                            <div class="col-sm-12 text-start ">

                                                <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">

                                            </div>

                                        </div>



                                        <div class="form-group">

                                            <?php $name = 'third_counter_small_title'.$lang ; ?>

                                            <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">Third Counter Small Title</label>

                                            <div class="col-sm-12 text-start ">

                                                <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>



                        <div class="tab-pane fade show" id="v-pills-eightsection" role="tabpanel" aria-labelledby="v-pills-eightsection-tab">

                            <div class="form-group">

                                <div class="form-group text-start">                  

                                    <div class="inline-block">

                                        <?php $name = 'awards_hide'.$lang ; ?>

                                        <input type="checkbox" id="<?= $name ?>" name="<?= $name ?>" value="1" <?= get_option($name) == '1' ? 'checked' : ''; ?>>

                                    </div>

                                    <label for="<?= $name ?>" class="text-white">

                                        <?php _e('Hide Section','albargasy') ?>

                                    </label>

                                </div>

                            </div>

                            <div class="form-group">

                                <?php $name = 'awards_title'.$lang;?>

                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">

                                    <?php _e('Awards Title','albargasy') ?>

                                </label>

                                <div class="col-sm-12 text-start ">

                                    <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">

                                </div>

                            </div>

                            <div class="form-group">

                                <?php $name = 'awards_number'.$lang;?>

                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">

                                    <?php _e('The number of rewards that will appear','albargasy') ?>

                                </label>

                                <div class="col-sm-12 text-start ">

                                    <input type="number" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="form-group">

                        <div class="col-sm-12">

                            <input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 site_save_route" name="albargasy_save_<?=$lang?>" value="<?php _e('Save Settings', 'albargasy') ?>">

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div><!-- /container -->

<?php

}

