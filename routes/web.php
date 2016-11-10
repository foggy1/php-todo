<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/users/new', function() {
    return view('users/new');
});

Route::get('/login', function() {
    return view('login');
})->name('login');

Route::post('/users', function() {
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('users.lists', 'UserListController');
