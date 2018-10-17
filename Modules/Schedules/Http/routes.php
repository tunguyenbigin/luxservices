<?php

Route::group(['middleware' => 'web', 'prefix' => 'schedules', 'namespace' => 'Modules\Schedules\Http\Controllers'], function()
{
    Route::get('/', 'SchedulesController@index');
});
