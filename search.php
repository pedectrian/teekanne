<?php
/**
 * The template for displaying Search Results pages.
 *
 * 
 */
get_header();
?>
    <!-- Header condition2 starts here -->

    <!-- Start the Loop. -->

    <div class="post-wrap">
        <div class="post-wrap-right">
            <div class="container_24">
                <div class="post-title"><?php echo "Результаты поиска: " . get_search_query(); ?></div>
            </div>
            <div class="post-inner">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                <div class="post-description"><?php the_excerpt(); ?></div>

<?php endwhile; ?>
<?php else : ?>
    <div class="post-description">Ничего не найдено</div>
<?php endif; ?>

            </div>
        </div>
    </div>
    <!-- ***********************Featured Text Area Block************************* -->

    <div class="clear"></div>


    <!-- ***********************Contact Page Ends************************* -->
<?php
get_footer();
?>
<!--    <div class="clear"></div>-->
<!--<!-- blog title ends -->-->
<!--<div class="blog_pages_wrapper default_bg">-->
<!--    <div class="container_24">-->
<!--        <div class="grid_24">-->
<!--            <div class="grid_16 alpha">-->
<!--                <!--page start-->-->
<!---->
<!--                --><?php //if (have_posts()) : ?><!--               -->
<!--                    <!--Start Post-->-->
<!--                    --><?php //get_template_part('loop', 'search'); ?>
<!--                    <!--End Post-->-->
<!--                --><?php //else : ?>
<!--                    <article id="post-0" class="post no-results not-found">-->
<!--                        <header class="entry-header">-->
<!--                            <h1 class="entry-title">-->
<!--                                --><?php //echo NOTHING_FOUND; ?>
<!--                            </h1>-->
<!--                        </header>-->
<!--                        <!-- .entry-header -->-->
<!--                        <div class="entry-content">-->
<!--                            <p>-->
<!--                                --><?php //echo SORRY_NOTHING_FOUND_TRY_AGAIN_WITH_ANOTHER_KEYWORD; ?>
<!--                            </p>-->
<!--                            --><?php //get_search_form(); ?>
<!--                        </div>-->
<!--                        <!-- .entry-content -->-->
<!--                    </article>-->
<!--                --><?php //endif; ?>
<!--                <div class="clear"></div>-->
<!--                <nav id="nav-single"> <span class="nav-previous">-->
<!--                        --><?php //next_posts_link(OLDER_POST); ?>
<!--                    </span> <span class="nav-next">-->
<!--                        --><?php //previous_posts_link(NEWER_POST); ?>
<!--                    </span> </nav>	-->
<!---->
<!--                <!--End Page-->-->
<!--                <div class="clear"></div>-->
<!--            </div>-->
<!--            <!--Sidebar-->-->
<!--            <div class="grid_8 omega">-->
<!--                <!--Start Sidebar-->-->
<!--                --><?php //get_sidebar(); ?>
<!--                <!--End Sidebar-->-->
<!--            </div>-->
<!--            <div class="clear"></div>-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="clear"></div>
<?php get_footer(); ?>