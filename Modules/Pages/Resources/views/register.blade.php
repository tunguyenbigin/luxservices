@extends('themes::layouts.master')

@section('title')
    {{ trans('pages::register.register') }}
@stop

@section('styles')
    <style type="text/css">
        #map {
            height: 290px;
            width: 100%;
            border: 2px solid #fff;
        }
    </style>
@stop
@section('content')


    <div class="container">
        <div class="row conntact-home bg-gray m-t50 m-b50">
            <div class="col-md-12 col-sm-6">
                <div class="section-content bg-gray">
                    <div class="contact-home-right">
                        <!--h5 class="text-uppercase font-26 p-b20 font-weight-400">{{ trans('pages::register.create_account') }}</h5-->

                            <div class="col-md-12">
                                <div id="msform">
                                    <!-- progressbar -->
                                    <ul id="progressbar">
                                        <li class="active">Account Type</li>
                                        <li>Account Verify</li>
                                        <li>Location</li>
                                        <li>Personal Details</li>
                                        <li>Account Setup</li>
                                    </ul>
                                    <!-- fieldsets -->
                                    <fieldset>
                                        <h2 class="fs-title">Choose Your Account Type</h2>
                                        <form id="reg-stp-1">
                                            <input type="hidden" name="step" value="1">
                                            <div class="form-group text-left">
                                                <label>{{ __('users::users.accountType') }}</label>
                                                <div class="wp-input">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                        <select class="form-control" name="type">
                                                            <option value="">{{ __('users::users.chooseType') }}</option>
                                                            @if( $type = config('users.roleRegister') )
                                                                @foreach( $type as $tKey => $type)
                                                                    <option value="{{ $tKey }}">{{ __('users::users.'.$type) }}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="form-group text-left">
                                                <label>Your Phone Number</label>
                                                <div class="wp-input">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                        <input name="phone" type="text" class="form-control" placeholder="Enter your phone..." autocomplete="off">
                                                    </div>
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="form-group ctr-act">
                                                <button type="button" name="next" data-control="submit"  class="next action-button">Next</button>
                                            </div>
                                        </form>
                                    </fieldset>
                                    <fieldset>
                                        <h2 class="fs-title">Verify Your Phone Number</h2>
                                        <form id="reg-stp-2">
                                            <input type="hidden" name="step" value="2">
                                            <div class="form-group text-left">
                                                <label>Enter the code you receivevia SMS</label>
                                                <div class="wp-input">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-code"></i></span>
                                                        <input name="verify_code" id="verify_code" type="text" class="form-control pr-30" placeholder="LUX-1234...." autocomplete="off">
                                                        <div class="refresh-code">
                                                            <a href="javascript:;" onclick="verifyCode()"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="help-block"></div>
                                                </div>
                                                <p class="ip-help-block">A code has been sent to your device via SMS. You may request another code after one minute.<p>
                                            </div>
                                            <div class="form-group ctr-act">
                                                <button type="button" name="previous" class="previous action-button-previous">Previous</button>
                                                <button type="button" data-control="submit" name="next" class="next action-button">Next</button>
                                            </div>
                                        </form>
                                    </fieldset>
                                    <fieldset>
                                        <h2 class="fs-title m-0">Pick Your Location</h2>
                                        <form id="reg-stp-3">
                                            <div id="map"></div>
                                            <input type="hidden" name="step" value="3">
                                            <input type="hidden" name="lat" id="lat_pos" >
                                            <input type="hidden" name="lng" id="long_pos">
                                            <input type="hidden" name="address" id="address">
                                            <div class="form-group ctr-act">
                                                <button type="button" name="previous" class="previous action-button-previous">Previous</button>
                                                <button type="button" data-control="submit" name="button" class="next action-button">Next</button>
                                            </div>
                                        </form>
                                    </fieldset>
                                    <fieldset>
                                        <h2 class="fs-title m-0">Personal Details</h2>
                                        <form id="reg-stp-4">
                                            <input type="hidden" name="step" value="4">
                                            <div class="form-group text-left">
                                                <label></label>
                                                <div class="wp-input">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-angellist"></i></span>
                                                        <textarea class="form-control" name="desc"  placeholder="Say something about you..." autocomplete="off"></textarea>
                                                    </div>
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="form-group text-left">
                                                <label>Name</label>
                                                <div class="wp-input">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name..." autocomplete="off"/>
                                                    </div>
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="form-group text-left">
                                                <label>Address</label>
                                                <div class="wp-input">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                                        <textarea class="form-control" name="address" id="saddress" placeholder="Enter Your Address..." autocomplete="off"></textarea>
                                                    </div>
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="form-group ctr-act">
                                                <button type="button" name="previous" class="previous action-button-previous">Previous</button>
                                                <button type="button" data-control="submit" name="next" class="next action-button">Next</button>
                                            </div>
                                        </form>
                                    </fieldset>
                                    <fieldset>
                                        <h2 class="fs-title m-0">Account Setup</h2>
                                        <form id="reg-stp-5">
                                            <input type="hidden" name="step" value="5">
                                            <div class="form-group text-left">
                                                <label>Email</label>
                                                <div class="wp-input">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email..." autocomplete="off"/>
                                                    </div>
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="form-group text-left">
                                                <label>Password</label>
                                                <div class="wp-input">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password..." autocomplete="off"/>
                                                    </div>
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="form-group text-left">
                                                <label>Confirm Password</label>
                                                <div class="wp-input">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-check"></i></span>
                                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password..." id="confirm" autocomplete="off"/>
                                                    </div>
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="form-group ctr-act">
                                                <button type="button" name="previous" class="previous action-button-previous">Previous</button>
                                                <button type="button" data-control="submit" name="submit" class="submit action-button">Submit</button>
                                            </div>
                                        </form>
                                    </fieldset>
                                </div>

                            </div>
                        <!-- /.MultiStep Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('scripts')
    <script type="text/javascript">
        let api ={
            users: {
                register: "{{ route('api.users.register') }}",
                verify: "{{ route('api.users.verify.resend') }}"
            }
        }
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0N3b7g-_fmyT215Ahpo_2JGZmChE3cmU&callback=initMap">
    </script>

    <script type="text/javascript" src="{{ asset('storage/js/users/app.js') }}"></script>
    <script type="text/javascript">
        /* location detected */
        var map, infoWindow;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 18
            });
            infoWindow = new google.maps.InfoWindow;

            geocoder= new google.maps.Geocoder

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    $('#lat_pos').val(pos.lat)
                    $('#long_pos').val(pos.lng)

                    //get address
                    geocoder.geocode({'location': pos}, function (results, status) {
                        if(results[0]){
                            infoWindow.setContent('<p style="color: #ee0a79;word-break: break-word;width: 250px;margin: 0;">' + results[0].formatted_address + '</p>')
                            $('#address').val(results[0].formatted_address)
                            $('#saddress').val(results[0].formatted_address);
                        }
                    })
                    //end get address

                    infoWindow.setPosition(pos);
                    //infoWindow.setContent('Location found.');
                    infoWindow.open(map);
                    map.setCenter(pos);
                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
        }
        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
        }
        /* end location detected */
    </script>
@stop
