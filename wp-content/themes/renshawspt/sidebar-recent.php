<aside id="sidebar" itemscope="itemscope" itemtype="https://schema.org/WPSidebar">
    <div id="themify-feature-posts-1002" class="widget feature-posts">
        <h4 class="widgettitle">Recent Posts</h4>
        <ul class="feature-posts-list">
        <?php
            $recent_posts = wp_get_recent_posts(array(
                'numberposts' => 5, // Number of recent posts thumbnails to display
                'post_status' => 'publish' // Show only the published posts
            ));
            foreach ($recent_posts as $post) :
                ?>
                    <li><a aria-hidden="true" href="<?php echo get_permalink($post['ID']); ?>">
                            <?php echo get_the_post_thumbnail($post['ID'], array(50, 50), array( 'class' => 'post-img wp-post-image wp-image-1672' )); ?>
                        </a>
                        <a href="<?php echo get_permalink($post['ID']); ?>" class="feature-posts-title"><?php echo $post['post_title']; ?></a> 
                        <br>
                    </li>
        <?php endforeach;
        wp_reset_query(); ?>
        </ul>
</aside>