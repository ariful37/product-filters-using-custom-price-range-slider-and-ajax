<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductFilterController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[ProductFilterController::class,'all_products'])->name('all.products');
Route::get('/search-product',[ProductFilterController::class,'search_products'])->name('search.products');
Route::get('/sort-by',[ProductFilterController::class,'sort_by'])->name('sort.by');
