<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive bootstrap landing template">
    <meta name="author" content="Themesdesign">

    <link rel="shortcut icon" href="images/favicon.ico">

    <title>Meta Schools</title>


    <!-- Bootstrap core CSS -->
    <link href="{{config('app.url')}}css/bootstrap.min.css" rel="stylesheet">

    <!-- tiny slider -->
    <link href="{{config('app.url')}}css/tiny-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="{{config('app.url')}}css/swiper.min.css" type="text/css" />


    <!-- Materialdesign icons css -->
    <link href="{{config('app.url')}}css/materialdesignicons.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{config('app.url')}}css/style.css" rel="stylesheet">

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-navlist" data-bs-offset="71">

    <!--Navbar Start-->
    <nav style="z-index: 9999;" class="navbar navbar-expand-lg fixed-top sticky nav-white  " id="navbar">
        <div class="container-fluid custom-container">
            <a class="navbar-brand logo text-uppercase  nav-brand-logo" href="index.html">
                <img src="{{config('app.url')}}images/logo-light.png" class="logo-light" alt="" height="32">
                <img src="{{config('app.url')}}images/logo-dark.png" class="logo-dark" alt="" height="32">
            </a>

            <button class="navbar-toggler me-3 order-2 ms-4" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto navbar-center">
                    <li class="nav-item">
                        <a href="{{config('app.url')}}#home" class="nav-link ">Home</a>
                    </li>
                    <li class="na{{config('app.url')}}v-item dropdown dropdown-hover">
                        <a href="#service" class="nav-link ">Service</a>
                    </li>
                    <li class="nav-item dropdown dropdown-hover">
                        <a href="{{config('app.url')}}#features" class="nav-link ">Features</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{config('app.url')}}#pricing" class="nav-link">pricing</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{config('app.url')}}#faq" class="nav-link">Faq</a>
                    </li>
                   
                   
                </ul>
                <!--end navbar-nav-->
            </div>


            <!--end navabar-collapse-->
            <div class="header-menu list-inline d-flex align-items-center mb-0 order-1 d-none">
                <div class="list-inline-item dropdown language me-4">
                    <a href="#" class="header-item" id="userdropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-web f-24 "></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown">
                        <li><a class="dropdown-item" href="#">English</a></li>
                        <li><a class="dropdown-item" href="#">Deutsch</a></li>
                    </ul>
                </div>
                <div class="Account ">
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="mdi mdi-account-box-outline f-24 "></i>
                    </a>

                </div>
            </div>
            <!--end header-menu-->
        </div>
        <!--end container-->
    </nav>
    <!-- Navbar End -->



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign up</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3 needs-validation">
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">First name <span
                                    class="text-primary">*</span></label>
                            <input type="text" class="form-control" id="validationCustom01" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">Email <span
                                    class="text-primary">*</span></label>
                            <input type="email" class="form-control" id="validationCustom02" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">Subject <span
                                    class="text-primary">*</span></label>
                            <input type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom05" class="form-label">Password <span
                                    class="text-primary">*</span></label>
                            <input type="password" class="form-control" id="validationCustom05" required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="validationTextarea" class="form-label">Textarea<span
                                    class="text-primary">*</span></label>
                            <textarea class="form-control" id="validationTextarea" required></textarea>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- end modal -->



    @yield('content')


    <!-- start footer -->
    <section class="footer py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="address-content fw-bold">
                        <h5 class="text-black">Address</h5>
                        <p class="mt-5  f-14 ">River Way behind Salt Lake City, UT 8402</p>
                        <p class="mt-3 f-14 ">+(540)801-468-2313 (10am - 6pm, Monday - Saturday)</p>
                        <a href="" class=" f-14">info@example.com</a>
                    </div>
                    <div class="social-icon d-flex mt-4 mb-4 mb-lg-0">
                        <div class="facebook">
                            <a href=""><i class="mdi mdi-facebook-box f-30"></i></a>
                        </div>
                        <div class="twitter ms-4">
                            <a href=""><i class="mdi mdi-twitter f-30"></i></a>
                        </div>
                        <div class="twitter ms-4">
                            <a href=""><i class="mdi mdi-instagram f-30"></i></a>
                        </div>
                        <div class="twitter ms-4">
                            <a href=""><i class="mdi mdi-linkedin-box f-30"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-black">Explore</h5>
                    <ul class="menu list-unstyled mt-5">
                        <li class="menu-item"><a href="">Start here</a></li>
                        <li class="menu-item"><a href="">Services</a></li>
                        <li class="menu-item"><a href="">Features</a></li>
                        <li class="menu-item"><a href="">Client</a></li>
                        <li class="menu-item"><a href="">Pricing</a></li>
                        <li class="menu-item"><a href="">support center</a></li>
                        <li class="menu-item"><a href="">Blogs</a></li>
                        <li class="menu-item"><a href="">Newsletters</a></li>
                    </ul>

                </div>
                <div class="col-lg-2">
                    <h5 class="text-black">Explore</h5>
                    <ul class="menu mt-5 list-unstyled d-block">
                        <li class="info-item"><a href="">Membership</a></li>
                        <li class="info-item"><a href="">Purchase guide</a></li>
                        <li class="info-item"><a href="">Privacy policy</a></li>
                        <li class="info-item"><a href="">Terms of service</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end footer -->

    <div class="bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="copy-right mb-5 text-center text-muted">
                        <script>document.write(new Date().getFullYear())</script> Slima. Design with <i
                            class="mdi mdi-heart text-danger"></i> by <a
                            href="https://themeforest.net/search/themesdesign" target="_blank"
                            class="text-reset">Themesdesign</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- bootstrap -->
    <script src="{{config('app.url')}}js/bootstrap.bundle.min.js"></script>

    <script src="{{config('app.url')}}js/tiny-slider.js"></script>

    <script src="{{config('app.url')}}js/particles.js"></script>
    <script src="{{config('app.url')}}js/particles.app.js"></script>

    <script src="js/swiper.min.js"></script>

    <!-- counter -->
    <script src="{{config('app.url')}}js/counter.init.js"></script>

    <!-- Custom -->
    <script src="{{config('app.url')}}js/app.js"></script>

</body>

</html>