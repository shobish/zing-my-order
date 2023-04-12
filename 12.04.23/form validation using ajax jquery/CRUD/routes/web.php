<?php

use App\Http\Controllers\ajax;
use App\Http\Controllers\ajaxController;
use App\Http\Controllers\studentController;
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




Route::get('/view', [ajaxController::class, 'view']);
Route::post('/ajax', [ajaxController::class, 'add']);
