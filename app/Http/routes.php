<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group( [
    'prefix'     => LaravelLocalization::setLocale(),
    'middleware' => [
        'localeSessionRedirect',
        'localizationRedirect'
    ]
], function(){
    Route::get( '/', [ 'as' => 'post', 'uses' => 'PostController@index' ] );
    Route::get( 'unpublished', [ 'as' => 'post.unpublished', 'uses' => 'PostController@unpublished' ] );

    Route::get( 'post/create', [ 'as' => 'post.create', 'uses' => 'PostController@create' ] );
    Route::post( 'post', [ 'as' => 'post.store', 'uses' => 'PostController@store' ] );
    Route::get ( 'post/{post}', [ 'as' => 'post.show', 'uses' => 'PostController@show' ] );
    Route::get ( 'post/{post}/edit', [ 'as' => 'post.edit', 'uses' => 'PostController@edit' ] );
    Route::post( 'post/{post}', [ 'as' => 'post.update', 'uses' => 'PostController@update' ] );
} );


//Route::get( '/', [ 'as' => 'post', 'uses' => 'PostController@index' ] );
//Route::get( 'unpublished', [ 'as' => 'post.unpublished', 'uses' => 'PostController@unpublished' ] );

/*Route::get( 'post/create', [ 'as' => 'post.create', 'uses' => 'PostController@create' ] );
Route::post( 'post', [ 'as' => 'post.store', 'uses' => 'PostController@store' ] );
Route::get ( 'post/{post}', [ 'as' => 'post.show', 'uses' => 'PostController@show' ] );
Route::get ( 'post/{post}/edit', [ 'as' => 'post.edit', 'uses' => 'PostController@edit' ] );
Route::post( 'post/{post}', [ 'as' => 'post.update', 'uses' => 'PostController@update' ] );*/


//$router->resource( 'post', 'PostController' );