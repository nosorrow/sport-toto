<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

date_default_timezone_set('Europe/Sofia');


/*
 * Брочя на посещенията.
 */
$ips = array(
    '192.168.0.23',
    '178.239.229.70'
);
if (!in_array($_SERVER['REMOTE_ADDR'], $ips)) {
// Our log file;
    $counter = "stats.txt";
// Date logging;
    $today = getdate();
    $month = $today['month'];
    $mday = $today['mday'];
    $year = $today['year'];
    $hour = $today['hours'];
    $min = $today['minutes'];
    $current_date = $mday . $month . $year . ' ' . $hour . ':' . $min;
    $fp = fopen($counter, "a");
    $line = $_SERVER['REMOTE_ADDR'] . "|" . $current_date . "\n";
    $size = strlen($line);
    fputs($fp, $line, $size);
    fclose($fp);
}
// ---------------- End counter ----------------------------------------------
?>
<!DOCTYPE html>
<html lang="bg-BG" prefix="og: http://ogp.me/ns#" dir="ltr">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>3-стаен Апартамент, Стара Загора - Чайка / 189 на топ цена &mdash; НИБОЗ</title>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="https://nibozimoti.com/xmlrpc.php"/>

    <link rel="icon" type="image/png" href="https://nibozimoti.com/wp-content/uploads/2017/03/favicon.png"/>
    <script type="text/javascript">
        var ajaxurl = 'https://nibozimoti.com/wp-admin/admin-ajax.php';
    </script>

    <!-- This site is optimized with the Yoast SEO plugin v7.6.1 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta name="description"
          content="3-стаен Апартамент, Стара Загора - Чайка / 189 на супер цена от Агенция за недвижими имоти НИБОЗ. Обадете се сега на ✆ 0887 850 875."/>
    <link rel="canonical" href="https://nibozimoti.com/nedvijimi-imoti/3-staen-apartament-stara-zagora-chajka-189/"/>
    <meta property="og:locale" content="bg_BG"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="3-стаен Апартамент, Стара Загора - Чайка / 189 на топ цена &mdash; НИБОЗ"/>
    <meta property="og:description"
          content="3-стаен Апартамент, Стара Загора - Чайка / 189 на супер цена от Агенция за недвижими имоти НИБОЗ. Обадете се сега на ✆ 0887 850 875."/>
    <meta property="og:url" content="https://nibozimoti.com/nedvijimi-imoti/3-staen-apartament-stara-zagora-chajka-189/"/>
    <meta property="og:site_name" content="НИБОЗ"/>
    <meta property="article:publisher" content="https://www.facebook.com/nibozimoti"/>
    <meta property="og:image"
          content="https://nibozimoti.com/wp-content/uploads/2018/07/142899333_7_800x600_prodava-3-staen-grad-stara-zagora-tsentar-_rev001-copy.jpg"/>
    <meta property="og:image:secure_url"
          content="https://nibozimoti.com/wp-content/uploads/2018/07/142899333_7_800x600_prodava-3-staen-grad-stara-zagora-tsentar-_rev001-copy.jpg"/>
    <meta property="og:image:width" content="933"/>
    <meta property="og:image:height" content="700"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description"
          content="3-стаен Апартамент, Стара Загора - Чайка / 189 на супер цена от Агенция за недвижими имоти НИБОЗ. Обадете се сега на ✆ 0887 850 875."/>
    <meta name="twitter:title" content="3-стаен Апартамент, Стара Загора - Чайка / 189 на топ цена &mdash; НИБОЗ"/>
    <meta name="twitter:image"
          content="https://nibozimoti.com/wp-content/uploads/2018/07/142899333_7_800x600_prodava-3-staen-grad-stara-zagora-tsentar-_rev001-copy.jpg"/>
    <script type='application/ld+json'>
        {"@context":"https:\/\/schema.org","@type":"Organization","url":"https:\/\/nibozimoti.com\/","sameAs":["https:\/\/www.facebook.com\/nibozimoti","https:\/\/www.linkedin.com\/company\/niboz"],"@id":"https:\/\/nibozimoti.com\/#organization","name":"\u041d\u0418\u0411\u041e\u0417","logo":"https:\/\/nibozimoti.com\/wp-content\/uploads\/2017\/03\/nibozimoti.png"}


    </script>
    <!-- / Yoast SEO plugin. -->

    <link rel='dns-prefetch' href='//maps.googleapis.com'/>
    <link rel='dns-prefetch' href='//fonts.googleapis.com'/>
    <link rel='dns-prefetch' href='//s.w.org'/>
    <link rel="alternate" type="application/rss+xml" title="НИБОЗ &raquo; Хранилка" href="https://nibozimoti.com/feed/"/>
    <link rel="alternate" type="application/rss+xml" title="НИБОЗ &raquo; Хранилка за коментари"
          href="https://nibozimoti.com/comments/feed/"/>
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/",
            "svgExt": ".svg",
            "source": {"concatemoji": "https:\/\/nibozimoti.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.8"}
        };
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
                if (!l || !l.fillText) return !1;
                switch (l.textBaseline = "top", l.font = "600 32px Arial", a) {
                    case"flag":
                        return !(b = d([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819])) && (b = d([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]), !b);
                    case"emoji":
                        return b = d([55358, 56760, 9792, 65039], [55358, 56760, 8203, 9792, 65039]), !b
                }
                return !1
            }

            function f(a) {
                var c = b.createElement("script");
                c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }

            var g, h, i, j, k = b.createElement("canvas"), l = k.getContext && k.getContext("2d");
            for (j = Array("flag", "emoji"), c.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, i = 0; i < j.length; i++) c.supports[j[i]] = e(j[i]), c.supports.everything = c.supports.everything && c.supports[j[i]], "flag" !== j[i] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[j[i]]);
            c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function () {
                c.DOMReady = !0
            }, c.supports.everything || (h = function () {
                c.readyCallback()
            }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", h, !1), a.addEventListener("load", h, !1)) : (a.attachEvent("onload", h), b.attachEvent("onreadystatechange", function () {
                "complete" === b.readyState && c.readyCallback()
            })), g = c.source || {}, g.concatemoji ? f(g.concatemoji) : g.wpemoji && g.twemoji && (f(g.twemoji), f(g.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
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
    <link rel='stylesheet' id='rs-plugin-settings-css'
          href='https://nibozimoti.com/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.4.5.1' type='text/css'
          media='all'/>
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {
        }
    </style>
    <link rel='stylesheet' id='lt-icon-css' href='https://nibozimoti.com/wp-content/themes/hometown-theme/font/flaticon.css?ver=1.0.0'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='lt-foundation-css'
          href='https://nibozimoti.com/wp-content/themes/hometown-theme/css/foundation.css?ver=1.0.0' type='text/css' media='all'/>
    <link rel='stylesheet' id='lt-screen-css' href='https://nibozimoti.com/wp-content/themes/hometown-theme/css/screen.css?ver=1.0.0'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='lt-child-css' href='https://nibozimoti.com/wp-content/themes/hometown-child/style.css?ver=1.0.0'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='lt-google-webfont-css' href='//fonts.googleapis.com/css?family=Roboto%3A400%2C300&#038;ver=1.0.0'
          type='text/css' media='all'/>
    <script type='text/javascript' src='https://nibozimoti.com/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
    <script type='text/javascript' src='https://nibozimoti.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
    <script type='text/javascript'
            src='https://nibozimoti.com/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.4.5.1'></script>
    <script type='text/javascript'
            src='https://nibozimoti.com/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.4.5.1'></script>
    <link rel='https://api.w.org/' href='https://nibozimoti.com/wp-json/'/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://nibozimoti.com/xmlrpc.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://nibozimoti.com/wp-includes/wlwmanifest.xml"/>
    <meta name="generator" content="WordPress 4.9.8"/>
    <link rel='shortlink' href='https://nibozimoti.com/?p=4090'/>
    <link rel="alternate" type="application/json+oembed"
          href="https://nibozimoti.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fnibozimoti.com%2Fnedvijimi-imoti%2F3-staen-apartament-stara-zagora-chajka-189%2F"/>
    <link rel="alternate" type="text/xml+oembed"
          href="https://nibozimoti.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fnibozimoti.com%2Fnedvijimi-imoti%2F3-staen-apartament-stara-zagora-chajka-189%2F&#038;format=xml"/>
    <!-- Piwik -->
    <script type="text/javascript">
        var _paq = _paq || [];
        // tracker methods like "setCustomDimension" should be called before "trackPageView"
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function () {
            var u = "//piwik.gigacomp.bg/";
            _paq.push(['setTrackerUrl', u + 'piwik.php']);
            _paq.push(['setSiteId', '7']);
            var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
            g.type = 'text/javascript';
            g.async = true;
            g.defer = true;
            g.src = u + 'piwik.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
    <!-- End Piwik Code -->

    <!-- Cookie script -->
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
    <script>
        window.addEventListener("load", function () {
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#2c77bc",
                        "text": "#ffffff"
                    },
                    "button": {
                        "background": "#89c765",
                        "text": "#ffffff"
                    }
                },
                "position": "bottom-left",
                "content": {
                    "message": "Този сайт използва бисквитки (cookies) и подобни технологии.",
                    "dismiss": "Съгласен",
                    "link": "Научете повече"
                }
            })
        });
    </script>
    <!-- End Cookie script --><!-- Theme Dynamic CSS -->
    <style type="text/css">

        /* Font */
        body {
            font-family: Arial, Helvetica, Garuda, sans-serif;
            font-size: 16px;
            line-height: 1.6em;
        }

        h1 {
            font-size: 32px;
            line-height: 1.5em;
        }

        h2 {
            font-size: 28px;
            line-height: 1.5em;
        }

        h3 {
            font-size: 24px;
            line-height: 1.5em;
        }

        h4 {
            font-size: 22px;
            line-height: 1.5em;
        }

        h5 {
            font-size: 20px;
            line-height: 1.5em;
        }

        h6 {
            font-size: 18px;
            line-height: 1.5em;
        }

        .primary-nav {
            font-size: 16px;
        }

        /* BG Color */
        .primary-nav > ul > li.bubble a, .lt-button.primary, input.primary[type='submit'], input.primary[type='button'], .rangeSlider .noUi-connect, .map-wrap .marker .dot, .map-wrap .marker:after, .map-wrap .cluster:before, .map-wrap .cluster:after, .card .status:before, .hero .status:before, .property-hero .status:before, #nprogress .bar, .button:hover, input[type='submit']:hover, input[type='button']:hover, .lt-button:hover, .tooltip, .map-outer-wrap .overlay-link, .select2-container--default .select2-results__option--highlighted[aria-selected], .hero .badge .status:before {
            background-color: #2c77bc;
        }

        /* Color */
        a, .header-wrap .header-top .nav-language.type-text li.active a, .primary-nav li.current-menu-item > a, .primary-nav li.current-menu-ancestor > a, .login-form .tab-list li a, .box-icon .feature-icon {
            color: #2c77bc;
        }

        /* Border */
        .primary-nav > ul > li > ul.sub-menu, #nprogress .spinner-icon, .lt-button.primary, input.primary[type='submit'], input.primary[type='button'], .button:hover, input[type='submit']:hover, input[type='button']:hover, .lt-button:hover {
            border-color: #2c77bc;
        }

        .tooltip:after {
            border-top-color: #2c77bc;
        }

        /* Shadow */
        #nprogress .peg {
            box-shadow: 0 0 10px #2c77bc, 0 0 5px #2c77bc;
        }

        /* Background */
        body {
            background-color: #eeeeee;
            background-image: url();
            background-repeat: repeat;
        }

        .header-bg {
            background-color: #ffffff;
            background-size: contain;
            background-repeat: no-repeat;
        }

        .footer-main {
            background-color: #fafafa;
            background-image: url(https://nibozimoti.com/wp-content/uploads/2014/12/bg-crossword.png);
            background-repeat: repeat;
        }
    </style>
    <!-- End Theme Dynamic CSS -->


    <!-- Google Web Font -->
    <style type="text/css">
        body {
            font-family: "Roboto";
        }
    </style>
    <!-- End Google Web Font -->


    <!-- Theme Open External Link in new Tab -->
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $('a').filter(function () {
                return this.hostname && this.hostname !== location.hostname;
            }).attr("target", "_blank");
        });
    </script>
    <!-- End Theme Open External Link in new Tab -->
    <meta property="og:image"
          content="https://nibozimoti.com/wp-content/uploads/2018/07/142899333_7_800x600_prodava-3-staen-grad-stara-zagora-tsentar-_rev001-copy.jpg"/>
    <style type="text/css">.recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }</style>
    <meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
    <!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css" href="https://nibozimoti.com/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css"
          media="screen"><![endif]-->
    <meta name="generator"
          content="Powered by Slider Revolution 5.4.5.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface."/>
    <script type="text/javascript">function setREVStartSize(e) {
            try {
                var i = jQuery(window).width(), t = 9999, r = 0, n = 0, l = 0, f = 0, s = 0, h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function (e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({height: f})
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };</script>
    <noscript>
        <style type="text/css"> .wpb_animate_when_almost_visible {
                opacity: 1;
            }</style>
    </noscript>
</head>

<body class="property-template-default single single-property postid-4090 ltr full-width element-round wpb-js-composer js-comp-ver-5.1.1 vc_responsive"
      id="body">

<div class="layout-wrap full-width">
    <div class="layout-inner">
        <header class="header-wrap sticky-on element-dark logo-left">

            <div class="header-top">
                <div class="row">
                    <div class="large-6 medium-12 columns left">
                        Искате да продадете имот? <a href="https://nibozimoti.com/contact/">Свържете се с нас</a></div>
                    <div class="large-6 medium-12 columns right">


                        <ul class="menu user-menu">
                            <li class="login"><a href="#" class="modal-link" data-modal="login-modal">ВХОД / РЕГИСТРАЦИЯ</a></li>
                        </ul>

                        <ul class="menu social">
                            <li><a href="https://www.facebook.com/nibozimoti"><i class="nt-icon-facebook nt-icon"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/niboz"><i class="nt-icon-linkedin nt-icon"></i></a></li>
                            <li><a href="#"><i class="nt-icon-gplus nt-icon"></i></a></li>
                        </ul>

                        <i class="flaticon-zoom22 search-button"></i>

                    </div>
                </div>
            </div>

            <div class="header-main" style="height: 120px;">
                <div class="row">
                    <div class="columns">

                        <div class="branding" style="height: 120px;">
                            <a href="https://nibozimoti.com">
                                <span class="helper"></span>
                                <img src="https://nibozimoti.com/wp-content/uploads/2018/04/nibozimoti.png" alt="НИБОЗ" width="247"
                                     height="60"/></a>
                            <div class="menu-toggle"><i class="menu flaticon-list26"></i><i class="close flaticon-cross37"></i></div>
                        </div>

                        <nav class="primary-nav" style="line-height: 120px;">
                            <ul id="menu-primary" class="menu">
                                <li id="menu-item-2254"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-2254  "><a
                                            href="https://nibozimoti.com/">НАЧАЛО</a></li>
                                <li id="menu-item-3050"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3050  ">
                                    <a href="https://nibozimoti.com/nedvijimi-imoti/">ИМОТИ</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-2324"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2324  "><a
                                                    href="https://nibozimoti.com/property-status/for-sale/">Продава</a></li>
                                        <li id="menu-item-2325"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2325  "><a
                                                    href="https://nibozimoti.com/property-status/for-rent/">Дава под наем</a></li>
                                        <li id="menu-item-2326"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2326  "><a
                                                    href="https://nibozimoti.com/property-status/prefabricated/">Сглобяеми къщи</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-2258" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2258  "><a
                                            href="https://nibozimoti.com/faqs/">FAQ</a></li>
                                <li id="menu-item-2259" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2259  "><a
                                            href="https://nibozimoti.com/services/">УСЛУГИ</a></li>
                                <li id="menu-item-3761"
                                    class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-3761  "><a
                                            href="https://nibozimoti.com/blog/">ПОЛЕЗНО</a></li>
                                <li id="menu-item-2256" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2256  "><a
                                            href="https://nibozimoti.com/about/">ЗА НАС</a></li>
                                <li id="menu-item-2257" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2257  "><a
                                            href="https://nibozimoti.com/contact/">КОНТАКТИ</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
            <div class="header-bg"></div>
        </header>


        <div class="search-box">
            <div class="row">
                <div class="columns">
                    <form method="get" class="nt-search-form" action="https://nibozimoti.com">
                        <input type="text" id="search-text" class="input-text" name="s" placeholder="Търси &#8230;" autocomplete="off"/>
                        <i class="flaticon-cross37 close-button"></i>
                    </form>
                </div>
            </div>
        </div>
        <div class="section-title  element-light" style="background-color:#2c77bc; background-image: url(); background-size:cover;">
            <div class="row">
                <div class="columns">

                    <h1 class="page-title">Калкулатор за нотариални такси</h1>
                    <div class="sub-title">
                        <ul></ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-wrap">

        </div>

        <div class="main-content">
            <div class="row">

                <div class="large-8 columns">
                    <div class="section">
                        <h4>Разноски по прехвърляне на собственост върху недвижим имот</h4>
                        <div class="property-search-box-wrap" style="margin-bottom: 20px">
                            <div class="row">
                                <div class="columns large-10">
                                    <div class="property-search-box">

                                        <form method="post" id="calculator" class="property-search-form">

                                            <div class="row">
                                                <div class="columns large-6 medium-6 search-id">
                                                    <label>Въведете сума<span style="color:red">*</span>
                                                        <input type="text" name="cost" id="cost" placeholder="Материален интерес в лева">
                                                    </label>
                                                </div>

                                                <div class="columns large-6 medium-6 search-location">
                                                    <label>Изберете град</span>
                                                        <select class="form-control" name="city" id="city">
                                                            <option value="2">Стара Загора</option>
                                                            <option value="2.5">София</option>
                                                        </select>
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="columns large-12 medium-12">
                                                    <p id="error"></p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!-- ENDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD -->

                        <div class="row">
                            <div class="columns small-12 large-10"><!-- ... -->
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Резултат</th>
                                        <th> в лева</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="">Данъчна служба (местен данък)</td>
                                        <td id="local-tax">0</td>
                                    </tr>
                                    <tr>
                                        <td class="">Агенция вписвания (вписване)</td>
                                        <td id="agency">0</td>
                                    </tr>
                                    <tr>
                                        <td class="">Нотариална такса</td>
                                        <td id="notary-fee">0</td>
                                    </tr>
                                    <tr>
                                        <td class="">ДДС</td>
                                        <td id="vat">0</td>
                                    </tr>
                                    <tr class="">
                                        <td><strong>ОБЩО</strong></td>
                                        <td id="total" style="font-weight: bold">0</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>



                        <div class="large-12 columns">
                            <p>
                                Моля, имайте предвид, че таксите са за извършване на нотариален акт или съответното нотариално
                                удостоверяване.
                                Съставянето на проект на нотариален акт, договор или други документи се таксува съгласно т.17-22 от
                                Тарифата.
                            </p>
                            <p>
                                Моля, имайте предвид, че в повечето от случаите към нотариалните актове се налага да се
                                правят допълнителни заверки (преписи, декларации и др.),
                                които ще ви струват допълнително ориентировъчно около 10-20 лева.
                            </p>
                            <p>
                                Не включва комисионните, които банка би събрала, в случаите,
                                когато превеждате по банков път таксите на Данъчната служба и на Агенция по вписванията
                            </p>
                        </div>
                    </div> <!-- Section -->
                </div> <!-- columns-8 -->

                <aside class="sidebar large-4 columns">
                    <div class="section">
                        <div id="property-search-2" class="widget widget-property-search">
                            <div class="widget-title">ТЪРСЕНЕ НА ИМОТ</div>
                            <div class="widget-body">
                                <form method="get" action="https://nibozimoti.com/property-search/" class="property-search-form">


                                    <input type="hidden" name="property-search" value="true"/>
                                    <div class="row">


                                        <div class="columns large-4 medium-4 search-location">
                                            <label>Район</label>
                                            <select class="select2" name="s-location" tabindex="2">
                                                <option value="">Всички</option>
                                                <option value="275">с. Богомилово</option>
                                                <option value="279">с. Борилово</option>
                                                <option value="252">Стара Загора</option>
                                                <option value="244">- Аязмото</option>
                                                <option value="260">- Била</option>
                                                <option value="255">- Железник</option>
                                                <option value="254">- Загорка</option>
                                                <option value="261">- Казански</option>
                                                <option value="289">- кв. Зора</option>
                                                <option value="278">- Кольо Ганчев</option>
                                                <option value="270">- Опълченски</option>
                                                <option value="269">- ОРБ</option>
                                                <option value="282">- Ремиза</option>
                                                <option value="256">- Самара</option>
                                                <option value="280">- Самара 3</option>
                                                <option value="290">- Три Чучура</option>
                                                <option value="257">- Три Чучура - Север</option>
                                                <option value="250">- Център</option>
                                                <option value="272">- Чайка</option>
                                                <option value="253">- Широк Център</option>
                                            </select>
                                        </div>
                                        <div class="columns large-3 medium-4 small-6 search-status">
                                            <label>Вид</label>
                                            <select class="select2" name="s-status" tabindex="3">
                                                <option value="">Всички</option>
                                                <option value="189">Дава под наем</option>
                                                <option value="190">Продава</option>
                                            </select>
                                        </div>
                                        <div class="columns large-3 medium-4 small-6 search-type">
                                            <label>Тип</label>
                                            <select class="select2" name="s-type" tabindex="4">
                                                <option value="">Всички</option>
                                                <option value="218">1-стаен</option>
                                                <option value="274">- 1-стаен с Акт 16</option>
                                                <option value="187">2-стаен</option>
                                                <option value="266">- 2-стаен с Акт 16</option>
                                                <option value="185">3-стаен</option>
                                                <option value="262">- 3-стаен с Акт 16</option>
                                                <option value="200">4-стаен</option>
                                                <option value="264">- 4-стаен с Акт 16</option>
                                                <option value="239">Къща</option>
                                                <option value="276">Къща с акт 16</option>
                                                <option value="232">Магазин</option>
                                                <option value="229">Мезонет</option>
                                                <option value="268">- Мезонет с Акт 16</option>
                                                <option value="281">Многостаен с акт 16</option>
                                                <option value="231">Офис</option>
                                                <option value="292">Студио</option>
                                            </select>
                                        </div>


                                        <div class="columns large-3 medium-6 search-price">
                                            <label>Цена
                                                <small class="right"><span class="lower"><span>0</span> EUR</span> - <span
                                                            class="upper"><span>370,000</span> EUR</span></small>
                                            </label>
                                            <div class="rangeSlider" data-min="0" data-max="370000" data-cmin="0" data-cmax="370000"
                                                 data-step="10" data-margin="10" data-decimal-point="." data-thousands-sep=","
                                                 data-direction="ltr"></div>
                                            <input type="hidden" name="l-price" class="lower"/>
                                            <input type="hidden" name="u-price" class="upper"/>
                                        </div>

                                        <div class="columns large-3 medium-6 search-area">
                                            <label>Квадратура
                                                <small class="right"><span class="lower"><span></span> м<sup>2</sup></span> - <span
                                                            class="upper"><span></span> м<sup>2</sup></span></small>
                                            </label>
                                            <div class="rangeSlider" data-min="0" data-max="500" data-cmin="0" data-cmax="500"
                                                 data-step="10" data-margin="10" data-decimal-point="." data-thousands-sep=","
                                                 data-direction="ltr"></div>
                                            <input type="hidden" name="l-area" class="lower"/>
                                            <input type="hidden" name="u-area" class="upper"/>
                                        </div>

                                        <div class="columns large-2 search-submit">
                                            <label class="hidden">ТЪРСИ</label>
                                            <input type="submit" value="ТЪРСИ" class="lt-button primary"/>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div id="property-2" class="widget widget-property">
                            <div class="widget-title">ПОСЛЕДНИ ИМОТИ</div>
                            <ul>
                                <li><a href="https://nibozimoti.com/nedvijimi-imoti/tristaen-apartament-stara-zagora-tsentar-204/"><img
                                                src="https://nibozimoti.com/wp-content/uploads/2018/09/IMG_1313-150x150.jpg"/></a><a
                                            href="https://nibozimoti.com/nedvijimi-imoti/tristaen-apartament-stara-zagora-tsentar-204/">Тристаен
                                        апартамент Стара Загора, Център / 204</a><span class="price"><span>63,000</span> EUR</span></li>
                                <li><a href="https://nibozimoti.com/nedvijimi-imoti/3-staen-apartament-stara-zagora-kv-zheleznik-203/"><img
                                                src="https://nibozimoti.com/wp-content/uploads/2018/09/IMG_1262-150x150.jpg"/></a><a
                                            href="https://nibozimoti.com/nedvijimi-imoti/3-staen-apartament-stara-zagora-kv-zheleznik-203/">3-стаен
                                        апартамент Стара Загора, кв. Железник / 203</a><span class="price"><span>44,700</span> EUR</span>
                                </li>
                                <li><a href="https://nibozimoti.com/nedvijimi-imoti/studio-stara-zagora-k-s-belvyu-202/"><img
                                                src="https://nibozimoti.com/wp-content/uploads/2018/08/Belle-Vue_Cam-24-Copy-1-150x150.jpg"/></a><a
                                            href="https://nibozimoti.com/nedvijimi-imoti/studio-stara-zagora-k-s-belvyu-202/">Студио Стара
                                        Загора &#8211; К-с БелВю / 202</a><span class="price"><span>27,700</span> EUR</span></li>
                                <li><a href="https://nibozimoti.com/nedvijimi-imoti/2-staen-apartament-stara-zagora-k-s-belvyu-201/"><img
                                                src="https://nibozimoti.com/wp-content/uploads/2018/08/Belle-Vue_Cam-24-Copy-1-150x150.jpg"/></a><a
                                            href="https://nibozimoti.com/nedvijimi-imoti/2-staen-apartament-stara-zagora-k-s-belvyu-201/">2-стаен
                                        апартамент Стара Загора &#8211; К-с БелВю / 201</a><span
                                            class="price"><span>33,850</span> EUR</span></li>
                            </ul>
                        </div>
                    </div>
                </aside>


            </div><!-- .row -->
        </div><!-- #content -->

        <footer class="footer-main element-dark">

            <div class="footer-top">
                <div class="row">
                    <div class="large-4 medium-6 columns">
                        <div id="text-2" class="widget widget_text">
                            <div class="widget-title">ЗА НАС</div>
                            <div class="textwidget"><p>НИБОЗ - Агенция за недвижими имоти в Стара Загора и региона.</p>
                            </div>
                        </div>
                    </div>
                    <div class="large-4 medium-6 columns">
                        <div id="text-3" class="widget widget_text">
                            <div class="widget-title">ОФИС</div>
                            <div class="textwidget"><p>гр. Стара Загора<br>
                                    бул. Патриарх Евтимий №122, етаж 2
                                <p>
                                    Tелефон: <a href="tel:+359887850875">0887 850 875</a><br>
                                    E-mail: <a href="/cdn-cgi/l/email-protection#28474e4e414b4d6846414a47524145475c41064b4745"><span
                                                class="__cf_email__" data-cfemail="bad5dcdcd3d9dffad4d3d8d5c0d3d7d5ced394d9d5d7">[email&#160;protected]</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="large-4 medium-6 columns">
                        <div id="text-4" class="widget widget_text">
                            <div class="widget-title">РАБОТНО ВРЕМЕ</div>
                            <div class="textwidget"><p>Работим 5 дни в седмицата. Свържете се с нас за повече информация.</p>
                                Понеделник – Петък: <span class="right">8:00 - 18:00 </span><br/>
                                Събота – Неделя: <span class="right">Почивни дни</span> <br/></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="row">

                    <ul class="social-list">
                        <li><a href="https://www.facebook.com/nibozimoti"><i class="nt-icon-facebook nt-icon"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/niboz"><i class="nt-icon-linkedin nt-icon"></i></a></li>
                        <li><a href="#"><i class="nt-icon-gplus nt-icon"></i></a></li>
                    </ul>

                    <div class="copyright-text">Агенция за недвижими имоти НИБОЗ - Стара Загора &copy; 2017 - Всички права запазени!</div>
                </div>
            </div>

        </footer>

        <div class="mobile-menu">
            <nav>
                <ul id="menu-primary-1" class="menu">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-2254  "><a
                                href="https://nibozimoti.com/">НАЧАЛО</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3050  "><a
                                href="https://nibozimoti.com/nedvijimi-imoti/">ИМОТИ</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2324  "><a
                                        href="https://nibozimoti.com/property-status/for-sale/">Продава</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2325  "><a
                                        href="https://nibozimoti.com/property-status/for-rent/">Дава под наем</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2326  "><a
                                        href="https://nibozimoti.com/property-status/prefabricated/">Сглобяеми къщи</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2258  "><a
                                href="https://nibozimoti.com/faqs/">FAQ</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2259  "><a
                                href="https://nibozimoti.com/services/">УСЛУГИ</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-3761  "><a
                                href="https://nibozimoti.com/blog/">ПОЛЕЗНО</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2256  "><a
                                href="https://nibozimoti.com/about/">ЗА НАС</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2257  "><a
                                href="https://nibozimoti.com/contact/">КОНТАКТИ</a></li>
                </ul>
            </nav>


            <nav>
                <ul class="menu social-menu">
                    <li><a href="https://www.facebook.com/nibozimoti"> <i class="nt-icon-facebook nt-icon"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/niboz"> <i class="nt-icon-linkedin nt-icon"></i></a></li>
                    <li><a href="#"> <i class="nt-icon-gplus nt-icon"></i></a></li>
                </ul>
            </nav>

            <nav>
                <form method="get" class="nt-search-form" action="https://nibozimoti.com">
                    <input type="text" id="search-text" class="input-text" name="s" placeholder="Търси &#8230;" autocomplete="off"/>
                </form>
            </nav>


            <div class="login-form">
                <div class="row">
                    <div class="tab-wrap">
                        <div class="pane login-box active">
                            <h3>Вход</h3>
                            <form name="loginform" id="loginform" class="validate-form"
                                  action="https://nibozimoti.com/wp-login.php?redirect_to=https%3A%2F%2Fnibozimoti.com%2Fnedvijimi-imoti%2F3-staen-apartament-stara-zagora-chajka-189%2F"
                                  method="post">
                                <input type="hidden" name="rememberme" value="forever"/>
                                <p class="login-username">
                                    <label for="user_login">Потребителско име <span>*</span></label>
                                    <input type="text" name="log" id="user_login" class="input" value="" size="20" data-rule-required="true"
                                           data-msg-required="Изисква се потребителско име.">
                                </p>
                                <p class="login-password">
                                    <label for="user_pass">Парола <span>*</span></label>
                                    <input type="password" name="pwd" id="user_pass" class="input" value="" size="20"
                                           data-rule-required="true" data-msg-required="Изисква се парола.">
                                </p>
                                <div class="form-response"></div>
                                <p class="login-submit">
                                    <input type="submit" name="wp-submit" id="wp-submit" class="primary" value="Вход">
                                    <input type="hidden" name="redirect_to" value="https://nibozimoti.com">
                                </p>
                            </form>
                            <div class="vspace"></div>
                        </div>
                        <div class="pane register-box">
                            <h3>Регистрация</h3>
                            <form action="https://nibozimoti.com/wp-login.php?action=register" id="register-form" class="validate-form"
                                  method="post">
                                <input type="hidden" name="user-cookie" value="1">
                                <input type="hidden" name="redirect_to" value="https://nibozimoti.com"/>
                                <p>
                                    <label for="register-username">Потребителско име <span>*</span></label>
                                    <input id="register-username" name="user_login" type="text" data-rule-required="true"
                                           data-msg-required="Изисква се потребителско име.">
                                </p>

                                <p>
                                    <label for="register-email">E-mail <span>*</span></label>
                                    <input id="register-email" name="user_email" type="text" data-rule-required="true"
                                           data-msg-required="E-mail се изисква" data-rule-email="true"
                                           data-msg-email="Грешен e-mail адрес.">
                                </p>
                                <div class="form-response"></div>
                                <p class="login-submit">
                                    <input type="submit" name="user-submit" class="primary" value="Регистрация">
                                </p>
                            </form>
                            <div class="vspace"></div>
                        </div>
                        <div class="pane forgot-box">
                            <h3>Забравена парола</h3>
                            <form action="https://nibozimoti.com/wp-login.php?action=lostpassword" id="forgot-form" method="post"
                                  class="validate-form">
                                <input type="hidden" name="user-cookie" value="1">
                                <p>
                                    <label for="user-forgot">Потребителско име или e-mail <span>*</span></label>
                                    <input id="user-forgot" name="user_login" type="text" data-rule-required="true"
                                           data-msg-required="Изисква се потребителско име или e-mail.">
                                </p>
                                <div class="form-response"></div>
                                <p class="login-submit">
                                    <input type="submit" name="user-submit" class="primary" value="Промени парола">
                                </p>
                            </form>
                            <div class="vspace"></div>
                        </div>
                        <ul class="tab-list">
                            <li class="active"><a href="#" data-pane="login-box">Вход</a></li>
                            <li><a href="#" data-pane="register-box">Регистрация</a></li>
                            <li><a href="#" data-pane="forgot-box">Забравена парола</a></li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div><!-- .layout-wrap -->

<div class="modal-mask">
    <div class="modal login-modal">
        <div class="login-form">
            <div class="row">
                <div class="tab-wrap">
                    <div class="pane login-box active">
                        <h3>Вход</h3>
                        <form name="loginform" id="loginform" class="validate-form"
                              action="https://nibozimoti.com/wp-login.php?redirect_to=https%3A%2F%2Fnibozimoti.com%2Fnedvijimi-imoti%2F3-staen-apartament-stara-zagora-chajka-189%2F"
                              method="post">
                            <input type="hidden" name="rememberme" value="forever"/>
                            <p class="login-username">
                                <label for="user_login">Потребителско име <span>*</span></label>
                                <input type="text" name="log" id="user_login" class="input" value="" size="20" data-rule-required="true"
                                       data-msg-required="Изисква се потребителско име.">
                            </p>
                            <p class="login-password">
                                <label for="user_pass">Парола <span>*</span></label>
                                <input type="password" name="pwd" id="user_pass" class="input" value="" size="20" data-rule-required="true"
                                       data-msg-required="Изисква се парола.">
                            </p>
                            <div class="form-response"></div>
                            <p class="login-submit">
                                <input type="submit" name="wp-submit" id="wp-submit" class="primary" value="Вход">
                                <input type="hidden" name="redirect_to" value="https://nibozimoti.com">
                            </p>
                        </form>
                        <div class="vspace"></div>
                    </div>
                    <div class="pane register-box">
                        <h3>Регистрация</h3>
                        <form action="https://nibozimoti.com/wp-login.php?action=register" id="register-form" class="validate-form"
                              method="post">
                            <input type="hidden" name="user-cookie" value="1">
                            <input type="hidden" name="redirect_to" value="https://nibozimoti.com"/>
                            <p>
                                <label for="register-username">Потребителско име <span>*</span></label>
                                <input id="register-username" name="user_login" type="text" data-rule-required="true"
                                       data-msg-required="Изисква се потребителско име.">
                            </p>

                            <p>
                                <label for="register-email">E-mail <span>*</span></label>
                                <input id="register-email" name="user_email" type="text" data-rule-required="true"
                                       data-msg-required="E-mail се изисква" data-rule-email="true" data-msg-email="Грешен e-mail адрес.">
                            </p>
                            <div class="form-response"></div>
                            <p class="login-submit">
                                <input type="submit" name="user-submit" class="primary" value="Регистрация">
                            </p>
                        </form>
                        <div class="vspace"></div>
                    </div>
                    <div class="pane forgot-box">
                        <h3>Забравена парола</h3>
                        <form action="https://nibozimoti.com/wp-login.php?action=lostpassword" id="forgot-form" method="post"
                              class="validate-form">
                            <input type="hidden" name="user-cookie" value="1">
                            <p>
                                <label for="user-forgot">Потребителско име или e-mail <span>*</span></label>
                                <input id="user-forgot" name="user_login" type="text" data-rule-required="true"
                                       data-msg-required="Изисква се потребителско име или e-mail.">
                            </p>
                            <div class="form-response"></div>
                            <p class="login-submit">
                                <input type="submit" name="user-submit" class="primary" value="Промени парола">
                            </p>
                        </form>
                        <div class="vspace"></div>
                    </div>
                    <ul class="tab-list">
                        <li class="active"><a href="#" data-pane="login-box">Вход</a></li>
                        <li><a href="#" data-pane="register-box">Регистрация</a></li>
                        <li><a href="#" data-pane="forgot-box">Забравена парола</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <i class="flaticon-cross37 close-bt"></i>
    </div>
</div>


<!--Start of Tawk.to Script-->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5927d5a64374a471e7c4fcfb/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
<script type="text/javascript">//<![CDATA[
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-10713967-13']);
    _gaq.push(['_trackPageview']);
    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
    //]]></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {
        "apiSettings": {"root": "https:\/\/nibozimoti.com\/wp-json\/contact-form-7\/v1", "namespace": "contact-form-7\/v1"},
        "recaptcha": {"messages": {"empty": "\u041c\u043e\u043b\u044f, \u043f\u043e\u0442\u0432\u044a\u0440\u0434\u0435\u0442\u0435, \u0447\u0435 \u043d\u0435 \u0441\u0442\u0435 \u0440\u043e\u0431\u043e\u0442."}},
        "cached": "1"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='https://nibozimoti.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.2'></script>
<script type='text/javascript' src='https://nibozimoti.com/wp-includes/js/jquery/jquery.form.min.js?ver=4.2.1'></script>
<script type='text/javascript' src='https://nibozimoti.com/wp-includes/js/comment-reply.min.js?ver=4.9.8'></script>
<script type='text/javascript'
        src='//maps.googleapis.com/maps/api/js?v=3.exp&#038;sensor=false&#038;libraries=places&#038;key=AIzaSyCbas8lLqAy8Yy58nV9ypR0SPCGfiMmR6Y&#038;ver=1.0.0'></script>
<script type='text/javascript'
        src='https://nibozimoti.com/wp-content/themes/hometown-theme/js/specific/jssocials.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://nibozimoti.com/wp-content/themes/hometown-theme/js/pack-min.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://nibozimoti.com/wp-content/themes/hometown-theme/js/theme.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://nibozimoti.com/wp-includes/js/wp-embed.min.js?ver=4.9.8'></script>


</body>
</html>
<!--
Performance optimized by W3 Total Cache. Learn more: https://www.w3-edge.com/products/

Page Caching using redis (SSL caching disabled)

Served from: nibozimoti.com @ 2018-09-24 15:36:14 by W3 Total Cache
-->