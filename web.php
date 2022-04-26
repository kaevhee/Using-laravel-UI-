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
    return view('layouts.master');
});


Route::get('/about', function () {
    return view('layouts.about');
})->name('about');


Route::get('/contact', function () {
    return view('layouts.contact');
})->name('contact');



Route::get('/tour', function () {
    return view('tour');
});

Route::get('/login', 'UserController@login')->middleware('alreadyLoggedIn');
// Route::post('/login', 'UserController@loginuser');


Route::get('/register', 'UserController@register')->middleware('alreadyLoggedIn');
Route::post('/register-user', 'UserController@registeruser')->name('register-user');

Route::post('/login-user', 'UserController@loginuser')->name('login-user');

Route::get('/dashboard', 'UserController@dashboard')->middleware('isLoggedin');
Route::get('/logout', 'UserController@logout');






// Route::get("tour", "tour");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
