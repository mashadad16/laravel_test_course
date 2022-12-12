<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Route::get('/raiting', function () {
    return view('raiting');
});*/

Route::get('/raiting', ['App\Http\Controllers\RaitingController', 'show']);

Route::get('/sw', ['App\Http\Controllers\StudentsWhatchController', 'show']);

Route::get('/lw', ['App\Http\Controllers\LessonsWhatchController', 'show']);

