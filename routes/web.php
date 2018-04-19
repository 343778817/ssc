<?php

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

Route::get('/','Home\StaticPageController@index');
Route::get('/register','Home\StaticPageController@register');
Route::get('/login','Home\StaticPageController@login');
Route::get('/promo','Home\StaticPageController@promo');
Route::get('/deposit','Home\StaticPageController@deposit');