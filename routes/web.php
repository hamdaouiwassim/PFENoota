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
Route::get('/new-story', 'HomeController@new_story')->name('new-story');
Route::post('/new-story', 'HomeController@add_new_story')->name('add-new-story');
Route::get('/journal', 'HomeController@journal')->name('journal');
Route::get('/favourit-writers', 'HomeController@favourite_writers')->name('favourite-writers');
Route::get('/top-writers', 'HomeController@top_writers')->name('top-writers');
Route::get('/changepassword', 'HomeController@index')->name('changepassword');
Route::get('/monthly-writing-contest', 'HomeController@monthly_writing_contest')->name('monthly-writing-contest');
Route::get('/statistics', 'HomeController@statistics')->name('statistics');

Route::get('404', ['as' => '404', 'uses' => 'ErrorController@notfound']);
Route::get('500', ['as' => '500', 'uses' => 'ErrorController@fatal']);