<?php 

function careers_content_area_callback() {

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

                    'careers_content'.$lang

                    ] ) 

                )

                $value = stripcslashes($value);



            update_option( $key , $value );

        endforeach;

    endif; 

?>

 <div <?php if ( ICL_LANGUAGE_CODE=='ar' ){echo'dir="rtl"';} ?> class="container-fluid text-start padding-right-4">

    <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">

            <!-- Top Navigation -->

            <header class="codrops-header">

                <h1 class="text-center site-title">

                    <span><?php _e('Careers Page Settings', 'albargasy'); ?></span>

                </h1>

            </header>

        </div>

        <br/>

        <div class="p-0 m-0">

            <form method="POST" class = "form-horizontal form_back no-margin-left p-5 rounded">

                <div class="form-group">

                    <?php $name = 'careers_img' ; ?>

                    <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">

                        <?php _e('Careers Background Image','albargasy') ?>

                    </label>

                    <div class="col-sm-12 text-start ">

                        <input class="<?=$name ?>_url site_half" type="text" name="<?=$name ?>" size="60" value="<?= get_option( $name ); ?>">

                        <a href="#" class="<?=$name ?>_upload btn btn-info"><?php _e('Choose','albargasy') ?></a>

                        <?php if (!empty(get_option($name))): ?>

                        <img class="img-fluid img-thumbnail w-50 mt-2 <?=$name ?>" src="<?= get_option( $name ); ?>" height="100" style="max-width:100%" />

                        <?php endif ?>

                    </div>

                </div>

                <div class="form-group text-start">

                    <?php $name = 'careers_content'.$lang ; ?>

                    <label for="<?= $name ?>" class="control-label text-white">

                        <?php _e('Careers Content','albargasy') ?>

                    </label>

                    <div class="col-sm-12">

                        <?php wp_editor( get_option( $name ), $name,  $wp_editor_settings);  ?>

                    </div>

                </div>

                <div class="form-group">

                    <?php $name = 'careers_posts'.$lang ; $careers = albargasy_get_careers_without_restrictions(-1); if($careers->have_posts()) :?>
                    <?php $new_name = get_option('careers_posts'.$lang)?>
                    <label for="<?= $name ?>" class="col-sm-12 text-start  control-label text-white"><?php _e('Choose Careers','albargasy') ?></label>

                    <div class="col-sm-12 text-start multiSelect_field">

                        <select  name="<?= $name ?>" multiple class="js-example-basic-multiple">

                        <option value = ''><?php _e('Choose Careers','albargasy') ?></option>

                        <?php while($careers->have_posts()) : $careers->the_post();?>

                        <?php
                            if (!empty($new_name)) {
                             $selected_post = ( in_array(get_the_ID(), $new_name) ) ? 'selected' :  '';
                            }

                        ?>

                        <option value="<?= get_the_ID() ?>"  <?php if (!empty($selected_post)) { echo $selected_post;} ?> >       <?= the_title(); ?>

                        </option>

                        <?php endwhile; wp_reset_query();?>

                        </select>

                    </div>

                    <?php endif;?>

                </div>

                <div class="form-group">

                    <div class="col-sm-12">

                        <input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 site_save_route" name="albargasy_save_<?=$lang?>" value="<?php _e('Save Settings', 'albargasy') ?>">

                    </div>

                </div>

            </form>

        </div>

    </div>

</div><!-- /container -->

<?php

}