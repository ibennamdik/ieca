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
                            <li class="active">Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Product checkout -->
            <section class="m-b-lg-50 m-t-lg-30 m-t-xs-0">
                <div>
                    <div class="heading">
                        <h3>Checkout</h3>
                    </div>
                    @if(!$method)
                    <div class="">
                        <div class="text-center p-3 mb-15 h3">
                            Select a prefered delivery method
                        </div>

                        @foreach ($deliveryMethods->chunk(3) as $deliveryMethod)
                        <div class="row">
                            @foreach ($deliveryMethod as $method)
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <a href="{{ route('cart.deliveryMethod', $method) }}">
                                    <div class="th-bar-item">
                                        <img width="100%" src="{{isset($method->image) ? Storage::url($method->image) : asset('media/frontend_imgs/default.png') }}"
                                            alt="{{ $method->name }}"><br>
                                            <i class="fa fa-car"></i><span class="text-right"> {{ $method->name }}
                                            &#8358;{{ number_format(floatval($method->cost), 2) }}
                                            </i>
                                            <hr width="100%">
                                            <span>{{ $method->description }}</span>
                                    </div>
                                </a>

                            </div>
                            @endforeach
                        </div>
                        <div>&nbsp;</div>
                        @endforeach

                    </div>
                    
                    <div class="row">
                        @else
                        
                        <div class="col-sm-8 col-md-8 col-lg-8">
                            <div class="panel-group bg-gray-fa bg1-gray-15 p-lg-30 p-xs-15" id="accordion"
                                role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div id="collapse1" class="panel" role="tabpanel" aria-labelledby="heading1">
                                        <hr>
                                        
                                        @if(auth()->user()->profile_update_status == 1)
                                            <!--if profile address is updated -->
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapse1" aria-expanded="true"
                                                    aria-controls="collapse1">Delivery Address</a>
                                            </h4>
                                            <div class="panel-body">
                                                <div class="block block-rounded">
                                                    <div class="block-content">
                                                        <div class="font-size-lg text-black mb-5">
                                                        </div>
                                                        <address>
                                                            Address : <i class="fa fa-address-card mr-5"></i>
                                                            {{ isset(auth()->user()->profile->address) ? auth()->user()->profile->address : 'Not Available' }}<br>
                                                            <br>
                                                            Phone : <i class="fa fa-phone mr-5"></i>
                                                            {{ isset(auth()->user()->profile->phone_number) ? auth()->user()->profile->phone_number : 'Not Available' }}<br>
                                                            <br>
                                                            Email : <i class="fa fa-envelope-o mr-5"></i> <a
                                                                href="javascript:void(0)">{{ isset(auth()->user()->email) ? auth()->user()->email : 'Not Available' }}</a>
                                                        </address>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <!--if profile address is not updated -->
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapse1" aria-expanded="true"
                                                    aria-controls="collapse1">Please Update Your Address & Phone Number</a>
                                            </h4>
                                            <div class="panel-body">
                                                <div class="block block-rounded">
                                                    <div class="block-content">
                                                        <div class="col-sm-8 col-md-8 col-lg-8">
                                                            <form method="POST" action="{{ route('cart.updateAddress') }}">
                                                                @csrf
                                                                {{-- @method('PATCH') --}}
                                                                
                                                                <input type="text" value="{{ $method->id }}" name="id" readonly hidden>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control form-item" placeholder="Address" name="address" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control form-item" placeholder="Phone" name="phone_number">
                                                                </div>
                                                                <button type="submit" class="ht-btn ht-btn-default">Update</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        
                                        

                                        <!--Delivery Method -->
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse1" aria-expanded="true"
                                                aria-controls="collapse1">Delivery Method</a>
                                        </h4>
                                        <div class="panel-body">
                                            <div class="block block-rounded">
                                                <div class="block-content">
                                                    <div class="font-size-lg text-black mb-5"><i class="fa fa-truck mr-5"></i> {{ $methodOfDelivery }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Order information -->
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse1" aria-expanded="true" aria-controls="collapse1">Order
                                                Information</a>
                                        </h4>
                                        <div class="panel-body">
                                            @foreach ($items->getContent() as $item)
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="Tyre Lessons-caption">
                                                        <ul class="Tyre Lessons-date Tyre Lessons-date-left p-t-lg-0">
                                                            <p><b> <img class="img responsive" src="{{isset($products->find($item->id)->image1) ? Storage::url($products->find($item->id)->image1) : asset('media/frontend_imgs/default.png') }}"
                                                            alt="#"><br>
                                                            <p><b>Product Name :</b> {{ $item->name }}<br>
                                                            <!-- <p><b>Color :</b>Regular <b>Manufactor :</b>Unknown </p> -->
                                                            <p><b>Quantity :</b><strong
                                                                    class="color-green color1-green">
                                                                    {{ $item->quantity }}</strong> pcs</p>
                                                            <p class="price-old f-20 color1-5">
                                                                &#8358;{{number_format(floatval($item->price * $item->quantity), 2) }}
                                                            </p>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="panel-group bg-gray-fa bg1-gray-15 p-lg-30 p-xs-15" id="accordion"
                                role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div id="collapse1" class="panel" role="tabpanel" aria-labelledby="heading1">
                                        <hr>
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapse1" aria-expanded="true"
                                                aria-controls="collapse1">Summary</a>
                                        </h4>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12">
                                                    <div class="Tyre Lessons-caption">
                                                        <ul class="Tyre Lessons-date Tyre Lessons-date-left p-t-lg-0">
                                                            <table width="100%">
                                                                <tr>
                                                                    <td><b>Delivery costs :</b></td>
                                                                    <td class="color1-5">
                                                                        &#8358;{{number_format(floatval($deliveryCost), 2) }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Cost of Products:</b></td>
                                                                    <td class="color1-5">
                                                                        &#8358;{{number_format(floatval($items->getTotal()), 2) }}
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td class="price-old f-20 color1-5"><b>Grand Total :</b></td><td class="color1-5">&#8358;{{number_format(floatval($items->getTotal()+ $deliveryCost), 2) }}</td>
                                                                </tr> -->
                                                            </table>
                                                            <hr>
                                                            <form action="{{ route('pay') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="amount"
                                                                    value="{{ $items->getTotal() + $deliveryCost }}"
                                                                    >
                                                                <input type="hidden" name="email"
                                                                    value="{{ auth()->user()->email }}" >
                                                                <input type="hidden" name="delivery_method"
                                                                    value="{{ $methodOfDelivery }}">
                                                                <input type="hidden" name="delivery_cost"
                                                                    value="{{ $deliveryCost }}">
                                                                <h3 class="price-old f-20 color1-5">Total :
                                                                    &#8358;{{number_format(floatval($items->getTotal() + $deliveryCost), 2) }}
                                                                </h3>
                                                                <button type="submit" class="ht-btn ht-btn-default">PAY
                                                                    NOW</button>
                                                            </form>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="panel-body">
                                <script language="JavaScript" type="text/javascript">
                                    TrustLogo("https://www.IECA.com/media/siteseal.png", "CL1", "none");
                                </script>
                            </div>
                        </div>
                        @endif
                    </div>
                   
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
