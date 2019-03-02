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

// Frontend Routes
Route::get('/', 'CategoryController@index');

Route::get('/index', 'CategoryController@index');

Route::get('/jumbo-paver', 'ReviewController@jumbopaver');
Route::get('/zigzag-paver', 'ReviewController@zigzag');
Route::get('/bricks', 'ReviewController@bricks');
Route::get('/curb-stone', 'ReviewController@curbstone');
Route::get('/i-paver', 'ReviewController@iPaver');

Route::get('/product', 'ReviewController@create');
Route::post('/product', 'ReviewController@store')->name('review');
Route::get('/review', 'ReviewController@show');
Route::get('/review/{id}/approve', 'ReviewController@approve');
Route::get('/product/{review}', 'ReviewController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin Routes
Route::get('/admin', 'TodoController@index')->middleware('auth');
Route::get('/profile', function(){ return view('profile');});
Route::post('/profile', 'Auth\RegisterController@update')->name('profile')->middleware('auth');

Route::post('/admin', 'TodoController@store')->name('admin');
Route::get('/admin/{todo}/delete', 'TodoController@destroy');

Route::get('/add-category', 'CategoryController@create')->middleware('auth');
Route::post('/add-category', 'CategoryController@store')->name('add-category')->middleware('auth');
Route::get('/list-category', 'CategoryController@show')->middleware('auth');
Route::get('/list-category/{category}/delete', 'CategoryController@destroy')->middleware('auth');

Route::post('/index', 'CategoryController@inquirystore')->name('index');
Route::get('/inquiry', 'CategoryController@inquiryList')->middleware('auth');