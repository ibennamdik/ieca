@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="bg-image" style="background-image: url('{{ asset('media/photos/photo26@2x.jpg') }}');">
        <div class="bg-black-op-75">
            <div class="content content-top content-full text-center">
                <div class="py-20">
                    <h1 class="h2 font-w700 text-white mb-10">Posts</h1>
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
                <span class="breadcrumb-item active">Posts</span>
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
            <!-- Published -->
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-transparent bg-gd-sun" href="javascript:void(0)">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-spinner fa-spin text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="{{ $posts->count() }}">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Published</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Published -->

            <!-- Unpublished -->
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-transparent bg-gd-lake" href="javascript:void(0)">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-check text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="0">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Unpublished</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Unpublished -->

            <!-- Trashed -->
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-transparent bg-gd-dusk" href="javascript:void(0)">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-archive text-white-op"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="0">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Trashed</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Trashed -->

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
                            <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="{{ $posts->count() }}">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">All</div>
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
                <a class="block block-rounded block-link-shadow" href="{{ route('admin.posts.post-categories.index')}}">
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
                            <div class="font-size-sm font-w600 text-uppercase text-muted">New Post Category</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Add Category -->

            <!-- Add Post -->
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-shadow" href="{{ route('admin.posts.create')}}">
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
                            <div class="font-size-sm font-w600 text-uppercase text-muted">New Post</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Add Post -->

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

            <!-- Add Button -->
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
            <!-- END Add Button -->
        </div>
        <!-- END Actions -->

        <!-- Orders -->
        <div class="">
            @yield('post-content')
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
