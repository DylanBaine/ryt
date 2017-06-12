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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/login', 'PagesController@login')->name('login');
Route::get('/register', 'PagesController@register')->name('register');

Route::get('/bands', 'BandAuth\PagesController@index');
Route::get('/promoters', 'PromoterAuth\PagesController@index');


Route::group(['prefix' => 'band'], function () {

  Route::get('/login', 'BandAuth\LoginController@showLoginForm');
  Route::post('/login', 'BandAuth\LoginController@login');
  Route::post('/logout', 'BandAuth\LoginController@logout');

  Route::get('/register', 'BandAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'BandAuth\RegisterController@register');

  Route::Put('{slug}/profile-image', 'BandAuth\BandInfoController@uploadProfileImage');
  Route::Put('{slug}/header-image', 'BandAuth\BandInfoController@uploadHeaderImage');
  Route::Put('{slug}/info', 'BandAuth\BandInfoController@updateInfo');  
  Route::Put('{slug}/bio', 'BandAuth\BandInfoController@updateBio');
  
  Route::get('home', 'BandAuth\PagesController@home')->middleware('band');

  Route::post('/password/email', 'BandAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'BandAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'BandAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'BandAuth\ResetPasswordController@showResetForm');

  Route::get('{slug}', 'BandAuth\PagesController@profile');
  
});









Route::group(['prefix' => 'promoter'], function () {

  Route::get('/login', 'PromoterAuth\LoginController@showLoginForm');
  Route::post('/login', 'PromoterAuth\LoginController@login');
  Route::post('/logout', 'PromoterAuth\LoginController@logout');

  Route::get('/register', 'PromoterAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'PromoterAuth\RegisterController@register');

    Route::Put('{slug}/profile-image', 'PromoterAuth\PromoterInfoController@uploadProfileImage');
  Route::Put('{slug}/header-image', 'PromoterAuth\PromoterInfoController@uploadHeaderImage');
  Route::Put('{slug}/info', 'PromoterAuth\PromoterInfoController@updateInfo');  
  Route::Put('{slug}/bio', 'PromoterAuth\PromoterInfoController@updateBio');

  Route::get('home', 'PromoterAuth\PagesController@home')->middleware('promoter');

  Route::post('/password/email', 'PromoterAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'PromoterAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'PromoterAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'PromoterAuth\ResetPasswordController@showResetForm');

  Route::get('{slug}', 'PromoterAuth\PagesController@profile');

});
