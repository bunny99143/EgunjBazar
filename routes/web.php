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
    return view('welcome');
});

// Route::post('insertuser', 'UserController@insert');
// insert
// Route::post('register', 'UserController@register');
// Route::post('login', 'UserController@login');
// Route::get('dashboard', 'UserController@dashboard');


// Route::resource('users','UserController'); https://www.gettyimages.in/photos/apmc-market?family=editorial&page=2&phrase=apmc%20market&sort=mostpopular

Route::get('/login', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
