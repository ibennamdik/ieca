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
								<li class="home-act"><a href="#">Tyre Lessons</a></li>
								<li class="active">Detail</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Tyre Lessons details -->
				<section class="Tyre Lessons-detail-page m-t-lg-30 m-t-xs-0 p-b-lg-45 ">
					<div class="">
						<div class="row">
							<div class="col-sm-7 col-md-8">
								<div class="Tyre Lessons Tyre Lessons-grid Tyre Lessons-lg">
									<!-- Tyre Lessons item -->
									<div class="Tyre Lessons-item  no-bg p-lg-0">
										<a href="#"><img src="{{isset($post->image1) ? Storage::url($post->image1) : asset('media/frontend_imgs/default.png') }}" alt="{{ $post->name }}"></a>
										<div>&nbsp;</div>
										<div class="Tyre Lessons-caption text-left">
											<ul class="Tyre Lessons-date Tyre Lessons-date-left">
												<li><a href="#"><i class="fa fa-calendar"></i> {{ $post->created_at->toDayDateTimeString() }}</a></li>
												<li><a href="#"><i class="fa fa-comment"></i> {{ $post->postComments->count()}} comment</a></li>
											</ul>
											<h3 class="Tyre Lessons-heading">{{ $post->topic }}</h3>
											<p>{!! $post->body !!}</p>
										</div>
									</div>
									<!-- Share post -->
									<div class="share-post">
										<div class="row">
											<div class="col-lg-5">
												<span>Share this post on :</span>
												<ul class="list-inline">
													<li><a href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a href="#"><i class="fa fa-youtube"></i></a></li>
												</ul>
											</div>
											{{-- <div class="col-lg-7">
												<span>Tags : </span>
												<ul class="list-inline">
													<li><a href="#">construction</a></li>
													<li><a href="#">Builder</a></li>
													<li><a href="#">Cleaning</a></li>
												</ul>
											</div> --}}
										</div>
									</div>
								</div>
								<!--list-comment-->
								<div class="list-comment hover-c bg-gray-f5 bg1-gray-15">
									<h4 class="title">{{ $post->postComments->count()}} comments</h4>
									<!-- comment-item -->
									@foreach ($post->postComments as $comment)
									<div class="row">

											<div class="comment-item col-12">
												<a href="#" class="comment-img">
													<img src="{{ asset('media/frontend_imgs/default.png') }}" alt="image">
												</a>
												<div class="auth">
													<div class="comment-heading">
														<h5><a href="#">{{ $comment->user->name}}</a></h5>
														<span>{{ $comment->created_at->toDayDateTimeString() }}</span>
													</div>
												</div>
												<div class="comment-txt">
													<p>{{ $comment->comment }}</a>
												</div>
											</div>
									</div>

									@endforeach


								</div>
								<!--form comment-->
								<div class="form-comment bg-gray-f5 bg1-gray-15">
									<h4 class="title">Leave a reply</h4>
									<form action="{{ route('comment', $post) }}" method="post">
										@csrf
										{{-- <div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control form-item" name="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control form-item" name="email" placeholder="Email">
												</div>
											</div>

										</div> --}}
										<div class="form-group">
											<textarea class="form-control form-item" rows="3" name="comment" placeholder="Comment" required></textarea>
										</div>
										<button type="submit" name="submit" class="ht-btn ht-btn-default">Post comment</button>
									</form>
								</div>
							</div>
							<!-- Tyre Lessons category -->
							<div class="col-sm-5 col-md-4">
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
								<!-- Last posts -->
								<div class="Tyre Lessons Tyre Lessons-list Tyre Lessons-sm m-b-lg-30">
									<div class="heading-1">
										<h3>Last Posts</h3>
									</div>

									@foreach ($posts as $post)
									<div class="Tyre Lessons-item">
											<div class="row">
												<div class="col-sm-4 col-md-4 p-r-lg-0">
													<a href="#" class="hover-img"><img src="{{isset($post->image1) ? Storage::url($post->image1) : asset('media/frontend_imgs/default.png') }}" alt="{{ $post->name }}"></a>
												</div>
												<div class="col-sm-8 col-md-8 p-r-lg-0">
													<ul class="Tyre Lessons-date Tyre Lessons-date-left">
														<li><a href="#"><i class="fa fa-calendar"></i> {{ $post->created_at->toDayDateTimeString() }}</a></li>
													</ul>
													<div class="Tyre Lessons-caption">
														<h5 class="heading-4 Tyre Lessons-heading"> <a href="{{ route('lesson.details', $post) }}">{{ $post->topic }}</a></h5>
														
													</div>
												</div>
											</div>
										</div>
									@endforeach

								</div>
								<!-- Banner -->
								<div class="banner-item banner-bg-4 banner-1x color-inher">
									<h5>Affordable | Available | Durable</h5>
									<h3 class="f-weight-300"><strong>Tyre</strong> Villa</h3>
									<p>Same Brand, Same Quality, Same Services</p>
									<a href="#"><img src="{{ asset('media/frontend_imgs/brand2.jpg') }}" class="width-100"  style="margin-top: 20px;" alt="image"></a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>

@endsection
