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
Route::get('/', 'HomeController@index')
    ->name('home.index');

Route::resource('travel_package','TravelPackageController');
Route::resource('gallery','GalleryController');
Route::resource('transaction','TransactionController');
Route::get('/', 'DashboardController@index')
            ->name('dashboard');
