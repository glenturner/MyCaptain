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

Route::get('/', 'PagesController@index');

// sends email from form on welcome page
Route::post('/', 'PagesController@postIndex');

Route::get('/fund', 'PagesController@fund');

// welcome email upon registration
Route::get('/email', 'PagesController@email')->name('sendEmail');

Route::get('/calendar', 'PostsController@calendar');

Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::put('/home/{id}', 'HomeController@update')->name('home');

Route::get('/inbox', 'HomeController@inbox')->name('inbox');