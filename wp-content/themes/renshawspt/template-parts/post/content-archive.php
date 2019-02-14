<?php
$category = get_the_category();
$first_category = $category[0];
?>   
<article id="post-<?php the_ID();?>" class="post clearfix post-<?php the_ID();?> type-post status-publish format-standard hentry has-post-title no-post-date has-post-category has-post-tag no-post-comment no-post-author   cat-<?php echo $first_category->cat_ID; ?> tiled-square-small" >
    <a href="<?php the_permalink() ?>" data-post-permalink="yes" style="display: none;"></a>
    <div class="post-content">
        <div class="post-content-inner">
            <h2 class="post-title entry-title"><a href="<?php the_permalink() ?>">December 2018: Free Weight Pyramid Sets</a> </h2>			
            <p class="post-meta entry-meta">
             
                <span class="post-category"><a href="<?php echo get_category_link($first_category); ?>" rel="tag" class="term-2018-workouts"><?php echo $first_category->name; ?></a></span>					
            </p>
            <!-- /post-meta -->
            <div class="entry-content">
                <?php the_excerpt() ;?>
            </div><!-- /.entry-content -->
        </div>
        <!-- /.post-content-inner -->
    </div>
    <!-- /.post-content -->
</article>