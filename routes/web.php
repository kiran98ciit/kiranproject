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
Route::get('123','Hellocontroller@gettnigvale');
Route::post('/submit','Hellocontroller@index');

Route::get('/', function () {
    return view('contacts');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/contact', function () {
    return view('contact');
});


?>
