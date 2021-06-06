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

Route::get('/forum/read/1','AnswerController@index'); // 1 disini nantinya diganti pakai {id} dimana dia mengambil id dari pertanyaan yang dipilih
Route::get('/forum/read/1/answer', 'AnswerController@create');
Route::post('/forum/read/1/store', 'AnswerController@store');
Route::get('/forum/read/1/edit/{id_answer}', 'AnswerController@edit');
Route::post('/forum/read/1/update/{id_answer}', 'AnswerController@update');
Route::get('/forum/read/1/hapus/{id_answer}', 'AnswerController@destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('pages/profiles', 'ProfilesController@show');