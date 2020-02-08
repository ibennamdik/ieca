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
                            <li class="home-act"><a href="#">My Account</a></li>
                            <li class="active">Login</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Form login -->
            <section class="block-login m-t-lg-30 m-t-xs-0 m-b-lg-50">
                <div>
                    <div class="row">
                        <div class="col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">
                            <div class="heading">
                                <h3>User Login</h3>
                            </div>
                            <div class="p-lg-30 p-xs-15 bg-gray-f5 bg1-gray-15">
                                <p class="m-b-lg-15">Please enter your email address and password to login!</p>
                                @if ($errors->has('email'))
                                <span class="text-danger p-5" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        {{-- <input type="email" class="form-control form-item" placeholder="Email"> --}}
                                        <input id="email" type="email"
                                            class="form-item form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                            name="email" value="{{ old('email') }}" required autofocus
                                            placeholder="Email Address">
                                    </div>

                                    <div class="form-group">
                                        <input id="password" type="password"
                                            class="form-control form-item{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                            name="password" required placeholder="Password">
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Login with Email</button>
                                        <!-- <a href="{{url('/redirect')}}" class="btn btn-danger">Login with Google Account</a> -->
                                        <a href="{{route('register')}}" class="btn btn-primary">Register Here</a>
                                    </div>
                                
                                    {{-- <button type="submit" class="ht-btn btn-danger"><i class="fa fa-google"></i> Sign in with <b>Google</b></button> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
