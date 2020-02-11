@extends('layouts.simple')

@section('content')
 <!-- LOGIN SECTION START -->
 <div class="login-section pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="registered-customers mb-50">
                    <h5 class="mb-50">LOGIN</h5>
                    @if ($errors->has('email'))
                    <span class="text-danger p-5" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                    <form method="POST" action="{{ route('login') }}">

                        <div class="login-account p-30 box-shadow">
                            <p>If you have an account with us, Please log in.</p>
                            <input type="text" name="name" placeholder="Email Address">
                            
                            <input type="password" name="password" placeholder="Password">
                            
                            <p><small><a href="#">Forgot our password?</a></small></p>
                            <button class="submit-btn-1" type="submit">login</button>
                            <!-- <button class="submit-btn-1" type="submit">Use Gmail</button> -->
                            <button class="submit-btn-1" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- LOGIN SECTION END -->

@endsection
