@extends('layouts.account')

@section('account-content')

<div class="heading">
    <h3>Personal Info</h3>
</div>

<div class="col-sm-12 col-md-6 col-lg-6">
    <!-- Product item -->
    <div class="product-item hover-img">
        <a href="#" class="product-img">
            <img src="{{isset(auth()->user()->profile->avatar) ? Storage::url(auth()->user()->profile->avatar) : asset('media/frontend_imgs/default.png') }}" alt="image">
        </a>
        <div class="product-caption">

            <ul class="absolute-caption">
                <li><i class="fa fa-clock-o"></i>
                    <form method="POST" action="{{ route('avatar') }}" enctype="multipart/form-data" class="text-center">
                        @csrf
                        <input type="file" class="form-control form-item" name="avatar">
                        <button type="submit" class="btn btn-primary">Change Image</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-6 col-lg-6">
    <div class="content">
        <div class="p-lg-30 p-xs-15 bg-gray-f5 bg1-gray-15">
            <p class="m-b-lg-15">Compete all fill below to create an account!</p>
            <form method="POST" action="{{ route('updateProfile') }}">
                @csrf
                {{-- @method('PATCH') --}}
                <div class="form-group">
                    <input type="email" class="form-control form-item" placeholder="Email" readonly value="{{ auth()->user()->email }}" name="email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-item" placeholder="Name" value="{{ auth()->user()->name }}" name="name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-item" placeholder="Address" value="{{ auth()->user()->profile->address }}" name="address" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-item" placeholder="Phone" value="{{ auth()->user()->profile->phone_number }}"  name="phone_number">
                </div>
                <button type="submit" class="ht-btn ht-btn-default">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection
