<?php
get_header();
?>
<div class="clear"></div>
<!-- Header condition2 starts here -->

<!-- Start the Loop. -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="post-wrap">
        <?php $nextPage = get_post_meta( get_the_ID(), 'nextPage' ); ?>
        <?php $prevPage = get_post_meta( get_the_ID(), 'prevPage' ); ?>

        <div class="post-wrap-right">
            <div class="post-inner" style="position: relative;">

                <?php if($prevPage): ?>
                    <a href="<?php echo $prevPage[0]; ?>" class="inner-navigation prev-page"></a>
                <?php endif; ?>

                <?php if($nextPage): ?>
                    <a href="<?php echo $nextPage[0]; ?>" class="inner-navigation next-page"></a>
                <?php endif; ?>

                <div class="post-title"><?php the_title(); ?></div>
                <div class="post-description"><?php the_content(); ?></div>
                <div class="clear"></div>
                <a href="<?php echo home_url(); ?>" class="color-red font-20 uppercase" style="display: block;">&larr; назад</a>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php endif; ?>
<!-- ***********************Featured Text Area Block************************* -->

<div class="clear"></div>


<!-- ***********************Contact Page Ends************************* -->
<?php
get_footer();
?> 