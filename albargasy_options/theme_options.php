<?php

function albargasy_theme_options_callback(){

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



            if ( in_array( $key ,[] )

                )

                $value = stripcslashes($value);

            update_option( $key , $value );

        endforeach;endif;

?>



<div <?php if ( ICL_LANGUAGE_CODE=='ar' ){echo'dir="rtl"';} ?> class="container-fluid text-start padding-right-4">

    <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">

            <!-- Top Navigation -->

            <header class="codrops-header">

                <h1 class="text-center site-title"><span>General Settings</span></h1>

            </header>

        </div>

        <br/>

        <div class="d-flex align-items-start p-0 m-0">



            <div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3 rounded" id="v-pills-tab" role="tablist" aria-orientation="vertical">



                <button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">Logos</button>



                <button class="nav-link" id="v-pills-sixthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sixthsection" type="button" role="tab" aria-controls="v-pills-sixthsection" aria-selected="false">Colors</button>



                <button class="nav-link" id="v-pills-seventhsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-seventhsection" type="button" role="tab" aria-controls="v-pills-seventhsection" aria-selected="false">Fonts</button>



                <button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">Contact</button>



                <button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false">Social Media</button>


                <button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false">Footer</button>



            </div>



            <div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">

                <form class="form-horizontal form_back p-5 rounded" method="post" action="#">

                    <div class="tab-content" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">



                            <div class="form-group">

                                <label for="albargasy_header_logo_img" class="col-sm-12 text-start  control-label text-white">Header Logo</label>

                                <div class="col-sm-12 text-start ">

                                    <input class="albargasy_header_logo_img_url site_half" type="text" name="albargasy_header_logo_img" size="60" value="<?= get_option('albargasy_header_logo_img'); ?>">

                                    <a href="#" class="albargasy_header_logo_img_upload btn btn-info">Choose</a>

                                    <?php if (!empty(get_option('albargasy_header_logo_img'))): ?>

                                    <img class="img-fluid img-thumbnail w-50 mt-2 albargasy_header_logo_img bg-dark" src="<?= get_option('albargasy_header_logo_img'); ?>" height="100" style="max-width:100%" />

                                    <?php endif ?>

                                </div>

                            </div>



                            <div class="form-group">

                                <label for="albargasy_favicon_img" class="col-sm-12 text-start  control-label text-white">Favicon Logo</label>

                                <div class="col-sm-12 text-start ">

                                    <input class="albargasy_favicon_img_url site_half" type="text" name="albargasy_favicon_img" size="60" value="<?= get_option('albargasy_favicon_img'); ?>">

                                    <a href="#" class="albargasy_favicon_img_upload btn btn-info">Choose</a>

                                    <?php if (!empty(get_option('albargasy_favicon_img'))): ?>

                                    <img class="img-fluid img-thumbnail w-50 mt-2 albargasy_favicon_img bg-dark" src="<?= get_option('albargasy_favicon_img'); ?>" height="100" style="max-width:100%" />



                                    <?php endif ?>

                                </div>

                            </div>

                        </div>



                        <div class="tab-pane fade" id="v-pills-sixthsection" role="tabpanel" aria-labelledby="v-pills-sixthsection-tab">

                            <div class="form-group">

                                <label for="albargasy_primaryColor" class="col-sm-12 text-start  control-label text-white">Primary Color</label>

                                <div class="col-sm-12 text-start d-flex align-items-center justify-content-start">

                                    <input type="color" class="form-control albargasy-color" id="albargasy_primaryColor" name="albargasy_primaryColor" value="<?= get_option('albargasy_primaryColor'); ?>">

                                    <div class="text-white ms-2"><?= get_option('albargasy_primaryColor'); ?></div>

                                </div>

                            </div>



                            <div class="form-group">

                                <label for="albargasy_secondaryColor" class="col-sm-12 text-start  control-label text-white">Secondary Color</label>

                                <div class="col-sm-12 text-start d-flex align-items-center justify-content-start">

                                    <input type="color" class="form-control albargasy-color" id="albargasy_secondaryColor" name="albargasy_secondaryColor" value="<?= get_option('albargasy_secondaryColor'); ?>">

                                    <div class="text-white ms-2"><?= get_option('albargasy_secondaryColor'); ?></div>

                                </div>

                            </div>



                            <div class="form-group">

                                <label for="albargasy_thirdColor" class="col-sm-12 text-start  control-label text-white">Third Color</label>

                                <div class="col-sm-12 text-start d-flex align-items-center justify-content-start">

                                    <input type="color" class="form-control albargasy-color" id="albargasy_thirdColor" name="albargasy_thirdColor" value="<?= get_option('albargasy_thirdColor'); ?>">

                                    <div class="text-white ms-2"><?= get_option('albargasy_thirdColor'); ?></div>

                                </div>

                            </div>

                        </div>



                        <div class="tab-pane fade" id="v-pills-seventhsection" role="tabpanel" aria-labelledby="v-pills-seventhsection-tab">

                            <div class="form-group">

                                <label for="albargasy_font_url" class="col-sm-12 text-start  control-label text-white">Google Font Url</label>

                                <div class="col-sm-12 text-start ">

                                    <input type="text" class="form-control" id="albargasy_font_url" name="albargasy_font_url" value="<?= get_option('albargasy_font_url'); ?>">



                                </div>

                            </div>



                            <div class="form-group">

                                <label for="albargasy_font_name" class="col-sm-12 text-start  control-label text-white">Google Font Name</label>

                                <div class="col-sm-12 text-start ">

                                    <input type="text" class="form-control" id="albargasy_font_name" name="albargasy_font_name" value="<?= get_option('albargasy_font_name'); ?>">



                                </div>

                            </div>

                        </div>



                        <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

                            <div class="form-group">

                                <label for="albargasy_phone" class="col-sm-12 text-start  control-label text-white">Phone Number</label>

                                <div class="col-sm-12 text-start ">

                                    <input type="text" class="form-control" id="albargasy_phone" name="albargasy_phone" value="<?= get_option('albargasy_phone'); ?>">

                                </div>

                            </div>



                            <div class="form-group">

                                <label for="albargasy_email" class="col-sm-12 text-start  control-label text-white">E-mali Address</label>

                                <div class="col-sm-12 text-start ">

                                    <input type="email" class="form-control text-start" id="albargasy_email" name="albargasy_email" value="<?= get_option('albargasy_email'); ?>">

                                </div>

                            </div>



                            <div class="form-group">

                                <label for="albargasy_whatsapp" class="col-sm-12 text-start  control-label text-white">WhatsApp Number</label>

                                <div class="col-sm-12 text-start ">

                                    <input type="text" class="form-control" id="albargasy_whatsapp" name="albargasy_whatsapp" value="<?= get_option('albargasy_whatsapp'); ?>">

                                </div>

                            </div>



                            <div class="form-group">

                                <?php $name = 'albargasy_location_en' ; ?>

                                <label for="<?=$name ?>" class="col-sm-12 text-start  control-label text-white">Location</label>

                                <div class="col-sm-12 text-start ">

                                    <input type="text" class="form-control text-start" id="<?=$name ?>" name="<?=$name ?>" value="<?= get_option($name); ?>">

                                </div>

                            </div>
                            <div class="form-group">

                                <?php $name = 'albargasy_location_ar' ; ?>

                                <label for="<?=$name ?>" class="col-sm-12 text-start  control-label text-white">Location Arabic</label>

                                <div class="col-sm-12 text-start ">

                                    <input type="text" class="form-control text-start" id="<?=$name ?>" name="<?=$name ?>" value="<?= get_option($name); ?>">

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="albargasy_map" class="col-sm-12 text-start  control-label text-white">Google Map</label>

                                <div class="col-sm-12 text-start ">

                                    <input type="text" class="form-control text-start" id="albargasy_map" name="albargasy_map" value="<?= get_option('albargasy_map'); ?>">

                                </div>

                            </div>

                        </div>



                        <div class="tab-pane fade" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">

                            <div class="form-group">

                                <label for="albargasy_fb" class="col-sm-12 text-start  control-label text-white">Facebook</label>

                                <div class="col-sm-12 text-start ">

                                    <input type="text" class="form-control" id="albargasy_fb" name="albargasy_fb" value="<?= get_option('albargasy_fb'); ?>">

                                </div>

                            </div>



                            <div class="form-group">

                                <label for="albargasy_youtube" class="col-sm-12 text-start  control-label text-white">Youtube</label>

                                <div class="col-sm-12 text-start ">

                                    <input type="text" class="form-control" id="albargasy_youtube" name="albargasy_youtube" value="<?= get_option('albargasy_youtube'); ?>">

                                </div>

                            </div>



                            <div class="form-group">

                                <label for="albargasy_insta" class="col-sm-12 text-start  control-label text-white">Instagram</label>

                                <div class="col-sm-12 text-start ">

                                    <input type="text" class="form-control" id="albargasy_insta" name="albargasy_insta" value="<?= get_option('albargasy_insta'); ?>">

                                </div>

                            </div>



                            <div class="form-group">

                                <label for="albargasy_linkedin" class="col-sm-12 text-start  control-label text-white">Linked In</label>

                                <div class="col-sm-12 text-start ">

                                    <input type="text" class="form-control" id="albargasy_linkedin" name="albargasy_linkedin" value="<?= get_option('albargasy_linkedin'); ?>">

                                </div>

                            </div>

                        </div>


                        <div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">

                            <div class="form-group">

                                <label for="albargasy_footer_logo_img" class="col-sm-12 text-start  control-label text-white">Footer Logo</label>

                                <div class="col-sm-12 text-start ">

                                    <input class="albargasy_footer_logo_img_url site_half" type="text" name="albargasy_footer_logo_img" size="60" value="<?= get_option('albargasy_footer_logo_img'); ?>">

                                    <a href="#" class="albargasy_footer_logo_img_upload btn btn-info">Choose</a>

                                    <?php if (!empty(get_option('albargasy_footer_logo_img'))): ?>

                                    <img class="img-fluid img-thumbnail w-50 mt-2 albargasy_footer_logo_img bg-dark" src="<?= get_option('albargasy_footer_logo_img'); ?>" height="100" style="max-width:100%" />

                                    <?php endif ?>

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
