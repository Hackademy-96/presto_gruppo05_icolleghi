<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [PublicController::class, 'homePage'])->name('homePage');

Route::get('/article/create', [ArticleController::class, 'create_article'])->middleware('auth')->name('create_article');

Route::get('/categoria/{category}', [PublicController::class, 'categoryShow'])->name('categoryShow');

