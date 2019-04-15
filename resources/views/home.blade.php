<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bootstrap-ecommerce by Vosidiy">

    <title>Kita Beli</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fonts/fontawesome/css/fontawesome-all.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('plugins/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/owlcarousel/assets/owl.theme.default.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ui.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" media="only screen and (max-width: 1200px)" />
</head>

<body>
    @include('layouts.header')
    <section class="section-main bg padding-bottom">
        <div class="container">
            <div class="row no-gutters border border-top-0 bg-white">
                <aside class="col-lg-5-24">
                    <nav>
                        <div class="title-category bg-secondary white d-none d-lg-block" style="margin-top:-53px">
                            <span>Categories</span>
                        </div>
                        <ul class="menu-category">
                            <li> <a href="#">Food &amp Beverage </a></li>
                            <li> <a href="#">Home Equipments </a></li>
                            <li> <a href="#">Machinery Items </a></li>
                            <li> <a href="#">Toys & Hobbies  </a></li>
                            <li> <a href="#">Beauty & Personal Care  </a></li>
                            <li> <a href="#">Mobile phones  </a></li>
                            <li class="has-submenu"> <a href="#">More category  <i class="icon-arrow-right pull-right"></i></a>
                                <ul class="submenu">
                                    <li> <a href="#">Food &amp Beverage </a></li>
                                    <li> <a href="#">Home Equipments </a></li>
                                    <li> <a href="#">Machinery Items </a></li>
                                    <li> <a href="#">Toys & Hobbies  </a></li>
                                    <li> <a href="#">Consumer Electronics  </a></li>
                                    <li> <a href="#">Home & Garden  </a></li>
                                    <li> <a href="#">Beauty & Personal Care  </a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </aside>
                <!-- col.// -->
                <main class="col-lg-19-24">
                    <div class="row no-gutters">
                        <div class="col-lg-9 col-md-8">
                            <div class="owl-init slider-main owl-carousel" data-items="1" data-margin="1" data-nav="true" data-dots="false">
                                <div class="item-slide">
                                    <img src="{{ asset('images/banners/slide1.jpg') }}">
                                </div>
                                <div class="item-slide">
                                    <img src="{{ asset('images/banners/slide2.jpg') }}">
                                </div>
                                <div class="item-slide">
                                    <img src="{{ asset('images/banners/slide3.jpg') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h6>Group of items goes here</h6>
                                    <a href="#" class="btn btn-primary btn-sm btn-round"> View all </a>
                                </li>
                                <li class="list-group-item">
                                    <h6>Group of items goes here</h6>
                                    <a href="#" class="btn btn-primary btn-sm btn-round"> View all </a>
                                </li>
                                <li class="list-group-item">
                                    <h6>Group of items goes here</h6>
                                    <a href="#" class="btn btn-primary btn-sm btn-round"> View all </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </section>
    <section class="section-content padding-y">
        <div class="container">
            <header class="section-heading">
                <h3 class="title-section">Main section is here</h3>
            </header>
            <article>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum.</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                    laborum.
                </p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                    laborum.
                </p>
            </article>
        </div>
    </section>
    <footer class="section-footer bg2">
        <div class="container">
            <section class="footer-bottom row">
                <div class="col-sm-6">
                    <p> Made with
                        <3 <br> by Vosidiy M.</p>
                </div>
                <div class="col-sm-6">
                    <p class="text-sm-right">
                        Copyright &copy 2018 <br>
                        <a href="http://bootstrap-ecommerce.com">Bootstrap-ecommerce UI kit</a>
                    </p>
                </div>
            </section>
        </div>
    </footer>
    <script src="{{ asset('js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/owlcarousel/owl.carousel.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
    });
    </script>
</body>

</html>
