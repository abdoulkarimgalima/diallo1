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

Route::resource('products', 'ProductsController');


Route::get("/backoffice","ProductsController@index");
Route::get("/produits","ProductsController@index");

Route::get("/produits/{id}",function($id){
    return "suis la pour votre commerce  $id";
});


Route::get('/products','ProductsController@index')->name('products');
Route::get('/products/create','ProductsController@create')->name('products_create');
Route::post('/products/create','ProductsController@store')->name('store_products');


Route::get("/produit/{slug}","produitsController@show");
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

Route::get('products/{id}/edit','ProductsController@edit')->name("editer_produit");

Route::patch('products/{id}/edit', 'ProductsController@update')->name('update_product');

Route::resource('products', 'ProductsController');


Route::get('/products','ProductsController@index')->name('products');

Route::get('/products/create','ProductsController@create')->name('product_create');
Route::post('/products/create','ProductsController@store')->name('store_products');

Route::get ('/product/{id}editer','ProductsController@editer')->name('Product_editer');
Route::get('/product/index','ProductsController@index')->name('product_index');

Route::get('/edit', function () {
    return view('ajout');

});
Route::post('/edit', function () {
    return view('formulaire recu');

    

});

Route::get('/products/create', function () {

    return view('products/create');

});