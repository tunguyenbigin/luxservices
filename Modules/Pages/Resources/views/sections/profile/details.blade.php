@extends('pages::profile')

@section('title')
{{ __('pages::profile.profile') }}
@stop

@section('c_content')
<div class="row">
	<div class="col-12">
		<div class="card" style="min-height: 380px;" id="card-profile-personal">
			<div class="card-header">
				<h4 class="card-title">Personal Informations
					<small class="text-muted"></small>
				</h4>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				<div class="heading-elements">
					<ul class="list-inline mb-0">
						<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
						<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
						<li><a data-action="edit"><i class="ft-edit-2"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="card-content">
				<div class="card-body">
					<div class="card-text">
						<dl class="row">
							<dt class="col-sm-3">Nick Name</dt>
							<dd class="col-sm-9"><span class="replace-input" data-type="text" data-name="nickName" data-class="form-control input-sm" data-original-value="{{ $profile->nickName }}">{{ $profile->nickName }}</span></dd>
						</dl>
						<dl class="row">
							<dt class="col-sm-3">Full Name</dt>
							<dd class="col-sm-9"><span class="replace-input" data-type="text" data-name="name" data-class="form-control input-sm" data-original-value="{{ $profile->name }}">{{ $profile->name }}</span></dd>
						</dl>
						<dl class="row">
							<dt class="col-sm-3">Gender</dt>
							<dd class="col-sm-9"><span class="replace-input" data-type="select" data-name="gender" data-selected="{{$profile->gender}}" data-class="form-control input-sm" data-original-value="{{ !$profile->gender.'=Male,'.$profile->gender.'=Female' }}">{{ $profile->gender ? 'Male' : 'Female' }}</span></dd>
						</dl>
						<dl class="row">
							<dt class="col-sm-3">Job</dt>
							<dd class="col-sm-9"><span class="replace-input" data-type="text" data-name="job" data-class="form-control input-sm" data-original-value="{{ $profile->job }}">{{ $profile->job }}</span></dd>
						</dl>
						<dl class="row">
							<dt class="col-sm-3">Birthday</dt>
							<dd class="col-sm-9"><span class="replace-input" data-type="datepicker" data-name="birthday" data-class="form-control input-sm" data-original-value="{{ \Carbon\Carbon::parse($profile->birthday)->format('d-m-Y') }}" data-id="birthday">{{ \Carbon\Carbon::parse($profile->birthday)->format('d-m-Y') }}</span></dd>
						</dl>
						<dl class="row">
							<dt class="col-sm-3">Address</dt>
							<dd class="col-sm-9"><span class="replace-input" data-type="textarea" data-original-value="{{ $profile->address }}" data-name="address" data-class="form-control input-sm">{{ $profile->address }}</span></dd>
						</dl>
						<!--dl class="row">
							<dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
							<dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
							nibh, ut fermentum massa justo sit amet risus.</dd>
						</dl-->
						
					</div>
				</div>
			</div>
		
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xl-4 col-md-6 col-12">
		<div class="card profile-card-with-cover">
			<div class="card-content">
				<div class="card-img-top img-fluid bg-cover height-150" style="background: url('') 50% 50%;">
				</div>
				<div class="card-profile-image">
					<img src="" class="rounded-circle img-border box-shadow-1" alt="Card image">
				</div>
				<div class="profile-card-with-cover-content text-center">
					<div class="profile-details mt-2">
						<h4 class="card-title">Linda Holland</h4>
						<ul class="list-inline clearfix mt-2">
							<li class="mr-3">
								<h2 class="block">3.5K</h2> Likes
							</li>
							<li>
								<h2 class="block">645</h2> Following
							</li>
						</ul>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-4 col-md-6 col-12">
		<div class="card profile-card-with-cover">
			<div class="card-content">
				<div class="card-img-top img-fluid bg-cover height-150" style="background: url('') 50% 50%;"></div>
				<div class="card-profile-image">
					<img src="" class="rounded-circle img-border box-shadow-1" alt="Card image">
				</div>
				<div class="profile-card-with-cover-content text-center">
					<div class="profile-details mt-2">
						<h4 class="card-title">Philip Garrett</h4>
						<ul class="list-inline clearfix mt-2">
							<li class="mr-3">
								<h2 class="block">500+</h2> Connections
							</li>
							<li>
								<h2 class="block">35</h2> Following
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-4 col-md-6 col-12">
		<div class="card profile-card-with-cover">
			<div class="card-content">
				<div class="card-img-top img-fluid bg-cover height-150" style="background: url('') 50% 50%;"></div>
				<div class="card-profile-image">
					<img src="" alt="Card image">
				</div>
				<div class="profile-card-with-cover-content text-center">
					<div class="profile-details mt-2">
						<h4 class="card-title">Christine Wood</h4>
						<ul class="list-inline clearfix mt-2">
							<li class="mr-3">
								<h2 class="block">1.6K</h2> Likes
							</li>
							<li>
								<h2 class="block">85</h2> Following
							</li>
						</ul>
					</div>
								
				</div>
			</div>
		</div>
	</div>
@stop

@section('scripts')
	<script type="text/javascript">
		let api={
			users:{
				profile:{
					personal: '{{ route("users.profile.personal.update") }}'
				}
			}
		}
	</script>
	<script type="text/javascript" src="{{ asset('storage/js/users/profile_details.js') }}"></script>
@stop