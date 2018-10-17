<?php

Route::group(['middleware' => ['web', 'locale'], 'namespace' => 'Modules\Pages\Http\Controllers'], function()
{
    Route::get('/', 'PagesController@home')->name('pages.home');
    Route::group(['prefix'=>'our-team'], function (){
        Route::get('/', 'PagesController@ourTeam')->name('pages.ourTeam');
    });
    Route::group(['prefix'=>'gallery'], function (){
        Route::get('/', 'PagesController@gallery')->name('pages.gallery');
    });

    Route::group(['prefix'=>'portfolio'], function (){
        Route::get('/', 'PagesController@portfolio')->name('pages.portfolio');
    });

    Route::group(['prefix' => 'faq'], function (){
        Route::get('/', 'PagesController@faq')->name('pages.faq');
    });

    Route::group(['prefix'  => 'contact'], function (){
        Route::get('/', 'PagesController@contact')->name('pages.contact');
    });

    Route::group(['prefix' => 'about-us'], function (){
        Route::get('/', 'PagesController@about')->name('pages.aboutUs');
    });

    Route::group(['prefix' => 'blog'], function (){
        Route::get('/', 'PagesController@blog')->name('pages.blog');
    });

    Route::group(['prefix' => 'users'], function (){
        Route::get('/login', 'PagesController@login')->middleware('guest')->name('pages.login');
    });

    Route::group(['prefix' => 'users'], function (){
        Route::get('/register', 'PagesController@register')->middleware('guest')->name('pages.register');
    });

});

Route::group(['middleware' => ['web', 'auth', 'locale'], 'namespace' => 'Modules\Pages\Http\Controllers'], function (){
    Route::get('/dashboard', 'PanelController@dashboard')->name('users.dashboard');
    Route::get('/profile', 'PanelController@profile')->name('users.profile');

    Route::group(['prefix' => 'employees'], function(){
        Route::get('/find-around', 'PanelController@findAround')->name('users.profile.search');
    });

    Route::get('/messenger', 'PanelController@messenger')->name('users.messenger');

    Route::get('/wallet', 'PanelController@wallet')->name('users.wallet');

    Route::get('/services', 'PanelController@services')->name('users.service');

    Route::get('/services/{cat_slug}', 'PanelController@servicesCat')->name('users.services.categories.services');

    Route::group(['prefix' => 'commerce'], function(){
        Route::get('shopping-cart', 'PanelController@cart')->name('users.commerce.shopping.cart');

        Route::get('orders', 'PanelController@order')->name('users.commerce.orders');

        Route::get('orders/invoice/{id}', 'PanelController@invoice')->name('users.orders.invoice');

    });

});