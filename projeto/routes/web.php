<?php

use App\Http\Controllers\ShowsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shows', [ShowsController::class, 'index'])->name('listar_shows');
Route::get('/shows/criar', [ShowsController::class, 'create'])->name('form_criar_show');
Route::post('/shows/criar', [ShowsController::class, 'store'])->name('criar_show');
Route::delete('/shows/destroy/{shows}', [ShowsController::class, 'destroy'])->name('deletar_show');
Route::get('/shows/{shows}/editar', [ShowsController::class, 'edit'])->name('form_editar');
Route::put('/shows/{shows}/editar', [ShowsController::class, 'update'])->name('atualizar_show');

