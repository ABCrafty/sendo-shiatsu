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

// homepage
Route::get('/', 'HomeController@index')->name('home');

// shiatsu page
Route::get('/shiatsu', 'ShiatsuController@index')->name('front.shiatsu');

// do-in page
Route::get('/do-in', 'DoInController@index')->name('front.doin');

//prestations
Route::get('/prestations', 'PrestationsController@index')->name('front.prestations');

Route::get('/tarifs', 'PricesController@index')->name('front.prices');

// mentions légales
Route::get('mentions-legales', 'MentionsController@index')->name('mentions');

// Contact
Route::get('contact', 'Admin\ContactController@create')->name('contact.create');
Route::post('contact', 'Admin\ContactController@store')->name('contact.store');

// blog
Route::get('blog', 'PostsController@index')->name('front.blog.index');
Route::get('blog/{post}', 'PostsController@show')->name('front.blog.show');

// Authentification
Route::get('/login', 'Auth\LoginController@create')->name('login');
Route::get('/logout', 'Auth\LoginController@destroy')->name('logout');
Route::get('/password-request', 'Auth\LoginController@lostPassword')->name('password.request');
Route::post('/login', 'Auth\LoginController@store')->name('login.store');


// zone admin
Route::group(['prefix' => 'admin',  'middleware' => ['role:admin']], function()
{
    Route::get('/', 'Admin\DashboardController@index')->name('dashboard.index');

    // route page d'accueil
    Route::resource('homepage', 'Admin\HomeController');

    Route::resource('tarifs', 'Admin\PricesController');

    Route::resource('shiatsu', 'Admin\ShiatsuController');

    Route::resource('do-in', 'Admin\PricesController');

    Route::resource('blog', 'Admin\PostsController');

    Route::get('message', 'Admin\ContactController@index')->name('contact.index');
    Route::get('message/:id', 'Admin\ContactController@show')->name('contact.show');
    Route::delete('contact', 'Admin\ContactController@delete')->name('contact.delete');

    // users, profile
    Route::resource('users', 'Admin\UsersController', ['except' => 'destroy']);

});
