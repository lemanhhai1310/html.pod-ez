<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>POD-EZ - <?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/uikit-3.1.5/css/uikit.min.css">
    <link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/layout.css">
    <!--JS-->
    <script src="assets/jquery/jquery-3.3.1.js"></script>
    <script src="assets/uikit-3.1.5/js/uikit.min.js"></script>
    <script src="assets/uikit-3.1.5/js/uikit-icons.min.js"></script>
    <script src="assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script src="js/jquery.parallax-scroll.js"></script>
    <script src="js/typed.min.js"></script>
</head>
<body>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v3.2'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="2428809380682169"
     theme_color="#24892d">
</div>
<section id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden">
<?php include('menu_mobile1.php'); ?>
<header id="pod-header" class="uk-background-default" uk-sticky>
    <div class="uk-container">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

            <div class="uk-navbar-left">
                <a href="#my-id" class="uk-navbar-toggle uk-padding-remove-left uk-hidden@m" uk-toggle="">
                    <div id="m_nav_menu" class="m_nav menu">
                        <div class="m_nav_ham button_closed" id="m_ham_1"></div>
                        <div class="m_nav_ham button_closed" id="m_ham_2"></div>
                        <div class="m_nav_ham button_closed" id="m_ham_3"></div>
                    </div>
                </a>
                <a class="uk-navbar-item uk-logo" href="."><img src="imgs/logo.png" alt=""></a>
            </div>

            <div class="uk-navbar-center">
                <ul class="uk-navbar-nav uk-visible@m">
                    <li><a href="#">About</a></li>
                    <li><a href="#">features</a></li>
                    <li><a href="#">How it work</a></li>
                    <li><a href="faqs.php">faq</a></li>
                    <li><a href="#">sign in</a></li>
                </ul>
            </div>

            <div class="uk-navbar-right">

                <a href="#" class="uk-button pod-btn1 uk-button-default uk-button-large">Install PodEz</a>

            </div>

        </nav>
    </div>
</header>