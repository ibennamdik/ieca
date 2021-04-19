@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="bg-image" style="background-image: url('{{ asset('media/photos/photo26@2x.jpg') }}');">
        <div class="bg-black-op-75">
            <div class="content content-top content-full text-center">
                <div class="py-20">
                    <h1 class="h2 font-w700 text-white mb-10">IECA Admin Dashboard</h1>
                    <h2 class="h4 font-w400 text-white-op mb-0">Welcome Admin, you have <a class="text-primary-light link-effect" href="#">{{ $pending }} pending orders</a>.</h2>
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
                <span class="breadcrumb-item active">Dashboard</span>
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
            Overview<small class="d-none d-sm-inline"></small>
        </div>
        <div class="row gutters-tiny">
            <!-- Earnings -->
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-transparent bg-gd-elegance" href="javascript:void(0)">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-area-chart text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="2420" data-before="$">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Earnings</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Earnings -->

            <!-- Orders -->
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-transparent bg-gd-dusk" href="be_pages_ecom_orders.html">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-archive text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="{{ $orders->count() }}">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Orders</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Orders -->

            <!-- New Customers -->
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-transparent bg-gd-sea" href="javascript:void(0)">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-users text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="{{ $customers}}">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">New Customers</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END New Customers -->

            <!-- Conversion Rate -->
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-transparent bg-gd-aqua" href="javascript:void(0)">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-cart-arrow-down text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white">5.6%</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Conversion</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Conversion Rate -->
        </div>
        <!-- END Overview -->

        <!-- Orde'manage products',
            'manage brands',
            'manage categories',
            'manage subscriptions',
            
            rs Overview -->
        <div class="content-heading">
            <!-- <div class="dropdown float-right">
                <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-orders-overview-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    This Week
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-orders-overview-drop">
                    <a class="dropdown-item active" href="javascript:void(0)">
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
            </div> -->
            Orders <small class="d-none d-sm-inline">Overview</small>
        </div>

        <!-- Chart.js Chart functionality is initialized in js/pages/be_pages_ecom_dashboard.min.js which was auto compiled from _es6/pages/be_pages_ecom_dashboard.js -->
        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
        <div class="row gutters-tiny">
            <!-- Orders Earnings Chart -->
            <div class="col-md-6">
                <div class="block block-rounded block-mode-loading-refresh">
                    <div class="block-header">
                        <h3 class="block-title">
                            Earnings
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-wrench"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full bg-body-light text-center">
                        <div class="row gutters-tiny">
                            <div class="col-4">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                                <div class="font-size-h3 font-w600">$9,587</div>
                            </div>
                            <div class="col-4">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Refunds</div>
                                <div class="font-size-h3 font-w600 text-success">$8,087</div>
                            </div>
                            <div class="col-4">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Expenses</div>
                                <div class="font-size-h3 font-w600 text-danger">$1,500</div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="pull-all">
                            <!-- Earnings Chart Container -->
                            <canvas class="js-chartjs-ecom-dashboard-earnings"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Orders Earnings Chart -->

            <!-- Orders Volume Chart -->
            <div class="col-md-6">
                <div class="block block-rounded block-mode-loading-refresh">
                    <div class="block-header">
                        <h3 class="block-title">
                            Volume
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-wrench"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full bg-body-light text-center">
                        <div class="row gutters-tiny">
                            <div class="col-4">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">All</div>
                                <div class="font-size-h3 font-w600">{{  $orders->count() }}</div>
                            </div>
                            <div class="col-4">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Completed</div>
                                <div class="font-size-h3 font-w600 text-success">{{ $completed }}</div>
                            </div>
                            <div class="col-4">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Canceled</div>
                                <div class="font-size-h3 font-w600 text-danger">{{ $cancelled }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="pull-all">
                            <!-- Orders Chart Container -->
                            <canvas class="js-chartjs-ecom-dashboard-orders"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Orders Volume Chart -->
        </div>
        <!-- END Orders Overview -->

        <!-- Latest Orders and Top Products -->
        <div class="row gutters-tiny">
            <!-- Latest Orders -->
            <div class="col-xl-6">
                <h2 class="content-heading">Latest Orders</h2>
                <div class="block block-rounded">
                    <div class="block-content">
                        <table class="table table-borderless table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 200px;">Date</th>
                                    <th>Status</th>
                                    <th class="d-none d-sm-table-cell">Customer</th>
                                    <th class="text-right">Value</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($orders->sortByDesc('created_at')->take(5) as $order)
                                <tr>
                                    <td>
                                        <a class="font-w600" href="#">{{ $order->created_at->toDayDateTimeString() }}</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-{{ $order->status->style }}">{{ $order->status->name }}</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="{{ route('admin.customers.show', $order->user->id) }}">{{ $order->user->name }}</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">&#8358;{{number_format(floatval($order->payment->amount ), 2) }}</span>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Latest Orders -->

            <!-- Top Products -->
            <div class="col-xl-6">
                <h2 class="content-heading">Top Sales</h2>
                <div class="block block-rounded">
                    <div class="block-content">
                        <table class="table table-borderless table-striped">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th class="text-center">Orders</th>
                                    <th class="d-none d-sm-table-cell text-center">Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($products->sortByDesc('orders_count')->take(5) as $product)
                                <tr>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="font-w600" href="#">{{ $product->name }} </a>
                                    </td>
                                    <td class="text-center">
                                        <a class="text-gray-dark" href="#"> {{ $product->orders_count }} orders</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <div class="text-warning">
                                            <ul class="rating">
                                                @for ($i = 0; $i < $product->rating; $i++)
                                                    <i class="fa fa-star"></i>
                                                @endfor
                                                @for ($i = 0; $i < 5 - $product->rating; $i++)
                                                    <i class="fa fa-star-o"></i>
                                                @endfor
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Top Products -->
        </div>
        <!-- END Latest Orders and Top Products -->
    </div>
    <!-- END Page Content -->
@endsection

@section('css_after')
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">

    <link rel="stylesheet" href="{{ asset('js/plugins/dropzonejs/dist/dropzone.css') }}">
@endsection

@section('js_after')
    <script src="{{ asset('js/pages/be_pages_ecom_dashboard.min.js') }}"></script>

    <script src="{{ asset('js/plugins/chartjs/Chart.bundle.min.js') }}"></script>
@endsection
