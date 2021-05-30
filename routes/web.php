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

//Report
Route::get('/report', 'ReportController@index');
Route::get('/report/create', 'ReportController@create');
Route::post('/report/store', 'ReportController@store');
Route::get('/report/edit/{id}', 'ReportController@edit');
Route::post('/report/update/{id}', 'ReportController@update');
Route::get('/report/hapus/{id}', 'ReportController@destroy');
