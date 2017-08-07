<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware( 'auth:api' )->get( '/user', function ( Request $request ) {
	return $request->user();
} );

Route::group( [ 'middleware' => 'cors', 'prefix' => '/v1' ], function () {

	Route::get( '/articles', 'ArticleController@index' );

	Route::get( '/articles/{id}', 'ArticleController@show' );

	Route::post( '/articles/save', 'ArticleController@store' );

	Route::post( '/articles/update', 'ArticleController@update' );

	Route::get( '/articles/delete/{id}/{api_token}', 'ArticleController@delete' );

	Route::post( '/users/create', 'UserController@register' );

//	Route::get( '/users', 'UserController@register' );
} );
