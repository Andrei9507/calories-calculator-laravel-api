<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Exemple
// Route::get('articles', 'ArticleController@index');
// Route::get('articles/{article}', 'ArticleController@show');
// Route::post('articles', 'ArticleController@store');
// Route::put('articles/{article}', 'ArticleController@update');
// Route::delete('articles/{article}', 'ArticleController@delete');




// Route::get('quantities', ['middleware' => 'cors' , 'quantities'=> 'QuantityController@index']);
// quantities routes
Route::get('quantities', 'QuantityController@index');
Route::post('quantities', 'QuantityController@store');
// route for history calories
Route::get('quantities-history/{day?}/{month?}/{year?}','QuantityController@history');
// Route::get('events/{year?}/{month?}/{day?}', 'EventController@show')
// products routes
Route::get('products', 'ProductController@index');
Route::post('products', 'ProductController@store');
Route::put('products/{product}', 'ProductController@update');
Route::delete('products/{product}', 'ProductController@delete');
// Route::get('articles/{article}', 'ArticleController@show');