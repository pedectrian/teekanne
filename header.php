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
        <meta property="og:title" content="ДОБРО ПОЖАЛОВАТЬ В МИР ЧАЯ TEEKANNE." />
        <meta property="og:description" content="№1 в Европе среди фруктовых и травяных чаев, теперь и в Росиии TEEKANNE – компания с более чем 130-летней историей. Наша коллекция премиальных чаев содержит как классические черные и зеленые чаи, так и оригинальные травяные и фруктовые." />
        <meta property="og:image" content="<?php echo get_stylesheet_directory_uri();?>/images/social_share.png"" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />

        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/cufon-yui.js" type="text/javascript"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/index.js" type="text/javascript"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/social-share.js" type="text/javascript"></script>
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
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?v=0.2">
<?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div class="right-helper">
        <img style="display: none;" class="share-image" src="<?php echo get_stylesheet_directory_uri();?>/images/social_share.png">
        <!-- *********************Header Logo and menu Wrapper************************************** -->


        <!-- Header condition1 starts here -->

        <div class="clear"></div>
        <!-- Header condition2 starts here -->	

        <div class="header_wrapper">
            <div class="search-bar">
                <div class="container_24">
                    <div class="grid_24">
                        <div class="grid_1 alpha">
                            &nbsp;
                        </div>

                        <div class="grid_22">
                            <form role="search" method="get" class="searchform" action="<?php echo home_url('/'); ?>">
                                <input type="text" class="search-input" placeholder="Что вы ищете?" onfocus="if (this.value == 'Search') {
                                                                                                                this.value = '';
                                                                                                            }" onblur="if (this.value == '') {
                                                                                                                this.value = 'Что вы ищете?';
                                                                                                            }" name="s" />
                                <input type="submit" class="search-btn" value=""/>
                                <input type="button" class="search-cancel" value=""/>
                            </form>
                        </div>

                        <div class="grid_1 omega">
                            &nbsp;
                        </div>
                    </div>
                </div>
            </div>
            <div class="share-bar">
                <div class="container_24">
                    <div class="grid_24">
                        <div class="grid_6 alpha">
                            &nbsp;
                        </div>

                        <div class="grid_16 share-links myriad">
                            Поделиться с друзьями в:
                            <a class="share-button" onclick="Share.facebook(document.location.href,'ДОБРО ПОЖАЛОВАТЬ В МИР ЧАЯ TEEKANNE.','<?php echo get_stylesheet_directory_uri();?>/images/social_share.png','№1 в Европе среди фруктовых и травяных чаев, теперь и в Росиии TEEKANNE – компания с более чем 130-летней историей. Наша коллекция премиальных чаев содержит как классические черные и зеленые чаи, так и оригинальные травяные и фруктовые.')">Fb.com</a>/
                            <a class="share-button" onclick="Share.vkontakte(document.location.href,'ДОБРО ПОЖАЛОВАТЬ В МИР ЧАЯ TEEKANNE.','<?php echo get_stylesheet_directory_uri();?>/images/social_share.png','№1 в Европе среди фруктовых и травяных чаев, теперь и в Росиии TEEKANNE – компания с более чем 130-летней историей. Наша коллекция премиальных чаев содержит как классические черные и зеленые чаи, так и оригинальные травяные и фруктовые.')">Vk.com</a>/
                            <a class="share-button" onclick="Share.odnoklassniki(document.location.href,'DESC')">Odnoklassniki.ru</a>/
                            <a class="share-button" onclick="Share.twitter(document.location.href,'№1 в Европе среди фруктовых и травяных чаев, теперь и в Росиии TEEKANNE – компания с более чем 130-летней историей.')">Twitter.com</a>/
                            <a class="share-button" onclick="Share.gplus(document.location.href)">GooglePlus</a>

                            <input type="button" class="share-cancel" value=""/>
                        </div>

                        <div class="grid_2 omega">
                            &nbsp;
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_24">
                <div class="grid_24">
                    <div class="grid_3 alpha">

                        <div id="MainNav">
                            <div class="hover-menu">
                                <span class="menu-box">Меню</span>
                                <?php if (onepage_get_option('onepage_nav') != '') { ?><a href="#" class="mobile_nav closed"><?php echo stripslashes(onepage_get_option('onepage_nav')); ?><span></span></a>
                                <?php } else { ?> <a href="#" class="mobile_nav closed">Mobile Menu<span></span></a>
                                <?php } ?>
                                <?php onepage_nav(); ?>
                            </div>

                        </div>
                    </div>
                    <div class="grid_21 omega">
                        <div id="logo">
                            <a style="margin-left: -100px;" href="<?php echo home_url(); ?>"><img src="<?php if (onepage_get_option('onepage_logo') != '') { ?><?php echo onepage_get_option('onepage_logo'); ?><?php } else { ?><?php echo get_template_directory_uri(); ?>/images/logo.png<?php } ?>" alt="<?php bloginfo('name'); ?>" /></a>
                            <div class="search">
                                <div class="search-icon"></div>
                            </div>
                            <div class="share">
                                <div class="vk-share-icon" onclick="Share.vkontakte(document.location.href,'ДОБРО ПОЖАЛОВАТЬ В МИР ЧАЯ TEEKANNE.','<?php echo get_stylesheet_directory_uri();?>/images/social_share.png','№1 в Европе среди фруктовых и травяных чаев, теперь и в Росиии TEEKANNE – компания с более чем 130-летней историей. Наша коллекция премиальных чаев содержит как классические черные и зеленые чаи, так и оригинальные травяные и фруктовые.')"></div>
                                <div class="fb-share-icon" onclick="Share.facebook(document.location.href,'ДОБРО ПОЖАЛОВАТЬ В МИР ЧАЯ TEEKANNE.','<?php echo get_stylesheet_directory_uri();?>/images/social_share.png','№1 в Европе среди фруктовых и травяных чаев, теперь и в Росиии TEEKANNE – компания с более чем 130-летней историей. Наша коллекция премиальных чаев содержит как классические черные и зеленые чаи, так и оригинальные травяные и фруктовые.')"></div>
                                <a class="rest-share">Другие</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>

