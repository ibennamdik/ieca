@extends('layouts.backend')

@section('content')
<!-- Page Content -->
<div class="bg-image" style="background-image: url('{{ asset('media/photos/photo26@2x.jpg') }}');">
    <div class="bg-black-op-75">
        <div class="content content-top content-full text-center">
            <div class="py-20">
                <h1 class="h2 font-w700 text-white mb-10">Orders</h1>
                <h2 class="h4 font-w400 text-white-op mb-0">An order from a customer is a demand placed on our
                    integrity, we cant let them down!</h2>
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
            <span class="breadcrumb-item active">Logs</span>
        </nav>
    </div>
</div>
<!-- END Breadcrumb -->

<!-- Page Content -->
<div class="content">
    <!-- Overview -->
    <!-- CountTo ([data-toggle="countTo"] is initialized in Helpers.coreAppearCountTo()) -->
    <!-- For more info and examples you can check out https://github.com/mhuggins/jquery-countTo -->
    {{-- <div class="content-heading">
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
    </div> --}}
    {{-- <div class="row gutters-tiny">
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
    </div> --}}
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
        Logs ({{ $logs->count() }})
    </div>
    <div class="block">

        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table class="table table-bordered  table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="d-none d-sm-table-cell">ID</th>
                            <th class="d-none d-sm-table-cell">Description</th>
                            <th class="d-none d-sm-table-cell">Date</th>
                            <th class="d-none d-sm-table-cell"></th>
                            <th class="d-none d-sm-table-cell"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($logs as $log)
                        <tr>
                            <td>
                                <a class="font-w600" href="#">{{ $log->id }}</a>
                            </td>

                            <td class="d-none d-sm-table-cell">
                                {{ $log->description }} 
                            </td>

                            <td class="d-none d-sm-table-cell">
                                {{ $log->created_at->toDayDateTimeString() }}
                            </td>

                            <td class="d-none d-sm-table-cell">

                            </td>
                            <td class="d-none d-sm-table-cell">

                            </td>


                        </tr>

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
