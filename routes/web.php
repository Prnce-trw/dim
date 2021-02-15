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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', 'DashboardController');
Route::resource('jsindex/', 'JSController');

Route::get('/clc', function() {
	Artisan::call('cache:clear');
	Artisan::call('config:clear');
	Artisan::call('config:cache');
	Artisan::call('view:clear');
    // Artisan::call('optimize');
    // Artisan::call('clear-compiled');
    // session()->forget('key');
	return "Cleared!";
});
