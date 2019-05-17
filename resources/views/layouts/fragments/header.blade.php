<header class="section-header">
    <section class="header-main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5-24 col-sm-5 col-4">
                    <div class="brand-wrap">
                        <img class="logo" src="{{ asset('images/logo-dark.png') }}">
                        <h2 class="logo-text">LOGO</h2>
                    </div>
                </div>
                <div class="col-lg-13-24 col-sm-12 order-3 order-lg-2">
                    <form action="#">
                        <div class="input-group w-100">
                            <select class="custom-select" name="category_name">
                                <option value="">All type</option>
                                <option value="codex">Special</option>
                                <option value="comments">Only best</option>
                                <option value="content">Latest</option>
                            </select>
                            <input type="text" class="form-control" style="width:60%;" placeholder="Search">

                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6-24 col-sm-7 col-8  order-2  order-lg-3">
                    <div class="d-flex justify-content-end">
                        <div class="widget-header">
                            <div>
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                <span class="dark-transp"> | </span>
                                @if(Route::has('register'))
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </div>
                        </div>
                        <a href="#" class="widget-header border-left pl-3 ml-3">
                            <div class="icontext">
                                <div class="icon-wrap icon-sm round border"><i class="fa fa-shopping-cart"></i></div>
                            </div>
                            <span class="badge badge-pill badge-danger notify">0</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
