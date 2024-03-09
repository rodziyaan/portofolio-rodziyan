<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Contact;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeController2;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Welcome;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'show']);
Route::get('/About', [AboutController::class, 'show']);
Route::get('/Project', [ProjectController::class, 'show']);
Route::get('/Contact', [Contact::class, 'show']);

