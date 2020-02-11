@extends('layouts.simple')

@section('content')
<!-- new-customers -->
 <!-- LOGIN SECTION START -->
 <div class="login-section pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="new-customers mb-50">
                    <form method="POST" action="{{ route('register') }}">
                        <h5 class="mb-50">REGISTER</h5>
                        <div class="login-account p-30 box-shadow">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" placeholder="First Name" name="firstname">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="last Name"  name="lastname">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Country" name="country">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="State" name="state">
                                </div>
                                <div class="col-md-6">
                                    Birth Date <input type="date" placeholder="" name="birthdate">
                                </div>
                                
                                <div class="col-md-6">
                                    <input type="text" placeholder="Email" name="email">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Phone" name="phone">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Address" name="address">
                                </div>

                                <div class="col-md-6">
                                    <input type="password" placeholder="Password" name="password">
                                </div>
                                <div class="col-md-6">
                                    <input type="password" placeholder="Confirm Password"  name="confirmpassword">
                                </div>

                                <div class="col-md-6">
                                    <input type="text" placeholder="Security Question"  name="question">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Answer"  name="answer">
                                </div>
                            </div>
                            <div class="checkbox">
                                <label class="mr-10">
                                    <small>
                                        <input type="checkbox" name="signup">You agree to our terms and comditions
                                    </small>
                                </label>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <button class="submit-btn-1 mt-20" type="submit" value="register">Register</button>
                                </div>
                                <div class="col-md-6 col-12">
                                    <button class="submit-btn-1 mt-20 f-right" type="reset">Clear</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
