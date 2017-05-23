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
Route::get('/videos',['as'=>'videos.index','uses'=>'VideosController@index']);

Route::get('/contact',['as'=>'contact.index','uses'=>'ContactController@index']);

Route::post('contact', 'ContactController@postContato');

Route::get('/', function () {
    $titulo = 'CCARCA';
    $year = date('Y');
    return view('welcome',compact('titulo', 'year'));
});

Route::get('/galery', ['as'=>'galery.index','uses'=>'GaleryController@index']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
