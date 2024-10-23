<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('notes', [NoteController::class, 'index'])->name('notes.index');
Route::get('create', [NoteController::class, 'create'])->name('notes.create');
Route::post('create', [NoteController::class, 'store'])->name('notes.create');
Route::get('show/{id}', [NoteController::class, 'show'])->name('notes.show');
Route::get('delete/{id}', [NoteController::class, 'destroy'])->name('notes.delete');