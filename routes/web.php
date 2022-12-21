<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, "show"])->name('home');
Route::get('/activities', [ActivityController::class, 'show'])->name('activities');
Route::get('/events', [EventController::class, 'show'])->name('events');
