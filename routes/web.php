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
    return view('login');
});




Route::group(['middleware'=>"web"] , function(){

    Route::get('/home','App\Http\Controllers\itemController@getFeatured');

    Route::post('/login','App\Http\Controllers\userController@login');

    Route::post('/register','App\Http\Controllers\userController@register');

    Route::get('/shop','App\Http\Controllers\itemController@getItem');

    Route::get('/addCart/{itemID}/{userID}','App\Http\Controllers\itemController@addToCart');

    Route::get('/cart','App\Http\Controllers\itemController@getCartItems');

    Route::get('/delete/{cartID}','App\Http\Controllers\itemController@deleteFromCart');

    Route::get('/checkout','App\Http\Controllers\itemController@checkout');

    Route::get('/register', function () {
    return view('register');
    });

    Route::get('/login', function () {
    return view('login');
    });

    Route::get('/about', function () {
        return view('about');
    });

});
