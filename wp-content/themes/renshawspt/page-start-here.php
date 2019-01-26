<?php
$my_postid = get_the_ID(); //This is page id or post id
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);

$site_url = get_site_url();
?>

<!DOCTYPE html>
<html lang="en-US"><head>
        <meta charset="UTF-8">
        <!-- wp_head -->
        <title>Start Here – Nicky Arthur Fitness</title>
        <link rel="dns-prefetch" href="//ajax.googleapis.com">
        <link rel="dns-prefetch" href="//maxcdn.bootstrapcdn.com">
        <link rel="dns-prefetch" href="//fonts.googleapis.com">
        <link rel="dns-prefetch" href="//s.w.org">
        <link rel="alternate" type="application/rss+xml" title="Nicky Arthur Fitness » Feed" href="<?php echo $site_url; ?>/feed/">
        <link rel="alternate" type="application/rss+xml" title="Nicky Arthur Fitness » Comments Feed" href="<?php echo $site_url; ?>/comments/feed/">

        <style type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <link rel="stylesheet" id="themify-common-css" href="<?php echo $site_url; ?>/wp-content/themes/themify-ultra/themify/css/themify.common.min.css?ver=5.0.3" type="text/css" media="all">
        <meta name="themify-framework-css" content="themify-framework-css" id="themify-framework-css">
        <link id="builder-styles" rel="stylesheet" href="<?php echo $site_url; ?>/wp-content/themes/themify-ultra/themify/themify-builder/css/themify-builder-style.min.css?ver=4.2.2" type="text/css"><meta name="builder-styles-css" content="builder-styles-css" id="builder-styles-css">
        <link rel="stylesheet" id="wp-block-library-css" href="<?php echo $site_url; ?>/wp-includes/css/dist/block-library/style.min.css?ver=5.0.3" type="text/css" media="all">
        <link rel="stylesheet" id="cookie-law-info-css" href="<?php echo $site_url; ?>/wp-content/plugins/cookie-law-info/public/css/cookie-law-info-public.css?ver=1.7.3" type="text/css" media="all">
        <link rel="stylesheet" id="cookie-law-info-gdpr-css" href="<?php echo $site_url; ?>/wp-content/plugins/cookie-law-info/public/css/cookie-law-info-gdpr.css?ver=1.7.3" type="text/css" media="all">
        <link rel="stylesheet" id="membermouse-jquery-css-css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css?ver=1.11.4" type="text/css" media="all">
        <link rel="stylesheet" id="membermouse-main-css" href="<?php echo $site_url; ?>/wp-content/plugins/membermouse/resources/css/common/mm-main.css?ver=2.2.8" type="text/css" media="all">
        <link rel="stylesheet" id="membermouse-buttons-css" href="<?php echo $site_url; ?>/wp-content/plugins/membermouse/resources/css/common/mm-buttons.css?ver=2.2.8" type="text/css" media="all">
        <link rel="stylesheet" id="membermouse-font-awesome-css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?ver=5.0.3" type="text/css" media="all">
        <link rel="stylesheet" id="theme-style-css" href="<?php echo $site_url; ?>/wp-content/themes/themify-ultra/style.min.css?ver=2.1.8" type="text/css" media="all">
        <link rel="stylesheet" id="themify-media-queries-css" href="<?php echo $site_url; ?>/wp-content/themes/themify-ultra/media-queries.min.css?ver=2.1.8" type="text/css" media="all">
        <link rel="stylesheet" id="themify-skin-css" href="<?php echo $site_url; ?>/wp-content/themes/themify-ultra/skins/lawyer/style.min.css?ver=4.2.2" type="text/css" media="all">
        <link rel="stylesheet" id="ultra-header-css" href="<?php echo $site_url; ?>/wp-content/themes/themify-ultra/styles/header-top-widgets.min.css?ver=5.0.3" type="text/css" media="all">
        <link rel="stylesheet" id="ultra-color-css" href="<?php echo $site_url; ?>/wp-content/themes/themify-ultra/styles/theme-color-black.min.css?ver=5.0.3" type="text/css" media="all">
        <link rel="stylesheet" id="themify-builder-628-generated-css" href="<?php echo $site_url; ?>/wp-content/uploads/themify-css/themify-builder-628-generated.css?ver=1525751177" type="text/css" media="all">
        <link rel="stylesheet" id="themify-customize-css" href="<?php echo $site_url; ?>/wp-content/uploads/themify-customizer.css?ver=18.08.18.18.10.57" type="text/css" media="all">
        <link rel="stylesheet" id="themify-google-fonts-css" href="https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C400i%2C600%2C700%7CCormorant+Garamond%3A400%2C600%2C700&amp;subset=latin&amp;ver=5.0.3" type="text/css" media="all">
        <script type="text/javascript" src="<?php echo $site_url; ?>/wp-includes/js/jquery/jquery.js?ver=1.12.4"></script>
        <script type="text/javascript" src="<?php echo $site_url; ?>/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1"></script>
        <script type="text/javascript" id="-950360219" src="<?php echo $site_url; ?>/wp-content/themes/themify-ultra/themify/themify-builder/js/themify.builder.script.min.js?ver=4.2.2" async=""></script>
        <script type="text/javascript">
            window._wpemojiSettings = {"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/", "svgExt": ".svg", "source": {"concatemoji": "<?php echo $site_url; ?>/wp-includes\/js\/wp-emoji-release.min.js?ver=5.0.3"}};
            !function (a, b, c) {
                function d(a, b) {
                    var c = String.fromCharCode;
                    l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, a), 0, 0);
                    var d = k.toDataURL();
                    l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, b), 0, 0);
                    var e = k.toDataURL();
                    return d === e
                }
                function e(a) {
                    var b;
                    if (!l || !l.fillText)
                        return!1;
                    switch (l.textBaseline = "top", l.font = "600 32px Arial", a) {
                        case"flag":
                            return!(b = d([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819])) && (b = d([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]), !b);
                        case"emoji":
                            return b = d([55358, 56760, 9792, 65039], [55358, 56760, 8203, 9792, 65039]), !b
                        }
                    return!1
                }
                function f(a) {
                    var c = b.createElement("script");
                    c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
                }
                var g, h, i, j, k = b.createElement("canvas"), l = k.getContext && k.getContext("2d");
                for (j = Array("flag", "emoji"), c.supports = {everything:!0, everythingExceptFlag:!0}, i = 0; i < j.length; i++)
                    c.supports[j[i]] = e(j[i]), c.supports.everything = c.supports.everything && c.supports[j[i]], "flag" !== j[i] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[j[i]]);
                c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function () {
                    c.DOMReady = !0
                }, c.supports.everything || (h = function () {
                    c.readyCallback()
                }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", h, !1), a.addEventListener("load", h, !1)) : (a.attachEvent("onload", h), b.attachEvent("onreadystatechange", function () {
                    "complete" === b.readyState && c.readyCallback()
                })), g = c.source || {}, g.concatemoji ? f(g.concatemoji) : g.wpemoji && g.twemoji && (f(g.twemoji), f(g.wpemoji)))
            }(window, document, window._wpemojiSettings);
        </script><script src="<?php echo $site_url; ?>/wp-includes/js/wp-emoji-release.min.js?ver=5.0.3" type="text/javascript" defer=""></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var Cli_Data = {"nn_cookie_ids": [], "cookielist": []};
            var log_object = {"ajax_url": "<?php echo $site_url; ?>/wp-admin\/admin-ajax.php"};
            /* ]]> */
        </script>
        <script type="text/javascript" src="<?php echo $site_url; ?>/wp-content/plugins/cookie-law-info/public/js/cookie-law-info-public.js?ver=1.7.3"></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var MemberMouseGlobal = {"jsIsAdmin": "", "adminUrl": "<?php echo $site_url; ?>/wp-admin\/", "globalurl": "<?php echo $site_url; ?>/wp-content\/plugins\/membermouse", "checkoutProcessingPaidMessage": "Please wait while we process your order...", "checkoutProcessingFreeMessage": "Please wait while we create your account...", "checkoutProcessingMessageCSS": "mm-checkout-processing-message", "currencyInfo": {"currency": "USD", "postfixIso": false, "name": "United States Dollar", "int_curr_symbol": "&#85;&#83;&#68;&#32;", "currency_symbol": "$", "mon_decimal_point": ".", "mon_thousands_sep": ",", "mon_grouping": "3;3", "positive_sign": "", "negative_sign": "", "int_frac_digits": "2", "frac_digits": "2", "p_cs_precedes": "1", "p_sep_by_space": "0", "n_cs_precedes": "1", "n_sep_by_space": "0", "p_sign_posn": "1", "n_sign_posn": "1"}};
            /* ]]> */
        </script>
        <script type="text/javascript" src="<?php echo $site_url; ?>/wp-content/plugins/membermouse/resources/js/global.js?ver=2.2.8"></script>
        <script type="text/javascript" src="<?php echo $site_url; ?>/wp-content/plugins/membermouse/resources/js/common/mm-common-core.js?ver=2.2.8"></script>
        <script type="text/javascript" src="<?php echo $site_url; ?>/wp-content/plugins/membermouse/resources/js/user/mm-preview.js?ver=2.2.8"></script>
        <link rel="https://api.w.org/" href="<?php echo $site_url; ?>/wp-json/">
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo $site_url; ?>/xmlrpc.php?rsd">
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo $site_url; ?>/wp-includes/wlwmanifest.xml"> 
        <meta name="generator" content="WordPress 5.0.3">
        <link rel="canonical" href="<?php echo $site_url; ?>/start-here/">
        <link rel="shortlink" href="<?php echo $site_url; ?>/?p=628">
        <link href="<?php echo $site_url; ?>/wp-content/uploads/2018/08/Renshaws-Personal-Training-Icon-1.png" rel="shortcut icon"> 

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
        <script type="text/javascript">
            var cli_flush_cache = 2;
        </script>

    </head>

    <body class="page-template-default page page-id-628 logged-in themify-fw-4-2-2 themify-ultra-2-1-8 skin-lawyer webkit not-ie default_width sidebar-none no-home no-touch builder-parallax-scrolling-active ready-view header-top-widgets fixed-header footer-block theme-color-black social-widget-off rss-off search-off header-widgets-off footer-menu-navigation-off tile_enable filter-hover-none filter-featured-only masonry-enabled sidemenu-active has-builder fixed-header-on page-loaded themify_lightbox_loaded" style="">

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
        <div id="pagewrap" class="hfeed site" style="padding-top: 108px;">

            <div id="headerwrap" class="fixed-header" style="margin-top: 0px;">
                <div class="header-icons">
                    <a id="menu-icon" href="#mobile-menu"><span class="menu-icon-inner"></span></a>
                </div>

                <header id="header" class="pagewidth clearfix header-on-scroll" itemscope="itemscope" itemtype="https://schema.org/WPHeader">


                    <div class="header-bar">
                        <div id="site-logo"><a href="/" title="Nicky Arthur Fitness"><img src="<?php echo $site_url; ?>/wp-content/uploads/2018/08/Renshaws-Personal-Training-White.png" alt="Nicky Arthur Fitness" title="Nicky Arthur Fitness"></a></div>					
                        <div id="site-description" class="site-description"><span>Simple and Effective Workouts</span></div>									</div>
                    <!-- /.header-bar -->

                    <div id="mobile-menu" class="sidemenu sidemenu-off">

                        <div class="navbar-wrapper clearfix">



                            <nav id="main-nav-wrap" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">
                                <ul id="main-nav" class="main-nav menu-name-member-navigation"><li id="menu-item-319" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo $site_url; ?>/member-dashboard/">Dashboard</a> </li>
                                    <li id="menu-item-630" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-628 current_page_item"><a href="<?php echo $site_url; ?>/start-here/">Start Here</a> </li>
                                    <li id="menu-item-648" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo $site_url; ?>/new-workouts/">New Workouts</a> </li>
                                    <li id="menu-item-647" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo $site_url; ?>/workout-archive/">Archive</a> </li>
                                    <li id="menu-item-1795" class="menu-item menu-item-type-custom menu-item-object-custom"><a target="_blank" href="<?php echo $site_url; ?>/vip-program">VIP Program</a> </li>
                                    <li id="menu-item-649" class="menu-item menu-item-type-custom menu-item-object-custom"><a target="_blank" href="https://www.facebook.com/groups/1795496737376961/">Group</a> </li>
                                    <li id="menu-item-631" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo $site_url; ?>/myaccount/">Help Desk</a> </li>
                                    <li id="menu-item-812" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo $site_url; ?>/wp-login.php?action=logout&amp;redirect_to=%2Flogout%2F&amp;_wpnonce=3b2e83ba70">Log Out</a> </li>
                                </ul>									<!-- /#main-nav -->


                            </nav>
                            <!-- /#main-nav-wrap -->

                        </div>


                        <a id="menu-icon-close" href="#"></a>
                    </div>
                    <!-- /#mobile-menu -->




                </header>
                <!-- /#header -->


            </div>
            <!-- /#headerwrap -->

            <div id="body" class="clearfix">



                <!-- layout-container -->
                <div id="layout" class="pagewidth clearfix">

                    <!-- content -->
                    <div id="content" class="clearfix">


                        <div id="page-628" class="type-page">

                            <!-- page-title -->
                            <!-- /page-title -->

                            <div class="page-content entry-content">


                                <script type="text/javascript">
                                    if (!document.getElementById("builder-styles") && document.getElementById("builder-styles-css"))
                                        document.getElementById("builder-styles-css").insertAdjacentHTML("beforebegin", "<link id='builder-styles' rel='stylesheet' href='<?php echo $site_url; ?>/wp-content/themes/themify-ultra/themify/themify-builder/css/themify-builder-style.min.css?ver=4.2.2' type='text/css' />");
                                </script><div id="themify_builder_content-628" data-postid="628" class="themify_builder_content themify_builder_content-628 themify_builder">


                                    <!-- module_row -->
                                    <div class="themify_builder_row module_row clearfix module_row_0 themify_builder_628_row module_row_628-0">
                                        <div class="row_inner col_align_top">
                                            <div class="module_column tb-column col-full tb_628_column module_column_0 module_column_628-0-0 last">
                                                <div class="tb-column-inner">


                                                    <!-- module text -->
                                                    <div id="text-628-0-0-0" class="module module-text text-628-0-0-0    ">
                                                        <!--insert-->

                                                        <h3 style="text-align: center;">This is a great place to get started to help you learn the basics of muscle building.</h3>        </div>
                                                    <!-- /module text -->



                                                    <!-- module text -->
                                                    <div id="text-628-0-0-1" class="module module-text text-628-0-0-1    ">
                                                        <!--insert-->

                                                        <h4 style="text-align: center;">How to Structure a Meal Plan</h4>        </div>
                                                    <!-- /module text -->




                                                    <!-- module video -->
                                                    <div id="video-628-0-0-2" class="module module-video video-628-0-0-2 video-top   ">
                                                        <!--insert-->

                                                        <div class="video-wrap" style="max-width:90%;">
                                                            <iframe src="https://player.vimeo.com/video/220877837?app_id=122963" width="1165" height="655" allow="autoplay; fullscreen" allowfullscreen=""></iframe>        </div>
                                                        <!-- /video-wrap -->

                                                    </div>
                                                    <!-- /module video -->



                                                    <!-- module text -->
                                                    <div id="text-628-0-0-3" class="module module-text text-628-0-0-3  repeat  ">
                                                        <!--insert-->

                                                        <h3 style="text-align: center;"><em>Here are a few examples of meal plans.&nbsp;</em></h3><h3 style="text-align: center;"><em>This is for a reference, as your numbers might be different.&nbsp;</em></h3><p style="text-align: center;"><strong><a href="<?php echo $site_url; ?>/wp-content/uploads/2017/06/Competition-Prep.pdf">1.) Competition Prep Meal Plan – This is the plan&nbsp;</a></strong></p><p style="text-align: center;"><strong><a href="<?php echo $site_url; ?>/wp-content/uploads/2017/06/Competition-Prep.pdf">I used when I competed in bodybuilding. (my carbs were lower than normal for this diet)</a></strong></p><p style="text-align: center;"><a href="<?php echo $site_url; ?>/wp-content/uploads/2018/05/2085-calorie-meal-plan.pdf"><strong>2.) Example Meal Plan – 2,085 calorie (estimate)</strong></a></p><p style="text-align: center;"><strong><a href="<?php echo $site_url; ?>/wp-content/uploads/2017/06/2437-calorie-meal-plan.pdf">3.) Example Meal Plan – 2450 calorie (estimate)</a></strong></p><p style="text-align: center;"><strong><a href="<?php echo $site_url; ?>/wp-content/uploads/2017/06/2847-calorie-meal-plan.pdf">4.) Example Meal Plan – 2850 calorie (estimate)</a></strong></p><p style="text-align: center;"><strong><a href="<?php echo $site_url; ?>/wp-content/uploads/2017/06/3234-Calorie-meal-plan.pdf">5.) Example Meal Plan – 3200 calorie (estimate)</a></strong></p><h3 style="text-align: center;"><a href="<?php echo $site_url; ?>/wp-content/uploads/2017/06/Food-substitution-list.pdf">&gt;&gt; Food Substitution List for Meal Plan &lt;&lt;</a></h3>        </div>
                                                    <!-- /module text -->



                                                    <!-- module divider -->
                                                    <div id="divider-628-0-0-4" class="module module-divider divider-628-0-0-4 solid    " style="border-width: 2px;border-color: #000000;">
                                                        <!--insert-->
                                                    </div>
                                                    <!-- /module divider -->



                                                    <!-- module text -->
                                                    <div id="text-628-0-0-5" class="module module-text text-628-0-0-5    ">
                                                        <!--insert-->

                                                        <h4 style="text-align: center;">How to Structure a&nbsp;Workout Program</h4>        </div>
                                                    <!-- /module text -->




                                                    <!-- module video -->
                                                    <div id="video-628-0-0-6" class="module module-video video-628-0-0-6 video-top   ">
                                                        <!--insert-->

                                                        <div class="video-wrap" style="max-width:90%;">
                                                            <iframe src="https://player.vimeo.com/video/220750234?app_id=122963" width="1165" height="655" allow="autoplay; fullscreen" allowfullscreen=""></iframe>        </div>
                                                        <!-- /video-wrap -->

                                                    </div>
                                                    <!-- /module video -->



                                                    <!-- module divider -->
                                                    <div id="divider-628-0-0-7" class="module module-divider divider-628-0-0-7 solid    " style="border-width: 2px;border-color: #000000;">
                                                        <!--insert-->
                                                    </div>
                                                    <!-- /module divider -->



                                                    <!-- module text -->
                                                    <div id="text-628-0-0-8" class="module module-text text-628-0-0-8    ">
                                                        <!--insert-->

                                                        <h4 style="text-align: center;">“Bonus Video” – Supplement Advice</h4>        </div>
                                                    <!-- /module text -->




                                                    <!-- module video -->
                                                    <div id="video-628-0-0-9" class="module module-video video-628-0-0-9 video-top   ">
                                                        <!--insert-->

                                                        <div class="video-wrap" style="max-width:90%;">
                                                            <iframe src="https://player.vimeo.com/video/230678397?app_id=122963" width="1165" height="655" allow="autoplay; fullscreen" allowfullscreen=""></iframe>        </div>
                                                        <!-- /video-wrap -->

                                                    </div>
                                                    <!-- /module video -->



                                                    <!-- module text -->
                                                    <div id="text-628-0-0-10" class="module module-text text-628-0-0-10    ">
                                                        <!--insert-->

                                                        <h3 style="text-align: center;">Now that you have the basics down, let’s get to the workouts!</h3>        </div>
                                                    <!-- /module text -->



                                                    <!-- module buttons -->
                                                    <div id="buttons-628-0-0-11" class="module module-buttons buttons-628-0-0-11  ">
                                                        <!--insert-->

                                                        <div class="module-buttons large solid squared">
                                                            <div class="module-buttons-item  buttons-horizontal">
                                                                <a href="/new-workouts" class="ui builder_button"><i class="fa fa-fire"></i> <span>NEW WORKOUTS</span></a>                </div>
                                                        </div>
                                                    </div>
                                                    <!-- /module buttons -->

                                                </div>
                                            </div>
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

            </div><!-- /body -->

            <div id="footerwrap">
                <footer id="footer" class="pagewidth clearfix" itemscope="itemscope" itemtype="https://schema.org/WPFooter">
                    <div class="back-top clearfix "><div class="arrow-up"><a href="#header"></a></div></div>
                    <div class="main-col first clearfix">
                        <div class="footer-left-wrap first">

                            <div class="social-widget">
                                <div id="themify-social-links-1004" class="widget themify-social-links"><ul class="social-links horizontal">
                                        <li class="social-link-item facebook font-icon icon-medium">
                                            <a href="https://www.facebook.com/renshawspt/" target="_blank"><i class="fa fa-facebook"></i>  </a>
                                        </li>
                                        <!-- /themify-link-item -->
                                        <li class="social-link-item instagram font-icon icon-medium">
                                            <a href="https://www.instagram.com/renshawspt/" target="_blank"><i class="fa fa-instagram"></i>  </a>
                                        </li>
                                        <!-- /themify-link-item -->
                                        <li class="social-link-item youtube font-icon icon-medium">
                                            <a href="https://www.youtube.com/channel/UCsV_ZB9j7IzNhyqvMsO3BUg/videos" target="_blank"><i class="fa fa-youtube"></i>  </a>
                                        </li>
                                        <!-- /themify-link-item --></ul></div>									</div>
                            <!-- /.social-widget -->
                        </div>

                        <div class="footer-right-wrap">

                        </div>
                    </div>

                    <div class="section-col clearfix">
                        <div class="footer-widgets-wrap">

                            <div class="footer-widgets clearfix">
                                <div class=" first">
                                    <div id="text-1010" class="widget widget_text">			<div class="textwidget"><ul class="foot-nav">
                                                <li><a href="/">HOME</a></li>
                                                <li><a href="/login/">MEMBER LOGIN</a></li>
                                                <li><a href="/terms-conditions/">TERMS &amp; CONDITIONS</a></li>
                                                <li><a href="/privacy-policy">PRIVACY POLICY</a></li>
                                            </ul>
                                        </div>
                                    </div>				</div>
                            </div>
                            <!-- /.footer-widgets -->

                            <!-- /footer-widgets -->
                        </div>
                    </div>
                    <div class="footer-text clearfix">
                        <div class="footer-text-inner">
                            <div class="one">Copyright © 2019 Renshaw’s Personal Training. All Rights Reserved.</div>									</div>
                    </div>
                    <!-- /.footer-text -->

                </footer><!-- /#footer -->


            </div><!-- /#footerwrap -->

        </div><!-- /#pagewrap -->


        <!-- SCHEMA BEGIN --><script type="application/ld+json">[{"@context":"https:\/\/schema.org","@type":"WebPage","mainEntityOfPage":{"@type":"WebPage","@id":"<?php echo $site_url; ?>/start-here\/"},"headline":"Start Here","datePublished":"2017-06-07T09:37:16+00:00","dateModified":"2017-06-07T09:37:16+00:00","description":"","commentCount":"0"}]</script><!-- /SCHEMA END -->		<!-- wp_footer -->
        <div id="cookie-law-info-bar" style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); font-family: Verdana, Geneva; bottom: 0px; position: fixed; display: none;"><span>We use cookies to ensure you have the best experience possible on our website. <a href="<?php echo $site_url; ?>/privacy-policy" id="CONSTANT_OPEN_URL" target="_blank" class="cli-plugin-main-link" style="color: rgb(0, 0, 0);">Read Our Privacy Policy Here.</a> <a href="#" data-cli_action="accept" id="cookie_action_close_header" class="medium cli-plugin-button cli-plugin-main-button cookie_action_close_header cli_action_button" style="color: rgb(255, 255, 255); background-color: rgb(30, 115, 190);">Accept</a></span></div><div class="cli-modal-backdrop cli-fade cli-settings-overlay"></div>
        <div class="cli-modal-backdrop cli-fade cli-popupbar-overlay"></div>
        <script type="text/javascript">
            /* <![CDATA[ */
            cli_cookiebar_settings = '{"animate_speed_hide":"500","animate_speed_show":"500","background":"#fff","border":"#444","border_on":false,"button_1_button_colour":"#1e73be","button_1_button_hover":"#185c98","button_1_link_colour":"#fff","button_1_as_button":true,"button_1_new_win":false,"button_2_button_colour":"#333","button_2_button_hover":"#292929","button_2_link_colour":"#000000","button_2_as_button":false,"button_3_button_colour":"#000","button_3_button_hover":"#000000","button_3_link_colour":"#fff","button_3_as_button":true,"button_3_new_win":false,"button_4_button_colour":"#000","button_4_button_hover":"#000000","button_4_link_colour":"#fff","button_4_as_button":true,"font_family":"Verdana, Geneva","header_fix":false,"notify_animate_hide":true,"notify_animate_show":false,"notify_div_id":"#cookie-law-info-bar","notify_position_horizontal":"right","notify_position_vertical":"bottom","scroll_close":false,"scroll_close_reload":false,"accept_close_reload":false,"reject_close_reload":false,"showagain_tab":false,"showagain_background":"#fff","showagain_border":"#000","showagain_div_id":"#cookie-law-info-again","showagain_x_position":"100px","text":"#000","show_once_yn":false,"show_once":"10000","logging_on":false,"as_popup":false,"popup_overlay":true,"bar_heading_text":"","cookie_bar_as":"banner","popup_showagain_position":"bottom-right","widget_position":"left"}';
            /* ]]> */
        </script><div id="mm-payment-options-dialog"></div>
        <div id="mm-payment-confirmation-dialog"></div>
        <script>
            jQuery(document).ready(function () {
                if (jQuery.isFunction("dialog")) {
                    jQuery("#mm-payment-options-dialog").dialog({autoOpen: false});
                    jQuery("#mm-payment-confirmation-dialog").dialog({autoOpen: false});
                }
            });
        </script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var themify_vars = {"version": "4.2.2", "url": "<?php echo $site_url; ?>/wp-content\/themes\/themify-ultra\/themify", "map_key": "AIzaSyAsx3CqZiWQpUkP2hER8sWl0zU-sUixznY", "includesURL": "<?php echo $site_url; ?>/wp-includes\/", "isCached": "on", "minify": {"css": {"themify-icons": 1, "themify.framework": 1, "lightbox": 1, "themify-builder-style": 1}, "js": {"backstretch.themify-version": 1, "bigvideo": 1, "themify.dropdown": 1, "themify-tiles": 1, "themify.mega-menu": 1, "themify.builder.script": 1, "themify.scroll-highlight": 1, "themify-youtube-bg": 1, "themify.parallaxit": 1, "themify.ticks": 1}}};
            var tbLocalScript = {"isAnimationActive": "1", "isParallaxActive": "1", "isParallaxScrollActive": "1", "isStickyScrollActive": "1", "animationInviewSelectors": [".module.wow", ".module_row.wow", ".builder-posts-wrap > .post.wow"], "backgroundSlider": {"autoplay": 5000}, "animationOffset": "100", "videoPoster": "<?php echo $site_url; ?>/wp-content\/themes\/themify-ultra\/themify\/themify-builder\/img\/blank.png", "backgroundVideoLoop": "yes", "builder_url": "<?php echo $site_url; ?>/wp-content\/themes\/themify-ultra\/themify\/themify-builder", "framework_url": "<?php echo $site_url; ?>/wp-content\/themes\/themify-ultra\/themify", "version": "4.2.2", "fullwidth_support": "", "fullwidth_container": "body", "loadScrollHighlight": "1", "addons": {"contact": {"selector": ".module-contact", "css": "<?php echo $site_url; ?>/wp-content\/plugins\/builder-contact\/assets\/style.min.css", "js": "<?php echo $site_url; ?>/wp-content\/plugins\/builder-contact\/assets\/scripts.min.js", "external": "var BuilderContact = {\"admin_url\":\"<?php echo $site_url; ?>/wp-admin\\\/admin-ajax.php\"};", "ver": "1.2.0"}, "countdown": {"selector": ".module-countdown", "css": "<?php echo $site_url; ?>/wp-content\/plugins\/builder-countdown\/assets\/style.min.css", "js": "<?php echo $site_url; ?>/wp-content\/plugins\/builder-countdown\/assets\/script.min.js", "ver": "1.1.4"}, "maps-pro": {"selector": ".module-maps-pro, .module-type-maps-pro", "css": "<?php echo $site_url; ?>/wp-content\/plugins\/builder-maps-pro\/assets\/style.min.css", "js": "<?php echo $site_url; ?>/wp-content\/plugins\/builder-maps-pro\/assets\/scripts.min.js", "ver": "1.2.6"}}, "breakpoints": {"tablet_landscape": [769, "1024"], "tablet": [681, "768"], "mobile": "375"}, "ticks": {"tick": 30, "ajaxurl": "<?php echo $site_url; ?>/wp-admin\/admin-ajax.php", "postID": 628}};
            var themifyScript = {"lightbox": {"lightboxSelector": ".themify_lightbox", "lightboxOn": true, "lightboxContentImages": false, "lightboxContentImagesSelector": "", "theme": "pp_default", "social_tools": false, "allow_resize": true, "show_title": false, "overlay_gallery": false, "screenWidthNoLightbox": 600, "deeplinking": false, "contentImagesAreas": "", "gallerySelector": ".gallery-icon > a", "lightboxGalleryOn": true}, "lightboxContext": "body"};
            var tbScrollHighlight = {"fixedHeaderSelector": "#headerwrap.fixed-header", "speed": "900", "navigation": "#main-nav, .module-menu .ui.nav", "scrollOffset": "-5", "scroll": "internal"};
            /* ]]> */
        </script>
        <script type="text/javascript" defer="defer" src="<?php echo $site_url; ?>/wp-content/themes/themify-ultra/themify/js/main.min.js?ver=4.2.2"></script>
        <script type="text/javascript" src="<?php echo $site_url; ?>/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4"></script>
        <script type="text/javascript" src="<?php echo $site_url; ?>/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4"></script>
        <script type="text/javascript" src="<?php echo $site_url; ?>/wp-includes/js/jquery/ui/accordion.min.js?ver=1.11.4"></script>
        <script type="text/javascript" src="<?php echo $site_url; ?>/wp-includes/js/jquery/ui/button.min.js?ver=1.11.4"></script>
        <script type="text/javascript" src="<?php echo $site_url; ?>/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.11.4"></script>
        <script type="text/javascript">
            jQuery(document).ready(function (jQuery) {
                jQuery.datepicker.setDefaults({"closeText": "Close", "currentText": "Today", "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], "nextText": "Next", "prevText": "Previous", "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"], "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"], "dateFormat": "MM d, yy", "firstDay": 1, "isRTL": false}); });
        </script>
        <script type="text/javascript" src="<?php echo $site_url; ?>/wp-includes/js/jquery/ui/mouse.min.js?ver=1.11.4"></script>
        <script type="text/javascript" src="<?php echo $site_url; ?>/wp-includes/js/jquery/ui/resizable.min.js?ver=1.11.4"></script>
        <script type="text/javascript" src="<?php echo $site_url; ?>/wp-includes/js/jquery/ui/draggable.min.js?ver=1.11.4"></script>
        <script type="text/javascript" src="<?php echo $site_url; ?>/wp-includes/js/jquery/ui/position.min.js?ver=1.11.4"></script>
        <script type="text/javascript" src="<?php echo $site_url; ?>/wp-includes/js/jquery/ui/dialog.min.js?ver=1.11.4"></script>
        <script type="text/javascript" src="<?php echo $site_url; ?>/wp-includes/js/jquery/ui/droppable.min.js?ver=1.11.4"></script>
        <script type="text/javascript" src="<?php echo $site_url; ?>/wp-includes/js/jquery/ui/progressbar.min.js?ver=1.11.4"></script>
        <script type="text/javascript" src="<?php echo $site_url; ?>/wp-includes/js/jquery/ui/selectable.min.js?ver=1.11.4"></script>
        <script type="text/javascript" src="<?php echo $site_url; ?>/wp-includes/js/jquery/ui/sortable.min.js?ver=1.11.4"></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var tve_dash_front = {"ajaxurl": "<?php echo $site_url; ?>/wp-admin\/admin-ajax.php", "force_ajax_send": "", "is_crawler": ""};
            /* ]]> */
        </script>
        <script type="text/javascript" src="<?php echo $site_url; ?>/wp-content/plugins/thrive-visual-editor/thrive-dashboard/js/dist/frontend.min.js?ver=2.0.30"></script>
        <script type="text/javascript" src="<?php echo $site_url; ?>/wp-includes/js/imagesloaded.min.js?ver=3.2.0"></script>
        <script type="text/javascript" defer="defer" src="<?php echo $site_url; ?>/wp-content/themes/themify-ultra/themify/js/themify.sidemenu.min.js?ver=2.1.8"></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var themifyScript = {"themeURI": "<?php echo $site_url; ?>/wp-content\/themes\/themify-ultra", "lightbox": {"lightboxSelector": ".themify_lightbox", "lightboxOn": true, "lightboxContentImages": false, "lightboxContentImagesSelector": "", "theme": "pp_default", "social_tools": false, "allow_resize": true, "show_title": false, "overlay_gallery": false, "screenWidthNoLightbox": 600, "deeplinking": false, "contentImagesAreas": "", "gallerySelector": ".gallery-icon > a", "lightboxGalleryOn": true}, "lightboxContext": "#pagewrap", "fixedHeader": "fixed-header", "sticky_header": "", "ajax_nonce": "56d5fd919c", "ajax_url": "<?php echo $site_url; ?>/wp-admin\/admin-ajax.php", "smallScreen": "760", "resizeRefresh": "250", "parallaxHeader": "1", "loadingImg": "<?php echo $site_url; ?>/wp-content\/themes\/themify-ultra\/images\/loading.gif", "maxPages": "0", "currentPage": "1", "pageLoaderEffect": "", "autoInfinite": "auto", "bufferPx": "50", "infiniteURL": "0", "scrollToNewOnLoad": "scroll", "resetFilterOnLoad": "reset", "fullPageScroll": "", "shop_masonry": "no", "tiledata": {"grids": {"post": {"1": ["AAAA"], "2": ["BBCC", "BBCC"], "3": ["DD.."], "4": [".EEF", ".EEF"], "5": ["DD..", "BBCC", "BBCC"], "6": [".EEF", ".EEF", "BBCC", "BBCC"], "7": [".EEF", ".EEF", "DD.."], "8": [".EEF", ".EEF", "DD..", "AAAA"], "9": [".EEF", ".EEF", "DD..", "BBCC", "BBCC"], "10": [".EEF", ".EEF", "DD..", "MMNN", "MMPP"], "11": [".EEF", ".EEF", "DD..", "MMNN", "MMPP", "AAAA"], "12": [".EEF", ".EEF", "DD..", "MMNN", "MMPP", "BBCC", "BBCC"], "13": [".EEF", ".EEF", "DD..", "MMNN", "MMPP", "LSRR", "LSRR"]}, "mobile": ["AA", ".."]}, "default_grid": "post", "small_screen_grid": "mobile", "breakpoint": 800, "padding": 5, "full_width": false, "animate_init": false, "animate_resize": true, "animate_template": false}, "responsiveBreakpoints": {"tablet_landscape": "1024", "tablet": "768", "mobile": "375"}};
            /* ]]> */
        </script>
        <script type="text/javascript" defer="defer" src="<?php echo $site_url; ?>/wp-content/themes/themify-ultra/js/themify.script.min.js?ver=2.1.8"></script>
        <script type="text/javascript" src="<?php echo $site_url; ?>/wp-includes/js/comment-reply.min.js?ver=5.0.3"></script>
        <script type="text/javascript" src="<?php echo $site_url; ?>/wp-includes/js/wp-embed.min.js?ver=5.0.3"></script>
        <script type="text/javascript">/*<![CDATA[*/if (!window.TL_Const) {
                var TL_Const = {"security": "20b8ad830f", "ajax_url": "<?php echo $site_url; ?>/wp-admin\/admin-ajax.php", "forms": [], "action_conversion": "tve_leads_ajax_conversion", "action_impression": "tve_leads_ajax_impression", "ajax_load": 1, "custom_post_data": {"http_referrer": "<?php echo $site_url; ?>/member-dashboard\/"}, "current_screen": {"screen_type": 3, "screen_id": 628}, "ignored_fields": ["email", "_captcha_size", "_captcha_theme", "_captcha_type", "_submit_option", "_use_captcha", "g-recaptcha-response", "__tcb_lg_fc", "__tcb_lg_msg", "_state", "_form_type", "_error_message_option", "_back_url", "_submit_option", "url", "_asset_group", "_asset_option", "mailchimp_optin"]};
            } else {
                ThriveGlobal.$j.extend(true, TL_Const, {"security": "20b8ad830f", "ajax_url": "<?php echo $site_url; ?>/wp-admin\/admin-ajax.php", "forms": [], "action_conversion": "tve_leads_ajax_conversion", "action_impression": "tve_leads_ajax_impression", "ajax_load": 1, "custom_post_data": {"http_referrer": "<?php echo $site_url; ?>/member-dashboard\/"}, "current_screen": {"screen_type": 3, "screen_id": 628}, "ignored_fields": ["email", "_captcha_size", "_captcha_theme", "_captcha_type", "_submit_option", "_use_captcha", "g-recaptcha-response", "__tcb_lg_fc", "__tcb_lg_msg", "_state", "_form_type", "_error_message_option", "_back_url", "_submit_option", "url", "_asset_group", "_asset_option", "mailchimp_optin"]})} /*]]> */</script>
        <link rel="stylesheet" href="<?php echo $site_url; ?>/wp-content/themes/themify-ultra/themify/fontawesome/css/font-awesome.min.css?ver=4.2.2" media="all" id="-54465244"><link rel="stylesheet" href="<?php echo $site_url; ?>/wp-content/themes/themify-ultra/themify/themify-icons/themify-icons.min.css?ver=4.2.2" media="all" id="-370978779"><div class="body-overlay"></div>
    </body>
</html>