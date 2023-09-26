<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php wp_title('|','true','right') ?>
        <?php bloginfo('name'); ?>
    </title>
    <link rel="stylesheet" type="text/css" href="<?=albargasy_URL.'assets/css/404.css';?>">
</head>
<body>

</body>
</html>
<section class="wrapper">
    <div class="container">
        <div id="scene" class="scene" data-hover-only="false">
            <div class="circle" data-depth="1.2"></div>
            <div class="one" data-depth="0.9">
                <div class="content">
                    <span class="piece"></span>
                    <span class="piece"></span>
                    <span class="piece"></span>
                </div>
            </div>

            <div class="two" data-depth="0.60">
                <div class="content">
                    <span class="piece"></span>
                    <span class="piece"></span>
                    <span class="piece"></span>
                </div>
            </div>

            <div class="three" data-depth="0.40">
                <div class="content">
                    <span class="piece"></span>
                    <span class="piece"></span>
                    <span class="piece"></span>
                </div>
            </div>

            <p class="p404" data-depth="0.50">404</p>
            <p class="p404" data-depth="0.10">404</p>
        </div>
        <div class="text">
            <article>
                <h2><?php _e('Page not found.', 'albargasy') ?></h2> 
                <p>
                    <?php _e('Sorry, the page you are looking for cannot be reached.', 'albargasy') ?>
                </p>
               <a href="<?php bloginfo('url') ?>"><?php _e('Back to Home', 'albargasy') ?></a>
            </article>
        </div>

    </div>
    </section>
    <script type="text/javascript" src="<?=albargasy_URL.'assets/js/jquery.min.js';?>"></script>
    <script type="text/javascript" src="<?=albargasy_URL.'assets/js/parallax.min.js';?>"></script>
<script type="text/javascript">
            // Parallax Code
        var scene = document.getElementById('scene');
        var parallax = new Parallax(scene);
</script>