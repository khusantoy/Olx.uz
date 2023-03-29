@extends('layouts.front')

@section('content')

    <style>
        .rating-stars-container {
        text-align: center;
        }

        .rating-stars {
        display: inline-block;
        margin: 20px;
        }
        .rating-star {
        font-size: 44px;
        cursor: pointer
        }

        .fa-star {
        color: #00A8CC;
        }


        .bottom-message {
        font-size: 0.85em;
        }

        .sr-navigator-container.visible-sm-block {
        margin-top: 30px;
        }

        .notes-container {
        margin: auto;
        margin-top: 20px;
        width: 50%;
        }
        #myNotesView {
        display: block;
        }

        .notes-buttons {
        margin-top: 10px;
        }

        @media (max-width: 767px) {
        .notes-container {
        width: 100%;
        }
        }

        .btn-ls-blue {
        background-color: #4984a3;
        border: none;
        -o-transition: background-color 0.215s;
        -moz-transition: background-color 0.215s;
        -webkit-transition: background-color 0.215s;
        transition: background-color 0.215s;
        }

        .btn-ls-blue:hover,
        .btn-ls-blue:active,
        .btn-ls-blue:focus,
        .btn-ls-blue.active {
        background-color: #00A8CC;
        }

        .hide {
        display: none;
        }
    </style>
    <!-- Main -->
    <main class="main">
        <div class="container">
            <div class="page-header breadcrumb-wrap">
                <div class="breadcrumb">
                    <a href="{{route('front')}}" rel="nofollow"><i class="fas fa-home mr-10"></i>Home</a>
                    <span></span> <a href="shop-grid-right.html"> Mens T-Shirt </a> <span></span> EYEBOGLER Regular Fit
                    Men's
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
                                                        <img src='{{ asset("storage/$image->name") }}'
                                                             alt="product image"/>
                                                    </figure>
                                                @endforeach

                                            </div>
                                            <span class="zoom-icon"><i class="feather-maximize-2"></i></span>
                                        </div>
                                        <!-- THUMBNAILS -->
                                        <div class="slider-nav-thumbnails">
                                            @foreach ($announcement->images as $image)
                                                <div>
                                                    <img src='{{ asset("storage/$image->name") }}' alt="product image"/>
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
                                            <li>Subcategory : <span
                                                    class="text-black">{{ $announcement->category->title }}</span>
                                            </li>
                                        </ul>
                                        <div class="rating d-inline-block mb-3">
                                            {{-- @dd($announcement->ratings) --}}
                                            @if (!empty($announcement->ratings[0]))
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> {{ $announcement->ratings[0]->rating }}</span>
                                            @else
                                                <span class="ml-5"> Rating yo'q</span>
                                            @endif
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

                                        @livewire('like',['elon'=>$announcement])
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



                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Launch demo modal
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <span id="rateMe1"></span>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
                                                    Cheema Chowk, Ludhiana
                                                </li>
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
                                                                         alt=""/>
                                                                    <img class="hover-img"
                                                                         src="assets/img/shop/product-11.jpg"
                                                                         alt=""/>
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
                                                                    <span class="ml-5"> ()</span>
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
    <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
