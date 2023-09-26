jQuery(document).ready(function($) {
    $('.js-example-basic-multiple').select2();
    $('.albargasy_header_logo_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.albargasy_header_logo_img').attr('src', attachment.url);
            $('.albargasy_header_logo_img_url').val(attachment.url);
        })
        .open();
    });

    $('.albargasy_sticky_logo_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.albargasy_sticky_logo_img').attr('src', attachment.url);
            $('.albargasy_sticky_logo_img_url').val(attachment.url);
        })
        .open();
    });

    $('.albargasy_favicon_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.albargasy_favicon_img').attr('src', attachment.url);
            $('.albargasy_favicon_img_url').val(attachment.url);
        })
        .open();
    });

    $('.albargasy_footer_logo_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.albargasy_footer_logo_img').attr('src', attachment.url);
            $('.albargasy_footer_logo_img_url').val(attachment.url);
        })
        .open();
    });

    $('.albargasy_breadcrumb_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.albargasy_breadcrumb_img').attr('src', attachment.url);
            $('.albargasy_breadcrumb_img_url').val(attachment.url);
        })
        .open();
    });
    /************************************************************************************/
    $('.team_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.team_img').attr('src', attachment.url);
            $('.team_img_url').val(attachment.url);
        })
        .open();
    });
    /************************************************************************************/
    $('.slider_bg_img_en_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.slider_bg_img_en').attr('src', attachment.url);
            $('.slider_bg_img_en_url').val(attachment.url);
        })
        .open();
    });

    /************************************************************************************/
    $('.slider_bg_img_ar_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.slider_bg_img_ar').attr('src', attachment.url);
            $('.slider_bg_img_ar_url').val(attachment.url);
        })
        .open();
    });
    /************************************************************************************/
    $('.chairman_speech_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.chairman_speech_img').attr('src', attachment.url);
            $('.chairman_speech_img_url').val(attachment.url);
        })
        .open();
    });
    /************************************************************************************/
    $('.philosophy_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.philosophy_img').attr('src', attachment.url);
            $('.philosophy_img_url').val(attachment.url);
        })
        .open();
    });

    /************************************************************************************/
    $('.philosophy_mobile_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.philosophy_mobile_img').attr('src', attachment.url);
            $('.philosophy_mobile_img_url').val(attachment.url);
        })
        .open();
    });
    /************************************************************************************/
    $('.vision_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.vision_img').attr('src', attachment.url);
            $('.vision_img_url').val(attachment.url);
        })
        .open();
    });
    /************************************************************************************/
    $('.vision_mobile_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.vision_mobile_img').attr('src', attachment.url);
            $('.vision_mobile_img_url').val(attachment.url);
        })
        .open();
    });
    /************************************************************************************/
    $('.mission_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.mission_img').attr('src', attachment.url);
            $('.mission_img_url').val(attachment.url);
        })
        .open();
    });
    /************************************************************************************/
    $('.mission_mobile_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.mission_mobile_img').attr('src', attachment.url);
            $('.mission_mobile_img_url').val(attachment.url);
        })
        .open();
    });
    /************************************************************************************/
    $('.values_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.values_img').attr('src', attachment.url);
            $('.values_img_url').val(attachment.url);
        })
        .open();
    });
    /************************************************************************************/
    $('.values_mobile_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.values_mobile_img').attr('src', attachment.url);
            $('.values_mobile_img_url').val(attachment.url);
        })
        .open();
    });

    /************************************************************************************/
    $('.accordion_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.accordion_img').attr('src', attachment.url);
            $('.accordion_img_url').val(attachment.url);
        })
        .open();
    });

    /************************************************************************************/
    $('.accordion_mobile_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.accordion_mobile_img').attr('src', attachment.url);
            $('.accordion_mobile_img_url').val(attachment.url);
        })
        .open();
    });

    /*************************************************************************************/
    $('.first_accordion_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.first_accordion_img').attr('src', attachment.url);
            $('.first_accordion_img_url').val(attachment.url);
        })
        .open();
    });

    /*************************************************************************************/
    $('.first_accordion_slider_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.first_accordion_slider_img').attr('src', attachment.url);
            $('.first_accordion_slider_img_url').val(attachment.url);
        })
        .open();
    });

    /*************************************************************************************/
    $('.second_accordion_slider_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.second_accordion_slider_img').attr('src', attachment.url);
            $('.second_accordion_slider_img_url').val(attachment.url);
        })
        .open();
    });

    /*************************************************************************************/
    $('.third_accordion_slider_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.third_accordion_slider_img').attr('src', attachment.url);
            $('.third_accordion_slider_img_url').val(attachment.url);
        })
        .open();
    });
    /*************************************************************************************/
    $('.sales_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.sales_img').attr('src', attachment.url);
            $('.sales_img_url').val(attachment.url);
        })
        .open();
    });
    /*************************************************************************************/
    $('.banks_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.banks_img').attr('src', attachment.url);
            $('.banks_img_url').val(attachment.url);
        })
        .open();
    });
    /*************************************************************************************/
    $('.entities_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.entities_img').attr('src', attachment.url);
            $('.entities_img_url').val(attachment.url);
        })
        .open();
    });
    /*************************************************************************************/
    $('.after_sales_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.after_sales_img').attr('src', attachment.url);
            $('.after_sales_img_url').val(attachment.url);
        })
        .open();
    });
    /*************************************************************************************/
    $('.careers_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.careers_img').attr('src', attachment.url);
            $('.careers_img_url').val(attachment.url);
        })
        .open();
    });
    /*************************************************************************************/
    $('.success_story_bg_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'File Choose',
            button: {
                text: 'Upload File'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.success_story_bg_img').attr('href', attachment.url);
            $('.success_story_bg_img_url').val(attachment.url);
        })
        .open();
    });
    /*************************************************************************************/
    $('.success_story_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.success_story_img').attr('src', attachment.url);
            $('.success_story_img_url').val(attachment.url);
        })
        .open();
    });
    /*************************************************************************************/
    $('.success_story_second_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.success_story_second_img').attr('src', attachment.url);
            $('.success_story_second_img_url').val(attachment.url);
        })
        .open();
    });
    /*************************************************************************************/
    $('.financial_img_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Image Choose',
            button: {
                text: 'Upload Image'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.financial_img').attr('src', attachment.url);
            $('.financial_img_url').val(attachment.url);
        })
        .open();
    });
    /*************************************************************************************/
    $('.file_prochour_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'File Choose',
            button: {
                text: 'Upload File'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.file_prochour').attr('href', attachment.url);
            $('.file_prochour_url').val(attachment.url);
        })
        .open();
    });
    /*************************************************************************************/
    $('.file_reels_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'File Choose',
            button: {
                text: 'Upload File'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.file_reels').attr('href', attachment.url);
            $('.file_reels_url').val(attachment.url);
        })
        .open();
    });

       /*************************************************************************************/
    $('.services_featured_image_upload').click(function(e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'File Choose',
            button: {
                text: 'Upload File'
            },
            multiple: false  // Set this to true to allow multiple files to be  selected
        })
        .on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.services_featured_image').attr('href', attachment.url);
            $('.services_featured_image_url').val(attachment.url);
        })
        .open();
    });

});

function clearText() {
    document.getElementById('textfield1').value = "";
}
function clearText2() {
    document.getElementById('textfield2').value = "";
}

function clearText3() {
    document.getElementById('textfield3').value = "";
}

