<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ApiController@indexAction');
Route::get('/text', 'ApiController@textAction');
Route::get('/lk', 'ApiController@lkAction');
Route::get('/content_prose', 'ApiController@content_proseAction');
Route::get('/content_articles', 'ApiController@content_articlesAction');
Route::get('/content_poetry', 'ApiController@content_poetryAction');
Route::get('/auth', 'AuthController@auth');
Route::get('/search', 'ApiController@search');
