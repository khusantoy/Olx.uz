@extends('layouts.front')

@section('content')
    <!-- Main -->
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fas fa-home mr-10"></i> Home</a>
                    <span></span> Cart
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card mb-20">
                            <div class="card-body">
                                <div class="shop-cart-box">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="cart.html" class="active">
                                                <i class="feather-shopping-cart"></i> Shopping Cart
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="address.html">
                                                <i class="feather-map"></i> Address
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="delivery.html">
                                                <i class="feather-truck"></i> Delivery
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="payment.html">
                                                <i class="feather-credit-card"></i> Payment
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive shopping-table">
                            <table class="table">
                                <thead>
                                <tr class="table-head">
                                    <th>Product</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Tax</th>
                                    <th>Discount</th>
                                    <th>Product Price</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="table-head">
                                    <td class="image product-thumbnail">
                                        <a href="#"><img src="assets/img/shop/product-11.jpg" class="img-fluid" alt=""></a>
                                    </td>
                                    <td><a href="#">Cotton Tshirt for Men</a></td>
                                    <td class="text-center detail-info" data-title="Stock">
                                        <div class="detail-extralink mr-15">
                                            <div class="detail-qty border radius">
                                                <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                                <span class="qty-val">1</span>
                                                <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>10%</td>
                                    <td>40%</td>
                                    <td>USD 190.00</td>
                                    <td>USD 190.00</td>
                                    <td><a href="#" class="table-btn-close"><i class="feather-x-circle"></i></a></td>
                                </tr>
                                <tr class="table-head">
                                    <td class="image product-thumbnail">
                                        <a href="#"><img src="assets/img/shop/product-07.jpg" class="img-fluid" alt=""></a>
                                    </td>
                                    <td><a href="#">SAMSUNG Crystal 4K Pro 146 ...</a></td>
                                    <td class="text-center detail-info" data-title="Stock">
                                        <div class="detail-extralink mr-15">
                                            <div class="detail-qty border radius">
                                                <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                                <span class="qty-val">1</span>
                                                <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>8%</td>
                                    <td>60%</td>
                                    <td>USD 300.00</td>
                                    <td>USD 300.00</td>
                                    <td><a href="#" class="table-btn-close"><i class="feather-x-circle"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="shop-cart">
                        <div class="row">
                            <div class="col-lg-8 col-md-6">
                                <div class="shop-cart-action">
                                    <a href="address.html" class="btn continue-btn">Continue Shopping</a>
                                    <a href="#" class="btn basket-btn">Empty Basket</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="shop-cart-info">
                                            <p>Total Price <span>Usd 540.00</span></p>
                                            <p>Goods Total <span>Usd 540.00</span></p>
                                            <p>Tax <span>Usd 0.00</span></p>
                                            <p>Total <span>Usd 540.00</span></p>
                                            <a href="checkout.html" class="btn checkout-btn w-100">Go To Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /Main -->
@endsection
