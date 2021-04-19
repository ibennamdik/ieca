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
                            <li class="home-act"><a href="#">My Cart</a></li>
                            <li class="active">Items</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Product cart -->
            <section class="block-cart m-b-lg-50 m-t-lg-30 m-t-xs-0">
                <div>
                    <div class="heading">
                        <h3>Cart</h3>
                    </div>
                    <div class="display-inline-block width-100">
                        <!-- Cart item -->
                        @foreach ($items->getContent() as $item)
                        <div class="row m-lg-0 overl bor-r">
                            <div class="col-sm-4 col-md-4 col-lg-4 cart-item">
                                <div class="row">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        <a href="#" class="cart-img-prev">
                                            <img src="{{isset($products->find($item->id)->image1) ? Storage::url($products->find($item->id)->image1) : asset('media/frontend_imgs/default.png') }}" alt="image">
                                        </a>
                                    </div>
                                    <div class="col-sm-8 col-md-8 col-lg-8 p-lg-0">
                                        <div class="product-name">
                                            <h5><a href="#">{{ $item->name }}</a></h5>
                                            <span
                                                class="price">&#8358;{{number_format(floatval($item->price), 2) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 col-md-2 col-lg-2 cart-item">

                                @if ($all_products->find($item->id)->quantity > 0)
                                <p class="color-green">
                                    Instock
                                </p>
                                @else
                                <p class="color-red">
                                    Out of Stock
                                </p>
                                @endif

                            </div>
                            <div class="col-sm-2 col-md-2 col-lg-2 cart-item">

                                <p>
                                    <strong>Qty: </strong>
                                    {{ $item->quantity  }} pcs
                                </p>

                            </div>

                            {{-- <div class="col-sm-2 col-md-2 col-lg-2 cart-item">
                                            <form id="qty-form-{{$item->id}}"
                            action="{{ route('cart.update', $item->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <input type="text" class="form-item form-qtl" value="{{ $item->quantity }}"
                                name="{{$item->id}}">
                            </form>
                        </div> --}}
                        <div class="col-sm-2 col-md-2 col-lg-2 cart-item">
                            <p><strong>&#8358;{{number_format(floatval($item->getPriceSum()), 2) }}</strong></p>
                        </div>

                        <div class="col-sm-2 col-md-2 col-lg-2 cart-item">
                            <a href="{{ route('cart.remove', $item->id) }}">
                                <i class="fa fa-trash cart-remove-btn" title="Remove Item"></i>
                            </a>
                            {{-- <a href="{{ route('cart.update', $item->id) }}" onclick="event.preventDefault();
                            document.getElementById('qty-form-{{$item->id}}').submit();">
                            <i class="fa fa-plus cart-remove-btn"></i>
                            </a> --}}
                        </div>
                    </div>

                    @endforeach

                    <!-- Cart item -->

                    <div class="clearfix"></div>
                    <!-- Total -->
                    <div class="cart-total">Total :
                        <strong>&#8358;{{number_format(floatval($items->getTotal()), 2) }}</strong></div>
                    <div class="clearfix"></div>
                    <a href="{{ route('cart.checkout') }}" class="ht-btn ht-btn-default pull-right">Proceed to check
                        out</a>
                </div>
        </div>
        </section>
    </div>
</div>
</div>
@endsection
