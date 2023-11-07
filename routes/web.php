<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

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

Route::get('/dettaglio/annuncio/{article}', [ArticleController::class, 'showArticle'])->name('showArticle');

Route::get('/index', [ArticleController::class, 'indexArticle'])->name('indexArticle');

Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('indexRevisor');

Route::patch('/accetta/annuncio/{article}', [RevisorController::class, 'acceptArticle'])->name('revisor.accept_article');

Route::patch('/rifiuta/annuncio/{article}', [RevisorController::class, 'rejectArticle'])->name('revisor.reject_article');

// richiesta per diventare revisore 
Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

// rende l\'utente revisore

Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');


