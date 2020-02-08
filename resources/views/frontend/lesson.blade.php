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
										<li class="active">Tyre Lessons</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Tyre Lessons -->
						<section class="Tyre Lessons-page m-t-lg-30 m-t-xs-0 p-b-lg-45">
							<div class="">
								<div class="row">
									<div class="col-sm-8 col-md-9">
										<div class="Tyre Lessons Tyre Lessons-list Tyre Lessons-lg">
											<!-- Tyre Lessons item -->
											@foreach ($posts as $post)
												<div class="Tyre Lessons-item">
												<div class="row">
													<div class="col-sm-5 col-md-5">
														<a href="#" class="hover-img"><img src="{{isset($post->image1) ? Storage::url($post->image1) : asset('media/frontend_imgs/default.png') }}" alt="{{ $post->name }}"></a>
													</div>
													<div class="col-sm-7 col-md-7">
														<div class="Tyre Lessons-caption">
															<ul class="Tyre Lessons-date Tyre Lessons-date-left p-t-lg-0">
																<li><a href="#"><i class="fa fa-calendar"></i> {{ $post->created_at->toDayDateTimeString()}}</a></li>
																<li><a href="#"><i class="fa fa-comment"></i> {{ $post->postComments->count()}} comments</a></li>
															</ul>
															<h3 class="Tyre Lessons-heading"><a href="#">{{ $post->topic }}</a></h3>
															<p>{!! substr($post->body, 0, 280) !!}</p>
															<a href="{{ route('lesson.details', $post) }}" class="ht-btn ht-btn-default ">Read more</a>
														</div>
													</div>
												</div>
											</div>
											<hr width="100%">
											@endforeach

											<nav aria-label="Page navigation">
												{{ $posts->links() }}

											</nav>
										</div>
									</div>
									<div class="col-sm-4 col-md-3">
										<!-- Tyre Lessons category -->
										<div class="link-category m-b-lg-30">
											<div class="heading-1">
												<h3>Categories</h3>
											</div>
											<ul class="list-default">
												@foreach ($categories as $category)
													<li><a href="#"><i class="fa fa-angle-right"></i>{{ $category->name }}</a></li>
												@endforeach
											</ul>
										</div>
										<!-- Tyre Lessons archive -->
										<div class="archive m-b-lg-30">
											<div class="heading-1">
												<h3>Archives</h3>
											</div>
											<ul class="list-default">
												<li><a href="#"><i class="fa fa-angle-right"></i>...</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
@endsection
