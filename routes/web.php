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
Route::get('login','AuthController@login')->name('login');
Route::post('authenticate','AuthController@authenticate')->name('authenticate');
Route::get('logout','AuthController@logout')->name('logout');
Route::get('register','AuthController@register')->name('register');
Route::post('register','AuthController@do_register')->name('do_register');

Route::get('poly_relationships','TrainController@poly_relationships');
Route::get('encrypt','TrainController@encrypt');

Route::namespace('Dashboard')->middleware('auth')->name('dashboard.')->prefix('admin')->group(function (){

//Route::prefix('dashboard')->group(function (){
    Route::get('/','DashboardController@index')->name('home');
    Route::resource('categories','CategoriesController');
    Route::resource('users','UserController');
    Route::resource('products','ProductsController');
    Route::resource('phones','PhonesController');
});

Route::get('/index','FrontSiteController@showHome')->name('frontSite.index');
Route::get('/contact','FrontSiteController@showContact')->name('frontSite.contact');
Route::get('/about','FrontSiteController@showAbout')->name('frontSite.about');
Route::get('/jewellery','FrontSiteController@showJewellery')->name('frontSite.jewellery');
Route::get('/shop','FrontSiteController@showShop')->name('frontSite.shop');



//Route::resource('users','Dashboard\UserController');



/*

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('frontSite.index');
})->name('frontSite.index');

Route::get('contact', function () {
    return view('frontSite.contact');
})->name('frontSite.contact');
Route::get('about', function () {
    return view('frontSite.about');
})->name('frontSite.about');

Route::get('jewellery', function () {
    return view('frontSite.jewellery');
})->name('frontSite.jewellery');

Route::get('shop', function () {
    return view('frontSite.shop');
})->name('frontSite.shop'); */

