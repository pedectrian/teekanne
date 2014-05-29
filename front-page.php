<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
if ('posts' == get_option('show_on_front') && onepage_get_option('re_nm') !== 'on') {
    get_template_part('home');
} elseif ('page' == get_option('show_on_front') && onepage_get_option('re_nm') !== 'on') {
    $template = get_post_meta(get_option('page_on_front'), '_wp_page_template', true);
    $template = ( $template == 'default' ) ? 'index.php' : $template;
    locate_template($template, true);
} else {
    get_header();
    ?>
    <div class="clear"></div>
    <!-- Header condition2 starts here -->

    <!-- **********************header ends************************* -->
    <!-- **********************slider************************* -->
    <div class="homepage_top_feature">
        <div class="slider_img_container">
            <div class="slides">

                <div class="slide">
                    <div class="slide-1-text-left">
                        <p>В коллекцию высококачественных
                        черных чаев Teekanne входят
                        самые популярные в мире
                        чайные бленды/купажи.<p>
                        <p>
                        Насладитесь насыщенным вкусом
                        черного чая Teekanne и ощутите
                        гармонию с природой.</p>
                        <a href="#" class="red-button">ПОСМОТРЕТЬ ЛИНЕЙКУ</a>
                    </div>
                    <div class="slide-1-text-right">
                        <h2 class="list-title">НАШИ ЧАИ:</h2>
                        <ul class="tea-list">
                            <li><a class="current" href="#">Черный</a></li>
                            <li><a href="#">Зеленый</a></li>
                            <li><a href="#">Фруктовый и травяной</a></li>
                            <li><a href="#">Десертный</a></li>
                            <li><a href="#">Сезонный</a></li>
                        </ul>
                    </div>
                    <?php if (onepage_get_option('onepage_slideimage1') != '') { ?>
                        <img  src="<?php echo onepage_get_option('onepage_slideimage1'); ?>" alt="Slide Image 1"/>
                    <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slide-1.png" alt="slides img1">
                    <?php } ?>
                </div>
            </div>
        </div>

        <!-- slider 8 ends --------------------------------------------------------------->


    </div>
    <div class="clear"></div>
    <div class="front_block_2">
        <div class="number-one">
            <div class="adonisc font-60 text-center color-white">№1</div>
            <div class="adonisc font-20 uppercase text-center color-white">В ЕВРОПЕ СРЕДИ ФРУКТОВЫХ И ТРАВЯНЫХ ЧАЕВ.<br/>
                ТЕПЕРЬ И В РОССИИ.</div>
        </div>
    </div>
    <div class="front_block_3">
        <div class="history-block">
            <div class="hb-1">
                История происхождения чая<br />
                История происхождения чайного напитка
            </div>
            <div class="hb-2">
                <p>Помимо различных сортов чая, таких как черный, зеленый, белый, красный,
                существует бесчисленное множество чайных напитков, которые также называют
                фруктовыми или травяными чаями.</p>

                <p>Черный или зеленый чай готовится из листьев чайного куста, ботаническое
                название которого «камелия китайская» (camellia sinensis). Чайный куст
                традиционно разделяется на два подвида китайский (camellia sinensis var.
                sinensis) и ассамский (camellia sinensis var. assamica).</p>

                <p>Чайный напиток представляет собой смесь из цветов, трав, фруктов и пряностей.
                Не стоит путать его с традиционным ароматизированным чаем. Травяной или
                фруктовый чай не содержит чайные листья и кофеин, а потому отлично подходит
                и взрослым, и детям.</p>
            </div>
            <div class="hb-3">
                <p>Несмотря на то, что чай появился в Китае почти 5000 лет назад, прошло
                несколько тысяч лет прежде чем он добрался до других уголков земли.
                Сегодня чай выращивают в промышленных масштабах более чем в 30
                странах, где экспорт этого продукта вносит значительный вклад в
                экономику сельского хозяйства.</p>

                <p>Основные регионы, где выращивают чай расположены между 43о
                северной широты и 30о южной широты, ведь чайному дереву требуется
                обилие солнечного света. Но оно не выносит застоя воды под корнями, а
                потому чайные плантации в основном расположены на горных склонах
                высотой до 3000 метров.</p>

                <p>Мировой лидер по производству чая – Китай (производит до 1,3 миллиона
                тонн в год). На втором месте Индия, затем Африка, Цейлон (Шри-Ланка с
                1977 года) и Индонезия.</p>
            </div>
            <div class="hb-4">
                <ul class="history-list">
                    <li><a class="current" href="#">Истоки</a></li>
                    <li><a href="#">Сбор урожая</a></li>
                    <li><a href="#">Обработка</a></li>
                    <li><a href="#">Упаковка</a></li>
                    <li><a href="#">Контроль качества</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="front_block_4">
        <div class="adonisc font-60 text-center color-white">100%</div>
        <div class="adonisc font-25 uppercase text-center color-white">НАТУРАЛЬНЫХ ИНГРЕДИЕНТОВ — <br/>
            ВАШ ПУТЬ К ГАРМОНИИ С ПРИРОДОЙ </div>
    </div>
    <div class="front_block_5">
        <div class="fb-5-wrap">
            <div class="fb-5-left">
                <h1 class="font-50 color-red">О компании</h1>
                <p>Since 1882, family-owned company TEEKANNE has been
                developing the best traditions of tea business in Germany and
                other countries worldwide.</p>

                <p>More than 130 years of experience and knowhow in tea making
                result in a wide range of highly indulgent teas that spans from
                classic black teas to new and innovative tea creations in all tea
                segments.</p>

                <p>Today, TEEKANNE belongs to the world’s leading tea
                manufacturers and constantly develops new tea creations and
                most indulgent taste experiences using natural ingredients,
                which are carefully selected by our own tea experts from the
                best origins in the world.</p>
            </div>
        </div>
    </div>
    <div class="front_block_10">
    </div>
    <!-- ***********************Featured Text Area Block************************* -->
    <div class="featured_text_area default_bg">

        <div class="container_24">
            <?php if (onepage_get_option('onepage_page_main_heading') != '') { ?>
                <h1 id="fta_top"><?php echo stripslashes(onepage_get_option('onepage_page_main_heading')); ?></h1>
            <?php } else { ?>
                <h2 id="fta_top"><?php _e('Premium WordPress Themes with Single Click Installation', 'onepage'); ?></h2>
            <?php } ?>
            <?php if (onepage_get_option('onepage_page_sub_heading') != '') { ?>
                <p id="fta_bottom"><?php echo stripslashes(onepage_get_option('onepage_page_sub_heading')); ?></p>
            <?php } else { ?>
                <p id="fta_bottom"><?php _e('Just a Click and your website is ready for use. Your Site is faster to built, easy to use & Search Engine Optimized.', 'onepage'); ?></p>
            <?php } ?>
        </div>
    </div>
    <div class="clear"></div>
    <!-- ***********************Our Services block************************* -->
    <div class="homepage_nav_title services">
        <?php if (onepage_get_option('onepage_our_services_heading') != '') { ?>
            <h1 class="index_titles"><?php echo stripslashes(onepage_get_option('onepage_our_services_heading')); ?></h1>
        <?php } else { ?>
            <h1 class="index_titles"><?php _e('Our Services', 'onepage'); ?></h1>
        <?php } ?>

    </div>
    <div class="clear"></div>
    <!-- **content starts here** -->
    <div class="services_block default_bg">
        <div class="container_24">
            <div class="grid_24">
                <!-- box -->

                <div class="services_box_container">
                    <ul class="ch-grid">
                        <!-- box1 -->
                        <li id="services_box_container1">

                            <?php if (onepage_get_option('onepage_our_services_image1') != '') { ?>
                                <div class="ch-item ch-img-1" style="background: url(<?php echo onepage_get_option('onepage_our_services_image1'); ?>);">
                                <?php } else { ?>
                                    <div class="ch-item ch-img-1" style="background: url(<?php echo get_template_directory_uri(); ?>/images/circle_img1.jpg);">
                                    <?php } ?>
                                    <div class="ch-info-wrap">
                                        <div class="ch-info">
                                            <div class="ch-info-front ch-img-1">
                                                <?php if (onepage_get_option('onepage_our_services_image1') != '') { ?>
                                                    <img src="<?php echo onepage_get_option('onepage_our_services_image1'); ?>" />
                                                <?php } else { ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/circle_img1.jpg" />
                                                <?php } ?>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="rect_box">
                                    <?php if (onepage_get_option('onepage_our_services_title1') != '') { ?>
                                        <p class="services_box_rect_head"><a <?php if (onepage_get_option('onepage_services_title_link1') != '') { ?>href="<?php echo stripslashes(onepage_get_option('onepage_services_title_link1')); ?><?php } else { ?><?php } ?>" target="_blank"><?php echo stripslashes(onepage_get_option('onepage_our_services_title1')); ?></a></p>
                                    <?php } else { ?>
                                        <p class="services_box_rect_head"><a href="http://inkthemes.com">Single Click Installation</a></p>
                                    <?php } ?>
                                    <?php if (onepage_get_option('onepage_our_services_desc1') != '') { ?>
                                        <p class="services_box_rect_para"><?php echo stripslashes(onepage_get_option('onepage_our_services_desc1')); ?></p>
                                    <?php } else { ?>

                                        <p class="services_box_rect_para"><?php _e('Just a Click and your website is ready for use. Your Site is faster to built, easy to use & Search Engine Optimized.', 'onepage'); ?></p>
                                    <?php } ?>
                                </div>
                        </li>
                        <!-- box2 -->
                        <li id="services_box_container2">

                            <?php if (onepage_get_option('onepage_our_services_image2') != '') { ?>
                                <div class="ch-item ch-img-2" style="background: url(<?php echo onepage_get_option('onepage_our_services_image2'); ?>);">
                                <?php } else { ?>
                                    <div class="ch-item ch-img-2" style="background: url(<?php echo get_template_directory_uri(); ?>/images/circle_img2.jpg);">
                                    <?php } ?>
                                    <div class="ch-info-wrap">
                                        <div class="ch-info">
                                            <div class="ch-info-front ch-img-2">
                                                <?php if (onepage_get_option('onepage_our_services_image2') != '') { ?>
                                                    <img src="<?php echo onepage_get_option('onepage_our_services_image2'); ?>" />
                                                <?php } else { ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/circle_img2.jpg" />
                                                <?php } ?>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="rect_box">
                                    <?php if (onepage_get_option('onepage_our_services_title2') != '') { ?>
                                        <p class="services_box_rect_head"><a <?php if (onepage_get_option('onepage_services_title_link2') != '') { ?>href="<?php echo stripslashes(onepage_get_option('onepage_services_title_link2')); ?><?php } else { ?><?php } ?>" target="_blank"><?php echo stripslashes(onepage_get_option('onepage_our_services_title2')); ?></a></p>
                                    <?php } else { ?>
                                        <p class="services_box_rect_head"><a href="http://inkthemes.com"><?php _e('Single Click Installation', 'onepage'); ?></a></p>
                                    <?php } ?>
                                    <?php if (onepage_get_option('onepage_our_services_desc2') != '') { ?>
                                        <p class="services_box_rect_para"><?php echo stripslashes(onepage_get_option('onepage_our_services_desc2')); ?></p>
                                    <?php } else { ?>

                                        <p class="services_box_rect_para"><?php _e('Just a Click and your website is ready for use. Your Site is faster to built, easy to use & Search Engine Optimized.', 'onepage'); ?></p>
                                    <?php } ?>
                                </div>
                        </li>
                        <!-- box3 -->
                        <li id="services_box_container3">

                            <?php if (onepage_get_option('onepage_our_services_image3') != '') { ?>
                                <div class="ch-item ch-img-2" style="background: url(<?php echo onepage_get_option('onepage_our_services_image3'); ?>);">
                                <?php } else { ?>
                                    <div class="ch-item ch-img-3" style="background: url(<?php echo get_template_directory_uri(); ?>/images/circle_img3.jpg);">
                                    <?php } ?>
                                    <div class="ch-info-wrap">
                                        <div class="ch-info">
                                            <div class="ch-info-front ch-img-3">
                                                <?php if (onepage_get_option('onepage_our_services_image3') != '') { ?>
                                                    <img src="<?php echo onepage_get_option('onepage_our_services_image3'); ?>" />
                                                <?php } else { ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/circle_img3.jpg" />
                                                <?php } ?>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="rect_box">
                                    <?php if (onepage_get_option('onepage_our_services_title3') != '') { ?>
                                        <p class="services_box_rect_head"><a <?php if (onepage_get_option('onepage_services_title_link3') != '') { ?>href="<?php echo stripslashes(onepage_get_option('onepage_services_title_link3')); ?><?php } else { ?><?php } ?>" target="_blank"><?php echo stripslashes(onepage_get_option('onepage_our_services_title3')); ?></a></p>
                                    <?php } else { ?>
                                        <p class="services_box_rect_head"><a href="http://inkthemes.com">Single Click Installation</a></p>
                                    <?php } ?>
                                    <?php if (onepage_get_option('onepage_our_services_desc3') != '') { ?>
                                        <p class="services_box_rect_para"><?php echo stripslashes(onepage_get_option('onepage_our_services_desc3')); ?></p>
                                    <?php } else { ?>

                                        <p class="services_box_rect_para"><?php _e('Just a Click and your website is ready for use. Your Site is faster to built, easy to use & Search Engine Optimized.', 'onepage'); ?></p>
                                    <?php } ?>
                                </div>
                        </li>
                        <!-- box4 -->
                        <li id="services_box_container4">


                            <?php if (onepage_get_option('onepage_our_services_image4') != '') { ?>
                                <div class="ch-item ch-img-4" style="background: url(<?php echo onepage_get_option('onepage_our_services_image4'); ?>);">
                                <?php } else { ?>
                                    <div class="ch-item ch-img-4" style="background: url(<?php echo get_template_directory_uri(); ?>/images/circle_img4.jpg);">
                                    <?php } ?>
                                    <div class="ch-info-wrap">
                                        <div class="ch-info">
                                            <div class="ch-info-front ch-img-4">
                                                <?php if (onepage_get_option('onepage_our_services_image4') != '') { ?>
                                                    <img src="<?php echo onepage_get_option('onepage_our_services_image4'); ?>" />
                                                <?php } else { ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/circle_img4.jpg" />
                                                <?php } ?>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="rect_box">
                                    <?php if (onepage_get_option('onepage_our_services_title4') != '') { ?>
                                        <p class="services_box_rect_head"><a <?php if (onepage_get_option('onepage_services_title_link4') != '') { ?>href="<?php echo stripslashes(onepage_get_option('onepage_services_title_link4')); ?><?php } else { ?><?php } ?>" target="_blank"><?php echo stripslashes(onepage_get_option('onepage_our_services_title4')); ?></a></p>
                                    <?php } else { ?>
                                        <p class="services_box_rect_head"><a href="http://inkthemes.com"><?php _e('Single Click Installation', 'onepage'); ?></a></p>
                                    <?php } ?>
                                    <?php if (onepage_get_option('onepage_our_services_desc4') != '') { ?>
                                        <p class="services_box_rect_para"><?php echo stripslashes(onepage_get_option('onepage_our_services_desc4')); ?></p>
                                    <?php } else { ?>

                                        <p class="services_box_rect_para"><?php _e('Just a Click and your website is ready for use. Your Site is faster to built, easy to use & Search Engine Optimized.', 'onepage'); ?></p>
                                    <?php } ?>
                                </div>
                        </li>
                    </ul>
                </div>
                <!-- box4 ends -->
            </div>

            <div class="clear"></div>
        </div>
    </div>
    <!-- ***********************Recent Blogs************************* -->
    <div class="homepage_nav_title blogs">
        <?php if (onepage_get_option('onepage_recent_blog_heading') != '') { ?>
            <h1 class="index_titles"><?php echo stripslashes(onepage_get_option('onepage_recent_blog_heading')); ?></h1>
        <?php } else { ?>
            <h1 class="index_titles"><?php _e('Recent Blogs', 'onepage'); ?></h1>
        <?php } ?>
        <div class="clear"></div>
    </div>

    <!-- ***Recent blog container starts** -->
    <?php if (onepage_get_option('onepage_bodybg') != '') { ?>
        <div class="featured_blog_content default_bg" style="background: url(<?php echo stripslashes(onepage_get_option('onepage_bodybg')); ?>);">
        <?php } else { ?>
            <div class="featured_blog_content default_bg">
            <?php } ?>

            <div class="container_24"><div class="grid_24">
                    <!-- Start the Loop. -->
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
                            <?php
                            static $count = 0;
                            if ($count == "6") {
                                break;
                            } else {
                                ?>

                                <!--post start-->

                                <?php
                                if (!has_post_thumbnail()) {
                                    continue;
                                } else {
                                    if (strpos($post->post_content, '[gallery') !== false) {
                                        continue;
                                    } else {
                                        ?>
                                        <div class="post">
                                            <div class="post_heading_wrapper">
                                                <div class="postimage_container">
                                                    <span class="thumb">
                                                        <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) { ?>
                                                            <a href="<?php the_permalink(); ?>">
                                                                <?php the_post_thumbnail(); ?>
                                                            </a>
                                                            <?php
                                                        }
                                                        ?>
                                                        <span>
                                                            <?php
                                                            // Get the Name of First Category
//Fetching all the categories for the post and displaying first pocket
                                                            the_category(', ');
                                                            ?>
                                                        </span>
                                                    </span>
                                                    <div class="clear"></div>
                                                </div>
                                                <ul class="post_meta">
                                                    <li class="day"><?php echo get_the_time('d') ?></li>
                                                    <li class="month"><?php echo get_the_time('M') ?></li>
                                                    <li class="year"><?php echo get_the_time('Y') ?></li>
                                                    <li class="posted_by"><span><?php _e('by&nbsp;', 'onepage'); ?></span><?php the_author_posts_link(); ?></li>
                                                    <li class="post_comment"><?php comments_popup_link('No Comments.', '1 Comment.', '% Comments.'); ?></li>
                                                </ul>
                                                <h1 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                                            </div>
                                            <div class="post_content">
                                                <?php the_excerpt(); ?>

                                                <a class="read-more" href="<?php the_permalink() ?>"><?php echo READ_MORE; ?></a>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <!--End Post-->
                                        <?php
                                    }
                                }
                                ?>
                                <?php
                                $count++;
                            }
                            ?>
                            <?php
                        endwhile;
                    else:
                        ?>

                        <div class="blogs_page_container">
                            <p>
                                <?php echo SORRY_NO_POST_MATCHED_YOUR_CRITERIA; ?>
                            </p>
                        </div>
                    <?php endif; ?>
                    <!--End Loop-->
                </div></div>
        </div>
        <div class="clear"></div>
        <!-- ***Recent blog container* ends** -->

        <!-- ***********************Contact Page************************* -->
        <div class="homepage_nav_title contact">
            <?php if (onepage_get_option('onepage_our_contact_heading') != '') { ?>
                <h1 class="index_titles"><?php echo stripslashes(onepage_get_option('onepage_our_contact_heading')); ?></h1>
            <?php } else { ?>
                <h1 class="index_titles"><?php _e('Contact', 'onepage'); ?></h1>
            <?php } ?>
        </div>



        <div class="clear"></div>
        <!-- ***contact content*** -->
        <?php if (onepage_get_option('onepage_bodybg') != '') { ?>
            <div class="contact_wrapper default_bg" style="background: url(<?php echo stripslashes(onepage_get_option('onepage_bodybg')); ?>);">
            <?php } else { ?>
                <div class="contact_wrapper default_bg">
                <?php } ?>
                <div class="container_24">
                    <div class="grid_24">
                        <div class="contact_container">
                            <div class="add_n_map">
                                <div class="anchor_bordera">
                                    <?php if (onepage_get_option('onepage_our_contact_sub_heading') != '') { ?>
                                        <h1><?php echo stripslashes(onepage_get_option('onepage_our_contact_sub_heading')); ?></h1>
                                    <?php } else { ?>
                                        <h1><?php _e('Address', 'onepage'); ?></h1>
                                    <?php } ?>
                                </div>
                                <div><div class="contact-image-bookmark-icon"></div>
                                    <?php if (onepage_get_option('onepage_contact_address') != '') { ?>
                                        <p><?php echo stripslashes(onepage_get_option('onepage_contact_address')); ?></p>
                                    <?php } else { ?>
                                        <p><?php _e('Address -  The Address', 'onepage'); ?></p>
                                    <?php } ?>
                                </div>
                                <div><div class="contact-image-tele-icon"></div>
                                    <?php if (onepage_get_option('onepage_contact_phone_no') != '') { ?>
                                        <p><?php echo stripslashes(onepage_get_option('onepage_contact_phone_no')); ?></p>
                                    <?php } else { ?>
                                        <p><?php _e('Phone - 1245 213 689', 'onepage'); ?></p>
                                    <?php } ?>
                                </div>
                                <div><div class="contact-image-mail-icon"></div>
                                    <?php if (onepage_get_option('onepage_ontact_email') != '') { ?>
                                        <p><?php echo stripslashes(onepage_get_option('onepage_ontact_email')); ?></p>
                                    <?php } else { ?>
                                        <p>Email - name@example.com</p>
                                    <?php } ?>
                                </div>
                                <div><div class="contact-image-globe-icon"></div>
                                    <?php if (onepage_get_option('onepage_contact_website') != '') { ?>
                                        <p><?php echo stripslashes(onepage_get_option('onepage_contact_website')); ?></p>
                                    <?php } else { ?>
                                        <p><?php _e('Website', 'onepage'); ?> - www.example.com</p>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>


            <!-- ***********************Contact Page Ends************************* -->
            <?php
            get_footer();
        }
        ?> 