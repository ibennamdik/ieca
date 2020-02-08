@extends('layouts.backend')

@section('content')
<!-- Page Content -->
<div class="bg-image" style="background-image: url('{{ asset('media/photos/photo26@2x.jpg') }}');">
    <div class="bg-black-op-75">
        <div class="content content-top content-full text-center">
            <div class="py-20">
                <h1 class="h2 font-w700 text-white mb-10">Staff Management</h1>
                <h2 class="h4 font-w400 text-white-op mb-0">Manage your staff and their activities</h2>
            </div>
        </div>
    </div>
</div>

<div class="bg-body-light border-b">
    <div class="content py-5 text-center">
        <nav class="breadcrumb bg-body-light mb-0">
            <a class="breadcrumb-item" href="{{ route('admin.home')}}">{{ $settings->appname }}</a>
            <span class="breadcrumb-item active">Staff Management</span>
        </nav>
    </div>
</div>

<div class="content">

    <h2 class="content-heading">Actions</h2>
    <div class="row gutters-tiny">
        <!-- Add Category -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-link-shadow" href="#" data-toggle="modal" data-target="#modal-addAdmin">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-archive fa-2x text-info-light"></i>
                        </div>
                    </div>
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-info">

                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Add Staff</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Add Category -->

        <!-- Add Brand -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-link-shadow" href="#">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-archive fa-2x text-warning-light"></i>
                        </div>
                    </div>
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-warning">

                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">...</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Add Brand -->

        <!-- Add Button -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-link-shadow" href="#">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-archive fa-2x text-danger-light"></i>
                        </div>
                    </div>
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 danger-light">

                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">...</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Add Button -->

        <!-- Add Product -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-link-shadow" href="#">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-archive fa-2x text-success-light"></i>
                        </div>
                    </div>
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-success">

                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">...</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Add Product -->
    </div>
    <!-- END Actions -->
    <div class="modal fade" id="modal-addAdmin" tabindex="-1" role="dialog" aria-labelledby="modal-addAdmin"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-popin" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Add New Admin</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <form method="POST" action="{{ route('admin.staff.store') }}" class="form">
                            @csrf
                            <div class="block block-rounded block-themed">

                                <div class="block-content block-content-full">
                                    <div class="form-group row">
                                        <label class="col-12" for="name">Name</label>
                                        <div class="col-12">
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Name" value="{{ old('name') }}" required>
                                        </div>
                                        @if($errors->has('name'))
                                        <small class="text-danger col-12">{{ $errors->first('name')}}</small>
                                        @endif
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12" for="email">Email</label>
                                        <div class="col-12">
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email" value="{{ old('email') }}" required>
                                        </div>
                                        @if($errors->has('email'))
                                        <small class="text-danger col-12">{{ $errors->first('email')}}</small>
                                        @endif
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-12" for="phone_number">Contact</label>
                                        <div class="col-12">
                                            <input type="text" class="form-control" id="phone_number"
                                                name="phone_number" placeholder="Phone Number"
                                                value="{{ old('phone_number') }}" required>
                                        </div>
                                        @if($errors->has('phone_number'))
                                        <small class="text-danger col-12">{{ $errors->first('phone_number')}}</small>
                                        @endif
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-12" for="role">Select Level</label>
                                        <div class="col-12">
                                            <select class="form-control" id="role" name="role"
                                                data-placeholder="Choose one.." required>
                                                @foreach ($roles as $v)
                                                <option value="{{ $v->name }}">{{ $v->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-12" for="password">Password</label>
                                        <div class="col-12">
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Password" required>
                                        </div>
                                        @if($errors->has('password'))
                                        <small class="text-danger col-12">{{ $errors->first('password')}}</small>
                                        @endif
                                    </div>



                                    <div class="form-group row">
                                        <div class="col-12 text-right">
                                            <button type="submit" class="btn btn-alt-success">Add Admin</button>
                                        </div>


                                    </div>

                                </div>

                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Products -->
    <div class="">
        @yield('staff-content')
    </div>

    <!-- END Products -->
</div>
<!-- END Page Content -->
@endsection


@section('css_after')
<link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">

@endsection

@section('js_after')
<script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page JS Code -->
<script src="{{ asset('js/pages/be_tables_datatables.min.js') }}"></script>
@endsection
