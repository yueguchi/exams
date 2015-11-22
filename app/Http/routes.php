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

# API
Route::get('api/{lang}/list/limit/{limit}/page/{page}/', 'Api\ExamApiController@index');
Route::get('api/{lang}/show/{id}/', 'Api\ExamApiController@show');

# FRONT
Route::get('front/api/list/', 'Front\ExamFrontController@showList');
Route::get('front/', 'Front\ExamFrontController@index');
Route::get('/', function() {
    return redirect('/front/');
});
