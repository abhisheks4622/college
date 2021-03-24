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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/student/create', 'App\Http\Controllers\StudentController@create');
Route::post('/student/submit', 'App\Http\Controllers\StudentController@submit');
Route::get('/students', 'App\Http\Controllers\StudentController@view');
Route::get('/student/edit/{id}', 'App\Http\Controllers\StudentController@edit');
Route::put('/student/update', 'App\Http\Controllers\StudentController@update');
Route::delete('/student/delete/{id}', 'App\Http\Controllers\StudentController@destroy');
Route::post('/student/delete', 'App\Http\Controllers\StudentController@destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
