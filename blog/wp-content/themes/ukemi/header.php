<?php
/**
 * Header Section
 * @package Ukemi Theme
*/
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <?php wp_head(); ?>
</head>
<body>

    <!-- Start Header
    ================================================== -->
    <header class="header">
        <nav class="navbar navbar-expand-lg p-0 navbar-custom">
            <div class="header-logo">
                <!-- <a class="navbar-brand d-flex align-items-center text-white bg-black" href="#"> -->
                    <img src="/images/logo.png" alt="logo">
                <!-- </a> -->
            </div>
            <div class="header-nav ml-auto">
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link page-scroll" href="https:\\ukemi.ninja">Home</a></li>
                        <li class="nav-item"><a class="nav-link page-scroll" href="https:\\ukemi.ninja\#about">About</a></li>
                        <li class="nav-item active"><a class="nav-link" href="https:\\ukemi.ninja\blog\index.php">Blog<span class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a class="nav-link page-scroll" href="https:\\ukemi.ninja\#news">News</a></li>
                        <li class="nav-item"><a class="nav-link page-scroll" href="https:\\ukemi.ninja\#contact">Contact</a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link header-follow" href="#SocialIcon"><span class="ti-sharethis"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="header-social d-flex align-items-center">
                <ul class="list-unstyled mb-0 list-inline header-social-inner">
                    <li class="list-inline-item d-none d-sm-inline-block">Follow Us:</li>
                    <li class="list-inline-item"><a href="https://fb.me/UkemiProject"><span class="d-none d-md-inline-block">Facebook</span><i class="fab fa-facebook-f ml-2"></i></a></li>
                    <li class="list-inline-item"><a href="https://twitter.com/UkemiProject"><span class="d-none d-md-inline-block">Twitter</span><i class="fab fa-twitter ml-2"></i></a></li>
                    <li class="list-inline-item"><a href="https://instagram.com/UkemiProject"><span class="d-none d-md-inline-block">Instagram</span><i class="fab fa-instagram ml-2"></i></a></li>
                </ul>
                <a class="header-follow-close d-flex justify-content-center align-items-center" href="#"><span class="ti-close"></span></a>
            </div>
            <div class="mobile-menu d-md-block d-lg-none">
                <a class="header-follow d-flex justify-content-center align-items-center" href="#"><span class="ti-sharethis"></span></a>
                <a class="navbar-toggler d-flex justify-content-center align-items-center" data-toggle="collapse" href="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bar1"></span>
                    <span class="bar2"></span>
                    <span class="bar3"></span>
                </a>
            </div>
        </nav>
    </header>
    <!-- End Header
    ================================================== -->