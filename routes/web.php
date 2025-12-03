<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/create', [BookController::class, 'create']);
Route::post('/book', [BookController::class, 'store']);
Route::get('/{book}', [BookController::class, 'show']);
Route::get('/{book}/edit', [BookController::class, 'edit']);
Route::put('/{book}', [BookController::class,' update']);
Route::delete('/{book}', [BookController::class, 'delete']);