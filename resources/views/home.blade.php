<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bootstrap-ecommerce by Vosidiy">

    <title>Kita Beli</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('fonts/fontawesome/css/fontawesome-all.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('plugins/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/owlcarousel/assets/owl.theme.default.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ui.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" media="only screen and (max-width: 1200px)"/>
</head>

<body>

@include('layouts.fragments.header')
<section class="section-main bg padding-y-sm">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row row-sm">
                    <aside class="col-md-3">
                        <h5 class="text-uppercase">My Markets</h5>
                        <ul class="menu-category">
                            <li><a href="#">Food &amp Beverage </a></li>
                            <li><a href="#">Home Equipments </a></li>
                            <li><a href="#">Machinery Items </a></li>
                            <li><a href="#">Toys & Hobbies </a></li>
                            <li><a href="#">Consumer Electronics </a></li>
                            <li><a href="#">Beauty & Personal Care </a></li>
                            <li class="has-submenu"><a href="#">More category <i
                                        class="icon-arrow-right pull-right"></i></a>
                                <ul class="submenu">
                                    <li><a href="#">Food &amp Beverage </a></li>
                                    <li><a href="#">Home Equipments </a></li>
                                    <li><a href="#">Machinery Items </a></li>
                                    <li><a href="#">Toys & Hobbies </a></li>
                                    <li><a href="#">Consumer Electronics </a></li>
                                    <li><a href="#">Home & Garden </a></li>
                                    <li><a href="#">Beauty & Personal Care </a></li>
                                </ul>
                            </li>
                        </ul>

                    </aside>
                    <div class="col-md-9">
                        <div class="owl-init slider-main owl-carousel" data-items="1" data-nav="true" data-dots="false">
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
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-request bg padding-y-sm">
    <div class="container">
        <header class="section-heading heading-line">
            <h4 class="title-section bg text-uppercase">Recommended items</h4>
        </header>
        <div class="row-sm">
            @foreach($data['products'] as $product)
                <div class="col-md-2">
                    <figure class="card card-product">
                        <div class="img-wrap">
                            <img src="{{ asset('/images/'.$product->images()->first()->image_src) }}">
                        </div>
                        <figcaption class="info-wrap">
                            <h6 class="title ">
                                <a href="{{ route('products.show',$product->id) }}">{{ $product->name }}</a>
                            </h6>
                            <div class="price-wrap">
                                <span class="price-new">{{ $product->price }}</span>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            @endforeach
            {{ $data['products']->links() }}
        </div>
    </div>
</section>
<section class="section-subscribe bg-secondary padding-y-lg">
    <div class="container">

        <p class="pb-2 text-center white">Delivering the latest product trends and industry news straight to your
            inbox</p>

        <div class="row justify-content-md-center">
            <div class="col-lg-4 col-sm-6">
                <form class="row-sm form-noborder">
                    <div class="col-8">
                        <input class="form-control" placeholder="Your Email" type="email">
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-block btn-warning"><i class="fa fa-envelope"></i> Subscribe
                        </button>
                    </div>
                </form>
                <small class="form-text text-white-50">We’ll never share your email address with a third-party.</small>
            </div>
        </div>


    </div>
</section>
@include('layouts.fragments.footer')
@include('layouts.fragments.scripts')
</body>

</html>
