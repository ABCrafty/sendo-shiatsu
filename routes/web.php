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


Route::get('/tarifs', 'PricesController@index')->name('front.prices');

// mentions légales
Route::get('mentions-legales', 'MentionsController@index')->name('mentions');


// blog
Route::get('blog', 'PostsController@index')->name('front.blog.index');
Route::get('blog/{post}', 'PostsController@show')->name('front.blog.show');


// Authentification
Route::get('/register', 'Auth\RegisterController@create')->name('register.create');
Route::get('/login', 'Auth\LoginController@create')->name('login');
Route::get('/logout', 'Auth\LoginController@destroy')->name('logout');
Route::get('/password-request', 'Auth\LoginController@lostPassword')->name('password.request');
Route::post('/register', 'Auth\RegisterController@store')->name('register.store');
Route::post('/login', 'Auth\LoginController@store')->name('login.store');


// zone admin
Route::group(['prefix' => 'admin',  'middleware' => ['role:admin']], function()
{
    Route::get('/', 'Admin\DashboardController@index')->name('dashboard.index');
    //Route::any('user-data', 'Admin\UsersController@ajaxListing')->name('datatables.data');
    //Route::any('blog-data', 'Admin\PostsController@ajaxListing')->name('datatables.blogData');

    // route page d'accueil
    Route::resource('homepage', 'Admin\HomeController');

    Route::resource('tarifs', 'Admin\PricesController');

    Route::resource('shiatsu', 'Admin\ShiatsuController');

    Route::resource('do-in', 'Admin\PricesController');

    // users, profile
    //Route::get('users/{user}/delete', 'Admin\UsersController@destroy')->name('users.destroy');
    //Route::resource('users', 'Admin\UsersController', ['except' => 'destroy']);


    // blog
    Route::get('blog/{blog}/delete', 'Admin\PostsController@destroy')->name('blog.destroy');
    Route::resource('blog', 'Admin\PostsController', ['except' => 'destroy']);
});
