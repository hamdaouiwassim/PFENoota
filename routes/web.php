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

Route::group(['middleware'=>['auth','admin']] , function (){
   Route::get('/admin','AdminController@index');
   Route::get('/post/{id}/bloque', 'AdminController@bloquePost')->name('bloquerpost');
   Route::get('/user/{id}/bloque', 'AdminController@bloqueUser')->name('bloqueruser');
});
//Route::get('/recent', 'PostsController@outer')->name('recentpost');
/**
 * User
 */

Route::get('/user/{id}/unflow','UsersController@UnfollowUser')->name('UnfollowUser')->middleware("auth");
Route::get('/profile', 'HomeController@index')->name('home')->middleware("auth");
/**
 * POST
 */
Route::get('/post/{id}/reaction/{reaction}','PostsController@addReaction')->name('addReaction')->middleware("auth");
Route::get('/posts/favoris','PostsController@Bookmarks')->name('Bookmarks')->middleware("auth");
Route::get('/post/{id}/favoris','PostsController@PostBookmark')->name('PostBookmark')->middleware("auth");
Route::get('/post/{id}','PostsController@singlepost')->name('singlepost')->middleware("auth");
Route::get('/recents','PostsController@recents')->name('recents');
Route::get('/user/{id}', 'UsersController@ShowUser')->name('showuser')->middleware("auth");
Route::get('/user/{id}/follow/valide', 'UsersController@FollowUser')->name('followuser')->middleware("auth");
Route::post('/filter','PostsController@filter')->name('new-filter')->middleware("auth");
Route::get('/new-story', 'PostsController@index')->name('new-story')->middleware("auth");
Route::post('/new-story', 'PostsController@store')->name('add-new-story')->middleware("auth");
Route::get('/mywritings', 'PostsController@journal')->name('journal')->middleware("auth");
Route::get('/favourit-writers', 'UsersController@favourite_writers')->name('favourite-writers')->middleware("auth");
Route::get('/top-writers', 'UsersController@top_writers')->name('top-writers')->middleware("auth");
Route::get('/changepassword', 'UsersController@changepwview')->name('loadchangepassword')->middleware("auth");
Route::post('/user/changepw', 'UsersController@changepw')->name('changeuserpassword')->middleware("auth");
Route::post('/user/changeinfo', 'UsersController@changeinfo')->name('changeuserinfo')->middleware("auth");
Route::get('/monthly-writing-contest', 'UsersController@monthly_writing_contest')->name('monthly-writing-contest')->middleware("auth");;
Route::get('/statistics', 'UsersController@statistics')->name('statistics')->middleware("auth");
Route::get('/post/{id}/signaler', 'PostsController@signaler')->name('signaler')->middleware("auth");


/**
 * Comments
 */
Route::post('/new-replay', 'ReplaysController@AddReplay')->name('add-new-replay')->middleware("auth");
Route::post('/new-comment', 'CommentsController@store')->name('add-new-comment')->middleware("auth");

Route::get('/comments/manage', 'CommentsController@CommentsManager')->name('add-new-comment')->middleware("auth");


/**
 * errors
 */

Route::get('404', ['as' => '404', 'uses' => 'ErrorController@notfound']);
Route::get('500', ['as' => '500', 'uses' => 'ErrorController@fatal']);
//Route::get('419', ['as' => '419', 'uses' => 'ErrorController@slowdown']);

