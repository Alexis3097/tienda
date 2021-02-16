<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use CloudCreativity\LaravelJsonApi\Facades\JsonApi;

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
Route::post('register', 'RegisterController@login');

Route::group(['middleware' => 'api'], function () {
    JsonApi::register('default')->withNamespace('Admin')->singularControllers()->routes(function ($api) {
        $api->resource('tests')->controller();
    });
    JsonApi::register('default')->routes(function ($api) {
        Route::post('login', 'AuthController@login');
        Route::post('logout', 'AuthController@logout');
        Route::post('refresh', 'AuthController@refresh');
        Route::post('me', 'AuthController@me');
        Route::get('users', 'AuthController@users');
    });
  });