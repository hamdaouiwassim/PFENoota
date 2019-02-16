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
Route::get('/aboutus', function () {
    return view('Aboutus');
});
Route::get('/contact', function () {
        return view('Contact');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/new-story', 'HomeController@index')->name('new-story');
Route::get('/journal', 'HomeController@index')->name('journal');
Route::get('/favourit-writers', 'HomeController@index')->name('favourite-writers');
Route::get('/top-writers', 'HomeController@index')->name('top-writers');
Route::get('/changepassword', 'HomeController@index')->name('changepassword');
Route::get('/monthly-writing-contest', 'HomeController@index')->name('monthly-writing-contest');
Route::get('/statistics', 'HomeController@index')->name('statistics');
Route::get('404', ['as' => '404', 'uses' => 'ErrorController@notfound']);
Route::get('500', ['as' => '500', 'uses' => 'ErrorController@fatal']);