@extends('themes::layouts.backend')

@section('title')
	@yield('title')
@stop

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('storage/app-assets/css/pages/users.min.css') }}">
@stop

@section('content')
	<div class="content-header row"></div>
	<div class="content-body">
		<div id="user-profile">
			<div class="row">
	            <div class="col-12">
		            @include('pages::sections.profile.parts.header')

			        <div class="row">
	                	<div class="col-4">
	                		@include('pages::sections.profile.parts.sidebar')
	                	</div>
	                	<div class="col-8">
	                		@yield('c_content')
	                	</div>
	                </div>
	              
	            </div>
	          </div>
		</div>
	</div>
@stop
