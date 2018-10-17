@extends('themes::layouts.backend')

@section('title')
{{ __('pages::dashboard.dashboard') }}
@stop

@section('styles')

@stop

@section('content')
<div class="content-header row">
	<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
		<h3 class="content-header-title mb-0 d-inline-block">Our Services</h3>
		<div class="row breadcrumbs-top d-inline-block">
			<div class="breadcrumb-wrapper col-12">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a>
					</li>
					<li class="breadcrumb-item"><a href="#">Services</a>
					</li>
					<li class="breadcrumb-item active">Massage
					</li>
				</ol>
			</div>
		</div>
	</div>
	<div class="content-header-right col-md-6 col-12">
		<div class="dropdown float-md-right">
			<button class="btn btn-danger dropdown-toggle round btn-glow px-2" id="dropdownBreadcrumbButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
			<div class="dropdown-menu" aria-labelledby="dropdownBreadcrumbButton"><a class="dropdown-item" href="#"><i class="la la-calendar-check-o"></i> Calender</a>
				<a class="dropdown-item" href="#"><i class="la la-cart-plus"></i> Cart</a>
				<a class="dropdown-item" href="#"><i class="la la-life-ring"></i> Support</a>
				<div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="la la-cog"></i> Settings</a>
			</div>
		</div>
	</div>
</div>

<div class="content-body">
	<div class="row">
		<div class="col-xl-4 col-lg-6">
			<div class="card">
				<div class="card-content">
					<div class="card-body text-center">
						<p class="text-uppercase">You Are Purchasing</p>
						<h3 class="text-uppercase">Massage Thụy Điển</h3>
						<div class="rating">
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star-half-o"></i>
						</div>
						<img src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/apple-watch.png" alt="apple-watch" width="250px" class="img-fluid p-2">
						<button type="button" class="btn btn-success btn-block btn-glow text-uppercase p-1">Purchase</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6">
			<div class="card">
				<div class="card-content">
					<div class="card-body text-center">
						<p class="text-uppercase">You Are Purchasing</p>
						<h3 class="text-uppercase">Hương Liệu Pháp Massage</h3>
						<div class="rating">
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star-half-o"></i>
						</div>
						<img src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/fitbit-watch.png" alt="apple-watch" width="250px" class="img-fluid p-2">
						<button type="button" class="btn btn-danger btn-block btn-glow text-uppercase p-1">Purchase</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6">
			<div class="card">
				<div class="card-content">
					<div class="card-body text-center">
						<p class="text-uppercase">You Are Purchasing</p>
						<h3 class="text-uppercase">Massage Đá Nóng</h3>
						<div class="rating">
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star-half-o"></i>
						</div>
						<img src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/samsung-gear.png" alt="apple-watch" width="250px" class="img-fluid p-2">
						<button type="button" class="btn btn-warning btn-block btn-glow text-uppercase p-1">Purchase</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-4 col-lg-6">
			<div class="card">
				<div class="card-content">
					<div class="card-body text-center">
						<p class="text-uppercase">You Are Purchasing</p>
						<h3 class="text-uppercase">Massage Mô Sâu</h3>
						<div class="rating">
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star-half-o"></i>
						</div>
						<img src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/apple-watch.png" alt="apple-watch" width="250px" class="img-fluid p-2">
						<button type="button" class="btn btn-success btn-block btn-glow text-uppercase p-1">Purchase</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6">
			<div class="card">
				<div class="card-content">
					<div class="card-body text-center">
						<p class="text-uppercase">You Are Purchasing</p>
						<h3 class="text-uppercase">Bấm Huyệt Shiatsu</h3>
						<div class="rating">
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star-half-o"></i>
						</div>
						<img src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/fitbit-watch.png" alt="apple-watch" width="250px" class="img-fluid p-2">
						<button type="button" class="btn btn-danger btn-block btn-glow text-uppercase p-1">Purchase</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6">
			<div class="card">
				<div class="card-content">
					<div class="card-body text-center">
						<p class="text-uppercase">You Are Purchasing</p>
						<h3 class="text-uppercase">Massage Thái</h3>
						<div class="rating">
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star-half-o"></i>
						</div>
						<img src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/samsung-gear.png" alt="apple-watch" width="250px" class="img-fluid p-2">
						<button type="button" class="btn btn-warning btn-block btn-glow text-uppercase p-1">Purchase</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-4 col-lg-6">
			<div class="card">
				<div class="card-content">
					<div class="card-body text-center">
						<p class="text-uppercase">You Are Purchasing</p>
						<h3 class="text-uppercase">Massage Cho Bà Bầu</h3>
						<div class="rating">
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star-half-o"></i>
						</div>
						<img src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/apple-watch.png" alt="apple-watch" width="250px" class="img-fluid p-2">
						<button type="button" class="btn btn-success btn-block btn-glow text-uppercase p-1">Purchase</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6">
			<div class="card">
				<div class="card-content">
					<div class="card-body text-center">
						<p class="text-uppercase">You Are Purchasing</p>
						<h3 class="text-uppercase">Ấn Huyệt Đạo</h3>
						<div class="rating">
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star-half-o"></i>
						</div>
						<img src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/fitbit-watch.png" alt="apple-watch" width="250px" class="img-fluid p-2">
						<button type="button" class="btn btn-danger btn-block btn-glow text-uppercase p-1">Purchase</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6">
			<div class="card">
				<div class="card-content">
					<div class="card-body text-center">
						<p class="text-uppercase">You Are Purchasing</p>
						<h3 class="text-uppercase">Massage Lưng</h3>
						<div class="rating">
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star"></i>
							<i class="la la-star-half-o"></i>
						</div>
						<img src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/elements/samsung-gear.png" alt="apple-watch" width="250px" class="img-fluid p-2">
						<button type="button" class="btn btn-warning btn-block btn-glow text-uppercase p-1">Purchase</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop

@section('scripts')
@stop