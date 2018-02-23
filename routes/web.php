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


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@index');
Route::get('/about', 'PagesController@about');
//Route::get('/login', 'PagesController@login');
//Route::get('/register', 'PagesController@register');
Route::get('/services', 'PagesController@services');
Route::get('/search', 'PostsController@searchBlade');
//Route::get('/createPost', 'PostsController@store');

Route::get('posts/search', 'PostsController@searchBlade');

Route::resource('posts', 'PostsController');
Route::resource('users', 'UsersController');
Route::resource('searchResults', 'SearchController');
Route::resource('queries', 'QueryController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
