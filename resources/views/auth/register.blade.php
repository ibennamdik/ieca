@extends('layouts.simple')

@section('content')
 <!-- CONTACT AREA START -->
 <div class="contact-area pt-115 pb-115">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12">
                <!-- get-in-toch -->
                <div class="get-in-toch">
                    <div class="section-title mb-30">
                        <h3>Create</h3>
                        <h2>An Account to Invest</h2>
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
                                <span> </span>
                                <span></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8 col-12">
                <div class="contact-messge contact-bg">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <!-- blog-details-reply -->
                        <div class="leave-review">
                            <h5>Fill the form below</h5>
                            <form id="contact-form" action="{{ route('register') }}" method="POST">
                            @csrf
                                <input type="text" name="name" placeholder="Your name">
                                <input type="text" name="phone_number" placeholder="Phone Number">
                                <input type="email" name="email" placeholder="Email">
                                <input type="text" name="state" placeholder="State">
                                <input type="text" name="country" placeholder="Country">
                                <input type="text" name="address" placeholder="Address">
                                <br>
                            <!-- <p class="form-messege mb-0"></p> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <!-- blog-details-reply -->
                        <div class="leave-review">
                            <h5>&nbsp;</h5>
                                <input type="password" name="password" placeholder="Password">
                                <input type="password" name="password_confirmation" placeholder="Retype Password">
                                <input type="text" name="question" placeholder="Security Question">
                                <input type="text" name="answer" placeholder="Answer">
                                Date of birth : <input type="date" name="birth_date" placeholder="Date of Birth">
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
</div>
<!-- CONTACT AREA END -->
@endsection