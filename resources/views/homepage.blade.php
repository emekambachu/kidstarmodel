@extends('layouts.main')

@section('title')
    Home
@stop

@section('content')

<!-- Content -->
<div class="page-content bg-white">
    <!-- Main Slider -->
    <div class="rev-slider">
        <div id="rev_slider_265_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container errow-style-1" data-alias="" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.4.6.3 fullwidth mode -->
            <div id="rev_slider_265_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.6.3">
                <ul>  <!-- SLIDE  -->
                    <li data-index="rs-100" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{ asset('images/main-slider/slide1.jpg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('images/main-slider/slide4.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <div class="tp-caption tp-shape tp-shapewrapper bg-primary tp-resizeme"
                             id="slide-100-layer-1"
                             data-x="['left','left','center','center']" data-hoffset="['30','30','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-1','-1','0','0']"
                             data-width="100"
                             data-height="5"
                             data-visibility="['on','on','off','off']"
                             data-whitespace="nowrap"
                             data-type="shape"
                             data-responsive_offset="off"
                             data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 15;border-color:rgba(0, 0, 0, 0.50);border-width:0px; border-radius:2px;"> </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-resizeme text-primary"
                             id="slide-100-layer-2"
                             data-x="['left','left','center','center']" data-hoffset="['30','30','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-70','-60']"
                             data-fontsize="['65','48','42','36']"
                             data-lineheight="['80','60','60','40']"
                             data-width="none"
                             data-height="none"
                             data-type="text"
                             data-responsive_offset="off"
                             data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 7; white-space: nowrap; font-size: 65px; line-height: 80px; font-weight: 800; letter-spacing: 0px; font-family: 'Courgette', cursive;">Welcome to</div>

                        <div class="tp-caption tp-resizeme text-primary"
                             id="slide-200-layer-3"
                             data-x="['left','left','center','center']" data-hoffset="['50','50','-50','-50']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-1','-1','-30','-30']"
                             data-fontsize="['65','48','42','36']"
                             data-lineheight="['80','60','60','40']"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[110,110,110,110]"
                             style="z-index: 7; white-space: nowrap; font-size: 65px; line-height: 80px; font-weight: 800; letter-spacing: 0px; font-family: 'Courgette', cursive;">Kids Star Models</div>

                        <div class="tp-caption tp-resizeme"
                             id="slide-100-layer-5"
                             data-x="['left','left','center','center']" data-hoffset="['30','30','-85','-70']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['200','200','50','50']"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-type="button"
                             data-actions=''
                             data-responsive_offset="on"
                             data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0]"
                             data-paddingright="[0]"
                             data-paddingbottom="[0]"
                             data-paddingleft="[0]"
                             style="z-index: 10; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:Montserrat;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">	<a href="{{ url('contact-us') }}" class="site-button button-md">Contact us</a>
                        </div>

                        <div class="tp-caption tp-resizeme"
                             id="slide-100-layer-6"
                             data-x="['left','left','center','center']" data-hoffset="['210','210','90','95']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['200','200','50','50']"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-type="button"
                             data-actions=''
                             data-responsive_offset="on"
                             data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0]"
                             data-paddingright="[0]"
                             data-paddingbottom="[0]"
                             data-paddingleft="[0]"
                             style="z-index: 11; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family: 'Courgette', cursive; border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">
                            <a href="{{ url('register') }}" class="site-button-secondry button-md">Register</a>
                        </div>

                    </li>

                    <li data-index="rs-200" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/main-slider/slide2.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('images/main-slider/slide1.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <div class="tp-caption tp-shape  tp-shapewrapper bg-primary tp-resizeme"
                             id="slide-200-layer-1"
                             data-x="['left','left','center','center']" data-hoffset="['30','30','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-1','-1','0','0']"
                             data-width="100"
                             data-height="5"
                             data-visibility="['on','on','off','off']"
                             data-whitespace="nowrap"
                             data-type="shape"
                             data-responsive_offset="off"
                             data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 15;border-color:rgba(0, 0, 0, 0.50);border-width:0px; border-radius:2px;"> </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-resizeme text-primary"
                             id="slide-200-layer-2"
                             data-x="['left','left','center','center']" data-hoffset="['30','30','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-70','-60']"
                             data-fontsize="['65','48','42','36']"
                             data-lineheight="['80','60','60','40']"
                             data-width="none"
                             data-height="none"
                             data-type="text"
                             data-responsive_offset="off"
                             data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 7; white-space: nowrap; font-size: 65px; line-height: 80px; font-weight: 800; letter-spacing: 0px; font-family: 'Courgette', cursive; color: #fff;">The First Kids Modeling</div>

                        <div class="tp-caption tp-resizeme text-primary"
                             id="slide-200-layer-3"
                             data-x="['left','left','center','center']" data-hoffset="['50','50','-50','-50']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-1','-1','-30','-30']"
                             data-fontsize="['65','48','42','36']"
                             data-lineheight="['80','60','60','40']"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[110,110,110,110]"
                             style="z-index: 7; white-space: nowrap; font-size: 65px; line-height: 80px; font-weight: 800; letter-spacing: 0px; font-family: 'Courgette', cursive; color: #fff;"> Agency in Nigeria</div>

                        <div class="tp-caption tp-resizeme"
                             id="slide-100-layer-5"
                             data-x="['left','left','center','center']" data-hoffset="['30','30','-85','-70']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['200','200','50','50']"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-type="button"
                             data-actions=''
                             data-responsive_offset="on"
                             data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0]"
                             data-paddingright="[0]"
                             data-paddingbottom="[0]"
                             data-paddingleft="[0]"
                             style="z-index: 10; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:Montserrat;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">	<a href="{{ url('contact-us') }}" class="site-button button-md">Contact us</a>
                        </div>

                        <div class="tp-caption tp-resizeme"
                             id="slide-200-layer-6"
                             data-x="['left','left','center','center']" data-hoffset="['210','210','90','95']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['200','200','50','50']"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-type="button"
                             data-actions=''
                             data-responsive_offset="on"
                             data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0]"
                             data-paddingright="[0]"
                             data-paddingbottom="[0]"
                             data-paddingleft="[0]"
                             style="z-index: 11; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:Montserrat;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">	<a href="{{ url('register') }}" class="site-button-secondry button-md">Register</a>
                        </div>

                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
        </div>
    </div>
    <!-- Main Slider -->

    <div class="section-full bg-white content-inner-2" style="background-image:url({{ asset('images/background/bg11.jpg') }}); background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 m-b30 align-self-center">
                    <div class="dis-tbl-cell  m-b30">
                        <h2 class="m-t0 m-b10" style="font-family: 'Courgette', cursive;">About Kidstar</h2>
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
                <div class="col-xl-3 p-a0 col-md-6 col-lg-3 col-xs-12 equal-col dis-tbl" style="height: 479px; background-color: #8A2BE2;">
                    <div class="p-a30 text-white dis-tbl-cell wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        <p>BECOME ONE OF KID STAR MODELS Kid star models children are selected based on an industry driven criteria of looks, personality, behavior, disposition, talent and availability to ensure that they are qualified to work in the entertainment business.</p>
                        <a href="{{ asset('about-us') }}" class="site-button white outline outline-2">Read More</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 p-a0 col-xs-12 equal-col" style="height: 479px;">
                    <img src="{{ asset('images/about/img1.jpg') }}" class="abt-img img-cover equal-col" alt="" style="height: 479px;">
                </div>
                <div class="bg-primary col-xl-3 p-a0 col-md-6 col-lg-3 col-xs-12 equal-col dis-tbl" style="height: 479px;">
                    <div class="p-a30 text-white dis-tbl-cell wow fadeIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                        <p>We are in this business because we adore and respect children, and we take pride in treating them as our family. If you would like to set up a personal interview with kid star models please call ( +234 8181 0730 65 ).</p>
                        <a href="{{ url('about-us') }}" class="site-button white">Read More</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 p-a0 col-xs-12 equal-col" style="height: 479px;">
                    <img src="{{ asset('images/about/img2.jpg') }}" class="abt-img img-cover equal-col" alt="" style="height: 479px;">
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery -->
    <div class="section-full content-inner-2 our-portfolio" style="background-image:url({{ asset('images/background/bg6.jpg') }}); background-size: cover;">
        <div class="container">
            <div class="section-head text-black text-center m-b20">
                <h2 class="text-primary m-b10" style="font-family: 'Courgette', cursive;">Gallery</h2>
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
                                <img width="385" height="385" src="{{ asset('images/gallery/gall1.png') }}" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
											<span data-exthumbimage="{{ asset('images/gallery/thumb/gall1.png') }}" data-src="{{ asset('images/gallery/image-1.jpg') }}" class="icon-bx-xs check-km" title="Image Title Come Here 1">
												<i class="ti-fullscreen"></i>
											</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dlab-box p-tb30 image-2">
                            <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                                <img width="385" height="385" src="{{ asset('images/gallery/gall2.png') }}" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
											<span data-exthumbimage="{{ asset('images/gallery/thumb/gall2.png') }}" data-src="{{ asset('images/gallery/image-2.jpg') }}" class="icon-bx-xs check-km" title="Image Title Come Here 1">
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
                                <img src="{{ asset('images/gallery/gall5.png') }}" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <span data-exthumbimage="{{ asset('images/gallery/thumb/gall5.png') }}" data-src="{{ asset('images/gallery/image-3.jpg') }}" class="icon-bx-xs check-km" title="Image Title Come Here 1">
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
                                <img width="385" height="385" src="{{ asset('images/gallery/gall4.png') }}" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
											<span data-exthumbimage="{{ asset('images/gallery/thumb/gall4.png') }}" data-src="images/gallery/image-4.jpg" class="icon-bx-xs check-km" title="Image Title Come Here 1">
												<i class="ti-fullscreen"></i>
											</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dlab-box">
                            <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                                <img width="385" height="385" src="{{ asset('images/gallery/gall3.png') }}" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
											<span data-exthumbimage="{{ asset('images/gallery/thumb/gall3.png') }}" data-src="images/gallery/image-5.jpg" class="icon-bx-xs check-km" title="Image Title Come Here 1">
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
