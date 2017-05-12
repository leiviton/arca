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
    $titulo = 'CCARCA';
    $year = date('Y');
    return view('welcome',compact('titulo', 'year'));
});

Route::get('/galery', function () {
    $titulo = 'CCARCA';
    $year = date('Y');
    return view('index',compact('titulo', 'year'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
