<?php
Route::get( 'users', 'UserController@getIndex' );
Route::get( 'user/view/{id}', 'UserController@getView' );
Route::get( 'user/create', 'UserController@getCreate' );
Route::post( 'user/create', 'UserController@postCreate' );
Route::get( 'user/edit/{id}', array('as' => 'user.edit', 'uses' => 'UserController@getEdit' ));
Route::post( 'user/edit/{id}', 'UserController@postEdit' );
Route::get( 'user/password', 'UserController@getPassword' );