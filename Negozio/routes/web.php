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


Auth::routes(['signup' => false]);
Route::get('/', function () {
     return redirect('home');//->middleware('IsAdmin')
});

//ROTTE DI USER

Route::get('/user/register', 'UserController@register');

Route::get('/user/edit/{id}', 'UserController@edit');
Route::get('/user/', 'UserController@index');
Route::get('/user/{id}', 'UserController@show');
//Route::post('/user/update/{id}', 'UserController@update');
Route::get('/user/destroy/{id}', 'UserController@destroy');
Route::resource('user', 'UserController', ['except' => 'destroy', 'show', 'index', 'edit']);


//rotte di item->middleware('isAdmin')
Route::get('/item/create', 'ItemController@create');
Route::get('/item/{id}', 'ItemController@show');
Route::post('/item', 'ItemController@store');
Route::get('/item/destroy/{id}', 'ItemController@destroy');
Route::get('/item/edit/{id}', 'ItemController@edit');
Route::get('/item', 'ItemController@index');
Route::post('/item/visualizzacategorie', 'ItemController@visualizzacategorie');
Route::post('/item/cercatitolo', 'ItemController@cercatitolodescrizione');


//ROTTE DI BASKET
//Route::get('/basket/create', 'BasketController@create');
Route::get('/basket/', 'BasketController@index');
Route::post('/basket/add', 'BasketController@add');
Route::get('/basket/{id}', 'BasketController@show');
Route::get('/basket/destroy/{id}', 'BasketController@destroy');
//Route::post('/basket', 'BasketController@store');
//Route::get('/basket/edit/{id}', 'BasketController@edit');


//ROTTE DI ORDER
Route::get('/order/create', 'OrderController@create');
//Route::get('/order/{id}', 'OrderController@show');
Route::post('/order', 'OrderController@store');
//Route::get('/order/edit/{id}', 'OrderController@edit');
Route::get('/order', 'OrderController@index');
Route::get('/order', 'OrderController@show');
Route::get('/order/update/{id}', 'OrderController@update');
Route::get('/order/destroy/{id}', 'OrderController@destroy');
//ROTTE DI PURCHASE
Route::get('/purchase/create', 'PurchaseController@create');
Route::get('/purchase/{id}', 'PurchaseController@show');
Route::post('/purchase', 'PurchaseController@store');
Route::get('/purchase/edit/{id}', 'PurchaseController@edit');
//Route::get('/purchase', 'PurchaseController@index');
Route::get('/purchase/destroy/{id}', 'PurchaseController@destroy');
//ROTTE DI CARD
Route::get('/card/create', 'CardController@create');
Route::get('/card/{id}', 'CardController@show');
Route::post('/card', 'CardController@store');
Route::get('/card/ordineeffettuato', 'CardController@show');
//Route::get('/card/edit/{id}', 'CardController@edit');
Route::get('/card', 'CardController@index');
//Route::get('/card/update/{id}', 'CardController@update');
Route::get('/card/destroy/{id}', 'CardController@destroy');

//ALTRE ROTTE
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




