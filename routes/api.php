<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('post', [PostController::class, 'postList']);
Route::get('category', [CategoryController::class, 'categoryList']);
Route::get('category/{id}', [CategoryController::class, 'categoryDetails']);
