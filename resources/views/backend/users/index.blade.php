@extends('layouts.backend')

@section('content')

<div class="bg-image" style="background-image: url('{{ asset('media/photos/photo26@2x.jpg') }}');">
    <div class="bg-black-op-75">
        <div class="content content-top content-full text-center">
            <div class="py-20">
                <h1 class="h2 font-w700 text-white mb-10">Customers</h1>
                <h2 class="h4 font-w400 text-white-op mb-0">...</h2>
            </div>
        </div>
    </div>
</div>

<div class="bg-body-light border-b">
    <div class="content py-5 text-center">
        <nav class="breadcrumb bg-body-light mb-0">
            <a class="breadcrumb-item" href="{{ route('admin.home')}}">{{ $settings->appname }}</a>
            <span class="breadcrumb-item active">Customers</span>
        </nav>
    </div>
</div>
    <!-- Page Content -->
    <div class="content">

        <!-- Overview -->
        <!-- CountTo ([data-toggle="countTo"] is initialized in Helpers.coreAppearCountTo()) -->
        <!-- For more info and examples you can check out https://github.com/mhuggins/jquery-countTo -->
        <div class="content-heading">
            <div class="dropdown float-right">
                <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-orders-stats-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <!-- Active -->
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-transparent bg-gd-sun" href="javascript:void(0)">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-spinner fa-spin text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="{{ $customers->where('profile.status_id', 7)->count() }}">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">New</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Active -->

            <!-- Inactive -->
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-transparent bg-gd-lake" href="javascript:void(0)">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-check text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="{{ $customers->where('profile.status_id', 9)->count() }}">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Premium</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Inactive -->

            <!-- Deleted -->
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-transparent bg-gd-dusk" href="javascript:void(0)">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-archive text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="{{ $customers->where('profile.status_id', 8)->count() }}">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Gold</div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- END Deleted -->

            <!-- All -->
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-transparent bg-gd-sea" href="javascript:void(0)">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-archive text-info-light"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="{{ $customers->count() }}">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">All</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END All -->

        </div>
        <!-- END Overview -->

        <h2 class="content-heading">Customers</h2>
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Dynamic Table <small>Full</small></h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <div class="table-responsive">
                     <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center"></th>
                            <th>Name</th>
                            <th class="d-none d-sm-table-cell">Email</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Phone Number</th>
                            <th class="text-center" style="width: 15%;">Profile</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                        <tr>
                            <td class="text-center"></td>
                            <td class="font-w600">{{ $customer->name }}</td>
                        <td class="d-none d-sm-table-cell">{{ $customer->email }}</td>
                            <td class="d-none d-sm-table-cell">
                                {{ $customer->profile->phone_number }}
                            </td>
                            <td class="text-center">
                                <a href="{{ route('admin.customers.show', $customer)}}" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                    <i class="fa fa-user"></i>
                                </a>
                            </td>
                        </tr>
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
