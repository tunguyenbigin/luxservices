<?php

Route::group(['middleware' => 'web', 'prefix' => 'users', 'namespace' => 'Modules\Users\Http\Controllers'], function()
{
    Route::post('/api/register', 'AjaxController@register')->name('api.users.register');
    Route::post('/api/register/verify/resend', 'AjaxController@resendCode')->name('api.users.verify.resend');
});

Route::group(['middleware' => 'web', 'prefix'=>'users', 'namespace' => 'App\Http\Controllers\Auth'], function(){
	Route::post('/login', 'LoginController@postLogin')->name('users.login');
	Route::get('/logout', 'LoginController@logout')->name('users.logout');
});

Route::group(['middleware' => ['web','auth', 'locale'], 'namespace' => 'Modules\Users\Http\Controllers'], function(){
	Route::post('update-personal', 'ProfileController@updatePersonal')->name('users.profile.personal.update');

});