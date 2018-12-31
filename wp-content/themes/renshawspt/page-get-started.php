<?php
$my_postid = get_the_ID(); //This is page id or post id
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
?>

<!DOCTYPE html>
<html lang="en-US">

    <head>
        <meta charset="UTF-8" />
        <!-- wp_head -->
        <title>Get Started &#8211; Nicky Arthur Fitness</title>
        <link rel='dns-prefetch' href='//ajax.googleapis.com' />
        <link rel='dns-prefetch' href='//maxcdn.bootstrapcdn.com' />
        <link rel='dns-prefetch' href='//fonts.googleapis.com' />
        <link rel='dns-prefetch' href='//s.w.org' />
        <link rel="alternate" type="application/rss+xml" title="Renshaw&#039;s Personal Training &raquo; Feed" href="https://www.renshawspt.com/feed/" />
        <link rel="alternate" type="application/rss+xml" title="Renshaw&#039;s Personal Training &raquo; Comments Feed" href="https://www.renshawspt.com/comments/feed/" />

        <link rel='stylesheet' id='gdpr_css-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/css/gdpr-banner.css?ver=1.0.0' type='text/css' media='all' />
        <link rel='stylesheet' id='themify-common-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/css/themify.common.min.css?ver=4.9.8' type='text/css' media='all' />
        <meta name="themify-framework-css" content="themify-framework-css" id="themify-framework-css">
        <meta name="builder-styles-css" content="" id="builder-styles-css">
        <link rel='stylesheet' id='membermouse-jquery-css-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/css/jquery-ui.css?ver=1.11.4' type='text/css' media='all' />
        <link rel='stylesheet' id='membermouse-main-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/css/mm-main.css?ver=2.2.8' type='text/css' media='all' />
        <link rel='stylesheet' id='membermouse-buttons-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/css/mm-buttons.css?ver=2.2.8' type='text/css' media='all' />
        <link rel='stylesheet' id='membermouse-font-awesome-css'  href='http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?ver=4.9.8' type='text/css' media='all' />
        <link rel='stylesheet' id='theme-style-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/css/style.min.css?ver=1.9.9' type='text/css' media='all' />
        <link rel='stylesheet' id='themify-media-queries-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/css/media-queries.min.css?ver=1.9.9' type='text/css' media='all' />
        <link rel='stylesheet' id='themify-skin-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/css/style2.min.css?ver=3.5.8' type='text/css' media='all' />
        <link rel='stylesheet' id='themify-customize-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/css/themify-customizer.css?ver=18.08.18.18.10.57' type='text/css' media='all' />
        <link rel='stylesheet' id='ultra-color-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/css/theme-color-black.min.css?ver=4.9.8' type='text/css' media='all' />
        <link rel='stylesheet' id='ultra-font-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/css/theme-font-sans-serif.min.css?ver=4.9.8' type='text/css' media='all' />
        <link rel='stylesheet' id='ultra-header-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/css/header-top-widgets.min.css?ver=4.9.8' type='text/css' media='all' />
        <link rel='stylesheet' id='themify-builder-452-generated-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/css/themify-builder-452-generated.css?ver=1534698710' type='text/css' media='all' />
        <link rel='stylesheet' id='themify-google-fonts-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C400i%2C600%2C700%7CCormorant+Garamond%3A400%2C600%2C700%7COpen+Sans&#038;subset=latin&#038;ver=4.9.8' type='text/css' media='all' />
        <script type='text/javascript' src='<?php echo get_site_url(); ?>/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
        <script type='text/javascript' src='<?php echo get_site_url(); ?>/wp-content/plugins/membermouse/resources/js/common/mm-common-core.js?ver=2.2.8'></script>

        <meta name="generator" content="WordPress 4.9.8" />

        <link href="https://www.renshawspt.com/wp-content/uploads/2018/08/Renshaws-Personal-Training-Icon-1.png" rel="shortcut icon" />
        <script type='text/javascript'>
            /* <![CDATA[ */
            var MemberMouseGlobal = {"jsIsAdmin":"", "adminUrl":"<?php echo get_site_url(); ?>\/wp-admin\/", "globalurl":"<?php echo get_site_url(); ?>\/wp-content\/plugins\/membermouse", "checkoutProcessingPaidMessage":"Please wait while we process your order...", "checkoutProcessingFreeMessage":"Please wait while we create your account...", "checkoutProcessingMessageCSS":"mm-checkout-processing-message", "currencyInfo":{"currency":"USD", "postfixIso":false, "name":"United States Dollar", "int_curr_symbol":"&#85;&#83;&#68;&#32;", "currency_symbol":"$", "mon_decimal_point":".", "mon_thousands_sep":",", "mon_grouping":"3;3", "positive_sign":"", "negative_sign":"", "int_frac_digits":"2", "frac_digits":"2", "p_cs_precedes":"1", "p_sep_by_space":"0", "n_cs_precedes":"1", "n_sep_by_space":"0", "p_sign_posn":"1", "n_sign_posn":"1"}};
            /* ]]> */
        </script>
        <script type="text/javascript">
            var tf_mobile_menu_trigger_point = 1190;
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            @-webkit-keyframes themifyAnimatedBG {
                0% { background-color: #33baab; }
                100% { background-color: #e33b9e; }
                50% { background-color: #4961d7; }
                33.333333333333% { background-color: #2ea85c; }
                25% { background-color: #2bb8ed; }
                20% { background-color: #dd5135; }

            }
            @keyframes themifyAnimatedBG {
                0% { background-color: #33baab; }
                100% { background-color: #e33b9e; }
                50% { background-color: #4961d7; }
                33.333333333333% { background-color: #2ea85c; }
                25% { background-color: #2bb8ed; }
                20% { background-color: #dd5135; }

            }
            .themify_builder_row.animated-bg {
                -webkit-animation: themifyAnimatedBG 30000ms infinite alternate;
                animation: themifyAnimatedBG 30000ms infinite alternate;
            }
        </style>

        <!-- Entry Style -->
        <style>
            .skin-styles {
                background-color: rgba(246, 246, 246, 1)
            }
        </style>
        <!-- End Entry Style -->

    </head>

    <body class="page-template-default page page-id-452 themify-fw-3-5-8 themify-ultra-1-9-9 skin-lawyer webkit not-ie default_width sidebar-none no-home no-touch builder-parallax-scrolling-active header-top-widgets no-fixed-header no-shrinking-logo transparent-header footer-block theme-color-black theme-font-sans-serif logo-off social-widget-off rss-off search-off menu-navigation-off header-widgets-off footer-menu-navigation-off tile_enable  filter-hover-none filter-featured-only masonry-enabled skin-styles">

        <script type="text/javascript">
            function themifyMobileMenuTrigger(e) {
            if (document.body.clientWidth > 0 && document.body.clientWidth <= tf_mobile_menu_trigger_point) {
            document.body.classList.add('mobile_menu_active');
            } else {
            document.body.classList.remove('mobile_menu_active');
            }
            }
            themifyMobileMenuTrigger();
            document.addEventListener('DOMContentLoaded', function () {
            jQuery(window).on('tfsmartresize.tf_mobile_menu', themifyMobileMenuTrigger);
            }, false);
        </script>

        <div id="pagewrap" class="hfeed site">

            <!-- /#headerwrap -->

            <div id="body" class="clearfix">



                <!-- layout-container -->
                <div id="layout" class="pagewidth clearfix">

                    <!-- content -->
                    <div id="content" class="clearfix">


                        <div id="page-452" class="type-page">

                            <!-- page-title -->
                            <!-- /page-title -->

                            <div class="page-content entry-content">


                                <script type="text/javascript">
                                    if (!document.getElementById("builder-styles") && document.getElementById("builder-styles-css"))
                                            document.getElementById("builder-styles-css").insertAdjacentHTML("beforebegin", "<link id='builder-styles' rel='stylesheet' href='https://www.renshawspt.com/wp-content/themes/themify-ultra/themify/themify-builder/css/themify-builder-style.min.css?ver=3.5.8' type='text/css' />");
                                </script><div id="themify_builder_content-452" data-postid="452" class="themify_builder_content themify_builder_content-452 themify_builder">


                                    <!-- module_row -->
                                    <div  class="themify_builder_row module_row clearfix module_row_0 themify_builder_452_row module_row_452-0">
                                        <div class="row_inner " >


                                            <div  class="tb-column col-full first module_column tb_452_column module_column_0 module_column_452-0-0" >
                                                <div class="tb-column-inner">


                                                    <!-- module plain text -->
                                                    <div  id="plain-text-452-0-0-0" class="module module-plain-text plain-text-452-0-0-0  ">
                                                        <style>
                                                            #mm-account-information-section, #mm-billing-information-section1, #mm-billing-information-section2 {
                                                                width: 90%;
                                                                margin-top:-55px!important;
                                                            }
                                                            input[type=text], input[type=password], input[type=search], input[type=email], input[type=url], input[type=tel] {
                                                                max-width: 93%;
                                                                margin-left: 3%;
                                                            }
                                                            .mm-checkoutInfoBlock {
                                                                padding: 20px;
                                                                border: none !important;
                                                                margin-bottom: 20px;
                                                                border-radius: 5px;
                                                                overflow: hidden!important;
                                                            }
                                                            .mm-formField {
                                                                padding-bottom: 5px;
                                                                margin-bottom: 5px;
                                                                clear: left;
                                                                overflow: hidden!important;
                                                                color: #666;
                                                            }
                                                            .mm-checkoutSection2 h2 .mm-data {
                                                                display: none;
                                                            }
                                                            .module-feature  {
                                                                border-radius: 7px!important;
                                                            }
                                                            .mm-prices {
                                                                width: 200px;
                                                                float: none;
                                                                display: block;
                                                                padding: 0;
                                                                font-weight: bold;
                                                                text-align: center;
                                                            }

                                                        </style>    </div>
                                                    <!-- /module plain text -->

                                                </div>
                                            </div>
                                            <!-- /.tb-column -->


                                        </div>
                                        <!-- /row_inner -->
                                    </div>
                                    <!-- /module_row -->

                                    <!-- module_row -->
                                    <div  class="themify_builder_row module_row clearfix module_row_1 themify_builder_452_row module_row_452-1">
                                        <div class="row_inner " >


                                            <div  class="tb-column col-full first module_column tb_452_column module_column_0 module_column_452-1-0" >
                                                <div class="tb-column-inner">


                                                    <!-- module image -->
                                                    <div  id="image-452-1-0-0" class="module module-image image-452-1-0-0  image-left  ">


                                                        <div class="image-wrap">
                                                            <a href="<?php echo get_site_url(); ?>">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.jpg" width="350" class=" wp-post-image wp-image-1613" alt="Nicky Arthur Fitness" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.jpg 350w, <?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.jpg 300w, <?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.jpg 768w, <?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.jpg 1024w" sizes="(max-width: 350px) 100vw, 350px" style="height: 110px;"/>

                                                            </a>
                                                        </div>
                                                        <!-- /image-wrap -->


                                                    </div>
                                                    <!-- /module image -->

                                                </div>
                                            </div>
                                            <!-- /.tb-column -->


                                        </div>
                                        <!-- /row_inner -->
                                    </div>
                                    <!-- /module_row -->

                                    <!-- module_row -->
                                    <div  class="themify_builder_row module_row clearfix repeat module_row_2 themify_builder_452_row module_row_452-2">
                                        <div class="row_inner " >


                                            <div  class="tb-column col-full first module_column tb_452_column module_column_0 module_column_452-2-0" >
                                                <div class="tb-column-inner">
                                                    <div class="themify_builder_sub_row module_subrow clearfix sub_row_2-0-0">
                                                        <div class="subrow_inner " >
                                                            <div  class="col3-2 sub_column module_column first sub_column_post_452 sub_column_2-0-0-0">
                                                                <div class="tb-column-inner">


                                                                    <!-- module text -->
                                                                    <div  id="text-452-sub_row_2-0-0-0-0" class="module module-text text-452-sub_row_2-0-0-0-0  repeat ">

                                                                        <p style="background-color: #0091e2; color: #fff; padding: 7px; width: 90%!important; margin: 0;"><span style="color: #ffffff;"><strong>Monthly Membership: $27 USD (Under $1/day)</strong></span></p></div>
                                                                    <!-- /module text -->


                                                                    <!-- module text -->
                                                                    <div  id="text-452-sub_row_2-0-0-0-1" class="module module-text text-452-sub_row_2-0-0-0-1  repeat ">

                                                                        <p><strong>YOUR ALL ACCESS MONTHLY PASS INCLUDES:</strong></p>
                                                                        <ul>
                                                                            <li style="text-align: left;">
                                                                                <p><strong>5 new muscle building workouts added on the 1<sup>st</sup> of every month (video &#038; PDF). </strong></p>
                                                                            </li>
                                                                            <li>
                                                                                <p><strong>Instant access to the ever growing workout archive</strong></p>
                                                                            </li>
                                                                            <li>
                                                                                <p><strong>Learn how to structure your own Workout Program &#038; Meal Plan to get fast results.</strong></p>
                                                                            </li>
                                                                            <li>
                                                                                <p><strong>Instant access to the Bonus Video &#8211; &#8220;Supplement Advice.&#8221;</strong></p>
                                                                            </li>
                                                                            <li>
                                                                                <p><strong>Unlimited access to our private Facebook group</strong></p>
                                                                            </li>
                                                                        </ul>
                                                                        <p style="text-align: left;">There’s no risk. Auto billed monthly. Cancel anytime.</p></div>
                                                                    <!-- /module text -->


                                                                    <!-- module divider -->
                                                                    <div  id="divider-452-sub_row_2-0-0-0-2" class="module module-divider divider-452-sub_row_2-0-0-0-2 solid    " style="border-width: 1px;border-color: #000000;">
                                                                    </div>
                                                                    <!-- /module divider -->



                                                                    <!-- module text -->
                                                                    <div  id="text-452-sub_row_2-0-0-0-3" class="module module-text text-452-sub_row_2-0-0-0-3  repeat ">

                                                                        <h5 style="text-align: center;">Testimonials</h5></div>
                                                                    <!-- /module text -->

                                                                    <!-- module feature -->
                                                                    <div  id="feature-452-sub_row_2-0-0-0-4" class="module module-feature feature-452-sub_row_2-0-0-0-4 no-chart layout-icon-left size-large feature ">

                                                                        <style type="text/css"></style>

                                                                        <div class="module-feature-image">
                                                                            <div class="module-feature-chart-html5"
                                                                                 >
                                                                                <div class="chart-html5-circle">
                                                                                    <div class="chart-html5-inset">
                                                                                        <img src="https://www.renshawspt.com/wp-content/uploads/2017/09/FullSizeRender-1024x1007.jpg" alt="Ben B. " />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="module-feature-content">
                                                                            <h3 class="module-feature-title">SONIA WA. </h3>            
                                                                            <p>The results have been amazing. I have lost 8.1 kg in weight in the first two weeks.
                                                                                My initial measurements until day 5 but since then have lost an average 1-2 cm off all areas except the waist, which is now 9cm, less.
                                                                                It is nice to be able to get one on one coaching. It helps keep me inspired.
                                                                                Nicky, when it comes to being a coach, you are awesome.</p>
                                                                            <strong> Cheers, Sonia WA </strong>
                                                                                <br/><br/>
                                                                            <p>
                                                                                Sonia Before and After weight loss 33kg in 20 weeks.  Sonia first lost 21kg on the 10 week Bikini Mama  online program and then completed round 2  and lost a further 12kg. 3 years later Sonia has maintained her weight loss journey. 

                                                                            </p>        
                                                                        </div>
                                                                    </div>
                                                                    <!-- /module feature -->

                                                                    <!-- module feature -->
                                                                    <div  id="feature-452-sub_row_2-0-0-0-5" class="module module-feature feature-452-sub_row_2-0-0-0-5 no-chart layout-icon-right size-large feature ">

                                                                        <style type="text/css"></style>

                                                                        <div class="module-feature-image">


                                                                            <div class="module-feature-chart-html5"
                                                                                 >
                                                                                <div class="chart-html5-circle">
                                                                                    <div class="chart-html5-inset">
                                                                                        <img src="https://www.renshawspt.com/wp-content/uploads/2017/05/chad.jpg" alt="Chad S." />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="module-feature-content">
                                                                            <h3 class="module-feature-title">Chad S.</h3>            
                                                                            <p>It has been 3 months since I started with Bryan and the results have been great. I will be working with Bryan for years to come. Also, I would like to end by saying, anyone that&#8217;s looking to take back control of your body and health, I highly recommend this. </p>        
                                                                        </div>

                                                                    </div>
                                                                    <!-- /module feature -->


                                                                    <!-- module feature -->
                                                                    <div  id="feature-452-sub_row_2-0-0-0-6" class="module module-feature feature-452-sub_row_2-0-0-0-6 no-chart layout-icon-left size-large feature ">

                                                                        <style type="text/css"></style>

                                                                        <div class="module-feature-image">
                                                                            <div class="module-feature-chart-html5"
                                                                                 >
                                                                                <div class="chart-html5-circle">
                                                                                    <div class="chart-html5-inset">
                                                                                        <img src="https://www.renshawspt.com/wp-content/uploads/2018/06/IMG_0145-1024x1024.jpg" alt="Paul D. " />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="module-feature-content">
                                                                            <h3 class="module-feature-title">Paul D. </h3>            
                                                                            <p>I thought I&#8217;d put my 6-month transformation pic. This is most definitely the best thing I&#8217;ve ever done, and I would have never made this progress on my own. I&#8217;m in the best shape I&#8217;ve ever been in and this is just the start. </p>        
                                                                        </div>
                                                                    </div>
                                                                    <!-- /module feature -->

                                                                </div>
                                                            </div>
                                                            <div  class="col3-1 sub_column module_column last sub_column_post_452 sub_column_2-0-0-1">
                                                                <div class="tb-column-inner">

                                                                    <!-- module text -->
                                                                    <div  id="text-452-sub_row_2-0-0-1-0" class="module module-text text-452-sub_row_2-0-0-1-0 mobile-hide repeat ">

                                                                        <?php echo $content; ?>

                                                                    </div>
                                                                    <!-- /module text -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /themify_builder_sub_row -->
                                                    <div class="themify_builder_sub_row module_subrow clearfix sub_row_2-0-1">
                                                        <div class="subrow_inner " >
                                                            <div  class="col4-2 sub_column module_column first sub_column_post_452 sub_column_2-0-1-0">
                                                            </div>
                                                            <div  class="col4-2 sub_column module_column last sub_column_post_452 sub_column_2-0-1-1">
                                                            </div>
                                                        </div>
                                                    </div><!-- /themify_builder_sub_row -->


                                                    <!-- module text -->
                                                    <div  id="text-452-2-0-2" class="module module-text text-452-2-0-2  repeat ">

                                                        <h6 style="text-align: center;"><strong><img class="size-full wp-image-557 alignleft" src="https://www.renshawspt.com/wp-content/uploads/2017/05/sat-guaranteed-150x150.png" alt="" width="150" height="150" /></strong></h6>
                                                        <h6 style="text-align: center;">Satisfaction Guaranteed</h6>
                                                        <p style="text-align: left;">We are 100% committed to your success. If you don’t believe Nicky Arthur Fitness Training is worth your small investment of $27 a month, you can cancel anytime and never be re-billed. 
                                                            Plus you can simply login, cancel your account and never have to cancel directly with us. There’s zero risk.
                                                        </p>
                                                    </div>
                                                    <!-- /module text -->

                                                    <!-- module divider -->
                                                    <div  id="divider-452-2-0-3" class="module module-divider divider-452-2-0-3 solid    " style="border-width: 1px;border-color: #ffffff;">
                                                    </div>
                                                    <!-- /module divider -->

                                                    <!-- module accordion -->
                                                    <div  id="accordion-452-2-0-4" class="module module-accordion accordion-452-2-0-4  " data-behavior="toggle">

                                                        <h3 class="module-title">FAQs</h3>
                                                        <ul class="ui module-accordion separate rounded ">
                                                            <li class="builder-accordion-active">
                                                                <div class="accordion-title">
                                                                    <a href="#">
                                                                        <i class="accordion-icon fa fa-angle-double-right"></i>                            
                                                                        <i class="accordion-active-icon fa fa-angle-double-down"></i>                            
                                                                        What Is Nicky Arthur’s Fitness Training?                        
                                                                    </a>
                                                                </div>
                                                                <div class="accordion-content clearfix ">
                                                                    <p style="text-align: left;">The training teaches you and shows you the healthy,  simplest and most effective way to build muscle through safe and up to date workouts.</p>                    
                                                                </div>
                                                            </li>
                                                            <li >
                                                                <div class="accordion-title">
                                                                    <a href="#">
                                                                        <i class="accordion-icon fa fa-angle-double-right"></i>                            
                                                                        <i class="accordion-active-icon fa fa-angle-double-down"></i>                            
                                                                        How Often Is It Updated?                        
                                                                    </a>
                                                                </div>
                                                                <div class="accordion-content clearfix  default-closed">
                                                                    <p style="text-align: left;">6 new fitness  muscle building workout videos will be added on the 1st of every month includes Core and Stretching.</p>                    
                                                                </div>
                                                            </li>
                                                            <li >
                                                                <div class="accordion-title">
                                                                    <a href="#">
                                                                        <i class="accordion-icon fa fa-angle-double-right"></i>                            
                                                                        <i class="accordion-active-icon fa fa-angle-double-down"></i>                            
                                                                        I’m New To Working Out. Is This Right For Me?                        
                                                                    </a>
                                                                </div>
                                                                <div class="accordion-content clearfix  default-closed">
                                                                    <p style="text-align: left;">
                                                                        Yes. We have focused on a “Start Here” section which takes you through the basics. You learn how to structure your workouts and your own eating plan to suit your body and lifestyle.
                                                                    </p>                    </div>
                                                            </li>
                                                            <li >
                                                                <div class="accordion-title">
                                                                    <a href="#">
                                                                        <i class="accordion-icon fa fa-angle-double-right"></i>                            
                                                                        <i class="accordion-active-icon fa fa-angle-double-down"></i>                            
                                                                        Will I Get Overwhelmed?                        
                                                                    </a>
                                                                </div>
                                                                <div class="accordion-content clearfix  default-closed">
                                                                    <p style="text-align: left;">
                                                                        Not at all. We make sure we don’t give you too much at one time. We find that 6 workouts are what most people need for the month. It train each body part with a focus on core and simple and effective stretching. .
                                                                    </p>                    
                                                                </div>
                                                            </li>
                                                            <li >
                                                                <div class="accordion-title">
                                                                    <a href="#">
                                                                        <i class="accordion-icon fa fa-angle-double-right"></i>                            
                                                                        <i class="accordion-active-icon fa fa-angle-double-down"></i>                            
                                                                        Do I Have To Sign A Long-Term Contract? How Do I Cancel?                        
                                                                    </a>
                                                                </div>
                                                                <div class="accordion-content clearfix  default-closed">
                                                                    <p style="text-align: left;">
                                                                        No. You can easily cancel by logging into your account and click the “cancel” button. There’s no long-term contract.</p>                    
                                                                </div>
                                                            </li>
                                                            <li >
                                                                <div class="accordion-title">
                                                                    <a href="#">
                                                                        <i class="accordion-icon fa fa-angle-double-right"></i>                            
                                                                        <i class="accordion-active-icon fa fa-angle-double-down"></i>                           
                                                                        Why Is It So Inexpensive?                        
                                                                    </a>
                                                                </div>
                                                                <div class="accordion-content clearfix  default-closed">
                                                                    <p style="text-align: left;">
                                                                        We wanted to create a true no brainer resource for those who are passionate about getting fit and healthy for the over 30 plus, educating the most efficient way to losing fat and building lean muscle to change peoples body composition as they age and help others age without pain and excess body fat. Doing it this way, we can reach out and help more people, help more people.</p>                    
                                                                </div>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                    <!-- /module accordion -->

                                                </div>
                                            </div>
                                            <!-- /.tb-column -->


                                        </div>
                                        <!-- /row_inner -->
                                    </div>
                                    <!-- /module_row -->
                                </div>

                                <!-- comments -->
                                <!-- /comments -->

                            </div>
                            <!-- /.post-content -->

                        </div><!-- /.type-page -->

                    </div>
                    <!-- /content -->

                </div>
                <!-- /layout-container -->
            </div>
            <!-- /body -->
            <?php get_footer(); ?>
