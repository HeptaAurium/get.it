<div class="container">
    <nav class="navbar navbar-expand-md navbar-light top-menu" style=" background: #eeeeee;z-index:1">
        <div class="logo d-none d-md-block" style="height: 50px">
            <a href="/">
                <img src="{{ asset('img/icons/logo-clear.png') }}" alt="" class="img-fluid h-100">
            </a>
        </div>
        <div class="col-12 d-flex flex-row align-items-center px-1 d-md-none text-center">
            <a href="/" class="btn">
                <div class="d-flex flex-row align-items-center">
                    <img src="{{ asset('img/icons/logo-clear.png') }}" alt="" class="img-fluid" style="height:40px;">
                    <h1 class="display-4 logo-text col">{{ config('app.name') }} </h1>
                </div>
            </a>
            <div class="statics ml-auto">
                <a href="/cart" class="btn btn-transparent btn-statics" id="top-cart">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <span
                        class="badge badge-secondary cart-count">{{ \App\Helpers\GeneralHelper::items_in_cart_count() }}</span>
                </a>
                <button class="btn btn-transparent btn-statics btn-statics-small" id="top-search" data-toggle="modal"
                    data-target="#search-modal">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
                <button class="btn btn-transparent btn-statics btn-statics-small btn-top-menu" id="top-menu">
                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                </button>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-auto text-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Products
                    </a>
                    <div class="dropdown-menu border-0 text-right" style="background:#eee;"
                        aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/products/">Footwear</a>
                        <a class="dropdown-item" href="/products/">Headwear</a>
                        <a class="dropdown-item" href="/products/">Kitchenwear</a>
                        <a class="dropdown-item" href="/products/">Household Items</a>
                    </div>
                </li>
                @php
                $fiveCategories = \App\Helpers\GeneralHelper::get_categories_limit(5);
                $fiveBrands = \App\Helpers\GeneralHelper::get_brands_limit(5)
                @endphp

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu border-0 text-right" style="background:#eee;"
                        aria-labelledby="navbarDropdown">

                        @foreach ($fiveCategories as $category)
                            <a class="dropdown-item"
                                href="{{ __('/categories/') . $category->id }}">{{ $category->name }}</a>
                        @endforeach
                        @php
                        if(count($fiveCategories) == 5) :
                        @endphp
                        <hr class="hr-light" style="border-top:2px solid rgb(94, 92, 92);">
                        <a class="dropdown-item" href="{{ __('/categories') }}">More Categories</a>
                        @php
                        endif;
                        @endphp
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Brands
                    </a>
                    <div class="dropdown-menu border-0 text-right" style="background:#eee;"
                        aria-labelledby="navbarDropdown">

                        @foreach ($fiveBrands as $category)
                            <a class="dropdown-item"
                                href="{{ __('/brands/') . $category->id }}">{{ $category->name }}</a>
                        @endforeach
                        @php
                        if(count($fiveBrands) == 5) :
                        @endphp
                        <hr class="hr-light" style="border-top:2px solid rgb(94, 92, 92);">
                        <a class="dropdown-item" href="{{ __('/brands') }}">More Brands</a>
                        @php
                        endif;
                        @endphp
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle logo-text" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ config('app.name') }}
                    </a>
                    <div class="dropdown-menu border-0 text-right" style="background:#eee;"
                        aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">About Us</a>
                        <a class="dropdown-item" href="#">Shipping</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Privacy Policy</a>
                    </div>
                </li>
                @guest
                @else

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/orders/trace" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            {{ __('Order tracing') }}
                        </a>

                    </li>

                @endguest
            </ul>

        </div>
        <div class="statics d-none d-md-flex">
            <a href="/cart" class="btn btn-transparent btn-statics" id="top-cart">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span
                    class="badge badge-secondary cart-count">{{ \App\Helpers\GeneralHelper::items_in_cart_count() }}</span>
            </a>
            <button class="btn btn-transparent btn-statics" id="top-search" data-toggle="modal"
                data-target="#search-modal">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
            <button class="btn btn-transparent btn-statics btn-top-menu" type="button" id="top-menu">
                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
            </button>

        </div>
    </nav>
</div>
<div id="search-modal" class="search-modal" data-backdrop="false">
    <span class="closebtn" onclick="closeSearch()" title="Close Search">&times;</span>
    <div class="search-content">
        <form action="/search" method="post" class="search-form" id="search-form">
            @csrf
            <div>
                <input type="search" placeholder="Search.." name="search" id="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
</div>
<div class="profile hide">
    @guest
        <div class="prof-pic">
            <img src="{{ asset('/icon/user.jpg') }}" alt="" class="rounded-circle img-fluid" srcset="">
        </div>
        <div class="prof-pic-captions text-center">
            <h6>Guest Mode</h6>
        </div>
        <ul class=" nav profile-links d-flex flex-row justify-content-center">
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link btn btn-link" style="color:#fff; margin-right: 10px"
                        href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link  btn btn-link" style="color:#fff; margin-left: 10px"
                        href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        </ul>

    @else
        <div class="prof-pic">
            <a href="/profile">
                <img src="{{ asset(Auth::User()->img) }}" alt="" class="rounded-circle img-fluid" srcset="">
            </a>
        </div>
        <div class="prof-pic-captions text-center">
            <h6>{{ Auth::User()->fname . ' ' . Auth::User()->lname }}</h6>
            <p>{{ Auth::User()->pno }}</p>
        </div>

        <ul class=" nav profile-icons d-flex flex-row justify-content-center">
            <div class="prof-social">
                <div class="prof-social-icons d-flex flex-row justify-content-center">
                    <li>
                        <a class="user" href="/profile" data-toggle="tooltip" title="User profile"><i
                                class="fa fa-user"></i></a>
                    </li>
                    <li>
                        <a class="" href="#" data-toggle="tooltip" title="My shopping cart"><i
                                class="fa fa-shopping-cart"></i></a>
                    </li>
                    <li>
                        <a class="map" href="#" data-toggle="tooltip" title="Shipping information"><i
                                class="fa fa-map-marker"></i></a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();"
                            data-toggle="tooltip" title="Log out">
                            <i class="fa fa-sign-out"></i></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </div>
            </div>
        </ul>
    @endguest

    <div class="prof-social">
        <div class="prof-social-icons d-flex flex-row justify-content-center">
            <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        </div>
    </div>
</div>
