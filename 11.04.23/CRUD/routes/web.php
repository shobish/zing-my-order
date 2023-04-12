<?php

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



Route::get('/', [studentController::class, 'students']);
Route::post('/', [studentController::class, 'addStudent']);
Route::get('/edit-Student/{id}', [studentController::class, 'editStudent']);
Route::post('/update-Student/{id}', [studentController::class, 'updateStudent']);
Route::get('/delete-Student/{id}', [studentController::class, 'deleteStudent']);
Route::get('/back', [studentController::class, 'back']);
