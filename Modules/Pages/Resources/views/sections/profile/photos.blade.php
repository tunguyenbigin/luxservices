@extends('pages::profile')

@section('title')
{{ __('pages::profile.profile') }}
@stop

@section('c_content')
<div class="row">
	<section id="description" class="card" style="height: 380px;">
		<div class="card-header">
			<h4 class="card-title">Albums</h4>
			<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
			<div class="heading-elements">
				<ul class="list-inline mb-0">
					<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
					<li><a data-action="close"><i class="ft-x"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="card-content">
			<div class="card-body  my-gallery" itemscope="" itemtype="http://schema.org/ImageGallery" data-pswp-uid="1">
				<div class="card-deck-wrapper">
					<div class="card-deck">
						<figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
							<a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/1.jpg" itemprop="contentUrl" data-size="480x360">
								<img class="gallery-thumbnail card-img-top" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/1.jpg" itemprop="thumbnail" alt="Image description">
							</a>
							<div class="card-body px-0">
								<h4 class="card-title">Card title 1</h4>
								<p class="card-text">This is a longer card with supporting text below.</p>
							</div>
						</figure>
						<figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
							<a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/2.jpg" itemprop="contentUrl" data-size="480x360">
								<img class="gallery-thumbnail card-img-top" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/2.jpg" itemprop="thumbnail" alt="Image description">
							</a>
							<div class="card-body px-0">
								<h4 class="card-title">Card title 2</h4>
								<p class="card-text">This is a longer card with supporting text below.</p>
							</div>
						</figure>
						<figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
							<a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/3.jpg" itemprop="contentUrl" data-size="480x360">
								<img class="gallery-thumbnail card-img-top" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/3.jpg" itemprop="thumbnail" alt="Image description">
							</a>
							<div class="card-body px-0">
								<h4 class="card-title">Card title 3</h4>
								<p class="card-text">This is a longer card with supporting text below.</p>
							</div>
						</figure>
						<figure class="card card-img-top border-grey border-lighten-2" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
							<a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/4.jpg" itemprop="contentUrl" data-size="480x360">
								<img class="gallery-thumbnail card-img-top" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/4.jpg" itemprop="thumbnail" alt="Image description">
							</a>
							<div class="card-body px-0">
								<h4 class="card-title">Card title 4</h4>
								<p class="card-text">This is a longer card with supporting text below.</p>
							</div>
						</figure>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section id="image-gallery" class="card">
		<div class="card-header">
			<h4 class="card-title">Image gallery</h4>
			<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
			<div class="heading-elements">
				<ul class="list-inline mb-0">
					<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
					<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
					<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
					<li><a data-action="close"><i class="ft-x"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="card-content">
			<div class="card-body">
				<div class="card-text">
					<p>Image gallery grid with photo-swipe integration. Display images gallery
					in 4-2-1 columns and photo-swipe provides gallery features.</p>
				</div>
			</div>
			<div class="card-body  my-gallery" itemscope="" itemtype="http://schema.org/ImageGallery" data-pswp-uid="1">
				<div class="row">
					<figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/1.jpg" itemprop="contentUrl" data-size="480x360">
							<img class="img-thumbnail img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/1.jpg" itemprop="thumbnail" alt="Image description">
						</a>
					</figure>
					<figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/2.jpg" itemprop="contentUrl" data-size="480x360">
							<img class="img-thumbnail img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/2.jpg" itemprop="thumbnail" alt="Image description">
						</a>
					</figure>
					<figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/3.jpg" itemprop="contentUrl" data-size="480x360">
							<img class="img-thumbnail img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/3.jpg" itemprop="thumbnail" alt="Image description">
						</a>
					</figure>
					<figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/4.jpg" itemprop="contentUrl" data-size="480x360">
							<img class="img-thumbnail img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/4.jpg" itemprop="thumbnail" alt="Image description">
						</a>
					</figure>
				</div>
				<div class="row">
					<figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/5.jpg" itemprop="contentUrl" data-size="480x360">
							<img class="img-thumbnail img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/5.jpg" itemprop="thumbnail" alt="Image description">
						</a>
					</figure>
					<figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/6.jpg" itemprop="contentUrl" data-size="480x360">
							<img class="img-thumbnail img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/6.jpg" itemprop="thumbnail" alt="Image description">
						</a>
					</figure>
					<figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/7.jpg" itemprop="contentUrl" data-size="480x360">
							<img class="img-thumbnail img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/7.jpg" itemprop="thumbnail" alt="Image description">
						</a>
					</figure>
					<figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/8.jpg" itemprop="contentUrl" data-size="480x360">
							<img class="img-thumbnail img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/8.jpg" itemprop="thumbnail" alt="Image description">
						</a>
					</figure>
				</div>
				<div class="row">
					<figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/9.jpg" itemprop="contentUrl" data-size="480x360">
							<img class="img-thumbnail img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/9.jpg" itemprop="thumbnail" alt="Image description">
						</a>
					</figure>
					<figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/10.jpg" itemprop="contentUrl" data-size="480x360">
							<img class="img-thumbnail img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/10.jpg" itemprop="thumbnail" alt="Image description">
						</a>
					</figure>
					<figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/11.jpg" itemprop="contentUrl" data-size="480x360">
							<img class="img-thumbnail img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/11.jpg" itemprop="thumbnail" alt="Image description">
						</a>
					</figure>
					<figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/12.jpg" itemprop="contentUrl" data-size="480x360">
							<img class="img-thumbnail img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/12.jpg" itemprop="thumbnail" alt="Image description">
						</a>
					</figure>
				</div>
				<div class="row">
					<figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/13.jpg" itemprop="contentUrl" data-size="480x360">
							<img class="img-thumbnail img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/13.jpg" itemprop="thumbnail" alt="Image description">
						</a>
					</figure>
					<figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/14.jpg" itemprop="contentUrl" data-size="480x360">
							<img class="img-thumbnail img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/14.jpg" itemprop="thumbnail" alt="Image description">
						</a>
					</figure>
					<figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/15.jpg" itemprop="contentUrl" data-size="480x360">
							<img class="img-thumbnail img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/15.jpg" itemprop="thumbnail" alt="Image description">
						</a>
					</figure>
					<figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
						<a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/16.jpg" itemprop="contentUrl" data-size="480x360">
							<img class="img-thumbnail img-fluid" src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/16.jpg" itemprop="thumbnail" alt="Image description">
						</a>
					</figure>
				</div>
			</div>
			<!--/ Image grid -->
		</div>
	</section>
</div>
@stop