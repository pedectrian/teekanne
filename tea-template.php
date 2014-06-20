<?php
/*
 * Template Name: Шаблон чайной страницы
 */
    get_header();
    ?>
    <div class="clear"></div>
    <!-- Header condition2 starts here -->

    <!-- **********************header ends************************* -->
    <!-- **********************slider************************* -->
<div class="product-sidebar-wrap">
    <div class="product-sidebar">
        <?php dynamic_sidebar( 'product-page-menu' ); ?>
    </div>
</div>
<!-- Start the Loop. -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php $bgColor = get_post_meta( get_the_ID(), 'bg_color' ); ?>
    <?php $bgImage = get_post_meta( get_the_ID(), 'bg_image' ); ?>
    <?php $bottomDescr = get_post_meta( get_the_ID(), 'bottom-description' ); ?>

    <div class="tea-wooden-bg">
        <div class="tea-wrap" style="background: <?php echo $bgColor[0].' url(\''.$bgImage[0].'\') no-repeat top right'; ?>">
            <div class="tea-inner">
                <div class="tea-title"><?php echo the_title(); ?></div>
                <div class="tea-description"><?php echo the_content(); ?></div>
                <div class="tea-thumbnail">
                    <?php the_post_thumbnail('tea_page_thumbnail'); ?>

                    <a class="tea-nav tea-left"></a>
                    <a class="tea-nav tea-right"></a>
                </div>

            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
<!--End Loop-->
<div class="front_block_2" style="height: 250px;padding: 30px 0;">
    <div class="adonisc font-20 uppercase text-center color-white"><?php echo $bottomDescr[0]; ?></div>
</div>

    <!-- ***********************Featured Text Area Block************************* -->

            <div class="clear"></div>


            <!-- ***********************Contact Page Ends************************* -->
            <?php
            get_footer();
        ?> 