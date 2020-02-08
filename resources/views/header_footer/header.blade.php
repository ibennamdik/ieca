<header id="wrap-header"
    class="color-inher @if(Route::is('home') || Route::is('welcome')) h-500 @endif h-box-auto h-xs-auto">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 hidden-xs">
                    <p class="f-14"><i class="fa fa-map-marker m-r-lg-5"></i><strong>Head Office</strong> -
                        {{ $settings->address }}</p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <ul class="pull-right">

                        @guest
                        <li><a href="{{route('login')}}">Login</a></li>
                        @if(Route::has('register'))
                        <li><a href="{{route('register')}}">Register</a></li>
                        @endif
                        @else
                        <li><a href="#"><span>Hi, {{auth()->user()->name}}</span></a></li>
                        <li><a href="{{ route('overview') }}">My Account</a></li>
                        <li class="cart-icon">
                            <a href="#">
                                <i class="fa fa-shopping-basket"></i>
                                <span class="badge">{{$totalItemsInCart->getTotalQuantity()}}</span>
                            </a>
                            <ul class="cart-dropdown">
                                <li class="bg-white bg1-gray-15 color-inher">
                                    @foreach ($totalItemsInCart->getContent() as $item)
                                    <div class="product-item">
                                        <div class="row m-lg-0">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 p-l-lg-0">
                                                <a href="#" class="product-img"><img
                                                        src="{{isset($products->find($item->id)->image1) ? Storage::url($products->find($item->id)->image1) : asset('media/frontend_imgs/default.png') }}"
                                                        alt="{{ $item->name }}"></a>
                                            </div>
                                            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 p-lg-0">
                                                <div class="product-caption text-left">
                                                    <h4 class="product-name p-lg-0">
                                                        <a href="#">{{ $item->name }}</a>
                                                    </h4>
                                                    <p>{{ $item->quantity }} x
                                                        <strong>&#8358;{{number_format(floatval($item->price ), 2) }}</strong>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 p-lg-0">
                                                <a href="{{ route('cart.remove', $item->id) }}">
                                                    <i class="fa fa-remove cart-remove-btn"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach


                                    <div class="p-t-lg-15 p-b-lg-10">Total : <strong
                                            class="pull-right price">&#8358;{{number_format(floatval($totalItemsInCart->getTotal()), 2) }}</strong>
                                    </div>
                                    <div class="clearfix"></div>
                                    <a href="{{ route('cart.checkout')}}" class="ht-btn">Check out</a>
                                    <a href="{{ route('cart.index') }}" class="ht-btn pull-right">View Cart</a>

                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="icon-1" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu -->
    <div class="menu-bg">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div class="col-md-3 col-lg-3">
                    <a href="{{ route('home')}}" class="logo"><img
                            src="{{isset($settings->logo) ? Storage::url($settings->logo) : asset('media/frontend_imgs/logo.png') }}"
                            alt="Logo" width="200px;"></a>
                </div>
                <div class="col-md-9 col-lg-9">
                    <div class="hotline">
                        <span class="m-r-lg-10">Help Line : </span>
                        <i class="fa fa-phone"></i>{{ $settings->phone1 }}
                    </div>
                    <div class="clearfix"></div>
                    <!-- Menu -->
                    <div class="main-menu">
                        <div class="container1">
                            <nav class="navbar navbar-default menu">
                                <div class="container1-fluid">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav">

                                            <li><a @guest href="{{ route('welcome')}}" @else href="{{ route('home')}}"
                                                    @endguest class="@if(Route::is('home')) active @endif">Home</a></li>
                                            <li><a href="{{route('product-grid')}}"
                                                    class="@if(Route::is('product-grid')) active @endif">Buy a
                                                    Product</a></li>
                                            <li><a href="#"
                                                    class="@if(Route::is('about')) active @endif">About Us</a></li>
                                            <li><a href="{{route('lesson')}}"
                                                    class="@if(Route::is('lesson')) active @endif">Tyre Lessons</a></li>
                                            <li><a href="{{route('contact')}}"
                                                    class="@if(Route::is('contact')) active @endif">Contact/Enquiries</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                @if(Session::has('success'))
                    <div class="text-center alert alert-success alert-dismissible w-auto" role="alert" style="background-color:green;">
                        <strong>{{ Session::get('success')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    @endif
                    @if(Session::has('failure'))
                    <div class="text-center alert alert-danger alert-dismissible w-auto" role="alert" style="background-color:red;">
                        <strong>{{ Session::get('failure')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
</header>
