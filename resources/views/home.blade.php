@extends('layouts.main')

@section('title')
    Home
@stop

@section('content')
    <div class="section-full bg-white content-inner-2" style="background-image:url({{ asset('images/background/bg11.jpg') }}); background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 m-b30 align-self-center">
                    <div class="dis-tbl-cell  m-b30">
                        <h2 class="m-t0 m-b10">About Kidstar</h2>
                        <h6 class="fw7 m-b15">Kid Star Model is a modeling/fashion and design outfit in Port Harcourt with a high motive of spreading its principles all over the country and the world at large. We are the first Kids Modeling agency in Nigeria and we are very much focussed on giving the kids an early start so they can reach the zenith of goals and career while still in their prime.</h6>
                        <p class="fw7 m-b15">This is why we teach them finesse, good morals, extra-curricular activities, poise and art of fashion and design especially in the African sense of beauty. The age range for our models is 5 - 11.</p>

                        <a href="{{ url('about-us') }}" class="site-button-secondry ">More <i class="ti-arrow-right m-l10"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="img-collage">
                        <div class="coll-1"><img src="{{ asset('images/collage/pic1.jpg') }}" alt=""></div>
                        <div class="coll-2"><img src="{{ asset('images/collage/pic2.jpg') }}" alt=""></div>
                        <div class="coll-3"><img src="{{ asset('images/collage/pic3.jpg') }}" alt=""></div>
                        <div class="coll-4"><img src="{{ asset('images/collage/pic4.jpg') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-full about-section bg-white">
        <div class="container-fluid">
            <div class="row equal-wraper">
                <div class="bg-primary col-xl-3 p-a0 col-md-6 col-lg-3 col-xs-12 equal-col dis-tbl" style="height: 479px;">
                    <div class="p-a30 text-white dis-tbl-cell wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        <p class="font-weight-600 m-b10">Hair Salon</p>
                        <h4 class="font-weight-700">BeautyZone Hair Salon Creating Beauty </h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum is simply dummy text.</p>
                        <a href="#" class="site-button white outline outline-2">Read More</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 p-a0 col-xs-12 equal-col" style="height: 479px;">
                    <img src="images/about/img1.jpg" class="abt-img img-cover equal-col" alt="" style="height: 479px;">
                </div>
                <div class="bg-primary col-xl-3 p-a0 col-md-6 col-lg-3 col-xs-12 equal-col dis-tbl" style="height: 479px;">
                    <div class="p-a30 text-white dis-tbl-cell wow fadeIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                        <p class="font-weight-600 m-b10">Hair Salon</p>
                        <h4 class="font-weight-700">All Hair Services for Your Pleasure </h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum is simply dummy text.</p>
                        <a href="#" class="site-button white">Read More</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 p-a0 col-xs-12 equal-col" style="height: 479px;">
                    <img src="images/about/img2.jpg" class="abt-img img-cover equal-col" alt="" style="height: 479px;">
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery -->
    <div class="section-full content-inner-2 our-portfolio" style="background-image:url({{ asset('images/background/bg6.jpg') }}); background-size: cover;">
        <div class="container">
            <div class="section-head text-black text-center m-b20">
                <h2 class="text-primary m-b10">Gallery</h2>
                <div class="dlab-separator-outer m-b0">
                    <div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
                </div>
                <p class="m-b0">Take a peek at our gallery</p>
            </div>

            <div class="clearfix">
                <ul id="masonry" class="portfolio-box dlab-gallery-listing gallery-grid-4 gallery row lightgallery">
                    <li class="image-1 image-4 card-container col-lg-3 col-md-3 col-sm-3">
                        <div class="dlab-box">
                            <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                                <img width="385" height="385" src="{{ asset('images/gallery/middle/image-1.jpg') }}" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
											<span data-exthumbimage="{{ asset('images/gallery/middle/thumb/pic1.jpg') }}" data-src="{{ asset('images/gallery/image-1.jpg') }}" class="icon-bx-xs check-km" title="Image Title Come Here 1">
												<i class="ti-fullscreen"></i>
											</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dlab-box p-tb30 image-2">
                            <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                                <img width="385" height="385" src="{{ asset('images/gallery/middle/image-2.jpg') }}" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
											<span data-exthumbimage="{{ asset('images/gallery/middle/thumb/pic2.jpg') }}" data-src="{{ asset('images/gallery/image-2.jpg') }}" class="icon-bx-xs check-km" title="Image Title Come Here 1">
												<i class="ti-fullscreen"></i>
											</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="image-2 card-container col-lg-6 col-md-6 col-sm-6">
                        <div class="dlab-box m-b30">
                            <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                                <img src="{{ asset('images/gallery/image-3.jpg') }}" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
											<span data-exthumbimage="{{ asset('images/gallery/middle/thumb/pic3.jpg') }}" data-src="{{ asset('images/gallery/image-3.jpg') }}" class="icon-bx-xs check-km" title="Image Title Come Here 1">
												<i class="ti-fullscreen"></i>
											</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="image-3 image-4 card-container col-lg-3 col-md-3 col-sm-3">
                        <div class="dlab-box m-b30">
                            <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                                <img width="385" height="385" src="{{ asset('images/gallery/middle/image-4.jpg') }}" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
											<span data-exthumbimage="images/gallery/middle/thumb/pic4.jpg" data-src="images/gallery/image-4.jpg" class="icon-bx-xs check-km" title="Image Title Come Here 1">
												<i class="ti-fullscreen"></i>
											</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dlab-box">
                            <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                                <img width="385" height="385" src="{{ asset('images/gallery/middle/image-5.jpg') }}" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
											<span data-exthumbimage="images/gallery/middle/thumb/pic5.jpg" data-src="images/gallery/image-5.jpg" class="icon-bx-xs check-km" title="Image Title Come Here 1">
												<i class="ti-fullscreen"></i>
											</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Why Chose Us End -->

    </div>
    <!-- Content END-->
    @stop
