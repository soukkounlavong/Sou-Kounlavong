<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    $html="<h1>Welcome to Hanoi</h1>";
    return $html;
});
Route::get('/greeding', function () {
    return view('greeding', ['name' => 'Jname']);
});
Route::get('/customer',
'App\Http|Controllers\CustomerController@index');

Route::get('getProduct',
'App\Http\Controllers\ProductController@getProducts');

Route::get('/getProductsByBand',
'App\Http\Controllers\ProductController@getProductsByBand')
->name('admin.product.getProductsByBand');
Route::get('/getProductsbyYear',
'App\Http\Controllers\ProductController@getProductsbyYear')
->name('admin.product.getProductsbyYear');
Route::get('insertProduct',
'App\Http\Controllers\ProductController@insertProduct');
Route::get('daleteProduct',
'App\Http\Controllers\ProductController@daleteProduct');
Route::get('updateProduct',
'App\Http\Controllers\ProductController@updateProduct');
Route::get('getProductsbyBand',
'App\Http\Controllers\ProductController@getProductsbyBand')
->name('admin.product.getProducstByBand');