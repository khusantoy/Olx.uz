<div class="row product-grid">
    <!-- Product box -->

    @foreach ($elonlar as $announcement)
        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
            <div class="product-card mb-30">
                <div class="product-img-col">
                    <div class="product-img product-img-zoom">
                        <a href="{{ route('front.view-product') }}">
                            @php
                            if (!count($announcement->images)==0){

                            $name=$announcement->images[0]->name;
                            }
                            @endphp
                            <img src="{{asset('images/'.$name)}}" alt="">
                            @php

                                $name='';

                            @endphp
                        </a>
                    </div>
                    <div class="product-inner-details">
                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                        <a aria-label="Search" class="product-btn" href="#"><i
                                class="fi-rs-search"></i></a>
                        <a aria-label="Add To Wishlist" class="product-btn"
                            href="{{ route('front.wishlist') }}"><i class="fi-rs-heart"></i></a>
                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                class="fi-rs-shopping-cart"></i></a>
                    </div>
                    <div class="product-badge">
                        <span class="best">{{ $announcement->type }}</span>
                    </div>
                </div>
                <div class="product-content">
                    <h2><a href="{{ route('front.view-product') }}">{{ $announcement->title }}</a></h2>
                    <div class="product-card-bottom mt-0">
                        <div class="product-price">
                            <span>$ {{ $announcement->price }}</span>
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
    @endforeach
    <!-- /Product box -->

</div>
