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

Route::get('lurenjia', function () {
    return 'Hello, LuRenJia';
});

Route::get('hello', function () {
    return 'Hello, Welcome to LaravelAcademy.org';
});