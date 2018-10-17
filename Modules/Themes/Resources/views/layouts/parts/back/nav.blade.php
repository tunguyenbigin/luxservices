<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
            <div class="navbar-wrapper">
                <div class="navbar-header expanded">
                    <ul class="nav navbar-nav flex-row">
                        <li class="nav-item mobile-menu d-md-none mr-auto">
                            <a class="nav-link nav-menu-main menu-toggle hidden-xs is-active" href="#">
                                <i class="ft-menu font-large-1"></i>
                            </a>
                        </li>
                        <li class="nav-item mr-auto">
                            <a class="navbar-brand" href="{{ route('users.dashboard') }}">
                                <img class="brand-logo" alt="modern admin logo" src="{{ asset('storage/app-assets/images/logo/logo.png') }}">
                                <h3 class="brand-text">Lux Services</h3>
                            </a>
                        </li>
                        <li class="nav-item d-none d-md-block float-right">
                            <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                                <i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item d-md-none">
                            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile">
                                <i class="la la-ellipsis-v"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-container content">
                    <div class="collapse navbar-collapse" id="navbar-mobile">
                        <ul class="nav navbar-nav mr-auto float-left">
                            <li class="nav-item d-none d-md-block">
                                <a class="nav-link nav-link-expand" href="#">
                                    <i class="ficon ft-maximize"></i>
                                </a>
                            </li>
                            <li class="dropdown nav-item mega-dropdown">
                                <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">News</a>
                                <ul class="mega-dropdown-menu dropdown-menu row">
                                    <li class="col-md-12">
                                        <h6 class="dropdown-menu-header text-uppercase mb-1">
                                            <i class="la la-newspaper-o"></i> News</h6>
                                        <div id="mega-menu-carousel-example">
                                            <div>
                                                <img class="rounded img-fluid mb-1" src="" alt="First slide">
                                                <a class="news-title mb-0" href="#">Poster Frame PSD</a>
                                                <p class="news-content">
                                                    <span class="font-small-2">January 26, 2018</span>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                
                                </ul>
                            </li>

                            <li class="dropdown dropdown-language nav-item">
                                <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="flag-icon flag-icon-gb"></i>
                                    <span class="selected-language"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                                    <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-gb"></i> English</a>
                                    <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-vn"></i> Vietnamese</a>
                                </div>
                            </li>
                            
                        </ul>
                        <ul class="nav navbar-nav float-right">
                            
                            <li class="dropdown dropdown-user nav-item">
                                <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                    <span class="mr-1">Hello,
                                      <span class="user-name text-bold-700">{{ auth()->user()->name }}</span>
                                    </span>
                                    <span class="avatar avatar-online">
                                        <img src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{ route('users.profile') }}"><i class="ft-user"></i> Edit Profile</a>
                                    <a class="dropdown-item" href="#"><i class="ft-mail"></i> Deposit</a>
                                    <a class="dropdown-item" href="#"><i class="ft-check-square"></i> Withdraw</a>
                                    <a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="ft-power"></i> Logout</a>
                                </div>
                            </li>



                            
                            <li class="dropdown dropdown-notification nav-item">
                                <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i>
                                    <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">5</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                    <li class="dropdown-menu-header">
                                        <h6 class="dropdown-header m-0">
                                            <span class="grey darken-2">Notifications</span>
                                        </h6>
                                        <span class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span>
                                    </li>
                                    <li class="scrollable-container media-list w-100 ps-container ps-theme-dark">
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">You have new order!</h6>
                                                    <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>

                                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></li>
                                    <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
                                </ul>
                            </li>


                            <li class="dropdown dropdown-notification nav-item">
                                <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                                    <i class="ficon ft-message-square"></i>
                                    <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">3</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                    <li class="dropdown-menu-header">
                                        <h6 class="dropdown-header m-0">
                                            <span class="grey darken-2">Messages</span>
                                        </h6>
                                        <span class="notification-tag badge badge-default badge-warning float-right m-0">4 New</span>
                                    </li>
                                    <li class="scrollable-container media-list w-100 ps-container ps-theme-dark">
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left">
                                                    <span class="avatar avatar-sm avatar-online rounded-circle">
                                                        <img src="http://giadinh.mediacdn.vn/2017/photo-1-1493258443266.png" alt="avatar"><i></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Margaret Govan</h6>
                                                    <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>

                                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></li>
                                    <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>
                                </ul>
                            </li>



                            <li class="dropdown dropdown-notification nav-item">
                                <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                                    <i class="ficon ft-shopping-cart"></i>
                                    <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">10</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                    <li class="dropdown-menu-header">
                                        <h6 class="dropdown-header m-0">
                                            <span class="grey darken-2">Messages</span>
                                        </h6>
                                        <span class="notification-tag badge badge-default badge-warning float-right m-0">4 New</span>
                                    </li>
                                    <li class="scrollable-container media-list w-100 ps-container ps-theme-dark">
                                        <a href="javascript:void(0)">
                                            <div class="media">
                                                <div class="media-left">
                                                    <span class="avatar avatar-sm avatar-online rounded-circle">
                                                        <img src="http://giadinh.mediacdn.vn/2017/photo-1-1493258443266.png" alt="avatar"><i></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Margaret Govan</h6>
                                                    <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p>
                                                    <small>
                                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>

                                    </li>
                                    <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center width-50-per display-inline-block warning" href="javascript:void(0)">Shopping Cart</a><a class="dropdown-item text-muted text-center width-50-per display-inline-block danger" href="javascript:void(0)">Checkout</a></li>
                                </ul>
                            </li>




                        </ul>
                    </div>
                </div>
            </div>
        </nav>