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

            <!-- page-title -->

            <time datetime="2017-05-28"></time>
            <h1 class="page-title">Forgot Password </h1>						<!-- /page-title -->

            <div class="page-content entry-content">

                <?php echo $content;?>

<!--                <form method="post">
                    <div class="mm-forgot-password">
                        <h3>Enter your email address below</h3>
                        <p><input type="text" id="email" name="email" class="mm-field"><br>
                            <input type="submit" name="submit" value="Submit" id="mm-submit-button" class="mm-button " onclick="return forgotpassword_js.checkFields();">
                        </p></div>
                </form>-->
                <div id="themify_builder_content-476" data-postid="476" class="themify_builder_content themify_builder_content-476 themify_builder">

                </div>
                <!-- /themify_builder_content -->


                <!-- comments -->
                <!-- /comments -->

            </div>
            <!-- /.post-content -->

        </div><!-- /.type-page -->


    </div>
    <!-- /content -->




</div>
<?php get_footer(); ?>