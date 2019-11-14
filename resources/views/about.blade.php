@extends('layouts.main')

@section('title')
    About us
@stop

@section('content')

    <div class="dlab-bnr-inr overlay-primary" style="background-image:url({{ asset('images/banner/bnr1.jpg') }});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">About Us</h1>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="page-content bg-white">

        <div class="section-full bg-white content-inner-2" style="background-image:url({{ asset('images/background/bg11.jpg') }}); background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 m-b30 align-self-center">
                        <div class="dis-tbl-cell  m-b30">
                            <h2 class="m-t0 m-b10" style="font-family: 'Courgette', cursive;">About Kidstar</h2>
                            <h6 class="fw7 m-b15">Kid Star Model is a modeling/fashion and design outfit in Port Harcourt with a high motive of spreading its principles all over the country and the world at large. We are the first Kids Modeling agency in Nigeria and we are very much focussed on giving the kids an early start so they can reach the zenith of goals and career while still in their prime.</h6>
                            <p class="fw7 m-b15">This is why we teach them finesse, good morals, extra-curricular activities, poise and art of fashion and design especially in the African sense of beauty. The age range for our models is 5 - 11.</p>
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
                    <div class="col-xl-3 p-a0 col-md-6 col-lg-3 col-xs-12 equal-col dis-tbl" style="height: 479px; background-color: #8A2BE2;">
                        <div class="p-a30 text-white dis-tbl-cell wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                            <p>BECOME ONE OF KID STAR MODELS Kid star models children are selected based on an industry driven criteria of looks, personality, behavior, disposition, talent and availability to ensure that they are qualified to work in the entertainment business.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 p-a0 col-xs-12 equal-col" style="height: 479px;">
                        <img src="{{ asset('images/about/img1.jpg') }}" class="abt-img img-cover equal-col" alt="" style="height: 479px;">
                    </div>
                    <div class="bg-primary col-xl-3 p-a0 col-md-6 col-lg-3 col-xs-12 equal-col dis-tbl" style="height: 479px;">
                        <div class="p-a30 text-white dis-tbl-cell wow fadeIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                            <p>We are in this business because we adore and respect children, and we take pride in treating them as our family. If you would like to set up a personal interview with kid star models please call ( +234 8181 0730 65 ).</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 p-a0 col-xs-12 equal-col" style="height: 479px;">
                        <img src="{{ asset('images/about/img2.jpg') }}" class="abt-img img-cover equal-col" alt="" style="height: 479px;">
                    </div>
                </div>
            </div>
        </div>

        <div class="section-full bg-white content-inner">
            <div class="container">

                <div class="section-head text-black text-center">
                    <h2 class="text-primary m-b10">Our Mission</h2>
                    <div class="dlab-separator-outer m-b0">
                        <div class="dlab-separator text-primary style-icon">
                            <i class="flaticon-spa text-primary"></i></div>
                    </div>
                    <p>Mission Kid star models promotes fair treatment, equal opportunity, and sustainable practices in the modeling/ fashion industry, from the runway to the factory floor. By assisting models and other stakeholders in understanding the laws applicable to them, and by encouraging them to have a voice in their work, kid star models common areas of concern in the modeling/fashion industry, conducts strategic research with leading research institutions to inform policy initiatives, and educates the children, parents, industry and the public about our core issues.<br><br>
                        Kid star models is a Nigeria port Harcourt-based organization. Registration no. 2511538 Vision “Kid star models has a broad vision for labor solidarity. We believe the entertainment community occupies a power platform to campaign for transformative change. To effect change, however, people working in the industry need to have a voice in their work. That “voice” can take many forms, from industry surveys to committee.</p>
                </div>

                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                        <div class="service-box text-center">
                            <div class="service-images m-b15">
                                <img src="{{ asset('images/about/about1.png') }}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                        <div class="service-box text-center">
                            <div class="service-images m-b15">
                                <img src="{{ asset('images/about/about2.png') }}" alt="">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="section-head text-black text-center">
                    <h2 class="text-primary m-b10">Our Vision</h2>
                    <div class="dlab-separator-outer m-b0">
                        <div class="dlab-separator text-primary style-icon">
                            <i class="flaticon-spa text-primary"></i></div>
                    </div>
                    <p>Kid star models is a Nigeria port Harcourt-based organization. Registration no. 2511538 Vision “Kid star models has a broad vision for labor solidarity. We believe the entertainment community occupies a power platform to campaign for transformative change. To effect change, however, people working in the industry need to have a voice in their work. That “voice” can take many forms, from industry surveys to committee.</p>
                </div>

            </div>
        </div>

    </div>
    <!-- Content END-->
@stop
