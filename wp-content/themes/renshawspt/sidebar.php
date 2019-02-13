<div class="related-posts">
    <h4 class="related-title">Related Posts</h4>
    <?php
    $related = get_posts(array('category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID)));
    if ($related)
        foreach ($related as $post) {
            setup_postdata($post);
            ?>
            <article class="post type-post clearfix">

                <figure class="post-image clearfix">
                    <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail();?></a>
                </figure>

                <div class="post-content">
                    <p class="post-meta">
                        <?php 
                            $category = get_the_category();
                            $first_category = $category[0];
                        ?>
                        <span class="post-category"><a href="<?php echo get_category_link( $first_category );?>" rel="tag" class="term-2018-workouts"><?php echo $first_category->name;?></a></span>						</p>
                    <h4 class="post-title">
                        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                            <?php the_title(); ?>							</a>
                    </h4>
                </div>
                <!-- /.post-content -->

            </article>
  
        <?php
        }
    wp_reset_postdata();
    ?>   
</div>
