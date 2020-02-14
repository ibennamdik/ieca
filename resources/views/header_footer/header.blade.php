        <!-- HEADER AREA START -->
        <header class="header-area header-wrapper">
            <div class="header-top-bar bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="logo">
                                <a href="{{ route('home')}}" class="logo">
                                    <img src="{{ isset($settings->logo) ? Storage::url($settings->logo) : asset('/media/frontend_imgs/logo.jpg') }}" alt="Logo" width="100px;">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="company-info clearfix">
                                <div class="company-info-item">
                                    <div class="header-icon">
                                        <img src="{{ asset('/media/frontend_imgs/icons/phone.png') }}" alt="">
                                    </div>
                                    <div class="header-info">
                                        <h6>{{ $settings->phone1 }}</h6>
                                        <p>We are open 8am - 4pm</p>
                                    </div>
                                </div>
                                <div class="company-info-item">
                                    <div class="header-icon">
                                        <img src="{{ asset('/media/frontend_imgs/icons/mail-open.png') }}" alt="">
                                    </div>
                                    <div class="header-info">
                                        <h6><a href="mailto:info@ieca.com.ng">info@ieca.com.ng</a></h6>
                                        <p>You can mail us</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12" style="text-align:center;">
                            <div class="header-search clearfix">

                            <a href="#"><img height="32px" src="{{ asset('/media/frontend_imgs/icons/iconfacebook.png') }}" alt=""></a>
                            <a href="#"><img height="32px" src="{{ asset('/media/frontend_imgs/icons/icontwitter.png') }}" alt=""></a>
                            <a href="#"><img height="32px" src="{{ asset('/media/frontend_imgs/icons/iconyoutube.png') }}" alt=""></a>
                            <a href="#"><img height="32px" src="{{ asset('/media/frontend_imgs/icons/iconinstagram.png') }}" alt=""></a>
                            <!-- @guest
                                @if(Route::has('register'))
                                <a href="{{ route('register') }}">Create Your Account</a>
                                @endif
                                &nbsp;&nbsp;|&nbsp;&nbsp;
                                <a href="{{ route('login') }}">Login</a>
                                &nbsp;&nbsp;
                            @else
                                <a href="#"><span>Hi, {{auth()->user()->name}}</span></a>
                                &nbsp;&nbsp;|&nbsp;&nbsp;
                                <a href="{{ route('overview') }}">My Account</a>
                                &nbsp;&nbsp;|&nbsp;&nbsp;
                                <a class="icon-1" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @endguest -->
                            <!-- <a class="button mt-40" style="color:#4caf50;" href="#">CREATE YOUR ACCOUNT</a>
                                &nbsp;&nbsp;| &nbsp;&nbsp;
                            <a class="button mt-40" style="color:#4caf50;" href="#">LOGIN</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="header-middle-area transparent-header d-none d-md-block">
                <div class="container">
                    <div class="full-width-mega-drop-menu">
                        <div class="row">
                            <div class="col-12">
                                <div class="sticky-logo">
                                    <a href="index.html">
                                        <img src="{{ isset($settings->logo) ? Storage::url($settings->logo) : asset('/media/frontend_imgs/logo.jpg') }}" alt="Logo">
                                    </a>
                                </div>
                                <nav id="primary-menu">
                                    <ul class="main-menu text-center">
                                        <li><a @guest href="{{ route('welcome') }}" @else href="{{ route('home') }}"
                                               @endguest class="@if(Route::is('home')) active @endif">Home</a>
                                        </li>
                                        <li><a href="{{ route('about') }}" class="@if(Route::is('about')) active @endif">About Us</a></li>
                                        <!-- <li><a href="{{ route('services') }}">Service</a>
                                        </li> -->
                                        <li><a href="{{ route('investment') }}">Make Investment</a></li>
                                        
                                        <li><a href="#footer" class="@if(Route::is('contact')) active @endif">Contact Us</a></li>
                                        @guest
                                            @if(Route::has('register'))
                                            <li><a href="{{ route('register') }}">Create your Account</a></li>
                                            @endif
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                            @else
                                            <li><a href="{{ route('overview') }}">My Account</a><li>

                                            <li>
                                                <a class="icon-1" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                                            </li>

                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <li><a href="#"><span>Hi, {{auth()->user()->name}}</span></a></li>
                                        @endguest
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER AREA END -->

        <!-- MOBILE MENU AREA START -->
        <div class="mobile-menu-area d-block d-md-none">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a @guest href="{{ route('welcome') }}" @else href="{{ route('home') }}"
                                           @endguest class="@if(Route::is('home')) active @endif">Home</a>
                                    </li>
                                    <li><a href="{{ route('about') }}" class="@if(Route::is('about')) active @endif">About Us</a>
                                    </li>
                                    <!-- <li><a href="{{ route('services') }}">Service</a>
                                    </li> -->
                                    <li><a href="{{ route('investment') }}">Make Investment</a>
                                    </li>
                                    <li><a href="#footer" class="@if(Route::is('contact')) active @endif">Contact Us</a></li>
                                    @guest
                                        @if(Route::has('register'))
                                        <li><a href="{{ route('register') }}">Create Your Account</a></li>
                                        @endif
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        @else
                                        <li><a href="{{ route('overview') }}">My Account</a><li>

                                        <li>
                                            <a class="icon-1" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                                        </li>

                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <li><a href="#"><span>Hi, {{auth()->user()->name}}</span></a></li>
                                    @endguest
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MOBILE MENU AREA END -->

        <!-- NOTIFICATIONS -->
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
        <!-- END NOTIFICATIONS -->