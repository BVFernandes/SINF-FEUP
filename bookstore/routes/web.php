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

Route::view('', 'overview')->name('overview');
Route::view('overview', 'overview')->name('overview');
Route::view('inventory', 'inventory')->name('inventory');
Route::view('logistics', 'logistics')->name('logistics');
Route::view('finances', 'finances')->name('finances');
Route::view('sales', 'sales')->name('sales');