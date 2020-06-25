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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/menu', 'HomeController@menu');

Route::get('/about', 'HomeController@about');

Route::get('/contact', 'HomeController@contact');

Route::get('/order', 'OrderController@order');

Route::get('/myaccount', 'OrderController@myaccount');

Route::get('/admin', 'AdminController@admin');

// users

Route::get('/admin/users/', 'UserController@index')->name('users');

Route::get('/admin/users/create', 'UserController@create');

Route::post('/admin/users/store', 'UserController@store')->name('user_store');

Route::get('/admin/users/delete/{id}', 'UserController@destroy');

Route::get('/admin/users/edit/{id}', 'UserController@edit');

Route::post('/admin/users/update', 'UserController@update')->name('user_update');

// products

Route::get('/admin/products/', 'ProductController@index')->name('products');

Route::get('/admin/products/create', 'ProductController@create');

Route::post('/admin/products/store', 'ProductController@store')->name('product_store');

Route::get('/admin/products/delete/{id}', 'ProductController@destroy');

Route::get('/admin/products/edit/{id}', 'ProductController@edit');

Route::post('/admin/products/update', 'ProductController@update')->name('product_update');


// fastfoods

Route::get('/admin/fastfoods/', 'FastfoodController@index')->name('fastfoods');

Route::get('/admin/fastfoods/create', 'FastfoodController@create');

Route::post('/admin/fastfoods/store', 'FastfoodController@store')->name('fastfood_store');

Route::get('/admin/fastfoods/delete/{id}', 'FastfoodController@destroy');

Route::get('/admin/fastfoods/edit/{id}', 'FastfoodController@edit');

Route::post('/admin/fastfoods/update', 'FastfoodController@update')->name('fastfood_update');


// soups

Route::get('/admin/soups/', 'SoupController@index')->name('soups');

Route::get('/admin/soups/create', 'SoupController@create');

Route::post('/admin/soups/store', 'SoupController@store')->name('soup_store');

Route::get('/admin/soups/delete/{id}', 'SoupController@destroy');

Route::get('/admin/soups/edit/{id}', 'SoupController@edit');

Route::post('/admin/soups/update', 'SoupController@update')->name('soup_update');


// drinks

Route::get('/admin/drinks/', 'DrinkController@index')->name('drinks');

Route::get('/admin/drinks/create', 'DrinkController@create');

Route::post('/admin/drinks/store', 'DrinkController@store')->name('drink_store');

Route::get('/admin/drinks/delete/{id}', 'DrinkController@destroy');

Route::get('/admin/drinks/edit/{id}', 'DrinkController@edit');

Route::post('/admin/drinks/update', 'DrinkController@update')->name('drink_update');
