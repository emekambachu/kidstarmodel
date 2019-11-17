@extends('layouts.main')

@section('title')
    Gallery
@stop

@section('content')
    <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary bg-pt" style="background-image:url({{ asset('images/banner/bnr2.jpg') }});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white" style="font-family: 'Courgette', cursive;">Gallery</h1>
            </div>
        </div>
    </div>

    <div class="content-block">
        <div class="section-full content-inner-2 portfolio-box">
            <div class="container">
                <div class="section-head text-black text-center m-b20">
                    <h2 class="text-primary m-b10" style="font-family: 'Courgette', cursive;">Take a peek</h2>
                    <div class="dlab-separator-outer m-b0">
                        <div class="dlab-separator text-primary style-icon">
                            <i class="flaticon-spa text-primary"></i></div>
                    </div>
                </div>

                <div class="clearfix">
                    <ul id="masonry" class="dlab-gallery-listing gallery-grid-4 gallery mfp-gallery sp10" style="position: relative; height: 840.268px;">
                        <li class="web design card-container col-lg-3 col-md-4 col-sm-6 col-6" style="position: absolute; left: 0px; top: 0px;">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                    <a href="javascript:void(0);"> <img src="{{ asset('images/gallery/main/gall1.jpg') }}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a class="mfp-link" title="Image Title Come Here" href="{{ asset('images/gallery/main/gall1.jpg') }}"> <i class="ti-fullscreen"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="advertising branding photography card-container col-lg-3 col-md-4 col-sm-6 col-6" style="position: absolute; left: 233px; top: 0px;">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect dlab-img-effect ">
                                    <a href="javascript:void(0);"> <img src="{{ asset('images/gallery/main/gall2.jpg') }}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a class="mfp-link" title="Image Title Come Here" href="{{ asset('images/gallery/main/gall2.jpg') }}"> <i class="ti-fullscreen"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="branding design photography card-container col-lg-3 col-md-4 col-sm-6 col-6" style="position: absolute; left: 466px; top: 0px;">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                    <a href="javascript:void(0);">
                                        <img src="{{ asset('images/gallery/main/gall3.jpg') }}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a class="mfp-link" title="Image Title Come Here" href="{{ asset('images/gallery/main/gall3.jpg') }}"> <i class="ti-fullscreen"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="web design card-container col-lg-3 col-md-4 col-sm-6 col-6" style="position: absolute; left: 0px; top: 210px;">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                    <a href="javascript:void(0);"> <img src="{{ asset('images/gallery/main/gall4.jpg') }}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a class="mfp-link" title="Image Title Come Here" href="{{ asset('images/gallery/main/gall4.jpg') }}"> <i class="ti-fullscreen"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="web branding card-container col-lg-3 col-md-4 col-sm-6 col-6" style="position: absolute; left: 233px; top: 210px;">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                    <a href="javascript:void(0);"> <img src="{{ asset('images/gallery/main/gall5.jpg') }}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a class="mfp-link" title="Image Title Come Here" href="{{ asset('images/gallery/main/gall5.jpg') }}"> <i class="ti-fullscreen"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="advertising design photography card-container col-lg-3 col-md-4 col-sm-6 col-6" style="position: absolute; left: 466px; top: 210px;">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
                                    <a href="javascript:void(0);"> <img src="{{ asset('images/gallery/main/gall6.jpg') }}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a class="mfp-link" title="Image Title Come Here" href="{{ asset('images/gallery/main/gall6.jpg') }}"> <i class="ti-fullscreen"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="web branding card-container col-lg-3 col-md-4 col-sm-6 col-6" style="position: absolute; left: 0px; top: 420px;">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                    <a href="javascript:void(0);"> <img src="{{ asset('images/gallery/main/gall7.jpg') }}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a class="mfp-link" title="Image Title Come Here" href="{{ asset('images/gallery/main/gall7.jpg') }}"> <i class="ti-fullscreen"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="advertising design photography card-container col-lg-3 col-md-4 col-sm-6 col-6" style="position: absolute; left: 233px; top: 420px;">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect dlab-img-effect ">
                                    <a href="javascript:void(0);"> <img src="{{ asset('images/gallery/main/gall8.jpg') }}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a class="mfp-link" title="Image Title Come Here" href="{{ asset('images/gallery/main/gall8.jpg') }}"> <i class="ti-fullscreen"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="web photography card-container col-lg-3 col-md-4 col-sm-6 col-6" style="position: absolute; left: 466px; top: 420px;">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                    <a href="javascript:void(0);"> <img src="{{ asset('images/gallery/main/gall9.jpg') }}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a class="mfp-link" title="Image Title Come Here" href="{{ asset('images/gallery/main/gall9.jpg') }}"> <i class="ti-fullscreen"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="advertising branding card-container col-lg-3 col-md-4 col-sm-6 col-6" style="position: absolute; left: 0px; top: 630px;">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                    <a href="javascript:void(0);"> <img src="{{ asset('images/gallery/main/gall10.jpg') }}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a class="mfp-link" title="Image Title Come Here" href="{{ asset('images/gallery/main/gall10.jpg') }}"> <i class="ti-fullscreen"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="web design card-container col-lg-3 col-md-4 col-sm-6 col-6" style="position: absolute; left: 233px; top: 630px;">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                    <a href="javascript:void(0);"> <img src="{{ asset('images/gallery/main/gall11.jpg') }}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a class="mfp-link" title="Image Title Come Here" href="{{ asset('images/gallery/main/gall11.jpg') }}"> <i class="ti-fullscreen"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="advertising branding photography card-container col-lg-3 col-md-4 col-sm-6 col-6" style="position: absolute; left: 466px; top: 630px;">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
                                    <a href="javascript:void(0);"> <img src="{{ asset('images/gallery/main/gall12.jpg') }}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a class="mfp-link" title="Image Title Come Here" href="{{ asset('images/gallery/main/gall12.jpg') }}"> <i class="ti-fullscreen"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="advertising branding photography card-container col-lg-3 col-md-4 col-sm-6 col-6" style="position: absolute; left: 466px; top: 630px;">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
                                    <a href="javascript:void(0);"> <img src="{{ asset('images/gallery/main/gall13.jpg') }}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a class="mfp-link" title="Image Title Come Here" href="{{ asset('images/gallery/main/gall13.jpg') }}"> <i class="ti-fullscreen"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="advertising branding photography card-container col-lg-3 col-md-4 col-sm-6 col-6" style="position: absolute; left: 466px; top: 630px;">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
                                    <a href="javascript:void(0);"> <img src="{{ asset('images/gallery/main/gall14.jpg') }}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a class="mfp-link" title="Image Title Come Here" href="{{ asset('images/gallery/main/gall14.jpg') }}"> <i class="ti-fullscreen"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="advertising branding photography card-container col-lg-3 col-md-4 col-sm-6 col-6" style="position: absolute; left: 466px; top: 630px;">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
                                    <a href="javascript:void(0);"> <img src="{{ asset('images/gallery/main/gall15.jpg') }}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a class="mfp-link" title="Image Title Come Here" href="{{ asset('images/gallery/main/gall15.jpg') }}"> <i class="ti-fullscreen"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="advertising branding photography card-container col-lg-3 col-md-4 col-sm-6 col-6" style="position: absolute; left: 466px; top: 630px;">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
                                    <a href="javascript:void(0);"> <img src="{{ asset('images/gallery/main/gall16.jpg') }}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a class="mfp-link" title="Image Title Come Here" href="{{ asset('images/gallery/main/gall16.jpg') }}"> <i class="ti-fullscreen"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="advertising branding photography card-container col-lg-3 col-md-4 col-sm-6 col-6" style="position: absolute; left: 466px; top: 630px;">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
                                    <a href="javascript:void(0);"> <img src="{{ asset('images/gallery/main/gall17.jpg') }}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a class="mfp-link" title="Image Title Come Here" href="{{ asset('images/gallery/main/gall17.jpg') }}"> <i class="ti-fullscreen"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="advertising branding photography card-container col-lg-3 col-md-4 col-sm-6 col-6" style="position: absolute; left: 466px; top: 630px;">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
                                    <a href="javascript:void(0);"> <img src="{{ asset('images/gallery/main/gall18.jpg') }}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a class="mfp-link" title="Image Title Come Here" href="{{ asset('images/gallery/main/gall18.jpg') }}"> <i class="ti-fullscreen"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="advertising branding photography card-container col-lg-3 col-md-4 col-sm-6 col-6" style="position: absolute; left: 466px; top: 630px;">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
                                    <a href="javascript:void(0);"> <img src="{{ asset('images/gallery/main/gall19.jpg') }}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a class="mfp-link" title="Image Title Come Here" href="{{ asset('images/gallery/main/gall19.jpg') }}"> <i class="ti-fullscreen"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="advertising branding photography card-container col-lg-3 col-md-4 col-sm-6 col-6" style="position: absolute; left: 466px; top: 630px;">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
                                    <a href="javascript:void(0);"> <img src="{{ asset('images/gallery/main/gall20.jpg') }}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a class="mfp-link" title="Image Title Come Here" href="{{ asset('images/gallery/main/gall20.jpg') }}"> <i class="ti-fullscreen"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="advertising branding photography card-container col-lg-3 col-md-4 col-sm-6 col-6" style="position: absolute; left: 466px; top: 630px;">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
                                    <a href="javascript:void(0);"> <img src="{{ asset('images/gallery/main/gall21.jpg') }}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a class="mfp-link" title="Image Title Come Here" href="{{ asset('images/gallery/main/gall21.jpg') }}"> <i class="ti-fullscreen"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="advertising branding photography card-container col-lg-3 col-md-4 col-sm-6 col-6" style="position: absolute; left: 466px; top: 630px;">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
                                    <a href="javascript:void(0);"> <img src="{{ asset('images/gallery/main/gall22.jpg') }}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a class="mfp-link" title="Image Title Come Here" href="{{ asset('images/gallery/main/gall22.jpg') }}"> <i class="ti-fullscreen"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="advertising branding photography card-container col-lg-3 col-md-4 col-sm-6 col-6" style="position: absolute; left: 466px; top: 630px;">
                            <div class="dlab-box dlab-gallery-box">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
                                    <a href="javascript:void(0);"> <img src="{{ asset('images/gallery/main/gall23.jpg') }}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a class="mfp-link" title="Image Title Come Here" href="{{ asset('images/gallery/main/gall23.jpg') }}"> <i class="ti-fullscreen"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
