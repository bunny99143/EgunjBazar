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
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@welcome');


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


Route::resource('category','CategoryController')->names('category');

Route::resource('product','ProductController')->names('product');

Route::get('/products/{id}', 'HomeController@products')->name('products');
Route::get('/product-detail/{id}', 'HomeController@product_detail')->name('products-detail');

// Route::get('profile','ProfileController@profile');
// Route::post('addProfile','ProfileController@addProfile');

Route::resource('profile','ProfileController')->names('profile');

Route::resource('changepassword','ChangepasswordController')->names('changepassword');

Route::resource('contact_us', 'ContactController')->names('contact_us');
// Route::get('/contact_us', function () {
//     return view('contact_us');
// });


