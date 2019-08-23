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
//     return view('Utama');
// });

Route::get('/','Utama@index');
Route::post('/pushData','Utama@store');
Route::get('/Login','Login@index');
Route::post('/Daftar','Login@Register');
Route::post('/Masuk','Login@Masuk');
Route::get('/Keluar','Login@Keluar');
Route::post('/AddCart','Order@Order');