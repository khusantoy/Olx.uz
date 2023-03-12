<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title',"OLX - Qulay joyda xaridlar")</title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">

        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">

        <!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    </head>
    <body>

        <!-- Header -->
        <header class="header">
            <div class="mobile-view">
                <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
            </div>
            <div class="header-top d-none d-lg-block">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-3 col-lg-4">
                            <div class="header-left">
                                <ul>
                                    <li>
                                        <a class="language-dropdown-active" href="#">English <i class="fi-rs-angle-small-down"></i></a>
                                        <ul class="language-dropdown">
                                            <li>
                                                <a href="#"><img src="assets/img/flags/flag-en.png" alt="">English</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="assets/img/flags/flag-uz.png" alt="">O'zbek</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="assets/img/flags/flag-ru.png" alt="">Pусский</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="language-dropdown-active" href="#">USD <i class="fi-rs-angle-small-down"></i></a>
                                        <ul class="language-dropdown">
                                            <li>
                                                <a href="#"><img src="assets/img/flags/flag-uz.png" alt="">SUM</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="assets/img/flags/flag-fr.png" alt="">INR</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="assets/img/flags/flag-dt.png" alt="">MBP</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="assets/img/flags/flag-ru.png" alt="">EU</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <div class="header-details">
                                <div class="header-inner">
                                    <div class="header-inner-icon">
                                        <a href="wishlist.html" class="d-flex align-items-center">
                                            <span><img src="assets/img/icons/icon-wishlist.svg" alt=""></span>
                                            <span class="lable mt-0">Wishlist (0)</span>
                                        </a>
                                    </div>
                                    <div class="header-inner-icon">
                                        <a href="#" class="d-flex align-items-center">
                                            <span><img src="assets/img/icons/icon-profile.svg" alt=""></span>
                                            <span class="lable mt-0">My Account</span>
                                        </a>
                                        <div class="cart-dropdown-wrap account-dropdown">
                                            <ul>
                                                <li>
                                                    <a href="account.html">My Account</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('front.wishlist')}}">Wishlist</a>
                                                </li>
                                                <li>
                                                    <a href="index.html">Sign Out</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle d-none d-lg-block">
                <div class="container">
                    <div class="header-col">
                        <div class="logo header-logo">
                            <a href="index.html"><img src="assets/img/logo.png" alt="logo"></a>
                        </div>
                        <div class="header-right">
                            <div class="header-search">
                                <form action="product-category-list.html">
                                    <select class="select-active">
                                        <option>All Categories</option>
                                        <option>Tshirt for Men</option>
                                        <option>Computers</option>
                                        <option>Electrnoics</option>
                                        <option>Books</option>
                                        <option>Beauty</option>
                                        <option>Television</option>
                                    </select>
                                    <input type="text" placeholder="Search for items...">
                                    <input type="submit" name="form-submit" class="submit-btn">
                                </form>
                            </div>
                            <div class="header-details">
                                <div class="header-inner">
                                    <div class="header-inner-icon">
                                        <a href="cart.html" class="me-3">
                                            <span class="lable d-block mt-0">My Cart</span>
                                            <span class="cart-amout d-block text-end">$0.00</span>
                                        </a>
                                        <a class="small-cart-icon" href="cart.html">
                                            <img src="assets/img/icons/icon-cart.svg" alt="">
                                            <span class="pro-count blue">0</span>
                                        </a>
                                        <div class="cart-dropdown-wrap">
                                            <ul>
                                                <li>
                                                    <div class="shopping-cart-img">
                                                        <a href="view-product.html"><img src="assets/img/shop/thumbnail-1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="shopping-cart-title">
                                                        <h4><a href="view-product.html">Daisy Casual Bag</a></h4>
                                                        <h4><span>1 × </span>$800.00</h4>
                                                    </div>
                                                    <div class="shopping-cart-delete">
                                                        <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="shopping-cart-img">
                                                        <a href="view-product.html"><img src="assets/img/shop/thumbnail-2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="shopping-cart-title">
                                                        <h4><a href="view-product.html">Corduroy Shirts</a></h4>
                                                        <h4><span>1 × </span>$3200.00</h4>
                                                    </div>
                                                    <div class="shopping-cart-delete">
                                                        <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="shopping-cart-footer">
                                                <div class="shopping-cart-total">
                                                    <h4>Total <span>$4000.00</span></h4>
                                                </div>
                                                <div class="shopping-cart-btn">
                                                    <a href="cart.html" class="outline">View cart</a>
                                                    <a href="checkout.html">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom sticky-bar">
                <div class="container">
                    <div class="header-col">
                        <div class="logo header-logo d-block d-lg-none">
                            <a href="index.html"><img src="assets/img/logo.png" alt="logo"></a>
                        </div>
                        <div class="header-nav d-none d-lg-flex">
                            <div class="categories-col d-none d-lg-block">
                                <a class="categories-btn" href="#">
                                    <span class="fi-rs-menu-burger"></span> Categories
                                    <i class="fi-rs-angle-down"></i>
                                </a>
                                <div class="categories-dropdown-col categories-dropdown-list">
                                    <div class="d-flex categories-dropdown-inner">
                                        <ul>
                                            <li>
                                                <a href="product-category-list.html"><img src="assets/img/icons/category-1.svg" alt="">Tshirt for Men</a>
                                            </li>
                                            <li>
                                                <a href="product-category-list.html"><img src="assets/img/icons/category-2.svg" alt="">Computers</a>
                                            </li>
                                            <li>
                                                <a href="product-category-list.html"><img src="assets/img/icons/category-3.svg" alt="">Electrnoics</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="categories-slide-open" style="display: none">
                                        <div class="d-flex categories-dropdown-inner">
                                            <ul>
                                                <li>
                                                    <a href="product-category-list.html"><img src="assets/img/icons/category-4.svg" alt="">Books</a>
                                                </li>
                                                <li>
                                                    <a href="product-category-list.html"><img src="assets/img/icons/category-5.svg" alt="">Beauty</a>
                                                </li>
                                                <li>
                                                    <a href="product-category-list.html"><img src="assets/img/icons/category-6.svg" alt="">Television</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="more-categories"><span class="icon"></span>
                                        <a class="categories-click">Show more...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul>
                                        <li>
                                            <a class="active" href="index.html">Home</a>
                                        </li>
                                        <li>
                                            <a href="#">Beauty <i class="fi-rs-angle-down"></i></a>
                                            <ul class="has-submenu">
                                                <li><a href="#">Beauty 1</a></li>
                                                <li><a href="#">Beauty 2</a></li>
                                                <li><a href="#">Beauty 3</a></li>
                                                <li><a href="#">Beauty 4</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Books <i class="fi-rs-angle-down"></i></a>
                                            <ul class="has-submenu">
                                                <li><a href="#">Books 1</a></li>
                                                <li><a href="#">Books 2</a></li>
                                                <li><a href="#">Books 3</a></li>
                                                <li><a href="#">Books 4</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Computers <i class="fi-rs-angle-down"></i></a>
                                            <ul class="has-submenu">
                                                <li><a href="#">Computers 1</a></li>
                                                <li><a href="#">Computers 2</a></li>
                                                <li><a href="#">Computers 3</a></li>
                                                <li><a href="#">Computers 4</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Shop <i class="fi-rs-angle-down"></i></a>
                                            <ul class="has-submenu">
                                                <li><a href="product-category-list.html">Shop List</a></li>
                                                <li><a href="product-category-grid.html">Shop Grid</a></li>
                                                <li><a href="cart.html">Shop Cart</a></li>
                                                <li><a href="address.html">Shop Address</a></li>
                                                <li><a href="delivery.html">Shop Delivery</a></li>
                                                <li><a href="checkout.html">Shop Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Blog <i class="fi-rs-angle-down"></i></a>
                                            <ul class="has-submenu">
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="position-static">
                                            <a href="#">Mega menu <i class="fi-rs-angle-down"></i></a>

                                            <ul class="mega-menu">
                                                <li class="sub-mega-menu sub-mega-menu-two">
                                                    <div class="menu-banner-wrap">
                                                        <div class="menu-banner-content">
                                                            <p>Earn Extra 5% Cashback</p>
                                                            <h4>Amazing Deals</h4>
                                                            <h3>Just For You</h3>
                                                            <div class="menu-banner-price">
                                                                <span class="new-price text-success">Save to 50%</span>
                                                            </div>
                                                            <div class="menu-banner-btn">
                                                                <a href="cart.html">Shop now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="sub-mega-menu sub-mega-menu-one">
                                                    <a class="menu-title" href="#">Men's Fashion</a>
                                                    <ul class="dropdown">
                                                        <li><a href="product-category-list.html">Jackets</a></li>
                                                        <li><a href="product-category-list.html">Casual Faux Leather</a></li>
                                                        <li><a href="product-category-list.html">Genuine Leather</a></li>
                                                    </ul>
                                                </li>
                                                <li class="sub-mega-menu sub-mega-menu-one">
                                                    <a class="menu-title" href="#">Women's Fashion</a>
                                                    <ul>
                                                        <li><a href="product-category-list.html">Dresses</a></li>
                                                        <li><a href="product-category-list.html">Blouses & Shirts</a></li>
                                                        <li><a href="product-category-list.html">Hoodies & Sweatshirts</a></li>
                                                        <li><a href="product-category-list.html">Women's Sets</a></li>
                                                    </ul>
                                                </li>
                                                <li class="sub-mega-menu sub-mega-menu-one">
                                                    <a class="menu-title" href="#">Technology</a>
                                                    <ul>
                                                        <li><a href="product-category-list.html">Gaming Laptops</a></li>
                                                        <li><a href="product-category-list.html">Ultraslim Laptops</a></li>
                                                        <li><a href="product-category-list.html">Tablets</a></li>
                                                        <li><a href="product-category-list.html">Laptop Accessories</a></li>
                                                        <li><a href="product-category-list.html">Tablet Accessories</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Pages <i class="fi-rs-angle-down"></i></a>
                                            <ul class="has-submenu">
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="account.html">My Account</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="register.html">Register</a></li>
                                                <li><a href="contact-us.html">Contact Us</a></li>
                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                <li><a href="terms-conditions.html">Terms of Service</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="contact-item d-none d-lg-flex">
                            <img src="assets/img/icons/icon-headphone-white.svg" alt="contact-number">
                            <p>CALL US NOW<span>+123 5678 890</span></p>
                        </div>
                        <div class="header-inner-icon d-block d-lg-none">
                            <div class="bar-icon">
                                <span class="bar-icon-one"></span>
                                <span class="bar-icon-two"></span>
                                <span class="bar-icon-three"></span>
                            </div>
                        </div>
                        <div class="header-details d-block d-lg-none">
                            <div class="header-inner">
                                <div class="header-inner-icon">
                                    <a href="wishlist.html">
                                        <img src="assets/img/icons/icon-heart.svg" alt="">
                                        <span class="pro-count white">4</span>
                                    </a>
                                </div>
                                <div class="header-inner-icon">
                                    <a class="small-cart-icon" href="#">
                                        <img src="assets/img/icons/icon-cart.svg" alt="">
                                        <span class="pro-count white">2</span>
                                    </a>
                                    <div class="cart-dropdown-wrap cart-dropdown-two">
                                        <ul>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img src="assets/img/shop/thumbnail-3.jpg" alt=""></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">Plain Striola Shirts</a></h4>
                                                    <h3><span>1 × </span>$800.00</h3>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img src="assets/img/shop/thumbnail-4.jpg" alt=""></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">Macbook Pro 2023</a></h4>
                                                    <h3><span>1 × </span>$3500.00</h3>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>$383.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-btn">
                                                <a href="cart.html">View cart</a>
                                                <a href="#">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="main-menu-wrapper">
            <div class="mobile-header-inner">
                <div class="mobile-header-top">
                    <div class="mobile-header-logo">
                        <a href="index.html"><img src="assets/img/logo.png" alt="logo" /></a>
                    </div>
                    <div class="mobile-menu-close close-col menu-close-position">
                        <button class="close-style">
                            <i class="icon-top"></i>
                            <i class="icon-bottom"></i>
                        </button>
                    </div>
                </div>
                <div class="mobile-header-content">
                    <div class="mobile-search mobile-search-three mobile-header-border">
                        <form action="product-category-list.html">
                            <input type="text" placeholder="Search for items…" />
                            <button type="submit"><i class="fi-rs-search"></i></button>
                        </form>
                    </div>
                    <div class="mobile-menu-col mobile-header-border">

                        <!-- Mobile Menu -->
                        <nav>
                            <ul class="main-nav">
                                <li class="mobile-menu-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="mobile-menu-item">
                                    <a href="#">Beauty</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Beauty 1</a></li>
                                        <li><a href="#">Beauty 2</a></li>
                                        <li><a href="#">Beauty 3</a></li>
                                        <li><a href="#">Beauty 4</a></li>
                                    </ul>
                                </li>
                                <li class="mobile-menu-item">
                                    <a href="#">Books</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Books 1</a></li>
                                        <li><a href="#">Books 2</a></li>
                                        <li><a href="#">Books 3</a></li>
                                        <li><a href="#">Books 4</a></li>
                                    </ul>
                                </li>
                                <li class="mobile-menu-item">
                                    <a href="#">Computers</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Computers 1</a></li>
                                        <li><a href="#">Computers 2</a></li>
                                        <li><a href="#">Computers 3</a></li>
                                        <li><a href="#">Computers 4</a></li>
                                    </ul>
                                </li>
                                <li class="mobile-menu-item">
                                    <a href="#">Shop</a>
                                    <ul class="dropdown">
                                        <li><a href="cart.html">Shop - Cart</a></li>
                                        <li><a href="address.html">Shop - Address</a></li>
                                        <li><a href="delivery.html">Shop - Delivery</a></li>
                                        <li><a href="checkout.html">Shop - Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="mobile-menu-item">
                                    <a href="#">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="blog-list.html">Blog List</a></li>
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="mobile-menu-item">
                                    <a href="#">Mega menu</a>
                                    <ul class="dropdown">
                                        <li class="mobile-menu-item">
                                            <a href="#">Women's Fashion</a>
                                            <ul class="dropdown">
                                                <li><a href="product-category-list.html">Dresses</a></li>
                                                <li><a href="product-category-list.html">Blouses & Shirts</a></li>
                                                <li><a href="product-category-list.html">Hoodies & Sweatshirts</a></li>
                                                <li><a href="product-category-list.html">Women's Sets</a></li>
                                            </ul>
                                        </li>
                                        <li class="mobile-menu-item">
                                            <a href="#">Men's Fashion</a>
                                            <ul class="dropdown">
                                                <li><a href="product-category-list.html">Jackets</a></li>
                                                <li><a href="product-category-list.html">Casual Faux Leather</a></li>
                                                <li><a href="product-category-list.html">Genuine Leather</a></li>
                                            </ul>
                                        </li>
                                        <li class="mobile-menu-item">
                                            <a href="#">Technology</a>
                                            <ul class="dropdown">
                                                <li><a href="product-category-list.html">Gaming Laptops</a></li>
                                                <li><a href="product-category-list.html">Ultraslim Laptops</a></li>
                                                <li><a href="product-category-list.html">Tablets</a></li>
                                                <li><a href="product-category-list.html">Laptop Accessories</a></li>
                                                <li><a href="product-category-list.html">Tablet Accessories</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mobile-menu-item">
                                    <a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="account.html">My Account</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                        <li><a href="terms-conditions.html">Terms of Service</a></li>
                                    </ul>
                                </li>
                                <li class="mobile-menu-item">
                                    <a href="#">Language</a>
                                    <ul class="dropdown">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">German</a></li>
                                        <li><a href="#">Spanish</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <!-- /Mobile Menu -->

                    </div>
                </div>
            </div>
        </div>
        <!-- /Header -->

        <!-- Main -->
      @yield('content')
        <!-- /Main -->

        <!-- Footer -->
        <footer class="footer">
            <section class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer-about font-md mb-md-3 mb-lg-3 mb-xl-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                                <div class="logo mb-30">
                                    <a href="index.html" class="mb-15"><img src="assets/img/logo.png" alt="logo" /></a>
                                    <p>Integer posuere orci sit amet feugiat pellent que. Suspendisse vel tempor justo, sit amet posuere orci dapibus auctor.Integer posuere orci sit amet.</p>
									<a href="index.html"><img src="assets/img/payment.png" alt="logo" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="footer-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <h4 class="footer-title">Contact Info</h4>
                        <ul class="contact-info">
                            <li><p><i class="fas fa-phone-alt"></i> +3 (523) 555 123 8745</p></li>
                            <li><p><i class="fas fa-envelope"></i> example@domain.com</p></li>
                            <li><p><i class="fas fa-map-marker-alt"></i> Andijan</p></li>
                        </ul>
						<ul class="footer-social-icon">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                    <div class="footer-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <h4 class="footer-title">Usefull Links</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">Product Recall</a></li>
                            <li><a href="#">Gift Vouchers</a></li>
                            <li><a href="#">Returns & Exchange</a></li>
                            <li><a href="#">Shipping Options</a></li>
                            <li><a href="#">Help & FAQs</a></li>
                        </ul>
                    </div>
                    <div class="footer-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <h4 class="footer-title">Quick Links</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="about-us.html">About Us </a></li>
                            <li><a href="product-category-grid.html">Shop Products</a></li>
                            <li><a href="cart.html">My Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
            </section>
            <div class="footer-middle">
				<div class="container wow animate__animated animate__fadeInUp" data-wow-delay="0">
					<div class="row">
						<div class="col-12 mb-30">
							<h4 class="footer-title">Categories</h4>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<ul class="footer-list">
								<li><a href="product-category-list.html">Cable & Accessories</a></li>
								<li><a href="product-category-list.html">Industrial Controls</a></li>
								<li><a href="product-category-list.html">Wiring Accessories</a></li>
							</ul>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							 <ul class="footer-list">
								<li><a href="product-category-list.html">Cable Management</a></li>
								<li><a href="product-category-list.html">Lamps & Tubes</a></li>
								<li><a href="product-category-list.html">Workwear, PPE & Safety</a></li>
							</ul>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							 <ul class="footer-list">
								<li><a href="product-category-list.html">CCTV, Fire & Security</a></li>
								<li><a href="product-category-list.html">Lighting Luminaires</a></li>
								<li><a href="product-category-list.html">CCTV, Fire & Security</a></li>
							</ul>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							 <ul class="footer-list">
								<li><a href="product-category-list.html">Data & Networking</a></li>
								<li><a href="product-category-list.html">Switchgear & Distribution</a></li>
								<li><a href="product-category-list.html">Data & Networking</a></li>
							</ul>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							 <ul class="footer-list">
								<li><a href="product-category-list.html">Domestic & Smart Home</a></li>
								<li><a href="product-category-list.html">Test Equipment</a></li>
								<li><a href="product-category-list.html">Domestic & Smart Home</a></li>
							</ul>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<ul class="footer-list">
								<li><a href="product-category-list.html">Heating & Ventilation</a></li>
								<li><a href="product-category-list.html">Tools & Fixings</a></li>
								<li><a href="product-category-list.html">Heating & Ventilation</a></li>
							</ul>
						</div>
					</div>
                </div>
            </div>
            <div class="footer-bottom wow animate__animated animate__fadeInUp" data-wow-delay="0">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-5">
							<p class="font-sm mb-0">Copyright © 2023 VEBMUHANDIS All rights reserved.</p>
						</div>
						<div class="col-lg-6 col-md-7">
							<ul class="footer-list mb-sm-5 mb-md-0">
								<li><a href="#">My Orders</a></li>
								<li><a href="#">Help</a></li>
								<li><a href="#">Site Map</a></li>
								<li><a href="about-us.html">About</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
            </div>
        </footer>
        <!-- /Footer -->

        <!-- Preloader -->
        <div id="loader-wrapper">
           <div class="preloader d-flex align-items-center justify-content-center">
                <div class="loaderPill">
                    <div class="loaderPill-anim">
                        <div class="loaderPill-anim-bounce">
                            <div class="loaderPill-anim-flop">
                                <div class="loaderPill-pill"></div>
                            </div>
                        </div>
                    </div>
                    <div class="loaderPill-floor">
                        <div class="loaderPill-floor-shadow"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Preloader -->

        <!-- Quick view -->
        <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="btn-close quick-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="feather-x-circle"></i>
                    </button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                <div class="detail-gallery">
                                    <!-- MAIN SLIDES -->
                                    <div class="position-relative">
                                    <div class="product-image-slider">
                                        <figure class="border-radius-10">
                                            <img src="assets/img/shop/product-big-1.jpg" alt="product image">
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="assets/img/shop/product-big-2.jpg" alt="product image">
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="assets/img/shop/product-big-1.jpg" alt="product image">
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="assets/img/shop/product-big-2.jpg" alt="product image">
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="assets/img/shop/product-big-1.jpg" alt="product image">
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="assets/img/shop/product-big-2.jpg" alt="product image">
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="assets/img/shop/product-big-1.jpg" alt="product image">
                                        </figure>
                                    </div>
                                        <span class="zoom-icon"><i class="feather-maximize-2"></i></span>
                                    </div>
                                    <!-- THUMBNAILS -->
                                    <div class="slider-nav-thumbnails">
                                        <div><img src="assets/img/shop/product-big-1.jpg" alt="product image"></div>
                                        <div><img src="assets/img/shop/product-big-2.jpg" alt="product image"></div>
                                        <div><img src="assets/img/shop/product-big-1.jpg" alt="product image"></div>
                                        <div><img src="assets/img/shop/product-big-2.jpg" alt="product image"></div>
                                        <div><img src="assets/img/shop/product-big-1.jpg" alt="product image"></div>
                                        <div><img src="assets/img/shop/product-big-2.jpg" alt="product image"></div>
                                        <div><img src="assets/img/shop/product-big-1.jpg" alt="product image"></div>
                                    </div>
                                </div>
                                <!-- End Gallery -->
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="detail-info">
                                    <h5 class="title-detail">EYEBOGLER Regular Fit Men's Cotton Shirt</h5>
                                    <div class="clearfix product-price-cover">
                                        <div class="product-price primary-color float-left">
                                            <span class="current-price">$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                            <span class="save-price">-72%</span>
                                        </div>
                                    </div>
                                    <ul class="pro-code">
                                        <li>Product Code : <span class="text-black">T285HS</span></li>
                                        <li>Categories : <span class="text-black">Shirt</span></li>
                                    </ul>
                                    <div class="rating d-inline-block mb-3">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ml-5"> (3.5)</span>
                                    </div>
                                    <p class="in-stock text-brand">39 in Stock</p>
                                    <div class="detail-extralink">
                                        <div class="detail-qty border radius">
                                            <a href="#" class="qty-down"><i class="fi-rs-minus-small"></i></a>
                                            <span class="qty-val">1</span>
                                            <a href="#" class="qty-up"><i class="fi-rs-plus-small"></i></a>
                                        </div>
                                    </div>
                                        <div class="product-extra-link2">
                                            <button type="submit" class="button button-add-to-cart me-3"><i class="fi-rs-shopping-cart"></i> ADD TO CART</button>
                                            <a aria-label="Add To Wishlist" class="button btn-wishlist" href="wishlist.html"><i class="fi-rs-heart me-1 ms-1"></i></a>
                                        </div>
                                        <div class="pro-share">
                                            <ul>
                                                <li class="me-2"><span>Share :</span></li>
                                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Detail Info -->

                                    <div class="product-info p-0 border-0">
                                        <div class="tab-style3">
                                            <ul class="nav nav-tabs text-uppercase modal-nav">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab" href="#Specification">Specification</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content shop_info_tab entry-main-content">
                                                <div class="tab-pane fade show active" id="Description">
                                                    <div class="">
                                                        <ul class="pro-desc">
                                                            <li>Product Dimensions : 65 x 46 x 1 cm; 240 Grams
                                                            <li>Date First Available : 31 October 2020</li>
                                                            <li>Manufacturer : Seven Rocks International</li>
                                                            <li>ASIN : B08MCZMNDW</li>
                                                            <li>Item model number : T285HS</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="Specification">
                                                    <ul class="pro-desc">
                                                        <li>Item model number : T285HS</li>
                                                        <li>Department : Men</li>
                                                        <li>Packer : Seven Rocks International</li>
                                                        <li>Importer : Seven Rocks International</li>
                                                        <li>Item Weight : 240 g</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Quick view -->

            <!-- jQuery -->
            <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

            <!-- Bootstrap Core JS -->
            <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

            <!-- Slick JS -->
            <script src="{{asset('assets/plugins/slick/slick.js')}}"></script>

            <!-- Wow JS -->
            <script src="{{asset('assets/js/wow.js')}}"></script>

            <!-- Select2 JS -->
            <script src="{{asset('assets/plugins/select2/select2.min.js')}}"></script>

            <!-- Scrollup JS -->
            <script src="{{asset('assets/js/scrollup.js')}}"></script>

            <!-- Sidebar JS -->
            <script src="{{asset('assets/plugins/theia-sticky-sidebar/jquery.theia.sticky.js')}}"></script>

            <!-- Elevatezoom JS -->
            <script src="{{asset('assets/js/jquery.elevatezoom.js')}}"></script>

            <!-- Scrollbar JS -->
            <script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

            <!-- Waypoints JS -->
            <script src="{{asset('assets/js/waypoints.js')}}"></script>

            <!-- Shop JS -->
            <script src="{{asset('assets/js/shop.js')}}"></script>

            <!-- Custom JS -->
            <script src="{{asset('assets/js/script.js')}}"></script>
    </body>
</html>
