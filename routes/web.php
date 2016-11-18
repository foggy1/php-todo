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

Route::get('/login', function() {
    return view('login');
})->name('login');

Route::post('/users', function() {
});

Auth::routes();

Route::get('/home', 'UserListController@index');

Route::resource('user.lists', 'UserListController');

Route::resource('list.tasks', 'ListTaskController');
