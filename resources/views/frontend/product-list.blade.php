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
			<!-- Product list -->
			<section class="block-product m-t-lg-30 m-t-xs-0">
				<div class="row">
					<div class="col-sm-4 col-md-4 col-lg-3">
						<!-- Caterory -->
						<div class="category m-b-lg-50">
							<div class="heading">
								<h3 class="p-l-lg-20" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
									<i class="fa fa-bars"></i>Caterory
								</h3>
							</div>
							<ul class="collapse in" id="collapseExample">
								<li class="active"><a href="#">Tyres & Wheels<i class="fa fa-chevron-right pull-right"></i></a></li>
								<li><a href="#">Brakes discs<i class="fa fa-chevron-right pull-right"></i></a></li>
								<li><a href="#">Exhaust tips<i class="fa fa-chevron-right pull-right"></i></a></li>
								<li><a href="#">Car covers<i class="fa fa-chevron-right pull-right"></i></a></li>
								<li><a href="#">Seat covers<i class="fa fa-chevron-right pull-right"></i></a></li>
								<li><a href="#">Mirrors<i class="fa fa-chevron-right pull-right"></i></a></li>
								<li><a href="#">Bumpers<i class="fa fa-chevron-right pull-right"></i></a></li>
								<li><a href="#">Floor mats<i class="fa fa-chevron-right pull-right"></i></a></li>
								<li><a href="#">Calipers<i class="fa fa-chevron-right pull-right"></i></a></li>
								<li><a href="#">Hand brakes<i class="fa fa-chevron-right pull-right"></i></a></li>
							</ul>
						</div>
						<!-- Banner -->
						<div class="banner-item banner-bg-4 banner-1x color-inher">
							<h5>Lorem ipsum dolor</h5>
							<h3 class="f-weight-300"><strong>Interior</strong> Accessories</h3>
							<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel</p>
							<a href="#" class="ht-btn ht-btn-default">Shop now</a>
						</div>
					</div>
					<div class="col-sm-8 col-md-8 col-lg-9">
						<div class="product product-list">
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
												<button class="dropdown-toggle form-item w-130" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
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
												<button class="dropdown-toggle form-item w-80" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
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
							<!-- Product item -->
							<div class="product-item hover-img">
								<div class="row">
									<div class="col-sm-6 col-md-5 col-lg-4">
										<a href="#" class="product-img"><img src="{{ asset('media/frontend_imgs/default.png') }}" alt="image"></a>
									</div>
									<div class="col-sm-6 col-md-7 col-lg-8 static-position">
										<div class="product-caption">
											<h4 class="product-name"><a href="#">360 FORGED® - MESH 8</a></h4>
											<ul class="rating">
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
											<div class="product-price-group">
												<span class="product-price">$76</span>
											</div>
											<p class="product-txt">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum</p>
											<a href="#" class="ht-btn ht-btn-default">Add to cart</a>
											<ul class="absolute-caption">
												<li><i class="fa fa-heart-o"></i></li>
												<li><i class="fa fa-signal"></i></li>
												<li><i class="fa fa-search"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="product-item hover-img">
								<div class="row">
									<div class="col-sm-6 col-md-5 col-lg-4">
										<a href="#" class="product-img"><img src="{{ asset('media/frontend_imgs/default.png') }}" alt="image"></a>
									</div>
									<div class="col-sm-6 col-md-7 col-lg-8 static-position">
										<div class="product-caption">
											<h4 class="product-name"><a href="#">360 FORGED® - MESH 8</a></h4>
											<ul class="rating">
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
											<div class="product-price-group">
												<span class="product-price">$76</span>
											</div>
											<p class="product-txt">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum</p>
											<a href="#" class="ht-btn ht-btn-default">Add to cart</a>
											<ul class="absolute-caption">
												<li><i class="fa fa-heart-o"></i></li>
												<li><i class="fa fa-signal"></i></li>
												<li><i class="fa fa-search"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Product item -->
							<div class="product-item hover-img">
								<div class="row">
									<div class="col-sm-6 col-md-5 col-lg-4">
										<a href="#" class="product-img"><img src="{{ asset('media/frontend_imgs/default.png') }}" alt="image"></a>
									</div>
									<div class="col-sm-6 col-md-7 col-lg-8 static-position">
										<div class="product-caption">
											<h4 class="product-name"><a href="#">360 FORGED® - MESH 8</a></h4>
											<ul class="rating">
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
											<div class="product-price-group">
												<span class="product-price">$76</span>
											</div>
											<p class="product-txt">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum</p>
											<a href="#" class="ht-btn ht-btn-default">Add to cart</a>
											<ul class="absolute-caption">
												<li><i class="fa fa-heart-o"></i></li>
												<li><i class="fa fa-signal"></i></li>
												<li><i class="fa fa-search"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- product item -->
							<div class="product-item hover-img">
								<div class="row">
									<div class="col-sm-6 col-md-5 col-lg-4 static-position">
										<a href="#" class="product-img"><img src="{{ asset('media/frontend_imgs/default.png') }}" alt="image"></a>
									</div>
									<div class="col-sm-6 col-md-7 col-lg-8">
										<div class="product-caption">
											<h4 class="product-name"><a href="#">360 FORGED® - MESH 8</a></h4>
											<ul class="rating">
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
											<div class="product-price-group">
												<span class="product-price">$76</span>
											</div>
											<p class="product-txt">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum</p>
											<a href="#" class="ht-btn ht-btn-default">Add to cart</a>
										</div>
										<ul class="absolute-caption">
											<li><i class="fa fa-heart-o"></i></li>
											<li><i class="fa fa-signal"></i></li>
											<li><i class="fa fa-search"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- product item -->
							<div class="product-item hover-img">
								<div class="row">
									<div class="col-sm-6 col-md-5 col-lg-4">
										<a href="#" class="product-img"><img src="{{ asset('media/frontend_imgs/default.png') }}" alt="image"></a>
									</div>
									<div class="col-sm-6 col-md-7 col-lg-8 static-position">
										<div class="product-caption">
											<h4 class="product-name"><a href="#">360 FORGED® - MESH 8</a></h4>
											<ul class="rating">
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
											<div class="product-price-group">
												<span class="product-price">$76</span>
											</div>
											<p class="product-txt">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum</p>
											<a href="#" class="ht-btn ht-btn-default">Add to cart</a>
										</div>
										<ul class="absolute-caption">
											<li><i class="fa fa-heart-o"></i></li>
											<li><i class="fa fa-signal"></i></li>
											<li><i class="fa fa-search"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<nav aria-label="Page navigation">
							<ul class="pagination ht-pagination">
								<li>
									<a href="#" aria-label="Previous">
										<span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
									</a>
								</li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li>
									<a href="#" aria-label="Next">
										<span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>

@endsection
