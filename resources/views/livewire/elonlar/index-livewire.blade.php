<div class="row product-grid" wire:loading.class="opa">
    <!-- Product box -->

    @foreach ($elonlar as $announcement)
        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
            <div class="product-card mb-30">
                <div class="product-img-col">
                    <div class="product-img product-img-zoom">
                        <a href="{{ route('ad-show' , $announcement) }}">
                            @php
                                $name = '';
                                if (count($announcement->images)) {
                                    $name = $announcement->images[0]->name;
                                }
                            @endphp
                            <img style="width: 300px ; height: 300px" src="{{ asset('storage/' . $name) }}" alt="">
                            @php
                                $name = '';
                            @endphp
                        </a>
                    </div>
                    <div class="product-inner-details">
                        <a aria-label="Quick view" class="product-btn" href="{{ route('ad-show', $announcement) }}">
                            <i class="fi-rs-eye"></i>
                        </a>
                        <a aria-label="Search" class="product-btn" href="#">
                            <i class="fi-rs-search"></i>
                        </a>
                        @if(auth()->user())
                            <button aria-label="Add To  Wishlist" wire:click="like({{ $announcement->id }})"
                                    class="product-btn  border border-none bg-white"><i
                                    @if (auth()->user()->isFollowing($announcement)) style="color: red" @endif
                                class="fi-rs-heart "></i>
                            </button>
                        @else
                            <a href="{{route('login')}}" aria-label="Add To  Wishlist"
                                    class="product-btn  border border-none bg-white"><i class="fi-rs-heart "></i>
                            </a>
                        @endif
                        <a href="cart.html" aria-label="Cart" class="product-btn">
                            <i class="fi-rs-shopping-cart"></i>
                        </a>
                    </div>
                    <div class="product-badge">
                        <span class="best">{{ \App\Models\Announcement::TYPES[$announcement->type] }}</span>
                    </div>
                </div>
                <div class="product-content">
                    <h2><a href="{{ route('front.view-product') }}">{{ $announcement->title }}</a></h2>
                    <div class="product-card-bottom mt-0">
                        <div class="product-price">
                            <span>{{ $announcement->price }}</span> so'm
                        </div>
                    </div>
                    <div class="product-card-bottom">
                        <div class="rating d-inline-block mb-3">
                            @if (!empty($announcement->ratings[0]))
                                @livewire('rate.rate-star-livewire',['elon'=>$announcement])
                                (@livewire('rate.rate-livewire',['elon'=>$announcement]))
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick view -->
            <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModal"
                 aria-hidden="true">
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
                                                <a href="#" class="qty-down"><i
                                                        class="fi-rs-minus-small"></i></a>
                                                <span class="qty-val">1</span>
                                                <a href="#" class="qty-up"><i class="fi-rs-plus-small"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-extra-link2">
                                            <button type="submit" class="button button-add-to-cart me-3"><i
                                                    class="fi-rs-shopping-cart"></i> ADD TO CART
                                            </button>
                                            <a aria-label="Add To Wishlist" class="button btn-wishlist"
                                               href="wishlist.html"><i class="fi-rs-heart me-1 ms-1"></i></a>
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
                                                    <a class="nav-link active" id="Description-tab"
                                                       data-bs-toggle="tab" href="#Description">Description</a>
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

        </div>
    @endforeach
    <!-- /Product box -->

</div>
