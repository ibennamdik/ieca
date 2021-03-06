@extends('layouts.simple')

@section('content')
<!-- CONTACT AREA START -->
<div class="contact-area pt-115 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-12">
                    <!-- get-in-toch -->
                    <div class="get-in-toch">
                        <div class="section-title mb-30">
                            <h3>Login</h3>
                            <h2>To your Existing Account</h2>
                        </div>
                        <div class="contact-desc mb-50">
                            <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content"></span> 
                            
                            </p>
                        </div>
                        <ul class="contact-address">
                            <li>
                                <div class="contact-address-icon">
                                    <img src="images/icons/location-2.png" alt="">
                                </div>
                                <div class="contact-address-info">
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="contact-address-info">
                                    <span></span>
                                    <span></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 col-12">
                    <div class="contact-messge contact-bg">
                        <!-- blog-details-reply -->
                        <div class="leave-review">
                            <h5>Fill in your details</h5>
                            <form  action="{{ route('login') }}" method="post">
                            @csrf
                                <input type="email" name="email" placeholder="Email">
                                <input type="password" name="password" placeholder="Your password">
                                <!-- <label class="form-check-label" for="remember"> {{ __('Remember Me') }}</label> -->
                                <br>
                                <button type="submit" class="submit-btn-1">SUBMIT</button>
                            </form>
                            <!-- <p class="form-messege mb-0"></p> -->
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<!-- CONTACT AREA END -->

@endsection
