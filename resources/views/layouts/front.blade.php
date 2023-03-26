<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'OLX')</title>
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @livewireStyles

    <style>

        .opa{
            opacity: .1;
        }

    </style>
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
                                    <a class="language-dropdown-active" href="#">English <i
                                            class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li>
                                            <a href="#"><img src="assets/img/flags/flag-en.png"
                                                    alt="">English</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/img/flags/flag-uz.png"
                                                    alt="">O'zbek</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/img/flags/flag-ru.png"
                                                    alt="">Pусский</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-details">
                            <div class="header-inner">
                                {{-- @if (Auth::user()) --}}
                                    <div class="header-inner-icon">
                                        <a href="{{ route('front.wishlist') }}" class="d-flex align-items-center">
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
                                                    <a href="{{ route('front.account') }}">My Account</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('front.wishlist') }}">Wishlist</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('logout.front') }}">Sign Out</a>
                                                </li>
                                            </ul>
                                        </div>
                                    {{-- @else --}}
                                        {{-- <a href="{{ route('login') }}" class="text-danger h3">Login</a> --}}

                                    </div>
                                {{-- @endif --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle d-none d-lg-block">
            <div class="container">
                <div class="header-col">
                    <div class="header-right">
                        <div class="header-search">
                            @livewire('elonfilter')
                        </div>
                    </div>

                    <!-- Button trigger modal -->

                    <div>
                        <!-- Modal -->
                        @if (Auth::user())
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                E'lon berish
                            </button>
                        @else
                            <button class="btn btn-primary">
                                <a href="{{ route('login') }}" class="text-white">E'lon berish uchun tizimga kirish</a>
                            </button>
                        @endif

                        <div class="modal fade" id="exampleModalCenter" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                @livewire('create-ad')
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="header-bottom sticky-bar">
            <div class="container">
                <div class="header-col">


                    @livewire('categories-livewire', ['categories' => $categories])





                    <div class="contact-item d-none d-lg-flex">
                        <img src="assets/img/icons/icon-headphone-white.svg" alt="contact-number">
                        <p>CALL US NOW<span>+998 74 000 0000</span></p>
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
                                                <a href="#"><img src="assets/img/shop/thumbnail-3.jpg"
                                                        alt=""></a>
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
                                                <a href="#"><img src="assets/img/shop/thumbnail-4.jpg"
                                                        alt=""></a>
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
                        <div class="footer-about font-md mb-md-3 mb-lg-3 mb-xl-0 wow animate__animated animate__fadeInUp"
                            data-wow-delay="0">
                            <div class="logo mb-30 mt-20">
                                <p>Integer posuere orci sit amet feugiat pellent que. Suspendisse vel tempor justo, sit
                                    amet posuere orci dapibus auctor.Integer posuere orci sit amet.</p>
                                <a href="index.html"><img src="assets/img/payment.png" alt="logo" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="footer-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <h4 class="footer-title">Contact Info</h4>
                        <ul class="contact-info">
                            <li>
                                <p><i class="fas fa-phone-alt"></i> +3 (523) 555 123 8745</p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i> example@domain.com</p>
                            </li>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i> Andijan</p>
                            </li>
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

    <!-- jQuery -->
    @livewireScripts


    <script>
        document.addEventListener('qaytadanrender', () => {

               document.getElementById('qaytadanrender').click();

        })
    </script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Slick JS -->
    <script src="{{ asset('assets/plugins/slick/slick.js') }}"></script>

    <!-- Wow JS -->
    <script src="{{ asset('assets/js/wow.js') }}"></script>

    <!-- Select2 JS -->
    <script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>

    <!-- Scrollup JS -->
    <script src="{{ asset('assets/js/scrollup.js') }}"></script>

    <!-- Sidebar JS -->
    <script src="{{ asset('assets/plugins/theia-sticky-sidebar/jquery.theia.sticky.js') }}"></script>

    <!-- Elevatezoom JS -->
    <script src="{{ asset('assets/js/jquery.elevatezoom.js') }}"></script>

    <!-- Scrollbar JS -->
    <script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <!-- Waypoints JS -->
    <script src="{{ asset('assets/js/waypoints.js') }}"></script>

    <!-- Shop JS -->
    <script src="{{ asset('assets/js/shop.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

    {{-- boostrap --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
