@extends('layouts.simple')

@section('content')

<div id="wrap-body" class="p-t-lg-30">
    <div class="container">
        <div class="wrap-body-inner">
            <!-- Breadcrumb-->
            <div class="hidden-xs">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="ht-breadcrumb pull-left">
                            <li class="home-act"><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="home-act"><a href="#">Product</a></li>
                            <li class="active">Tyres & Wheels</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Product grid -->
            <section class="m-t-lg-30 m-t-xs-0">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="product product-grid">
                            <div class="heading heading-2 m-b-lg-0">
                                <h3 class="p-l-lg-20">Tyres & Wheels</h3>
                            </div>
                            <!-- Product filter -->
                            <div class="product-filter p-t-xs-20 p-l-xs-20">
                                <div class="m-b-xs-10 pull-left">
                                    <a href="{{ route('product-grid')}}" class="active "><i class="fa fa-th"></i></a>
                                    {{-- <i href="{{ route('product-list')}}"><i class="fa fa-th-list"></i></i> --}}
                                </div>
                                <div class="pull-right">
                                    <div class="m-b-xs-10 m-r-lg-20 pull-left">
                                        <div class="select-wrapper">
                                            <label><i class="fa fa-sort-alpha-asc"></i>Filter : </label>
                                            <div class="dropdown pull-left">
                                                <button class="dropdown-toggle form-item w-130" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true">
                                                    Latest
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                    <li>Offer</li>
                                                    <li>Best Seller</li>
                                                    <li>Featured</li>
                                                    <li>Latest</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pull-left">
                                        <div class="select-wrapper">
                                            <label><i class="fa fa-sort-alpha-asc"></i>Show : </label>
                                            <div class="dropdown pull-left">
                                                <button class="dropdown-toggle form-item w-80" type="button"
                                                    id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true">
                                                    6
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li>6</li>
                                                    <li>12</li>
                                                    <li>24</li>
                                                    <li>All</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Tab panes item -->
                                <div role="tabpanel" class="tab-pane active" id="newcar">
                                    <div class="search-option p-lg-30 p-b-lg-15 p-b-sm-30 p-xs-15">
                                        <div class="row">
                                            <form action="{{ route('search') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="col-sm-12 col-md-7 col-lg-7">
                                                    <div class="row">
                                                        <div
                                                            class="col-sm-4 col-md-4 col-lg-4 m-b-lg-15 p-r-lg-0 p-r-xs-15">
                                                            <div class="">
                                                                <div class="dropdown">
                                                                    <select class="form-item" name="width">
                                                                        <option class="text-primary" value="">Width
                                                                        </option>
                                                                        @foreach ($widths as $v)
                                                                        <option class="text-primary"
                                                                            value="{{ $v->id }}">{{ $v->name }}</option>
                                                                        @endforeach

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-sm-4 col-md-4 col-lg-4 m-b-lg-15 p-r-lg-0 p-r-xs-15">
                                                            <div class="">
                                                                <div class="dropdown">
                                                                    <select class="form-item" name="profile">
                                                                        <option class="text-primary" value="">Profile
                                                                        </option>
                                                                        @foreach ($profiles as $v)
                                                                        <option class="text-primary"
                                                                            value="{{ $v->id }}">{{ $v->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-sm-4 col-md-4 col-lg-4 m-b-lg-15 p-r-lg-0 p-r-xs-15">
                                                            <div class="">
                                                                <div class="dropdown">
                                                                    <select class="form-item" name="rim">
                                                                        <option class="text-danger" value="">Rim
                                                                        </option>
                                                                        @foreach ($rims as $v)
                                                                        <option class="text-primary"
                                                                            value="{{ $v->id }}">{{ $v->name }}</option>
                                                                        @endforeach

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-md-2 col-lg-3 pull-left pull-left-xs">
                                                    <button class="btn btn-primary p-t-5" type="submit">Submit Search</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>&nbsp;</div>
                            @if(session('details'))
                            <div class="product product-grid product-grid-2 car m-b-lg-20">
                                <div class="heading">
                                    <h3>SEARCH RESULTS</h3>
                                </div>
                                <div class="row">
                                    @foreach (session('details') as $item)
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <!-- Product item -->
                                        <div class="product-item hover-img">
                                            <a href="{{ route('product.details', $item->id) }}" class="product-img">
                                                <img src="{{isset($item->image1) ? Storage::url($item->image1) : asset('media/frontend_imgs/default.png') }}"
                                                    alt="{{ $item->name }}">
                                            </a>
                                            <div class="product-caption">
                                                <h4 class="product-name">
                                                    <a href="#">{{$item->name}} <b>NEW</b><ul class="rating">
                                                        @for ($i = 0; $i < $item->rating; $i++)
                                                            <li class="active"><i class="fa fa-star"></i></li>
                                                            @endfor
                                                            @if ($item->rating != 5)

                                                            @for ($i = 0; $i < 5 - $item->rating; $i++)
                                                                <li><i class="fa fa-star"></i></li>
                                                                @endfor

                                                                @endif
                                                    </ul></a><span class="f-10">
                                                        &#8358;{{number_format(floatval($item->amount), 2) }}</span>
                                                </h4>
                                                <a href="{{ route('product.details', $item->id) }}"
                                                    class="ht-btn ht-btn-default">Buy
                                                    Now</a>
                                            </div>
                                            <ul class="absolute-caption">
                                                <li><i class="fa fa-clock-o"></i>{{ $item->tyreProfile->name }}</li>
                                                <li><i class="fa fa-car"></i>{{ $item->width->name }}</li>
                                                <li><i class="fa fa-road"></i>{{ $item->rim->name }}</li>

                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @else
                            <div class="product product-grid product-grid-2 car m-b-lg-20">
                                <div class="heading">
                                    <h3>TYRES</h3>
                                </div>
                            <div class="row">
                                @foreach ($items as $item)
                                <div class="col-sm-6 col-md-4 col-lg-4">
                                    <!-- Product item -->
                                    <div class="product-item hover-img">
                                        <a href="{{ route('product.details', $item->id) }}" class="product-img">
                                            <img src="{{isset($item->image1) ? Storage::url($item->image1) : asset('media/frontend_imgs/default.png') }}"
                                                alt="{{ $item->name }}">
                                        </a>
                                        <div class="product-caption">
                                            <h4 class="product-name">
                                                <a href="#">{{$item->name}} <b>NEW</b><ul class="rating">
                                                    @for ($i = 0; $i < $item->rating; $i++)
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        @endfor
                                                        @if ($item->rating != 5)

                                                        @for ($i = 0; $i < 5 - $item->rating; $i++)
                                                            <li><i class="fa fa-star"></i></li>
                                                            @endfor

                                                            @endif
                                                </ul></a><span class="f-10">
                                                    &#8358;{{number_format(floatval($item->amount), 2) }}</span>
                                            </h4>
                                            <a href="{{ route('product.details', $item->id) }}"
                                                class="ht-btn ht-btn-default">Buy
                                                Now</a>
                                        </div>
                                        <ul class="absolute-caption">
                                            <li><i class="fa fa-clock-o"></i>{{ $item->tyreProfile->name }}</li>
                                            <li><i class="fa fa-car"></i>{{ $item->width->name }}</li>
                                            <li><i class="fa fa-road"></i>{{ $item->rim->name }}</li>

                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            </div>
                            <nav aria-label="Page navigation">
                                {{ $items->links() }}
                            </nav>

                            @endif

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection
