<?php

use App\Http\Controllers\CamionerosController;
use Illuminate\Support\Facades\Route;


Route::get('camionero/listar', [CamionerosController::class, 'index'])->name('camionero.index');
Route::get('camionero/create', [CamionerosController::class, 'create']);
Route::post('camionero/store', [CamionerosController::class, 'store'])->name('camionero.store');
Route::get('camionero/{camionero}', [CamionerosController::class, 'show'])->name('camionero.show');
Route::get('camionero/{camionero}/editar', [CamionerosController::class, 'edit'])->name('camionero.edit');
Route::put('camionero/{camionero}', [CamionerosController::class, 'update'])->name('camionero.update');
Route::delete('camionero/{camionero}', [CamionerosController::class, 'destroy'])->name('camionero.destroy');