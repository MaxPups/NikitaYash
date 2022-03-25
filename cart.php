<?php
include('bd.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pronia - Blog Detail</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Pronia plant store bootstrap 5 template is an awesome website template for any home plant shop.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />

    <!-- CSS
    ============================================ -->

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/Pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css" />
    <link rel="stylesheet" href="assets/css/ion.rangeSlider.min.css" />
    <link rel="stylesheet" href="./assets/css/accordion.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <div class="main-wrapper">

        <!-- Begin Main Header Area -->
        <header class="main-header-area">
            <div class="header-top bg-pronia-primary d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="header-top-left">
                                <span class="pronia-offer">
                                    Здесь может быть данный после входа в личный кабинет

                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="header-middle py-30">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="header-middle-wrap position-relative">
                                <div class="header-contact d-none d-lg-flex">
                                    <i class="pe-7s-call"></i>
                                    <a href="tel://+00-123-456-789">+00 123 456 789</a>
                                </div>

                                <a href="index.html" class="header-logo">
                                    <img src="assets/images/logo/dark.png" alt="Header Logo">
                                </a>

                                <div class="header-right">
                                    <ul>
                                        <li>
                                            <a href="#exampleModal" class="search-btn bt" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown d-none d-lg-block">
                                            <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButton" data-bs-toggle="dropdown" aria-label="setting" aria-expanded="false">
                                                <i class="pe-7s-users"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="settingButton">
                                                <li><a class="dropdown-item" href="my-account.html">My account</a></li>
                                                <li><a class="dropdown-item" href="login-register.html">Login |
                                                        Register</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="mobile-menu_wrap d-block d-lg-none">
                                            <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                                <i class="pe-7s-menu"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-menu position-relative">
                                <nav class="main-nav">
                                    <ul>
                                        <li class="drop-holder">
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li class="drop-holder">
                                            <a href="blog.html">CATALOG(blog.html)</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-sticky py-4 py-lg-0">
                <div class="container">
                    <div class="header-nav position-relative">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-6">

                                <a href="index.html" class="header-logo">
                                    <img src="assets/images/logo/dark.png" alt="Header Logo">
                                </a>

                            </div>
                            <div class="col-lg-6 d-none d-lg-block">
                                <div class="main-menu">
                                    <nav class="main-nav">
                                        <ul>
                                            <li class="drop-holder">
                                                <a href="index.html">Home</a>
                                            </li>

                                            <li class="drop-holder">
                                                <a href="blog.html">CATALOG(blog.html)</a>

                                            </li>
                                            <li>
                                                <a href="contact.html">Contact Us</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="header-right">
                                    <ul>
                                        <li>
                                            <a href="#exampleModal" class="search-btn bt" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown d-none d-lg-block">
                                            <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="stickysettingButton" data-bs-toggle="dropdown" aria-label="setting" aria-expanded="false">
                                                <i class="pe-7s-users"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="stickysettingButton">
                                                <li><a class="dropdown-item" href="my-account.html">My account</a></li>
                                                <li><a class="dropdown-item" href="login-register.html">Login |
                                                        Register</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="mobile-menu_wrap d-block d-lg-none">
                                            <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                                <i class="pe-7s-menu"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-body">
                    <div class="inner-body">
                        <div class="offcanvas-top">
                            <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                        </div>
                        <div class="header-contact offcanvas-contact">
                            <i class="pe-7s-call"></i>
                            <a href="tel://+00-123-456-789">+00 123 456 789</a>
                        </div>
                        <div class="offcanvas-user-info">
                            <ul class="dropdown-wrap" style="padding-left: 83%;">



                                <li class="dropdown">
                                    <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="pe-7s-users"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingButtonTwo">
                                        <li><a class="dropdown-item" href="my-account.html">My account</a></li>
                                        <li><a class="dropdown-item" href="login-register.html">Login | Register</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas-menu_area">
                            <nav class="offcanvas-navigation">
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Home
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">CATALOG(BLOG)
                                            </span>
                                        </a>

                                    </li>
                                    <li>
                                        <a href="contact.html">
                                            <span class="mm-text">Contact</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content modal-bg-dark">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" data-tippy="Close" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-search">
                                <span class="searchbox-info">Start typing and press Enter to search or ESC to
                                    close</span>
                                <form action="#" class="hm-searchbox">
                                    <input type="text" name="Search..." value="Search..." onblur="if(this.value==''){this.value='Search...'}" onfocus="if(this.value=='Search...'){this.value=''}" autocomplete="off">
                                    <button class="search-btn" type="submit" aria-label="searchbtn">
                                        <i class="pe-7s-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-minicart_wrapper" id="miniCart">
                <div class="offcanvas-body">
                    <div class="minicart-content">
                        <div class="minicart-heading">
                            <h4 class="mb-0">Shopping Cart</h4>
                            <a href="#" class="button-close"><i class="pe-7s-close" data-tippy="Close" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder"></i></a>
                        </div>
                        <ul class="minicart-list">
                            <li class="minicart-product">
                                <a class="product-item_remove" href="#"><i class="pe-7s-close" data-tippy="Remove" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder"></i></a>
                                <a href="single-product-variable.html" class="product-item_img">
                                    <img class="img-full" src="assets/images/product/small-size/2-1-70x78.png" alt="Product Image">
                                </a>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="single-product-variable.html">American
                                        Marigold</a>
                                    <span class="product-item_quantity">1 x $23.45</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="#"><i class="pe-7s-close" data-tippy="Remove" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder"></i></a>
                                <a href="single-product-variable.html" class="product-item_img">
                                    <img class="img-full" src="assets/images/product/small-size/2-2-70x78.png" alt="Product Image">
                                </a>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="single-product-variable.html">Black Eyed
                                        Susan</a>
                                    <span class="product-item_quantity">1 x $25.45</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="#">
                                    <i class="pe-7s-close" data-tippy="Remove" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder"></i>
                                </a>
                                <a href="single-product-variable.html" class="product-item_img">
                                    <img class="img-full" src="assets/images/product/small-size/2-3-70x78.png" alt="Product Image">
                                </a>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="single-product-variable.html">Bleeding Heart</a>
                                    <span class="product-item_quantity">1 x $30.45</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="minicart-item_total">
                        <span>Subtotal</span>
                        <span class="ammount">$79.35</span>
                    </div>
                    <div class="group-btn_wrap d-grid gap-2">
                        <a href="cart.html" class="btn btn-dark">View Cart</a>
                        <a href="checkout.html" class="btn btn-dark">Checkout</a>
                    </div>
                </div>
            </div>
            <div class="global-overlay"></div>
        </header>
        <!-- Main Header Area End Here -->
        <?php
        while ($row = $results->fetch_assoc()) {
            if ($row['id'] === $_GET['id']) {
                echo "<p>{$row['name']}</p>
                <p>{$row['description']}</p>
                <video src='{$row['path']}' controls autoplay></video>";
            }
        };
        ?>
        <!-- Begin Main Content Area -->
        <main class="main-content">
            <div class="blog-area section-space-y-axis-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 order-2 pt-5 pt-lg-0">
                            <div class="sidebar-area">
                                <div class="widgets-area">
                                    <div class="widgets-item pt-0">
                                        <h2 class="widgets-title mb-4">Categories</h2>
                                        <div class="col">
                                            <h2>Open <b>multiple</b></h2>
                                            <div class="tabs">
                                                <div class="tab">
                                                    <input type="checkbox" id="chck1">
                                                    <label class="tab-label" for="chck1">Голова</label>
                                                    <div class="tab-content">
                                                        <ul>

                                                            <li><a href="#">статья 1 читать</a></li>
                                                            <li><a href="#">статья 2 читать</a></li>
                                                            <li><a href="#">статья 3 читать</a></li>
                                                            <li><a href="#">статья 4 читать</a></li>
                                                            <li><a href="#">статья 5 читать</a></li>
                                                            <li><a href="#">статья 6 читать</a></li>
                                                            <li><a href="#">статья 7 читать</a></li>
                                                            <li><a href="#">статья 8 читать</a></li>
                                                            <li><a href="#">статья 9 читать</a></li>
                                                            <li><a href="#">статья 10 читать</a></li>
                                                            <li><a href="#">статья 11 читать</a></li>
                                                            <li><a href="#">статья 12 читать</a></li>
                                                            <li><a href="#">статья 13 читать</a></li>
                                                            <li><a href="#">статья 14 читать</a></li>
                                                            <li><a href="#">статья 15 читать</a></li>
                                                            <li><a href="#">статья 16 читать</a></li>
                                                            <li><a href="#">статья 17 читать</a></li>
                                                            <li><a href="#">статья 18 читать</a></li>
                                                            <li><a href="#">статья 19 читать</a></li>
                                                            <li><a href="#">статья 20 читать</a></li>
                                                            <li><a href="#">статья 21 читать</a></li>
                                                            <li><a href="#">статья 22 читать</a></li>
                                                            <li><a href="#">статья 23 читать</a></li>
                                                            <li><a href="#">статья 24 читать</a></li>
                                                            <li><a href="#">статья 25 читать</a></li>
                                                            <li><a href="#">статья 26 читать</a></li>
                                                            <li><a href="#">статья 27 читать</a></li>
                                                            <li><a href="#">статья 28 читать</a></li>
                                                            <li><a href="#">статья 29 читать</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab">
                                                    <input type="checkbox" id="chck2">
                                                    <label class="tab-label" for="chck2">Живот</label>
                                                    <div class="tab-content">
                                                        <ul>

                                                            <li><a href="#">статья 1 читать</a></li>
                                                            <li><a href="#">статья 2 читать</a></li>
                                                            <li><a href="#">статья 3 читать</a></li>
                                                            <li><a href="#">статья 4 читать</a></li>
                                                            <li><a href="#">статья 5 читать</a></li>
                                                            <li><a href="#">статья 6 читать</a></li>
                                                            <li><a href="#">статья 7 читать</a></li>
                                                            <li><a href="#">статья 8 читать</a></li>
                                                            <li><a href="#">статья 9 читать</a></li>
                                                            <li><a href="#">статья 10 читать</a></li>
                                                            <li><a href="#">статья 11 читать</a></li>
                                                            <li><a href="#">статья 12 читать</a></li>
                                                            <li><a href="#">статья 13 читать</a></li>
                                                            <li><a href="#">статья 14 читать</a></li>
                                                            <li><a href="#">статья 15 читать</a></li>
                                                            <li><a href="#">статья 16 читать</a></li>
                                                            <li><a href="#">статья 17 читать</a></li>
                                                            <li><a href="#">статья 18 читать</a></li>
                                                            <li><a href="#">статья 19 читать</a></li>
                                                            <li><a href="#">статья 20 читать</a></li>
                                                            <li><a href="#">статья 21 читать</a></li>
                                                            <li><a href="#">статья 22 читать</a></li>
                                                            <li><a href="#">статья 23 читать</a></li>
                                                            <li><a href="#">статья 24 читать</a></li>
                                                            <li><a href="#">статья 25 читать</a></li>
                                                            <li><a href="#">статья 26 читать</a></li>
                                                            <li><a href="#">статья 27 читать</a></li>
                                                            <li><a href="#">статья 28 читать</a></li>
                                                            <li><a href="#">статья 29 читать</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab">
                                                    <input type="checkbox" id="chck3">
                                                    <label class="tab-label" for="chck3">Спина</label>
                                                    <div class="tab-content">
                                                        <ul>

                                                            <li><a href="#">статья 1 читать</a></li>
                                                            <li><a href="#">статья 2 читать</a></li>
                                                            <li><a href="#">статья 3 читать</a></li>
                                                            <li><a href="#">статья 4 читать</a></li>
                                                            <li><a href="#">статья 5 читать</a></li>
                                                            <li><a href="#">статья 6 читать</a></li>
                                                            <li><a href="#">статья 7 читать</a></li>
                                                            <li><a href="#">статья 8 читать</a></li>
                                                            <li><a href="#">статья 9 читать</a></li>
                                                            <li><a href="#">статья 10 читать</a></li>
                                                            <li><a href="#">статья 11 читать</a></li>
                                                            <li><a href="#">статья 12 читать</a></li>
                                                            <li><a href="#">статья 13 читать</a></li>
                                                            <li><a href="#">статья 14 читать</a></li>
                                                            <li><a href="#">статья 15 читать</a></li>
                                                            <li><a href="#">статья 16 читать</a></li>
                                                            <li><a href="#">статья 17 читать</a></li>
                                                            <li><a href="#">статья 18 читать</a></li>
                                                            <li><a href="#">статья 19 читать</a></li>
                                                            <li><a href="#">статья 20 читать</a></li>
                                                            <li><a href="#">статья 21 читать</a></li>
                                                            <li><a href="#">статья 22 читать</a></li>
                                                            <li><a href="#">статья 23 читать</a></li>
                                                            <li><a href="#">статья 24 читать</a></li>
                                                            <li><a href="#">статья 25 читать</a></li>
                                                            <li><a href="#">статья 26 читать</a></li>
                                                            <li><a href="#">статья 27 читать</a></li>
                                                            <li><a href="#">статья 28 читать</a></li>
                                                            <li><a href="#">статья 29 читать</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab">
                                                    <input type="checkbox" id="chck4">
                                                    <label class="tab-label" for="chck4">Ноги</label>
                                                    <div class="tab-content">
                                                        <ul>

                                                            <li><a href="#">статья 1 читать</a></li>
                                                            <li><a href="#">статья 2 читать</a></li>
                                                            <li><a href="#">статья 3 читать</a></li>
                                                            <li><a href="#">статья 4 читать</a></li>
                                                            <li><a href="#">статья 5 читать</a></li>
                                                            <li><a href="#">статья 6 читать</a></li>
                                                            <li><a href="#">статья 7 читать</a></li>
                                                            <li><a href="#">статья 8 читать</a></li>
                                                            <li><a href="#">статья 9 читать</a></li>
                                                            <li><a href="#">статья 10 читать</a></li>
                                                            <li><a href="#">статья 11 читать</a></li>
                                                            <li><a href="#">статья 12 читать</a></li>
                                                            <li><a href="#">статья 13 читать</a></li>
                                                            <li><a href="#">статья 14 читать</a></li>
                                                            <li><a href="#">статья 15 читать</a></li>
                                                            <li><a href="#">статья 16 читать</a></li>
                                                            <li><a href="#">статья 17 читать</a></li>
                                                            <li><a href="#">статья 18 читать</a></li>
                                                            <li><a href="#">статья 19 читать</a></li>
                                                            <li><a href="#">статья 20 читать</a></li>
                                                            <li><a href="#">статья 21 читать</a></li>
                                                            <li><a href="#">статья 22 читать</a></li>
                                                            <li><a href="#">статья 23 читать</a></li>
                                                            <li><a href="#">статья 24 читать</a></li>
                                                            <li><a href="#">статья 25 читать</a></li>
                                                            <li><a href="#">статья 26 читать</a></li>
                                                            <li><a href="#">статья 27 читать</a></li>
                                                            <li><a href="#">статья 28 читать</a></li>
                                                            <li><a href="#">статья 29 читать</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab">
                                                    <input type="checkbox" id="chck5">
                                                    <label class="tab-label" for="chck5">Нервы</label>
                                                    <div class="tab-content">
                                                        <ul>

                                                            <li><a href="#">статья 1 читать</a></li>
                                                            <li><a href="#">статья 2 читать</a></li>
                                                            <li><a href="#">статья 3 читать</a></li>
                                                            <li><a href="#">статья 4 читать</a></li>
                                                            <li><a href="#">статья 5 читать</a></li>
                                                            <li><a href="#">статья 6 читать</a></li>
                                                            <li><a href="#">статья 7 читать</a></li>
                                                            <li><a href="#">статья 8 читать</a></li>
                                                            <li><a href="#">статья 9 читать</a></li>
                                                            <li><a href="#">статья 10 читать</a></li>
                                                            <li><a href="#">статья 11 читать</a></li>
                                                            <li><a href="#">статья 12 читать</a></li>
                                                            <li><a href="#">статья 13 читать</a></li>
                                                            <li><a href="#">статья 14 читать</a></li>
                                                            <li><a href="#">статья 15 читать</a></li>
                                                            <li><a href="#">статья 16 читать</a></li>
                                                            <li><a href="#">статья 17 читать</a></li>
                                                            <li><a href="#">статья 18 читать</a></li>
                                                            <li><a href="#">статья 19 читать</a></li>
                                                            <li><a href="#">статья 20 читать</a></li>
                                                            <li><a href="#">статья 21 читать</a></li>
                                                            <li><a href="#">статья 22 читать</a></li>
                                                            <li><a href="#">статья 23 читать</a></li>
                                                            <li><a href="#">статья 24 читать</a></li>
                                                            <li><a href="#">статья 25 читать</a></li>
                                                            <li><a href="#">статья 26 читать</a></li>
                                                            <li><a href="#">статья 27 читать</a></li>
                                                            <li><a href="#">статья 28 читать</a></li>
                                                            <li><a href="#">статья 29 читать</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab">
                                                    <input type="checkbox" id="chck6">
                                                    <label class="tab-label" for="chck6">Еще</label>
                                                    <div class="tab-content">
                                                        <ul>

                                                            <li><a href="#">статья 1 читать</a></li>
                                                            <li><a href="#">статья 2 читать</a></li>
                                                            <li><a href="#">статья 3 читать</a></li>
                                                            <li><a href="#">статья 4 читать</a></li>
                                                            <li><a href="#">статья 5 читать</a></li>
                                                            <li><a href="#">статья 6 читать</a></li>
                                                            <li><a href="#">статья 7 читать</a></li>
                                                            <li><a href="#">статья 8 читать</a></li>
                                                            <li><a href="#">статья 9 читать</a></li>
                                                            <li><a href="#">статья 10 читать</a></li>
                                                            <li><a href="#">статья 11 читать</a></li>
                                                            <li><a href="#">статья 12 читать</a></li>
                                                            <li><a href="#">статья 13 читать</a></li>
                                                            <li><a href="#">статья 14 читать</a></li>
                                                            <li><a href="#">статья 15 читать</a></li>
                                                            <li><a href="#">статья 16 читать</a></li>
                                                            <li><a href="#">статья 17 читать</a></li>
                                                            <li><a href="#">статья 18 читать</a></li>
                                                            <li><a href="#">статья 19 читать</a></li>
                                                            <li><a href="#">статья 20 читать</a></li>
                                                            <li><a href="#">статья 21 читать</a></li>
                                                            <li><a href="#">статья 22 читать</a></li>
                                                            <li><a href="#">статья 23 читать</a></li>
                                                            <li><a href="#">статья 24 читать</a></li>
                                                            <li><a href="#">статья 25 читать</a></li>
                                                            <li><a href="#">статья 26 читать</a></li>
                                                            <li><a href="#">статья 27 читать</a></li>
                                                            <li><a href="#">статья 28 читать</a></li>
                                                            <li><a href="#">статья 29 читать</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 order-1">
                            <div class="blog-detail-item">
                                <div class="blog-content">
                                    <h2 class="title">Theme</h2>
                                    <p class="short-desc">DESCRIPTION Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                        do
                                        eiusmod tempor incididunt ut labore etl dolore magna aliqua. Ut enim ad minim
                                        veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquiex ea commodo consequat.
                                        Duis
                                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eukip
                                        fugiat
                                        nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deseruntk mollit anim id est laborum. Sed ut
                                        perspiciatis unde omnis iste natus error sit voluptatem accusantiumy doloremque
                                        laudantium, totam rem aperiam,
                                    </p>
                                </div>
                                <div class="blog-img img-hover-effect">
                                    <img class="img-full" src="assets/images/posts/Allergiya.jpeg" alt="Blog Image">
                                </div>
                                <p class="short-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod
                                    tempor incididunt ut labore etl dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud
                                    exercitation ullamco laboris nisi ut aliquiex ea commodo consequat. Duis aute irure
                                    dolor in
                                    reprehenderit in voluptate velit esse cillum dolore eukip fugiat nulla pariatur.
                                    Excepteur
                                    sint occaecat.</p>

                                <p class="short-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod
                                    tempor incididunt ut labore etl dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    aliquiex
                                    ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum
                                    dolore eukip fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                    sunt in
                                    culpa qui officia deseruntk mollit anim id est laborum. Sed ut perspiciatis unde
                                    omnis iste
                                    natus error sit voluptatem accusantiumy doloremque laudantium, totam rem aperiam,
                                </p>
                                <div class="blog-banner row">
                                    <div class="col-lg-12">
                                        <div class="swiper-container product-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide product-item">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-img" src="assets/images/posts/artroz1.jpeg" alt="Product Images">
                                                            <img class="secondary-img" src="assets/images/posts/artroz2-300x203.jpeg" alt="Product Images">
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="swiper-slide product-item">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-img" src="assets/images/posts/astma3.jpeg" alt="Product Images">
                                                            <img class="secondary-img" src="assets/images/posts/astma5diafragma-296x300.jpeg" alt="Product Images">
                                                        </a>

                                                    </div>

                                                </div>
                                                <div class="swiper-slide product-item">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-img" src="assets/images/posts/Emotsionalnye-bloki.jpeg" alt="Product Images">
                                                            <img class="secondary-img" src="assets/images/posts/Disbalans-pozvonkov-178x300.jpeg" alt="Product Images">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="swiper-slide product-item">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-img" src="assets/images/posts/ZHeludochno-kishechnyj-trakt.jpeg" alt="Product Images">
                                                            <img class="secondary-img" src="assets/images/posts/Zaikanie.jpeg" alt="Product Images">
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="short-desc mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do
                                    eiusmod tempor incididunt ut labore etl dolore magna aliqua. Ut enim ad minim
                                    veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquiex ea commodo consequat. Duis
                                    aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eukip fugiat nulla
                                    pariatur.
                                    Excepteur sint occaecat
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Main Content Area End Here -->

        <!-- Begin Footer Area -->
        <footer class="footer-area" data-bg-image="assets/images/footer/bg/1-1920x465.jpg">
            <div class="footer-top section-space-top-100 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="footer-widget-item">
                                <div class="footer-widget-logo">
                                    <a href="index.html">
                                        <img src="assets/images/logo/dark.png" alt="Logo">
                                    </a>
                                </div>

                                <div class="social-link with-border">
                                    <ul>
                                        <li>
                                            <a href="#" data-tippy="Facebook" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-tippy="Twitter" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-tippy="Pinterest" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-pinterest"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-tippy="Dribbble" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-dribbble"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 pt-40">
                            <div class="footer-widget-item">
                                <h3 class="footer-widget-title">Useful Links</h3>
                                <ul class="footer-widget-list-item">
                                    <li>
                                        <a href="#">About Pronia</a>
                                    </li>
                                    <li>
                                        <a href="#">How to shop</a>
                                    </li>
                                    <li>
                                        <a href="#">FAQ</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 pt-40">
                            <div class="footer-widget-item">
                                <h3 class="footer-widget-title">My Account</h3>
                                <ul class="footer-widget-list-item">
                                    <li>
                                        <a href="#">Sign In</a>
                                    </li>
                                    <li>
                                        <a href="#">View Cart</a>
                                    </li>
                                    <li>
                                        <a href="#">My Wishlist</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 pt-40">
                            <div class="footer-widget-item">
                                <h3 class="footer-widget-title">Our Service</h3>
                                <ul class="footer-widget-list-item">
                                    <li>
                                        <a href="#">Payment Methods</a>
                                    </li>
                                    <li>
                                        <a href="#">Money Guarantee!</a>
                                    </li>
                                    <li>
                                        <a href="#">Returns</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 pt-40">
                            <div class="footer-contact-info">
                                <h3 class="footer-widget-title">Got Question? Call Us</h3>
                                <a class="number" href="tel://123-456-789">123 456 789</a>
                                <div class="address">
                                    <ul>
                                        <li>
                                            Your Address Goes Here
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End Here -->

        <!-- Begin Scroll To Top -->
        <a class="scroll-to-top" href="">
            <i class="fa fa-angle-double-up"></i>
        </a>
        <!-- Scroll To Top End Here -->

    </div>

    <!-- Global Vendor, plugins JS -->

    <!-- JS Files
    ============================================ -->

    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/jquery.waypoints.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/plugins/wow.min.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.js"></script>
    <script src="assets/js/plugins/parallax.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/tippy.min.js"></script>
    <script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
    <script src="assets/js/plugins/mailchimp-ajax.js"></script>
    <script src="assets/js/plugins/jquery.counterup.js"></script>

    <!--Main JS (Common Activation Codes)-->
    <script src="assets/js/main.js"></script>

</body>

</html>