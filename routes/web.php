<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


Route::get('/', [BookController::class, 'index']);
Route::get('/book/create', [BookController::class, 'create']);
Route::post('/book', [BookController::class, 'store']);
Route::get('/book/{book}', [BookController::class, 'show']);
Route::get('/book/{book}/edit', [BookController::class, 'edit']);
Route::put('/book/{book}', [BookController::class,'update']);
Route::delete('/{book}', [BookController::class, 'destroy']);
Route::get('/stats_by_year', [BookController::class, 'statsByYear']);
Route::get('/stats_by_authors', [BookController::class, 'statsByAuthors']);
Route::get('/stats_by_language', [BookController::class, 'statsByLanguage']);