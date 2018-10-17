@extends('themes::layouts.master')

@section('title')
    {{ trans('pages::ourTeam.ourTeam') }}
@stop

@section('content')
    <!-- INNER PAGE BANNER -->
    @component('pages::components.innerPageBanner')
        @slot('background')
            {{ asset('storage/images/banner/our-team-banner.jpg') }}
        @endslot
        @slot('title')
            {{ trans('pages::ourTeam.ourTeam') }}
        @endslot
    @endcomponent
    <!-- INNER PAGE BANNER END -->
    <!-- BREADCRUMB ROW -->
    @component('pages::components.breadcrumb')
        @slot('breadcrumbs', [['route'=>'#', 'title'=>trans('pages::ourTeam.ourTeam')]])
    @endcomponent
    <!-- BREADCRUMB ROW END -->

    <!-- TEAM STYLE FOUR START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">

            <div class=" m-b70">
                <!-- TITLE START -->
                <div class="section-head text-center">
                    <h3 class="text-uppercase">Our Team</h3>
                    <div class="wt-separator-outer ">
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book has survived.</p>
                </div>
                <!-- TITLE END -->
            </div>
            <div class="section-content">
                <div class="row">

                    <!-- COLUMNS 1 -->
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                        <div class="wt-team-four">
                            <div class="wt-team-media">
                                <a href="javascript:void(0);"><img src="{{ asset('storage/images/our-team/pic1.jpg') }}" alt="" ></a>
                            </div>
                            <div class="wt-team-info">
                                <div class="wt-team-skew-block">
                                    <div class="social-icons-outer p-a20">
                                        <ul class="social-icons social-square social-dark white-border m-b0">
                                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a20">
                                    <h4 class="wt-team-title text-uppercase"><a href="javascript:void(0);">Richard Wagner</a></h4>
                                    <p>Building Worker</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 2 -->
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                        <div class="wt-team-four">
                            <div class="wt-team-media">
                                <a href="javascript:void(0);"><img src="{{ asset('storage/images/our-team/pic2.jpg') }}" alt="" ></a>
                            </div>
                            <div class="wt-team-info">
                                <div class="wt-team-skew-block">
                                    <div class="social-icons-outer p-a20">
                                        <ul class="social-icons social-square social-dark white-border m-b0">
                                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a20">
                                    <h4 class="wt-team-title text-uppercase"><a href="javascript:void(0);">Lisa Anderson</a></h4>
                                    <p>Building Worker</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 3 -->
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                        <div class="wt-team-four">
                            <div class="wt-team-media">
                                <a href="javascript:void(0);"><img src="{{ asset('storage/images/our-team/pic3.jpg') }}" alt="" ></a>
                            </div>
                            <div class="wt-team-info">
                                <div class="wt-team-skew-block">
                                    <div class="social-icons-outer p-a20">
                                        <ul class="social-icons social-square social-dark white-border m-b0">
                                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a20">
                                    <h4 class="wt-team-title text-uppercase"><a href="javascript:void(0);">Tommy Atkins</a></h4>
                                    <p>Building Worker</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 4 -->
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                        <div class="wt-team-four">
                            <div class="wt-team-media">
                                <a href="javascript:void(0);"><img src="{{ asset('storage/images/our-team/pic4.jpg') }}" alt="" ></a>
                            </div>
                            <div class="wt-team-info">
                                <div class="wt-team-skew-block">
                                    <div class="social-icons-outer p-a20">
                                        <ul class="social-icons social-square social-dark white-border m-b0">
                                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a20">
                                    <h4 class="wt-team-title text-uppercase"><a href="javascript:void(0);">John Halpern</a></h4>
                                    <p>Building Worker</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 5 -->
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                        <div class="wt-team-four">
                            <div class="wt-team-media">
                                <a href="javascript:void(0);"><img src="{{ asset('storage/images/our-team/pic5.jpg') }}" alt="" ></a>
                            </div>
                            <div class="wt-team-info">
                                <div class="wt-team-skew-block">
                                    <div class="social-icons-outer p-a20">
                                        <ul class="social-icons social-square social-dark white-border m-b0">
                                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a20">
                                    <h4 class="wt-team-title text-uppercase"><a href="javascript:void(0);">Nicolas Cage</a></h4>
                                    <p>Building Worker</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 6 -->
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                        <div class="wt-team-four">
                            <div class="wt-team-media">
                                <a href="javascript:void(0);"><img src="{{ asset('storage/images/our-team/pic6.jpg') }}" alt="" ></a>
                            </div>
                            <div class="wt-team-info">
                                <div class="wt-team-skew-block">
                                    <div class="social-icons-outer p-a20">
                                        <ul class="social-icons social-square social-dark white-border m-b0">
                                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a20">
                                    <h4 class="wt-team-title text-uppercase"><a href="javascript:void(0);">Charlie Sheen</a></h4>
                                    <p>Building Worker</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 7 -->
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                        <div class="wt-team-four">
                            <div class="wt-team-media">
                                <a href="javascript:void(0);"><img src="{{ asset('storage/images/our-team/pic7.jpg') }}" alt="" ></a>
                            </div>
                            <div class="wt-team-info">
                                <div class="wt-team-skew-block">
                                    <div class="social-icons-outer p-a20">
                                        <ul class="social-icons social-square social-dark white-border m-b0">
                                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a20">
                                    <h4 class="wt-team-title text-uppercase"><a href="javascript:void(0);">Johnny Depp</a></h4>
                                    <p>Building Worker</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 8 -->
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                        <div class="wt-team-four">
                            <div class="wt-team-media">
                                <a href="javascript:void(0);"><img src="{{ asset('storage/images/our-team/pic8.jpg') }}" alt="" ></a>
                            </div>
                            <div class="wt-team-info">
                                <div class="wt-team-skew-block">
                                    <div class="social-icons-outer p-a20">
                                        <ul class="social-icons social-square social-dark white-border m-b0">
                                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a20">
                                    <h4 class="wt-team-title text-uppercase"><a href="javascript:void(0);">Leonardo Diaprio</a></h4>
                                    <p>Building Worker</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- PAGINATION -->
                <ul class="custom-pagination pagination">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- TEAM STYLE FOUR END -->
@stop