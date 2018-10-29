<?php

Route::group(['middleware' => 'web', 'prefix' => 'banks', 'namespace' => 'Modules\Banks\Http\Controllers'], function()
{
    Route::get('/', 'BanksController@index');

    Route::post('stripe/update', 'AjaxController@updateStripeAccount')->name('users.banks.stripe.update');
    Route::post('bank/update', 'AjaxController@updateBankAccount')->name('users.banks.account.update');
});
