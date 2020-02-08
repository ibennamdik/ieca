@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="bg-image" style="background-image: url('{{ asset('media/photos/photo26@2x.jpg') }}');">
        <div class="bg-black-op-75">
            <div class="content content-top content-full text-center">
                <div class="py-20">
                    <h1 class="h2 font-w700 text-white mb-10">Products</h1>
                    <h2 class="h4 font-w400 text-white-op mb-0">...</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-body-light border-b">
        <div class="content py-5 text-center">
            <nav class="breadcrumb bg-body-light mb-0">
                <a class="breadcrumb-item" href="{{ route('admin.home')}}">{{ $settings->appname }}</a>
                <span class="breadcrumb-item active">Products</span>
            </nav>
        </div>
    </div>

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
            Overview <small class="d-none d-sm-inline">!</small>
        </div>
        <div class="row gutters-tiny">
            <!-- Deactivated -->
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-transparent bg-gd-sun" href="javascript:void(0)">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-spinner fa-spin text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="12">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Deactivated</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Deactivated -->

            <!-- Top -->
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-transparent bg-gd-lake" href="javascript:void(0)">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-check text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="21">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Top Sellers</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Top -->

            <!-- Out -->
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-transparent bg-gd-dusk" href="javascript:void(0)">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-archive text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="{{ $products->where('quantity', 0)->count() }}">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Out of Stock</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Out -->

            <!-- END All -->
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-transparent bg-gd-sea" href="javascript:void(0)">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-archive text-info-light"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="{{ $products->count() }}">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">All Products</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END All -->

        </div>
        <!-- END Overview -->

        <!-- Actions -->
        <h2 class="content-heading">Actions</h2>
        <div class="row gutters-tiny">
            <!-- Add Category -->
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-shadow" href="{{ route('admin.products.product-categories.index')}}">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-archive fa-2x text-info-light"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-info">

                                <i class="fa fa-heart-o"></i>
                            </div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Category</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Add Category -->

            <!-- Add Brand -->
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-shadow" href="{{ route('admin.products.brands.index')}}">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-archive fa-2x text-warning-light"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-warning">

                                <i class="fa fa-list-alt "></i>
                            </div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Brands</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Add Brand -->

            <!-- Add Button -->
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-shadow" href="{{ route('admin.products.index')}}">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-archive fa-2x text-danger-light"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 danger-light">

                                <i class="fa fa-barcode"></i>
                            </div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">All Products</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Add Button -->

            <!-- Add Product -->
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-shadow" href="{{ route('admin.products.create')}}">
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
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Add Products</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Add Product -->
        </div>
        <!-- END Actions -->

        <!-- Products -->
        <div class="">
            @yield('product-content')
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
