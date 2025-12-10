<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


Route::get('/', [BookController::class, 'index']);
Route::get('/create', [BookController::class, 'create']);
Route::post('/book', [BookController::class, 'store']);
Route::get('/{book}', [BookController::class, 'show'])->where('book', '[0-9]+');
Route::get('/{book}/edit', [BookController::class, 'edit']);
Route::put('/{book}', [BookController::class,'update']);
Route::delete('/{book}', [BookController::class, 'destroy']);
Route::get('/stats_by_year', [BookController::class, 'statsByYear']);
Route::get('/stats_by_authors', [BookController::class, 'statsByAuthors']);
Route::get('/stats_by_language', [BookController::class, 'statsByLanguage']);