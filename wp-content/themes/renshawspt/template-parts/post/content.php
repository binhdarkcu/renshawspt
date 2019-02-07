<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
$image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
$categories_id = wp_get_post_categories(get_the_ID());
$category = get_category($categories_id[0]);
?>
<article id="post-1773" class="post clearfix post-1773 type-post status-publish format-standard has-post-thumbnail hentry category-2019-workouts has-post-title has-post-date has-post-category has-post-tag no-post-comment no-post-author <?php foreach ($categories_id as $cat_id){ echo 'cat-'.$cat_id;};?>" style="position: absolute; left: 0px; top: 0px;">

    <a href="<?php echo get_permalink();?>" data-post-permalink="yes" style="display: none;"></a>

    <figure class="post-image  clearfix">

        <a href="<?php echo get_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url();?>" class=" wp-post-image wp-image-1774"  srcset="<?php echo get_the_post_thumbnail_url();?> <?php echo $image_data[1];?>w, <?php echo the_post_thumbnail_url('medium');?> 300w, <?php echo the_post_thumbnail_url('medium_large');?> 768w, <?php echo the_post_thumbnail_url('large');?> 1024w" sizes="(max-width: <?php echo $image_data[1];?>px) 100vw, <?php echo $image_data[1];?>px"></a>

    </figure>

    <div class="post-content">
        <div class="post-content-inner">

            <div class="post-date-wrap">
                <time class="post-date entry-date updated" datetime="2018-12-30">
                    <span class="month">December</span>
                    <span class="day">30</span>
                    <span class="year">2018</span>
                </time>
            </div>

            <h2 class="post-title entry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a> </h2>			
            <p class="post-meta entry-meta">
                <span class="post-category"><a href="<?php echo get_category_link($categories_id[0]); ?>" rel="tag" class="term-<?php echo $category->category_nicename;?>"><?php echo strtolower(get_cat_name($categories_id[0]));?></a></span>					
            </p>
            <!-- /post-meta -->

            <div class="entry-content">

            </div><!-- /.entry-content -->

        </div>
        <!-- /.post-content-inner -->
    </div>
    <!-- /.post-content -->

</article>
<!-- /.post -->
