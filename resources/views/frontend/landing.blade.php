@extends('layouts.simple')

@section('content')
        <!-- SLIDER SECTION START -->
        <div class="slider-1 pos-relative slider-overlay">
            <div class="bend niceties preview-1">
                <div id="ensign-nivoslider-3" class="slides">
                    <img src="{{ asset('media/frontend_imgs/slider/1.png') }}" alt="" title="#slider-direction-1" />
                    <img src="{{ asset('media/frontend_imgs/slider/2.png') }}" alt="" title="#slider-direction-2" />
                    <img src="{{ asset('media/frontend_imgs/slider/3.png') }}" alt="" title="#slider-direction-3" />
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-1" class="slider-direction">
                    <div class="slider-content text-center">
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <h4 class="slider-1-title-1">Welcome to <span>I.E.C.A</span></h4>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h1 class="slider-1-title-2">INTERNATIONAL ECONOMIC CITY ABUJA</h1>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <p class="slider-1-desc">An Iconic organised, private sector driven stimulus project
                                <br> for effective participation of Nigerian Businesses </p>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                            <a class="slider-button mt-40" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction">
                    <div class="slider-content text-left">
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <h4 class="slider-1-title-1">Welcome to <span>I.E.C.A</span></h4>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h1 class="slider-1-title-2">FIRST OF ITS KIND</h1>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <p class="slider-1-desc">Providing large scale commercial, industrial, residential 
                                <br> and recreational facilities to aid economic and social activities </p>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                            <a class="slider-button mt-40" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-3" class="slider-direction">
                    <div class="slider-content text-right">
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <h4 class="slider-1-title-1">Welcome to <span>I.E.C.A</span></h4>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h1 class="slider-1-title-2">INVESTMENT OPPORTUNITIES</h1>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <p class="slider-1-desc">A honeypot for investment opportunities for big and small investors
                                <br> with killer instinct to identify profitable ventures </p>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                            <a class="slider-button mt-40" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SLIDER SECTION END -->

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">

            <!-- ABOUT I.E.C.A AREA START -->
            <div class="about-I.E.C.A-area ptb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="section-title mb-30">
                                <h3></h3>
                                <h2>ABOUT I.E.C.A</h2>
                            </div>
                            <div class="about-I.E.C.A-info">
                                <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">I.E.C.A</span> Located at Gude District and situated in an area of land measuring 465.2 Hectares; 
                                    and laying strategically at a convergence point of major expressways and network of roads in Abuja City. Infact, it is about 15 kilometer 
                                    roadway to Nnamdi Azikwe International Airport and 25 kilometers to Aso Villa, presidential seat of power in Nigeria, taking your bearing 
                                    in a direct straight road through Shoprite departmental store, Apo District, Abuja.</p>

                                <p>International Economic City, Abuja, (IECA), will provide large scale commercial, industrial, residential and recreational facilities to aid economic 
                                    and social activities for the benefit of Nigeria and international businesses. The vision behind the International Economic City, Abuja is to ensure that, in concrete terms, none of the numerous business, jobs and wealth creation 
                                    opportunities offered by AFCFTA is not lost to Nigeria and her economy.
                                    <a class="slider-button mt-40" href="{{ route('about') }}">Read More</a></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="about-image">
                                <a href="about.html"><img src="{{ asset('/media/frontend_imgs/about/1.jpeg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT I.E.C.A AREA END -->

            <!-- BOOKING AREA START -->
            <div class="booking-area bg-1 call-to-bg plr-140 pt-75">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="section-title text-white">
                                <h3>GET</h3>
                                <h2 class="h1">STARTED</h2>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12">
                            <div class="booking-conternt clearfix">
                                <div class="book-house text-white">
                                    <h2>Step 1 : PURCHASE A FORM </h2>
                                    <h3 class="h4">Step 2 : Make investments in your desired sector </h3>
                                    <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                        <a class="slider-button mt-40" href="{{ route('register') }}">CREATE YOUR ACCOUNT</a>
                                        <a class="slider-button mt-40" href="{{ route('login') }}">LOGIN</a>
                                        <a class="slider-button mt-40" href="{{ route('investment') }}">INVEST</a>
                                    </div>
                                </div>
                                
                                <div class="booking-imgae">
                                    <img src="{{ asset('/media/frontend_imgs/others/booking.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BOOKING AREA END -->

            <!-- FEATURED FLAT AREA START -->
            <div class="featured-flat-area pt-115 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title-2 text-center">
                                <h2>Investment OPPORTUNITIES</h2>
                                <p>I.E.C.A is an iconic organized private sector driven stimulus project for effective participation of Nigeria businesses in 
                                    receiving foreign investment into Nigeria as a result of AFRICA CONTINENTAL FREE TRADE AGREEMENT (AFCFTA). </p>
                            </div>
                        </div>
                    </div>
                    <div class="featured-flat">
                        <div class="row">
                            <!-- flat-item -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <!-- <span class="for-sale">&nbsp;</span> -->
                                        <a href="#"><img src="{{ asset('/media/frontend_imgs/flat/residential.png') }}" alt=""></a>
                                        <div class="flat-link">
                                            <a href="#">More Details</a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="{{ asset('/media/frontend_imgs/icons/4.png') }}" alt="">
                                                <span>450 sqft</span>
                                            </li>
                                            <li>
                                                <img src="{{ asset('/media/frontend_imgs/icons/13.png') }}" alt="">
                                                <img src="{{ asset('/media/frontend_imgs/icons/14.png') }}" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="#">Residential Plots</a></h5>
                                            <span class="price"></span>
                                        </div>
                                        <p>3, 4 and 5 Detached and semi detatched duplexes for Low and Medium Earners, 
                                            and gated communities for High income earners</p>
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <!-- <span class="for-sale">&nbsp;</span> -->
                                        <a href="#"><img src="{{ asset('/media/frontend_imgs/flat/industrial.png') }}" alt=""></a>
                                        <div class="flat-link">
                                            <a href="#">More Details</a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="{{ asset('/media/frontend_imgs/icons/4.png') }}" alt="">
                                                <span>Over 1200 plots</span>
                                            </li>
                                            <li>
                                                <img src="{{ asset('/media/frontend_imgs/icons/13.png') }}" alt="">
                                                <img src="{{ asset('/media/frontend_imgs/icons/14.png') }}" alt="">
                                                <span></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="#">Industrial Parks</a></h5>
                                            <span class="price"></span>
                                        </div>
                                        <p>Over 12 industrial parks with a cluster of 100 medium and 
                                        small scale industries in each park and occupying a land area of 10 hectares each</p>
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <!-- <span class="for-sale">&nbsp;</span> -->
                                        <a href="#"><img src="{{ asset('/media/frontend_imgs/flat/commercial.png') }}" alt=""></a>
                                        <div class="flat-link">
                                            <a href="#">More Details</a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="{{ asset('/media/frontend_imgs/icons/4.png') }}" alt="">
                                                <span>450 sqft</span>
                                            </li>
                                            <li>
                                                <img src="{{ asset('/media/frontend_imgs/icons/13.png') }}" alt="">
                                                <img src="{{ asset('/media/frontend_imgs/icons/14.png') }}" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="#">Commercial Plots</a></h5>
                                            <span class="price"></span>
                                        </div>
                                        <p>Workshops, Market stalls, etertainment, schools, hospitals, hotels, Banks, Warehouses, 
                                            trade exhibition centers and other related sections</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FEATURED FLAT AREA END -->

            <!-- DEVELOPERS AND ENGINEERS AREA START -->
            <div class="testimonial-area pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="section-title mb-30">
                                            <h3>Our,</h3>
                                            <h2 class="h1">Company</h2>
                                        </div>
                                        <div class="testimonial-carousel dots-right-btm">
                                            <!-- testimonial-item -->
                                            <div class="testimonial-item">
                                                <div class="testimonial-brief">
                                                <p>The name <span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">International Economic City Ltd</span> is a limited liability company 
                                                    registered as a subsidiary of ASSIGNIA INFRASTRUCTURES LTD under the laws of Nigeria. However, shares in the company shall be divested and transferred to investors 
                                                    as soon as investors are assembled. The company shall be directly responsible for key areas of projects / businesses in the IECA. The land area dedicated for the following 
                                                    projects shall be legally assigned to the International Economic City Ltd in a build, operate and own ( BOO) model, namely:</p>
                                                <p>
                                                    <b>Power plant, Sewage management/biogas plant, Water system management, International conference and Trade exhibition center, Five star hotel, World class Hospital, 200 plots of land to build a gated community for the high income earners</b> and each 
                                                    plot sitting on land area measuring  between 2,500 square meters to 1 Hectare  for luxurious Accommodations , upscale / high-rise apartments and residences.
                                                </p>
                                                </div>
                                                <!-- <h6>Zasica Luci, <span>CEO</span></h6> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="testimonial-image">
                                            <img src="{{ asset('/media/frontend_imgs/others/company.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- DEVELOPERS AND ENGINEERS AREA END -->

            <!-- OUR BOARD AREA START -->
            <div class="our-agents-area pt-115 pb-55">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title-2 text-center">
                                <h2>BOARD OF GOVENORS</h2>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <div class="our-agents" style="padding:10px;">
                        <div class="row">
                           <!-- service-item -->
                           <div class="col-lg-3 md-12">
                                <div class="single-agent">
                                    <div class="agent-image">
                                        <img src="{{ asset('/media/frontend_imgs/agents/image1.jpeg') }}" alt="">
                                    </div>
                                    <div class="agent-info">
                                        <div class="agent-name">
                                            <p>&nbsp;</p>
                                            <h5><a href="#">Chief Michael Nkwocha</a></h5>
                                            <p>&nbsp;</p>
                                            <a class="slider-button mt-10" href="#">BRIEF BIO</a>
                                        </div>
                                    </div>
                                    <div class="agent-info-hover text-center">
                                        <div>
                                            <h5><a href="#">Chief Michael Nkwocha</a></h5>
                                            <a class="slider-button mt-40" href="#">BRIEF BIO</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- service-item -->
                            <div class="col-lg-3 md-12">
                                <div class="single-agent">
                                    <div class="agent-image">
                                        <img src="{{ asset('/media/frontend_imgs/agents/image3.jpeg') }}" alt="">
                                    </div>
                                    <div class="agent-info">
                                        <div class="agent-name">
                                            <p>&nbsp;</p>
                                            <h5><a href="#">Engineer Auwal Bununu</a></h5>
                                            <p>&nbsp;</p>
                                            <a class="slider-button mt-10" href="#">BRIEF BIO</a>
                                        </div>
                                    </div>
                                    <div class="agent-info-hover text-center">
                                        <div>
                                            <h5><a href="#">Engineer Auwal Bununu</a></h5>
                                            <a class="slider-button mt-40" href="#">BRIEF BIO</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- service-item -->
                            <div class="col-lg-3 md-12">
                                <div class="single-agent">
                                    <div class="agent-image">
                                        <img src="{{ asset('/media/frontend_imgs/agents/image2.jpeg') }}" alt="">
                                    </div>
                                    <div class="agent-info">
                                        <div class="agent-name">
                                            <p>&nbsp;</p>
                                            <h5><a href="#">Barrister Ibrahim Hussein Abdullahi</a></h5>
                                            <a class="slider-button mt-10" href="#">BRIEF BIO</a>
                                        </div>
                                    </div>
                                    <div class="agent-info-hover text-center">
                                        <div>
                                            <h5><a href="#">Barrister Ibrahim Hussein Abdullahi</a></h5>
                                            <a class="slider-button mt-40" href="#">BRIEF BIO</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- service-item -->
                            <div class="col-lg-3 md-12">
                                <div class="single-agent">
                                    <div class="agent-image">
                                        <img src="{{ asset('/media/frontend_imgs/agents/image.jpg') }}" alt="">
                                    </div>
                                    <div class="agent-info">
                                        <div class="agent-name">
                                            <p>&nbsp;</p>
                                            <h5><a href="#">&nbsp;</a></h5>
                                            <p>&nbsp;</p>
                                            <a class="slider-button mt-10" href="#">BRIEF BIO</a>
                                        </div>
                                    </div>
                                    <div class="agent-info-hover text-center">
                                        <div>
                                            <h5><a href="#">&nbsp;</a></h5>
                                            <a class="slider-button mt-40" href="#">BRIEF BIO</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- OUR BOARD AREA END -->

            <!-- DEVELOPERS AND ENGINEERS AREA START -->
            <div class="testimonial-area pb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial">
                                <div class="row">
                                    <div class="col-lg-8 col-md-9">
                                        <div class="section-title mb-30">
                                            <h3>Developer,</h3>
                                            <h2 class="h1">Architects and Engineers</h2>
                                        </div>
                                        <div class="testimonial-carousel dots-right-btm">
                                            <!-- testimonial-item -->
                                            <div class="testimonial-item">
                                                <div class="testimonial-brief">
                                                    <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Assignia Infrastructures LTD</span>,
                                                        A company registered in Nigeria with vast experience in infrastructural developement is the developer of the international Economic City, Abuja 
                                                        <br><br>
                                                        <span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Messers Arabi Bello & Associates</span>, a world class, multidiscipinary consultancy consortium has been engaged to handle architecture, planning,
                                                        engineering and environmental management of the international Economic City Abuja
                                                    </p>
                                                </div>
                                                <!-- <h6>Zasica Luci, <span>CEO</span></h6> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-3">
                                        <div class="testimonial-image">
                                            <img src="{{ asset('/media/frontend_imgs/others/testimonial.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- DEVELOPERS AND ENGINEERS AREA END -->

            <!-- BRAND AREA START -->
            <div class="brand-area pb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="brand-carousel">
                                <!-- brand-item -->
                                 <div class="col">
                                    <div class="brand-item">
                                        <img src="{{ asset('/media/frontend_imgs/brand/2.png') }}" alt="">
                                    </div>
                                </div>
                                <!-- brand-item -->
                                 <!-- brand-item -->
                                 <div class="col">
                                    <div class="brand-item">
                                        <img src="{{ asset('/media/frontend_imgs/brand/1.png') }}" alt="">
                                    </div>
                                </div>
                                <!-- brand-item -->
                                <div class="col">
                                    <div class="brand-item">
                                        <img src="{{ asset('/media/frontend_imgs/brand/2.png') }}" alt="">
                                    </div>
                                </div>
                                 <!-- brand-item -->
                                 <div class="col">
                                    <div class="brand-item">
                                        <img src="{{ asset('/media/frontend_imgs/brand/1.png') }}" alt="">
                                    </div>
                                </div>
                                <!-- brand-item -->
                                <div class="col">
                                    <div class="brand-item">
                                        <img src="{{ asset('/media/frontend_imgs/brand/2.png') }}" alt="">
                                    </div>
                                </div>
                                 <!-- brand-item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BRAND AREA END -->
        </section>
        <!-- End page content -->
@endsection
