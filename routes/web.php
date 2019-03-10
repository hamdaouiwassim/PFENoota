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

/**
 * auth routes
 */

Auth::routes();

/**
 * Landing
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
/**
 * outer public stories
 */


Route::get('/recent', 'PostsController@outer')->name('recentpost');
/**
 * User
 */

Route::get('/home', 'HomeController@index')->name('home')->middleware("auth");
/**
 * POST
 */
Route::get('/new-story', 'PostsController@index')->name('new-story')->middleware("auth");;
Route::post('/new-story', 'PostsController@store')->name('add-new-story')->middleware("auth");;
Route::get('/journal', 'PostsController@journal')->name('journal')->middleware("auth");;
Route::get('/favourit-writers', 'HomeController@favourite_writers')->name('favourite-writers')->middleware("auth");;
Route::get('/top-writers', 'HomeController@top_writers')->name('top-writers')->middleware("auth");;
Route::get('/changepassword', 'HomeController@index')->name('changepassword')->middleware("auth");;
Route::get('/monthly-writing-contest', 'HomeController@monthly_writing_contest')->name('monthly-writing-contest')->middleware("auth");;
Route::get('/statistics', 'HomeController@statistics')->name('statistics')->middleware("auth");;

/**
 * Comment
 */

Route::post('/new-comment', 'CommentController@store')->name('add-new-comment')->middleware("auth");;


/**
 * errors
 */

Route::get('404', ['as' => '404', 'uses' => 'ErrorController@notfound']);
Route::get('500', ['as' => '500', 'uses' => 'ErrorController@fatal']);
Route::get('419', ['as' => '419', 'uses' => 'ErrorController@slowdown']);

