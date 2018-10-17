@extends('themes::layouts.master')

@section('title')
    {{ trans('pages::home.home') }}
@stop

@section('content')
    @include('themes::layouts.parts.front.slider')
    <!-- WELCOME SECTION START -->
    @include('pages::sections.home.wellcome')
    <!-- WELCOME COMPANY SECTION END -->

    <!-- OUR SERVICES SECTION START  -->
    @include('pages::sections.home.services')
    <!-- OUR SERVICES SECTION END  -->

    <!-- PRICING SECTION START  -->
    @include('pages::sections.home.pricing')
    <!-- PRICING SECTION END  -->

    <!-- COMPANY STATUS SECTION START -->
    @include('pages::sections.home.companyStatus')
    <!-- COMPANY STATUS SECTION END -->

    <!-- OUR EXPERTS SECTION START  -->
    @include('pages::sections.home.ourExpert')
    <!-- OUR EXPERTS SECTION END  -->

    <!-- OUR SPECIAL OFFER SECTION START  -->
    @include('pages::sections.home.specialOffer')
    <!-- OUR SPECIAL OFFER SECTION END  -->

    <!-- OUR GALLERY SECTION START  -->
    @include('pages::sections.home.ourGallery')
    <!-- OUR GALLERY SECTION END  -->

    <!-- OUR PRICING TABLE SECTION START  -->
    @include('pages::sections.home.pricingTable')
    <!-- OUR PRICING TABLE SECTION END  -->

    <!-- OUR PROJECTS SECTION START  -->
    @include('pages::sections.home.project')
    <!-- OUR PROJECTS SECTION END  -->

    <!-- LASTEST NEWS -->
    @include('pages::sections.home.lastestNews')
    <!-- LASTEST NEWS END -->

    <!-- OUR TESTIMONIAL SECTION START  -->

    <!-- OUR TESTIMONIAL SECTION END  -->

    <!-- CONTACT US SECTION START  -->
    @include('pages::sections.home.contact')
    <!-- CONTACT US SECTION END  -->

    <!-- OUR CLIENT SLIDER START -->
    @include('pages::sections.home.client')
    <!-- OUR CLIENT SLIDER END -->

@stop
