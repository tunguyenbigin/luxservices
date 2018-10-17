@extends('themes::layouts.master')

@section('title')
    {{ trans('pages::faq.faq') }}
@stop

@section('content')
    <!-- INNER PAGE BANNER -->
    @component('pages::components.innerPageBanner')
        @slot('background')
            {{ asset('storage/images/banner/faq-banner.jpg') }}
        @endslot
        @slot('title')
            {{ trans('pages::faq.faq_title') }}
        @endslot
    @endcomponent
    <!-- INNER PAGE BANNER END -->
    <!-- BREADCRUMB ROW -->
    @component('pages::components.breadcrumb')
        @slot('breadcrumbs', [['route'=>'#', 'title'=>trans('pages::faq.faq_title')]])
    @endcomponent
    <!-- BREADCRUMB ROW END -->

    <div class="section-full p-t80 p-b50">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- TITLE  START -->
                    <div class="p-tb30">
                        <h3 class="text-uppercase">{{ trans('pages::faq.faq_title') }}</h3>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                    </div>
                    <!-- TITLE  END -->

                    <!-- TOOGLE START -->
                    <div class="wt-accordion acc-bg-gray">

                        <div class="panel wt-panel">
                            <div class="acod-head">
                                <h6 class="acod-title text-uppercase">
                                    <a data-toggle="collapse" href="#collapseOne15"> <i class="fa fa-angle-double-right"></i>
                                        How do i make a perfect Beauty &amp; Spa plan?
                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseOne15" class="acod-body collapse">
                                <div class="acod-content p-tb15">Web design lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised sheets containing Lorem Ipsum passagese.</div>
                            </div>
                        </div>

                        <div class="panel wt-panel">
                            <div class="acod-head">
                                <h6 class="acod-title text-uppercase">
                                    <a data-toggle="collapse" href="#collapseTwo15" class="collapsed"> <i class="fa fa-angle-double-right"></i>
                                        How do I find out the status of my building permit application?
                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseTwo15" class="acod-body collapse">
                                <div class="acod-content p-tb15">Graphic design lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised sheets containing Lorem Ipsum passagese.</div>
                            </div>
                        </div>

                        <div class="panel wt-panel">
                            <div class="acod-head">
                                <h6 class="acod-title text-uppercase">
                                    <a data-toggle="collapse" href="#collapseThree15" class="collapsed"> <i class="fa fa-angle-double-right"></i>
                                        How can I schedule an inspection?
                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseThree15" class="acod-body collapse">
                                <div class="acod-content p-tb15">Developement lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised sheets containing Lorem Ipsum passagese.</div>
                            </div>
                        </div>

                        <div class="panel wt-panel">
                            <div class="acod-head">
                                <h6 class="acod-title text-uppercase">
                                    <a data-toggle="collapse" href="#collapseFour15"> <i class="fa fa-angle-double-right"></i>
                                        Do I need to have a business license to do a Beauty &amp; Spa project?
                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseFour15" class="acod-body collapse">
                                <div class="acod-content p-tb15">Web design lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised sheets containing Lorem Ipsum passagese.</div>
                            </div>
                        </div>

                        <div class="panel wt-panel">
                            <div class="acod-head">
                                <h6 class="acod-title text-uppercase">
                                    <a data-toggle="collapse" href="#collapseFive15" class="collapsed"> <i class="fa fa-angle-double-right"></i>
                                        What is the turnaround time for the approval of a building permit?
                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseFive15" class="acod-body collapse">
                                <div class="acod-content p-tb15">Graphic design lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised sheets containing Lorem Ipsum passagese.</div>
                            </div>
                        </div>

                        <div class="panel wt-panel">
                            <div class="acod-head">
                                <h6 class="acod-title text-uppercase">
                                    <a data-toggle="collapse" href="#collapseSix15" class="collapsed"> <i class="fa fa-angle-double-right"></i>
                                        How many copies of a plan do I need to turn in for permitting?
                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseSix15" class="acod-body collapse">
                                <div class="acod-content p-tb15">Developement lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised sheets containing Lorem Ipsum passagese.</div>
                            </div>
                        </div>

                        <div class="panel wt-panel">
                            <div class="acod-head">
                                <h6 class="acod-title text-uppercase">
                                    <a data-toggle="collapse" href="#collapseSeven15" class="collapsed"> <i class="fa fa-angle-double-right"></i>
                                        How long is a building permit valid?
                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseSeven15" class="acod-body collapse">
                                <div class="acod-content p-tb15">Developement lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised sheets containing Lorem Ipsum passagese.</div>
                            </div>
                        </div>

                    </div>
                    <!-- TOOGLE END -->

                </div>

                <!-- SIDE BAR START -->

                <!-- SIDE BAR END -->

            </div>
        </div>

    </div>
@stop