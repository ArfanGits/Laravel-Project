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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/','Frontend\HomeController@index')->name('home');
Route::get('404','Frontend\ErrorController@index')->name('404');
Route::get('blog','Frontend\BlogController@index')->name('blog');
Route::get('blog-details','Frontend\BlogDetailController@index')->name('blog-details');
Route::get('category','Frontend\CategoryController@index')->name('category');
Route::get('checkout','Frontend\CheckoutController@index')->name('checkout');
Route::get('contact','Frontend\ContactController@index')->name('contact');
Route::get('product-details','Frontend\ProductdetailsController@index')->name('product.details');
Route::get('faq','Frontend\FAQController@index')->name('faq');