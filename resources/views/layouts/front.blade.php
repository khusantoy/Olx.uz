<!-- Loopple Templates: https://www.loopple.com/templates | Copyright Loopple (https://www.loopple.com) | This copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @yield('title', 'Classified')
    </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://demos.creative-tim.com/soft-ui-design-system/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="https://demos.creative-tim.com/soft-ui-design-system/assets/css/nucleo-svg.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/loopple/loopple.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="javascript:;" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom">AdSiter</a>
            <a href="javascript:;" class="btn btn-sm  bg-gradient-info  btn-round mb-0 ms-auto d-lg-none d-block">Buy Now</a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
                <ul class="navbar-nav navbar-nav-hover mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center">Home
                        </a>

                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center">Browse Ads</a>

                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center">About</a>

                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center">Clients</a>

                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center">Contact</a>

                    </li>


                </ul>
                <ul class="navbar-nav d-lg-block d-none">
                    <li class="nav-item">
                        <a href="javascript:;" class="btn btn-sm btn-round mb-0 me-1 btn-success">submit ads</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="">
        <div class="page-header min-vh-50" style="background-image: url(https://images.unsplash.com/photo-1557858310-9052820906f7?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2070&amp;q=80)">
            <span class="mask bg-dark opacity-8"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-white text-center">
                        <h2 class="text-white">All You Need Is Here &amp; Classified</h2>
                        <p class="lead">Browse from more than 15,000,000 adverts while new ones come on daily bassis</p>
                        <button type="submit" class="btn bg-gradient-success mt-3 mb-0">Read more</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row bg-white shadow mt-n5 border-radius-lg pb-4 p-3 mx-sm-0 mx-1 position-relative">
                <div class="col-lg-3 mt-2">
                    <div class="input-group">
                        <input class="form-control" placeholder="Search for" aria-label="Search for" type="text">
                    </div>
                </div>
                <div class="col-lg-3 mt-2">
                    <div class="input-group">
                        <input class="form-control" placeholder="Location in" aria-label="Location in" type="text">
                    </div>
                </div>
                <div class="col-lg-3 mt-2">
                    <div class="input-group">
                        <input class="form-control" placeholder="Category" aria-label="Category" type="text">
                    </div>
                </div>
                <div class="col-lg-3 mt-2">
                    <button type="button" class="btn bg-gradient-success w-100 mb-0">Search</button>
                </div>
                <div class="col-md-12 text-center">
                    <div class="btn btn-dark mt-4 mb-0">
                        auto mobile
                    </div>
                    <div class="btn shadow-none mt-4 mb-0">
                        Fashion
                    </div>
                    <div class="btn shadow-none mt-4 mb-0">
                        Mother &amp; Child
                    </div>
                    <div class="btn shadow-none mt-4 mb-0">
                        Jobs
                    </div>
                    <div class="btn shadow-none mt-4 mb-0">
                        Real Estate
                    </div>
                    <div class="btn shadow-none mt-4 mb-0">
                        Pets
                    </div>
                    <div class="btn shadow-none mt-4 mb-0">
                        sport
                    </div>
                    <div class="btn shadow-none mt-4 mb-0">
                        more
                    </div>
                </div>
            </div>
        </div>
    </header>


    @yield('content')
 




    <footer class="footer py-5">
        <div class="container">
            <div class="row ">
                <div class="col-lg-2 col-md-2 col-4">
                    <h6 class="text-sm">Company</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link text-body" href="javascript:;">
                                Marketing
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-body" href="javascript:;">
                                Analytics
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-body" href="javascript:;">
                                Insights
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-2 col-4">
                    <h6 class="text-sm">Support</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link text-body" href="javascript:;">
                                Pricing
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-body" href="javascript:;">
                                Docs
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-body" href="javascript:;">
                                Guides
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-2 col-4">
                    <h6 class="text-sm">Company</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="javascript:;">
                                About Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-muted" href="javascript:;">
                                Blog
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-muted" href="javascript:;">
                                Jobs
                            </a>
                        </li>

                    </ul>
                </div>

                <div class="col-lg-4 col-md-5 col-sm-6 col-12 ms-auto mt-4 mt-sm-0">
                    <h6>Subscribe</h6>
                    <p class="text-sm">Get access to subscriber exclusive deals and be the first who gets informed about fresh sales.</p>
                    <div class="row">
                        <div class="col-md-8 col-7">
                            <div class="form-group">
                                <div class="input-group input-group-alternative mb-4">
                                    <input class="form-control" placeholder="Enter your e-mail" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-5 ps-0">
                            <button type="button" class="btn btn-success">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="loopple-badge">Made with<a href="https://www.loopple.com"><img src="https://www.loopple.com/img/loopple-logo.png" class="loopple-ml-1" style="width:55px"></a></div>
    <script src="https://loopple.s3.eu-west-3.amazonaws.com/soft-ui-design-system/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://demos.creative-tim.com/soft-ui-design-system/assets/js/soft-design-system.min.js?v=1.0.5" type="text/javascript"></script>
    <script src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/js/plugins/countup.min.js" type="text/javascript"></script>
    <script src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/js/plugins/flatpickr.min.js"></script>
    <script>
        if (document.getElementById("state1")) {
                    const countUp = new CountUp("state1", document.getElementById("state1").getAttribute("countTo"));
                    if (!countUp.error) {
                      countUp.start();
                    } else {
                      console.error(countUp.error);
                    }
                  }
                  if (document.getElementById("state2")) {
                    const countUp1 = new CountUp("state2", document.getElementById("state2").getAttribute("countTo"));
                    if (!countUp1.error) {
                      countUp1.start();
                    } else {
                      console.error(countUp1.error);
                    }
                  }
                  if (document.getElementById("state3")) {
                    const countUp2 = new CountUp("state3", document.getElementById("state3").getAttribute("countTo"));
                    if (!countUp2.error) {
                      countUp2.start();
                    } else {
                      console.error(countUp2.error);
                    };
                  }
        
         if (document.querySelector('.datepicker-1')) {
              flatpickr('.datepicker-1', {
              }); // flatpickr
            } 
        
         if (document.querySelector('.datepicker-2')) {
              flatpickr('.datepicker-2', {
              }); // flatpickr
            }
    </script>
</body>