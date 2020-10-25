<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ProductsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function () {

    #region Products
    Route::get('/show', [ProductsController::class, 'show'])->name('AllProducts');
    Route::post('/create', [ProductsController::class, 'store'])->name('CreateProducts');
    Route::patch('/edit/{product}', [ProductsController::class, 'update'])->name('UpdateProducts');
    Route::delete('/delete/{product}', [ProductsController::class, 'destroy'])->name('DeleteProducts');
    #end region

});
