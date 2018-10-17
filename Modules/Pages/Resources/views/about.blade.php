@extends('themes::layouts.master')

@section('title')
    {{ trans('pages::contact.contact') }}
@stop

@section('content')
    <!-- INNER PAGE BANNER -->
    @component('pages::components.innerPageBanner')
        @slot('background')
            {{ asset('storage/images/banner/faq-banner.jpg') }}
        @endslot
        @slot('title')
            {{ trans('pages::contact.contact') }}
        @endslot
    @endcomponent
    <!-- INNER PAGE BANNER END -->
    <!-- BREADCRUMB ROW -->
    @component('pages::components.breadcrumb')
        @slot('breadcrumbs', [['route'=>'#', 'title'=>trans('pages::contact.contact')]])
    @endcomponent
    <!-- BREADCRUMB ROW END -->

    <!-- OUR TEAM MEMBER SECTION START -->
    <div class="section-full text-center wt-our-team bg-gray p-t80 p-b50">
        <div class="container">

            <!-- TITTLE START -->
            <div class="section-head text-center">
                <h3 class="text-uppercase">Our team</h3>
                <div class="wt-separator-outer">
                    <div class="wt-separator style-icon">
                        <i class="fa fa-leaf text-black"></i>
                        <span class="separator-left bg-primary"></span>
                        <span class="separator-right bg-primary"></span>
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
            <!-- TITLE END -->

            <div class="section-content">
                <div class="row">

                    <!-- COLUMNS 1 -->
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-tb15">
                        <div class="wt-team-one bg-white p-a10">
                            <div class="wt-team-media">
                                <a href="javascript:void(0);"><img src="{{ asset('storage/images/our-team/pic1.jpg') }}" alt=""></a>
                            </div>
                            <div class="wt-team-info text-center bg-white p-a10">
                                <h4 class="wt-team-title"><a href="javascript:void(0);">Richard Wagner</a></h4>
                                <p>Beauty Therapist</p>
                                <ul class="social-icons social-square social-dark">
                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 2 -->
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-tb15">
                        <div class="wt-team-one bg-white p-a10 ">
                            <div class="wt-team-media ">
                                <a href="javascript:void(0);"><img src="{{ asset('storage/images/our-team/pic2.jpg') }}" alt=""></a>
                            </div>
                            <div class="wt-team-info text-center bg-white p-a10">
                                <h4 class="wt-team-title"><a href="javascript:void(0);">Lisa Anderson</a></h4>
                                <p>Beauty Therapist</p>
                                <ul class="social-icons social-square social-dark">
                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 3 -->
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-tb15">
                        <div class="wt-team-one  bg-white p-a10">
                            <div class="wt-team-media">
                                <a href="javascript:void(0);"><img src="{{ asset('storage/images/our-team/pic3.jpg') }}" alt=""></a>
                            </div>
                            <div class="wt-team-info text-center bg-white p-a10">
                                <h4 class="wt-team-title"><a href="javascript:void(0);">Tommy Atkins</a></h4>
                                <p>Beauty Therapist</p>
                                <ul class="social-icons social-square social-dark">
                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 4 -->
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-tb15">
                        <div class="wt-team-one  bg-white p-a10">
                            <div class="wt-team-media">
                                <a href="javascript:void(0);"><img src="{{ asset('storage/images/our-team/pic4.jpg') }}" alt=""></a>
                            </div>
                            <div class="wt-team-info text-center bg-white p-a10">
                                <h4 class="wt-team-title"><a href="javascript:void(0);">John Halpern</a></h4>
                                <p>Beauty Therapist</p>
                                <ul class="social-icons social-square social-dark">
                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- OUR TEAM MEMBER SECTION END -->


    <!-- ABOUT COMPANY SECTION START -->
    <div class="section-full p-tb100">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-6 col-xs-100pc">
                    <div class="about-com-pic">
                        <img src="{{ asset('storage/images/about-pic2.jpg') }}" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-6 col-xs-100pc">
                    <div class="section-head text-left">
                        <h3 class="text-uppercase">About Company </h3>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown  galley.
                        </p>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged. It was popularised in the with the .
                        </p>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="about-types row">
                        <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc p-tb20">
                            <div class="wt-icon-box-wraper left">
                                <div class="icon-md text-primary">
                                    <a href="#" class="icon-cell p-t5 center-block"><i class="flaticon-female-hairs"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase m-b0">Waxing</h5>
                                    <p>Lorem ipsum dolor sit piscing sed diam nonmy end .</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc p-tb20 ">
                            <div class="wt-icon-box-wraper left">
                                <div class="icon-md text-primary">
                                    <a href="#" class="icon-cell p-t5 center-block"><i class="flaticon-eye"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase m-b0">Hair Makeup</h5>
                                    <p>Lorem ipsum dolor sit piscing sed diam nonmy end .</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc p-tb20 ">
                            <div class="wt-icon-box-wraper left">
                                <div class="icon-md text-primary">
                                    <a href="#" class="icon-cell p-t5 center-block"><i class="flaticon-mirror"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase m-b0 ">Facial</h5>
                                    <p>Lorem ipsum dolor sit piscing sed diam nonmy end .</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc p-tb20 ">
                            <div class="wt-icon-box-wraper left">
                                <div class="icon-md text-primary">
                                    <a href="#" class="icon-cell p-t5 center-block"><i class="flaticon-spray-bottle" aria-hidden="true"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase m-b0">Massage</h5>
                                    <p>Lorem ipsum dolor sit piscing sed diam nonmy end .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT COMPANY SECTION END -->


    <!-- COMPANY DETAIL SECTION START -->
    <div class="section-full p-t50 p-b50 overlay-wraper bg-parallax" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('storage/images/background/bg4.jpg') }}); background-position: 50% 25.2969px;">
        <div class="overlay-main opacity-07 bg-black"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <div class="text-right text-white">
                        <h3 class="font-24">The Beauty &amp; Spa Company</h3>
                        <h1 class="font-60">AWESOME FACTS</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi. Curabitur tortor mi, eleifend ornare lobortis non. Nulla porta purus quis iaculis ultrices. Proin aliquam sem at nibh hendrerit sagittis. Nullam ornare odio eu lacus tincidunt malesuada.</p>
                    </div>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-2 col-sm-4">
                    <div class="status-marks  text-white m-tb10">
                        <div class="status-value text-right">
                            <span class="counter">1150</span>
                            <i class="fa fa-building font-26 m-l15"></i>
                        </div>
                        <h6 class="text-uppercase text-white text-right">PROJECT COMPLETED</h6>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="status-marks  text-white m-tb10">
                        <div class="status-value text-right">
                            <span class="counter">5223</span>
                            <i class="fa fa-users font-26 m-l15"></i>
                        </div>
                        <h6 class="text-uppercase text-white text-right">HAPPY CLIENTS</h6>
                    </div>
                </div>
                <div class="col-md-2 col-sm-">
                    <div class="status-marks  text-white m-tb10">
                        <div class="status-value text-right">
                            <span class="counter">4522</span>
                            <i class="fa fa-user-plus font-26 m-l15"></i>
                        </div>
                        <h6 class="text-uppercase text-white text-right">WORKERS EMPLOYED</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COMPANY DETAIL SECTION END -->

    <!-- OUR BEST SERVICES SECTION  START-->
    <div class="section-full text-center p-t80 p-b50 bg-gray">
        <div class="container">

            <!-- TITLE START -->
            <div class="section-head">
                <h3 class="text-uppercase">Our best services</h3>
                <div class="wt-separator style-icon">
                    <i class="fa fa-leaf text-black"></i>
                    <span class="separator-left bg-primary"></span>
                    <span class="separator-right bg-primary"></span>
                </div>
            </div>
            <!-- TITLE END -->

            <!-- OUR BEST SERVICES BLOCKS START -->
            <div class="section-content no-col-gap">
                <div class="row">

                    <!-- COLUMNS 1 -->
                    <div class="col-md-4 col-sm-6 animate_line">
                        <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                            <div class="icon-md text-primary m-b20">
                                <a href="#" class="icon-cell"><i class="flaticon-cosmetics" aria-hidden="true"></i></a>
                            </div>
                            <div class="icon-content">
                                <h5 class="wt-tilte text-uppercase">Steam Bath</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 2 -->
                    <div class="col-md-4 col-sm-6 animate_line">
                        <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                            <div class="icon-md text-primary m-b20">
                                <a href="#" class="icon-cell"><i class="flaticon-blush"></i></a>
                            </div>
                            <div class="icon-content ">
                                <h5 class="wt-tilte text-uppercase">Herbal &amp; Natural</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 3 -->
                    <div class="col-md-4 col-sm-6 animate_line">
                        <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                            <div class="icon-md text-primary m-b20">
                                <a href="#" class="icon-cell"><i class="flaticon-combs"></i></a>
                            </div>
                            <div class="icon-content">
                                <h5 class="wt-tilte text-uppercase">Trained Professionals</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 4 -->
                    <div class="col-md-4 col-sm-6 animate_line">
                        <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                            <div class="icon-md text-primary m-b20">
                                <a href="#" class="icon-cell"><i class="flaticon-bronzer"></i></a>
                            </div>
                            <div class="icon-content">
                                <h5 class="wt-tilte text-uppercase">Naturally Spa</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 5 -->
                    <div class="col-md-4 col-sm-6 animate_line">
                        <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                            <div class="icon-md text-primary m-b20">
                                <a href="#" class="icon-cell"><i class="flaticon-hair-dryer"></i></a>
                            </div>
                            <div class="icon-content">
                                <h5 class="wt-tilte text-uppercase">Effective Treatments</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 6 -->
                    <div class="col-md-4 col-sm-6 animate_line">
                        <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                            <div class="icon-md text-primary m-b20">
                                <a href="#" class="icon-cell"><i class="flaticon-spa"></i></a>
                            </div>
                            <div class="icon-content">
                                <h5 class="wt-tilte text-uppercase">AESTHETICS</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- OUR BEST SERVICES BLOCKS END -->

        </div>
    </div>
    <!-- OUR BEST SERVICES SECTION  END-->

@stop