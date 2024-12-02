<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/games', [GameController::class, 'index'])->name('games.index');
Route::get('/games/{Year}', [GameController::class, 'show'])->name('games.show');
Route::get('/games/search', [GameController::class, 'searchByName'])->name('games.search');
