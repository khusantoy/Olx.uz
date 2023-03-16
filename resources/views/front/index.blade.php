@extends('layouts.front')

@section('title')
    OLX
@endsection


@section('content')
    <main class="main">
        <!-- Top Products -->
        <section class="product-tab-section product-section">
            <div class="container">
                <div class="section-title wow animate__animated animate__fadeIn">
                    <h3>Premium Ads</h3>
                </div>
                <div class="wow animate__animated animate__fadeIn mb-40">
                    <div class="row justify-content-between">
                        <div class="col-12 col-lg-10 col-md-10">
                            <ul class="nav nav-tabs links" id="product-tab-nav" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#beauty" type="button" role="tab" aria-selected="true">Light cars</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tshirt" type="button" role="tab" aria-selected="false">Buses</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#computer" type="button" role="tab" aria-selected="false">Trucks</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nav-tab-four" data-bs-toggle="tab" data-bs-target="#luxuriousbeauty" type="button" role="tab" aria-selected="false">Spare parts</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nav-tab-four" data-bs-toggle="tab" data-bs-target="#luxuriousbeauty" type="button" role="tab" aria-selected="false">Trailers</button>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-2 col-md-2 text-end">
                            <a href="{{asset(route('front.product-category'))}}" class="view-more">View More</a>
                        </div>
                    </div>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content" id="product-tab-content">
                    <div class="tab-pane fade" id="beauty" role="tabpanel">

                        <div class="row product-grid">

                            <!-- Product box -->
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card mb-30">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-19.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="{{route('front.wishlist')}}"><i class="fi-rs-heart"></i></a>
                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">ADS Color Series Makeup Kit</a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card mb-30">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-20.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">Makeup Kit & brush</a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card mb-30">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-21.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">La Era White Pearl Luxury</a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card mb-30">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-22.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">Nivis beauty Lotions</a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card mb-30">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-23.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">DS Beauty Rollers</a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card mb-30">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-24.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">Starawbeery red Lipstick</a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card mb-30">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-25.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">Beauty Eyeshadow Highlighter</a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card mb-30">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-26.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">Moisturising cream for face</a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                        </div>
                    </div>
                    <!-- /Product Tab -->

                    <!-- Product Tab-->
                    <div class="tab-pane fade show active" id="tshirt" role="tabpanel">
                        <div class="row product-grid">
                            <!-- Product box -->
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card mb-30">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-10.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="{{route('front.wishlist')}}"><i class="fi-rs-heart"></i></a>
                                            <a href="{{route('front.cart')}}" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">Double color Tshirt for Men</a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$28.85</span>
                                                <span class="old-price">$32.8</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->
                        </div>
                    </div>
                    <!-- /Product Tab -->

                    <!-- Product Tab -->
                    <div class="tab-pane fade" id="computer" role="tabpanel">
                        <div class="row product-grid">
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card mb-30">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-27.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">Apris Business Laptop </a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$28.85</span>
                                                <span class="old-price">$32.8</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card mb-30">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-28.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">Multimedia USB Keyboard</a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$28.85</span>
                                                <span class="old-price">$32.8</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card mb-30">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-29.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">RHD Plus Tablet</a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$28.85</span>
                                                <span class="old-price">$32.8</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card mb-30">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-30.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">Thin & Light Laptop</a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$28.85</span>
                                                <span class="old-price">$32.8</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card mb-30">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-31.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">M75 Wireless Mouse</a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$28.85</span>
                                                <span class="old-price">$32.8</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-30.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">Light Weight BH 453 Laptop</a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$28.85</span>
                                                <span class="old-price">$32.8</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-28.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">D5 Wired Keyboard white</a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$28.85</span>
                                                <span class="old-price">$32.8</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-27.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">M series Laptop</a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$28.85</span>
                                                <span class="old-price">$32.8</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                        </div>
                    </div>
                    <!-- /Product Tab -->

                    <!-- Product Tab -->
                    <div class="tab-pane fade" id="luxuriousbeauty" role="tabpanel">
                        <div class="row product-grid">

                            <!-- Product box -->
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card mb-30">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-22.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">Nivis beauty Lotions</a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card mb-30">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-23.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">DS Beauty Rollers</a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card mb-30">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-19.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">ADS Color Series Makeup Kit</a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card mb-30">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-25.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">Beauty Eyeshadow Highlighter</a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card mb-30">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-26.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">Moisturising cream for face</a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card mb-30">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-21.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">La Era White Pearl Luxury</a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card mb-30">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-24.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">Starawbeery red Lipstick</a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-card mb-30">
                                    <div class="product-img-col">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('front.view-product')}}">
                                                <img src="assets/img/shop/product-20.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-inner-details">
                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                        </div>
                                        <div class="product-badge">
                                            <span class="best">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2><a href="{{route('front.view-product')}}">Makeup Kit & brush</a></h2>
                                        <div class="product-card-bottom mt-0">
                                            <div class="product-price">
                                                <span>$ 350.00</span>
                                                <span class="old-price">$ 450.00</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                        </div>
                    </div>
                </div>
                <!-- /Product Tab -->

            </div>
        </section>
        <!-- /Top Products -->
    </main>
@endsection
