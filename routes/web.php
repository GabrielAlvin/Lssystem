<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TesteController;

Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('painel');

Route::group(['middleware' => 'auth:web'], function () {
    // Sitema de teste
    Route::get('/sistemateste', [TesteController::class, 'index'])->name('index_sistemateste');
    Route::get('/sistemateste/show', [TesteController::class, 'show'])->name('show_sistemateste');
    Route::post('/sistemateste/create', [TesteController::class, 'create'])->name('create_sistemateste');
    Route::post('/sistemateste/edit', [TesteController::class, 'edit'])->name('edit_sistemateste');
    Route::post('/sistemateste/destroy', [TesteController::class, 'destroy'])->name('destroy_sistemateste');
    Route::get('/sistemateste/tabela', [TesteController::class, 'tabela'])->name('tabela_sistemateste');
    Route::get('/sistemateste/perfil', [TesteController::class, 'perfil'])->name('perfil_sistemateste');
    Route::get('/sistemateste/documentos', [TesteController::class, 'documentos'])->name('documentos_sistemateste');
});