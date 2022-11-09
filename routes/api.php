<?php

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
Route::get('/main_categories', [App\Http\Controllers\CategoryController::class, "mainCategory"]);
Route::get('/sub_categories/{id}', [App\Http\Controllers\CategoryController::class, "subCategory"])->where('id', '[0-9]+');
Route::get('/sub_Options/{id}', [App\Http\Controllers\OptionController::class, "subOption"])->where('id', '[0-9]+');
Route::post('/filter', [App\Http\Controllers\FilterController::class, "filter"]);