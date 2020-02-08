@extends('layouts.backend')

@section('content')
<!-- Page Content -->
<div class="bg-gd-dusk">
    <div class="bg-black-op-25">
        <div class="content content-top content-full text-center">
            <div class="mb-20">
                <a class="img-link" href="be_pages_ecom_customer.html">
                    <img class="img-avatar img-avatar-thumb"
                        src="{{isset($customer->profile->avatar) ? Storage::url($customer->profile->avatar) : asset('media/avatars/avatar15.jpg') }}"
                        alt="">
                </a>
            </div>
            <h1 class="h3 text-white font-w700 mb-10">
                {{ $customer->name }} <i class="fa fa-star text-warning"></i>
            </h1>
            <h2 class="h5 text-white-op">
                Premium Member with <a class="text-primary-light link-effect" href="javascript:void(0)">39 Orders</a>
            </h2>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Breadcrumb -->
<div class="bg-body-light border-b">
    <div class="content py-5 text-center">
        <nav class="breadcrumb bg-body-light mb-0">
            <a class="breadcrumb-item" href="{{ route('admin.home')}}">{{ $settings->appname }}</a>
            <a class="breadcrumb-item" href="javascript:void(0)">Customers</a>
            <span class="breadcrumb-item active">{{ $customer->name }}</span>
        </nav>
    </div>
</div>
<!-- END Breadcrumb -->

<!-- Page Content -->
<div class="content">
    <!-- Overview -->
    <h2 class="content-heading">Overview</h2>
    <div class="row gutters-tiny">
        <!-- Orders -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-line-chart fa-2x text-body-bg-dark"></i>
                        </div>
                    </div>
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0" data-toggle="countTo"
                            data-to="{{ $customer->orders->count() }}">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Orders</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Orders -->

        <!-- In Cart -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-shopping-cart fa-2x text-body-bg-dark"></i>
                        </div>
                    </div>
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0" data-toggle="countTo" data-to="0">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">In Cart</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END In Cart -->

        <!-- Edit Customer -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-link-shadow" href="#" data-toggle="modal" data-target="#modal-edit">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-user fa-2x text-info-light"></i>
                        </div>
                    </div>
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-info">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Edit Customer</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Edit Customer -->

        <!-- Remove Customer -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-link-shadow" href="{{ route('admin.customers.destroy', $customer) }}">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-user fa-2x text-danger-light"></i>
                        </div>
                    </div>
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-danger">
                            <i class="fa fa-times"></i>
                        </div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Remove Customer</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Remove Customer -->
    </div>
    <!-- END Overview -->

    <!-- Addresses -->
    <h2 class="content-heading">Addresses</h2>
    <div class="row row-deck gutters-tiny">
        <!-- Billing Address -->
        <div class="col-md-6">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Billing Address</h3>
                </div>
                <div class="block-content">
                    <div class="font-size-lg text-black mb-5">{{ $customer->name }}</div>
                    <address>
                        {{ $customer->profile->address }}<br><br>
                        <i class="fa fa-phone mr-5"></i>{{$customer->profile->phone_number}}<br>
                        <i class="fa fa-envelope-o mr-5"></i> <a href="javascript:void(0)">{{ $customer->email }}</a>
                    </address>
                </div>
            </div>
        </div>
        <!-- END Billing Address -->

        <!-- Shipping Address -->
        <div class="col-md-6">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Shipping Address</h3>
                </div>
                <div class="block-content">
                    <div class="font-size-lg text-black mb-5">{{ $customer->name }}</div>
                    <address>
                        {{ $customer->profile->address }}<br><br>
                        <i class="fa fa-phone mr-5"></i>{{$customer->profile->phone_number}}<br>
                        <i class="fa fa-envelope-o mr-5"></i> <a href="javascript:void(0)">{{ $customer->email }}</a>
                    </address>
                </div>
            </div>
        </div>
        <!-- END Shipping Address -->
    </div>
    <!-- END Addresses -->

    <!-- Cart -->
    <h2 class="content-heading">Order History</h2>
    <div class="block block-rounded">
        <div class="block-content">
            <!-- Products Table -->
            <div class="table-responsive">
                <table class="table table-borderless table-striped">
                <thead>
                    <tr>
                        <th style="width: 100px;">ID</th>
                        <th class="d-none d-sm-table-cell" style="width: 120px;">Status</th>
                        <th class="d-none d-sm-table-cell" style="width: 120px;">Submitted</th>
                        <th>Product</th>
                        <th class="text-right">Value</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customer->orders as $order)
                    <tr>
                        <td>
                            <a class="font-w600" href="be_pages_ecom_product_edit.html">{{ $order->id }}</a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-{{ $order->status->style }}">{{ $order->status->name }}</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            {{$order->created_at->toDayDateTimeString()}} </td>
                        <td>
                            {{ $order->orderItems->count() }} Product(s)
                        </td>
                        <td class="text-right">
                            &#8358;{{number_format(floatval($order->payment->amount ), 2) }}
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            </div>

            <!-- END Products Table -->
        </div>
    </div>
    <!-- END Cart -->

    <!-- Past Orders -->
    <h2 class="content-heading">Payment History</h2>
    <div class="block block-rounded">
        <div class="block-content">
            <!-- Orders Table -->
            <div class="table-responsive">
                 <table class="table table-borderless table-sm table-striped">
                <thead>
                    <tr>
                        <th style="width: 100px;">ID</th>
                        <th style="width: 120px;">Status</th>
                        <th class="d-none d-sm-table-cell" style="width: 120px;">Submitted</th>
                        <th class="d-none d-sm-table-cell">Customer</th>
                        <th class="text-right">Value</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customer->orders as $order)
                    <tr>
                        <td>
                            <a class="font-w600" href="be_pages_ecom_order.html">{{ $order->id }}</a>
                        </td>
                        <td>
                            <span
                                class="badge badge-{{ $order->payment->status->style }}">{{ $order->payment->status->name }}</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            {{ $order->payment->created_at->toDayDateTimeString() }} </td>
                        <td class="d-none d-sm-table-cell">
                            {{ $order->user->name }}
                        </td>
                        <td class="text-right">
                            &#8358;{{number_format(floatval($order->payment->amount ), 2) }}
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            </div>

            <!-- END Orders Table -->
        </div>
    </div>
    <!-- END Past Orders -->

    <!-- Private Notes -->

    <h2 class="content-heading">Private Notes</h2>
    <div class="block block-rounded">
        <div class="block-content">
            <div class="alert alert-info alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <p class="mb-0"><i class="fa fa-info-circle mr-5"></i> This note is only for internal use and will not
                    be displayed to the customer.</p>
            </div>
            <form action="be_pages_ecom_customer.html" method="post" onsubmit="return false;">
                <div class="form-group row mb-10">
                    <div class="col-12">
                        <textarea class="form-control" id="ecom-customer-note" name="ecom-customer-note"
                            placeholder="Add a private note.." rows="4"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-alt-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-edit" aria-hidden="true">
        <div class="modal-dialog modal-dialog-popin" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Customer Information</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content mb-5">
                        <form method="POST" action="{{ route('admin.customers.update', $customer) }}">
                            @csrf
                            @method('PATCH')
                            <div class="">
                                <div class="form-group row">
                                    <label class="col-12" for="name">Name</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                            value="{{ $customer->name }}" required>
                                    </div>
                                    @if($errors->has('name'))
                                    <small class="text-danger col-12">{{ $errors->first('name')}}</small>
                                    @endif
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="email">Email</label>
                                    <div class="col-12">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email" value="{{ $customer->email }}" required>
                                    </div>
                                    @if($errors->has('email'))
                                    <small class="text-danger col-12">{{ $errors->first('email')}}</small>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="phone_number">Contact</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="phone_number" name="phone_number"
                                            placeholder="Phone Number" value="{{ $customer->profile->phone_number }}" required>
                                    </div>
                                    @if($errors->has('phone_number'))
                                    <small class="text-danger col-12">{{ $errors->first('phone_number')}}</small>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="address">Address</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="address" name="address"
                                            placeholder="Address" value="{{ $customer->profile->address }}" required>
                                    </div>
                                    @if($errors->has('address'))
                                    <small class="text-danger col-12">{{ $errors->first('address')}}</small>
                                    @endif
                                </div>

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
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <!-- END Private Notes -->
</div>
<!-- END Page Content -->
@endsection
