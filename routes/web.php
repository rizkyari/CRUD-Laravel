<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'home']);

Route::get('/view', [HomeController::class, 'view']);

Route::get('/edit/{id}', [HomeController::class, 'edit']);

Route::post('/store', [HomeController::class, 'store']);

Route::patch('/update/{id}',[HomeController::class, 'update']);

Route::delete("/delete/{id}", [HomeController::class, 'delete']);
