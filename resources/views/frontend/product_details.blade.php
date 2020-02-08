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
                            <li class="home-act"><a href="#">Tyres & Wheels</a></li>
                            <li class="active">{{ $product->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Product details -->
            <section class="m-t-lg-30 m-t-xs-0">
                <div class="row">
                    <div class="col-sm-8 col-md-9 col-lg-9">
                        <div class="product-list product_detail p-lg-30 p-xs-15 bg-gray-fa bg1-gray-15 m-b-lg-50">
                            <div class="row">
                                <!-- Image Large -->
                                <div class="image-zoom col-md-6 col-lg-6">
                                    <div class="product-img-lg p-lg-10 m-b-xs-30 text-center">
                                        <a
                                            href="{{isset($product->image1) ? Storage::url($product->image1) : asset('media/frontend_imgs/default.png') }}">
                                            <img src="{{isset($product->image1) ? Storage::url($product->image1) : asset('media/frontend_imgs/default.png') }}"
                                                alt="{{ $product->name }}">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <!-- Product description -->
                                    <h3 class="product-name">{{ $product->name }}</h3>
                                    <div class="product_para">
                                        <ul class="rating pull-left m-r-lg-20">
                                            @for ($i = 0; $i < $product->rating; $i++)
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                @endfor
                                                @if ($product->rating != 5)

                                                @for ($i = 0; $i < 5 - $product->rating; $i++)
                                                    <li><i class="fa fa-star"></i></li>
                                                    @endfor

                                                    @endif
                                        </ul>

                                        <a href="#" class="review-link m-r-lg-10"><i class="fa fa-pencil m-r-lg-5"></i>6
                                            Review </a>
                                        <a href="#" class="review-link m-r-lg-10"><i
                                                class="fa fa-pencil m-r-lg-5"></i>Write a review</a>
                                        <p class="price p-t-lg-20 p-b-lg-10 f-30 f-bold color-red">
                                            &#8358;{{ number_format(floatval($product->amount), 2) }}</p>
                                        <!-- <p class="price-old f-20 color1-5">&#8358;{{ number_format(floatval($product->amount), 2)  }}</p> -->
                                        <hr />
                                        <p><b>Brand :</b>{{ $product->brand->name }}</p>
                                        <!-- <p><b>Product Id :</b>{{ $product->id }}</p> -->
                                        <!-- <p><b>Manufactor :</b>Unknown </p> -->
                                        <!-- <p><b>Color :</b>Regular </p> -->
                                        <p><b>Availability :</b>@if($product->quantity > 0)<strong
                                                class="color-green color1-green">Instock</strong> @else <strong
                                                class="color-red color1-red"> Out of Stock </strong>@endif </p>
                                        <hr />
                                        <form method="POST"
                                            action="{{ route('cart.addQty', ['product' => $product]) }}">
                                            @csrf

                                            <div class="pull-left"><b class="m-r-lg-5">Qty : </b><input type="tel"
                                                    min="0" class="form-item input-qtl" placeholder="0" name="quantity"
                                                    required>
                                            </div>
                                            {{-- <input type="hidden" name="type" value="add"> --}}
                                            <button class="ht-btn ht-btn-default" value="add" name="type">Add to
                                                cart</button>
                                            <button class="ht-btn ht-btn-default" value="buy" name="type">Buy
                                                Now</button>
                                            {{-- <a href="{{ route('cart.buy', ['product' => $product]) }}"
                                            class="ht-btn ht-btn-default">Buy Now</a> --}}
                                            <!-- <a href="#" class="ht-btn bg-gray-c bg1-gray-4"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" class="ht-btn bg-gray-c bg1-gray-4"><i class="fa fa-signal"></i></a> -->

                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product description tabs -->
                        <div class="product-description m-b-lg-50">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs ht-tabs text-left p-l-lg-30" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                        data-toggle="tab">Description</a></li>
                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab"
                                        data-toggle="tab">Review (0)</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content bg-gray-fa bg1-gray-15 p-lg-30 p-xs-15">
                                <!-- Tab panes item -->
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="txt">
                                        <p>{{ $product->description }}</p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">..2.</div>
                                <div role="tabpanel" class="tab-pane" id="messages">No Reviews Available</div>
                                <div role="tabpanel" class="tab-pane" id="settings">.4..</div>
                            </div>
                        </div>
                        <!-- Product realted -->
                        <div class="product product-grid car m-b-lg-15">
                            <div class="heading">
                                <h3>RELATED PRODUCTS</h3>
                            </div>
                            <div class="row">
                                @foreach ($related as $item)
                                <div class="col-sm-6 col-md-4 col-lg-4">
                                    <!-- Product item -->
                                    <div class="product-item hover-img">
                                        <a href="#" class="product-img">
                                            <img src="{{isset($item->image1) ? Storage::url($item->image1) : asset('media/frontend_imgs/default.png') }}"
                                                alt="{{ $item->name }}">
                                        </a>
                                        <div class="product-caption">
                                            <h4 class="product-name"><a href="#">{{ $item->name }}</a></h4>
                                            <ul class="rating">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <div class="product-price-group">
                                                <span class="product-price">&#8358;{{ $item->amount }}</span>
                                            </div>
                                            <a href="{{ route('cart.add', ['product' => $item]) }}"
                                                class="ht-btn ht-btn-default">Add to cart</a>
                                            <ul class="absolute-caption">
                                                <li><i class="fa fa-heart-o"></i></li>
                                                <li><i class="fa fa-signal"></i></li>
                                                <li><i class="fa fa-search"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-3 col-lg-3">
                        <!-- Caterory -->
                        <div class="category  m-b-lg-50">
                            <div class="heading">
                                <h3 class="p-l-lg-20" data-toggle="collapse" data-target="#collapseExample"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fa fa-bars"></i>Category
                                </h3>
                            </div>
                            <ul class="collapse in" id="collapseExample">
                                @foreach ($categories as $category)

                                <li class="@if(Route::is('home')) active @endif"><a href="#">{{ $category->name }}<i
                                            class="fa fa-chevron-right pull-right"></i></a></li>

                                @endforeach

                            </ul>
                        </div>
                        <!-- Banner -->
                        <div class="banner-item banner-bg-4 banner-1x color-inher">
                            <h5>Book for a car check up</h5>
                            <h3 class="f-weight-300"><strong>AUTO</strong> Mechanic</h3>
                            <p>Oil Change, Exhaust & Mufflers, Transmission repair, motor repair. <br>We offer
                                competence and outstanding quality at fair prices.</p>
                            <a href="#" class="ht-btn ht-btn-default">Shop now</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection
