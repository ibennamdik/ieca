@extends('layouts.backend')

@section('content')
<!-- Page Content -->
<div class="bg-image" style="background-image: url('{{ asset('media/photos/photo26@2x.jpg') }}');">
    <div class="bg-black-op-75">
        <div class="content content-top content-full text-center">
            <div class="py-20">
                <h1 class="h2 font-w700 text-white mb-10">Orders</h1>
                <h2 class="h4 font-w400 text-white-op mb-0">...</h2>
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
            <span class="breadcrumb-item active">Orders</span>
        </nav>
    </div>
</div>
<!-- END Breadcrumb -->

<!-- Page Content -->
<div class="content">
    <!-- Overview -->
    <!-- CountTo ([data-toggle="countTo"] is initialized in Helpers.coreAppearCountTo()) -->
    <!-- For more info and examples you can check out https://github.com/mhuggins/jquery-countTo -->
    <div class="content-heading">
        <div class="dropdown float-right">
            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-orders-stats-drop"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Today
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-orders-stats-drop">
                <a class="dropdown-item active" href="javascript:void(0)">
                    <i class="fa fa-fw fa-calendar mr-5"></i>Today
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-calendar mr-5"></i>This Week
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-calendar mr-5"></i>This Month
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-calendar mr-5"></i>This Year
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-circle-o mr-5"></i>All Time
                </a>
            </div>
        </div>
        Overview <small class="d-none d-sm-inline"> </small>
    </div>
    <div class="row gutters-tiny">
        <!-- Pending -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-transparent bg-gd-sun" href="javascript:void(0)">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-spinner fa-spin text-white-op"></i>
                        </div>
                    </div>
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo"
                            data-to="{{ $orders->where('status_id', 2)->count() }}">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-white-op">Pending</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Pending -->

        <!-- Canceled -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-transparent bg-gd-cherry" href="javascript:void(0)">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-times text-white-op"></i>
                        </div>
                    </div>
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo"
                            data-to="{{ $orders->where('status_id', 3)->count() }}">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-white-op">Canceled</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Canceled -->

        <!-- Completed -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-transparent bg-gd-lake" href="javascript:void(0)">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-check text-white-op"></i>
                        </div>
                    </div>
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo"
                            data-to="{{ $orders->where('status_id', 1)->count() }}">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-white-op">Completed</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Completed -->

        <!-- All -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-transparent bg-gd-dusk" href="javascript:void(0)">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-archive text-white-op"></i>
                        </div>
                    </div>
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo"
                            data-to="{{ $orders->count() }}">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-white-op">All</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END All -->
    </div>
    <!-- END Overview -->

    <!-- Orders -->
    <div class="content-heading">
        <div class="dropdown float-right">
            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-orders-drop"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Today
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-orders-drop">
                <a class="dropdown-item active" href="javascript:void(0)">
                    <i class="fa fa-fw fa-calendar mr-5"></i>Today
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-calendar mr-5"></i>This Week
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-calendar mr-5"></i>This Month
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-calendar mr-5"></i>This Year
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-circle-o mr-5"></i>All Time
                </a>
            </div>
        </div>
        <div class="dropdown float-right mr-5">
            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-orders-filter-drop"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                All
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-orders-filter-drop">
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-spinner fa-spin text-warning mr-5"></i>Pending
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-refresh fa-spin text-info mr-5"></i>Processing
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-times text-danger mr-5"></i>Canceled
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-check text-success mr-5"></i>Completed
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item active" href="javascript:void(0)">
                    <i class="fa fa-fw fa-circle-o mr-5"></i>All
                </a>
            </div>
        </div>
        Orders ({{ $orders->count() }})
    </div>
    <div class="block">

        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table class="table table-bordered  table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="d-none d-sm-table-cell">ID</th>
                            <th class="d-none d-sm-table-cell">Status</th>
                            <th class="d-none d-sm-table-cell">Submitted</th>
                            <th class="d-none d-sm-table-cell">Products</th>
                            <th class="">Customer</th>
                            <th class="">Value</th>
                            <th class="d-none d-sm-table-cell">Payment Status</th>
                            <th class="">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>
                                <a class="font-w600" href="#">{{ $order->id }}</a>
                            </td>

                            <td>
                                <span class="badge badge-{{ $order->status->style }}">{{ $order->status->name}}</span>
                            </td>

                            <td class="d-none d-sm-table-cell">
                                {{ $order->created_at->toDayDateTimeString() }}
                            </td>

                            <td class="d-none d-sm-table-cell">
                                <a href="javascript:void(0)">{{ $order->orderItems->count() }} Product(s)</a>
                            </td>

                            <td class="">
                                <a
                                    href="{{ route('admin.customers.show', $order->user->id) }}">{{ $order->user->name }}</a>
                            </td>

                            <td class="">
                                <span
                                    class="text-black">&#8358;{{number_format(floatval($order->payment->amount ), 2) }}</span>
                            </td>

                            <td class="d-none d-sm-table-cell">
                                <span
                                    class="badge badge-{{ $order->payment->status->style }}">{{ $order->payment->status->name}}</span>
                            </td>

                            <td class="">
                                <button type="button" class="btn btn-alt-primary" data-toggle="modal"
                                    data-target="#modal-popin{{ $order->id }}">View Details</button>
                            </td>
                        </tr>
                        <div class="modal fade" id="modal-popin{{ $order->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="modal-popin{{ $order->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-popin" role="document">
                                <div class="modal-content">
                                    <div class="block block-themed block-transparent mb-0">
                                        <div class="block-header bg-{{ $order->status->style }}">
                                            <h3 class="block-title">Order Details</h3>
                                            <div class="block-options">
                                                <button type="button" class="btn-block-option" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <i class="si si-close"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="block-content mb-5">
                                            <form method="POST"
                                                action="{{ route('admin.orders.updateStatus', $order) }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label for="status">Update Status</label>
                                                        <div>
                                                            <select class="js-select2 form-control" id="status"
                                                                name="status" style="width: 100%;"
                                                                data-placeholder="Choose one.." required>
                                                                <option></option>
                                                                @foreach ($statuses as $v)
                                                                <option value="{{ $v->id }}">{{ $v->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="col-12 text-right">
                                                        <button type="submit" class="btn btn-alt-{{ $order->status->style }}">
                                                            <i class="fa fa-check"></i> Update
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                            <hr width="100%" class="mb-5">
                                            <div class="row">
                                                <div class="col">Transaction Date</div>
                                                <div class="col">
                                                    {{ $order->payment->created_at->toDayDateTimeString() }}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">Transaction ID</div>
                                                <div class="col">{{ $order->payment->transaction_ref }}</div>
                                            </div>
                                            <hr width="100%" class="mb-5">
                                            <h5>Customer</h5>
                                            <div class="row">
                                                <div class="col">Order ID</div>
                                                <div class="col">{{ $order->id }}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">Customer</div>
                                                <div class="col">{{ $order->user->name }}</div>
                                            </div>

                                            <hr width="100%" class="mb-5">
                                            <h5>Product</h5>
                                            <div class="row">
                                                <div class="col"><u>Item</u></div>
                                                <div class="col"><u>Qty</u></div>
                                                <div class="col"><u>Unit</u></div>
                                                <div class="col"><u>Price</u></div>
                                            </div>
                                            @foreach ($order->orderItems as $item)
                                            <div class="row">
                                                <div class="col">{{ $item->product->name }}</div>
                                                <div class="col">{{ $item->quantity }}pcs</div>
                                                <div class="col">
                                                    &#8358;{{number_format(floatval($item->product->amount), 2) }}</div>
                                                <div class="col">
                                                    &#8358;{{number_format(floatval($item->product->amount*$item->quantity), 2) }}
                                                </div>
                                            </div>
                                            @endforeach
                                            <div class="row">
                                                <div class="col"><strong>Delivery Cost</strong></div>
                                                <div class="col"></div>
                                                <div class="col"></div>
                                                <div class="col">
                                                    &#8358;{{number_format(floatval( $order->delivery_cost ), 2) }}
                                                </div>
                                            </div>
                                            <hr width="100%" class="mb-5">
                                            <div class="row">
                                                <div class="col">Total Amount</div>
                                                <div class="col"></div>
                                                <div class="col"></div>
                                                <div class="col">
                                                    &#8358;{{number_format(floatval($order->payment->amount ), 2) }}
                                                </div>
                                            </div>

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

            <!-- END Products Table -->

            <!-- Navigation -->
            <!-- END Navigation -->
        </div>
    </div>
    <!-- END Orders -->
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
