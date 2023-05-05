<?php

use App\Http\Controllers\searchController;
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

Route::get('/', [searchController::class, 'show'])->name('products');
// Route::get('/table', [searchController::class, 'getData'])->name('table');
// Route::get('/addproduct', [searchController::class, 'addproduct'])->name('addproduct');
Route::post('allposts', [searchController::class, 'getData'])->name('allposts');
