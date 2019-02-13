<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php 

$obj = get_queried_object();
?>
<div id="layout" class="pagewidth clearfix">
    <div id="content" class="clearfix">
  	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header><!-- .page-header -->
	<?php endif; ?>

        <ul class="post-filter filter-visible">	
            <li class="cat-item cat-item-<?php echo $obj->cat_ID; ?> current-cat"><a href="#"><?php echo $obj->name;?></a></li>
        </ul>                 
	<div id="loops-wrapper" class="loops-wrapper sidebar1 auto_tiles  overlay pagination masonry-done loading-finish" style="position: relative; height: 1045px;">

		<?php
		if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/post/content', get_post_format() );

			endwhile;

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif; ?>

	</div><!-- #primary -->  
        
        <?php 
        
        the_posts_pagination( array(
                'prev_text' => '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
                'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>',
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
        ) );       
        ?>
    </div>

	<?php // get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
