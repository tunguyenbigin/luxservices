<?php

Route::group(['middleware' => 'web', 'prefix' => 'messages', 'namespace' => 'Modules\Messages\Http\Controllers'], function()
{
    Route::get('/', 'MessagesController@index');
});
