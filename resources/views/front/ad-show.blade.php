@extends('layouts.front')

@section('content')
    <!-- Main -->
    <main class="main">
        <div class="container">
            <div class="page-header breadcrumb-wrap">
                <div class="breadcrumb">
                    <a href="{{route('front')}}" rel="nofollow"><i class="fas fa-home mr-10"></i>Home</a>
                    <span></span> <a href="shop-grid-right.html"> Mens T-Shirt </a> <span></span> EYEBOGLER Regular Fit Men's
                    Cotton T-Shirt
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-5 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                    <div class="detail-gallery">
                                        <!-- MAIN SLIDES -->
                                        <div class="position-relative">
                                            <div class="product-image-slider">
                                                @foreach ($announcement->images as $image)
                                                    <figure class="border-radius-7">
                                                        <img src='{{ asset("storage/$image->name") }}' alt="product image" />
                                                    </figure>
                                                @endforeach

                                            </div>
                                            <span class="zoom-icon"><i class="feather-maximize-2"></i></span>
                                        </div>
                                        <!-- THUMBNAILS -->
                                        <div class="slider-nav-thumbnails">
                                            @foreach ($announcement->images as $image)
                                                <div>
                                                    <img src='{{ asset("storage/$image->name") }}' alt="product image" />
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- End Gallery -->
                                </div>
                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    <div class="detail-info pr-30 pl-30">
                                        <h4 class="title-detail">{{ $announcement->title }}</h4>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <span class="current-price">$ {{ $announcement->price }}</span>
                                                <span class="old-price">$ 450.00</span>
                                                <span class="save-price">-72%</span>
                                            </div>
                                        </div>
                                        <ul class="pro-code">
                                            <li>Product Code : <span class="text-black">T285HS</span></li>
                                            <li>Subcategory : <span class="text-black">{{ $announcement->category->title }}</span>
                                            </li>
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
                                            <div class="size-select">
                                                <select class="form-select">
                                                    <option>Size : Small ( $ 15.00 )</option>
                                                    <option>Size : Medium ( $ 20.00 )</option>
                                                    <option>Size : Large ( $ 25.00 )</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="product-extra-link2">
                                            <button type="submit" class="button button-add-to-cart me-3"><i
                                                    class="fi-rs-shopping-cart"></i>Add to cart</button>
                                            <a aria-label="Add To Wishlist" class="button btn-wishlist"
                                                href="wishlist.html"><i class="fi-rs-heart"></i>Like</a>
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
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="tab-style3">
                                    <ul class="nav nav-tabs text-uppercase">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="Description-tab" data-bs-toggle="tab"
                                                href="#Description">Description</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab"
                                                href="#Specification">Specification</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content shop_info_tab entry-main-content">
                                        <div class="tab-pane fade show active" id="Description">
                                            <div class="">
                                                <ul class="pro-desc">
                                                    {{ $announcement->description }}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Specification">
                                            <ul class="pro-desc">
                                                <li>Item model number : T285HS</li>
                                                <li>Department : Men</li>
                                                <li>Manufacturer : Seven Rocks International, Seven Rocks International,
                                                    Cheema Chowk, Ludhiana</li>
                                                <li>Packer : Seven Rocks International</li>
                                                <li>Importer : Seven Rocks International</li>
                                                <li>Item Weight : 240 g</li>
                                                <li>Item Dimensions LxWxH : 65 x 46 x 1 Centimeters</li>
                                                <li>Net Quantity : 1 Piece</li>
                                                <li>Included Components : T-Shirt</li>
                                                <li>Generic Name : T-Shirt</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Products -->
                            <section class="feature-products">
                                <div class="container">
                                    <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                                        <h3>FEATURED PRODUCTS</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="feature-product-slider arrow-center position-relative">
                                                <div class="slider-arrow slider-arrow-two carousel-4-columns-arrow"
                                                    id="carousel-4-columns-arrows"></div>
                                                <div class="carousel-4-columns carousel-arrow-center"
                                                    id="carousel-4-columns">
                                                    {{-- here foreach for rendering ads --}}
                                                    <div class="product-card wow animate__animated animate__fadeIn"
                                                        data-wow-delay=".1s">
                                                        <div class="product-img-col">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="view-product.html">
                                                                    <img class="default-img"
                                                                        src="assets/img/shop/product-11.jpg"
                                                                        alt="" />
                                                                    <img class="hover-img"
                                                                        src="assets/img/shop/product-11.jpg"
                                                                        alt="" />
                                                                </a>
                                                            </div>
                                                            <div class="product-inner-details">
                                                                <a aria-label="Quick view" class="product-btn"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#quickViewModal"><i
                                                                        class="fi-rs-eye"></i></a>
                                                                <a aria-label="Search" class="product-btn"
                                                                    href="#"><i class="fi-rs-search"></i></a>
                                                                <a aria-label="Add To Wishlist" class="product-btn"
                                                                    href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                                                <a href="cart.html" aria-label="Cart"
                                                                    class="product-btn"><i
                                                                        class="fi-rs-shopping-cart"></i></a>
                                                            </div>
                                                            <div class="product-badge">
                                                                <span class="best">Sale</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <h2><a href="view-product.html">Cotton Tshirt for Women</a>
                                                            </h2>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- /Products -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /Main -->
@endsection
