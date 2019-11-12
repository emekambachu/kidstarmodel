@extends('layouts.main')

@section('title')
    Gallery
@stop

@section('content')

    <section class="page_title s-parallax s-overlay ls title-overlay s-py-25" style="background-position: 50% 1px;">
        <div class="container">
            <div class="row">

                <div class="fw-divider-space hidden-below-lg mt-130"></div>
                <div class="fw-divider-space hidden-above-lg mt-60"></div>

                <div class="col-md-12 text-center">
                    <h1 style="color: #653470;">Gallery</h1>
                </div>

                <div class="fw-divider-space hidden-below-lg mt-130"></div>
                <div class="fw-divider-space hidden-above-lg mt-60"></div>

            </div>
        </div>
    </section>

    <section class="ls s-py-60 s-py-md-90 container-px-5">
        <div class="container-fluid">
            <div class="row">

                <div class="d-none d-lg-block divider-30"></div>

                <div class="col-lg-12">


                    <div class="row isotope-wrapper masonry-layout c-gutter-5 c-mb-30" data-filters=".gallery-filters" style="position: relative; height: 2916.9px;">

                        <div class="col-xl-3 col-sm-6 business news" style="position: absolute; left: 0%; top: 0px;">
                            <div class="vertical-item item-gallery content-absolute text-center ls">
                                <div class="item-media">
                                    <img src="{{ asset('images/gallery/gall1.png') }}" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title="" href="{{ asset('images/gallery/gall1.png') }}"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 innovations corporate" style="position: absolute; left: 49.9559%; top: 0px;">
                            <div class="vertical-item item-gallery content-absolute text-center ls">
                                <div class="item-media">
                                    <img src="{{ asset('images/gallery/gall2.png') }}" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title="" href="{{ asset('images/gallery/gall2.png') }}"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 entertainment news innovations" style="position: absolute; left: 49.9559%; top: 470px;">
                            <div class="vertical-item item-gallery content-absolute text-center ls">
                                <div class="item-media">
                                    <img src="{{ asset('images/gallery/gall3.png') }}" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title="" href="{{ asset('images/gallery/gall3.png') }}"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 business entertainment" style="position: absolute; left: 0%; top: 698px;">
                            <div class="vertical-item item-gallery content-absolute text-center ls">
                                <div class="item-media">
                                    <img src="{{ asset('images/gallery/gall4.png') }}" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title="" href="{{ asset('images/gallery/gall4.png') }}"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 innovations corporate" style="position: absolute; left: 49.9559%; top: 1093px;">
                            <div class="vertical-item item-gallery content-absolute text-center ls">
                                <div class="item-media">
                                    <img src="{{ asset('images/gallery/gall5.png') }}" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title="" href="{{ asset('images/gallery/gall5.png') }}"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 entertainment news corporate" style="position: absolute; left: 0%; top: 1169px;">
                            <div class="vertical-item item-gallery content-absolute text-center ls">
                                <div class="item-media">
                                    <img src="{{ asset('images/gallery/gall6.png') }}" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title="" href="{{ asset('images/gallery/gall6.png') }}"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 business news innovations" style="position: absolute; left: 49.9559%; top: 1564px;">
                            <div class="vertical-item item-gallery content-absolute text-center ls">
                                <div class="item-media">
                                    <img src="{{ asset('images/gallery/gall7.png') }}" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title="" href="{{ asset('images/gallery/gall7.png') }}"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 business entertainment corporate" style="position: absolute; left: 0%; top: 1823px;">
                            <div class="vertical-item item-gallery content-absolute text-center ls">
                                <div class="item-media">
                                    <img src="{{ asset('images/gallery/gall8.png') }}" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title="" href="{{ asset('images/gallery/gall8.png') }}"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 business news" style="position: absolute; left: 49.9559%; top: 2446px;">

                            <div class="vertical-item item-gallery content-absolute text-center ls">
                                <div class="item-media">
                                    <img src="{{ asset('images/gallery/gall9.png') }}" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title="" href="{{ asset('images/gallery/gall9.png') }}"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-3 col-sm-6 business news" style="position: absolute; left: 49.9559%; top: 2446px;">
                            <div class="vertical-item item-gallery content-absolute text-center ls">
                                <div class="item-media">
                                    <img src="{{ asset('images/gallery/gall10.png') }}" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title="" href="{{ asset('images/gallery/gall10.png') }}"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 business news" style="position: absolute; left: 49.9559%; top: 2446px;">
                            <div class="vertical-item item-gallery content-absolute text-center ls">
                                <div class="item-media">
                                    <img src="{{ asset('images/gallery/gall11.png') }}" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title="" href="{{ asset('images/gallery/gall11.png') }}"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 business news" style="position: absolute; left: 49.9559%; top: 2446px;">
                            <div class="vertical-item item-gallery content-absolute text-center ls">
                                <div class="item-media">
                                    <img src="{{ asset('images/gallery/gall12.png') }}" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title="" href="{{ asset('images/gallery/gall12.png') }}"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 business news" style="position: absolute; left: 49.9559%; top: 2446px;">
                            <div class="vertical-item item-gallery content-absolute text-center ls">
                                <div class="item-media">
                                    <img src="{{ asset('images/gallery/gall13.png') }}" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title="" href="{{ asset('images/gallery/gall13.png') }}"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 business news" style="position: absolute; left: 49.9559%; top: 2446px;">
                            <div class="vertical-item item-gallery content-absolute text-center ls">
                                <div class="item-media">
                                    <img src="{{ asset('images/gallery/gall14.png') }}" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title="" href="{{ asset('images/gallery/gall14.png') }}"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 business news" style="position: absolute; left: 49.9559%; top: 2446px;">
                            <div class="vertical-item item-gallery content-absolute text-center ls">
                                <div class="item-media">
                                    <img src="{{ asset('images/gallery/gall15.png') }}" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title="" href="{{ asset('images/gallery/gall15.png') }}"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 business news" style="position: absolute; left: 49.9559%; top: 2446px;">
                            <div class="vertical-item item-gallery content-absolute text-center ls">
                                <div class="item-media">
                                    <img src="{{ asset('images/gallery/gall16.png') }}" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title="" href="{{ asset('images/gallery/gall16.png') }}"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- .isotope-wrapper-->

                </div>

                <div class="d-none d-lg-block divider-70"></div>
            </div>

        </div>
    </section>
@stop
