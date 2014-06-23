<?php
get_header();
?>
<div class="clear"></div>
<!-- Header condition2 starts here -->

<!-- Start the Loop. -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="post-wrap">
        <div class="post-wrap-right">
            <div class="post-inner">
                <div class="post-title"><?php the_title(); ?></div>
                <div class="post-description"><?php the_content(); ?></div>
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