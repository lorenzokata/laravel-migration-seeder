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
// Home route
Route::get('/', 'HomeController@home')->name('home');

// VacationPackages route
Route::get('/vacation_packages', 'VacationPackagesController@vacation_packages')->name('vacation_packages');
