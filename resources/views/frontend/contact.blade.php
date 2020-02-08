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
                                <li class="active">Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Contact -->
                <section class="block-contact m-t-lg-30 m-t-xs-0 p-b-lg-50">
                    <div class="">
                        <div class="row">
                            <!-- Contact info -->
                            <div class="col-sm-6 col-md-6 col-lg-6 m-b-xs-50">
                                <div class="heading">
                                    <h3>Contact info</h3>
                                </div>
                                <div class="contact-info p-lg-30 p-xs-15 bg-gray-fa bg1-gray-2">
                                    <div class="content">
                                        <p>Is there anything you would like us to look into? Simply enter your email below, send us a message and we would be in touch.</p>
                                        <ul class="list-default">
                                            <li><i class="fa fa-clock-o"></i>{{ $settings->address }}</li>
                                            <li><i class="fa fa-phone"></i>{{ $settings->phone1 }}</li>
                                            <li><i class="fa fa-envelope-o"></i>{{ $settings->email }}</li>
                                            <li><i class="fa fa-globe"></i>{{ $settings->web_url }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Contact form -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="heading">
                                    <h3>Contact Form</h3>
                                </div>
                                <div class="contact-form p-lg-30 p-xs-15 bg-gray-fa bg1-gray-2">
                                    <form action="{{ route('complaint') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control form-item" placeholder="Email" required value="{{ isset(auth()->user()->email) ? auth()->user()->email : null }}">
                                        </div>
                                        <div class="form-group">
                                            <input name="name" type="text" class="form-control form-item" placeholder="Name" required value="{{ isset(auth()->user()->name) ? auth()->user()->name : null }}">
                                        </div>
                                        <div class="form-group">
                                            <input name="user_id" type="hidden" class="form-control form-item" value="{{ isset(auth()->user()->id) ? auth()->user()->id : null }}">
                                        </div>
                                        <textarea name="message" class="form-control form-item h-200 m-b-lg-10" placeholder="Content" rows="3" required></textarea>
                                        <button type="submit" class="ht-btn ht-btn-default">Submit</button>
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
