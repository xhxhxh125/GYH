<?php
// TWITTER CONNECT STREAM CLASS
require_once '../../assets/vendor/revolution-slider/revolution/php/twitter/class-twitter.php';

// TWITTER USER
$twitter_account = "o_o_sevruk";

// API DATA
// Register App -> https://apps.twitter.com/
$consumer_key = "BqKdEicYA2bEhdbjFIR6gYikR";
$consumer_secret = "xYP2kZSHt1GU8Knwa8aL0VGtM9aBubmbaV1PUIf4UxBUxisjWp";
$access_token = "2344404669-hMbXGAsl59vMIyn6PBtkzVxMCpMIHW3hyDnfLYb";
$access_token_secret = "BGhM6S8vB4KNEP5Tjm2JJ7uzZkKWsiGv3fxriHFVyEZ2R";

// GET TWEETS
$twitter = new TP_twitter($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$tweets = $twitter->get_public_photos($twitter_account);
?>

<!DOCTYPE html>
<html lang="en" class="font-primary">
  <head>
    <title>Twitter Stream | Unify - Responsive Website Template</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Fav-->
    <link rel="shortcut icon" href="../../favicon.ico">

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto%3A700%2C300">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Raleway%3A400%2C800%2C500">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="../../assets/vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="../../assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/vendor/icon-etlinefont/style.css">
    <link rel="stylesheet" href="../../assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="../../assets/vendor/icon-line-pro/style.css">

    <link rel="stylesheet" href="../../assets/vendor/animate.css">
    <link rel="stylesheet" href="../../assets/vendor/slick-carousel/slick/slick.css">

    <link rel="stylesheet" href="../../assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="../../assets/vendor/hamburgers/hamburgers.min.css">

    <!-- CSS Unify -->
    <link rel="stylesheet" href="../../assets/css/unify.css">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="../../assets/vendor/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="../../assets/vendor/revolution-slider/revolution/css/settings.css">
    <link rel="stylesheet" href="../../assets/vendor/revolution-slider/revolution/css/layers.css">
    <link rel="stylesheet" href="../../assets/vendor/revolution-slider/revolution/css/navigation.css">
  </head>

  <body>
    <main>
      <!-- Header -->
      <header id="js-header" class="u-header u-header--static">
        <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10">
          <nav class="js-mega-menu navbar navbar-expand-lg">
            <div class="container">
              <!-- Responsive Toggle Button -->
              <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button"
                      aria-label="Toggle navigation"
                      aria-expanded="false"
                      aria-controls="navBar"
                      data-toggle="collapse"
                      data-target="#navBar">
                <span class="hamburger hamburger--slider">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
              </button>
              <!-- End Responsive Toggle Button -->

              <!-- Logo -->
              <a href="index.html" class="navbar-brand">
                <img src="../../assets/img/logo/logo-1.png" alt="Image Description">
              </a>
              <!-- End Logo -->

              <!-- Navigation -->
              <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg" id="navBar">
                <ul class="navbar-nav text-uppercase g-pos-rel g-font-weight-600 ml-auto">
                  <!-- Intro -->
                  <li class="nav-item g-mx-10--lg g-mx-15--xl">
                    <a href="index.html" class="nav-link g-py-7 g-px-0">Intro</a>
                  </li>
                  <!-- End Intro -->

                  <!-- Home -->
                  <li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-15--xl"
                      data-animation-in="fadeIn"
                      data-animation-out="fadeOut"
                      data-max-width="40%"
                      data-position="center">
                    <a id="mega-menu-home" class="nav-link g-py-7 g-px-0" href="#!" aria-haspopup="true" aria-expanded="false">Home
                      <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-7"></i>
                    </a>

                    <!-- Mega Menu -->
                    <div class="w-100 hs-mega-menu u-shadow-v11 font-weight-normal g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-mt-17 g-mt-7--lg--scrolling" aria-labelledby="mega-menu-home">
                      <div class="row align-items-stretch no-gutters">
                        <!-- Home (col) -->
                        <div class="col-lg-6">
                          <ul class="list-unstyled">
                            <li class="dropdown-item">
                              <a href="../../unify-main/home/home-page-1.html" class="nav-link">Home 1</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="../../unify-main/home/home-page-2.html" class="nav-link">Home 2</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="../../unify-main/home/home-page-3.html" class="nav-link">Home 3</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="../../unify-main/home/home-page-4.html" class="nav-link">Home 4</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="../../unify-main/home/home-page-5.html" class="nav-link">Home 5</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="../../unify-main/home/home-page-6.html" class="nav-link">Home 6</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="../../unify-main/home/home-page-7.html" class="nav-link">Home 7</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="../../unify-main/home/home-page-8.html" class="nav-link">Home 8</a>
                            </li>
                          </ul>
                        </div>
                        <!-- End Home (col) -->

                        <!-- Home (col) -->
                        <div class="col-lg-6 g-brd-left--lg g-brd-gray-light-v5">
                          <ul class="list-unstyled">
                            <li class="dropdown-item">
                              <a href="../../unify-main/home/home-page-9.html" class="nav-link">Home 9</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="../../unify-main/home/home-page-10.html" class="nav-link">Home 10</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="../../unify-main/home/home-page-11.html" class="nav-link">Home 11</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="../../unify-main/home/home-page-12.html" class="nav-link">Home 12</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="../../unify-main/home/home-page-13.html" class="nav-link">Home 13</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="../../unify-main/home/home-page-14.html" class="nav-link">Home 14</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="../../unify-main/home/home-page-15.html" class="nav-link">Home 15</a>
                            </li>
                          </ul>
                        </div>
                        <!-- End Home (col) -->
                      </div>
                    </div>
                    <!-- End Mega Menu -->
                  </li>
                  <!-- End Home -->

                  <!-- Pages -->
                  <li class="nav-item hs-has-sub-menu g-mx-10--lg g-mx-15--xl">
                    <a id="nav-link-pages" class="nav-link g-py-7 g-px-0" href="#!"
                       aria-haspopup="true"
                       aria-expanded="false"
                       aria-controls="nav-submenu-pages"
                    >Pages
                    </a>

                    <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-20 g-mt-10--lg--scrolling" id="nav-submenu-pages"
                        aria-labelledby="nav-link-pages">
                      <!-- About -->
                      <li class="dropdown-item hs-has-sub-menu">
                        <a id="nav-link--pages--about" class="nav-link" href="#!"
                           aria-haspopup="true"
                           aria-expanded="false"
                           aria-controls="nav-submenu--pages--about"
                        >About
                        </a>

                        <!-- Submenu (level 2) -->
                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--pages--about"
                            aria-labelledby="nav-link--pages--about">
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-about-1.html">About 1</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-about-2.html">About 2</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-about-3.html">About 3</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-about-4.html">About 4</a>
                          </li>
                          <li class="dropdown-divider"></li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-about-me-1.html">About me 1</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-about-me-2.html">About me 2</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-about-me-3.html">About me 3</a>
                          </li>
                        </ul>
                        <!-- End Submenu (level 2) -->
                      </li>
                      <!-- End About -->

                      <!-- Portfolios -->
                      <li class="dropdown-item hs-has-sub-menu">
                        <a id="nav-link--pages--portfolio" class="nav-link" href="#!"
                           aria-haspopup="true"
                           aria-expanded="false"
                           aria-controls="nav-submenu--pages--portfolio"
                        >Portfolios
                        </a>

                        <!-- Submenu (level 2) -->
                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 u-dropdown-col-2 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--pages--portfolio"
                            aria-labelledby="nav-link--pages--portfolio">
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-portfolio-case-study-1.html">Case Studies 1</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-portfolio-case-study-2.html">Case Studies 2</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-portfolio-single-item-1.html">Single item 1</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-portfolio-single-item-2.html">Single item 2</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-portfolio-single-item-3.html">Single item 3</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-portfolio-single-item-4.html">Single item 4</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-portfolio-single-item-5.html">Single item 5</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-portfolio-single-item-6.html">Single item 6</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-portfolio-single-item-7.html">Single item 7</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-portfolio-single-item-8.html">Single item 8</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-portfolio-single-item-9.html">Single item 9</a>
                          </li>
                        </ul>
                        <!-- End Submenu (level 2) -->
                      </li>
                      <!-- End Portfolios -->

                      <!-- Login &amp; Signup -->
                      <li class="dropdown-item hs-has-sub-menu">
                        <a id="nav-link--pages--login-signup" class="nav-link" href="#!"
                           aria-haspopup="true"
                           aria-expanded="false"
                           aria-controls="nav-submenu--pages--login-signup"
                        >Login &amp; Signup
                        </a>

                        <!-- Submenu (level 2) -->
                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 u-dropdown-col-2 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--pages--login-signup"
                            aria-labelledby="nav-link--pages--login-signup">
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-login-and-signup-1.html">Login &amp; Signup</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-signup-1.html">Signup 1</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-signup-2.html">Signup 2</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-signup-3.html">Signup 3</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-signup-4.html">Signup 4</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-signup-5.html">Signup 5</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-signup-6.html">Signup 6</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-signup-7.html">Signup 7</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-signup-8.html">Signup 8</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-signup-9.html">Signup 9</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-signup-10.html">Signup 10</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-signup-11.html">Signup 11</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-signup-12.html">Signup 12</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-login-1.html">login 1</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-login-2.html">Login 2</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-login-3.html">Login 3</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-login-4.html">Login 4</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-login-5.html">Login 5</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-login-6.html">Login 6</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-login-7.html">Login 7</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-login-8.html">Login 8</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-login-9.html">Login 9</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-login-10.html">Login 10</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-login-11.html">Login 11</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-login-12.html">Login 12</a>
                          </li>
                        </ul>
                        <!-- End Submenu (level 2) -->
                      </li>
                      <!-- End Login &amp; Signup -->

                      <!-- Services -->
                      <li class="dropdown-item hs-has-sub-menu">
                        <a id="nav-link--pages--services" class="nav-link" href="#!"
                           aria-haspopup="true"
                           aria-expanded="false"
                           aria-controls="nav-submenu--pages--services"
                        >Services
                        </a>

                        <!-- Submenu (level 2) -->
                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--pages--services"
                            aria-labelledby="nav-link--pages--services">
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-services-1.html">Services 1</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-services-2.html">Services 2</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-services-3.html">Services 3</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-services-4.html">Services 4</a>
                          </li>
                        </ul>
                        <!-- End Submenu (level 2) -->
                      </li>
                      <!-- End Services -->

                      <!-- Search results -->
                      <li class="dropdown-item hs-has-sub-menu">
                        <a id="nav-link--pages--search-result" class="nav-link" href="#!"
                           aria-haspopup="true"
                           aria-expanded="false"
                           aria-controls="nav-submenu--pages--search-result"
                        >Search results
                        </a>

                        <!-- Submenu (level 2) -->
                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--pages--search-result"
                            aria-labelledby="nav-link--pages--search-result">
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-search-results-grid-veiw-1.html">Grid View</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-search-results-grid-veiw-left-sidebar-1.html">Grid View
                              <span class="g-opacity-0_5">(with Sidebar)</span>
                            </a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-search-results-list-veiw-1.html">List View 1</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-search-results-list-veiw-2.html">List View 2</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-search-results-list-veiw-left-sidebar-1.html">List View
                              <span class="g-opacity-0_5">(with Sidebar)</span>
                            </a>
                          </li>
                        </ul>
                        <!-- End Submenu (level 2) -->
                      </li>
                      <!-- End Search results -->

                      <!-- Profiles -->
                      <li class="dropdown-item hs-has-sub-menu">
                        <a id="nav-link--pages--profile" class="nav-link" href="#!"
                           aria-haspopup="true"
                           aria-expanded="false"
                           aria-controls="nav-submenu--pages--profile"
                        >Profiles
                        </a>

                        <!-- Submenu (level 2) -->
                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 u-dropdown-col-2 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--pages--profile"
                            aria-labelledby="nav-link--pages--profile">
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-profile-main-1.html">Main</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-profile-profile-1.html">User</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-profile-projects-1.html">Projects</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-profile-comments-1.html">Comments</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-profile-history-1.html">History</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-profile-reviews-1.html">Reviews</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-profile-settings-1.html">Settings</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-profile-users-1.html">Contacts 1</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-profile-users-1-full-width.html">Contacts 1
                              <span class="g-opacity-0_5">(full width)</span>
                            </a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-profile-users-2.html">Contacts 2</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-profile-users-2-full-width.html">Contacts 2
                              <span class="g-opacity-0_5">(full width)</span>
                            </a>
                          </li>
                        </ul>
                        <!-- End Submenu (level 2) -->
                      </li>
                      <!-- End Profiles -->

                      <!-- Сontacts -->
                      <li class="dropdown-item hs-has-sub-menu">
                        <a id="nav-link--pages--contacts" class="nav-link" href="#!"
                           aria-haspopup="true"
                           aria-expanded="false"
                           aria-controls="nav-submenu--pages--contacts"
                        >Сontacts
                        </a>

                        <!-- Submenu (level 2) -->
                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 u-dropdown-col-2 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--pages--contacts"
                            aria-labelledby="nav-link--pages--contacts">
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-contacts-1.html">Сontacts 1</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-contacts-2.html">Сontacts 2</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-contacts-3.html">Сontacts 3</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-contacts-4.html">Сontacts 4</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-contacts-5.html">Сontacts 5</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-contacts-6.html">Сontacts 6</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-contacts-7.html">Сontacts 7</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-contacts-8.html">Сontacts 8</a>
                          </li>
                        </ul>
                        <!-- End Submenu (level 2) -->
                      </li>
                      <!-- End Сontacts -->

                      <!-- Jobs -->
                      <li class="dropdown-item hs-has-sub-menu">
                        <a id="nav-link--pages--jobs" class="nav-link" href="#!"
                           aria-haspopup="true"
                           aria-expanded="false"
                           aria-controls="nav-submenu--pages--jobs"
                        >Jobs
                        </a>

                        <!-- Submenu (level 2) -->
                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--pages--jobs"
                            aria-labelledby="nav-link--pages--jobs">
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-jobs-1.html">Jobs</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-jobs-description-right-sidebar-1.html">Jobs Description</a>
                          </li>
                        </ul>
                        <!-- End Submenu (level 2) -->
                      </li>
                      <!-- End Jobs -->

                      <!-- Pricing -->
                      <li class="dropdown-item">
                        <a class="nav-link" href="../../unify-main/pages/page-pricing-1.html">Pricing</a>
                      </li>
                      <!-- End Pricing -->

                      <!-- FAQ -->
                      <li class="dropdown-item hs-has-sub-menu">
                        <a id="nav-link--pages--faq" class="nav-link" href="#!"
                           aria-haspopup="true"
                           aria-expanded="false"
                           aria-controls="nav-submenu--pages--faq"
                        >FAQ
                        </a>

                        <!-- Submenu (level 2) -->
                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--pages--faq"
                            aria-labelledby="nav-link--pages--faq">
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-faq-1.html">FAQ 1</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-faq-2.html">FAQ 2</a>
                          </li>
                        </ul>
                        <!-- End Submenu (level 2) -->
                      </li>
                      <!-- End FAQ -->

                      <!-- Others -->
                      <li class="dropdown-item hs-has-sub-menu">
                        <a id="nav-link--pages--others" class="nav-link" href="#!"
                           aria-haspopup="true"
                           aria-expanded="false"
                           aria-controls="nav-submenu--pages--others"
                        >Others
                        </a>

                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--pages--others"
                            aria-labelledby="nav-link--pages--others">
                          <!-- Clients -->
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-clients-1.html">Clients</a>
                          </li>
                          <!-- End Clients -->

                          <!-- Terms -->
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-terms-1.html">Terms</a>
                          </li>
                          <!-- End Terms -->

                          <!-- Сookies -->
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-cookies-1.html">Сookies</a>
                          </li>
                          <!-- End Сookies -->

                          <!-- Invoice -->
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/pages/page-invoice-1.html">Invoice</a>
                          </li>
                          <!-- End Invoice -->

                          <!-- 404 -->
                          <li class="dropdown-item hs-has-sub-menu">
                            <a id="nav-link--pages--404" class="nav-link" href="#!"
                               aria-haspopup="true"
                               aria-expanded="false"
                               aria-controls="nav-submenu--pages--404"
                            >404
                            </a>

                            <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--pages--404"
                                aria-labelledby="nav-link--pages--404">
                              <li class="dropdown-item">
                                <a class="nav-link" href="../../specialty-pages/404/404-1.html">404 1</a>
                              </li>
                              <li class="dropdown-item">
                                <a class="nav-link" href="../../specialty-pages/404/404-1.html">404 2</a>
                              </li>
                            </ul>
                          </li>
                          <!-- End 404 -->

                          <!-- Coming Soon -->
                          <li class="dropdown-item hs-has-sub-menu">
                            <a id="nav-link--pages--coming-soon" class="nav-link" href="#!"
                               aria-haspopup="true"
                               aria-expanded="false"
                               aria-controls="nav-submenu--pages--coming-soon"
                            >Coming Soon
                            </a>

                            <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--pages--coming-soon"
                                aria-labelledby="nav-link--pages--coming-soon">
                              <li class="dropdown-item">
                                <a class="nav-link" href="../../specialty-pages/coming-soon/page-coming-soon-1.html">Coming Soon</a>
                              </li>
                            </ul>
                          </li>
                          <!-- End Coming Soon -->
                        </ul>
                      </li>
                      <!-- End Others -->
                    </ul>
                  </li>
                  <!-- End Pages -->

                  <!-- Blog -->
                  <li class="nav-item hs-has-sub-menu g-mx-10--lg g-mx-15--xl">
                    <a id="nav-link--blog" class="nav-link g-py-7 g-px-0" href="#!"
                       aria-haspopup="true"
                       aria-expanded="false"
                       aria-controls="nav-submenu--blog"
                    >Blog
                    </a>

                    <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-20 g-mt-10--lg--scrolling" id="nav-submenu--blog"
                        aria-labelledby="nav-link--blog">
                      <li class="dropdown-item hs-has-sub-menu">
                        <a id="nav-link--pages--blog--minimal" class="nav-link" href="#!"
                           aria-haspopup="true"
                           aria-expanded="false"
                           aria-controls="nav-submenu--pages--blog--minimal"
                        >Minimal
                        </a>

                        <!-- Submenu (level 2) -->
                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--pages--blog--minimal"
                            aria-labelledby="nav-link--pages--blog--minimal">
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-minimal-1.html">Minimal 1</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-minimal-1-left-sidebar.html">Minimal 1
                              <span class="g-opacity-0_5">(left sidebar)</span>
                            </a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-minimal-1-right-sidebar.html">Minimal 1
                              <span class="g-opacity-0_5">(right sidebar)</span>
                            </a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-minimal-2.html">Minimal 2</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-minimal-2-left-sidebar.html">Minimal 2
                              <span class="g-opacity-0_5">(left sidebar)</span>
                            </a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-minimal-2-right-sidebar.html">Minimal 2
                              <span class="g-opacity-0_5">(right sidebar)</span>
                            </a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-minimal-3.html">Minimal 3</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-minimal-3-left-sidebar.html">Minimal 3
                              <span class="g-opacity-0_5">(left sidebar)</span>
                            </a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-minimal-3-right-sidebar.html">Minimal 3
                              <span class="g-opacity-0_5">(right sidebar)</span>
                            </a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-minimal-4.html">Minimal 4</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-minimal-4-left-sidebar.html">Minimal 4
                              <span class="g-opacity-0_5">(left sidebar)</span>
                            </a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-minimal-4-right-sidebar.html">Minimal 4
                              <span class="g-opacity-0_5">(right sidebar)</span>
                            </a>
                          </li>
                        </ul>
                        <!-- End Submenu (level 2) -->
                      </li>

                      <li class="dropdown-item hs-has-sub-menu">
                        <a id="nav-link--pages--blog--grid-bg" class="nav-link" href="#!"
                           aria-haspopup="true"
                           aria-expanded="false"
                           aria-controls="nav-submenu--pages--blog--grid-bg"
                        >Grid Background
                        </a>

                        <!-- Submenu (level 2) -->
                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--pages--blog--grid-bg"
                            aria-labelledby="nav-link--pages--blog--grid-bg">
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-grid-background-overlay-2.html">Column 2</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-grid-background-overlay-left-sidebar.html">Column 2
                              <span class="g-opacity-0_5">(left sidebar)</span>
                            </a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-grid-background-overlay-right-sidebar.html">Column 2
                              <span class="g-opacity-0_5">(right sidebar)</span>
                            </a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-grid-background-overlay-3.html">Column 3</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-grid-background-overlay-3-fullwidth.html">Column 3
                              <span class="g-opacity-0_5">(full width)</span>
                            </a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-grid-background-overlay-4.html">Column 4</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-grid-background-overlay-4-fullwidth.html">Column 4
                              <span class="g-opacity-0_5">(full width)</span>
                            </a>
                          </li>
                        </ul>
                        <!-- End Submenu (level 2) -->
                      </li>

                      <li class="dropdown-item hs-has-sub-menu">
                        <a id="nav-link--pages--blog--grid-classic" class="nav-link" href="#!"
                           aria-haspopup="true"
                           aria-expanded="false"
                           aria-controls="nav-submenu--pages--blog--grid-classic"
                        >Grid Classic
                        </a>

                        <!-- Submenu (level 2) -->
                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--pages--blog--grid-classic"
                            aria-labelledby="nav-link--pages--blog--grid-classic">
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-grid-classic-2.html">Column 2</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-grid-classic-left-sidebar.html">Column 2
                              <span class="g-opacity-0_5">(left sidebar)</span>
                            </a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-grid-classic-right-sidebar.html">Column 2
                              <span class="g-opacity-0_5">(right sidebar)</span>
                            </a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-grid-classic-3.html">Column 3</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-grid-classic-3-fullwidth.html">Column 3
                              <span class="g-opacity-0_5">(full width)</span>
                            </a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-grid-classic-4.html">Column 4</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-grid-classic-4-fullwidth.html">Column 4
                              <span class="g-opacity-0_5">(full width)</span>
                            </a>
                          </li>
                        </ul>
                        <!-- End Submenu (level 2) -->
                      </li>

                      <li class="dropdown-item hs-has-sub-menu">
                        <a id="nav-link--pages--blog--grid-modern" class="nav-link" href="#!"
                           aria-haspopup="true"
                           aria-expanded="false"
                           aria-controls="nav-submenu--pages--blog--grid-modern"
                        >Grid Modern
                        </a>

                        <!-- Submenu (level 2) -->
                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--pages--blog--grid-modern"
                            aria-labelledby="nav-link--pages--blog--grid-modern">
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-grid-modern-1.html">Modern 1</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-grid-modern-2.html">Modern 2</a>
                          </li>
                        </ul>
                        <!-- End Submenu (level 2) -->
                      </li>

                      <li class="dropdown-item hs-has-sub-menu">
                        <a id="nav-link--pages--blog--grid-overlap" class="nav-link" href="#!"
                           aria-haspopup="true"
                           aria-expanded="false"
                           aria-controls="nav-submenu--pages--blog--grid-overlap"
                        >Grid Overlap
                        </a>

                        <!-- Submenu (level 2) -->
                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--pages--blog--grid-overlap"
                            aria-labelledby="nav-link--pages--blog--grid-overlap">
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-grid-overlap-2.html">Column 2</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-grid-overlap-left-sidebar.html">Column 2
                              <span class="g-opacity-0_5">(left sidebar)</span>
                            </a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-grid-overlap-right-sidebar.html">Column 2
                              <span class="g-opacity-0_5">(right sidebar)</span>
                            </a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-grid-overlap-3.html">Column 3</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-grid-overlap-3-fullwidth.html">Column 3
                              <span class="g-opacity-0_5">(full width)</span>
                            </a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-grid-overlap-4-fullwidth.html">Column 4
                              <span class="g-opacity-0_5">(full width)</span>
                            </a>
                          </li>
                        </ul>
                        <!-- End Submenu (level 2) -->
                      </li>

                      <li class="dropdown-item hs-has-sub-menu">
                        <a id="nav-link--pages--blog--masonry" class="nav-link" href="#!"
                           aria-haspopup="true"
                           aria-expanded="false"
                           aria-controls="nav-submenu--pages--blog--masonry"
                        >Masonry
                        </a>

                        <!-- Submenu (level 2) -->
                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--pages--blog--masonry"
                            aria-labelledby="nav-link--pages--blog--masonry">
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-masonry-col-2.html">Column 2</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-masonry-col-3.html">Column 3</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-masonry-col-3-fullwidth.html">Column 3
                              <span class="g-opacity-0_5">(full width)</span>
                            </a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-masonry-col-4.html">Column 4</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-masonry-col-4-fullwidth.html">Column 4
                              <span class="g-opacity-0_5">(full width)</span>
                            </a>
                          </li>
                        </ul>
                        <!-- End Submenu (level 2) -->
                      </li>

                      <li class="dropdown-item hs-has-sub-menu">
                        <a id="nav-link--pages--blog--minimal" class="nav-link" href="#!"
                           aria-haspopup="true"
                           aria-expanded="false"
                           aria-controls="nav-submenu--pages--blog--minimal"
                        >Single items
                        </a>

                        <!-- Submenu (level 2) -->
                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--pages--blog--single-item"
                            aria-labelledby="nav-link--pages--blog--single-item">
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-single-item-1.html">Single item 1</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/blog/blog-single-item-2.html">Single item 2</a>
                          </li>
                        </ul>
                        <!-- End Submenu (level 2) -->
                      </li>
                    </ul>
                  </li>
                  <!-- End Blog -->

                  <!-- Features -->
                  <li class="nav-item hs-has-sub-menu g-mx-10--lg g-mx-15--xl">
                    <a id="nav-link--features" class="nav-link g-py-7 g-px-0" href="#!"
                       aria-haspopup="true"
                       aria-expanded="false"
                       aria-controls="nav-submenu--features"
                    >Features
                    </a>

                    <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-20 g-mt-10--lg--scrolling" id="nav-submenu--features"
                        aria-labelledby="nav-link--features">
                      <li class="dropdown-item">
                        <a class="nav-link" href="../../unify-main/shortcodes/headers/index.html">Headers</a>
                      </li>
                      <li class="dropdown-item">
                        <a class="nav-link" href="../../unify-main/shortcodes/promo/shortcode-blocks-promo.html">Promo blocks</a>
                      </li>
                      <li class="dropdown-item hs-has-sub-menu">
                        <a id="nav-link--features--sliders" class="nav-link" href="#!"
                           aria-haspopup="true"
                           aria-expanded="false"
                           aria-controls="nav-submenu--features--sliders"
                        >Sliders
                          <span class="u-label g-rounded-3 g-font-size-10 g-bg-lightred g-ml-5">New</span>
                        </a>

                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--features--sliders"
                            aria-labelledby="nav-link--features--sliders">
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../revolution-slider/index.html">Revolution sliders</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../master-slider/index.html">Master sliders</a>
                          </li>
                        </ul>
                      </li>
                      <li class="dropdown-item hs-has-sub-menu">
                        <a id="nav-link--features--pop-ups" class="nav-link" href="#!"
                           aria-haspopup="true"
                           aria-expanded="false"
                           aria-controls="nav-submenu--features--pop-ups"
                        >Pop-ups
                        </a>

                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--features--pop-ups"
                            aria-labelledby="nav-link--features--pop-ups">
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/shortcodes/shortcode-base-lightbox.html">Lightbox</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/shortcodes/shortcode-base-modals.html">Modals</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/shortcodes/shortcode-blocks-gallery.html">Gallery</a>
                          </li>
                        </ul>
                      </li>
                      <li class="dropdown-item hs-has-sub-menu">
                        <a id="nav-link--features--maps" class="nav-link" href="#!"
                           aria-haspopup="true"
                           aria-expanded="false"
                           aria-controls="nav-submenu--features--maps"
                        >Maps
                        </a>

                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--features--maps"
                            aria-labelledby="nav-link--features--maps">
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/shortcodes/shortcode-base-google-maps.html">Google Maps</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/shortcodes/shortcode-base-maps-with-pins.html">Maps With Pins</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/shortcodes/shortcode-base-vector-maps.html">Vector Maps</a>
                          </li>
                        </ul>
                      </li>
                      <li class="dropdown-item hs-has-sub-menu">
                        <a id="nav-link--features--footers" class="nav-link" href="#!"
                           aria-haspopup="true"
                           aria-expanded="false"
                           aria-controls="nav-submenu--features--footers"
                        >Footers
                        </a>

                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--features--footers"
                            aria-labelledby="nav-link--features--footers">
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/shortcodes/footers/shortcode-blocks-footer-classic.html">Classic Footers</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/shortcodes/footers/shortcode-blocks-footer-contact-forms.html">Contact Forms</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/shortcodes/footers/shortcode-blocks-footer-maps.html">Footers Maps</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../unify-main/shortcodes/footers/shortcode-blocks-footer-modern.html">Modern Footers</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <!-- End Features -->

                  <!-- Shortcodes -->
                  <li class="nav-item g-mx-10--lg g-mx-15--xl">
                    <a href="../../unify-main/shortcodes/index.html" class="nav-link g-py-7 g-px-0">Shortcodes</a>
                  </li>
                  <!-- End Shortcodes -->

                  <!-- Demos -->
                  <li class="nav-item hs-has-sub-menu g-mx-10--lg g-mx-15--xl">
                    <a id="nav-link-demos" class="nav-link g-py-7 g-px-0" href="#!"
                       aria-haspopup="true"
                       aria-expanded="false"
                       aria-controls="nav-submenu-demos"
                    >Demos
                    </a>

                    <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-20 g-mt-10--lg--scrolling" id="nav-submenu-demos"
                        aria-labelledby="nav-link-demos">
                      <li class="dropdown-item hs-has-sub-menu">
                        <a id="nav-link--demos--one-page" class="nav-link" href="#!"
                           aria-haspopup="true"
                           aria-expanded="false"
                           aria-controls="nav-submenu--demos--one-page"
                        >One Pages
                        </a>

                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 u-dropdown-col-2 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--demos--one-page"
                            aria-labelledby="nav-link--demos--one-page">
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../one-pages/corporate/index.html">Corporate
                              <span class="u-label g-rounded-3 g-font-size-10 g-bg-lightred g-ml-5">New</span>
                            </a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../one-pages/accounting/index.html">Accounting</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../one-pages/agency/index.html">Agency</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../one-pages/app/index.html">App</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../one-pages/architecture/index.html">Architecture</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../one-pages/business/index.html">Business</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../one-pages/charity/index.html">Charity</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../one-pages/construction/index.html">Construction</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../one-pages/courses/index.html">Courses</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../one-pages/event/index.html">Event</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../one-pages/gym/index.html">GYM</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../one-pages/lawyer/index.html">Lawyer</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../one-pages/music/index.html">Music</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../one-pages/photography/index.html">Photography</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../one-pages/real-estate/index.html">Real Estate</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../one-pages/restaurant/index.html">Restaurant</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../one-pages/shipping/index.html">Shipping</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../one-pages/spa/index.html">Spa</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../one-pages/travel/index.html">Travel</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../one-pages/wedding/index.html">Wedding</a>
                          </li>
                        </ul>
                      </li>
                      <li class="dropdown-item hs-has-sub-menu">
                        <a id="nav-link--demos--e-commerce" class="nav-link" href="#!"
                           aria-haspopup="true"
                           aria-expanded="false"
                           aria-controls="nav-submenu--demos--e-commerce"
                        >E-Commerce
                        </a>

                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--demos--e-commerce"
                            aria-labelledby="nav-link--demos--e-commerce">
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../e-commerce/index.html">Main Page</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../e-commerce/page-grid-filter-1.html">Grid Filter</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../e-commerce/page-list-filter-1.html">List Filter</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../e-commerce/page-product-1.html">Product</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../e-commerce/page-checkout-1.html">Сheckout</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../e-commerce/page-login-1.html">Login</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../e-commerce/page-signup-1.html">Signup</a>
                          </li>
                        </ul>
                      </li>
                      <li class="dropdown-item hs-has-sub-menu">
                        <a id="nav-link--demos--blog-magazine" class="nav-link" href="#!"
                           aria-haspopup="true"
                           aria-expanded="false"
                           aria-controls="nav-submenu--demos--blog-magazine"
                        >Blogs &amp; Magazines
                        </a>

                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--demos--blog-magazine"
                            aria-labelledby="nav-link--demos--blog-magazine">
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../blog-magazine/classic/bm-classic-home-1.html">Home</a>
                          </li>
                          <li class="dropdown-item">
                            <a class="nav-link" href="../../blog-magazine/classic/bm-classic-single-1.html">Single</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <!-- End Demos -->
                </ul>
              </div>
              <!-- End Navigation -->

              <div class="d-inline-block g-hidden-xs-down g-pos-rel g-valign-middle g-pl-30 g-pl-0--lg">
                <a class="btn u-btn-outline-primary g-font-size-13 text-uppercase g-py-10 g-px-15" href="https://wrapbootstrap.com/theme/unify-responsive-website-template-WB0412697?ref=htmlstream" target="_blank">Purchase now</a>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- End Header -->

      <div class="rev_slider_wrapper">
        <div id="rev_slider" class="rev_slider fullwidthabanner" style="display: none;"
             data-version="5.0">
          <ul>
            <?php foreach ($tweets as $tweet):
              $image_url_array = TP_twitter::array_find_element_by_key("media", $tweet);
              $image_url_large = TP_twitter::array_find_element_by_key("large", $image_url_array);
              $image_url = array(TP_twitter::array_find_element_by_key("media_url", $image_url_array), TP_twitter::array_find_element_by_key("w", $image_url_large), TP_twitter::array_find_element_by_key("h", $image_url_large)); ?>
              <li data-index="rs-<?php echo $tweet['id']; ?>"
                  data-transition="scaledownfromleft"
                  data-slotamount="default"
                  data-easein="default"
                  data-easeout="default"
                  data-masterspeed="1500"
                  data-thumb="<?php echo $image_url[0]; ?>"
                  data-rotate="0"
                  data-fstransition="fade"
                  data-fsmasterspeed="1500"
                  data-fsslotamount="7"
                  data-saveperformance="off"
                  data-param1=" <?php echo $tweet["user"]["screen_name"]; ?> - <?php $date = new DateTime($tweet['created_at']);
                  echo $date->format('F d, Y'); ?>"
                  data-param2="<?php echo $tweet['text']; ?>">
                <img class="rev-slidebg" src="assets/img/dummy.png" alt="Image description"
                     data-lazyload="<?php echo $image_url[0]; ?>"
                     data-bgposition="center center"
                     data-bgfit="contain"
                     data-bgrepeat="no-repeat">

                <!-- LAYER NR. 1 -->
                <div id="slide-<?php echo $tweet['id']; ?>-layer-6" class="tp-caption Twitter-Content" style="z-index: 5; min-width: 720px; max-width: 720px; min-height: 210px; max-height: 210px; white-space: normal; font-size: 26px; line-height: 32px; font-weight: 300; color: rgba(41, 47, 51, 1); font-family: Roboto; background-color: rgba(255, 255, 255, 1); padding: 30px 30px 70px 30px; border-radius: 0;"
                     data-x="10"
                     data-y="bottom"
                     data-voffset="10"
                     data-width="['720']"
                     data-height="['210']"
                     data-transform_idle="o:1;"
                     data-transform_in="y:[110%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                     data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                     data-start="500"
                     data-splitin="none"
                     data-splitout="none"
                     data-basealign="slide"
                     data-responsive_offset="off"
                     data-end="bytrigger"
                     data-lasttriggerstate="reset"><?php echo TP_twitter::makeClickableLinks($tweet['text']); ?>
                </div>

                <!-- LAYER NR. 2 -->
                <div id="slide-<?php echo $tweet['id']; ?>-layer-4" class="tp-caption Twitter-Retweet" style="z-index: 6; white-space: nowrap; font-size: 15px; line-height: 22px; font-weight: 500; color: rgba(136, 153, 166, 1); font-family: Roboto; background-color: rgba(255, 255, 255, 0); border-radius: 0;"
                     data-x="40"
                     data-y="bottom" data-voffset="30"
                     data-width="['auto']"
                     data-height="['auto']"
                     data-transform_idle="o:1;tO:-20% 50%;"
                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                     data-transform_out="y:50px;opacity:0;s:500;e:Power1.easeInOut;s:500;e:Power1.easeInOut;"
                     data-start="850"
                     data-splitin="none"
                     data-splitout="none"
                     data-basealign="slide"
                     data-responsive_offset="off"
                     data-responsive="off"
                     data-end="bytrigger"
                     data-lasttriggerstate="reset">
                  <i class="fa fa-retweet"></i> <?php echo $tweet['retweet_count']; ?>
                </div>

                <!-- LAYER NR. 3 -->
                <div id="slide-<?php echo $tweet['id']; ?>-layer-1" class="tp-caption Twitter-Favorites" style="z-index: 7; white-space: nowrap; font-size: 15px; line-height: 22px; font-weight: 500; color: rgba(136, 153, 166, 1); font-family: Roboto; background-color: rgba(255, 255, 255, 0); border-radius: 0;"
                     data-x="115"
                     data-y="bottom"
                     data-voffset="30"
                     data-width="['auto']"
                     data-height="['auto']"
                     data-transform_idle="o:1;tO:-20% 50%;"
                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                     data-transform_out="y:50px;opacity:0;s:500;e:Power1.easeInOut;s:500;e:Power1.easeInOut;"
                     data-start="850"
                     data-splitin="none"
                     data-splitout="none"
                     data-basealign="slide"
                     data-responsive_offset="off"
                     data-responsive="off"
                     data-end="bytrigger"
                     data-lasttriggerstate="reset">
                  <i class="fa-icon-star"></i> <?php echo $tweet['favorite_count']; ?>
                </div>

                <!-- LAYER NR. 4 -->
                <a id="slide-<?php echo $tweet['id']; ?>-layer-2" class="tp-caption Twitter-Link" href="https://twitter.com/<?php echo $twitter_account; ?>/status/<?php echo $tweet['id']; ?>" target="_blank" style="z-index: 8; white-space: nowrap; font-size: 15px; line-height: 15px; font-weight: 500; color: rgba(135, 153, 165, 1); font-family: Roboto; text-align: center; background-color: rgba(255, 255, 255, 1); padding: 11px 11px 9px 11px; border-radius: 30px;"
                   data-x="185"
                   data-y="bottom"
                   data-voffset="24"
                   data-width="['auto']"
                   data-height="['auto']"
                   data-transform_idle="o:1;tO:-20% 50%;"
                   data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:500;e:Power1.easeInOut;"
                   data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(0, 132, 180, 1.00);cursor:pointer;"
                   data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                   data-transform_out="y:50px;opacity:0;s:500;e:Power1.easeInOut;s:500;e:Power1.easeInOut;"
                   data-start="850"
                   data-splitin="none"
                   data-splitout="none"
                   data-actions=''
                   data-basealign="slide"
                   data-responsive_offset="off"
                   data-responsive="off"
                   data-end="bytrigger"
                   data-lasttriggerstate="reset">
                  <i class="fa-icon-chain"></i>
                </a>

                <!-- LAYER NR. 5 -->
                <div id="slide-<?php echo $tweet['id']; ?>-layer-8" class="tp-caption Twitter-Link" style="z-index: 9; font-size: 15px; line-height: 15px; color: rgba(135, 153, 165, 1); font-family: Roboto; text-align: center; background-color: rgba(255, 255, 255, 1); padding: 10px 11px 9px 11px; border-radius: 50px;"
                     data-x="10"
                     data-y="10"
                     data-width="['auto']"
                     data-height="['auto']"
                     data-transform_idle="o:1;tO:-20% 50%;"
                     data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:500;e:Power1.easeInOut;"
                     data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(0, 132, 180, 1.00);br:30px 30px 30px 30px;cursor:pointer;"
                     data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                     data-transform_out="opacity:0;s:1000;e:Power1.easeInOut;s:1000;e:Power1.easeInOut;"
                     data-start="850"
                     data-splitin="none"
                     data-splitout="none"
                     data-actions='[
                       {"event":"click","action":"togglelayer","layerstatus":"visible","layer":"slide-<?php echo $tweet['id']; ?>-layer-6"},
                       {"event":"click","action":"togglelayer","layerstatus":"visible","layer":"slide-<?php echo $tweet['id']; ?>-layer-4"},
                       {"event":"click","action":"togglelayer","layerstatus":"visible","layer":"slide-<?php echo $tweet['id']; ?>-layer-1"},
                       {"event":"click","action":"togglelayer","layerstatus":"visible","layer":"slide-<?php echo $tweet['id']; ?>-layer-2"}
                     ]'
                     data-basealign="slide"
                     data-responsive_offset="off"
                     data-responsive="off">
                  <i class="fa fa-arrows-alt"></i>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>

          <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
      </div>

      <!-- About -->
      <section class="g-pt-100 g-pb-100">
        <div class="container">
          <!-- Image, Text Block -->
          <div class="row d-flex align-items-lg-center flex-wrap g-mb-60 g-mb-0--lg">
            <div class="col-md-6 col-lg-8">
              <img class="img-fluid rounded" src="../../assets/img-temp/900x600/img1.jpg" alt="Image Description">
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="g-mt-minus-30 g-mt-0--md g-ml-minus-100--lg">
                <div class="g-mb-20">
                  <h2 class="g-color-black g-font-weight-600 g-font-size-25 g-font-size-35--lg g-line-height-1_2 mb-4">Finding the
                    <br>
                    Perfect Product
                  </h2>
                  <p class="g-font-size-16">This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key.</p>
                </div>
                <a class="btn u-btn-primary g-brd-2 g-brd-white g-font-size-13 g-rounded-50 g-pl-20 g-pr-15 g-py-9" href="#!">
                  More products
                  <span class="align-middle u-icon-v3 g-width-16 g-height-16 g-color-black g-bg-white g-font-size-11 rounded-circle ml-3">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <!-- End Image, Text Block -->
        </div>

        <div class="container">
          <!-- Image, Text Block -->
          <div class="row d-flex justify-content-between align-items-lg-center flex-wrap g-mt-minus-50--lg">
            <div class="col-md-6 flex-md-unordered">
              <div class="g-brd-around--md g-brd-10 g-brd-white rounded">
                <img class="img-fluid w-100 rounded" src="../../assets/img-temp/600x450/img1.jpg" alt="Image Description">
              </div>
            </div>
            <div class="col-md-6 col-lg-4 ml-auto flex-md-first">
              <div class="g-mt-minus-30 g-mt-0--md g-ml-minus-100--lg">
                <div class="g-mb-20">
                  <h2 class="g-color-black g-font-weight-600 g-font-size-25 g-font-size-35--lg g-line-height-1_2 mb-4">More than
                    <br>
                    a Stunning Look
                  </h2>
                  <p class="g-font-size-16">This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key.</p>
                </div>
                <a class="btn u-btn-primary g-brd-2 g-brd-white g-font-size-13 g-rounded-50 g-pl-20 g-pr-15 g-py-9" href="#!">
                  Read more
                  <span class="align-middle u-icon-v3 g-width-16 g-height-16 g-color-black g-bg-white g-font-size-11 rounded-circle ml-3">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <!-- End Image, Text Block -->
        </div>
      </section>
      <!-- End About -->

      <!-- Icon Blocks -->
      <section class="g-bg-secondary">
        <div class="container g-pt-100 g-pb-130">
          <!-- Icon Blocks -->
          <div class="row no-gutters">
            <div class="col-sm-6 col-lg-3">
              <div class="g-pr-40 g-mt-20">
                <div class="g-mb-30">
                  <h2 class="h2 g-color-black g-font-weight-600 g-line-height-1_2 mb-4">What can
                    <br>
                    we provide?
                  </h2>
                  <p class="g-font-weight-300 g-font-size-16">The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-9">
              <div class="js-carousel"
                   data-infinite="true"
                   data-slides-show="3"
                   data-slides-scroll="3"
                   data-center-mode="true"
                   data-center-padding="1px"
                   data-pagi-classes="u-carousel-indicators-v1 g-absolute-centered--x g-bottom-minus-30"
                   data-responsive='[{
                     "breakpoint": 992,
                     "settings": {
                       "slidesToShow": 2
                     }
                   }, {
                     "breakpoint": 576,
                     "settings": {
                       "slidesToShow": 1
                     }
                   }]'>
                <div class="js-slide">
                  <!-- Icon Blocks -->
                  <div class="u-shadow-v21--hover g-brd-around g-brd-gray-light-v3 g-brd-left-none g-brd-transparent--hover g-bg-white--hover g-transition-0_3 g-cursor-pointer g-px-30 g-pt-30 g-pb-50 g-ml-minus-1">
                    <div class="mb-4">
                      <span class="d-block g-color-gray-dark-v4 g-font-weight-700 text-right mb-3">01</span>
                      <span class="u-icon-v3 u-shadow-v19 g-bg-white g-color-primary rounded-circle mb-4">
                        <i class="icon-education-087 u-line-icon-pro"></i>
                      </span>
                      <h3 class="h5 g-color-black g-font-weight-600 mb-3">Creative</h3>
                      <p>This is where we sit down, grab a cup of coffee and dial in the details.</p>
                    </div>
                    <a class="g-brd-bottom g-brd-gray-dark-v5 g-brd-primary--hover g-color-gray-dark-v5 g-color-primary--hover g-font-weight-600 g-font-size-12 text-uppercase g-text-underline--none--hover" href="#!">Read more</a>
                  </div>
                  <!-- End Icon Blocks -->
                </div>

                <div class="js-slide">
                  <!-- Icon Blocks -->
                  <div class="u-shadow-v21--hover g-brd-around g-brd-gray-light-v3 g-brd-left-none g-brd-transparent--hover g-bg-white--hover g-transition-0_3 g-cursor-pointer g-px-30 g-pt-30 g-pb-50 g-ml-minus-1">
                    <div class="mb-4">
                      <span class="d-block g-color-gray-dark-v4 g-font-weight-700 text-right mb-3">02</span>
                      <span class="u-icon-v3 u-shadow-v19 g-bg-white g-color-primary rounded-circle mb-4">
                        <i class="icon-education-035 u-line-icon-pro"></i>
                      </span>
                      <h3 class="h5 g-color-black g-font-weight-600 mb-3">Features</h3>
                      <p>This is where we sit down, grab a cup of coffee and dial in the details.</p>
                    </div>
                    <a class="g-brd-bottom g-brd-gray-dark-v5 g-brd-primary--hover g-color-gray-dark-v5 g-color-primary--hover g-font-weight-600 g-font-size-12 text-uppercase g-text-underline--none--hover" href="#!">Read more</a>
                  </div>
                  <!-- End Icon Blocks -->
                </div>

                <div class="js-slide">
                  <!-- Icon Blocks -->
                  <div class="u-shadow-v21--hover g-brd-around g-brd-gray-light-v3 g-brd-left-none g-brd-transparent--hover g-bg-white--hover g-transition-0_3 g-cursor-pointer g-px-30 g-pt-30 g-pb-50 g-ml-minus-1">
                    <div class="mb-4">
                      <span class="d-block g-color-gray-dark-v4 g-font-weight-700 text-right mb-3">03</span>
                      <span class="u-icon-v3 u-shadow-v19 g-bg-white g-color-primary rounded-circle mb-4">
                        <i class="icon-education-141 u-line-icon-pro"></i>
                      </span>
                      <h3 class="h5 g-color-black g-font-weight-600 mb-3">Responsive</h3>
                      <p>This is where we sit down, grab a cup of coffee and dial in the details.</p>
                    </div>
                    <a class="g-brd-bottom g-brd-gray-dark-v5 g-brd-primary--hover g-color-gray-dark-v5 g-color-primary--hover g-font-weight-600 g-font-size-12 text-uppercase g-text-underline--none--hover" href="#!">Read more</a>
                  </div>
                  <!-- End Icon Blocks -->
                </div>

                <div class="js-slide">
                  <!-- Icon Blocks -->
                  <div class="u-shadow-v21--hover g-brd-around g-brd-gray-light-v3 g-brd-left-none g-brd-transparent--hover g-bg-white--hover g-transition-0_3 g-cursor-pointer g-px-30 g-pt-30 g-pb-50 g-ml-minus-1">
                    <div class="mb-4">
                      <span class="d-block g-color-gray-dark-v4 g-font-weight-700 text-right mb-3">04</span>
                      <span class="u-icon-v3 u-shadow-v19 g-bg-white g-color-primary rounded-circle mb-4">
                        <i class="icon-finance-256 u-line-icon-pro"></i>
                      </span>
                      <h3 class="h5 g-color-black g-font-weight-600 mb-3">Code</h3>
                      <p>This is where we sit down, grab a cup of coffee and dial in the details.</p>
                    </div>
                    <a class="g-brd-bottom g-brd-gray-dark-v5 g-brd-primary--hover g-color-gray-dark-v5 g-color-primary--hover g-font-weight-600 g-font-size-12 text-uppercase g-text-underline--none--hover" href="#!">Read more</a>
                  </div>
                  <!-- End Icon Blocks -->
                </div>
              </div>
            </div>
          </div>
          <!-- End Icon Blocks -->
        </div>
      </section>
      <!-- End Icon Blocks -->

      <!-- Mockup Block -->
      <section class="container g-py-100">
        <div class="text-center g-mb-50">
          <h2 class="h1 g-color-black g-font-weight-600">Multifanctional Magic</h2>
          <p class="lead">This is where we begin to visualize your napkin sketches and make them into pixels.</p>
        </div>

        <div class="row">
          <div class="col-md-3 g-mb-30">
            <span class="u-icon-v3 g-color-cyan g-bg-cyan-opacity-0_1 rounded-circle g-mb-25">
              <i class="icon-education-089 u-line-icon-pro"></i>
            </span>
            <div class="d-inline-block g-width-70 g-height-2 g-bg-cyan g-pos-rel g-top-5 g-right-minus-25 g-mr-minus-20"></div>
            <h2 class="h5 g-color-black g-font-weight-600 mb-3">Design is Functional</h2>
            <p>Now that we've aligned the details, it's time to get things mapped out and organized.</p>
          </div>

          <div class="col-md-6 g-mb-30">
            <img class="img-fluid" src="../../assets/img-temp/899x631/img1.png" alt="Image Description">
          </div>

          <div class="col-md-3 mt-auto g-mb-30">
            <div class="d-inline-block g-width-70 g-height-2 g-bg-red g-pos-rel g-top-5 g-left-minus-25 g-mr-minus-20"></div>
            <span class="u-icon-v3 g-color-red g-bg-red-opacity-0_1 rounded-circle g-mb-25">
              <i class="icon-education-088 u-line-icon-pro"></i>
            </span>
            <h2 class="h5 g-color-black g-font-weight-600 mb-3">More than 200+ features</h2>
            <p>We aim high at being focused on building relationships with our clients and community.</p>
          </div>
        </div>
      </section>
      <!-- End Mockup Block -->

      <!-- Blog Grid Blocks -->
      <div class="g-bg-secondary">
        <div class="container g-pt-100 g-pb-70">
          <div class="text-center g-mb-50">
            <h2 class="h1 g-color-black g-font-weight-600">Daily News</h2>
            <p class="lead">Follow the latest news, blogs and articles.</p>
          </div>

          <div class="masonry-grid row">
            <div class="masonry-grid-sizer col-sm-1"></div>

            <div class="masonry-grid-item col-sm-12 col-lg-8 g-mb-30">
              <!-- Blog Grid Modern Blocks -->
              <article class="row align-items-stretch no-gutters u-shadow-v21 u-shadow-v21--hover g-transition-0_3">
                <div class="col-md-6 g-bg-white g-rounded-left-5">
                  <div class="g-pa-60">
                    <ul class="list-inline g-color-gray-dark-v4 g-font-weight-600 g-font-size-12">
                      <li class="list-inline-item mr-0">Alex Teseira</li>
                      <li class="list-inline-item mx-2">&#183;</li>
                      <li class="list-inline-item">5 June 2017</li>
                    </ul>

                    <h2 class="h5 g-color-black g-font-weight-600 mb-4">
                      <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" href="#!">Announcing a free plan for small teams</a>
                    </h2>
                    <p class="g-color-gray-dark-v4 g-line-height-1_8 mb-4">At Wake, our mission has always been focused on bringing openness and transparency to the design process.</p>

                    <ul class="list-inline g-font-size-12 mb-0">
                      <li class="list-inline-item g-mb-10">
                        <a class="u-tags-v1 g-color-lightred g-bg-lightred-opacity-0_1 g-bg-lightred--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15" href="#!">Start-Up</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6 g-bg-size-cover g-bg-pos-center g-min-height-300 g-rounded-right-5" data-bg-img-src="../../assets/img-temp/400x500/img1.jpg"></div>
              </article>
              <!-- End Blog Grid Modern Blocks -->
            </div>

            <div class="masonry-grid-item col-sm-6 col-lg-4 g-mb-30">
              <!-- Blog Grid Modern Blocks -->
              <article class="u-shadow-v21 u-shadow-v21--hover g-transition-0_3">
                <img class="img-fluid w-100 g-rounded-top-5" src="../../assets/img-temp/400x270/img1.jpg" alt="Image Description">
                <div class="g-bg-white g-pa-30 g-rounded-bottom-5">
                  <ul class="list-inline g-color-gray-dark-v4 g-font-weight-600 g-font-size-12">
                    <li class="list-inline-item mr-0">Alex Teseira</li>
                    <li class="list-inline-item mx-2">&#183;</li>
                    <li class="list-inline-item">7 June 2017</li>
                  </ul>

                  <h2 class="h5 g-color-black g-font-weight-600 mb-4">
                    <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" href="#!">Exclusive interview with InVision's CEO</a>
                  </h2>

                  <ul class="list-inline g-font-size-12 mb-0">
                    <li class="list-inline-item g-mb-10">
                      <a class="u-tags-v1 g-color-teal g-bg-teal-opacity-0_1 g-bg-teal--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15" href="#!">Art</a>
                    </li>
                    <li class="list-inline-item g-mb-10">
                      <a class="u-tags-v1 g-color-yellow g-bg-yellow-opacity-0_1 g-bg-yellow--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15" href="#!">Design</a>
                    </li>
                  </ul>
                </div>
              </article>
              <!-- End Blog Grid Modern Blocks -->
            </div>

            <div class="masonry-grid-item col-sm-6 col-lg-4 g-mb-30">
              <!-- Blog Grid Modern Blocks -->
              <article class="u-shadow-v21 u-shadow-v21--hover g-transition-0_3">
                <img class="img-fluid w-100 g-rounded-top-5" src="../../assets/img-temp/400x270/img2.jpg" alt="Image Description">
                <div class="g-bg-white g-pa-30 g-rounded-bottom-5">
                  <ul class="list-inline g-color-gray-dark-v4 g-font-weight-600 g-font-size-12">
                    <li class="list-inline-item mr-0">Alex Teseira</li>
                    <li class="list-inline-item mx-2">&#183;</li>
                    <li class="list-inline-item">4 June 2017</li>
                  </ul>

                  <h2 class="h5 g-color-black g-font-weight-600 mb-4">
                    <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" href="#!">Accessibility - Apple</a>
                  </h2>

                  <ul class="list-inline g-font-size-12 mb-0">
                    <li class="list-inline-item g-mb-10">
                      <a class="u-tags-v1 g-color-bluegray g-bg-bluegray-opacity-0_1 g-bg-bluegray--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15" href="#!">Apple</a>
                    </li>
                  </ul>
                </div>
              </article>
              <!-- End Blog Grid Modern Blocks -->
            </div>

            <div class="masonry-grid-item col-sm-6 col-lg-4 g-mb-30">
              <!-- Blog Grid Modern Blocks -->
              <article class="u-shadow-v21 u-shadow-v21--hover g-transition-0_3 g-bg-primary text-center g-rounded-5 g-pa-30 g-py-100">
                <span class="g-color-white-opacity-0_8 g-font-size-60 g-line-height-0">
                  &#8220;
                </span>
                <h2 class="h3 g-color-white g-font-weight-600 mb-4">In the future, design principles won’t be about design</h2>
                <h3 class="g-color-white-opacity-0_8 g-font-size-13 text-uppercase">Alex Teseira</h3>

                <a class="g-link-overlay g-z-index-2" href="#!"></a>
              </article>
              <!-- End Blog Grid Modern Blocks -->
            </div>

            <div class="masonry-grid-item col-sm-6 col-lg-4 g-mb-30">
              <!-- Blog Grid Modern Blocks -->
              <article class="u-shadow-v21 u-shadow-v21--hover g-transition-0_3">
                <img class="img-fluid w-100 g-rounded-top-5" src="../../assets/img-temp/400x270/img3.jpg" alt="Image Description">
                <div class="g-bg-white g-pa-30 g-rounded-bottom-5">
                  <ul class="list-inline g-color-gray-dark-v4 g-font-weight-600 g-font-size-12">
                    <li class="list-inline-item mr-0">Alex Teseira</li>
                    <li class="list-inline-item mx-2">&#183;</li>
                    <li class="list-inline-item">29 May 2017</li>
                  </ul>

                  <h2 class="h5 g-color-black g-font-weight-600 mb-4">
                    <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" href="#!">Basic Patterns of Mobile Navigation</a>
                  </h2>

                  <ul class="list-inline g-font-size-12 mb-0">
                    <li class="list-inline-item g-mb-10">
                      <a class="u-tags-v1 g-color-deeporange g-bg-deeporange-opacity-0_1 g-bg-deeporange--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15" href="#!">Mobile</a>
                    </li>
                    <li class="list-inline-item g-mb-10">
                      <a class="u-tags-v1 g-color-teal g-bg-teal-opacity-0_1 g-bg-teal--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15" href="#!">Pattern</a>
                    </li>
                  </ul>
                </div>
              </article>
              <!-- End Blog Grid Modern Blocks -->
            </div>

            <div class="masonry-grid-item col-sm-6 col-lg-4 g-mb-30">
              <!-- Blog Grid Modern Blocks -->
              <article class="u-shadow-v21 u-shadow-v21--hover g-transition-0_3">
                <img class="img-fluid w-100 g-rounded-top-5" src="../../assets/img-temp/400x270/img7.jpg" alt="Image Description">
                <div class="g-bg-white g-pa-30 g-rounded-bottom-5">
                  <ul class="list-inline g-color-gray-dark-v4 g-font-weight-600 g-font-size-12">
                    <li class="list-inline-item mr-0">Alex Teseira</li>
                    <li class="list-inline-item mx-2">&#183;</li>
                    <li class="list-inline-item">1 June 2017</li>
                  </ul>

                  <h2 class="h5 g-color-black g-font-weight-600 mb-4">
                    <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" href="#!">#pillow is the color</a>
                  </h2>

                  <ul class="list-inline g-font-size-12 mb-0">
                    <li class="list-inline-item g-mb-10">
                      <a class="u-tags-v1 g-color-primary g-bg-primary-opacity-0_1 g-bg-primary--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15" href="#!">HTML</a>
                    </li>
                  </ul>
                </div>
              </article>
              <!-- End Blog Grid Modern Blocks -->
            </div>

            <div class="masonry-grid-item col-sm-6 col-lg-4 g-mb-30">
              <!-- Blog Grid Modern Blocks -->
              <article class="u-shadow-v21 u-shadow-v21--hover g-transition-0_3">
                <img class="img-fluid w-100 g-rounded-top-5" src="../../assets/img-temp/400x270/img4.jpg" alt="Image Description">
                <div class="g-bg-white g-pa-30 g-rounded-bottom-5">
                  <ul class="list-inline g-color-gray-dark-v4 g-font-weight-600 g-font-size-12">
                    <li class="list-inline-item mr-0">Alex Teseira</li>
                    <li class="list-inline-item mx-2">&#183;</li>
                    <li class="list-inline-item">1 June 2017</li>
                  </ul>

                  <h2 class="h5 g-color-black g-font-weight-600 mb-4">
                    <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" href="#!">A chair for $100</a>
                  </h2>

                  <ul class="list-inline g-font-size-12 mb-0">
                    <li class="list-inline-item g-mb-10">
                      <a class="u-tags-v1 g-color-teal g-bg-teal-opacity-0_1 g-bg-teal--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15" href="#!">Design</a>
                    </li>
                    <li class="list-inline-item g-mb-10">
                      <a class="u-tags-v1 g-color-yellow g-bg-yellow-opacity-0_1 g-bg-yellow--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15" href="#!">Interior</a>
                    </li>
                  </ul>
                </div>
              </article>
              <!-- End Blog Grid Modern Blocks -->
            </div>

            <div class="masonry-grid-item col-sm-6 col-lg-4 g-mb-30">
              <!-- Blog Grid Modern Blocks -->
              <article class="u-shadow-v21 u-shadow-v21--hover g-transition-0_3">
                <img class="img-fluid w-100 g-rounded-top-5" src="../../assets/img-temp/400x270/img6.jpg" alt="Image Description">
                <div class="g-bg-white g-pa-30 g-rounded-bottom-5">
                  <ul class="list-inline g-color-gray-dark-v4 g-font-weight-600 g-font-size-12">
                    <li class="list-inline-item mr-0">Alex Teseira</li>
                    <li class="list-inline-item mx-2">&#183;</li>
                    <li class="list-inline-item">1 June 2017</li>
                  </ul>

                  <h2 class="h5 g-color-black g-font-weight-600 mb-4">
                    <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" href="#!">Stylish office in Manhattan</a>
                  </h2>

                  <ul class="list-inline g-font-size-12 mb-0">
                    <li class="list-inline-item g-mb-10">
                      <a class="u-tags-v1 g-color-black g-bg-black-opacity-0_1 g-bg-black--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15" href="#!">Office</a>
                    </li>
                    <li class="list-inline-item g-mb-10">
                      <a class="u-tags-v1 g-color-cyan g-bg-cyan-opacity-0_1 g-bg-cyan--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15" href="#!">Interior</a>
                    </li>
                  </ul>
                </div>
              </article>
              <!-- End Blog Grid Modern Blocks -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Blog Grid Blocks -->

      <!-- Projects -->
      <section class="container g-py-100">
        <div class="text-center g-mb-50">
          <h2 class="h1 g-color-black g-font-weight-600">Branding Projects</h2>
          <p class="lead">This is where we begin to visualize your napkin sketches and make them into pixels.</p>
        </div>

        <div class="row no-gutters g-mx-minus-10">
          <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
            <!-- Projects -->
            <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-purple--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
              <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="../../assets/img-temp/425x250/img1.png" alt="Image Description">
              <span class="g-font-weight-600 g-font-size-12 text-uppercase">Mockups</span>
              <h3 class="h4 g-font-weight-600 mb-0">Kitchen Tools</h3>

              <a class="u-link-v2" href="#!"></a>
            </div>
            <!-- End Projects -->
          </div>

          <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
            <!-- Projects -->
            <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-cyan--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
              <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="../../assets/img-temp/425x250/img2.png" alt="Image Description">
              <span class="g-font-weight-600 g-font-size-12 text-uppercase">Others</span>
              <h3 class="h4 g-font-weight-600 mb-0">Brochure</h3>

              <a class="u-link-v2" href="#!"></a>
            </div>
            <!-- End Projects -->
          </div>

          <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
            <!-- Projects -->
            <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-teal--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
              <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="../../assets/img-temp/425x250/img3.png" alt="Image Description">
              <span class="g-font-weight-600 g-font-size-12 text-uppercase">Hi-Tech</span>
              <h3 class="h4 g-font-weight-600 mb-0">MacBook Pro</h3>

              <a class="u-link-v2" href="#!"></a>
            </div>
            <!-- End Projects -->
          </div>

          <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
            <!-- Projects -->
            <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-lightred--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
              <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="../../assets/img-temp/425x250/img4.png" alt="Image Description">
              <span class="g-font-weight-600 g-font-size-12 text-uppercase">Hi-tech</span>
              <h3 class="h4 g-font-weight-600 mb-0">Latest VR product</h3>

              <a class="u-link-v2" href="#!"></a>
            </div>
            <!-- End Projects -->
          </div>

          <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
            <!-- Projects -->
            <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-primary--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
              <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="../../assets/img-temp/425x250/img5.png" alt="Image Description">
              <span class="g-font-weight-600 g-font-size-12 text-uppercase">Others</span>
              <h3 class="h4 g-font-weight-600 mb-0">Brochure</h3>

              <a class="u-link-v2" href="#!"></a>
            </div>
            <!-- End Projects -->
          </div>

          <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
            <!-- Projects -->
            <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-pink--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
              <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="../../assets/img-temp/425x250/img6.png" alt="Image Description">
              <span class="g-font-weight-600 g-font-size-12 text-uppercase">Cosmetics</span>
              <h3 class="h4 g-font-weight-600 mb-0">Spa Cosmetics</h3>

              <a class="u-link-v2" href="#!"></a>
            </div>
            <!-- End Projects -->
          </div>
        </div>
      </section>
      <!-- End Projects -->

      <!-- Call To Action -->
      <section class="g-bg-primary g-color-white g-pa-30" style="background-image: url(../../assets/img/bg/pattern5.png);">
        <div class="d-md-flex justify-content-md-center text-center">
          <div class="align-self-md-center">
            <p class="lead g-font-weight-400 g-mr-20--md g-mb-15 g-mb-0--md">We offer best in class service for your needs</p>
          </div>
          <div class="align-self-md-center">
            <a class="btn btn-lg u-btn-white text-uppercase g-font-weight-600 g-font-size-12" target="_blank" href="https://wrapbootstrap.com/theme/unify-responsive-website-template-WB0412697?ref=htmlstream">Purchase Now</a>
          </div>
        </div>
      </section>
      <!-- End Call To Action -->

      <!-- Footer -->
      <div class="g-bg-black-opacity-0_9 g-color-white-opacity-0_8 g-py-60">
        <div class="container">
          <div class="row">
            <!-- Footer Content -->
            <div class="col-lg-3 col-md-6 g-mb-40 g-mb-0--lg">
              <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                <h2 class="u-heading-v2__title h6 text-uppercase mb-0">About Us</h2>
              </div>

              <p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales.</p>
            </div>
            <!-- End Footer Content -->

            <!-- Footer Content -->
            <div class="col-lg-3 col-md-6 g-mb-40 g-mb-0--lg">
              <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Latest Posts</h2>
              </div>

              <article>
                <h3 class="h6 g-mb-2">
                  <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Incredible template</a>
                </h3>
                <div class="small g-color-white-opacity-0_6">May 8, 2017</div>
              </article>

              <hr class="g-brd-white-opacity-0_1 g-my-10">

              <article>
                <h3 class="h6 g-mb-2">
                  <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">New features</a>
                </h3>
                <div class="small g-color-white-opacity-0_6">June 23, 2017</div>
              </article>

              <hr class="g-brd-white-opacity-0_1 g-my-10">

              <article>
                <h3 class="h6 g-mb-2">
                  <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">New terms and conditions</a>
                </h3>
                <div class="small g-color-white-opacity-0_6">September 15, 2017</div>
              </article>
            </div>
            <!-- End Footer Content -->

            <!-- Footer Content -->
            <div class="col-lg-3 col-md-6 g-mb-40 g-mb-0--lg">
              <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Useful Links</h2>
              </div>

              <nav class="text-uppercase1">
                <ul class="list-unstyled g-mt-minus-10 mb-0">
                  <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                    <h4 class="h6 g-pr-20 mb-0">
                      <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">About Us</a>
                      <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                    </h4>
                  </li>
                  <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                    <h4 class="h6 g-pr-20 mb-0">
                      <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Portfolio</a>
                      <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                    </h4>
                  </li>
                  <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                    <h4 class="h6 g-pr-20 mb-0">
                      <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Our Services</a>
                      <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                    </h4>
                  </li>
                  <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                    <h4 class="h6 g-pr-20 mb-0">
                      <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Latest Jobs</a>
                      <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                    </h4>
                  </li>
                  <li class="g-pos-rel g-py-10">
                    <h4 class="h6 g-pr-20 mb-0">
                      <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Contact Us</a>
                      <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                    </h4>
                  </li>
                </ul>
              </nav>
            </div>
            <!-- End Footer Content -->

            <!-- Footer Content -->
            <div class="col-lg-3 col-md-6">
              <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Our Contacts</h2>
              </div>

              <address class="g-bg-no-repeat g-font-size-12 mb-0" style="background-image: url(../../assets/img/maps/map2.png);">
                <!-- Location -->
                <div class="d-flex g-mb-20">
                  <div class="g-mr-10">
                    <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                      <i class="fa fa-map-marker"></i>
                    </span>
                  </div>
                  <p class="mb-0">795 Folsom Ave, Suite 600,
                    <br>
                    San Francisco, CA 94107 795
                  </p>
                </div>
                <!-- End Location -->

                <!-- Phone -->
                <div class="d-flex g-mb-20">
                  <div class="g-mr-10">
                    <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                      <i class="fa fa-phone"></i>
                    </span>
                  </div>
                  <p class="mb-0">(+123) 456 7890
                    <br>
                    (+123) 456 7891
                  </p>
                </div>
                <!-- End Phone -->

                <!-- Email and Website -->
                <div class="d-flex g-mb-20">
                  <div class="g-mr-10">
                    <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                      <i class="fa fa-globe"></i>
                    </span>
                  </div>
                  <p class="mb-0">
                    <a class="g-color-white-opacity-0_8 g-color-white--hover" href="mailto:info@htmlstream.com">info@htmlstream.com</a>
                    <br>
                    <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">www.htmlstream.com</a>
                  </p>
                </div>
                <!-- End Email and Website -->
              </address>
            </div>
            <!-- End Footer Content -->
          </div>
        </div>
      </div>
      <!-- End Footer -->

      <!-- Copyright Footer -->
      <footer class="g-bg-gray-dark-v1 g-color-white-opacity-0_8 g-py-20">
        <div class="container">
          <div class="row">
            <div class="col-md-8 text-center text-md-left g-mb-10 g-mb-0--md">
              <div class="d-lg-flex">
                <small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md">2017 © All Rights Reserved.</small>
                <ul class="u-list-inline">
                  <li class="list-inline-item">
                    <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Privacy Policy</a>
                  </li>
                  <li class="list-inline-item">
                    <span>|</span>
                  </li>
                  <li class="list-inline-item">
                    <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Terms of Use</a>
                  </li>
                  <li class="list-inline-item">
                    <span>|</span>
                  </li>
                  <li class="list-inline-item">
                    <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">License</a>
                  </li>
                  <li class="list-inline-item">
                    <span>|</span>
                  </li>
                  <li class="list-inline-item">
                    <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Support</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-md-4 align-self-center">
              <ul class="list-inline text-center text-md-right mb-0">
                <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Facebook">
                  <a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Skype">
                  <a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
                    <i class="fa fa-skype"></i>
                  </a>
                </li>
                <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Linkedin">
                  <a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
                <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Pinterest">
                  <a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
                    <i class="fa fa-pinterest"></i>
                  </a>
                </li>
                <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Twitter">
                  <a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Dribbble">
                  <a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
                    <i class="fa fa-dribbble"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
      <!-- End Copyright Footer -->
    </main>
  </body>

  <!-- JS Global Compulsory -->
  <script src="../../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
  <script src="../../assets/vendor/jquery.easing/js/jquery.easing.min.js"></script>
  <script src="../../assets/vendor/popper.min.js"></script>
  <script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="../../assets/vendor/masonry/dist/masonry.pkgd.min.js"></script>
  <script src="../../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../../assets/vendor/slick-carousel/slick/slick.js"></script>
  <script src="../../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>

  <!-- JS Unify -->
  <script src="../../assets/js/hs.core.js"></script>
  <script src="../../assets/js/components/hs.header.js"></script>
  <script src="../../assets/js/helpers/hs.hamburgers.js"></script>
  <script src="../../assets/js/components/hs.scroll-nav.js"></script>
  <script src="../../assets/js/components/hs.carousel.js"></script>

  <!-- JS Revolution Slider -->
  <script src="../../assets/vendor/revolution-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script src="../../assets/vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>

  <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

  <!-- JS Custom -->
  <script src="../../assets/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // initialization of carousel
      $.HSCore.components.HSCarousel.init('.js-carousel');

      // initialization of masonry
      $('.masonry-grid').imagesLoaded().then(function () {
        $('.masonry-grid').masonry({
          columnWidth: '.masonry-grid-sizer',
          itemSelector: '.masonry-grid-item',
          percentPosition: true
        });
      });

      // Header
      $.HSCore.components.HSHeader.init($('#js-header'));
      $.HSCore.helpers.HSHamburgers.init('.hamburger');

      // Initialization of HSMegaMenu plugin
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991
      });
    });

    var revapi35;
    jQuery(document).ready(function () {
      if (jQuery('#rev_slider').revolution == undefined) {
        revslider_showDoubleJqueryError('#rev_slider');
      } else {
        revapi35 = jQuery('#rev_slider').show().revolution({
          sliderType: 'standard',
          sliderLayout: 'auto',
          dottedOverlay: 'none',
          delay: 9000,
          navigation: {
            keyboardNavigation: 'on',
            keyboard_direction: 'horizontal',
            mouseScrollNavigation: 'off',
            onHoverStop: 'off',
            touch: {
              touchenabled: 'on',
              swipe_threshold: 75,
              swipe_min_touches: 1,
              swipe_direction: 'horizontal',
              drag_block_vertical: false
            },
            arrows: {
              style: 'uranus',
              enable: true,
              hide_onmobile: true,
              hide_under: 778,
              hide_onleave: true,
              hide_delay: 200,
              hide_delay_mobile: 99999,
              tmp: '',
              left: {
                h_align: 'left',
                v_align: 'center',
                h_offset: 10,
                v_offset: 0
              },
              right: {
                h_align: 'right',
                v_align: 'center',
                h_offset: 10,
                v_offset: 0
              }
            },
            tabs: {
              style: 'ares',
              enable: true,
              width: 350,
              height: 80,
              min_width: 350,
              wrapper_padding: 0,
              wrapper_color: '#f5f5f5',
              wrapper_opacity: '1',
              tmp: '<div class="tp-tab-content">' +
              '<span class="tp-tab-date">{{param1}}</span>' +
              '<span class="tp-tab-title">{{param2}}</span>' +
              '</div>' +
              '<div class="tp-tab-image"></div>',
              visibleAmount: 10,
              hide_onmobile: true,
              hide_under: 776,
              hide_onleave: false,
              hide_delay: 200,
              direction: 'vertical',
              span: true,
              position: 'outer-right',
              space: 0,
              h_align: 'right',
              v_align: 'top',
              h_offset: 0,
              v_offset: 0
            }
          },
          gridwidth: 800,
          gridheight: 640,
          lazyType: 'single',
          shadow: 0,
          spinner: 'off',
          stopLoop: 'on',
          stopAfterLoops: 0,
          stopAtSlide: 1,
          shuffle: 'off',
          autoHeight: 'off',
          disableProgressBar: 'on',
          hideThumbsOnMobile: 'off',
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          startWithSlide: 0,
          debugMode: false,
          fallbacks: {
            simplifyAll: 'off',
            nextSlideOnWindowFocus: 'off',
            disableFocusListener: 'off'
          }
        });
      }
    });
  </script>
</html>
