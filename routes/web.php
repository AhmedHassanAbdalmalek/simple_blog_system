<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user1controller;
use App\Http\Controllers\postcontroller;


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
Route::get('ID/{id}', function ($id) {
echo $id;
    //return view('welcome');
});
Route::get('user/{name?}', function ($name='testname') {
echo $name;
    //return view('welcome');
});

Route::resource('age', user1controller::class);







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Posts',[PostController::class,'index']);
