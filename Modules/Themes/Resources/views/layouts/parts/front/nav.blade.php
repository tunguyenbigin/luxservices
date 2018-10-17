<div class="header-nav navbar-collapse collapse ">
    <ul class=" nav navbar-nav">
        <li class="{{ Request::is('/') ? 'active' : '' }}">
            <a href="{{ route('pages.home') }}">{{ trans('themes::nav.home') }}</a>
        </li>

        <li class="{{ Request::is('our-team*') ? 'active' : '' }}">
            <a href="{{ route('pages.ourTeam') }}">{{ trans('themes::nav.ourTeam') }}</a>
        </li>

        <li class="{{ Request::is('portfolio*') ? 'active' : '' }}">
            <a href="{{ route('pages.portfolio') }}">{{ trans('themes::nav.portfolio') }}</a>

        </li>

        <li class="{{ Request::is('gallery*') ? 'active' : '' }}">
            <a href="{{ route('pages.gallery') }}">{{ trans('themes::nav.gallery') }}</a>
        </li>

        <li class="{{ Request::is('blog') ? 'active' : '' }}">
            <a href="{{ route('pages.blog') }}">{{ trans('themes::nav.blog') }}</a>
        </li>

        <li class="{{ Request::is('about-us*') ? 'active' : '' }}">
            <a href="{{ route('pages.aboutUs') }}">{{ trans('themes::nav.aboutUs') }}</a>
        </li>

        <li class="{{ Request::is('faq*') ? 'active' : '' }}">
            <a href="{{ route('pages.faq') }}">{{ trans('themes::nav.faq') }}</a>
        </li>

        <li class="{{ Request::is('contact*') ? 'active' : '' }}">
            <a href="{{ route('pages.contact') }}">{{ trans('themes::nav.contact') }}</a>
        </li>

    </ul>
</div>