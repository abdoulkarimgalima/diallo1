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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('product', 'ProductsController');


Route::get("/backoffice","produitsController@index");
Route::get("/produits","produitsController@index");

Route::get("/produits/{id}",function($id){
    return "suis la pour votre commerce  $id";
});


Route::get("/produits/{slug}","produitsController@show");
Route::get("/produit/{slug}","showController@show");
Route::get("/",function(){

    return view("home");
    
});

Route::get("/home","produitsController@index");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product', 'ProductsController@index')->name('affiche_Product');

Route::get('/categories', 'CategoriesController@index')->name('categories.index');

Route::get('categories/create','CategoriesController@create');
Route::post('categories/create','CategoriesController@store')->name("ajouter_category");

Route::get('/deliveryman/{id}/edit', 'DeliverymanController@edit')->name('deliveryman_edit');
Route::get('/deliveryman/index', 'DeliverymanController@index')->name('deliveryman_index');


Route::get('/products','ProductsController@index')->name('products');

Route::get('/products/create','ProductsController@create')->name('product_create');
Route::post('/products/create','ProductsController@store')->name('store_products');

Route::get ('/product/{id}editer','ProductsController@editer')->name('Product_editer');
Route::get('/product/index','ProductsController@index')->name('product_index');
