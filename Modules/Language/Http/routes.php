<?php

Route::group(['middleware' => 'web', 'prefix' => 'language', 'namespace' => 'Modules\Language\Http\Controllers'], function()
{
    Route::get('set/{language}', 'LanguageController@index')->name('user.change.language');
});
