@extends('layouts.backend')

@section('content')
<!-- Page Content -->
<div class="bg-gd-dusk">
    <div class="bg-black-op-25">
        <div class="content content-top content-full text-center">
            <div class="mb-20">
                <a class="img-link" href="#">
                    <img class="img-avatar img-avatar-thumb"
                        src="{{isset($user->profile->avatar) ? Storage::url($user->profile->avatar) : asset('media/avatars/avatar15.jpg') }}"
                        alt="">
                </a>
            </div>
            <h1 class="h3 text-white font-w700 mb-10">
                {{ $user->name }} <i class="fa fa-star text-warning"></i>
            </h1>

        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Breadcrumb -->
<div class="bg-body-light border-b">
    <div class="content py-5 text-center">
        <nav class="breadcrumb bg-body-light mb-0">
            <a class="breadcrumb-item" href="{{ route('admin.home')}}">{{ $settings->appname }}</a>
            <a class="breadcrumb-item" href="javascript:void(0)">Admin</a>
            <span class="breadcrumb-item active">{{ $user->name }}</span>
        </nav>
    </div>
</div>
<!-- END Breadcrumb -->

<!-- Page Content -->
<div class="content">
    <!-- Overview -->

    <!-- END Overview -->
    @if(auth()->user()->hasRole('Level 1'))
    <h2 class="content-heading">Level</h2>
    <div class="row gutters-tiny">
        <!-- Basic Info -->
        <div class="col-md-12">
            <form method="POST" action="{{ route('admin.staff.update', $user) }}" class="form"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <input type="hidden" value="level" name="type">
                <div class="block block-rounded block-themed">
                    <div class="block-header bg-gd-primary">
                        <h3 class="block-title">Update Level</h3>
                        <div class="block-options">
                            <button type="submit" class="btn btn-sm btn-alt-primary">
                                <i class="fa fa-save mr-5"></i>Update
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="form-group row">
                            <label class="col-12" for="role">Select Level</label>
                            <div class="col-12">
                                <select class="form-control" id="role" name="role" data-placeholder="Choose one.."
                                    required>
                                    @foreach ($roles as $v)
                                    <option value="{{ $v->name }}" @if ($user->getRoleNames()->first() == $v->name)
                                        selected
                                        @endif>{{ $v->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
    @endif
    <!-- Addresses -->
    <h2 class="content-heading">Profile</h2>
    <div class="row gutters-tiny">
        <!-- Basic Info -->
        <div class="col-md-12">
            <form method="POST" action="{{ route('admin.staff.update', $user) }}" class="form"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="block block-rounded block-themed">
                    <div class="block-header bg-gd-primary">
                        <h3 class="block-title">Profile Details</h3>
                        <div class="block-options">
                            <button type="submit" class="btn btn-sm btn-alt-primary">
                                <i class="fa fa-save mr-5"></i>Update
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="form-group row">
                            <input type="hidden" value="profile" name="type">
                            <label class="col-12" for="name">Name</label>
                            <div class="col-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                    value="{{ $user->name }}" required>
                            </div>
                            @if($errors->has('name'))
                            <small class="text-danger col-12">{{ $errors->first('name')}}</small>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="email">Email</label>
                            <div class="col-12">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                    value="{{ $user->email }}" required>
                            </div>
                            @if($errors->has('email'))
                            <small class="text-danger col-12">{{ $errors->first('email')}}</small>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label class="col-12" for="phone_number">Contact</label>
                            <div class="col-12">
                                <input type="text" class="form-control" id="phone_number" name="phone_number"
                                    placeholder="Phone Number"
                                    value="{{ isset($admin->profile) ? $admin->profile->phone_number : null }}"
                                    required>
                            </div>
                            @if($errors->has('phone_number'))
                            <small class="text-danger col-12">{{ $errors->first('phone_number')}}</small>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-12">Avatar</label>
                            <div class="col-12">
                                <input type="file" class="form-control" id="avatar" name="avatar" placeholder="Avatar">
                            </div>
                            @if($errors->has('avatar'))
                            <small class="text-danger col-12">{{ $errors->first('avatar')}}</small>
                            @endif
                        </div>


                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Cart -->
    <h2 class="content-heading">Update Password</h2>
    <div class="row gutters-tiny">
        <!-- Basic Info -->
        <div class="col-md-12">
            <form method="POST" action="{{ route('admin.staff.update', $user) }}" class="form"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <input type="hidden" value="password" name="type">
                <div class="block block-rounded block-themed">
                    <div class="block-header bg-gd-primary">
                        <h3 class="block-title">Password</h3>
                        <div class="block-options">
                            <button type="submit" class="btn btn-sm btn-alt-primary">
                                <i class="fa fa-save mr-5"></i>Update
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="form-group row">
                            <label class="col-12" for="password">Old Password</label>
                            <div class="col-12">
                                <input type="password" class="form-control" id="old_pass" name="old_pass"
                                    placeholder="Old Password" required>
                            </div>
                            @if($errors->has('old_pass'))
                            <small class="text-danger col-12">{{ $errors->first('old_pass')}}</small>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label class="col-12" for="password">New Password</label>
                            <div class="col-12">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="New Password" required>
                            </div>
                            @if($errors->has('password'))
                            <small class="text-danger col-12">{{ $errors->first('password')}}</small>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label class="col-12" for="password_confirmation">Confirm Password</label>
                            <div class="col-12">
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation" placeholder="Confirm Password" required>
                            </div>
                            @if($errors->has('password_confirmation'))
                            <small class="text-danger col-12">{{ $errors->first('password_confirmation')}}</small>
                            @endif
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Cart -->



    <!-- Private Notes -->




    <!-- END Private Notes -->
</div>
<!-- END Page Content -->
@endsection
