@extends('layouts.account')

@section('account-content')
<h3>Your Profile</h3>
<!-- AGENTS DETAILS ABOUT START -->
<div class="agents-details-about pt-115">
    <div class="container">
    
        <div class="row">

            <div class="col-lg-4 col-12">
                <div class="agent-details-image">
                    <img src="{{isset(auth()->user()->profile->avatar) ? Storage::url(auth()->user()->profile->avatar) : asset('media/frontend_imgs/default.png') }}" alt="image">
                </div>    
            </div>

            <div class="col-lg-3 col-12">
                <div class="agent-details-desc-info">
                    <div class="agent-details-name">
                        <h4>Name</h4>
                        <p>{{ auth()->user()->name }}</p>
                        <h4>Phone</h4>
                        <p>{{ isset(auth()->user()->profile) ? auth()->user()->profile->phone_number : null }}</p>
                        <h4>Email</h4>
                        <p>{{ isset(auth()->user()->email) ? auth()->user()->email : null }}</p>
                        <h4>Address</h4>
                        <p>{{ isset(auth()->user()->profile) ? auth()->user()->profile->address : null }}</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-5 col-12">
                <div class="agent-details-contact">
                    <h4>Summary of Activities</h4>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <button type="submit" class="submit-btn-1">Go to Investments</button>
                </div>    
            </div>
            
        </div>
    </div>
</div>

<!-- AGENTS DETAILS ABOUT END -->
@endsection
