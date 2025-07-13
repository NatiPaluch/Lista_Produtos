<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::resource('produtos', ProdutoController::class);

Route::resource('categorias', CategoriaController::class);