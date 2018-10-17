@extends('themes::layouts.backend')

@section('title')
{{ __('pages::dashboard.dashboard') }}
@stop

@section('styles')

@stop

@section('content')
<div class="content-header row">
	<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
		<h3 class="content-header-title mb-0 d-inline-block">User Wallet</h3>
		<div class="row breadcrumbs-top d-inline-block">
			<div class="breadcrumb-wrapper col-12">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a>
					</li>
					<li class="breadcrumb-item"><a href="#">Banks</a>
					</li>
					<li class="breadcrumb-item active">Wallet
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

<section id="ecommerce-stats">
	<div class="row">
		<div class="col-12 mt-3 mb-1">
			<h4 class="text-uppercase">Wallet Actions</h4>
			<p>Click buttons bellow to deposit - withdraw - or transfer coin to another account.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-3 col-lg-6 col-12">
			<div class="card bg-success">
				<div class="card-content">
					<div class="card-body pb-1">
						<div class="row text-white">
							<div class="col-5">
								<h1><i class="la la-google-wallet background-round text-white"></i></h1>
								<span class="pt-1 m-0 text-white">990K <i class="la la-arrow-up"></i></span>
								<br>
								<span>VND</span>

							</div>
							<div class="col-7 text-right">
								<h3 class="text-white mb-2">Balances</h3>
								<span><i class="la la-arrows-h"></i> 990M</span>
								<br>
								<span>LUX</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-6 col-12">
			<div class="card bg-danger">
				<div class="card-content">
					<div class="card-body pb-1">
						<div class="row text-white">
							<div class="col-5">
								<h1><i class="la la-cloud-upload background-round text-white"></i></h1>
								<span class="pt-1 m-0 text-white">50K <i class="la la-arrow-down"></i></span>
								<br>
								<span>MIN</span>

							</div>
							<div class="col-7 text-right">
								<h3 class="text-white mb-2">Deposit</h3>
								<span><i class="la la-arrows-h"></i> 5M</span>
								<br>
								<span>LUX</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-6 col-12">
			<div class="card bg-info">
				<div class="card-content">
					<div class="card-body pb-1">
						<div class="row text-white">
							<div class="col-5">
								<h1><i class="la la-cloud-download background-round text-white"></i></h1>
								<span class="pt-1 m-0 text-white">5% <i class="la la-arrow-up"></i></span>
								<br>
								<span>Fee</span>
							</div>
							<div class="col-7 text-right">
								<h3 class="text-white mb-2">Withdraw</h3>
								<span>95% <i class="la la-arrow-down"></i></span>
								<br>
								<span>Received</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-6 col-12">
			<div class="card bg-warning">
				<div class="card-content">
					<div class="card-body pb-1">
						<div class="row text-white">
							<div class="col-5">
								<h1><i class="la la-refresh background-round text-white"></i></h1>
								<span class="pt-1 m-0 text-white">10K <i class="la la-arrow-up"></i></span>
								<br>
								<span>Holding</span>
							</div>
							<div class="col-7 text-right">
								<h3 class="text-white mb-2">Transfer</h3>
								<span>980</span>
								<br>
								<span>Request</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-12 mt-3 mb-1">
			<h4 class="text-uppercase">Bank - Payment Settings</h4>
			<p>Use this informations to deposit - withdraw - or checkout order.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="card bg-gradient-striped-yellow box-shadow-0">
				<div class="card-header">
					<h4 class="card-title">Striped Setting</h4>
					<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
					<div class="heading-elements">
						<ul class="list-inline mb-0">
							<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
							<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
							<li><a data-action="close"><i class="ft-x"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="card-content collapse show">
					<div class="card-body">
						<form action="#" class="card-form">
							<fieldset class="mb-0">
								<h5>Card Number</h5>
								<div class="form-group mb-1">
									<input type="text" class="form-control round card-number unknown jp-card-invalid" name="number" id="card-number" maxlength="19" placeholder="Card Number" autocomplete="off">
								</div>
							</fieldset>
							<fieldset class="mb-0">
								<h5>Card Name</h5>
								<div class="form-group mb-1">
									<input type="text" class="form-control round card-name jp-card-valid" name="name" id="card-name" placeholder="Card Holder Name" autocomplete="off">
								</div>
							</fieldset>
							<div class="row">
								<div class="col-md-6">
									<fieldset class="mb-0">
										<h5>Expiry Date</h5>
										<div class="form-group mb-1">
											<input type="text" class="form-control round card-expiry jp-card-valid" name="expiry" id="card-expiry" placeholder="Card Expiry Date" autocomplete="off">
										</div>
									</fieldset>
								</div>
								<div class="col-md-6">
									<fieldset class="mb-0">
										<h5>Card Number</h5>
										<div class="form-group mb-1">
											<input type="text" class="form-control round card-cvc jp-card-valid" name="cvc" id="card-cvc" maxlength="16" placeholder="Card CVC Number" autocomplete="off">
										</div>
									</fieldset>
								</div>
							</div>
							<div class="form-group text-right">
								<button type="button" class="btn btn-danger round btn-min-width box-shadow-5">Update</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="card border-top-pink border-top-3 border-bottom-blue border-bottom-3 box-shadow-0">
				<div class="card-header">
					<h4 class="card-title">Bank Accounts</h4>
					<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
					<div class="heading-elements">
						<ul class="list-inline mb-0">
							<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
							<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
							<li><a data-action="close"><i class="ft-x"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="card-content collapse show">
					<div class="card-body">
						<p class="card-text">Use <code>border-top-*</code> and <code>border-bottom-*</code>                      class for border top and bottom color.</p>
					</div>
				</div>
				<div class="card-footer text-muted">
					<!--span>2 days ago</span-->
					<span class="float-right">
						<button type="button" class="btn btn-primary btn-min-width box-shadow-5 btn-sm round"><i class="la la-plus-circle"></i> Add</button>
					</span>
				</div>
			</div>
		</div>
	</div>
</section>

@stop

@section('scripts')
@stop