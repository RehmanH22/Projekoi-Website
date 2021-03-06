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
//MAIN
Route::get('/', function () {
    return view('mainPages.welcome');
});

Route::get('/gallery', function () {
    return view('mainPages.gallery');
});

Route::get('/process', function () {
    return view('mainPages.process');
});

Route::get('/faq', function () {
    return view('mainPages.faq');
});

Route::get('/about', function () {
    return view('mainPages.about');
});
