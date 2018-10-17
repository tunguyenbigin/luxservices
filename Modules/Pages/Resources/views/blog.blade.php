@extends('themes::layouts.master')

@section('title')
    {{ trans('pages::blog.news') }}
@stop

@section('content')
    <!-- INNER PAGE BANNER -->
    @component('pages::components.innerPageBanner')
        @slot('background')
            {{ asset('storage/images/banner/blog-banner.jpg') }}
        @endslot
        @slot('title')
            {{ trans('pages::blog.news') }}
        @endslot
    @endcomponent
    <!-- INNER PAGE BANNER END -->
    <!-- BREADCRUMB ROW -->
    @component('pages::components.breadcrumb')
        @slot('breadcrumbs', [['route'=>'#', 'title'=>trans('pages::blog.news')]])
    @endcomponent
    <!-- BREADCRUMB ROW END -->


    <div class="section-full p-t80 p-b50">
        <div class="container">

            <!-- BLOG POST START -->

            <!-- COLUMNS 1 -->
            <div class="blog-post blog-md date-style-1 clearfix">

                <div class="wt-post-media wt-img-effect zoom-slow">
                    <div class="embed-responsive embed-responsive-16by9"><iframe width="560" height="315" src="https://www.youtube.com/embed/de9Mhw2dU60"></iframe></div>

                </div>
                <div class="wt-post-info">

                    <div class="wt-post-title ">
                        <h3 class="post-title"><a href="javascript:void(0);">Blogpost With Youtube</a></h3>
                    </div>
                    <div class="wt-post-meta ">
                        <ul>
                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>20 Dec</strong> <span> 2017</span> </li>
                            <li class="post-author"><i class="fa fa-user"></i><a href="javascript:void(0);">By <span>John</span></a> </li>
                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:void(0);">0</a> </li>
                        </ul>
                    </div>
                    <div class="wt-post-text">
                        <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse beatae hic perferendis velit deserunt soluta iste repellendus officia in neque veniam debitis</p>
                    </div>
                    <div class="clearfix">
                        <div class="wt-post-readmore pull-left">
                            <a href="javascript:void(0);" title="READ MORE" rel="bookmark" class="site-button-link">Read More</a>
                        </div>
                        <div class="widget_social_inks pull-right">
                            <ul class="social-icons social-radius social-dark m-b0">
                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                    </div>


                </div>

            </div>
            <!-- COLUMNS 2 -->
            <div class="blog-post blog-md date-style-1 clearfix">

                <div class="wt-post-media wt-img-effect zoom-slow">
                    <div class="embed-responsive embed-responsive-16by9"><iframe src="https://player.vimeo.com/video/23534361" width="1000" height="563" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe></div>
                </div>
                <div class="wt-post-info">

                    <div class="wt-post-title ">
                        <h3 class="post-title"><a href="javascript:void(0);">Blogpost With Vimeo</a></h3>
                    </div>
                    <div class="wt-post-meta ">
                        <ul>
                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>20 Dec</strong> <span> 2017</span> </li>
                            <li class="post-author"><i class="fa fa-user"></i><a href="javascript:void(0);">By <span>John</span></a> </li>
                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:void(0);">0</a> </li>
                        </ul>
                    </div>
                    <div class="wt-post-text">
                        <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse beatae hic perferendis velit deserunt soluta iste repellendus officia in neque veniam debitis</p>
                    </div>
                    <div class="clearfix">
                        <div class="wt-post-readmore pull-left">
                            <a href="javascript:void(0);" title="READ MORE" rel="bookmark" class="site-button-link">Read More</a>
                        </div>
                        <div class="widget_social_inks pull-right">
                            <ul class="social-icons social-radius social-dark m-b0">
                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                    </div>


                </div>

            </div>
            <!-- COLUMNS 3 -->
            <div class="blog-post blog-md date-style-1 clearfix">

                <div class="wt-post-media">
                    <!--Fade slider-->
                    <div class="owl-carousel owl-fade-slider-one owl-btn-vertical-center owl-dots-bottom-right owl-loaded owl-drag">
                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1520px, 0px, 0px); transition: all 0s ease 0s; width: 2660px;"><div class="owl-item cloned" style="width: 350px; margin-right: 30px;"><div class="item">
                                        <div class="aon-thum-bx">
                                            <img src="{{ asset('storage/images/blog/grid/pic2.jpg') }}" alt="">
                                        </div>
                                    </div></div><div class="owl-item cloned" style="width: 350px; margin-right: 30px;"><div class="item">
                                        <div class="aon-thum-bx">
                                            <img src="{{ asset('storage/images/blog/grid/pic3.jpg') }}" alt="">
                                        </div>
                                    </div></div><div class="owl-item" style="width: 350px; margin-right: 30px;"><div class="item">
                                        <div class="aon-thum-bx">
                                            <img src="{{ asset('storage/images/blog/grid/pic1.jpg') }}" alt="">
                                        </div>
                                    </div></div><div class="owl-item" style="width: 350px; margin-right: 30px;"><div class="item">
                                        <div class="aon-thum-bx">
                                            <img src="{{ asset('storage/images/blog/grid/pic2.jpg') }}" alt="">
                                        </div>
                                    </div></div><div class="owl-item active" style="width: 350px; margin-right: 30px;"><div class="item">
                                        <div class="aon-thum-bx">
                                            <img src="{{ asset('storage/images/blog/grid/pic3.jpg') }}" alt="">
                                        </div>
                                    </div></div><div class="owl-item cloned" style="width: 350px; margin-right: 30px;"><div class="item">
                                        <div class="aon-thum-bx">
                                            <img src="{{ asset('storage/images/blog/grid/pic1.jpg') }}" alt="">
                                        </div>
                                    </div></div><div class="owl-item cloned" style="width: 350px; margin-right: 30px;"><div class="item">
                                        <div class="aon-thum-bx">
                                            <img src="{{ asset('storage/images/blog/grid/pic2.jpg') }}" alt="">
                                        </div>
                                    </div></div></div></div><div class="owl-nav"><div class="owl-prev"><i class="fa fa-chevron-left"></i></div><div class="owl-next"><i class="fa fa-chevron-right"></i></div></div><div class="owl-dots"><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot active"><span></span></div></div></div>
                    <!--fade slider END-->
                </div>

                <div class="wt-post-info">

                    <div class="wt-post-title ">
                        <h3 class="post-title"><a href="javascript:void(0);">Blogpost With Image slider</a></h3>
                    </div>
                    <div class="wt-post-meta ">
                        <ul>
                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>20 Dec</strong> <span> 2017</span> </li>
                            <li class="post-author"><i class="fa fa-user"></i><a href="javascript:void(0);">By <span>John</span></a> </li>
                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:void(0);">0</a> </li>
                        </ul>
                    </div>

                    <div class="wt-post-text">
                        <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse beatae hic perferendis velit deserunt soluta iste repellendus officia in neque veniam debitis</p>
                    </div>

                    <div class="clearfix">
                        <div class="wt-post-readmore pull-left">
                            <a href="javascript:void(0);" title="READ MORE" rel="bookmark" class="site-button-link">Read More</a>
                        </div>
                        <div class="widget_social_inks pull-right">
                            <ul class="social-icons social-radius social-dark m-b0">
                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                    </div>



                </div>

            </div>
            <!-- COLUMNS 4 -->
            <div class="blog-post blog-md date-style-1 clearfix">

                <div class="wt-post-media wt-img-effect zoom-slow">
                    <a href="javascript:void(0);"><img src="{{ asset('storage/images/blog/grid/pic4.jpg') }}" alt=""></a>
                </div>
                <div class="wt-post-info">

                    <div class="wt-post-title ">
                        <h3 class="post-title"><a href="javascript:void(0);">Blogpost With Image</a></h3>
                    </div>
                    <div class="wt-post-meta ">
                        <ul>
                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>20 Dec</strong> <span> 2017</span> </li>
                            <li class="post-author"><i class="fa fa-user"></i><a href="javascript:void(0);">By <span>John</span></a> </li>
                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:void(0);">0</a> </li>
                        </ul>
                    </div>
                    <div class="wt-post-text">
                        <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse beatae hic perferendis velit deserunt soluta iste repellendus officia in neque veniam debitis</p>
                    </div>
                    <div class="clearfix">
                        <div class="wt-post-readmore pull-left">
                            <a href="javascript:void(0);" title="READ MORE" rel="bookmark" class="site-button-link">Read More</a>
                        </div>
                        <div class="widget_social_inks pull-right">
                            <ul class="social-icons social-radius social-dark m-b0">
                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                    </div>


                </div>

            </div>
            <!-- BLOG POST END -->

            <!-- PAGINATION START -->
            <div class="pagination-bx clearfix ">
                <ul class="custom-pagination pagination">
                    <li><a href="#">«</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
            <!-- PAGINATION END -->

        </div>
    </div>
@stop