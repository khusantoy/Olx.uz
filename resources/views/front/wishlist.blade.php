@extends('layouts.front')

@section('content')
    <!-- Main -->
    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fas fa-home mr-10"></i> Home</a>
                    <span></span> Profile
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="card mb-30">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <div class="d-flex align-items-center">
                                            <div class="account-profile-img">
                                                <img src="assets/img/profile-img.jpg" alt="Image">
                                            </div>
                                            <div class="account-details">
                                                <p>Hello,</p>
                                                <h4>{{ Auth::user()->name }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="dashboard-menu">
                                    <ul class="nav flex-column" id="accordionExample">
                                        <li class="nav-item" id="dashboard-one">
                                            <a class="nav-link accordion-button" href="#" data-bs-toggle="collapse"
                                               data-bs-target="#collapseOne" aria-expanded="false"
                                               aria-controls="collapseOne"><i class="fi-rs-user mr-10"></i>Account
                                                Information</a>
                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                 aria-labelledby="dashboard-one" data-bs-parent="#accordionExample">
                                                <ul class="dashboard-sub-link">
                                                    <li><a href="{{ route('front.account') }}">My Profile</a></li>
                                                    <li><a href="manage-address.html">Manage address</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="orders.html"><i
                                                    class="fi-rs-shopping-cart mr-10"></i>My Orders</a>
                                        </li>
                                        <li class="nav-item" id="dashboard-two">
                                            <a class="nav-link active accordion-button collapsed" href="#"
                                               data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                               aria-expanded="true" aria-controls="collapseTwo">
                                                <i class="fi-rs-heart mr-10"></i>My Stuff</a>
                                            <div id="collapseTwo" class="accordion-collapse collapse show"
                                                 aria-labelledby="dashboard-two" data-bs-parent="#accordionExample">
                                                <ul class="dashboard-sub-link">
                                                    <li><a href="wishlist.html" class="active">My Wishlist</a></li>
                                                    <li><a href="notifications.html">Notifications</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('logout.front') }}"><i
                                                    class="fi-rs-sign-out mr-10"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="account dashboard-content">
                                    <div class="card border-0 mb-25">
                                        <div
                                            class="card-header card-header-border d-flex align-items-center justify-content-between pt-0">
                                            <h3 class="card-title">My Wishlist</h3>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                    @foreach($announcements as $announcement)
                                        @foreach(Auth::user()->followings()->get() as $f)
                                            @if($f->followable_id==$announcement->id)
                                        <div class="col-lg-4">
                                            <div class="card mb-25">
                                                <div class="card-body">
                                                    <div class="wishlist-img">
                                                        @foreach ($announcement->images as $image)
                                                        <a href="view-product.html">
                                                            <img src="{{asset("storage/$image->name") }}" alt=""
                                                                 class="img-fluid">
                                                        </a>
                                                        @endforeach
                                                        <a href="#" class="wishlist-delete-btn">
                                                            <i class="feather-trash-2"></i>
                                                        </a>
                                                    </div>
                                                    <div class="wishlist-content-wrap">
                                                        <h2><a href="view-product.html">{{$announcement->title}}</a></h2>
                                                        <div class="wishlist-card-bottom mt-0">
                                                            <div class="wishlist-price">
                                                                <span>${{$announcement->price}}</span>
                                                                <span class="old-price">$ 450.00</span>
                                                                <span class="discount-tag">-72%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @endforeach
                                    @endforeach
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

