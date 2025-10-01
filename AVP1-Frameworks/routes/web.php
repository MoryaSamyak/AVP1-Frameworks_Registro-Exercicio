<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exercicios', [App\Http\Controllers\ExercicioController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('exercicios');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/exercicio', App\Http\Controllers\ExercicioController::class);
});

require __DIR__.'/auth.php';
