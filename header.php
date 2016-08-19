<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JHughAnderson | Welcome</title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/app.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/font.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr.js"></script>

  </head>
  <body <?php body_class(); ?>>
    <div class="container"><!-- closed in footer.php -->

        <div class="icon-bar five-up">

            <?php
                wp_nav_menu( array( 'theme_location' => 'left-menu',
                                    'container' => '',
                                    'items_wrap' => '%3$s',
                                    'walker' => new Walker_Quickstart_Menu()
                            ) ); 
            ?>


            <a class="item metria" href="/"> 
                <label class="hide-for-small-only"><img src="<?php bloginfo('template_url'); ?>/images/Logo.png" ></label><label class="show-for-small-only"><i class="fa fa-home"></i></label>
            </a>

            <?php
                wp_nav_menu( array( 'theme_location' => 'right-menu',
                                    'container' => '',
                                    'items_wrap' => '%3$s',
                                    'walker' => new Walker_Quickstart_Menu()
                            ) ); 
            ?>
        </div> 
