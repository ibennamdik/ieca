@extends('layouts.account')

@section('account-content')

<div class="heading">
    <h3>Order History</h3>
</div>

<div class="col-sm-12 col-md-12 col-lg-12">
    <!-- Product item -->
    <div class="content">
        <table style="width:100%">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Products</th>
                    <th>Status</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
            </thead>

            <body>
                @foreach($orders->sortByDesc('created_at') as $order)
                <tr>
                    <td>{{ $order->created_at->toDayDateTimeString() }}</td>
                    <td>{{ $order->orderItems->count() }}</td>
                    <td><span class="badge badge-{{ $order->status->style }}">{{ $order->status->name}}</span></td>
                    <td>&#8358;{{number_format(floatval($order->payment->amount ), 2) }}</td>
                    <td><a href="#" data-toggle="modal" data-target="#exampleModal{{ $order->id }}" class="btn btn-xs btn-{{ $order->status->style }}" style="margin:3px;">view details</a>
                    </td>
                </tr>
                <div class="modal fade" id="exampleModal{{ $order->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content bg1-gray-18">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">Order Details</h5>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="col">Transaction Date</div>
                                    <div class="col">
                                        {{ $order->payment->created_at->toDayDateTimeString() }}</div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="col">Transaction ID</div>
                                    <div class="col">{{ $order->payment->transaction_ref }}</div>
                                </div>
                                <hr width="100%" class="mb-5">
                                <div class="">
                                    <div class="col-sm-12 col-md-3 col-lg-3"><u>Item</u></div>
                                    <div class="col-sm-12 col-md-3 col-lg-3"><u>Qty</u></div>
                                    <div class="col-sm-12 col-md-3 col-lg-3"><u>Unit</u></div>
                                    <div class="col-sm-12 col-md-3 col-lg-3"><u>Price</u></div>

                                    @foreach ($order->orderItems as $item)

                                    <div class="col-sm-12 col-md-3 col-lg-3">{{ $item->product->name }}</div>
                                    <div class="col-sm-12 col-md-3 col-lg-3">{{ $item->quantity }}pcs</div>
                                    <div class="col-sm-12 col-md-3 col-lg-3">
                                        &#8358;{{number_format(floatval($item->product->amount), 2) }}</div>
                                    <div class="col-sm-12 col-md-3 col-lg-3">
                                        &#8358;{{number_format(floatval($item->product->amount*$item->quantity), 2) }}
                                    </div>
                                    @endforeach
                                    <div class="col-sm-12 col-md-3 col-lg-3">Delivery Cost</div>
                                    <div class="col-sm-12 col-md-3 col-lg-3"></div>
                                    <div class="col-sm-12 col-md-3 col-lg-3"></div>
                                    <div class="col-sm-12 col-md-3 col-lg-3">
                                        &#8358;{{number_format(floatval( $order->delivery_cost ), 2) }}
                                    </div>

                                    <div class="col-sm-12 col-md-3 col-lg-3">Total Amount</div>
                                    <div class="col-sm-12 col-md-3 col-lg-3"></div>
                                    <div class="col-sm-12 col-md-3 col-lg-3"></div>
                                    <div class="col-sm-12 col-md-3 col-lg-3">
                                        &#8358;{{number_format(floatval($order->payment->amount ), 2) }}
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary bg1-gray-18"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

            </body>
        </table>
    </div>
</div>

@endsection
