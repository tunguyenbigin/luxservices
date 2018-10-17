<header class="site-header header-style-1 ">

    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="wt-topbar-left clearfix">
                    <ul class="list-unstyled e-p-bx pull-right">
                        <li><i class="fa fa-envelope"></i>mail@startuprr.com</li>
                        <li><i class="fa fa-phone"></i>(888) 123-4567</li>
                    </ul>
                </div>
                <div class="wt-topbar-right clearfix">
                    @auth
                        <div class="dropdown user-func">
                            <button class="bgr-0 brd-0 btn btn-default dropdown-toggle p-0" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <i class="fa fa-user" style="color: #fff;"></i> {{ auth()->user()->name }}
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="{{ route('users.dashboard') }}"><i class="bgr-0 fa fa-tachometer no-bg"></i> Go to dashboard</a></li>
                                <li><a href="#"><i class="bgr-0 fa fa-cogs"></i>Some setting</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('users.logout') }}"><i class="bgr-0 fa fa-sign-out"></i> Sign out</a></li>
                            </ul>
                        </div>
                    @else
                        <ul class="social-bx list-inline pull-right">
                            <li><a href="{{ route('pages.login') }}" class="{{ Request::is('users/login*') ? 'top-bar-active' : '' }}"><i class="fa fa-user"></i>Sign In</a></li>
                            <li><a href="{{ route('pages.register') }}" class="{{ Request::is('users/register*') ? 'top-bar-active' : '' }}"><i class="fa fa-user-plus"></i>Register</a></li>
                        </ul>
                    @endauth


                </div>
            </div>
        </div>
    </div>
    <!-- Search Link -->

    <!-- Search Form -->

    <div class="sticky-wrapper" style=""><div class="sticky-header main-bar-wraper">
            <div class="main-bar bg-white">
                <div class="container">
                    <div class="logo-header">
                        <a href="index.html">
                            <img src="{{ asset('storage/images/logo.png') }}" width="216" height="37" alt="">
                        </a>
                    </div>
                    <!-- NAV Toggle Button -->
                    <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- ETRA Nav -->
                    <div class="extra-nav">

                        <div class="extra-cell">
                            <ul class="nav navbar-nav navbar-right" id="multipleLanguage">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                        @if(Session::get('language', config('app.locale')) === 'en')
                                            <img width="20" src="{{ asset('storage/images/languages/en.png') }}">
                                        @else
                                            <img width="20" src="{{ asset('storage/images/languages/vi.png') }}">
                                        @endif
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route('user.change.language', ['en']) }}" data-locale="en" class="changeLanguage">
                                                <img width="20" src="{{ asset('storage/images/languages/en.png') }}"><span class="pl-1">English</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('user.change.language', ['vi']) }}" data-locale="vi" class="changeLanguage">
                                                <img width="20" src="{{ asset('storage/images/languages/vi.png') }}"><span class="pl-1">Tiếng Việt</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- SITE Search -->
                    <div id="search">
                        <span class="close"></span>
                        <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
                            <div class="input-group">
                                <input value="" name="q" type="search" placeholder="Type to search">
                                <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search"></i></button></span>
                            </div>
                        </form>
                    </div>

                    <!-- Main Nav -->
                    @include('themes::layouts.parts.front.nav')
                    <!--end Main Nav-->

                </div>
            </div>
        </div></div>

</header>
