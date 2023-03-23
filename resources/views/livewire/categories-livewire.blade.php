<div class="header-nav d-none d-lg-flex">
    <div class="main-menu d-none d-lg-block">
        <nav>
            <ul>
                @foreach ($categories as $category)
                    <li class="position-static">
                        <a wire:click="$emit('category_click',{{$category->id}});" href="#">{{ $category->title }}</i></a>

                       
                        <ul class="mega-menu d-none" >
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
                            @foreach (array_chunk($category->supCategories->toArray(), 5) as $supCategoryMassiv)
                                <li class="sub-mega-menu sub-mega-menu-one">
                                    <ul class="dropdown">
                                        @foreach ($supCategoryMassiv as $supCategory)
                                            <li><a
                                                    href="product-category-list.html">{{ $supCategory['title'] }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>

                     
                    </li>
                @endforeach


            </ul>
        </nav>
    </div>
</div>