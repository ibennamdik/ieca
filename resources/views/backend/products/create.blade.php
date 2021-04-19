@extends('backend.products.layout')

@section('product-content')


    <div class="">
        <!-- Overview -->
        <!-- END Overview -->

        <!-- Update Product -->
        <h2 class="content-heading">Add Product</h2>
        <div class="row gutters-tiny">
            <!-- Basic Info -->
            <div class="col-md-12">
                <form action="{{ route('admin.products.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="block block-rounded block-themed">
                        <div class="block-header bg-gd-primary">
                            <h3 class="block-title">Basic Info</h3>
                            <div class="block-options">
                                <button type="submit" class="btn btn-sm btn-alt-primary">
                                    <i class="fa fa-save mr-5"></i>Save
                                </button>
                            </div>
                        </div>
                        <div class="block-content block-content-full">

                            <div class="form-group row">
                                <label class="col-12" for="name">Name</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Product Name" value="{{ old('name') }}">
                                </div>
                                @if($errors->has('name'))
                                <small class="text-danger col-12">{{ $errors->first('name')}}</small>
                                @endif
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                <label for="category">Category</label>
                                <div>
                                    <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
                                    <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                    <select class="js-select2 form-control" id="category" name="category" style="width: 100%;" data-placeholder="Choose one..">
                                        <option value="*"></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        @foreach ($categories as $v)
                                        <option value="{{ $v->id }}" >{{ $v->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if($errors->has('category'))
                                <small class="text-danger col-12">{{ $errors->first('category')}}</small>
                                @endif
                                </div>
                                <div class="col-lg-6">
                                <label for="brand">Brand</label>
                                <div>
                                    <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
                                    <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                    <select class="js-select2 form-control" id="brand" name="brand" style="width: 100%;" data-placeholder="Choose one..">
                                        <option value="*"></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        @foreach ($brands as $v)
                                        <option value="{{ $v->id }}" >{{ $v->name }}</option>
                                        @endforeach

                                    </select>

                                </div>
                                @if($errors->has('brand'))
                                <small class="text-danger col-12">{{ $errors->first('brand')}}</small>
                                @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label for="rim">Rim</label>
                                    <div >
                                        <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
                                        <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                        <select class="js-select2 form-control" id="rim" name="rim" style="width: 100%;" data-placeholder="Choose one..">
                                            <option value="*"></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                            @foreach ($rims as $v)
                                            <option value="{{ $v->id }}" >{{ $v->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    @if($errors->has('rim'))
                                    <small class="text-danger col-12">{{ $errors->first('rim')}}</small>
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    <label for="profile">Profile</label>
                                    <div>
                                        <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
                                        <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                        <select class="js-select2 form-control" id="profile" name="profile" style="width: 100%;" data-placeholder="Choose one..">
                                            <option value="*"></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                            @foreach ($profiles as $v)
                                            <option value="{{ $v->id }}" >{{ $v->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if($errors->has('profile'))
                                    <small class="text-danger col-12">{{ $errors->first('profile')}}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label for="width">Width</label>
                                    <div>
                                        <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
                                        <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                        <select class="js-select2 form-control" id="width" name="width" style="width: 100%;" data-placeholder="Choose one..">
                                            <option value="*"></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                            @foreach ($widths as $v)
                                            <option value="{{ $v->id }}" >{{ $v->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if($errors->has('width'))
                                    <small class="text-danger col-12">{{ $errors->first('width')}}</small>
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    <label for="quantity">Quantity</label>
                                    <div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-fw fa-archive"></i>
                                                </span>
                                            </div>
                                            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="0" min="0" value="{{ old('quantity') }}">
                                        </div>
                                    </div>
                                    @if($errors->has('quantity'))
                                    <small class="text-danger col-12">{{ $errors->first('quantity')}}</small>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label for="width">Price</label>
                                    <div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                        &#8358;
                                                </span>
                                            </div>
                                            <input type="number" class="form-control" id="price" name="price" placeholder="Price in NGN.." min="0" step="0.00" value="{{ old('price') }}">
                                        </div>
                                    </div>
                                    @if($errors->has('price'))
                                    <small class="text-danger col-12">{{ $errors->first('price')}}</small>
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    <label for="quantity">Image</label>
                                    <div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-fw fa-image"></i>
                                                </span>
                                            </div>
                                            <input type="file" class="form-control" id="image1" name="image1" placeholder="Product Image">
                                        </div>
                                    </div>
                                    @if($errors->has('image1'))
                                <small class="text-danger col-12">{{ $errors->first('image1')}}</small>
                                @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12" for="description">Short Description</label>
                                <div class="col-12">
                                    <textarea class="form-control" id="description" name="description" placeholder="Description visible on preview.." rows="6" maxlength="225">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <div class="col-lg-6">

                                </div>
                                <div class="col-lg-6">
                                    <label for="price">Price</label>
                                <div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-fw fa-usd"></i>
                                            </span>
                                        </div>
                                        <input type="number" class="form-control" id="price" name="price" placeholder="Price in NGN.." min="0" step="0.00" value="{{ old('price') }}">
                                    </div>
                                </div>
                                @if($errors->has('price'))
                                <small class="text-danger col-12">{{ $errors->first('price')}}</small>
                                @endif
                                </div>



                            </div>

                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label for="name">Image 1</label>
                                <div>
                                    <input type="file" class="form-control" id="image1" name="image1" placeholder="Product Image">
                                </div>
                                @if($errors->has('image1'))
                                <small class="text-danger col-12">{{ $errors->first('image1')}}</small>
                                @endif
                                </div>
                                <div class="col-lg-6">
                                    <label for="name">Image 2</label>
                                    <div>
                                        <input type="file" class="form-control" id="image2" name="image2" placeholder="Product Image">
                                    </div>
                                    @if($errors->has('image2'))
                                    <small class="text-danger col-12">{{ $errors->first('image2')}}</small>
                                    @endif
                                 </div>
                            </div> -->
                        </div>
                    </div>
                </form>
            </div>
            <!-- END More Options -->
        </div>
        <!-- END Update Product -->
    </div>
    <!-- END Page Content -->
@endsection
