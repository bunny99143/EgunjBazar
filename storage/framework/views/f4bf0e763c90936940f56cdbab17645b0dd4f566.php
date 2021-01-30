<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">
    <title>E-Ganj Bazar</title>
    <!-- Preloader -->
    <style>
        @keyframes  hidePreloader {
            0% {
                width: 100%;
                height: 100%;
            }

            100% {
                width: 0;
                height: 0;
            }
        }

        body>div.preloader {
            position: fixed;
            background: white;
            width: 100%;
            height: 100%;
            z-index: 1071;
            opacity: 0;
            transition: opacity .5s ease;
            overflow: hidden;
            pointer-events: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        body:not(.loaded)>div.preloader {
            opacity: 1;
        }

        body:not(.loaded) {
            overflow: hidden;
        }

        body.loaded>div.preloader {
            animation: hidePreloader .5s linear .5s forwards;
        }
    </style>
    <script>
        window.addEventListener("load", function() {
            setTimeout(function() {
                document.querySelector('body').classList.add('loaded');
            }, 300);
        });
    </script>
    <!-- Favicon -->
    <link rel="icon" href="assets/img/brand/favicon.png" type="image/png"><!-- Font Awesome -->
    <link rel="stylesheet" href="assets/libs/@fortawesome/fontawesome-free/css/all.min.css">
    <!-- Quick CSS -->
    <link rel="stylesheet" href="assets/css/quick-website.css" id="stylesheet">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="modal-cookies" data-backdrop="false" aria-labelledby="modal-cookies" aria-hidden="true">
        <div class="modal-dialog modal-dialog-aside left-4 right-4 bottom-4">
            <div class="modal-content bg-dark-dark">
                <div class="modal-body">
                    <!-- Text -->
                    <p class="text-sm text-white mb-3">
                        We use cookies so that our themes work for you. By using our website, you agree to our use of cookies.
                    </p>
                    <!-- Buttons -->
                    <a href="pages/utility/terms.html" class="btn btn-sm btn-white" target="_blank">Learn more</a>
                    <button type="button" class="btn btn-sm btn-primary mr-2" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Go Pro -->
     <!-- <a href="https://webpixels.io/themes/quick-website-ui-kit" class="btn btn-block btn-dark text-truncate rounded-0 py-2 d-none d-lg-block" style="z-index: 1000;" target="_blank">
           <strong>This is a free demo.</strong> Click here to open the full version →
    </a> -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="index.html">
            
            <!-- E-Ganj Bazar -->
                <img alt="Image placeholder" src="<?php echo e(asset('images/home/logo_transparent.png')); ?>" style="    height: auto;width: 175px;" id="navbar-logo">
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mt-4 mt-lg-0 ml-auto">
                <li class="nav-item ">
                        <a class="nav-link" href="docs/index.html">Home</a>
                    </li>
                  <li class="nav-item ">
                        <a class="nav-link" href="docs/index.html">About Us</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="docs/index.html">Contact Us</a>
                    </li>
                </ul>
                <!-- Button -->
                <a class="navbar-btn btn btn-sm btn-primary d-none d-lg-inline-block ml-3" href="login">
                    Login - Sign Up
                </a>
                <!-- Mobile button -->
                <div class="d-lg-none text-center">
                    <a href="https://webpixels.io/themes/quick-website-ui-kit" class="btn btn-block btn-sm btn-warning">See more details</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <section class="slice" style="padding-top: 0; padding-bottom: 0;">
        <!-- <div class="container"> -->
        <img alt="Image placeholder" src="<?php echo e(asset('images/home/main_page.jpg')); ?>" class="img-fluid ">
        <!-- </div> -->
    </section>
    <section class="slice slice-lg pt-lg-6 pb-0 pb-lg-6 bg-section-secondary">
        <div class="container">
            <!-- Title -->
            <!-- Section title -->
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-6">
                  
                    <h2 class=" mt-4">Product Categories</h2>
                    <div class="mt-2">
                        <p class="lead lh-180">Use Atomic Design to build components, sections and, then, pages.</p>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5">
                                <img src="assets/img/svg/illustrations/illustration-5.svg" class="img-fluid img-center" style="height: 150px;" alt="Illustration" />
                            </div>
                            <h5 class="h4 lh-130 mb-3">Grain</h5>
                            <p class="text-muted mb-0">Quick Website UI Kit (FREE) contains components and pages that are easy to customize and change.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5">
                                <img src="assets/img/svg/illustrations/illustration-6.svg" class="img-fluid img-center" style="height: 150px;" alt="Illustration" />
                            </div>
                            <h5 class="h4 lh-130 mb-3">Vegetables</h5>
                            <p class="text-muted mb-0">Quick Website UI Kit (FREE) contains components and pages that are easy to customize and change.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5">
                                <img src="assets/img/svg/illustrations/illustration-7.svg" class="img-fluid img-center" style="height: 150px;" alt="Illustration" />
                            </div>
                            <h5 class="h4 lh-130 mb-3">Fruits</h5>
                            <p class="text-muted mb-0">Quick Website UI Kit (FREE) contains components and pages that are easy to customize and change.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="slice slice-lg">
        <div class="container">
            <div class="py-6">
                <div class="row row-grid justify-content-between align-items-center">
                    <div class="col-lg-5 order-lg-2">
                        <h5 class="h3">Need a quick admin panel for your website?</h5>
                        <p class="lead my-4">
                            With Quick you get components and examples, including tons of variables that will help you customize this theme with ease.
                        </p>
                        <ul class="list-unstyled mb-0">
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                            <i class="fas fa-file-invoice"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="h6 mb-0">Perfect for modern startups</span>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                            <i class="fas fa-store-alt"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="h6 mb-0">Ready to be customized</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="card mb-0 mr-lg-5">
                            <div class="card-body p-2">
                                <img alt="Image placeholder" src="assets/img/theme/light/screen-1-1000x800.jpg" class="img-fluid shadow rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-6">
                <div class="row row-grid justify-content-between align-items-center">
                    <div class="col-lg-5">
                        
                    <div class="col-lg-6">
                        <div class="card mb-0 ml-lg-5">
                            <div class="card-body p-2">
                                <img alt="Image placeholder" src="assets/img/theme/light/screen-2-1000x800.jpg" class="img-fluid shadow rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
   
    <footer class="position-relative" id="footer-main">
        <div class="footer pt-lg-7 footer-dark bg-dark">
            <!-- SVG shape -->
            <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
                <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class=" fill-section-secondary">
                    <polygon points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <!-- Footer -->
            <div class="container pt-4">
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <!-- Theme's logo -->
                        <a href="index.html">
                            <img alt="Image placeholder" src="<?php echo e(asset('images/home/logo_transparent.png')); ?>" style="height: auto;width: 175px;" id="footer-logo">
                            <!-- E-Gunj Bazar -->
                            <!-- <img alt="Image placeholder" src="<?php echo e(asset('images/home/logo.png')); ?>" style="    height: auto;width: 175px;" id="navbar-logo"> -->
                        </a>
                        <!-- Webpixels' mission -->
                        <!-- <p class="mt-4 text-sm opacity-8 pr-lg-4">Webpixels attempts to bring the best development experience to designers and developers by offering the tools needed for having a quick and solid start in most web projects.</p>
                      
                        <ul class="nav mt-4">
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="https://dribbble.com/webpixels" target="_blank">
                                    <i class="fab fa-dribbble"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://github.com/webpixels" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.instagram.com/webpxs" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.facebook.com/webpixels" target="_blank">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                        </ul> -->
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
                        <h6 class="heading mb-3">Account</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Profile</a></li>
                            <!-- <li><a href="#"></a></li> -->
                            <li><a href="#">My Order</a></li>
                            <!-- <li><a href="#">Notifications</a></li> -->
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                        <h6 class="heading mb-3">About</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Contact</a></li>
                            <!-- <li><a href="#">Careers</a></li> -->
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                        <h6 class="heading mb-3">Categories</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Grain</a></li>
                            <li><a href="#">Fruits</a></li>
                            <li><a href="#">Vegetables</a></li>
                        </ul>
                    </div>
                </div>
                <hr class="divider divider-fade divider-dark my-4">
                <div class="row align-items-center justify-content-md-between pb-4">
                    <div class="col-md-6">
                        <div class="copyright text-sm font-weight-bold text-center text-md-left">
                            &copy; 2021 <a href="https://webpixels.io" class="font-weight-bold" target="_blank">E-Gunj Bazar</a>. All rights reserved
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Terms
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Privacy
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Cookies
                                </a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Core JS  -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/svg-injector/dist/svg-injector.min.js"></script>
    <script src="assets/libs/feather-icons/dist/feather.min.js"></script>
    <!-- Quick JS -->
    <script src="assets/js/quick-website.js"></script>
    <!-- Feather Icons -->
    <script>
        feather.replace({
            'width': '1em',
            'height': '1em'
        })
    </script>
</body>

</html><?php /**PATH C:\xampp\htdocs\testlaravel\resources\views/welcome.blade.php ENDPATH**/ ?>