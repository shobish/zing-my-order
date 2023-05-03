<?php

use App\Http\Controllers\multiselectionController;
use App\Http\Controllers\selectionController;

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

Route::get('/', function () {
    return view('welcome');
});
//single selection
Route::get('/', [selectionController::class, 'fromDb']);
Route::post('/addselection', [selectionController::class, 'addSelection']);
Route::get('/deleteitems/{id}', [selectionController::class, 'deleteItems']);
Route::get('/edititems/{id}', [selectionController::class, 'editItems']);
Route::post('/updateitem/{id}', [selectionController::class, 'updatefunction']);


//multiple selection
Route::get('/multiselection', [multiselectionController::class, 'multiview']);
Route::post('/multiselection', [multiselectionController::class, 'saveMultiSelection']);
