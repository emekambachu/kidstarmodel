@extends('layouts.main')

@section('title')
    Contact us
@stop

@section('content')

    <section class="page_title s-parallax s-overlay ls title-overlay s-py-25" style="background-position: 50% 1px;">
        <div class="container">
            <div class="row">

                <div class="fw-divider-space hidden-below-lg mt-130"></div>
                <div class="fw-divider-space hidden-above-lg mt-60"></div>

                <div class="col-md-12 text-center">
                    <h1 style="color: #653470;">Contact us</h1>
                </div>

                <div class="fw-divider-space hidden-below-lg mt-130"></div>
                <div class="fw-divider-space hidden-above-lg mt-60"></div>

            </div>
        </div>
    </section>

    <section class="ls">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.763954052123!2d6.995967514784657!3d4.810544896506629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069cf8c19d56521%3A0xa4bc124a74842c77!2sChristine%20By%20Nno%20Hotels%20%26%20Resorts!5e0!3m2!1sen!2sng!4v1573512478075!5m2!1sen!2sng" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

        <section class="background-contact s-pt-60 s-pt-lg-100 s-pt-xl-150 s-pb-60 s-pb-xl-90 c-mb-20 c-gutter-60">
            <div class="container">
                <div class="row">

                    <div class="fw-divider-space hidden-above-lg mt-20"></div>

                    <div class="col-lg-7 col-xl-8 animate animated scaleAppear" data-animation="scaleAppear">
                        <h3 class="mt-0 mb-35 text-capitalize">get in touch</h3>
                        <form class="contact-form c-mb-20 c-gutter-20" method="post" action="http://webdesign-finder.com/">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <i class="flaticon-profile"></i>
                                        <input type="text" name="name" class="form-control" placeholder="name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <i class="flaticon-volume"></i>
                                        <input type="tel" name="phone" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <i class="flaticon-envelope"></i>
                                        <input type="email" name="email" class="form-control" placeholder="email">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <i class="flaticon-clip"></i>
                                        <textarea rows="4" cols="45" name="message" class="form-control" placeholder="message"></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="fw-divider-space hidden-below-lg mt-60"></div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-maincolor">send message</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    <!--.col-* -->
                    <div class="col-lg-5 col-xl-4 animate animated scaleAppear" data-animation="scaleAppear">
                        <div class="fw-divider-space hidden-above-lg mt-40"></div>
                        <h3 class="mt-0 mb-25 text-capitalize">Contact info</h3>
                        <div class="media mb-15">
                            <h5 class="fs-20 mb-0 min-w-100">Address:</h5>
                            <div class="media-body ml-0 d-flex flex-column">
                                <span>6, Benjamin Opara St, G.R.A 2, Off Olu Obasanjo Road, Port Harcourt, Nigeria</span>
                            </div>
                        </div>
                        <div class="media mb-15">
                            <h5 class="fs-20 mb-0 min-w-100">Phone:</h5>
                            <div class="media-body ml-0 d-flex flex-column">
                                <span>+234 818 107 3065</span>
                            </div>
                        </div>
                        <div class="media mb-20">
                            <h5 class="fs-20 mb-30 min-w-100">Email:</h5>
                            <div class="media-body ml-0 d-flex flex-column">
                                <span>info@kidstarmodels.com</span>
                            </div>
                        </div>
                        <h3 class="mt-0 mb-20 text-capitalize">Open Hours</h3>
                        <div class="media mb-15">
                            <h5 class="fs-20 mb-0 min-w-100">Weekdays:</h5>
                            <div class="media-body ml-0 d-flex flex-column">
                                <span>9:00 - 17:00</span>
                            </div>
                        </div>
                        <div class="media mb-15">
                            <h5 class="fs-20 mb-0 min-w-100">Saturday:</h5>
                            <div class="media-body ml-0 d-flex flex-column">
                                <span>10:00 - 15:00</span>
                            </div>
                        </div>
                        <div class="media mb-15">
                            <h5 class="fs-20 mb-0 min-w-100">Sunday:</h5>
                            <div class="media-body ml-0 d-flex flex-column">
                                <span>CLosed</span>
                            </div>
                        </div>

                    </div>
                    <!--.col-* -->
                </div>
            </div>
        </section>
        <div class="fw-divider-space hidden-below-lg mt-50"></div>
        <div class="fw-divider-space hidden-xs hidden-above-lg mt-20"></div>
    </section>
@stop
