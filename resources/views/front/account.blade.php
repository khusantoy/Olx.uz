@extends('layouts.front')

@section('content')
    <!-- Main -->
    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index" rel="nofollow"><i class="fas fa-home mr-10"></i> Home</a>
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
                                                <p>Hush kelibsiz,</p>
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
                                            <a class="nav-link active accordion-button collapsed" href="#"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="false" aria-controls="collapseOne"><i
                                                    class="fi-rs-user mr-10"></i>Account Information</a>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="dashboard-one" data-bs-parent="#accordionExample">
                                                <ul class="dashboard-sub-link">
                                                    <li><a href="{{ route('front.account') }}" class="active">My Profile</a></li>
                                                    <li><a href="{{ route('front.MyAnno') }}">My Ads</a></li>
                                                    <li><a href="{{ route('front.history') }}">History</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('front.wishlist') }}"><i
                                                    class="fi-rs-heart mr-10"></i>Like</a>
                                        </li>
                                        <li class="nav-item" id="dashboard-two">
                                            <a class="nav-link accordion-button" href="#" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="true"
                                                aria-controls="collapseTwo">
                                                <i class="fi-rs-shopping-cart mr-10"></i>My Stuff</a>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="dashboard-two" data-bs-parent="#accordionExample">
                                                <ul class="dashboard-sub-link">

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
                                    <div class="card">
                                        <div class="card-header d-flex align-items-center justify-content-between">
                                            <h3 class="card-title">Personal Information</h3>
                                            <div class="account-edit">



                                                <a type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#change-user-settings" onclick="user()">Edit</a>
                                                <span>|</span>
                                                <a aria-label="passwordmodal" class="edit-modal-btn" data-bs-toggle="modal"
                                                    data-bs-target="#passwordmodal">Change Password</a>
                                            </div>
                                        </div>


                                        <div class="modal fade" id="change-user-settings" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                @livewire('edit-user-settings')
                                            </div>
                                        </div>

                                        <div class="card-body profile-body">
                                            <p><span>Name :</span> {{ Auth::user()->name }}</p>
                                            <p><span>Email :</span> {{ Auth::user()->email }}</p>
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

    <script>
        function user() {
            Livewire.emit('user_editing', {{ auth()->user()->id }})
        }
    </script>
@endsection
