@extends('layouts.simple')

@section('content')

<div id="wrap-body" class="p-t-lg-30">
    <div class="container">
        <div class="wrap-body-inner">
            <!-- Breadcrumb-->
            <div class="hidden-xs">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="ht-breadcrumb pull-left">
                            <li class="home-act"><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="active">Your Account</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Contact -->
            <section class="block-contact m-t-lg-30 m-t-xs-0 p-b-lg-50">
                <div class="">
                    <div class="row">
                        <!-- Contact info -->
                        <div class="col-sm-12 col-md-12 col-lg-12 m-b-xs-50">
                            <div class="heading">
                                <div class="main-menu">
                                    <div class="container1">
                                        <nav class="navbar navbar-default menu">
                                            <div class="container-fluid">
                                                <div class="navbar-header">
                                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                                                        <span class="sr-only">Toggle navigation</span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                    </button>
                                                </div>
                                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                                                    <ul class="nav navbar-nav">
                                                        <li><a href="{{ route('overview') }}" class="@if(Route::is('overview')) active @endif">Overview</a></li>
                                                        <li><a href="{{ route('order') }}" class="@if(Route::is('order')) active @endif">My Orders</a></li>
                                                        <li><a href="#">Messages</a></li>
                                                        <li><a href="{{ route('profile') }}" class="@if(Route::is('profile')) active @endif">Update Profile</a></li>
                                                        <li><a href="{{ route('password') }}" class="@if(Route::is('password')) active @endif">Change Password</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>


                            @yield('account-content')

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection
