<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow expanded" data-scroll-to-active="true">
  <div class="main-menu-content ps-container ps-theme-light ps-active-y">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }} ">
        <a href="{{ route('users.dashboard') }}">
          <i class="la la-home"></i>
          <span class="menu-title">{{ __('pages::dashboard.dashboard') }}</span>
        </a>
      </li>
      <li class="nav-item has-sub {{ Request::is('employees*') ? 'active open' : '' }}">
        <a href="#"><i class="la la-pied-piper-alt"></i><span class="menu-title">{{ __('themes::sidebar.employee') }}</span></a>
        <ul class="menu-content">
          <li class="{{ Request::is('employees/find_around') ? 'active' : '' }}"><a class="menu-item" href="{{ route('users.profile.search') }}">{{ __('themes::sidebar.find_around') }}</a></li>
          <li class=""><a class="menu-item" href="#">{{ __('themes::sidebar.charts') }}</a></li>
        </ul>
      </li>
      
      <li class="nav-item {{ Request::is('services*') ? 'active' : '' }}"><a href="{{ route('users.service') }}"><i class="la la-support"></i><span class="menu-title">{{ __('themes::sidebar.services') }}</span></a>
      </li>

      <li class="nav-item {{ Request::is('wallet*') ? 'active' : '' }}">
        <a href="{{ route('users.wallet') }}"><i class="la la-bank"></i><span class="menu-title">{{ __('themes::sidebar.bank_accounts') }}</span></a>
      </li>

      <li class="nav-item">
        <a href=""><i class="la la-calendar"></i><span class="menu-title">{{ __('themes::sidebar.schedules') }}</span></a>
      </li>

      <li class="nav-item {{ Request::is('commerce/orders*') ? 'active' : ''}}">
        <a href="{{ route('users.commerce.orders') }}"><i class="la la-leanpub"></i><span class="menu-title">{{ __('themes::sidebar.orders') }}</span></a>
      </li>

      <li class="nav-item">
        <a href=""><i class="la la-gift"></i><span class="menu-title">{{ __('themes::sidebar.coupon') }}</span></a>
      </li>

      <li class="nav-item">
        <a href=""><i class="la la-gears"></i><span class="menu-title">{{ __('themes::sidebar.settings') }}</span></a>
      </li>

      <li class="nav-item {{ Request::is('messenger*') ? 'active' : '' }}">
        <a href="{{ route('users.messenger') }}"><i class="la la-wechat"></i><span class="menu-title">{{ __('themes::sidebar.messenger') }}</span></a>
      </li>

      <li class="nav-item">
        <a href=""><i class="ficon ft-bell"></i><span class="menu-title">{{ __('themes::sidebar.notifications') }}</span></a>
      </li>

    </ul>
  </div>
</div>