<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\formController;
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

Route::get('/', [adminController::class, 'view']);
Route::get('/getdata', [adminController::class, 'list']);
Route::post('/user-data', [adminController::class, 'addUser']);
Route::delete('/delete-user/{id}', [adminController::class, 'deleteUser']);
Route::get('/edit-user/{id}', [adminController::class, 'editUser']);
Route::PUT('/update-user/{id}', [adminController::class, 'updateUser']);


//Route::get('/', [formController::class, 'view']);
