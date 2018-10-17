<?php

Route::group(['middleware' => 'web', 'prefix' => 'banks', 'namespace' => 'Modules\Banks\Http\Controllers'], function()
{
    Route::get('/', 'BanksController@index');
});
