<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

//Route::get('/user', ['uses'=>'UserController@index']);

/*** Login ***/
//Route::post('/user/login', ['uses' => 'Api/UserController@loginGetToken'])->middleware('isJson')->name('loginGetToken');
Route::post('/login', 'Api\UserController@loginGetToken')->middleware('isJson')->name('loginGetToken');

Route::group(['middleware' => ['isJson', 'auth.api']], function () {
    Route::apiResource('user', 'Api\UserController');
    Route::apiResource('company', 'Api\CompanyController');
});
