<?php

/*********************************

Add Meta Box To Best

**********************************/

function albargasy_add_data_metabox() {

    add_meta_box("sliders_data", "Slider Button", "sliders_data_callback", array('slider'), "normal");

    add_meta_box( "gallery-images", "Gallery Images" , "vechile_gallery_metabox_callback", array('vechile'), "normal" );

    add_meta_box( "best_extra_side_data", "Vechiles Description" , "albargasy_list_data_callback", array('vechile'), "normal" );

    add_meta_box("equipment_data", "Vechiles Equipment ", "equipment_data_callback", array('vechile'), "normal");

    add_meta_box("services_data", "Services Data", "services_data_callback", array('service'), "normal");

    add_meta_box("careers_data", "Careers", "careers_data_callback", array('career'), "normal");



    add_meta_box("directors_data", "Director Position", "directors_data_callback", array('director'), "normal");

    add_meta_box("news_data", "News Gallery", "news_data_callback", array('post'), "normal");

}

add_action( 'add_meta_boxes', 'albargasy_add_data_metabox', 10, 9999 );



/*===================================Sliders Post======================================*/



function sliders_data_callback( $object, $box ) {

    $slider_btn_txt         = get_post_meta( $object->ID, 'slider_btn_txt', true );

    $slider_btn_url         = get_post_meta( $object->ID, 'slider_btn_url', true );

?>

<div class="form-group row mt-3">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">

                <label  class="text-dark text-left" for="slider_btn_txt"><?php _e('Slider Button Text: ','albargasy'); ?></label>

            </div>

             <div class="col-lg-8 col-md-8 col-sm-8">

               <input type="text"  name="slider_btn_txt" class="form-control" value="<?=$slider_btn_txt; ?>">

            </div>

        </div>

    </div>

</div>

<div class="form-group row mt-3">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">

                <label  class="text-dark text-left" for="slider_btn_url"><?php _e('Slider Button URL: ','albargasy'); ?></label>

            </div>

             <div class="col-lg-8 col-md-8 col-sm-8">

               <input type="text"  name="slider_btn_url" class="form-control" value="<?=$slider_btn_url; ?>">

            </div>

        </div>

    </div>

</div>

<?php

}

/*===================================Vechiles Post======================================*/

function vechile_gallery_metabox_callback(){

    wp_nonce_field( basename(__FILE__), 'sample_nonce' );

    global $post;

    $gallery_data = get_post_meta( $post->ID, 'gallery_data', true );
    ?>

    <div id="gallery_wrapper">

        <div id="img_box_container">

        <?php

        if ( !empty($gallery_data) ){

            for( $i = 0; $i < count( $gallery_data ); $i++ ){

            ?>

            <div class="gallery_single_row dolu">

                <div class="galleryea image_container ">
                    <img class="gallery_img_img" src="<?php esc_html_e( $gallery_data[$i] ); ?>" height="55" width="55" onclick="open_media_uploader_image_this(this)"/>
                    <input type="hidden" class="meta_image_url" name="gallery[]" value="<?php esc_html_e( $gallery_data[$i] ); ?>"
                  />
                </div>

                <div class="galleryea">

                    <div class="button remove" onclick="remove_img(this)" title="Remove"/>

                        <span class="dashicons dashicons-trash"></span>

                    </div>

                </div>

              <div class="clear">



              </div>

            </div>

            <?php

            }

        }

        ?>

        </div>

        <div style="display:none" id="master_box">

            <div class="gallery_single_row">

                <div class="galleryea image_container" onclick="open_media_uploader_image(this)">

                    <input class="meta_image_url" value="" type="hidden" name="gallery[]" />

                </div>

                <div class="galleryea">

                    <span class="button remove" onclick="remove_img(this)" title="Remove"/><i class="fas fa-trash-alt"></i></span>

                </div>

                <div class="clear">



                </div>

            </div>

        </div>

        <div id="add_gallery_single_row">

          <input class="button add" type="button" value="+" onclick="open_media_uploader_image_plus();" title="Add image"/>

        </div>

    </div>

    <?php

}

/* Display the post meta box. */

function albargasy_list_data_callback( $object, $box ) {



    $vechile_description1   =  get_post_meta( $object->ID, 'vechiles_description1', true ) ;
    $vechile_description1   =  $vechile_description1 === '' ? [] : $vechile_description1 ;


    $vechile_description2   =  get_post_meta( $object->ID, 'vechiles_description2', true ) ;
    $vechile_description2   =  $vechile_description2 === '' ? [] : $vechile_description2 ;

    $vechile_description3   =  get_post_meta( $object->ID, 'vechiles_description3', true ) ;
    $vechile_description3   =  $vechile_description3 === '' ? [] : $vechile_description3 ;

    $vechile_description4   =  get_post_meta( $object->ID, 'vechiles_description4', true ) ;
    $vechile_description4   =  $vechile_description4 === '' ? [] : $vechile_description4 ;

    $vechile_description5   =  get_post_meta( $object->ID, 'vechiles_description5', true ) ;
    $vechile_description5   =  $vechile_description5 === '' ? [] : $vechile_description5 ;

    $vechile_description6   =  get_post_meta( $object->ID, 'vechiles_description6', true ) ;
    $vechile_description6   =  $vechile_description6 === '' ? [] : $vechile_description6 ;

    $vechile_description7   =  get_post_meta( $object->ID, 'vechiles_description7', true ) ;
    $vechile_description7   =  $vechile_description7 === '' ? [] : $vechile_description7 ;


    $first_vechile_description     = array_merge($vechile_description1, $vechile_description2);
    $second_vechile_description    = array_merge($vechile_description3, $vechile_description4);
    $third_vechile_description     = array_merge($vechile_description5, $vechile_description6,$vechile_description7);


    $file_prochour         = get_post_meta( $object->ID, 'file_prochour', true );

    $file_reels            = get_post_meta( $object->ID, 'file_reels', true);

?>

<div class="row">

    <div class="col-md-6">

        <div class="vechile-card">

            <div class="card-header">

                Brochure

            </div>

            <div class="card-body">

                <div class="col-sm-12 text-start ">

                    <input id="textfield1" class="file_prochour_url site_half" type="hidden" name="file_prochour" size="60" value="<?=$file_prochour;?>">

                    <?php if (!empty($file_prochour)): ?>

                    <a href="#" class="file_prochour_upload btn btn-info btn-url"><?php _e('Change File','albargasy') ?></a>



                    <?php else: ?>

                    <a href="#" class="file_prochour_upload btn btn-info btn-url"><?php _e('Add File','albargasy') ?></a>

                    <?php endif ?>

                    <?php if (!empty($file_prochour)): ?>

                    <a class="btn btn-info btn-url" href="<?=$file_prochour;?>">Download File</a>

                    <?php endif ?>

                    <?php if (!empty($file_prochour)) :?>

                        <button class="btn btn-info btn-url"  onclick="clearText()" />

                            <span class="dashicons dashicons-trash"></span>

                        </button>

                    <?php endif?>

                </div>

            </div>

        </div>

    </div>

    <div class="col-md-6">

        <div class="vechile-card">

            <div class="card-header">

               Reels



            </div>

            <div class="card-body">

                <div class="col-sm-12 text-start ">

                    <input id="textfield2" class="file_reels_url site_half" type="hidden" name="file_reels" size="60" value="<?=$file_reels;?>">

                    <?php if (!empty($file_reels)): ?>

                    <a href="#" class="file_reels_upload btn btn-info btn-url"><?php _e('Change File','albargasy') ?></a>

                    <?php else: ?>

                    <a href="#" class="file_reels_upload btn btn-info btn-url"><?php _e('Add File','albargasy') ?></a>

                    <?php endif ?>

                    <?php if (!empty($file_reels)): ?>

                    <a class="btn btn-info btn-url" href="<?=$file_reels;?>">Download File</a>

                    <?php endif ?>

                    <?php if (!empty($file_reels)) :?>

                        <button class="btn btn-info btn-url"  onclick="clearText2()" />

                            <span class="dashicons dashicons-trash"></span>

                        </button>

                    <?php endif?>

                </div>

            </div>

        </div>

    </div>

</div>



<div class="form-group row mt-3">

    <div class="col-lg-6 col-md-6 col-sm-6 mt-3">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">

                <label for="warranty"><?php _e('Warranty: ','albargasy'); ?></label>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">

                <input type="text"  name="vechiles1[warranty]" class="form-control w-100" value="<?=$first_vechile_description['warranty']?>">

            </div>

        </div>

    </div>

    <!-- *************************************************** -->

    <div class="col-lg-6 col-md-6 col-sm-6 mt-3">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">

                <label for="Engine capacity"><?php _e('Engine capacity: ','albargasy'); ?></label>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">

                <input type="text"  name="vechiles1[engine_capacity]" class="form-control w-100" value="<?=$first_vechile_description['engine_capacity']?>">

            </div>

        </div>

    </div>

    <!-- *************************************************** -->

    <div class="col-lg-6 col-md-6 col-sm-6 mt-3">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">

                <label for="Horse Power"><?php _e('Horse Power: ','albargasy'); ?></label>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">

                <input type="text"  name="vechiles1[horse_power]" class="form-control w-100" value="<?=$first_vechile_description['horse_power']?>">

            </div>

        </div>

    </div>

    <!-- *************************************************** -->

    <div class="col-lg-6 col-md-6 col-sm-6 mt-3">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">

                <label for="Maximum Speed"><?php _e('Maximum Speed: ','albargasy'); ?></label>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">

                <input type="text"  name="vechiles2[maximum_speed]" class="form-control w-100" value="<?=$first_vechile_description['maximum_speed']?>">

            </div>

        </div>

    </div>

    <!-- *************************************************** -->

    <div class="col-lg-6 col-md-6 col-sm-6 mt-3">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">

                <label for="Acceleration"><?php _e('Acceleration: ','albargasy'); ?></label>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">

                <input type="text"  name="vechiles2[acceleration]" class="form-control w-100" value="<?=$first_vechile_description['acceleration']?>">

            </div>

        </div>

    </div>

    <!-- *************************************************** -->

    <div class="col-lg-6 col-md-6 col-sm-6 mt-3">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">

                <label for="Speeds"><?php _e('Speeds: ','albargasy'); ?></label>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">

                <input type="text"  name="vechiles2[speeds]" class="form-control w-100" value="<?=$first_vechile_description['speeds']?>">

            </div>

        </div>

    </div>

    <!-- *************************************************** -->

    <div class="col-lg-6 col-md-6 col-sm-6 mt-3">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">

                <label for="Transmission Type"><?php _e('Transmission Type: ','albargasy'); ?></label>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">

                <input type="text"  name="vechiles3[transmission_type]" class="form-control w-100" value="<?=$second_vechile_description['transmission_type']?>">

            </div>

        </div>

    </div>

    <!-- *************************************************** -->

    <div class="col-lg-6 col-md-6 col-sm-6 mt-3">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">

                <label for="year"><?php _e('Year: ','albargasy'); ?></label>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">

                <input type="text"  name="vechiles3[year]" class="form-control w-100" value="<?=$second_vechile_description['year']?>">

            </div>

        </div>

    </div>

    <!-- *************************************************** -->

    <div class="col-lg-6 col-md-6 col-sm-6 mt-3">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">

                <label for="Fuel"><?php _e('Fuel: ','albargasy'); ?></label>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">

                <input type="text"  name="vechiles3[fuel]" class="form-control w-100" value="<?=$second_vechile_description['fuel']?>">

            </div>

        </div>

    </div>

    <!-- *************************************************** -->

    <div class="col-lg-6 col-md-6 col-sm-6 mt-3">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">

                <label for="Liter/100KM"><?php _e('Liter/100KM: ','albargasy'); ?></label>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">

                <input type="text"  name="vechiles4[liter]" class="form-control w-100" value="<?=$second_vechile_description['liter']?>">

            </div>

        </div>

    </div>

    <!-- *************************************************** -->

    <div class="col-lg-6 col-md-6 col-sm-6 mt-3">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">

                <label for="Assembly Country"><?php _e('Assembly Country: ','albargasy'); ?></label>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">

                <input type="text"  name="vechiles4[assembly_country]" class="form-control w-100" value="<?=$second_vechile_description['assembly_country']?>">

            </div>

        </div>

    </div>

    <!-- *************************************************** -->

    <div class="col-lg-6 col-md-6 col-sm-6 mt-3">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">

                <label for="Length (mm)"><?php _e('Length (mm): ','albargasy'); ?></label>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">

                <input type="text"  name="vechiles4[length]" class="form-control w-100" value="<?=$second_vechile_description['length']?>">

            </div>

        </div>

    </div>

    <!-- *************************************************** -->

    <div class="col-lg-6 col-md-6 col-sm-6 mt-3">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">

                <label for="Width (mm)"><?php _e('Width (mm): ','albargasy'); ?></label>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">

                <input type="text"  name="vechiles5[width]" class="form-control w-100" value="<?=$third_vechile_description['width']?>">

            </div>

        </div>

    </div>

    <!-- *************************************************** -->

    <div class="col-lg-6 col-md-6 col-sm-6 mt-3">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">

                <label for="Height (mm)"><?php _e('Height (mm): ','albargasy'); ?></label>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">

                <input type="text"  name="vechiles5[height]" class="form-control w-100" value="<?=$third_vechile_description['height']?>">

            </div>

        </div>

    </div>

    <!-- *************************************************** -->

    <div class="col-lg-6 col-md-6 col-sm-6 mt-3">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">

                <label for="Wheel Base"><?php _e('Wheel Base: ','albargasy'); ?></label>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">

                <input type="text"  name="vechiles5[wheel_base]" class="form-control w-100" value="<?=$third_vechile_description['wheel_base']?>">

            </div>

        </div>

    </div>

    <!-- *************************************************** -->

    <div class="col-lg-6 col-md-6 col-sm-6 mt-3">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">

                <label for="Trunk Size"><?php _e('Trunk Size: ','albargasy'); ?></label>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">

                <input type="text"  name="vechiles6[trunk_size]" class="form-control w-100" value="<?=$third_vechile_description['trunk_size']?>">

            </div>

        </div>

    </div>

    <!-- *************************************************** -->

    <div class="col-lg-6 col-md-6 col-sm-6 mt-3">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">

                <label for="Seats"><?php _e('Seats: ','albargasy'); ?></label>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">

                <input type="text"  name="vechiles6[seats]" class="form-control w-100" value="<?=$third_vechile_description['seats']?>">

            </div>

        </div>

    </div>

    <!-- *************************************************** -->

    <div class="col-lg-6 col-md-6 col-sm-6 mt-3">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">

                <label for="Traction Type"><?php _e('Traction Type: ','albargasy'); ?></label>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">

                <input type="text"  name="vechiles6[traction_type]" class="form-control w-100" value="<?=$third_vechile_description['traction_type']?>">

            </div>

        </div>

    </div>

    <!-- *************************************************** -->

    <div class="col-lg-6 col-md-6 col-sm-6 mt-3">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">

                <label for="Number of Cylinder"><?php _e('Number of Cylinder: ','albargasy'); ?></label>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">

                <input type="text"  name="vechiles7[number_of_cylinder]" class="form-control w-100" value="<?=$third_vechile_description['number_of_cylinder']?>">

            </div>

        </div>

    </div>

    <!-- *************************************************** -->

    <div class="col-lg-6 col-md-6 col-sm-6 mt-3">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">

                <label for="Fuel tank capacity"><?php _e('Fuel tank capacity: ','albargasy'); ?></label>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">

                <input type="text"  name="vechiles7[fuel_tank_capacity]" class="form-control w-100" value="<?=$third_vechile_description['fuel_tank_capacity']?>">

            </div>

        </div>

    </div>

    <!-- *************************************************** -->

    <div class="col-lg-6 col-md-6 col-sm-6 mt-3">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">

                <label for="Torque of newton"><?php _e('Torque of newton: ','albargasy'); ?></label>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">

                <input type="text"  name="vechiles7[torque_of_newton]" class="form-control w-100" value="<?=$third_vechile_description['torque_of_newton']?>">

            </div>

        </div>

    </div>

</div>

<?php

}

/* Display the post meta box. */

function equipment_data_callback($post)

{

    $vechiles_comfort          = get_post_meta($post->ID, 'vechiles_comfort', true);

    $vechiles_sound_system     = get_post_meta($post->ID, 'vechiles_sound_system', true);

    $vechiles_windows          = get_post_meta($post->ID, 'vechiles_windows', true);

    $vechiles_safety           = get_post_meta($post->ID, 'vechiles_safety', true);

    $vechiles_other            = get_post_meta($post->ID, 'vechiles_other', true);

    wp_nonce_field('repeatable_answers_meta_box_nonce', 'repeatable_answers_meta_box_nonce');

    wp_nonce_field('repeatable_answers_meta_box_nonce', 'repeatable_answers_meta_box_nonce');

    ?>

<div class="row">



    <div class="col-lg-6 col-md-6 col-sm-6">

        <div class="vechile-card">

            <div class="card-header">

                Comfort

            </div>

            <div class="card-body">

                <script type="text/javascript">

            jQuery(document).ready(function($) {

                $('#add-comfort').on('click', function() {

                    var repetable_item_comfort = '<tr class="repetable_tr"><td><input type="text" class="widefat answer_value mt-3" name="vechiles_comfort[]" /></td><td><a class="button-remove button btn btn-info mt-3" href="#"><span class="dashicons dashicons-no-alt"></span></a></td></tr>';

                    $('#repeatable-comfort tbody').append(repetable_item_comfort);

                    return false;

                });

                $(document).on('click', '.button-remove', function() {

                    $(this).parents('tr').remove();

                    return false;

                });

            });

                </script>



                <table id="repeatable-comfort" width="100%">

                    <thead>

                        <tr>

                            <th></th>

                            <th width="10%"></th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php



                        if ($vechiles_comfort) :

                            foreach ($vechiles_comfort as $vechile_comfort) {

                        ?>

                                <tr class="repetable_tr">

                                    <td>

                                        <input type="text" class="widefat answer_value" name="vechiles_comfort[]" value="<?php if ($vechile_comfort != '') echo esc_attr($vechile_comfort); ?>" />

                                    </td>

                                    <td>

                                        <a class="button-remove button btn btn-info" href="#">

                                            <span class="dashicons dashicons-no-alt"></span>

                                        </a>

                                    </td>

                                </tr>

                            <?php

                            }

                        else :

                            // show a blank one

                            ?>

                            <tr class="repetable_tr">

                                <td>

                                    <input type="text" class="widefat answer_value" name="vechiles_comfort[]" />

                                </td>

                                <td>

                                    <a class="button-remove button btn btn-info" href="#">

                                        <span class="dashicons dashicons-no-alt"></span>

                                    </a>

                                </td>

                            </tr>

                        <?php endif; ?>



                    </tbody>



                </table>

                <br>

                <p class="text-start"><a id="add-comfort" class="button add-row btn btn-info" href="#">Add more</a></p>

            </div>

        </div>

    </div>

    <div class="col-lg-6 col-md-6 col-sm-6">

        <div class="vechile-card">

            <div class="card-header">

                Sound System

            </div>

            <div class="card-body">

                <script type="text/javascript">

                    jQuery(document).ready(function($) {

                        $('#add-sound-system').on('click', function() {

                            var repetable_item_sound_system = '<tr class="repetable_tr"><td><input type="text" class="widefat answer_value mt-3" name="vechiles_sound_system[]" /></td><td><a class="button-remove button btn btn-info mt-3" href="#"><span class="dashicons dashicons-no-alt"></span></a></td></tr>';

                            $('#repeatable-sound-system tbody').append(repetable_item_sound_system);

                            return false;

                        });

                        $(document).on('click', '.button-remove', function() {

                            $(this).parents('tr').remove();

                            return false;

                        });

                    });

                </script>



                <table id="repeatable-sound-system" width="100%">

                    <thead>

                        <tr>

                            <th></th>

                            <th width="10%"></th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php



                        if ($vechiles_sound_system) :

                            foreach ($vechiles_sound_system as $vechile_sound_system) {

                        ?>

                                <tr class="repetable_tr">

                                    <td>

                                        <input type="text" class="widefat answer_value" name="vechiles_sound_system[]" value="<?php if ($vechile_sound_system != '') echo esc_attr($vechile_sound_system); ?>" />

                                    </td>

                                    <td>

                                        <a class="button-remove button btn btn-info" href="#">

                                            <span class="dashicons dashicons-no-alt"></span>

                                        </a>

                                    </td>

                                </tr>

                            <?php

                            }

                        else :

                            // show a blank one

                            ?>

                            <tr class="repetable_tr">

                                <td>

                                    <input type="text" class="widefat answer_value" name="vechiles_sound_system[]" />

                                </td>

                                <td>

                                    <a class="button-remove button btn btn-info" href="#">

                                        <span class="dashicons dashicons-no-alt"></span>

                                    </a>

                                </td>

                            </tr>

                        <?php endif; ?>



                    </tbody>



                </table>

                <br>

                <p class="text-start"><a id="add-sound-system" class="button add-row btn btn-info" href="#">Add more</a></p>

            </div>

        </div>

    </div>

    <div class="col-lg-6 col-md-6 col-sm-6">

        <div class="vechile-card">

            <div class="card-header">

                Windows

            </div>

            <div class="card-body">

                <script type="text/javascript">

                    jQuery(document).ready(function($) {

                        $('#add-windows').on('click', function() {

                            var repetable_item_windows = '<tr class="repetable_tr"><td><input type="text" class="widefat answer_value mt-3" name="vechiles_windows[]" /></td><td><a class="button-remove button btn btn-info mt-3" href="#"><span class="dashicons dashicons-no-alt"></span></a></td></tr>';

                            $('#repeatable-windows tbody').append(repetable_item_windows);

                            return false;

                        });

                        $(document).on('click', '.button-remove', function() {

                            $(this).parents('tr').remove();

                            return false;

                        });

                    });

                </script>



                <table id="repeatable-windows" width="100%">

                    <thead>

                        <tr>

                            <th></th>

                            <th width="10%"></th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php



                        if ($vechiles_windows) :

                            foreach ($vechiles_windows as $vechile_windows) {

                        ?>

                                <tr class="repetable_tr">

                                    <td>

                                        <input type="text" class="widefat answer_value" name="vechiles_windows[]" value="<?php if ($vechile_windows != '') echo esc_attr($vechile_windows); ?>" />

                                    </td>

                                    <td>

                                        <a class="button-remove button btn btn-info" href="#">

                                            <span class="dashicons dashicons-no-alt"></span>

                                        </a>

                                    </td>

                                </tr>

                            <?php

                            }

                        else :

                            // show a blank one

                            ?>

                            <tr class="repetable_tr">

                                <td>

                                    <input type="text" class="widefat answer_value" name="vechiles_windows[]" />

                                </td>

                                <td>

                                    <a class="button-remove button btn btn-info" href="#">

                                        <span class="dashicons dashicons-no-alt"></span>

                                    </a>

                                </td>

                            </tr>

                        <?php endif; ?>



                    </tbody>



                </table>

                <br>

                <p class="text-start"><a id="add-windows" class="button add-row btn btn-info" href="#">Add more</a></p>

            </div>

        </div>

    </div>

    <div class="col-lg-6 col-md-6 col-sm-6">

        <div class="vechile-card">

            <div class="card-header">

                Safety

            </div>

            <div class="card-body">

                <script type="text/javascript">

                    jQuery(document).ready(function($) {

                        $('#add-safety').on('click', function() {

                            var repetable_item_safety = '<tr class="repetable_tr"><td><input type="text" class="widefat answer_value mt-3" name="vechiles_safety[]" /></td><td><a class="button-remove button btn btn-info mt-3" href="#"><span class="dashicons dashicons-no-alt"></span></a></td></tr>';

                            $('#repeatable-safety tbody').append(repetable_item_safety);

                            return false;

                        });

                        $(document).on('click', '.button-remove', function() {

                            $(this).parents('tr').remove();

                            return false;

                        });

                    });

                </script>



                <table id="repeatable-safety" width="100%">

                    <thead>

                        <tr>

                            <th></th>

                            <th width="10%"></th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php



                        if ($vechiles_safety) :

                            foreach ($vechiles_safety as $vechile_safety) {

                        ?>

                                <tr class="repetable_tr">

                                    <td>

                                        <input type="text" class="widefat answer_value" name="vechiles_safety[]" value="<?php if ($vechile_safety != '') echo esc_attr($vechile_safety); ?>" />

                                    </td>

                                    <td>

                                        <a class="button-remove button btn btn-info" href="#">

                                            <span class="dashicons dashicons-no-alt"></span>

                                        </a>

                                    </td>

                                </tr>

                            <?php

                            }

                        else :

                            // show a blank one

                            ?>

                            <tr class="repetable_tr">

                                <td>

                                    <input type="text" class="widefat answer_value" name="vechiles_safety[]" />

                                </td>

                                <td>

                                    <a class="button-remove button btn btn-info" href="#">

                                        <span class="dashicons dashicons-no-alt"></span>

                                    </a>

                                </td>

                            </tr>

                        <?php endif; ?>



                    </tbody>



                </table>

                <br>

                <p class="text-start"><a id="add-safety" class="button add-row btn btn-info" href="#">Add more</a></p>

            </div>

        </div>

    </div>

    <div class="col-lg-6 col-md-6 col-sm-6">

        <div class="vechile-card">

            <div class="card-header">

                Other

            </div>

            <div class="card-body">

                <script type="text/javascript">

                    jQuery(document).ready(function($) {

                        $('#add-other').on('click', function() {

                            var repetable_item_other = '<tr class="repetable_tr"><td><input type="text" class="widefat answer_value mt-3" name="vechiles_other[]" /></td><td><a class="button-remove button btn btn-info mt-3" href="#"><span class="dashicons dashicons-no-alt"></span></a></td></tr>';

                            $('#repeatable-other tbody').append(repetable_item_other);

                            return false;

                        });

                        $(document).on('click', '.button-remove', function() {

                            $(this).parents('tr').remove();

                            return false;

                        });

                    });

                </script>



                <table id="repeatable-other" width="100%">

                    <thead>

                        <tr>

                            <th></th>

                            <th width="10%"></th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php



                        if ($vechiles_other) :

                            foreach ($vechiles_other as $vechile_other) {

                        ?>

                                <tr class="repetable_tr">

                                    <td>

                                        <input type="text" class="widefat answer_value" name="vechiles_other[]" value="<?php if ($vechile_other != '') echo esc_attr($vechile_other); ?>" />

                                    </td>

                                    <td>

                                        <a class="button-remove button btn btn-info" href="#">

                                            <span class="dashicons dashicons-no-alt"></span>

                                        </a>

                                    </td>

                                </tr>

                            <?php

                            }

                        else :

                            // show a blank one

                            ?>

                            <tr class="repetable_tr">

                                <td>

                                    <input type="text" class="widefat answer_value" name="vechiles_other[]" />

                                </td>

                                <td>

                                    <a class="button-remove button btn btn-info" href="#">

                                        <span class="dashicons dashicons-no-alt"></span>

                                    </a>

                                </td>

                            </tr>

                        <?php endif; ?>



                    </tbody>



                </table>

                <br>

                <p class="text-start"><a id="add-other" class="button add-row btn btn-info" href="#">Add more</a></p>

            </div>

        </div>

    </div>

</div>

<?php

}



/*===================================Services Post======================================*/



function services_data_callback(){

    wp_nonce_field( basename(__FILE__), 'sample_nonce' );

    global $post;

    $image_365            = get_post_meta( $post->ID, 'image_365', true );

    $service_gallery      = get_post_meta( $post->ID, 'service_gallery', true );

    $service_title        = get_post_meta( $post->ID, 'service_title', true);

    $addresses            = get_post_meta( $post->ID, 'addresses', true );

    $working_hours        = get_post_meta( $post->ID, 'working_hours', true);

    $emails               = get_post_meta( $post->ID, 'emails', true);

    $services_featured_image      = get_post_meta( $post->ID, 'services_featured_image', true );

?>


</div>

    <div class="vechile-card">

        <h5 class="card-header">Service Featured Image</h5>

        <div class="card-body">

            <div class="form-group row mt-3">

                <div class="col-sm-12 text-start ">
                    <input id="textfield3" class="services_featured_image_url site_half"  name="services_featured_image" size="60" value="<?=$services_featured_image;?>">

                    <?php if (!empty($services_featured_image)): ?>
                    <img class="img-fluid img-thumbnail w-50 mt-2" src="<?= $services_featured_image?>" height="100" style="max-width:100%" />
                    <?php endif ?>

                    <?php if (!empty($services_featured_image)): ?>

                    <a href="#" class="services_featured_image_upload btn btn-info btn-url"><?php _e('Change File','albargasy') ?></a>
                    <?php else: ?>
                    <a href="#" class="services_featured_image_upload btn btn-info btn-url"><?php _e('Add File','albargasy') ?></a>
                    <?php endif ?>

                    <?php if (!empty($services_featured_image)) :?>
                        <button class="btn btn-info btn-url"  onclick="clearText3()" />
                            <span class="dashicons dashicons-trash"></span>
                        </button>
                    <?php endif?>
            </div>

        </div>

    </div>

    <div class="vechile-card">

        <h5 class="card-header">Service 360 Picture</h5>

        <div class="card-body">

            <div class="form-group row mt-3">

                <div class="col-lg-12 col-md-12 col-sm-12 mt-3">

                    <input type="text"  name="image_365" class="form-control w-100" value="<?=$image_365?>">

                </div>

            </div>

        </div>

    </div>

    <div class="vechile-card">

        <h5 class="card-header">Service Gallery</h5>

        <div class="card-body">

            <div id="gallery_wrapper">

                <div id="img_box_container">

                    <?php

                    if ( !empty($service_gallery) ){

                        for( $i = 0; $i < count( $service_gallery ); $i++ ){

                        ?>
                        <div class="gallery_single_row dolu">
                            <div class="galleryea image_container ">
                                <img class="gallery_img_img" src="<?php esc_html_e( $service_gallery[$i] ); ?>" height="55" width="55" onclick="open_media_uploader_image_this(this)"/>
                                <input type="hidden" class="meta_image_url" name="service_gallery[]" value="<?php esc_html_e( $service_gallery[$i] ); ?>"
                              />
                            </div>

                        <div class="galleryea">

                            <div class="button remove" onclick="remove_img(this)" title="Remove"/>

                                <span class="dashicons dashicons-trash"></span>

                            </div>

                        </div>

                        <div class="clear"></div>

                    </div>

                        <?php

                        }

                    }

                    ?>

                </div>

                <div style="display:none" id="master_box">

                    <div class="gallery_single_row">

                        <div class="galleryea image_container" onclick="open_media_uploader_image(this)">

                            <input class="meta_image_url" value="" type="hidden" name="service_gallery[]" />

                        </div>

                        <div class="galleryea">

                            <div class="button remove" onclick="remove_img(this)" title="Remove"/>

                                <span class="dashicons dashicons-trash"></span>

                            </div>

                        </div>

                        <div class="clear"></div>

                    </div>

                </div>

                <div id="add_gallery_single_row">

                  <input class="button add" type="button" value="+" onclick="open_media_uploader_image_plus();" title="Add image"/>

                </div>

            </div>

        </div>

    </div>

    <div class="row">

        <div class="col-md-12">

            <div class="vechile-card">

                <h5 class="card-header">Title</h5>

                <div class="card-body">

                    <div class="form-group row mt-3">

                        <div class="col-lg-12 col-md-12 col-sm-12 mt-3">

                            <input type="text"  name="service_title" class="form-control w-100" value="<?=$service_title?>">

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-6">

            <div class="vechile-card">

                <h5 class="card-header">Addresses</h5>

                <div class="card-body">

                    <div class="form-group row mt-3">

                        <div class="col-lg-12 col-md-12 col-sm-12 mt-3">

                            <textarea name="addresses" class="form-control" rows="3"><?=$addresses?></textarea>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-6">

            <div class="vechile-card">

                <h5 class="card-header">working hours</h5>

                <div class="card-body">

                    <div class="form-group row mt-3">

                        <div class="col-lg-12 col-md-12 col-sm-12 mt-3">

                            <textarea name="working_hours" class="form-control" rows="3"><?=$working_hours?></textarea>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-6">

            <div class="vechile-card">

                <h5 class="card-header">Emails</h5>

                <div class="card-body">

                    <div class="form-group row mt-3">

                        <div class="col-lg-12 col-md-12 col-sm-12 mt-3">

                            <textarea name="emails" class="form-control" rows="3"><?=$emails?></textarea>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <?php

}


/*===================================Careers Post======================================*/



function careers_data_callback( $object, $box ) {

    $job_description         = get_post_meta( $object->ID, 'job_description', true );

    $key_responsibilities    = get_post_meta( $object->ID, 'key_responsibilities', true );

    $skills_experience       = get_post_meta( $object->ID, 'skills_experience', true );

    $date_posted             = get_post_meta( $object->ID, 'date_posted', true);

    $location                = get_post_meta( $object->ID, 'location', true);

    $offered_salary          = get_post_meta( $object->ID, 'offered_salary', true);

    $expiration_date         = get_post_meta( $object->ID, 'expiration_date', true);

    $qualification           = get_post_meta( $object->ID, 'qualification', true);

    $career_level            = get_post_meta( $object->ID, 'career_level', true);

    $wp_editor_settings = array(

        'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ),

        'textarea_rows'=> 5,

        'drag_drop_upload'=> true,

        'wpautop' => false,

        'media_buttons'=> true,

        'class'=>'form-control'

    );

?>

<div class="row">

    <div class="col-md-8">

        <div class="vechile-card">

            <h5 class="card-header">Job description</h5>

            <div class="card-body">

                <?php wp_editor( htmlspecialchars_decode($job_description), 'job_description', $wp_editor_settings);  ?>

            </div>

        </div>



        <div class="vechile-card">

            <h5 class="card-header">Key Responsibilities</h5>

            <div class="card-body">

                <?php wp_editor( htmlspecialchars_decode($key_responsibilities), 'key_responsibilities', $wp_editor_settings);  ?>

            </div>

        </div>



        <div class="vechile-card">

            <h5 class="card-header">Skills & Experience</h5>

            <div class="card-body">

                <?php wp_editor( htmlspecialchars_decode($skills_experience), 'skills_experience', $wp_editor_settings);  ?>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="vechile-card">

            <h5 class="card-header">Job Overview</h5>

            <div class="card-body">

                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 mt-3">

                        <div class="row">

                            <div class="col-lg-4 col-md-4 col-sm-4 mt-3">

                                <label for="Date Posted"><?php _e('Date Posted: ','albargasy'); ?></label>

                            </div>

                            <div class="col-lg-8 col-md-8 col-sm-8 mt-3">

                                <input type="date"  name="date_posted" class="form-control w-100" value="<?=$date_posted?>">

                            </div>



                            <div class="col-lg-4 col-md-4 col-sm-4 mt-3">

                                <label for="Location"><?php _e('Location: ','albargasy'); ?></label>

                            </div>

                            <div class="col-lg-8 col-md-8 col-sm-8 mt-3">

                                <input type="text"  name="location" class="form-control w-100" value="<?=$location?>">

                            </div>



                            <div class="col-lg-4 col-md-4 col-sm-4 mt-3">

                                <label for="Offered Salary"><?php _e('Offered Salary: ','albargasy'); ?></label>

                            </div>

                            <div class="col-lg-8 col-md-8 col-sm-8 mt-3">

                                <input type="text"  name="offered_salary" class="form-control w-100" value="<?=$offered_salary?>">

                            </div>



                            <div class="col-lg-4 col-md-4 col-sm-4 mt-3">

                                <label for="Expiration Date"><?php _e('Expiration Date: ','albargasy'); ?></label>

                            </div>

                            <div class="col-lg-8 col-md-8 col-sm-8 mt-3">

                                <input type="date"  name="expiration_date" class="form-control w-100" value="<?=$expiration_date?>">

                            </div>



                            <div class="col-lg-4 col-md-4 col-sm-4 mt-3">

                                <label for="Qualification"><?php _e('Qualification: ','albargasy'); ?></label>

                            </div>

                            <div class="col-lg-8 col-md-8 col-sm-8 mt-3">

                                <input type="text"  name="qualification" class="form-control w-100" value="<?=$qualification?>">

                            </div>



                            <div class="col-lg-4 col-md-4 col-sm-4 mt-3">

                                <label for="Career level"><?php _e('Career level: ','albargasy'); ?></label>

                            </div>

                            <div class="col-lg-8 col-md-8 col-sm-8 mt-3">

                                <input type="text"  name="career_level" class="form-control w-100" value="<?=$career_level?>">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<?php

}



/*===================================Directors Post======================================*/



function directors_data_callback( $object, $box ) {

    $job_position    = get_post_meta( $object->ID, 'job_position', true );

?>

<div class="form-group row">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12">

                <label  class="text-dark text-left" for="job_position">

                    <?php _e('Director Position: ','albargasy'); ?>

                </label>

            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">

                <input type="text"  name="job_position" class="form-control" value="<?=$job_position; ?>">

            </div>

        </div>

    </div>

</div>

<?php

}

/*===================================News Post======================================*/

function news_data_callback(){

    wp_nonce_field( basename(__FILE__), 'sample_nonce' );

    global $post;

    $news_gallery      = get_post_meta( $post->ID, 'news_gallery', true );

?>

<div id="gallery_wrapper">

    <div id="img_box_container">

        <?php

        if ( !empty($news_gallery) ){

            for( $i = 0; $i < count( $news_gallery); $i++ ){

            ?>

            <div class="gallery_single_row dolu">

                <div class="galleryea image_container ">

                    <img class="gallery_img_img" src="<?php esc_html_e( $news_gallery[$i] ); ?>" height="55" width="55" onclick="open_media_uploader_image_this(this)"/>
                    <input type="hidden" class="meta_image_url" name="news_gallery[]" value="<?php esc_html_e( $news_gallery[$i] ); ?>"

                  />

                </div>

            <div class="galleryea">

                <div class="button remove" onclick="remove_img(this)" title="Remove"/>

                    <span class="dashicons dashicons-trash"></span>

                </div>

            </div>

            <div class="clear"></div>

        </div>

            <?php

            }

        }

        ?>

    </div>

    <div style="display:none" id="master_box">

        <div class="gallery_single_row">

            <div class="galleryea image_container" onclick="open_media_uploader_image(this)">

                <input class="meta_image_url" value="" type="hidden" name="news_gallery[]" />

            </div>

            <div class="galleryea">

                <div class="button remove" onclick="remove_img(this)" title="Remove">

                    <span class="dashicons dashicons-trash"></span>

                </div>

            </div>

            <div class="clear"></div>

        </div>

    </div>

    <div id="add_gallery_single_row">

      <input class="button add" type="button" value="+" onclick="open_media_uploader_image_plus();" title="Add image"/>

    </div>

</div>

<?php

}

add_action( 'save_post', 'albargasy_save_custom_meta', 10, 2 );

function albargasy_save_custom_meta($post_id){


     if(isset($_POST['slider_btn_txt'])){
        update_post_meta($post_id,'slider_btn_txt',$_POST['slider_btn_txt']);
    }else
        delete_post_meta($post_id,'slider_btn_txt');


     if(isset($_POST['slider_btn_url'])){
        update_post_meta($post_id,'slider_btn_url',$_POST['slider_btn_url']);
    }else
        delete_post_meta($post_id,'slider_btn_url');


     if(isset($_POST['file_prochour'])){
        update_post_meta($post_id,'file_prochour',$_POST['file_prochour']);
    }else
        delete_post_meta($post_id,'file_prochour');


     if(isset($_POST['file_reels'])){
        update_post_meta($post_id,'file_reels',$_POST['file_reels']);
    }else
        delete_post_meta($post_id,'file_reels');


     if(isset($_POST['vechiles_comfort'])){
        update_post_meta($post_id,'vechiles_comfort',$_POST['vechiles_comfort']);
    }else
        delete_post_meta($post_id,'vechiles_comfort');


     if(isset($_POST['vechiles_sound_system'])){
        update_post_meta($post_id,'vechiles_sound_system',$_POST['vechiles_sound_system']);
    }else
        delete_post_meta($post_id,'vechiles_sound_system');


     if(isset($_POST['vechiles_windows'])){
        update_post_meta($post_id,'vechiles_windows',$_POST['vechiles_windows']);
    }else
        delete_post_meta($post_id,'vechiles_windows');


     if(isset($_POST['vechiles_safety'])){
        update_post_meta($post_id,'vechiles_safety',$_POST['vechiles_safety']);
    }else
        delete_post_meta($post_id,'vechiles_safety');


     if(isset($_POST['vechiles_other'])){
        update_post_meta($post_id,'vechiles_other',$_POST['vechiles_other']);
    }else
        delete_post_meta($post_id,'vechiles_other');


    if(isset($_POST['image_365'])){
        update_post_meta($post_id,'image_365',$_POST['image_365']);
    }else
        delete_post_meta($post_id,'image_365');

    if(isset($_POST['addresses'])){
        update_post_meta($post_id,'addresses',$_POST['addresses']);
    }else
        delete_post_meta($post_id,'addresses');

    if(isset($_POST['working_hours'])){
        update_post_meta($post_id,'working_hours',$_POST['working_hours']);
    }else
        delete_post_meta($post_id,'working_hours');

    if(isset($_POST['phones'])){
        update_post_meta($post_id,'phones',$_POST['phones']);
    }else
        delete_post_meta($post_id,'phones');

    if(isset($_POST['emails'])){
        update_post_meta($post_id,'emails',$_POST['emails']);
    }else
        delete_post_meta($post_id,'emails');

    if(isset($_POST['job_description'])){
        update_post_meta($post_id,'job_description',$_POST['job_description']);
    }else
        delete_post_meta($post_id,'job_description');


    if(isset($_POST['key_responsibilities'])){
        update_post_meta($post_id,'key_responsibilities',$_POST['key_responsibilities']);
    }else
        delete_post_meta($post_id,'key_responsibilities');

    if(isset($_POST['skills_experience'])){
        update_post_meta($post_id,'skills_experience',$_POST['skills_experience']);
    }else
        delete_post_meta($post_id,'skills_experience');

    if(isset($_POST['date_posted'])){
        update_post_meta($post_id,'date_posted',$_POST['date_posted']);
    }else
        delete_post_meta($post_id,'date_posted');
    if(isset($_POST['location'])){
        update_post_meta($post_id,'location',$_POST['location']);
    }else
        delete_post_meta($post_id,'location');

    if(isset($_POST['offered_salary'])){
        update_post_meta($post_id,'offered_salary',$_POST['offered_salary']);
    }else
        delete_post_meta($post_id,'offered_salary');


    if(isset($_POST['qualification'])){
        update_post_meta($post_id,'qualification',$_POST['qualification']);
    }else
        delete_post_meta($post_id,'qualification');

    if(isset($_POST['career_level'])){
        update_post_meta($post_id,'career_level',$_POST['career_level']);
    }else
        delete_post_meta($post_id,'career_level');

    if(isset($_POST['services_featured_image'])){
        update_post_meta($post_id,'services_featured_image',$_POST['services_featured_image']);
    }else
        delete_post_meta($post_id,'services_featured_image');

    if(isset($_POST['expiration_date'])){
        update_post_meta($post_id,'expiration_date',$_POST['expiration_date']);
    }else
        delete_post_meta($post_id,'expiration_date');

    if(isset($_POST['job_position'])){
        update_post_meta($post_id,'job_position',$_POST['job_position']);
    }else
        delete_post_meta($post_id,'job_position');


    /*=========*/

    if (isset($_POST['vechiles1'])) :

        update_post_meta($post_id, 'vechiles_description1', $_POST['vechiles1']);

    else:

        delete_post_meta($post_id, 'vechiles_description1');

    endif;



    /*=========*/

    if (isset($_POST['vechiles2'])) :

        update_post_meta($post_id, 'vechiles_description2', $_POST['vechiles2']);

    else:

        delete_post_meta($post_id, 'vechiles_description2');

    endif;



    /*=========*/

    if (isset($_POST['vechiles3'])) :

        update_post_meta($post_id, 'vechiles_description3', $_POST['vechiles3']);

    else:

        delete_post_meta($post_id, 'vechiles_description3');

    endif;

    /*=========*/

    if (isset($_POST['vechiles4'])) :

        update_post_meta($post_id, 'vechiles_description4', $_POST['vechiles4']);

    else:

        delete_post_meta($post_id, 'vechiles_description4');

    endif;

    /*=========*/

    if (isset($_POST['vechiles5'])) :

        update_post_meta($post_id, 'vechiles_description5', $_POST['vechiles5']);

    else:

        delete_post_meta($post_id, 'vechiles_description5');

    endif;

    /*=========*/

    if (isset($_POST['vechiles6'])) :

        update_post_meta($post_id, 'vechiles_description6', $_POST['vechiles6']);

    else:

        delete_post_meta($post_id, 'vechiles_description6');

    endif;

    /*=========*/

    if (isset($_POST['vechiles7'])) :

        update_post_meta($post_id, 'vechiles_description7', $_POST['vechiles7']);

    else:

        delete_post_meta($post_id, 'vechiles_description7');

    endif;



    if ( $_POST['gallery'] ){

        $vgallery = $_POST['gallery'];
        array_pop($vgallery);
        update_post_meta( $post_id, 'gallery_data', $vgallery );
    }else{
        delete_post_meta( $post_id, 'gallery_data' );
    }



    if ( $_POST['service_gallery'] ){
        $service_gallery = $_POST['service_gallery'];
        array_pop($service_gallery);
        update_post_meta( $post_id, 'service_gallery', $service_gallery );
    }else{
        delete_post_meta( $post_id, 'service_gallery' );
    }



    if ( $_POST['news_gallery'] ){
        $news_gallery = $_POST['news_gallery'];
        array_pop($news_gallery);
        update_post_meta( $post_id, 'news_gallery', $news_gallery );
    }else{
        delete_post_meta( $post_id, 'news_gallery' );
    }


    if( isset( $_POST['_listing_cover_image'] ) ) {
        $image_id = (int) $_POST['_listing_cover_image'];
        update_post_meta( $post_id, '_listing_image_id', $image_id );
    }

}



