@extends('layouts.account')

@section('account-content')

<div class="heading">
    <h3>Password</h3>
</div>


<div class="col-sm-12 col-md-6 col-lg-6 col-lg-offset-3">
    <div class="content">
        <div class="p-lg-30 p-xs-15 bg-gray-f5 bg1-gray-15">
            <p class="m-b-lg-15">Compete all fill below to create an account!</p>
            <form action="{{ route('updatePassword') }}" method="POST">
                @csrf

                <div class="form-group">
                    <input type="password" class="form-control form-item" placeholder="Old Password" name="old_pass" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-item" placeholder="New Password" name="password" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-item" placeholder="Confirm password again" name="password_confirmation" required>
                </div>
                <button type="submit" class="ht-btn ht-btn-default">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection
