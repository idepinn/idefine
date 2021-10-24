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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "name" => "One Agustiranda",
        "image" => "profile.jpg"
    ]);
});

Route::get('/connection', function () {
    return view('connection', [
        "title" => "Connection"
    ]);
});

Route::get('/idea', function () {
    return view('idea', [
        "title" => "Idea"
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});
