<?php 
function success_story_content_area_callback() {
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
                    'sales_content'.$lang,
                    'after_sales_content'.$lang
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
                    <span><?php _e('Success Story Page Settings', 'albargasy'); ?></span>
                </h1>
            </header>
        </div>
        <br/>
        <div class="p-0 m-0">
            <form method="POST" class = "form-horizontal form_back no-margin-left p-5 rounded">
                <div class="form-group">
                    <?php $name = 'success_story_bg_img' ; ?>
                    <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                        <?php _e('Success Story Background Image','albargasy') ?>
                    </label>
                    <div class="col-sm-12 text-start ">
                        <input class="<?=$name ?>_url site_half" type="text" name="<?=$name ?>" size="60" value="<?= get_option( $name ); ?>">
                        <a href="#" class="<?=$name ?>_upload btn btn-info"><?php _e('Choose','albargasy') ?></a>
                        <?php if (!empty(get_option($name))): ?>
                        <img class="img-fluid img-thumbnail w-50 mt-2 <?=$name ?>" src="<?= get_option( $name ); ?>" height="100" style="max-width:100%" />
                        <?php endif ?>
                    </div>
                </div>
                <div class="form-group">
                    <?php $name = 'success_story_title'.$lang ; ?>
                    <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                        <?php _e('Success Story Title','albargasy') ?>
                    </label>
                    <div class="col-sm-12 text-start ">
                        <input type="text" class="form-control" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option( $name ); ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="services">
                            <div class="form-group">
                                <?php $name = 'success_story_img' ; ?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                    <?php _e('Success Story First Image','albargasy') ?>
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
                    </div>
                    <div class="col-md-6">
                        <div class="services">
                            <div class="form-group">
                                <?php $name = 'success_story_second_img' ; ?>
                                <label for="<?= $name ?>" class="col-sm-12 text-start control-label text-white">
                                    <?php _e('Success Story Second Image','albargasy') ?>
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
                    </div>
                </div>
                

                <div class="form-group text-start">
                    <?php $name = 'success_story_content'.$lang ; ?>
                    <label for="<?= $name ?>" class="control-label text-white">
                        <?php _e('Success Story Content','albargasy') ?>
                    </label>
                    <div class="col-sm-12">
                        <?php wp_editor( get_option( $name ), $name,  $wp_editor_settings);  ?>
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
</div><!-- /container -->
<?php
}