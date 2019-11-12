@extends('layouts.main')

@section('title')
    About us
@stop

@section('content')

    <section class="page_title s-parallax s-overlay ls title-overlay s-py-25" style="background-position: 50% 1px;">
        <div class="container">
            <div class="row">

                <div class="fw-divider-space hidden-below-lg mt-130"></div>
                <div class="fw-divider-space hidden-above-lg mt-60"></div>

                <div class="col-md-12 text-center">
                    <h1 style="color: #653470;">About Us</h1>
                </div>

                <div class="fw-divider-space hidden-below-lg mt-130"></div>
                <div class="fw-divider-space hidden-above-lg mt-60"></div>

            </div>
        </div>
    </section>

    <section style="margin-bottom: 200px;" class="ls hello s-pt-50 s-pt-lg-100 s-pt-xl-150 c-mb-30 c-gutter-60">
        <div class="container">
            <div class="row">
                <div class="col-5 d-none d-md-block">
                    <img src="{{ asset('images/parallax/hello-bg.png') }}" alt="">
                </div>
                <div class="col-md-7 col-12">
                    <div class="divider-60 d-none d-xl-block"></div>
                    <div class="title-section text-center text-md-left">
                        <span class="sub-title absolute-subtitle">Welcome</span>
                        <h3 style="color: #653470;" class="special-heading"> <span><span>K</span>idstar <br></span>Modeling Agency</h3>
                    </div>
                    <div class="divider-60 d-none d-xl-block"></div>
                    <div class="row">

                        <div class="col-lg-6">
                            <p class="text-center text-md-left">Kid star models is a Nigeria port Harcourt-based organization. Registration no. 2511538 Vision “Kid star models has a broad vision for labor solidarity. We believe the entertainment community occupies a power platform to campaign for transformative change.</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="text-center text-md-left">To effect change, however, people working in the industry need to have a voice in their work. That “voice” can take many forms, from industry surveys to committee.</p>
                        </div>
                    </div>
                    <div class="divider-40 d-none d-xl-block"></div>

                </div>
            </div>
        </div>
    </section>

    <section style="padding: 150px 0" class="ls ms s-overlay s-parallax video-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 style="font-size: 35px;" class="special-heading text-center">
                        BECOME ONE OF KID STAR MODELS Kid star models children are selected based on an industry driven criteria of looks, personality, behavior, disposition, talent and availability to ensure that they are qualified to work in the entertainment business.
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="ls service s-pt-70 s-pb-20 s-pb-sm-60 s-py-lg-100 s-pt-xl-160 s-pb-xl-100 c-mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="vertical-item">
                        <div class="item-media">
                            <div class="media-image">
                                <img src="{{ asset('images/about/about1.png') }}" alt="" width="500" height="600">
                            </div>
                        </div>

                        <div class="item-content">
                            <h3 style="color: #653470;">Mission</h3>
                            <p>Mission Kid star models promotes fair treatment, equal opportunity, and sustainable practices in the modeling/ fashion industry, from the runway to the factory floor. <br><br>By assisting models and other stakeholders in understanding the laws applicable to them, and by encouraging them to have a voice in their work, kid star models common areas of concern in the modeling/fashion industry, conducts strategic research with leading research institutions to inform policy initiatives, and educates the children, parents, industry and the public about our core issues.</p>
                        </div>
                    </div>
                </div><!-- .col-* -->
                <div class="col-lg-12">

                    <div class="vertical-item">
                        <div class="item-media">
                            <div class="media-image">
                                <img src="{{ asset('images/about/about2.png') }}" alt="" width="500" height="600">
                            </div>
                        </div>
                        <div class="item-content">
                            <h3 style="color: #653470;">Vision</h3>
                            <p>This is determined by a personal interview with the child and both parents conducted by one of kid star models licensed agents at our corporate headquarters in GRA port Harcourt The interviewing process is very child-friendly and welcoming for the entire family.<br><br>
                                We are in this business because we adore and respect children, and we take pride in treating them as our family. If you would like to set up a personal interview with kid star models please call ( +234 8181 0730 65 ).</p>
                        </div>
                    </div>
                </div><!-- .col-* -->

            </div>

        </div>
    </section>
@stop
