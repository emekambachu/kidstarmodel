@extends('layouts.main')

@section('title')
    Contact us
@stop

@section('content')

    <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary bg-pt" style="background-image:url({{ asset('images/banner/bnr1.jpg') }});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Contact Us</h1>
            </div>
        </div>
    </div>

    <div class="section-full content-inner bg-white contact-style-1">
        <div class="container">

            <div class="row">
                <!-- right part start -->
                <div class="col-lg-6 col-md-6 d-flex">
                    <div class="p-a30 border m-b30 contact-area border-1 align-self-stretch ">
                        <h4 class="m-b10">Quick Contact</h4>
                        <p>If you have any questions simply use the following contact details.</p>
                        <ul class="no-margin">
                            <li class="icon-bx-wraper left m-b30">
                                <div class="icon-bx-xs border-1"> <a href="#" class="icon-cell"><i class="ti-location-pin"></i></a> </div>
                                <div class="icon-content">
                                    <h6 class="text-uppercase m-tb0 dlab-tilte">Address:</h6>
                                    <p>Plot f6 abacha road GRA, Port Harcourt, Rivers state, Nigeria</p>
                                </div>
                            </li>
                            <li class="icon-bx-wraper left  m-b30">
                                <div class="icon-bx-xs border-1"> <a href="#" class="icon-cell"><i class="ti-email"></i></a> </div>
                                <div class="icon-content">
                                    <h6 class="text-uppercase m-tb0 dlab-tilte">Email:</h6>
                                    <p>info@kidstarmodels.com</p>
                                </div>
                            </li>
                            <li class="icon-bx-wraper left">
                                <div class="icon-bx-xs border-1"> <a href="#" class="icon-cell"><i class="ti-mobile"></i></a> </div>
                                <div class="icon-content">
                                    <h6 class="text-uppercase m-tb0 dlab-tilte">PHONE</h6>
                                    <p>08181073065</p>
                                    <p>08091304065</p>
                                    <p>09014818914</p>
                                </div>
                            </li>
                        </ul>
                        <div class="m-t20">
                            <ul class="dlab-social-icon dlab-social-icon-lg">
                                <li><a href="https://web.facebook.com/kidstarmodels/?_rdc=1&_rdr" class="fa fa-facebook bg-primary"></a></li>
                                <li><a href="https://www.instagram.com/kid_starmodels/" class="fa fa-instagram bg-primary"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- right part END -->

                <!-- Left part start -->
                <div class="col-lg-6 col-md-6 m-b30">
                    <div class="p-a30 bg-gray clearfix">
                        <h4>Send us a message</h4>

                        @include('includes.alerts')

                        <form method="post" action="{{ url('submit-contact') }}">
                            @csrf
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="fullname" type="text" required="" class="form-control" placeholder="Full Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="mobile" type="tel" required="" class="form-control" placeholder="Your Mobile">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="email" type="email" class="form-control" required="" placeholder="Your Email">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <textarea name="yourmessage" rows="4" class="form-control" required="" placeholder="Your Message..."></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            {!! NoCaptcha::renderJs() !!}
                                            {!! NoCaptcha::display() !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button name="submit" type="submit" value="Submit" class="site-button"> <span>Submit</span> </button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
                <!-- Left part END -->

            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 d-flex m-b30">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.739384999036!2d6.987200614201693!3d4.81475029650362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069ce8a3d7d0075%3A0xe661672f692182cf!2sSani%20Abacha%20Road%2C%20Rumueme%2C%20Port%20Harcourt!5e0!3m2!1sen!2sng!4v1573651868471!5m2!1sen!2sng" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>

        </div>
    </div>
@stop
