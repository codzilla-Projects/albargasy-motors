<?php 

function multibrand_showrooms_content_area_callback() {

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

            if ( in_array( $key ,[] ) )

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

                    <span><?php _e('Multibrand Showrooms Page Settings', 'albargasy'); ?></span>

                </h1>

            </header>

        </div>

        <br/>

        <div class="p-0 m-0">

            <form method="POST" class="form-horizontal form_back no-margin-left p-5 rounded">

                <div class="form-group">

                    <?php $name = 'multibrand_showrooms_title'.$lang;?>

                    <label for="<?=$name?>" class="col-sm-12 text-start control-label text-white"><?php _e('Multibrand Showrooms Title','albargasy') ?></label>

                    <div class="col-sm-12 text-start ">

                        <input type="text" class="form-control" id="<?=$name?>" name="<?=$name?>" value="<?= get_option($name);?>">

                    </div>

                </div>
                <div class="form-group">

                    <?php 
                        $name = 'services_post'.$lang.'[]'; 
                        $services = albargasy_get_services_without_restrictions(-1); 
                        if($services->have_posts()) :
                    ?>
                    <?php $services_post = get_option('services_post'.$lang); ?>
                    <label for="<?= $name ?>" class="col-sm-12 text-start  control-label text-white"><?php _e('Choose Services','albargasy') ?></label>

                    <div class="col-sm-12 text-start multiSelect_field">
                        
                        <select  name="<?= $name ?>" multiple class="js-example-basic-multiple">

                        <option value = ''><?php _e('Choose Services','albargasy') ?></option>

                        <?php while($services->have_posts()) : $services->the_post();?>

                        <?php
                        if (!empty($services_post)) {
                        
                            $selected_post = ( in_array(get_the_ID(), $services_post) ) ? 'selected' :  '';
                            }
                        ?>

                        <option value="<?= get_the_ID() ?>"  <?php if (!empty($selected_post)) {echo $selected_post;} ?> >       <?= the_title(); ?>

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