<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> class="no-js">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <!-- <link href='http://fonts.googleapis.com/css?family=Nova+Mono' rel='stylesheet' type='text/css' /> -->
    <!-- <link href="<?php //echo  get_theme_file_uri("/style.css");
                        ?>" rel="stylesheet" type="text/css" media="screen" /> -->

    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <div id="wrapper">
        <div id="header-wrapper">
            <div id="header">
                <div id="logo">
                    <!-- <h1><a href="<?php //echo esc_url(site_url()) ;
                                        ?>"><?php //bloginfo('name')
                                                                            ?></a></h1>
                    <p><?php //bloginfo('description')
                        ?></p> -->
                    <a href="<?php echo esc_url(site_url());?>"><img class="bblack-logo" src="<?php echo get_theme_mod('bblack_logo'); ?> " alt=""></a>
                </div>
            </div>
        </div>
        <!-- end #header -->
        <div id="menu" class="<?php echo get_theme_mod('bblack_menu_position');?>">
            <?php
            if (has_nav_menu('blbackmenu')) {
                wp_nav_menu(array(
                    'theme-location' => 'blbackmenu',
                    'fallback_cb'     => 'custombblckmenu',
                ));
            }; ?>
        </div>
    </div>
    <!-- end #menu -->