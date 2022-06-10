<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ConsultController;
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

Route::get('/consult', [ConsultController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
