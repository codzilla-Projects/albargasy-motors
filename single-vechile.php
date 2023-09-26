<?php  get_header();

get_template_part('template-parts/breadcrumb');

if ( have_posts() ) : while ( have_posts() ) : the_post(); $post_id = get_the_ID();

    $gallery_data                  = get_post_meta( $post_id, 'gallery_data', true );

    $file_prochour                 = get_post_meta($post_id, 'file_prochour', true);

    $file_reels                    = get_post_meta($post_id, 'file_reels', true);

    $vechile_description1          = get_post_meta($post_id, 'vechiles_description1', true ) ;

    $vechile_description2          = get_post_meta($post_id, 'vechiles_description2', true ) ;

    $vechile_description3          = get_post_meta($post_id, 'vechiles_description3', true ) ;

    $vechile_description4          = get_post_meta($post_id, 'vechiles_description4', true ) ;

    $vechile_description5          = get_post_meta($post_id, 'vechiles_description5', true ) ;

    $vechile_description6          = get_post_meta($post_id, 'vechiles_description6', true ) ;

    $vechile_description7          = get_post_meta($post_id, 'vechiles_description7', true ) ;


    $first_vechile_description     = array_merge($vechile_description1, $vechile_description2);

    $second_vechile_description    = array_merge($vechile_description3, $vechile_description4);

    $third_vechile_description     = array_merge($vechile_description5, $vechile_description6,$vechile_description7);



    $vechiles_comfort      = get_post_meta($post_id, 'vechiles_comfort', true);

    $vechiles_sound_system = get_post_meta($post_id, 'vechiles_sound_system', true);

    $vechiles_windows      = get_post_meta($post_id, 'vechiles_windows', true);

    $vechiles_safety       = get_post_meta($post_id, 'vechiles_safety', true);

    $vechiles_other        = get_post_meta($post_id, 'vechiles_other', true);

?>



<section class="single-product-gallery pt-50 mb-4">

    <?php if (!empty($gallery_data)) :
        $count = count($gallery_data);
    ?>

    <div class="product-slider owl-carousel owl-theme">

       <?php for( $i=0; $i<$count; $i++ ){?>

        <div class="single-pro-gallery">

            <img src="<?=$gallery_data[$i];?>">

        </div>

        <?php }?>

    </div>

    <?php endif?>

    <div class="d-flex align-items-center justify-content-center">

    <?php if (!empty($file_prochour)) : ?>

    <p class="text-center m-3">

        <a href="<?=$file_prochour?>" class="download-brochure">

            <i class="fa fa-file-pdf-o"></i>

            <?php _e('Brochure', 'albargasy') ?>

        </a>

    </p>

    <?php endif?>

    <?php if (!empty($file_reels)) : ?>

    <p class="text-center m-3">

        <a href="<?=$file_reels?>" class="download-brochure">

            <i class="fa fa-file-pdf-o"></i>

            <?php _e('Reels', 'albargasy') ?>

        </a>

    </p>

    <?php endif?>

    </div>

</section>


<section class="product-description pt-70 pb-70">

    <div class="section-title underline white-title">

       <h2><?php _e('DESCRIPTION', 'albargasy') ?></h2>

    </div>

    <div class="dark-box">

        <div class="row">

            <?php if ($first_vechile_description['warranty']):?>

            <div class="col-md-3 col-6">

                <div class="description-box">

                    <img src="<?=albargasy_URL.'assets/img/vechile-icons/01.svg';?>">

                    <h3><?php _e('Warranty', 'albargasy') ?></h3>

                    <p><?=$first_vechile_description['warranty']?></p>

                </div>

            </div>

            <?php endif?>

            <?php if ($first_vechile_description['engine_capacity']):?>

            <div class="col-md-3 col-6">

                <div class="description-box">

                    <img src="<?=albargasy_URL.'assets/img/vechile-icons/02.svg';?>">

                    <h3><?php _e('Engine capacity', 'albargasy') ?></h3>

                    <p><?=$first_vechile_description['engine_capacity']?></p>

                </div>

            </div>

            <?php endif?>

            <?php if ($first_vechile_description['horse_power']):?>

            <div class="col-md-3 col-6">

                <div class="description-box">

                    <img src="<?=albargasy_URL.'assets/img/vechile-icons/03.svg';?>">

                    <h3><?php _e('Horse Power', 'albargasy') ?></h3>

                    <p><?=$first_vechile_description['horse_power']?></p>

                </div>

            </div>

            <?php endif?>

            <?php if ($first_vechile_description['maximum_speed']):?>

            <div class="col-md-3 col-6">

                <div class="description-box">

                    <img src="<?=albargasy_URL.'assets/img/vechile-icons/04.svg';?>">

                    <h3><?php _e('Maximum Speed', 'albargasy') ?></h3>

                    <p><?=$first_vechile_description['maximum_speed']?></p>

                </div>

            </div>

            <?php endif?>

            <?php if ($first_vechile_description['acceleration']):?>

            <div class="col-md-3 col-6">

                <div class="description-box">

                    <img src="<?=albargasy_URL.'assets/img/vechile-icons/05.svg';?>">

                    <h3><?php _e('Acceleration', 'albargasy') ?></h3>

                    <p><?=$first_vechile_description['acceleration']?></p>

                </div>

            </div>

            <?php endif?>

            <?php if ($first_vechile_description['speeds']):?>

            <div class="col-md-3 col-6">

                <div class="description-box">

                    <img src="<?=albargasy_URL.'assets/img/vechile-icons/06.svg';?>">

                    <h3><?php _e('Speeds', 'albargasy') ?></h3>

                    <p><?=$first_vechile_description['speeds']?></p>

                </div>

            </div>

            <?php endif?>

            <?php if ($second_vechile_description['transmission_type']):?>

            <div class="col-md-3 col-6">

                <div class="description-box">

                    <img src="<?=albargasy_URL.'assets/img/vechile-icons/07.svg';?>">

                    <h3><?php _e('Transmission Type', 'albargasy') ?></h3>

                    <p><?=$second_vechile_description['transmission_type']?></p>

                </div>

            </div>

            <?php endif?>

            <?php if ($second_vechile_description['year']):?>

            <div class="col-md-3 col-6">

                <div class="description-box">

                    <img src="<?=albargasy_URL.'assets/img/vechile-icons/21.svg';?>">

                    <h3><?php _e('Year', 'albargasy') ?></h3>

                    <p><?=$second_vechile_description['year']?></p>

                </div>

            </div>

            <?php endif?>

            <?php if ($second_vechile_description['fuel']):?>

            <div class="col-md-3 col-6">

                <div class="description-box">

                    <img src="<?=albargasy_URL.'assets/img/vechile-icons/08.svg';?>">

                    <h3><?php _e('Fuel', 'albargasy') ?></h3>

                    <p><?=$second_vechile_description['fuel']?></p>

                </div>

            </div>

            <?php endif?>

            <?php if ($second_vechile_description['liter']):?>

            <div class="col-md-3 col-6">

                <div class="description-box">

                    <img src="<?=albargasy_URL.'assets/img/vechile-icons/09.svg';?>">

                    <h3><?php _e('liter/100KM', 'albargasy') ?></h3>

                    <p><?=$second_vechile_description['liter']?></p>

                </div>

            </div>

            <?php endif?>

            <?php if ($second_vechile_description['assembly_country']):?>

            <div class="col-md-3 col-6">

                <div class="description-box">

                    <img src="<?=albargasy_URL.'assets/img/vechile-icons/10.svg';?>">

                    <h3><?php _e('Assembly Country', 'albargasy') ?></h3>

                    <p><?=$second_vechile_description['assembly_country']?></p>

                </div>

            </div>

            <?php endif?>

            <?php if ($second_vechile_description['length']):?>

            <div class="col-md-3 col-6">

                <div class="description-box">

                    <img src="<?=albargasy_URL.'assets/img/vechile-icons/11.svg';?>">

                    <h3><?php _e('Length (mm)', 'albargasy') ?></h3>

                    <p><?=$second_vechile_description['length']?></p>

                </div>

            </div>

            <?php endif?>

            <?php if ($third_vechile_description['width']):?>

            <div class="col-md-3 col-6">

                <div class="description-box">

                    <img src="<?=albargasy_URL.'assets/img/vechile-icons/12.svg';?>">

                    <h3><?php _e('Length (mm)', 'albargasy') ?></h3>

                    <p><?=$third_vechile_description['width']?></p>

                </div>

            </div>

            <?php endif?>

            <?php if ($third_vechile_description['height']):?>

            <div class="col-md-3 col-6">

                <div class="description-box">

                    <img src="<?=albargasy_URL.'assets/img/vechile-icons/13.svg';?>">

                    <h3><?php _e('Height (mm)', 'albargasy') ?></h3>

                    <p><?=$third_vechile_description['height']?></p>

                </div>

            </div>

            <?php endif?>

            <?php if ($third_vechile_description['wheel_base']):?>

            <div class="col-md-3 col-6">

                <div class="description-box">

                    <img src="<?=albargasy_URL.'assets/img/vechile-icons/14.svg';?>">

                    <h3><?php _e('Wheel Base', 'albargasy') ?></h3>

                    <p><?=$third_vechile_description['wheel_base']?></p>

                </div>

            </div>

            <?php endif?>

            <?php if ($third_vechile_description['trunk_size']):?>

            <div class="col-md-3 col-6">

                <div class="description-box">

                    <img src="<?=albargasy_URL.'assets/img/vechile-icons/15.svg';?>">

                    <h3><?php _e('Trunk Size', 'albargasy') ?></h3>

                    <p><?=$third_vechile_description['trunk_size']?></p>

                </div>

            </div>

            <?php endif?>

            <?php if ($third_vechile_description['seats']):?>

            <div class="col-md-3 col-6">

                <div class="description-box">

                    <img src="<?=albargasy_URL.'assets/img/vechile-icons/16.svg';?>">

                    <h3><?php _e('Seats', 'albargasy') ?></h3>

                    <p><?=$third_vechile_description['seats']?></p>

                </div>

            </div>

            <?php endif?>

            <?php if ($third_vechile_description['traction_type']):?>

            <div class="col-md-3 col-6">

                <div class="description-box">

                    <img src="<?=albargasy_URL.'assets/img/vechile-icons/17.svg';?>">

                    <h3><?php _e('Traction Type', 'albargasy') ?></h3>

                    <p><?=$third_vechile_description['traction_type']?></p>

                </div>

            </div>

            <?php endif?>

            <?php if ($third_vechile_description['number_of_cylinder']):?>

            <div class="col-md-3 col-6">

                <div class="description-box">

                    <img src="<?=albargasy_URL.'assets/img/vechile-icons/18.svg';?>">

                    <h3><?php _e('Number of cylinder', 'albargasy') ?></h3>

                    <p><?=$third_vechile_description['number_of_cylinder']?></p>

                </div>

            </div>

            <?php endif?>

            <?php if ($third_vechile_description['fuel_tank_capacity']):?>

            <div class="col-md-3 col-6">

                <div class="description-box">

                    <img src="<?=albargasy_URL.'assets/img/vechile-icons/19.svg';?>">

                    <h3><?php _e('Fuel tank capacity', 'albargasy') ?></h3>

                    <p><?=$third_vechile_description['fuel_tank_capacity']?></p>

                </div>

            </div>

            <?php endif?>

            <?php if ($third_vechile_description['torque_of_newton']):?>

            <div class="col-md-3 col-6">

                <div class="description-box">

                    <img src="<?=albargasy_URL.'assets/img/vechile-icons/20.svg';?>">

                    <h3><?php _e('Torque of newton', 'albargasy') ?></h3>

                    <p><?=$third_vechile_description['torque_of_newton']?></p>

                </div>

            </div>

            <?php endif?>

        </div>

    </div>

</section>

<section class="product-equipment pt-70 pb-70">

    <div class="section-title underline white-title">

       <h2><?php _e('EQUIPMENT', 'albargasy') ?></h2>

    </div>

    <div class="dark-box pt-2 pb-2">

        <div class="container-fluid">

            <div class="row">

                <?php if(!empty($vechiles_comfort) && $vechiles_comfort[0] != ''):?>

                <div class="col">

                    <h3><?php _e('Comfort', 'albargasy')?></h3>

                    <ul class="check-list">

                        <?php foreach($vechiles_comfort as $vechile_comfort):?>

                        <li><?=$vechile_comfort?></li>

                        <?php endforeach;?>

                    </ul>

                </div>

                <?php endif;?>

                <?php if(!empty($vechiles_sound_system) && $vechiles_sound_system[0] != ''):?>

                <div class="col">

                    <h3><?php _e('Sound System', 'albargasy')?></h3>

                    <ul class="check-list">

                        <?php foreach($vechiles_sound_system as $vechile_sound_system):?>

                        <li><?=$vechile_sound_system?></li>

                        <?php endforeach;?>

                    </ul>

                </div>

                <?php endif;?>

                <?php if(!empty($vechiles_windows) && $vechiles_windows[0] != ''):?>

                <div class="col">

                    <h3><?php _e('Windows', 'albargasy')?></h3>

                    <ul class="check-list">

                        <?php foreach($vechiles_windows as $vechile_windows):?>

                        <li><?=$vechile_windows?></li>

                        <?php endforeach;?>

                    </ul>

                </div>

                <?php endif;?>

                <?php if(!empty($vechiles_safety) && $vechiles_safety[0] != ''):?>

                <div class="col">

                    <h3><?php _e('Safety', 'albargasy')?></h3>

                    <ul class="check-list">

                        <?php foreach($vechiles_safety as $vechile_safety):?>

                        <li><?=$vechile_safety?></li>

                        <?php endforeach;?>

                    </ul>

                </div>

                <?php endif;?>

                <?php if(!empty($vechiles_other) && $vechiles_other[0] != ''):?>

                <div class="col">

                    <h3><?php _e('Other', 'albargasy')?></h3>

                    <ul class="check-list">

                        <?php foreach($vechiles_other as $vechile_other):?>

                        <li><?=$vechile_other?></li>

                        <?php endforeach;?>

                    </ul>

                </div>

                <?php endif;?>

            </div>

        </div>

    </div>

</section>
<?php endwhile; endif; get_footer()?>
