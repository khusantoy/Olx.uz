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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles

    <style>
        /*.opa{*/
        /*    opacity: .1;*/
        /*}*/
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
                                    <a class="language-dropdown-active" href="#">O'zbek <i
                                            class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li>
                                            <a href="#"><img src="assets/img/flags/flag-en.png"
                                                    alt="">English</a>
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
                    <div class="col-xl-6 col-lg-6">
                        <div class="header-details">
                            <div class="header-inner">
                                @if (Auth::user())
                                    <div class="header-inner-icon">
                                        <a href="{{ route('front.wishlist') }}" class="d-flex align-items-center">
                                            <span><img src="assets/img/icons/icon-wishlist.svg" alt=""></span>
                                            <span class="lable mt-0">Istaklar ()</span>
                                        </a>
                                    </div>
                                    <div class="header-inner-icon">
                                        <a href="#" class="d-flex align-items-center" >
                                            <span><img src="assets/img/icons/icon-profile.svg" alt=""></span>
                                            <span class="lable mt-0">Hisobingiz</span>
                                        </a>
                                        <div class="cart-dropdown-wrap account-dropdown">
                                            <ul>
                                                <li>
                                                    <a href="{{ route('front.account') }}">Hisobim</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('front.wishlist') }}">Istaklar</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('front.MyAnno') }}">Menig E'lonlarim</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('logout.front') }}">Chiqish</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="header-inner-icon">
                                        <button class="btn btn-primary" style="border-radius: 35px" data-toggle="modal"
                                        data-target="#exampleModalCenter">E'lon berish</button>
                                    </div>
                                    @else
                                    <div class="header-inner-icon">
                                        <a href="{{ route('login') }}" class="d-flex align-items-center" style="margin-right: 30px">
                                            <span><img src="assets/img/icons/icon-profile.svg" alt=""></span>
                                            <span class="lable mt-0">Hisobingiz</span>
                                        </a>
                                        <a href="{{ route('login') }}" >
                                            <button  class="text-white btn btn-primary" style="border-radius: 35px" >E'lon berish</button>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle d-none d-lg-block">
            <div class="container">
                <div class="header-col">
                    <div class="header">
                        <div class="header-logo">
                            <a href="{{ route('front') }}" style="color:blue;" class="h2" >O|X</a>
                        </div>
                    </div><div class="header-right">
                        <div class="header-search">
                            @livewire('elonfilter')
                        </div>
                    </div>

                    <!-- Button trigger modal -->

                    <div>
                        <!-- Modal -->
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
                        <img src="{{asset('assets/img/icons/icon-headphone-white.svg')}}" alt="contact-number">
                        <p>Biz bilan bog'lanish<span>+998 74 000 0000</span></p>
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
        <div class="footer-middle">
            <div class="container wow animate__animated animate__fadeInUp" data-wow-delay="0">
                <div class="row">
                    <div class="col-6 mb-30">
                        <h4 class="footer-title">Kategoriyalar</h4>
                    </div>
                    <div class="col-6 mb-30">
                        <h4 class="footer-title">FAQ</h4>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <ul class="footer-list">
                            <li><a href="product-category-list.html">Transport</a></li>
                            <li><a href="product-category-list.html">Ko'chmas mulk</a></li>
                            <li><a href="product-category-list.html">Bolalar dunyosi</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <ul class="footer-list">
                            <li><a href="product-category-list.html">Elektronika</a></li>
                            <li><a href="product-category-list.html">Kitoblar</a></li>
                            <li><a href="product-category-list.html">Hayvonlar</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <ul class="footer-list">
                            <li><a href="product-category-list.html">Xizmatlar</a></li>
                            <li><a href="product-category-list.html">Bepul</a></li>
                            <li><a href="product-category-list.html">Mevalar</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <ul class="footer-list">
                            <li><a href="product-category-list.html">Qanday sotib olish?</a></li>
                            <li><a href="product-category-list.html">Qanday sotish?</a></li>
                            <li><a href="product-category-list.html">Xavfsizlik qoidalari</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <ul class="footer-list">
                            <li><a href="product-category-list.html">Maxfiylik siyosati</a></li>
                            <li><a href="product-category-list.html">Teskari aloqa</a></li>
                            <li><a href="product-category-list.html">Career</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <ul class="footer-list">
                            <li><a href="product-category-list.html">Foydalanish shartlari</a></li>
                            <li><a href="product-category-list.html">Saytda reklama</a></li>
                            <li><a href="product-category-list.html">Yordam</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom wow animate__animated animate__fadeInUp" data-wow-delay="0">
            <div class="container">
                <div class="row align-items-center">
                    <div>
                        <p class="font-sm mb-0 text-center">Copyright © 2023 Web Team 1</p>
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
        document.addEventListener('qaytadanrender2', () => {

            document.getElementById('qaytadanrender2').click();

        })
        document.addEventListener('supcategory_click', () => {

            document.getElementById('supcategory_click').click();

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
