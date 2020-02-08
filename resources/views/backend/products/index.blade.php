@extends('backend.products.layout')

@section('product-content')
<!-- Page Content -->

<div class="content-heading">
    <div class="dropdown float-right">
        <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-products-filter-drop"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            All
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-products-filter-drop">
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-star text-warning mr-5"></i>Top Sellers
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-warning text-danger mr-5"></i>Out of Stock
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item active" href="javascript:void(0)">
                <i class="fa fa-fw fa-circle-o text-info mr-5"></i>All
            </a>
        </div>
    </div>
    <div class="dropdown float-right mr-5">
        <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-products-category-drop"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Category
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-products-category-drop">
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-gamepad mr-5"></i>Video Games
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-desktop mr-5"></i>Electronics
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-mobile-phone mr-5"></i>Mobile Phones
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-home mr-5"></i>House
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-soccer-ball-o mr-5"></i>Hobby
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-car mr-5"></i>Auto - Moto
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-users mr-5"></i>Kids
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-heartbeat mr-5"></i>Health
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-black-tie mr-5"></i>Fashion
            </a>
        </div>
    </div>
    Products ({{ $products->count()}})
</div>
<div class="block">

    <div class="block-content block-content-full">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="d-none d-md-table-cell">Image</th>
                        <th class="">Product</th>
                        <th class="d-none d-sm-table-cell">Specs</th>
                        <th class="d-none d-sm-table-cell">Status</th>
                        <th class="d-none d-sm-table-cell">Category</th>
                        <th class="d-none d-sm-table-cell">Brand</th>
                        <th class="">Qty</th>
                        <th class="">Price</th>
                        <th class="d-none d-sm-table-cell">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_products as $product)
                    <tr>
                        <td class="d-none d-md-table-cell">
                            <img src="{{isset($product->image1) ? Storage::url($product->image1) : asset('media/frontend_imgs/default.png') }}"
                                alt="{{ $product->name }}" width="55px;">
                        </td>

                        <td class="">
                            <a href="{{ route('admin.products.edit', $product)}}">{{ $product->name }}</a>
                        </td>

                        <td class="d-none d-md-table-cell">
                            {{ $product->width->name }}/{{ $product->tyreProfile->name }}/R{{ $product->rim->name }}
                        </td>
                        <td class="d-none d-sm-table-cell">
                            @if ($product->visibility)
                            <span class="badge badge-success">Enabled</span>
                            @else
                            <span class="badge badge-danger">Disabled</span>
                            @endif
                        </td>

                        <td class="d-none d-sm-table-cell">
                            <a href="#">{{ $product->category->name }}</a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <a href="#">{{ $product->brand->name }}</a>
                        </td>
                        <td class="">
                            {{ $product->quantity }}
                        </td>
                        <td class="text-right">
                            <span class="text-black">&#8358;{{number_format(floatval($product->amount), 2) }}</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <form action="{{ route('admin.products.destroy', $product) }}" method="POST">

                                @csrf
                                @method('DELETE')
                                <a href="{{ route('admin.products.edit', $product)}}" class="btn btn-sm btn-success"
                                    data-toggle="tooltip" title="edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                                
                                <button type="submit" class="btn btn-sm btn-danger" title="trash">
                                    <i class="fa fa-trash"></i>
                                </button>

                                <a href="{{ route('admin.products.toggleProduct', $product)}}"
                                    class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Disable/Enable">
                                    <i class="fa fa-eye"></i>
                                </a>

                            </form>



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
