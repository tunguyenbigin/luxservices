<?php

Route::group(['middleware' => 'web', 'prefix' => 'coupons', 'namespace' => 'Modules\Coupons\Http\Controllers'], function()
{
    Route::get('/', 'CouponsController@index');
});
