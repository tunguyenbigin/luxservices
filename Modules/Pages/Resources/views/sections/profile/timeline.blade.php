@extends('pages::profile')

@section('title')
{{ __('pages::profile.profile') }}
@stop

@section('c_content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header border-bottom-1" id="heading-links">
				<h4 class="card-title">Create Articles</h4>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				<div class="heading-elements">
					<a href="#" class="btn btn-sm btn-outline-success"><i class="ft-camera"></i> Images/Video</a>
					<a href="#" class="btn btn-sm btn-outline-danger"><i class="ft-video"></i> Live Video</a>
					<a href="#" class="btn btn-sm btn-outline-info"><i class="ft-calendar"></i> Events</a>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-1">
						<div class="cr-art-avt">
							<img src="{{ asset('storage/upload/users/1/avatar/10001_avatar.png') }}"  class="rounded-circle height-50" />
						</div>
					</div>
					<div class="col-11">
						<div class="cr-art-content">
							<textarea class="form-control border-0" placeholder="What in your mind?"></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer">
				<a href="#" class="btn btn-sm btn-outline-success btn-sm-custom line-height-2 round btn-default-custom"><i class="la la-camera"></i> Images/Video</a>
				<a href="#" class="btn btn-sm btn-outline-success btn-sm-custom line-height-2 round btn-default-custom"><i class="la la-smile-o"></i> Emotion/Activities</a>
				<a href="#" class="btn btn-sm btn-outline-success btn-sm-custom line-height-2 round btn-default-custom"><i class="la la-map-marker"></i> Check in</a>
			</div>
		</div>
	</div>
</div>
@stop