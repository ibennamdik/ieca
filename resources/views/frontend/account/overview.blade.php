@extends('layouts.account')

@section('account-content')

<div class="heading">
    <h3>Overview</h3>
</div>

<div class="col-sm-12 col-md-6 col-lg-4">
    <!-- Product item -->
    <div class="content">
        <ul class="list-default">
            <li><i class="fa fa-clock-o"></i>{{ auth()->user()->name }}</li>
            <li><i class="fa fa-phone"></i>{{ isset(auth()->user()->profile) ? auth()->user()->profile->phone_number : null }}</li>
            <li><i class="fa fa-envelope-o"></i>{{ auth()->user()->email }}</li>
            <li><i class="fa fa-globe"></i>{{ isset(auth()->user()->profile) ? auth()->user()->profile->address : null }}</li>
        </ul>
    </div>
</div>

<div class="col-sm-12 col-md-6 col-lg-4">
    <!-- Product item -->
    <div class="product-item hover-img">
        <a href="#" class="product-img">
            <img src="{{isset(auth()->user()->profile->avatar) ? Storage::url(auth()->user()->profile->avatar) : asset('media/frontend_imgs/default.png') }}" alt="image">
        </a>
        {{-- <div class="product-caption">

            <ul class="absolute-caption">
                <li><i class="fa fa-clock-o"></i>Change Image</li>
                <li><i class="fa fa-car"></i>Auto</li>
                <li><i class="fa fa-road"></i>Gas</li>
            </ul>
        </div> --}}
    </div>
</div>

<div class="col-sm-12 col-md-6 col-lg-4">
    <div class="content">
        <ul class="list-default">
            <li><i class="fa fa-clock-o"></i>My Orders ({{ auth()->user()->orders->count() }})</li>
            <li><i class="fa fa-globe"></i>Awaiting Delivery (0)</li>
            <li><i class="fa fa-globe"></i> </li>
            <li><i class="fa fa-envelope-o"></i> </li>
            <li><i class="fa fa-globe"></i> </li>
        </ul>
    </div>
</div>

@endsection
