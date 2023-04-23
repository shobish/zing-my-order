<?php

use App\Http\Controllers\Dropcontroller;
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

// Route::get('/', [Dropcontroller::class, 'index']);
Route::get('/', [Dropcontroller::class, 'product']);
Route::get('/list', [Dropcontroller::class, 'productList']);
Route::get('/price', [Dropcontroller::class, 'productPrice']);
