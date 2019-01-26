<?php get_header(); ?>
<?php
$my_postid = get_the_ID(); //This is page id or post id
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
?>
<div id="layout" class="pagewidth clearfix">
    <!-- content -->
    <div id="content" class="clearfix">

        <div id="page-476" class="type-page">

            <div class="page-content entry-content">

                <?php echo $content;?>

                <div id="themify_builder_content-476" data-postid="476" class="themify_builder_content themify_builder_content-476 themify_builder">

                </div>
            </div>

        </div><!-- /.type-page -->
    </div>
    <!-- /content -->

</div>
<?php get_footer(); ?>