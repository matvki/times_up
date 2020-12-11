<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActionController;
use App\Http\Controllers\NavController;
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

Route::get('/adminer', function () {
    return redirect('/adminer.php');
});

Route::get('/option ', [NavController::class, 'option']);

Route::post('/jouer', [NavController::class, 'play']);





