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
Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');

// blog
Route::get('blog', 'PostsController@index')->name('front.blog.index');
Route::get('blog/{post}', 'PostsController@show')->name('front.blog.show');

// Authentification
Route::get('/login', 'Auth\LoginController@create')->name('login');
Route::get('/logout', 'Auth\LoginController@destroy')->name('logout');
Route::get('/password-request', 'Auth\LoginController@lostPassword')->name('password.request');
Route::post('/login', 'Auth\LoginController@store')->name('login.store');

Auth::routes();


// zone admin
Route::group(['prefix' => 'admin',  'middleware' => ['role:admin']], function()
{
    Route::get('/', 'Admin\DashboardController@index')->name('dashboard.index');

    // route page d'accueil
    Route::get('accueil', 'Admin\HomeController@show')->name('admin.homepage');
    Route::post('accueil', 'Admin\HomeController@update')->name('admin.homepage.update');

    Route::get('shiatsu', 'Admin\ShiatsuController@show')->name('admin.shiatsu.show');
    Route::post('shiatsu', 'Admin\ShiatsuController@update')->name('admin.shiatsu.update');

    Route::get('do-in', 'Admin\DoInController@show')->name('admin.doin.show');
    Route::post('do-in', 'Admin\DoInController@update')->name('admin.doin.update');

    Route::get('temoignages', 'Admin\WitnessController@index')->name('admin.witness.index');
    Route::get('temoignage/{id}', 'Admin\WitnessController@show')->name('admin.witness.show');
    Route::post('temoignage', 'Admin\WitnessController@store')->name('admin.witness.store');
    Route::post('temoignage/edit', 'Admin\WitnessController@update')->name('admin.witness.update');
    Route::delete('temoignage', 'Admin\WitnessController@delete')->name('admin.witness.delete');

    Route::get('tarif', 'Admin\PricesController@index')->name('admin.prices.index');
    Route::get('tarif/{id}', 'Admin\PricesController@show');
    Route::post('tarif', 'Admin\PricesController@create')->name('admin.prices.create');
    Route::put('tarif', 'Admin\PricesController@update')->name('admin.prices.update');
    Route::delete('tarif', 'Admin\PricesController@destroy')->name('admin.prices.destroy');

    Route::resource('blog', 'Admin\PostsController');

    Route::get('message', 'Admin\ContactController@index')->name('contact.index');
    Route::post('message', 'Admin\ContactController@show')->name('contact.show');
    Route::delete('message', 'Admin\ContactController@delete')->name('contact.delete');

    // users, profile
    Route::resource('users', 'Admin\UsersController', ['except' => 'destroy']);

});
