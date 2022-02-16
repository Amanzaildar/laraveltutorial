<?php

use App\Models\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\Checkstatus;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('articles',[ArticlesController::class,'show']);
Route::post('article',[ArticlesController::class,'create']);
Route::get('product/{id}',[ProductController::class,'show'])->middleware('Checkstatus');
Route::post('product',[ProductController::class,'create']);
