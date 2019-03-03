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

Route::post('/index', 'CategoryController@inquirystore')->name('index');

Route::get('/reputed-clients', function() {return view('reputed-clients'); });

Route::get('/rubber-mold-pavers', 'ReviewController@rubbermoldview');
Route::post('/rubber-mold-pavers', 'ReviewController@rubbermoldpost')->name('rubbermold');

Route::get('/rcc-pipe', 'ReviewController@rccipeview');
Route::post('/rcc-pipe', 'ReviewController@rccpipepost')->name('rccpipe');

Route::get('/cover-block', 'ReviewController@coverblockview');
Route::post('/cover-block', 'ReviewController@coverblockpost')->name('coverblock');

Route::get('/curb-stone', 'ReviewController@curbstoneview');
Route::post('/curb-stone', 'ReviewController@curbstonepost')->name('curbstone');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin Routes
Route::get('/admin', 'TodoController@index')->middleware('auth');
Route::get('/profile', 'CategoryController@view')->middleware('auth');
Route::patch('/profile/{user}', 'CategoryController@update')->name('profile.update')->middleware('auth');

Route::get('/add-new-admin', 'CategoryController@adminadd')->middleware('auth');
Route::post('/add-new-admin', 'CategoryController@adminstore')->middleware('auth')->name('addnewadmin');
Route::get('/list-admin', 'CategoryController@listadmin')->middleware('auth');
Route::get('/edit-admin/{user}', 'CategoryController@editadmin')->middleware('auth');
Route::patch('/edit-admin/{user}/update', 'CategoryController@updateadmin')->middleware('auth')->name('user-update');
Route::get('/list-admin/{user}/delete', 'CategoryController@destroyadmin')->middleware('auth');

Route::post('/admin', 'TodoController@store')->name('admin')->middleware('auth');
Route::get('/admin/{todo}/delete', 'TodoController@destroy')->middleware('auth');


Route::get('/inquiry', 'CategoryController@inquiryList')->middleware('auth')->middleware('auth');

Route::get('/review', 'ReviewController@show')->middleware('auth');
Route::get('/review/{id}/approve', 'ReviewController@approve')->middleware('auth');
Route::get('/product/{review}', 'ReviewController@destroy')->middleware('auth');