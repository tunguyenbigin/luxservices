<div class="card profile-with-cover">
    <div class="card-img-top img-fluid bg-cover height-300" style="background: url({{ $profile->wallpaper }}) 50%;">
    	<div class="set-wallspaper">
        	<a href="">
        		<i class="icon-camera"></i>
        		&nbsp;Set wallpaper
        	</a>
        </div>
    </div>
    <div class="media profil-cover-details w-100">
      <div class="media-left ml-2 mt-1 rounded-circle img-border">
        <a href="#" class="profile-image">
          <img src="{{ $profile->avatar }}" class=" height-150" alt="Card image">
        </a>
        <div class="set-avatar">
        	<a href="">
        		<i class="icon-camera"></i>
        	</a>
        </div>
      </div>
      <div class="media-body pt-3 px-2">
        <div class="row">
          <div class="col">
            <h3 class="nick-name card-title mb-1">{{ $profile->nickName }}</h3>
            <h3 class="full-name card-title mb-1">{{ $profile->name }}</h3>
            <div class="level-info">
            	<div class="star-rating" title="70%">
				    <div class="back-stars">
				        <i class="fa fa-star" aria-hidden="true"></i>
				        <i class="fa fa-star" aria-hidden="true"></i>
				        <i class="fa fa-star" aria-hidden="true"></i>
				        <i class="fa fa-star" aria-hidden="true"></i>
				        <i class="fa fa-star" aria-hidden="true"></i>
				        
				        <div class="front-stars" style="width: 70%">
				            <i class="fa fa-star" aria-hidden="true"></i>
				            <i class="fa fa-star" aria-hidden="true"></i>
				            <i class="fa fa-star" aria-hidden="true"></i>
				            <i class="fa fa-star" aria-hidden="true"></i>
				            <i class="fa fa-star" aria-hidden="true"></i>
				        </div>

				    </div>
				</div> 
            </div>
          </div>
          <div class="col text-right wp-profile-act">
            <button type="button" class="btn btn-primary d- btn-round btn-danger"><i class="icon-camcorder"></i> Call Video</button>
            <div class="btn-group d-none d-md-block float-right ml-2" role="group" aria-label="Basic example">
              	<button type="button" class="btn btn-primary btn-round"><i class="icon-bubbles"></i> Message</button>
              	<!--button type="button" class="btn btn-primary btn-circle"><i class="la la-cog"></i></button-->
              	<div class="dropdown">
				  <button class="btn btn-primary btn-circle dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				    <i class="icon-settings"></i>
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				    <li><a href="#"><i class="icon-user-unfollow primary-color"></i> Block this user</a></li>
				    <!--li><a href="#"><i class="icon-user-following primary-color"></i> Unblock this user</a></li-->
				    <li><a href="#"><i class="icon-user-follow primary-color"></i> Follow</a></li>
				    <li><a href="#"><i class="icon-ban primary-color"></i> Report</a></li>
				  </ul>
				</div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-light navbar-profile align-self-end">
      <button class="navbar-toggler d-sm-none" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation"></button>
          	<nav class="navbar navbar-expand-lg">
            	<div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link {{ app('request')->input('tab') === 'timeline' ? 'active' : ''}}" href="{{ route('users.profile').'?id='.auth()->user()->id.'&tab=timeline' }}"><i class="la la-clock-o"></i> Timeline</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link {{ app('request')->input('tab') === 'activities' || !app('request')->input('tab') ? 'active':'' }}" href="{{ route('users.profile').'?id='.auth()->user()->id.'&tab=activities' }}"><i class="la la-bolt"></i> Activities <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link {{ app('request')->input('tab') === 'details' ? 'active' : '' }}" href="{{ route('users.profile').'?id='.auth()->user()->id.'&tab=details' }}"><i class="la la-user"></i> Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link {{ app('request')->input('tab') === 'photos' ? 'active' : '' }}" href="{{ route('users.profile').'?id='.auth()->user()->id.'&tab=photos' }}"><i class="la la-picture-o"></i> Photos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="la la-heart-o"></i> Like</a>
                    </li>
                    
                  </ul>
            	</div>
      		</nav>
    </nav>
    
</div>