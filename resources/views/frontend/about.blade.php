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
                                <li class="active">About us</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- About-->
                <section class="m-t-lg-30 m-t-xs-0 m-b-lg-50">
                    <div>
                        <div class="row">
                            <div class="col-md-7 col-lg-8 m-b-lg-50">
                                <div class="heading">
                                    <h3>About us</h3>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerciStation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in vo. Sunt in culpa qui officia deserunt mollit anim id est laborut non proident.</p>
                                <ul class="list-default">
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor smet, consectetur adipisicing eli</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Lorem tetur asicing eli</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor sit amseing eli</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-12 col-md-5 col-lg-4">
                                <img src="{{ asset('media/frontend_imgs/default2.png') }}" class="width-100" alt="image">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                <img src="{{ asset('media/frontend_imgs/default3.png') }}" class="imgc width-100" alt="image">
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Last news -->
                <section class="m-b-lg-50">
                    <div class="Tyre Lessons Tyre Lessons-grid overl">
                        <div class="heading">
                            <h3>Latest News</h3>
                        </div>
                        <div class="row">
                            <div class="owl" data-items="3" data-itemsDesktop="3" data-itemsDesktopSmall="2" data-itemsTablet="2" data-itemsMobile="1" data-pag="false" data-buttons="true">
                                @foreach ($posts as $post)
                                <div class="col-lg-12">
                                        <!-- Tyre Lessons item -->
                                        <div class="Tyre Lessons-item">
                                            <a href="#" class="hover-img"><img style="margin-bottom:10px;" src="{{isset($post->image1) ? Storage::url($post->image1) : asset('media/frontend_imgs/default.png') }}" alt="{{ $post->name }}"></a>
                                            <div class="Tyre Lessons-caption">
                                                <ul class="Tyre Lessons-date">
                                                    <li><a href="#"><i class="fa fa-calendar"></i> {{ $post->created_at->toDayDateTimeString() }}</a></li>
                                                    <li><a href="#"><i class="fa fa-comment"></i> {{ $post->postComments->count()}} comment(s)</a></li>
                                                </ul>
                                                <h3 class="Tyre Lessons-heading"><a href="#">{{ $post->topic }}</a></h3>
                                                <p>{!! substr($post->body, 0, 250) !!}</p>
                                                <a href="{{ route('lesson.details', $post) }}" class="ht-btn ht-btn-default">Read more</a>
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
