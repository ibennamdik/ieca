@extends('backend.products.layout')

@section('product-content')


<h2 class="content-heading">Product Categories</h2>

<form action="{{ route('admin.products.product-categories.store') }}" method="POST" >

        @csrf
        <div class="form-group row">
            <label class="col-12" for="name">Name</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
            </div>
            <div class="col-lg-2">
                <button type="submit" class="btn btn-primary col">Add</button>
            </div>
        </div>
    </form>
        <div class="block">
            <div class="block-content block-content-full">
                <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th >Name</th>
                            <th style="width: 100px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($values as $product_category)

                            <tr>
                                <td class="d-none d-sm-table-cell">
                                    <a href="be_pages_ecom_customer.html">{{ $product_category->name }}</a>
                                </td>
                                <td >
                                        <form action="{{ route('admin.products.product-categories.destroy', $product_category) }}" method="POST">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-sm btn-danger" title="trash">
                                                    <i class="fa fa-trash"></i>
                                                </button>

                                            </form>
                                </td>
                            </tr>

                            @endforeach
                    </tbody>
                </table>
                </div>

            </div>
        </div>


    @endsection

