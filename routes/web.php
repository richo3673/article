<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RatingController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [ArticleController::class, 'articleIndex'])->name('articleIndex');
Route::get('/{id}', [ArticleController::class, 'showArticle'])->name('showArticle');
//Route::post('/{id}/rate', [RatingController::class, 'addRating'])->name('rate');
