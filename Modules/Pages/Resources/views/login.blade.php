@extends('themes::layouts.master')

@section('title')
    {{ trans('pages::login.login') }}
@stop

@section('content')

    <div class="container">
        <div class="row conntact-home bg-gray m-t50 m-b50">
            <div class="col-md-4 col-sm-6 contact-home-left bg-no-repeat bg-primary bg-left-center" style="background-image:url({{ asset('storage/images/background/contact-map.png') }}); min-height: 400px;">
                <div class="section-content">
                    <div class="p-a50">


                        <div class="Opening-hours text-white">
                            <h3 class="wt-title text-uppercase m-t0">Use Other Accounts</h3>
                            <ul class="list-unstyled">
                                <li><small>You can also sign in using your</small> Facebook Account <small>or</small> Google Account</li>
                                <li>&nbsp;</li>
                                <li>
                                    <a class="btn btn-block btn-social btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social', 'click', 'btn-facebook']);">
                                        <span class="fa fa-facebook"></span> Sign in with Facebook
                                    </a>
                                </li>
                                <li>
                                    <a class="btn btn-block btn-social btn-google" onclick="_gaq.push(['_trackEvent', 'btn-social', 'click', 'btn-google']);">
                                        <span class="fa fa-google"></span> Sign in with Google
                                    </a>
                                </li>
                                <li>
                                    <a class="btn btn-block btn-social btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social', 'click', 'btn-tweeter']);">
                                        <span class="fa fa-tweeter"></span> Sign in with Tweeter
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="col-md-8 col-sm-6">
                <div class="section-content bg-gray">
                    <div class="contact-home-right p-a30">
                        <h5 class="text-uppercase font-26 p-b20 font-weight-400">SIGN IN</h5>
                        @if(Session::has('error'))
                            <div class="alert alert-danger">
                            {{ Session::get('error') }}
                            </div>
                        @endif
                        
                        {!! Form::open(['action' => 'Auth\LoginController@postLogin', 'method' => 'post', 'class'=>'']) !!}
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input name="username" type="text" class="form-control" placeholder="Email Or Phone" autocomplete="off" value="{{ Session::has('username') ? Session::get('username') : '' }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input name="password" type="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <button type="submit" class="site-button skew-icon-btn radius-sm">
                                <span class="font-weight-700 inline-block text-uppercase p-lr15">SIGN IN</span>
                            </button>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop