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

//home
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Profile
Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade');
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons');
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

//Report
Route::group(['middleware' => 'auth'], function(){
    Route::get('/report', 'ReportController@index');
    Route::get('/report/create', 'ReportController@create');
    Route::post('/report/store', 'ReportController@store');
    Route::get('/report/edit/{id}', 'ReportController@edit');
    Route::post('/report/update/{id}', 'ReportController@update');
    Route::get('/report/hapus/{id}', 'ReportController@destroy');
});


//forum
Route::get('/forum/read/1','AnswerController@index'); // 1 disini nantinya diganti pakai {id} dimana dia mengambil id dari pertanyaan yang dipilih
Route::get('/forum/read/1/answer', 'AnswerController@create');
Route::post('/forum/read/1/store', 'AnswerController@store');
Route::get('/forum/read/1/edit/{id_answer}', 'AnswerController@edit');
Route::post('/forum/read/1/update/{id_answer}', 'AnswerController@update');
Route::get('/forum/read/1/hapus/{id_answer}', 'AnswerController@destroy');


Route::get('pages/profiles', 'ProfilesController@show');




Route::get('/fiturfile', 'FileController@index');
Route::get('/fiturfile/tambahfile', 'FileController@tambah');
Route::post('/fiturfile/simpanfile','FileController@simpan');
