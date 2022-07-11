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

// Route esempio
// Route::get('/', function () {
//     return view('welcome');
// });

// route home
Route::get('/', function () {
    return view('home');
});

// route about
Route::get('/about', function () {
    return view('about');
});

// route contact
Route::get('/contact', function () {
    return view('contact');
});

// route join us
Route::get('/join-us', function () {
    return view('join-us');
});




