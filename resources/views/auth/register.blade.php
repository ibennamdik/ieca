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
                            <li class="active">Register</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Register -->
            <section class="block-login m-t-lg-30 m-t-xs-0 m-b-lg-50">
                <div class="">
                    <div class="row">
                        <div class="col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">
                            <div class="heading">
                                <h3>Create an Account</h3>
                            </div>
                            <div class="p-lg-30 p-xs-15 bg-gray-f5 bg1-gray-15">
                                <p class="m-b-lg-15">Compete all fill below to create an account!</p>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control form-item" placeholder="Name"
                                            name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-item" placeholder="State of origin"
                                            name="state" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control form-item" placeholder="Country"
                                            name="country" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="date" class="form-control form-item" placeholder="Date of birth"
                                            name="birth_date" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="email" class="form-control form-item" placeholder="Email"
                                            name="email" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control form-item" placeholder="Phone"
                                            name="phone_number" required>
                                    </div>
                                    
                                    <!-- <div class="form-group">
                                        <input type="text" class="form-control form-item" placeholder="Address"
                                            name="address" required>
                                    </div> -->
                                    
                                    <div class="form-group">
                                        <input type="password" class="form-control form-item" placeholder="Password"
                                            name="password" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="password" class="form-control form-item"
                                            placeholder="Enter your password again" name="password_confirmation" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control form-item" placeholder="Security Question"
                                            name="question" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-item" placeholder="Answer"
                                            name="answer" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="ht-btn ht-btn-default form-control form-item">Generate Client
                                        </button>
                                    </div>
                                    <div class="form-group text-center">
                                        <div class="form-group text-center">
                                            <a class="ht-btn btn-success " href="{{route('login')}}">Login
                                            </a>
                                        </div>
                                    </div>
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
