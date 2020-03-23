<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/','PagesController@index');

Route::prefix('/produtos')->group(function () {
    Route::get('/', 'PagesController@index');
    Route::get('/new','PagesController@create')->name('create'); 
    Route::post('/add','PagesController@store')->name('save'); 
    Route::get('/admin','PagesController@admin')->name('admin');
    Route::get('/promocao','PagesController@promocao')->name('promocao');
    Route::get('/search','PagesController@search')->name('search');
    Route::get('/adminSearch','PagesController@adminSearch')->name('adminSearch');
    Route::post('/savepromocao','PagesController@storePromocao')->name('savepromo');
    Route::get('/','PagesController@show')->name('show');
    Route::get('/{$id}','PagesController@destroy')->name('delete');
});



