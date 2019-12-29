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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/about', 'StaticPagesController@about')->name('about');
Route::get('/help', 'StaticPagesController@help')->name('help');

Route::get('/signup', 'UserController@create')->name('signup');
Route::get('/signup/confirm/{token}', 'UserController@confirmEmail')->name('confirm_email');

Route::resource('users', UserController::class);
Route::get('/users/{user}/followings', 'UserController@followings')->name('users.followings');
Route::get('/users/{user}/followers', 'UserController@followers')->name('users.followers');
Route::post('/users/followers/{user}', 'FollowerController@store')->name('followers.store');
Route::delete('users/followers/{user}', 'FollowerController@destroy')->name('followers.destroy');

Route::get('login', 'LoginController@create')->name('login.create');
Route::post('login', 'LoginController@store')->name('login.store');
Route::delete('logout', 'LoginController@destroy')->name('logout');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::resource('statuses', StatusController::class, ['only' => ['store', 'destroy']]);
