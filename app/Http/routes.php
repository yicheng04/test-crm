<?php

// home
Route::get( '/', 'HomeController@getIndex' );
Route::get('home', 'HomeController@getIndex' );

// user login/logout
Route::get( 'user/login', 'UserController@getLogin' );
Route::post( 'user/login', 'UserController@postLogin' );
Route::get( 'user/logout', 'UserController@getLogout' );

// news / articles
Route::resource( 'articles', 'ArticleController' );
Route::get( 'news', 'ArticleController@summary' );

// content pages
Route::resource( 'contents', 'ContentController' );
Route::get( 'content/{slug}', 'ContentController@content' );

// hero slider
Route::resource( 'banner', 'HeroSliderController', ['except' => ['index']] );
Route::get( 'hero-slider', 'HeroSliderController@index' )->name('banner.index');

//blocks
Route::model('blocks', 'App\Block');
Route::resource('blocks', 'BlockController', ['except' => ['show', 'create', 'store']]);

// fully protected routes
Route::group(['middleware' => 'auth'], function () {
	Route::get( 'dashboard', 'DashboardController@getGeneral' );
    Route::resource( 'menus', 'MenuController' );
    // Route::resource( 'settings', 'SettingController' );

    // other user actions
    include( app_path() . '/Http/Routes/_route-user.php' );
});

// catch all
Route::get('{slug}', 'ContentController@content');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');
