<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CreditoController;

use Illuminate\Support\Facades\Route;



Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/movie/list', [MovieController::class, 'list'])->name('movie.list');

Route::post('/movie', [MovieController::class, 'store'])->name('movie.store');

Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');

Route::get('/credito', [CreditoController::class, 'credito'])->name('credito');
