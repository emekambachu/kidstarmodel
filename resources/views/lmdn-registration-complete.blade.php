@extends('layouts.main')

@section('title')
    Registration Completed
@stop

@section('content')

<div class="dlab-bnr-inr dlab-bnr-inr overlay-primary bg-pt" style="background-image:url({{ asset('images/banner/bnr1.jpg') }});">
    <div class="container">
        <div class="dlab-bnr-inr-entry">
            <h1 class="text-white" style="font-family: 'Courgette', cursive;">Registration Completed</h1>
        </div>
    </div>
</div>

<div class="section-full content-inner bg-white contact-style-1">
    <div class="container">

        <div class="row">
            <!-- right part start -->
            <div class="col-lg-12 col-md-12 d-flex">
                <div class="p-a30 border m-b30 contact-area border-1 align-self-stretch ">
                    <h5 style="font-family: 'Courgette', cursive;">Congratulations on starting your journey as a Little Miss Damsel Nigeria Model</h5>
                    <p>Your registration has been completed, once your payment is confirmed, you would get a confirmation email and proceed with your application.<br>
                    Check our social media below for more details on our events</p>
                    <div class="m-t20">
                        <ul class="dlab-social-icon dlab-social-icon-lg">
                            <li><a href="https://web.facebook.com/kidstarmodels/?_rdc=1&_rdr" class="fa fa-facebook bg-primary"></a></li>
                            <li><a href="https://www.instagram.com/kid_starmodels/" class="fa fa-instagram bg-primary"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- right part END -->
        </div>

    </div>
</div>
@stop
