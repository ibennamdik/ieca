@extends('layouts.simple')

@section('content')
<div id="wrap-body" class="p-t-lg-30">
    <div class="container">
        <div class="wrap-body-inner">
            <!-- Banner -->
            <div class="banner-item banner-2x banner-bg-8 color-inher m-xs-auto m-box-auto p-xs-auto pb-lg-auto">
                <!-- <div class="counterup p-t-lg-50">
                    <div class="row"></div>
                </div> -->
            </div>
            <!-- Search option -->
            <div style="margin-bottom:20px; margin-top:20px;">
                <ul class="nav nav-tabs ht-tabs p-l-lg-30 p-l-xs-15 m-t-xs-30" role="tablist">
                    <li role="presentation" class="active pull-left"><a href="#newcar" aria-controls="newcar" role="tab"
                            data-toggle="tab">Search For your Tyre </a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Tab panes item -->
                    <div role="tabpanel" class="tab-pane active" id="newcar">
                        <div class="search-option p-lg-30 p-b-lg-15 p-b-sm-30 p-xs-15">
                            <div class="row">
                                <form action="{{ route('search') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-sm-12 col-md-7 col-lg-7">
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 col-lg-4 m-b-lg-15 p-r-lg-0 p-r-xs-15">
                                                <div class="">
                                                    <div class="dropdown">
                                                        <select class="form-item" name="width">
                                                            <option class="text-primary" value="">Width</option>
                                                            @foreach ($widths as $v)
                                                            <option class="text-primary" value="{{ $v->id }}">
                                                                {{ $v->name }}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 m-b-lg-15 p-r-lg-0 p-r-xs-15">
                                                <div class="">
                                                    <div class="dropdown">
                                                        <select class="form-item" name="profile">
                                                            <option class="text-primary" value="">Profile</option>
                                                            @foreach ($profiles as $v)
                                                            <option class="text-primary" value="{{ $v->id }}">
                                                                {{ $v->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 m-b-lg-15 p-r-lg-0 p-r-xs-15">
                                                <div class="">
                                                    <div class="dropdown">
                                                        <select class="form-item" name="rim">
                                                            <option class="text-danger" value="">Rim</option>
                                                            @foreach ($rims as $v)
                                                            <option class="text-primary" value="{{ $v->id }}">
                                                                {{ $v->name }}</option>
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
            </div>

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
                                    <a href="#">{{$item->name}} <b>NEW</b>
                                        <ul class="rating">
                                            @for ($i = 0; $i < $item->rating; $i++)
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                @endfor
                                                @if ($item->rating != 5)

                                                    @for ($i = 0; $i < 5 - $item->rating; $i++)
                                                        <li><i class="fa fa-star"></i></li>
                                                    @endfor

                                                @endif
                                        </ul>
                                    </a><span class="f-10">
                                        &#8358;{{number_format(floatval($item->amount), 2) }}</span>
                                </h4>
                                <a href="{{ route('product.details', $item->id) }}" class="ht-btn ht-btn-default">Buy
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
            <!-- Recent products -->
            <div class="product product-grid product-grid-2 car m-b-lg-20">
                <div class="heading">
                    <h3>RECENT TYRES</h3>
                </div>
                {{-- @foreach ($products->chunk(3) as $item) --}}
                <div class="row">
                    @foreach ($items as $item)
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <!-- Product item -->
                        <div class="product-item hover-img">
                            <a href="{{ route('product.details', $item->id) }}" class="product-img">
                                <img src="{{isset($item->image1) ? Storage::url($item->image1) : asset('media/frontend_imgs/default.png') }}"
                                    alt="{{ $item->name }}">
                            </a>
                            <div class="product-caption">
                                <h4 class="product-name">
                                    <a href="#">{{$item->name}} <b>NEW</b>
                                        <ul class="rating">
                                            @for ($i = 0; $i < $item->rating; $i++)
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                @endfor
                                                @if ($item->rating != 5)

                                                @for ($i = 0; $i < 5 - $item->rating; $i++)
                                                    <li><i class="fa fa-star"></i></li>
                                                    @endfor

                                                    @endif
                                        </ul>
                                    </a><span class="f-10">
                                        &#8358;{{number_format(floatval($item->amount), 2) }}</span>
                                </h4>
                                <a href="{{ route('product.details', $item->id) }}" class="ht-btn ht-btn-default">Buy
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
                {{-- @endforeach --}}
            </div>

            @endif
            <!-- Our services -->
            <!-- <section class="m-b-lg-50">
                <div class="bg-gray">
                    <div class="bgc">
                        <div class="row">
                            <div class="col-sm-8 col-md-7 col-lg-6">
                                <div class="list-service p-lg-30">
                                    <h3 class="heading-2">Our Services</h3>
                                    <p>Our experts handle maintenance and repair for all vehicle brands. Benefit from
                                        our unique
                                        competence and outstanding quality at fair prices. For everything your car needs
                                    </p>
                                    <ul>
                                        <li><a href="#">Oil Change</a></li>
                                        <li><a href="#">Exhaust &amp; Mufflers</a></li>
                                        <li><a href="#">Transmission Repair</a></li>
                                        <li><a href="#">Motor Repair</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-sm-8 col-md-7 col-lg-6">
                                <img src="{{ asset('media/frontend_imgs/default.png') }}" class="width-100" alt="image">
                            </div>

                        </div>
                    </div>
                </div>
            </section> -->
            <!-- Banner -->
            <div class="banner-item banner-2x banner-bg-9 color-inher m-b-lg-50">
                <h3 class="f-weight-300">We teach you how to take care of your tyres...</h3>
                <p>No hidden fees or costs, learn what you need to.</p>
                <a href="{{ route('lesson') }}" class="ht-btn ht-btn-default">Click to get free lessons</a>
            </div>
            <!-- Last news -->
            <section class="m-b-lg-50">
                <div class="blog overl">
                    <div class="heading">
                        <h3>TYRE LESSONS</h3>
                    </div>
                    <div class="row">
                        <div class="owl" data-items="3" data-itemsDesktop="3" data-itemsDesktopSmall="2"
                            data-itemsTablet="2" data-itemsMobile="1" data-pag="false" data-buttons="true">

                            @foreach ($posts as $post)
                            <div class="col-lg-12 h-auto"> 
                                <!-- Blog item -->
                                <div class="blog-item text-left">
                                    <a href="#" class="hover-img">
                                        <img style="margin-bottom:10px;"
                                            src="{{isset($post->image1) ? Storage::url($post->image1) : asset('media/frontend_imgs/default.png') }}"
                                            alt="{{ $post->name }}"></a>
                                    <div class="blog-caption">
                                        <ul class="blog-date">
                                            <li><i class="fa fa-calendar"></i>
                                                {{ $post->created_at->toDayDateTimeString() }}</li>
                                            <li><i class="fa fa-comment"></i> {{ $post->postComments->count()}}
                                                comment(s)</li>
                                        </ul>
                                        <h4 class="blog-heading font-weight-bold"><a href="#">{{ $post->topic }}</a>
                                        </h4>
                                        <p>{!! substr($post->body, 0, 300) !!}</p>
                                        <a href="{{ route('lesson.details', $post) }}">... <strong class="text-success">Click to Read more</strong></a>
                                    </div>
                                    
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
