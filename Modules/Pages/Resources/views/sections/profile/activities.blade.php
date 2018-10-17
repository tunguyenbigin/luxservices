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



		<!--post items-->
		<div class="timeline-card card border-grey border-lighten-2">
			<div class="card-header">
				<h4 class="card-title"><a href="#">Jose Diaz <small>đang <i class="la la-smile-o"></i> cảm thấy chỉ có một mình.</small></a></h4>
				<p class="card-subtitle text-muted mb-0 pt-1">
					<span class="font-small-3">5 hours ago</span>
				</p>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				<div class="heading-elements">
					<ul class="list-inline mb-0">
						<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
						<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
						<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
						<li>
							<div class="dropdown">
								<button class="btn btn-default dropdown-toggle btn-post-otps" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="ft-more-vertical"></i>
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenu1" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</div>
						</li>
						
					</ul>
				</div>
			</div>
			<div class="card-content">
				
				<div class="card-content">
					<div class="card-body">
						<p class="card-text">Nullam facilisis fermentum aliquam. Suspendisse ornare dolor
							vitae libero hendrerit auctor lacinia a ligula. Curabitur
						elit tellus, porta ut orci sed, fermentum bibendum nisi.</p>
						<ul class="list-inline">
							<li class="pr-1">
								<a href="#" class="">
									<span class="la la-thumbs-o-up"></span> Like</a>
								</li>
								<li class="pr-1">
									<a href="#" class="">
										<span class="la la-commenting-o"></span> Comment</a>
									</li>
									<li>
										<a href="#" class="">
											<span class="la la-share-alt"></span> Share</a>
										</li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>



					<div class="timeline-card card border-grey border-lighten-2">
						<div class="card-header">
							<h4 class="card-title"><a href="#">Jose Diaz <small>đang <i class="la la-smile-o"></i> cảm thấy chỉ có một mình.</small></a></h4>
							<p class="card-subtitle text-muted mb-0 pt-1">
								<span class="font-small-3">5 hours ago</span>
							</p>
							<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
							<div class="heading-elements">
								<ul class="list-inline mb-0">
									<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
									<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
									<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
									<li>
										<div class="dropdown">
											<button class="btn btn-default dropdown-toggle btn-post-otps" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="ft-more-vertical"></i>
											</button>
											<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li role="separator" class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</div>
									</li>
									
								</ul>
							</div>
						</div>
						<div class="card-content">
							<img class="img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portfolio/width-1200/portfolio-1.jpg" alt="Timeline Image 1">
							<div class="card-content">
								<div class="card-body">
									<p class="card-text">Nullam facilisis fermentum aliquam. Suspendisse ornare dolor
										vitae libero hendrerit auctor lacinia a ligula. Curabitur
									elit tellus, porta ut orci sed, fermentum bibendum nisi.</p>
									<ul class="list-inline">
										<li class="pr-1">
											<a href="#" class="">
												<span class="la la-thumbs-o-up"></span> Like</a>
											</li>
											<li class="pr-1">
												<a href="#" class="">
													<span class="la la-commenting-o"></span> Comment</a>
												</li>
												<li>
													<a href="#" class="">
														<span class="la la-share-alt"></span> Share</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="card-footer px-0 py-0">
											<div class="card-body">
												<div class="media">
													<div class="media-left mr-1">
														<a href="#">
															<span class="avatar avatar-online">
																<img src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-1.png">
															</span>
														</a>
													</div>
													<div class="media-body">
														<p class="text-bold-600 mb-0"><a href="#">Jason Ansley</a></p>
														<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel
														metus scelerisque ante sollicitudin commodo.</p>
														<ul class="list-inline">
															<li class="pr-1">
																<a href="#" class="">
																	<span class="la la-thumbs-o-up"></span> Like</a>
																</li>
																<li class="pr-1">
																	<a href="#" class="">
																		<span class="la la-commenting-o"></span> Reply</a>
																	</li>
																</ul>
																<div class="media">
																	<div class="media-left mr-1">
																		<a href="#">
																			<span class="avatar avatar-online">
																				<img src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-18.png" alt="avatar">
																			</span>
																		</a>
																	</div>
																	<div class="media-body">
																		<p class="text-bold-600 mb-0"><a href="#">Janice Johnston</a></p>
																		<p>Gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
																		<ul class="list-inline">
																			<li class="pr-1">
																				<a href="#" class="">
																					<span class="la la-thumbs-o-up"></span> Like</a>
																				</li>
																				<li class="pr-1">
																					<a href="#" class="">
																						<span class="la la-commenting-o"></span> Reply</a>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="card-body">
																<fieldset class="form-group position-relative has-icon-left mb-0">
																	<input type="text" class="form-control" placeholder="Write comments...">
																	<div class="form-control-position">
																		<span class="avatar avatar-online">
																			<img src="{{ asset('storage/upload/users/1/avatar/10001_avatar.png') }}" class="img-responsive rounded-circle" />
																		</span>
																		<!--i class="la la-dashcube"></i-->
																	</div>
																</fieldset>
															</div>
														</div>
													</div>
												</div>
												<!--end post items-->



											</div>
										</div>
										@stop