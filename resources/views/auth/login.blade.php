<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OLX - Qulay joyda xaridlar</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    @livewireStyles
</head>
<body>

<!-- Main -->
<main class="main">
    <div class="container">
        <div class="page-header breadcrumb-wrap">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow"><i class="fas fa-home mr-10"></i>Home</a>
                <span></span> Login
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                           <livewire:auth.login-livewire-real></livewire:auth.login-livewire-real>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="new-customer">
                                <h4 class="log-title">New Customer</h4>
                                <p>Sign up for early Sale access plus tailored new arrivals, trends and promotions. To opt out, click unsubscribe in our emails.</p>
                                <a href="{{route('register')}}" class="btn btn-reg">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- /Main -->

<!-- Preloader -->
<div id="loader-wrapper">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="loaderPill">
            <div class="loaderPill-anim">
                <div class="loaderPill-anim-bounce">
                    <div class="loaderPill-anim-flop">
                        <div class="loaderPill-pill"></div>
                    </div>
                </div>
            </div>
            <div class="loaderPill-floor">
                <div class="loaderPill-floor-shadow"></div>
            </div>
        </div>
    </div>
</div>
<!-- /Preloader -->

<!-- jQuery -->
@livewireScripts
<script src="assets/js/jquery-3.6.0.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>

<!-- Slick JS -->
<script src="assets/plugins/slick/slick.js"></script>

<!-- Wow JS -->
<script src="assets/js/wow.js"></script>

<!-- Select2 JS -->
<script src="assets/plugins/select2/select2.min.js"></script>

<!-- Scrollup JS -->
<script src="assets/js/scrollup.js"></script>

<!-- Sidebar JS -->
<script src="assets/plugins/theia-sticky-sidebar/jquery.theia.sticky.js"></script>

<!-- Elevatezoom JS -->
<script src="assets/js/jquery.elevatezoom.js"></script>

<!-- Scrollbar JS -->
<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.js"></script>

<!-- Waypoints JS -->
<script src="assets/js/waypoints.js"></script>

<!-- Shop JS -->
<script src="assets/js/shop.js"></script>

<!-- Custom JS -->
<script src="assets/js/script.js"></script>
</body>
</html>
