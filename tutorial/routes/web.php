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
Route::get('/users/{id}', function ($id) {
    return view('users');
});
Route::get('/users/{id}', function ($id) {
    
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/edit', function () {
    return view('edit');
});
Route::get('/show', 'HelloController@show');