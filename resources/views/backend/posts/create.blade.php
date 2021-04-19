@extends('backend.posts.layout')

@section('post-content')
    <!-- Page Content -->
    {{-- <div class="bg-image" style="background-image: url('{{ asset('media/photos//photo26@2x.jpg') }}');">
        <div class="bg-black-op-75">
            <div class="content content-top content-full text-center">
                <div class="py-20">
                    <h1 class="h2 font-w700 text-white mb-10">Create A Post</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-body-light border-b">
        <div class="content py-5 text-center">
            <nav class="breadcrumb bg-body-light mb-0">
                <a class="breadcrumb-item" href="{{ route('admin.home')}}">{{ $settings->appname }}</a>
                <a class="breadcrumb-item" href="{{route('admin.posts.index')}}">Post</a>
                <span class="breadcrumb-item active">Create Post</span>
            </nav>
        </div>
    </div> --}}

    <div class="">
        <!-- Overview -->
        <!-- END Overview -->

        <!-- Update Product -->
        <h2 class="content-heading">Create Post</h2>
        <div class="row gutters-tiny">
            <!-- Basic Info -->
            <div class="col-md-12">
                <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="block block-rounded block-themed">
                        <div class="block-header bg-gd-primary">
                            <h3 class="block-title">Post Details</h3>
                            <div class="block-options">
                                <button type="submit" class="btn btn-sm btn-alt-primary">
                                    <i class="fa fa-save mr-5"></i>Save
                                </button>
                            </div>
                        </div>
                        <div class="block-content block-content-full">

                            <div class="form-group row">
                                <label class="col-12" for="title">Title</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Post Title" max="35" value="{{ old('title') }}">
                                </div>
                                @if($errors->has('title'))
                                <small class="text-danger col-12">{{ $errors->first('title')}}</small>
                                @endif
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="category">Category</label>
                                    <div>
                                        <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
                                        <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                        <select class="js-select2 form-control" id="category" name="category" style="width: 100%;" data-placeholder="Choose one..">
                                            <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                            @foreach ($categories as $v)
                                            <option value="{{ $v->id }}" >{{ $v->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if($errors->has('category'))
                                    <small class="text-danger col-12">{{ $errors->first('category')}}</small>
                                    @endif
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-12" for="body">Body</label>
                                <div class="col-12">
                                    <textarea class="form-control" id="summernote" name="body" placeholder="Post Body" rows="" maxlength="">{{ old('body') }}</textarea>
                                </div>
                                <script>
                                    $('#summernote').summernote({
                                        placeholder: 'Hello stand alone ui',
                                        tabsize: 2,
                                        height: 400
                                    });
                                </script>
                            </div>

                             <div class="form-group row">
                                <div class="col-lg-6">
                                    <label for="name">Featured Image</label>
                                <div>
                                    <input type="file" class="form-control" id="image1" name="image1" placeholder="Product Image">
                                </div>
                                @if($errors->has('image1'))
                                <small class="text-danger col-12">{{ $errors->first('image1')}}</small>
                                @endif
                                </div>
                                <div class="col-lg-6">
                                    <label for="name">Author</label>
                                <div>
                                <input type="text" class="form-control" id="author" name="author" placeholder="Post author" value="{{ old('author') }}">
                                </div>
                                @if($errors->has('author'))
                                <small class="text-danger col-12">{{ $errors->first('author')}}</small>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Basic Info -->

            <!-- More Options -->
            {{-- <div class="col-md-5">
                <!-- Status -->
                <form action="be_pages_ecom_product_edit.html" method="post" onsubmit="return false;">
                    <div class="block block-rounded block-themed">
                        <div class="block-header bg-gd-primary">
                            <h3 class="block-title">Status</h3>
                            <div class="block-options">
                                <button type="submit" class="btn btn-sm btn-alt-primary">
                                    <i class="fa fa-save mr-5"></i>Save
                                </button>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="form-group row">
                                <label class="col-12">Condition</label>
                                <div class="col-12">
                                    <label class="css-control css-control-primary css-radio">
                                        <input type="radio" class="css-control-input" id="ecom-product-condition-new" name="ecom-product-condition" checked>
                                        <span class="css-control-indicator"></span> New
                                    </label>
                                    <label class="css-control css-control-secondary css-radio">
                                        <input type="radio" class="css-control-input" id="ecom-product-condition-old" name="ecom-product-condition">
                                        <span class="css-control-indicator"></span> Old
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
                <!-- END Status -->


                <!-- Images -->
                <form action="be_pages_ecom_product_edit.html" method="post" onsubmit="return false;">
                <div class="block block-rounded block-themed">
                    <div class="block-header bg-gd-primary">
                        <h3 class="block-title">Images</h3>
                        <div class="block-options">
                            <button type="submit" class="btn btn-sm btn-alt-primary">
                                <i class="fa fa-save mr-5"></i>Save
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <!-- Existing Images -->
                        <div class="row gutters-tiny items-push">
                            <div class="col-sm-6 col-xl-4">
                                <div class="options-container">
                                    <img class="img-fluid options-item" src="assets/media/photos/photo8.jpg" alt="">
                                    <div class="options-overlay bg-black-op-75">
                                        <div class="options-overlay-content">
                                            <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                                                <i class="fa fa-times"></i> Remove
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="options-container">
                                    <img class="img-fluid options-item" src="assets/media/photos/photo18.jpg" alt="">
                                    <div class="options-overlay bg-black-op-75">
                                        <div class="options-overlay-content">
                                            <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                                                <i class="fa fa-times"></i> Remove
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Existing Images -->

                        <!-- DropzoneJS Container -->
                        <!-- For more info and examples you can check out http://www.dropzonejs.com/#usage -->
                        <form class="dropzone" action="be_pages_ecom_product_edit.html"></form>
                    </div>
                </div>
                </form>
                <!-- END Images -->
            </div> --}}
            <!-- END More Options -->
        </div>
        <!-- END Update Product -->
    </div>
    <!-- END Page Content -->
@endsection
