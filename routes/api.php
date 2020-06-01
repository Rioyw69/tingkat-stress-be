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

Route::get('/dashboard/information', 'DashboardController@information');
Route::get('/dashboard/advice', 'DashboardController@advice');

Route::middleware('auth:api')->group(function(){
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/dashboard/question', 'DashboardController@question');
    Route::post('/dashboard/question', 'DashboardController@storeQuestion');
    Route::delete('/dashboard/question/{id}', 'DashboardController@deleteQuestion');
    Route::get('/dashboard/question/{id}', 'DashboardController@showQuestion');
    Route::post('/dashboard/question/{id}', 'DashboardController@updateQuestion');
    Route::post('/dashboard/information', 'DashboardController@storeInformation');
    Route::post('/dashboard/advice', 'DashboardController@storeAdvice');
});

Route::get('/question', 'QuestionController@index');
Route::post('/question', 'QuestionController@store');

Route::post('/login', 'LoginController@login');
