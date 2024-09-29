<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TrainsController as TrainController;

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
    return view('home');
})->name('homepage');

Route::get('/trains', [TrainsController::class, 'index'])->name('trains');