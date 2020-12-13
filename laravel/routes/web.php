<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;

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

Route::get('/', [NavController::class, 'welcome']);
Route::get('/mode_de_jeux', [NavController::class, 'choose']);
Route::get('/les_regles', [NavController::class, 'rules']);
Route::get('/admin', [NavController::class, 'admin']);

Route::post('/jeux', [NavController::class, 'jeux']);
Route::post('/login', [ActionController::class, 'login']);

