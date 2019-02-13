<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<div id="layout" class="pagewidth clearfix">
    <!-- content -->
    <div id="content" class="clearfix list-post">

        <div id="page-476" class="type-page">

            <?php
            /* Start the Loop */
            while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/post/content', 'workout' );
            endwhile; // End of the loop.
            ?>
            
            <div class="post-nav">
                <?php 
                    the_post_navigation( array(
                            'prev_text' => '<span class="screen-reader-text">' .'</span><span aria-hidden="true" class="nav-subtitle">' .  '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . '</span>%title</span>',
                            'next_text' => '<span class="screen-reader-text">' . '</span><span aria-hidden="true" class="nav-subtitle">' .  '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' .  '</span></span>',
                    ) );
                ?>
            </div>
            
            <?php get_sidebar(); ?>
        </div><!-- /.type-page -->
    </div>
    <!-- /content -->

</div>

<?php get_footer();
