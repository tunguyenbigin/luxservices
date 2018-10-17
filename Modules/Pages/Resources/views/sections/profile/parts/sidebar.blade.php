<div class="profile-left-sidebar">

	<div class="card profile-card-with-stats">
          <div class="text-center">
            
            <div class="card-body">
              <h4 class="card-title">{{ $profile->name }}</h4>
              <h6 class="card-subtitle text-muted mb-1">{{ $profile->job }}</h6>
              <ul class="list-inline list-inline-pipe">
                <li>{{'@'.$profile->nickName }}</li>
                <li>{{ \Carbon\Carbon::parse($profile->birthday)->format('d-m-Y') }}</li>
              </ul>
              
              <h6 class="card-subtitle text-muted">(+84) {{ $profile->phone }}</h6>
              
              <h6 class="card-subtitle text-muted mt-1">{{ $profile->address }}</h6>
            </div>
            <div class="btn-group" role="group" aria-label="Profile example">
              <button type="button" class="btn btn-float box-shadow-0 btn-outline-info" data-toggle="tooltip" data-placement="top" title="Total followed">
                <span class="ladda-label"><i class="la la-user-plus"></i>
                  <span>12+</span>
                </span>
                <span class="ladda-spinner"></span>
              </button>
              <button type="button" class="btn btn-float box-shadow-0 btn-outline-info" data-toggle="tooltip" data-placement="top" title="Total liked">
                <span class="ladda-label"><i class="la la-heart-o"></i>
                  <span>25</span>
                </span>
                <span class="ladda-spinner"></span>
              </button>
              <button type="button" class="btn btn-float box-shadow-0 btn-outline-info" data-toggle="tooltip" data-placement="top" title="Total experience">
                <span class="ladda-label"><i class="la la-briefcase"></i>
                  <span>5</span>
                </span>
                <span class="ladda-spinner"></span>
              </button>
              <button type="button" class="btn btn-float box-shadow-0 btn-outline-info" data-toggle="tooltip" data-placement="top" title="Total skills">
                <span class="ladda-label"><i class="la la-street-view"></i>
                  <span>75+</span>
                </span>
                <span class="ladda-spinner"></span>
              </button>
              <button type="button" class="btn btn-float box-shadow-0 btn-outline-info">
                <span class="ladda-label"><i class="la la-dashcube"></i>
                  <span>125</span>
                </span>
                <span class="ladda-spinner"></span>
              </button>
            </div>
            <div class="card-body">
              <p>{{ $profile->stories }}</p>
              <button type="button" class="btn btn-outline-danger btn-md mr-1"><i class="la la-plus"></i> Follow</button>
              <button type="button" class="btn btn-outline-primary btn-md mr-1"><i class="ft-user"></i> Details</button>
            </div>
          </div>
        </div>




	<div class="card">
      <div class="card-header">
        <h4 class="card-title">Skills</h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
          <ul class="list-inline mb-0">
            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="card-content collapse show">
        <div class="card-body pt-0">

          <p>Message Thailand
            <span class="float-right text-bold-600">89%</span>
          </p>
          <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <p class="pt-1">Nails
            <span class="float-right text-bold-600">89%</span>
          </p>
          <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <p class="pt-1">Hair Cut
            <span class="float-right text-bold-600">89%</span>
          </p>
          <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
            <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <p class="pt-1">Wash Head
            <span class="float-right text-bold-600">89%</span>
          </p>
          <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
            <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <p class="pt-1">Tattoos
            <span class="float-right text-bold-600">89%</span>
          </p>
          <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
            <div class="progress-bar bg-gradient-x-primary" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
          </div>


        </div>
      </div>
    </div>

</div>