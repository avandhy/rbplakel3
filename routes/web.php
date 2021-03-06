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

//Per-Auth
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Roles
//Route::get('pages/profiles', 'ProfilesController@show');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
	//Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    //Zaldi baru
    //Route::post('profile', ['as' => 'profile.store', 'uses' => 'ProfileController@store']);
    //Route::post('profile', ['as' => 'profile.index', 'uses' => 'ProfileController@index']);
    Route::post('/profile/store', 'PofileController@store');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

    Route::get('pages/profiles', 'ProfilesController@show');
    Route::post('pages/profiles', 'ProfilesController@store');

    //Report
    Route::get('/report/create', 'ReportController@create');
    Route::post('/report/store', 'ReportController@store');


    //forum
    Route::get('/forum/read/{id_question}','AnswerController@index')->name('answer'); // 1 disini nantinya diganti pakai {id} dimana dia mengambil id dari pertanyaan yang dipilih
    Route::get('/forum/read/{id_question}/answer', 'AnswerController@create');
    Route::post('/forum/read/{id_question}/store', 'AnswerController@store');
    Route::get('/forum/read/{id_question}/edit/{id_answer}', 'AnswerController@edit');
    Route::post('/forum/read/{id_question}/update/{id_answer}', 'AnswerController@update');
    Route::get('/forum/read/hapus/{id_answer}', 'AnswerController@destroy');

    Route::get('/forum','QuestionController@index');
    Route::get('/forum/Question/create', 'QuestionController@create');
    Route::post('/forum/Question/store', 'QuestionController@store');
    Route::get('/forum/Question/edit/{id_question}', 'QuestionController@edit');
    Route::post('/forum/Question/update/{id_question}', 'QuestionController@update');
    Route::get('/forum/Question/hapus/{id_question}', 'QuestionController@destroy');

    //file
    Route::get('/fiturfile', 'FileController@index');
    Route::get('/semuafile', 'FileController@pangkalan');
    Route::get('/pangkalanfile', 'FileController@pangkalan');
    Route::get('/fiturfile/tambahfile', 'FileController@tambah');
    Route::post('/fiturfile/simpanfile','FileController@simpan');
    Route::get('/fiturfile/hapusfile/{id}','FileController@hapus');
    Route::get('/fiturfile/downloadfile/{id}', 'FileController@downloadFile');
    Route::get('/fiturfile/detailfile/{id}', 'FileController@detailFile');
    Route::get('/fiturfile/carifile' , 'FileController@cariFile');

    Route::group(['middleware' => 'admin'], function () {
        Route::get('/report', 'ReportController@index');
        Route::get('/report/edit/{id}', 'ReportController@edit');
        Route::post('/report/update/{id}', 'ReportController@update');
        Route::get('/report/hapus/{id}', 'ReportController@destroy');
        Route::resource('user', 'UserController', ['except' => ['show']]);
    });
});






