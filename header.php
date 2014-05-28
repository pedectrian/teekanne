<!DOCTYPE html>
<html <?php language_attributes(); ?>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <?php if (onepage_get_option('onepage_favicon') != '') { ?>
            <link rel="shortcut icon" href="<?php echo onepage_get_option('onepage_favicon'); ?>" />
        <?php } else {
            
        } ?>
        <link rel="profile" href="http://gmpg.org/xfn/11" />

        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/cufon-yui.js" type="text/javascript"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/myriad-pro.cufonfonts.js" type="text/javascript"></script>
        <script type="text/javascript">
            Cufon.replace('.myriad-pro-regular', { fontFamily: 'Myriad Pro Regular', hover: true });
            Cufon.replace('.myriad-pro-condensed', { fontFamily: 'Myriad Pro Condensed', hover: true });
            Cufon.replace('.myriad-pro-semibold-italic', { fontFamily: 'Myriad Pro Semibold Italic', hover: true });
            Cufon.replace('.myriad-pro-semibold', { fontFamily: 'Myriad Pro Semibold', hover: true });
            Cufon.replace('.myriad-pro-condensed-italic', { fontFamily: 'Myriad Pro Condensed Italic', hover: true });
            Cufon.replace('.myriad-pro-bold-italic', { fontFamily: 'Myriad Pro Bold Italic', hover: true });
            Cufon.replace('.myriad-pro-bold-condensed-italic', { fontFamily: 'Myriad Pro Bold Condensed Italic', hover: true });
            Cufon.replace('.myriad-pro-bold-condensed', { fontFamily: 'Myriad Pro Bold Condensed', hover: true });
            Cufon.replace('.myriad-pro-bold', { fontFamily: 'Myriad Pro Bold', hover: true });
        </script>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!-- *********************Header Logo and menu Wrapper************************************** -->


        <!-- Header condition1 starts here -->

        <div class="clear"></div>
        <!-- Header condition2 starts here -->	

        <div class="header_wrapper">
            <div class="container_24">
                <div class="grid_24">
                    <div class="grid_3 alpha">
                        <div id="logo">
                            <a href="<?php echo home_url(); ?>"><img src="<?php if (onepage_get_option('onepage_logo') != '') { ?><?php echo onepage_get_option('onepage_logo'); ?><?php } else { ?><?php echo get_template_directory_uri(); ?>/images/logo.png<?php } ?>" alt="<?php bloginfo('name'); ?>" /></a></div>
                    </div>
                    <div class="grid_21 omega">
                        <div id="MainNav">
                            <?php if (onepage_get_option('onepage_nav') != '') { ?><a href="#" class="mobile_nav closed"><?php echo stripslashes(onepage_get_option('onepage_nav')); ?><span></span></a>
                            <?php } else { ?> <a href="#" class="mobile_nav closed">Mobile Menu<span></span></a>
<?php } ?>
<?php onepage_nav(); ?> 
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>

