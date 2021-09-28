<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use GuzzleHttp\Psr7\Request;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/paperjobs/{newspaper}/{date}', [HomeController::class, 'paperjob']);
Route::get('/showjob/{id}', [HomeController::class, 'showjob']);

Route::resource('jobs', JobController::class)->middleware('auth');

Route::view('home', 'home')->middleware('auth');

Route::get('/searchbydate', [HomeController::class, 'searchbydate']);

Route::get('profile', function ($id) {
})->name('profile');
