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
*

Route::get('/', function () {
    return view('welcome');
});
*/



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/contact', 'HomeController@contact')->name('contact');
Route::get('/home/mission', 'HomeController@mission')->name('mission');
Route::get("/", "HomeController@index");



Route::get('/categories', 'CategoriesController@index')->name('categories.index');
Route::get('categories/create','CategoriesController@create');
Route::post('categories/create','CategoriesController@store')->name("ajouter_category");

Route::get('products/{id}/edit','ProductsController@edit')->name("editer_product");
Route::patch('products/{id}/edit', 'ProductsController@update')->name('update_product');
Route::get('/products','ProductsController@index')->name('products');
Route::get('/products/create','ProductsController@create')->name('products_create');
Route::post('/products/store','ProductsController@store')->name('store_products');

Route::post('/ajout_category', 'AjaxController@ajout_category');