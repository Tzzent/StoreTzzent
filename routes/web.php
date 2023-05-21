<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProductsController::class, 'index']);
Route::get('/products', [ProductsController::class, 'index']);
Route::post('/products', [ProductsController::class, 'store']);
Route::post('/products/delete', [ProductsController::class, 'delete']);
Route::get('/products/create', [ProductsController::class, 'create']);
Route::get('/products/filter', [ProductsController::class, 'filter']);

Route::get('/categories', [CategoriesController::class, 'index']);
Route::post('/categories/create', [CategoriesController::class, 'create']);
Route::post('/categories/delete', [CategoriesController::class, 'delete']);
