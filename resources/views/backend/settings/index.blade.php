@extends('layouts.backend')

@section('content')
<!-- Page Content -->
<div class="bg-image" style="background-image: url('{{ asset('media/photos/photo26@2x.jpg') }}');">
    <div class="bg-black-op-75">
        <div class="content content-top content-full text-center">
            <div class="py-20">
                <h1 class="h2 font-w700 text-white mb-10">Settings</h1>
                <h2 class="h4 font-w400 text-white-op mb-0">Set up your application</h2>
            </div>
        </div>
    </div>
</div>

<!-- END Hero -->

<!-- Breadcrumb -->
<div class="bg-body-light border-b">
    <div class="content py-5 text-center">
        <nav class="breadcrumb bg-body-light mb-0">
            <a class="breadcrumb-item" href="{{ route('admin.home')}}">{{ $settings->appname }}</a>
            <span class="breadcrumb-item active">Settings</span>
        </nav>
    </div>
</div>

<div class="content">
    <!-- Overview -->
    <h2 class="content-heading">System Settings</h2>

    <div class="row gutters-tiny">
        <!-- Basic Info -->
        <div class="col-md-12">
            <form action="{{ route('admin.settings.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="block block-rounded block-themed">
                    <div class="block-header bg-gd-primary">
                        <h3 class="block-title">System Info</h3>
                        <div class="block-options">
                            <button type="submit" class="btn btn-sm btn-alt-primary">
                                <i class="fa fa-save mr-5"></i>Update
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">

                        <div class="form-group row">
                            <div class="col-12">
                                <label for="logo">Logo</label>
                                <div>
                                    <input type="file" class="form-control" id="logo" name="logo"
                                        placeholder="Product Image" value="{{ $settings->logo }}">
                                </div>
                                @if($errors->has('logo'))
                                <small class="text-danger col-12">{{ $errors->first('logo')}}</small>
                                @endif
                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-12" for="address">Address</label>
                            <div class="col-12">
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="Product Name" value="{{ $settings->address }}">
                            </div>
                            @if($errors->has('address'))
                            <small class="text-danger col-12">{{ $errors->first('address')}}</small>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label class="col-12" for="email">Email</label>
                            <div class="col-12">
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Product Name" value="{{ $settings->email }}">
                            </div>
                            @if($errors->has('email'))
                            <small class="text-danger col-12">{{ $errors->first('email')}}</small>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label class="col-12" for="phone1">Phone 1</label>
                            <div class="col-12">
                                <input type="text" class="form-control" id="phone1" name="phone1"
                                    placeholder="Product Name" value="{{ $settings->phone1 }}">
                            </div>
                            @if($errors->has('phone1'))
                            <small class="text-danger col-12">{{ $errors->first('phone1')}}</small>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label class="col-12" for="phone2">Phone 2</label>
                            <div class="col-12">
                                <input type="text" class="form-control" id="phone2" name="phone2"
                                    placeholder="Product Name" value="{{ $settings->phone2 }}">
                            </div>
                            @if($errors->has('phone2'))
                            <small class="text-danger col-12">{{ $errors->first('phone2')}}</small>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label class="col-12" for="facebook_url">Facebook URL</label>
                            <div class="col-12">
                                <input type="text" class="form-control" id="facebook_url" name="facebook_url"
                                    placeholder="Product Name" value="{{ $settings->facebook_url }}">
                            </div>
                            @if($errors->has('facebook_url'))
                            <small class="text-danger col-12">{{ $errors->first('facebook_url')}}</small>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label class="col-12" for="instagram_url">Instagram URL</label>
                            <div class="col-12">
                                <input type="text" class="form-control" id="instagram_url" name="instagram_url"
                                    placeholder="Product Name" value="{{ $settings->instagram_url }}">
                            </div>
                            @if($errors->has('instagram_url'))
                            <small class="text-danger col-12">{{ $errors->first('instagram_url')}}</small>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label class="col-12" for="twitter_url">Twitter URL</label>
                            <div class="col-12">
                                <input type="text" class="form-control" id="twitter_url" name="twitter_url"
                                    placeholder="Product Name" value="{{ $settings->twitter_url }}">
                            </div>
                            @if($errors->has('twitter_url'))
                            <small class="text-danger col-12">{{ $errors->first('twitter_url')}}</small>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label class="col-12" for="youtube_url">Youtube URL</label>
                            <div class="col-12">
                                <input type="text" class="form-control" id="youtube_url" name="youtube_url"
                                    placeholder="Product Name" value="{{ $settings->youtube_url }}">
                            </div>
                            @if($errors->has('youtube_url'))
                            <small class="text-danger col-12">{{ $errors->first('youtube_url')}}</small>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label class="col-12" for="web_url">Website URL</label>
                            <div class="col-12">
                                <input type="text" class="form-control" id="web_url" name="web_url"
                                    placeholder="Product Name" value="{{ $settings->web_url }}">
                            </div>
                            @if($errors->has('web_url'))
                            <small class="text-danger col-12">{{ $errors->first('web_url')}}</small>
                            @endif
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- END Overview -->
    <h2 class="content-heading">Delivery Methods</h2>

    {{ $errors }}
    <div class="row gutters-tiny">
        <form action="{{ route('admin.settings.deliveryMethods.store') }}" method="POST" class="col-12" enctype="multipart/form-data">

            @csrf
            <div class="form-group row">
                <div class="col-lg-3">
                    <div class="">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="">
                        <input type="tel" class="form-control" id="cost" name="cost" placeholder="Cost" required>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="">
                        <input type="file" class="form-control" id="image" name="image" placeholder="Delivery Image">
                    </div>
                </div>

                <div class="col-lg-3">
                    <button type="submit" class="btn btn-primary col">Add</button>
                </div>
            </div>
        </form>
        <div class="block col-12">
            <div class="block-content block-content-full">
                <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th style="width: 100px;">ID</th>
                            <th>Name</th>
                            <th>Cost</th>
                            <th></th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($values as $v)

                        <tr>
                            <td>
                                <a class="font-w600" href="#">{{ $v->id }}</a>
                            </td>

                            <td class="d-none d-sm-table-cell">
                                <a href="#">{{ $v->name }}</a>
                            </td>
                            <td class="text-left">
                                <span class="text-black">{{ $v->cost }}</span>
                            </td>
                            <td class="text-right">
                                <span class="text-black"></span>
                            </td>
                            <td>
                                <form action="{{ route('admin.settings.deliveryMethods.destroy', $v) }}" method="POST">

                                    @csrf
                                    @method('DELETE')
                                    <a href="#" class="btn btn-sm btn-secondary" data-toggle="modal"
                                        data-target="#modal-popin{{ $v->id }}" title="edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    {{-- <button type="button" class="btn btn-alt-warning" data-toggle="modal" data-target="#modal-popin{{ $v->id }}">View
                                    Details</button> --}}
                                    <button type="submit" class="btn btn-sm btn-danger" title="trash">
                                        <i class="fa fa-trash"></i>
                                    </button>

                                </form>


                            </td>
                        </tr>
                        <div class="modal fade" id="modal-popin{{ $v->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="modal-popin{{ $v->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-popin" role="document">
                                <div class="modal-content">
                                    <div class="block block-themed block-transparent mb-0">
                                        <div class="block-header bg-primary-dark">
                                            <h3 class="block-title">Update Info</h3>
                                            <div class="block-options">
                                                <button type="button" class="btn-block-option" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <i class="si si-close"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="block-content">
                                            <form method="POST"
                                                action="{{ route('admin.settings.deliveryMethods.update', $v) }}" enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')

                                                <div class="row">
                                                    <div class="col-6">
                                                        <label>Name</label>
                                                        <input name="name" type="text" value="{{ $v->name }}"
                                                            class="form-control" required>
                                                    </div>
                                                    <div class="col-6">
                                                        <label>Cost</label>
                                                        <input name="cost" type="text" value="{{ $v->cost }}"
                                                            class="form-control" required>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <label>Image</label>
                                                        <input type="file" class="form-control" id="image" name="image"
                                                            placeholder="Delivery Image">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">

                                                    <div class="col-12 text-right">
                                                        <button type="submit" class="btn btn-alt-success">
                                                            <i class="fa fa-check"></i> Update
                                                        </button>
                                                    </div>
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-alt-secondary"
                                            data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>




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
