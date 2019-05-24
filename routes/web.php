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


//Untuk mengarahkan ke halaman /Dashboard
Route::get('/Dashboard-Admin', 'AdminController@dashboard');

//Untuk mengarahkan ke halaman /Chart
Route::get('/Chart', 'ChartController@chart');
//Route::get('/get_suhu', 'ChartController@suhu')->name('data');
Route::get('/get_suhu', function () {
    return ['value' => 100];
})->name('data');

//Untuk mengarahkan ke halaman /Tables
Route::get('/Tables', 'TablesController@tables');

//Untuk mengarahkan ke halaman /Login
Route::get('/Login', 'AuthController@login');
Route::get('/Logout', 'AuthController@logout');
Route::post('/postlogin', 'AuthController@postlogin');


// 
