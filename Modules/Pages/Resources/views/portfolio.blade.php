@extends('themes::layouts.master')

@section('title')
    {{ trans('pages::portfolio.portfolio') }}
@stop

@section('content')
    <!-- INNER PAGE BANNER -->
    @component('pages::components.innerPageBanner')
        @slot('background')
            {{ asset('storage/images/banner/our-team-banner.jpg') }}
        @endslot
        @slot('title')
            {{ trans('pages::portfolio.portfolio') }}
        @endslot
    @endcomponent
    <!-- INNER PAGE BANNER END -->
    <!-- BREADCRUMB ROW -->
    @component('pages::components.breadcrumb')
        @slot('breadcrumbs', [['route'=>'#', 'title'=>trans('pages::portfolio.portfolio')]])
    @endcomponent
    <!-- BREADCRUMB ROW END -->

    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">

            <!-- PAGINATION START -->
            <div class="filter-wrap p-tb15">
                <ul class="masonry-filter link-style  text-uppercase">
                    <li class="active"><a data-filter="*" href="#">All</a></li>
                    <li><a data-filter=".cat-1" href="#">Spa</a></li>
                    <li><a data-filter=".cat-2" href="#">Hair Makeup</a></li>
                    <li><a data-filter=".cat-3" href="#">Waxing</a></li>
                    <li><a data-filter=".cat-4" href="#">Facial</a></li>
                    <li><a data-filter=".cat-5" href="#">Massage</a></li>
                </ul>
            </div>
            <!-- PAGINATION END -->

            <!-- GALLERY START -->
            <div class="row">
                <div class="portfolio-wrap mfp-gallery no-col-gap">

                    <!-- COLUMNS 1 -->
                    <div class="masonry-item cat-1 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xs-100pc">
                        <div class="wt-box p-a20">
                            <div class="wt-thum-bx wt-img-effect zoom">
                                <img src="{{ asset('storage/images/portfolio/pic2.jpg') }}" alt="">
                            </div>
                            <div class="wt-info">
                                <h4 class="wt-title m-t20"><a href="javascript:void(0);">Back Massage</a></h4>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which whole heart . </p>
                                <a href="javascript:void(0);" class="site-button ">More  <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 2 -->
                    <div class="masonry-item cat-2 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xs-100pc">
                        <div class="wt-box p-a20">
                            <div class="wt-thum-bx wt-img-effect zoom">
                                <img src="{{ asset('storage/images/portfolio/pic3.jpg') }}" alt="">
                            </div>
                            <div class="wt-info">
                                <h4 class="wt-title m-t20"><a href="javascript:void(0);">Head Massage </a></h4>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which whole heart . </p>
                                <a href="javascript:void(0);" class="site-button ">More  <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 3 -->
                    <div class="masonry-item cat-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xs-100pc">
                        <div class="wt-box p-a20">
                            <div class="wt-thum-bx wt-img-effect zoom">
                                <img src="{{ asset('storage/images/portfolio/pic4.jpg') }}" alt="">
                            </div>
                            <div class="wt-info">
                                <h4 class="wt-title m-t20"><a href="javascript:void(0);">Body Scrub</a></h4>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which whole heart . </p>
                                <a href="javascript:void(0);" class="site-button ">More  <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 4 -->
                    <div class="masonry-item cat-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xs-100pc">
                        <div class="wt-box p-a20">
                            <div class="wt-thum-bx wt-img-effect zoom">
                                <img src="{{ asset('storage/images/portfolio/pic5.jpg') }}" alt="">
                            </div>
                            <div class="wt-info">
                                <h4 class="wt-title m-t20"><a href="javascript:void(0);">Aromatherapy Massage</a></h4>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which whole heart . </p>
                                <a href="javascript:void(0);" class="site-button ">More  <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 5 -->
                    <div class="masonry-item cat-5 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xs-100pc">
                        <div class="wt-box p-a20">
                            <div class="wt-thum-bx wt-img-effect zoom">
                                <img src="{{ asset('storage/images/portfolio/pic6.jpg') }}" alt="">
                            </div>
                            <div class="wt-info">
                                <h4 class="wt-title m-t20"><a href="javascript:void(0);">Massages & Body</a></h4>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which whole heart . </p>
                                <a href="javascript:void(0);" class="site-button ">More  <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 6 -->
                    <div class="masonry-item cat-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xs-100pc">
                        <div class="wt-box p-a20">
                            <div class="wt-thum-bx wt-img-effect zoom">
                                <img src="{{ asset('storage/images/portfolio/pic7.jpg') }}" alt="">
                            </div>
                            <div class="wt-info">
                                <h4 class="wt-title m-t20"><a href="javascript:void(0);">Beauty Spa</a></h4>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which whole heart . </p>
                                <a href="javascript:void(0);" class="site-button ">More  <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 7 -->
                    <div class="masonry-item cat-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xs-100pc">
                        <div class="wt-box p-a20">
                            <div class="wt-thum-bx wt-img-effect zoom">
                                <img src="{{ asset('storage/images/portfolio/pic8.jpg') }}" alt="">
                            </div>
                            <div class="wt-info">
                                <h4 class="wt-title m-t20"><a href="javascript:void(0);">Facial Spa</a></h4>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which whole heart . </p>
                                <a href="javascript:void(0);" class="site-button ">More  <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 8 -->
                    <div class="masonry-item cat-2 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xs-100pc">
                        <div class="wt-box p-a20">
                            <div class="wt-thum-bx wt-img-effect zoom">
                                <img src="{{ asset('storage/images/portfolio/pic1.jpg') }}" alt="">
                            </div>
                            <div class="wt-info">
                                <h4 class="wt-title m-t20"><a href="javascript:void(0);">Aromatherapy Massage</a></h4>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which whole heart . </p>
                                <a href="javascript:void(0);" class="site-button ">More  <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 9 -->
                    <div class="masonry-item cat-1 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xs-100pc">
                        <div class="wt-box p-a20">
                            <div class="wt-thum-bx wt-img-effect zoom">
                                <img src="{{ asset('storage/images/portfolio/pic2.jpg') }}" alt="">
                            </div>
                            <div class="wt-info">
                                <h4 class="wt-title m-t20"><a href="javascript:void(0);">Massages & Body</a></h4>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which whole heart . </p>
                                <a href="javascript:void(0);" class="site-button ">More  <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- GALLERY END -->

        </div>
    </div>
    <!-- SECTION CONTENT END  -->
@stop