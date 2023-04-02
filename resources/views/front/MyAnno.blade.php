@extends('layouts.front')

@section('content')
    <!-- Main -->
    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 m-auto">
                    <div class="page-header breadcrumb-wrap">
                        <div class="breadcrumb">
                            <a href="index.html" rel="nofollow"><i class="fas fa-home mr-10"></i> Home</a>
                            <span></span> Category <span></span> Computers
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="container mb-30">
                <div class="row flex-row-reverse">
                    <div class="col-lg-4-2">
                        <div class="product-list mb-50">
                            @foreach($announcements as $announcement)
                                @if(Auth::user()->id==$announcement->user_id)
                                    <!-- Single Product -->
                                    <div class="product-card">
                                        <div class="product-img-col">
                                            <div class="product-img product-img-zoom">
                                                <div class="product-img-inner">
                                                    <a href="view-product.html">

                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-badge">
                                                <span class="best">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h2>
                                                <a href="view-product.html">{{$announcement->description}}</a>
                                            </h2>
                                            <div class="product-price">
                                                <span>${{$announcement->price}}</span>
                                                <span class="old-price">$450.00</span>
                                                <span class="discount-tag">-72%</span>
                                            </div>
                                            <div class="rating d-inline-block">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span class="ml-5"> (3.5)</span>
                                            </div>
                                            <div class="detail-extralink">
                                                <span>Qty</span>
                                                <div class="detail-qty border radius">
                                                    <a href="#" class="qty-down"><i class="fi-rs-minus-small"></i></a>
                                                    <span class="qty-val">1</span>
                                                    <a href="#" class="qty-up"><i class="fi-rs-plus-small"></i></a>
                                                </div>
                                                <a class="btn btn-brand cart-btn" href="cart.html"><i
                                                        class="fi-rs-shopping-cart"></i></a>
                                            </div>
                                            <div class="pro-action">
                                                <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                                   data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="product-btn"
                                                   href="wishlist.html"><i
                                                        class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="product-btn" href="#"><i
                                                        class="fi-rs-search"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Single Product -->
                                @endif
                            @endforeach
                        </div>
                        <div class="pagination-area">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fi-rs-angle-left"></i></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">10</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fi-rs-angle-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="pagination-show">
                                <p>Showing 1–8 of 62 results</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /Main -->
@endsection
